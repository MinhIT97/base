<?php

namespace Modules\User\Http\Controllers\Admin;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Support\Facades\Hash;
use Modules\Core\Http\Controllers\ApiController;
use Modules\User\Http\Requests\Admin\AdminLoginRequest;
use Modules\User\Http\Requests\Admin\StoreUserRequest;
use Modules\User\Repositories\Admin\UserRepository;
use Modules\User\Traits\User\AuthTrait;
use Modules\User\Transformers\UserTransformer;
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\Facades\JWTAuth;

class AuthController extends ApiController
{

    use AuthTrait;
    protected $userRepository;
    protected $transformer;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
        $this->transformer    = UserTransformer::class;
        $this->middleware('auth:api', ['except' => ['login']]);
    }

    /**
     * Check admin login
     * return admin
     * @return Renderable
     */
    public function login(AdminLoginRequest $request)
    {

        try {
            $user  = $this->authenticate($request, $this->userRepository);
            $token = JWTAuth::fromUser($user);
        } catch (JWTException $e) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        return $this->response->array([
            'data' => [
                'token'      => $token,
                'token_type' => 'bearer',
                // 'expires_in' => auth('api')->factory()->getTTL() * 60,
            ],
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserRequest $request)
    {
        $user = $this->getAuthenticatedUser();

        $data = $request->all();

        $data['verify_token'] = Hash::make($request->username);

        $user = $this->userRepository->create($data);

        return $this->response->item($user, new $this->transformer);
    }
}
