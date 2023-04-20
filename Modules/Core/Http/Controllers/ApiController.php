<?php

namespace Modules\Core\Http\Controllers;

use Dingo\Api\Routing\Helpers;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\App;
use League\Fractal\TransformerAbstract;
use Tymon\JWTAuth\Facades\JWTAuth;

class ApiController extends Controller
{
    use Helpers, HandlesAuthorization, AuthorizesRequests;

    protected $upload_directory = 'uploads';

    public function success()
    {
        return $this->response->array(['success' => true]);
    }

    public function simplePaginator(Paginator $paginator, TransformerAbstract $transformer)
    {

        $meta = [
            'pagination' => [
                'per_page'     => $paginator->perPage(),
                'current_page' => $paginator->currentPage(),
            ],
        ];
        return $this->response->collection($paginator->getCollection(), $transformer)->setMeta($meta);
    }

    public function lengthAwarePaginator(LengthAwarePaginator $paginator, TransformerAbstract $transformer)
    {

        $meta = [
            'pagination' => [
                'total'         => $paginator->total(),
                'total_pages'   => ceil($paginator->total() / $paginator->perPage()),
                'per_page'      => $paginator->perPage(),
                'current_page'  => $paginator->currentPage(),
                'last_page'     => $paginator->lastPage(),
                'next_page_url' => $paginator->nextPageUrl(),
                'prev_page_url' => $paginator->previousPageUrl(),
                'from'          => $paginator->firstItem(),
                'to'            => $paginator->lastItem(),
            ],
        ];
        return $this->response->collection($paginator->getCollection(), $transformer)->setMeta($meta);
    }

    public function applySearchFromRequest($query, array $fields, Request $request, $relations = [])
    {
        if ($request->has('search')) {
            $search = $request->get('search');
            if (count($fields)) {
                $query = $query->where(function ($q) use ($fields, $search, $relations) {
                    foreach ($fields as $key => $field) {
                        $q = $q->orWhere($field, 'like', "%{$search}%");
                    }
                    $q = $this->applySearchWithRelationsFromRequest($q, $search, $relations);
                });
            }
        }
        return $query;
    }

    // public function applyOrderByFromRequest($query, Request $request)
    // {
    //     if ($request->has('order_by')) {
    //         $orderBy = (array) json_decode($request->get('order_by'));
    //         if (count($orderBy) > 0) {
    //             foreach ($orderBy as $key => $value) {
    //                 $query = $query->orderBy($key, $value);
    //             }
    //         }
    //     } else {
    //         $query = $query->orderBy('id', 'desc');
    //     }
    //     return $query;
    // }
    public function applyOrderByFromRequest($query, Request $request)
    {
        if ($request->has('order_by') && $request->has('order') && !empty($request->get('order_by')) && !empty($request->get('order'))) {
            $query = $query->orderBy($request->get('order_by'), $request->get('order'));
        } else {
            $query = $query->orderBy('id', 'desc');
        }
        return $query;
    }

    public function applyConstraintsFromRequest($query, Request $request, $keyFilter)
    {
        if ($request->has('constraints')) {
            $constraints = (array) ($request->get('constraints'));

            // Lấy các phần tử trong mảng $constraints theo các khóa đã cho
            $constraintsCollect = collect($constraints)->only($keyFilter)->toArray();

            if (!empty($constraintsCollect)) {
                $query = $query->where($constraintsCollect);
            }
        }

        return $query;
    }

    private function applySearchWithRelationsFromRequest($query, $search, $relations)
    {
        if (count($relations)) {
            foreach ($relations as $key => $value) {
                $query = $query->orWhereHas($key, function ($q) use ($value, $search) {
                    if (count($value)) {
                        $q->where(function ($query) use ($value, $search) {
                            foreach ($value as $item) {
                                $query->orWhere($item, 'like', "%{$search}%");
                            }
                        });
                    }
                });
            }
        }
        return $query;
    }

    public function getAuthenticatedUser()
    {
        $user = JWTAuth::parseToken()->authenticate();
        return $user;
    }

    public function filterRequestData(Request $request, $repository)
    {
        $request_data = collect($request->all());
        if ($request->has('status')) {
            $request_data->pull('status');
        }
        if ($request->has('role')) {
            $request_data->pull('role');
        }
        $schema = collect($repository->model()::schema());

        $request_data_keys = $request_data->keys();
        $schema_keys       = $schema->keys()->toArray();

        // $default_keys = $request_data_keys->diff($schema_keys)->all();
        $default_keys   = App::make($repository->model())->getFillable();
        $default_keys[] = 'password';

        $data            = [];
        $data['default'] = $request_data->filter(function ($value, $key) use ($default_keys) {
            return in_array($key, $default_keys);
        })->toArray();
        $data['schema'] = $request_data->filter(function ($value, $key) use ($schema_keys) {
            return in_array($key, $schema_keys);
        })->toArray();

        return $data;
    }
}
