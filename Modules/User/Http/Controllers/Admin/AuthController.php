<?php

namespace Modules\User\Http\Controllers\Admin;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Support\Facades\Hash;
use Modules\Core\Http\Controllers\ApiController;
use Modules\User\Http\Requests\Admin\AdminLoginRequest;
use Modules\User\Http\Requests\Admin\StoreUserRequest;
use Modules\User\Repositories\Admin\UserRepository;
use Modules\User\Traits\User\AuthTrait;

class AuthController extends ApiController
{

    use AuthTrait;
    protected $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
        $this->transformer = UserTransformer::class;
    }

    /**
     * Check admin login
     * return admin
     * @return Renderable
     */
    public function login(AdminLoginRequest $request)
    {

        $this->authenticate($request, $this->userRepository);

        return $this->success();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserRequest $request)
    {
        // $user = $this->getAuthenticatedUser();

        $data = $request->all();

        $data['verify_token'] = Hash::make($request->username);

        $user = $this->userRepository->create($data);

        return $this->response->item($user, new $this->transformer);
    }
}
