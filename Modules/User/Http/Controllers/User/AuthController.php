<?php

namespace Modules\User\Http\Controllers\User;

use Illuminate\Support\Facades\Hash;
use Modules\Core\Http\Controllers\ApiController;
use Modules\User\Http\Requests\User\StoreUserRequest;
use Modules\User\Http\Requests\User\UserLoginRequest;
use Modules\User\Repositories\Admin\UserRepository;
use Modules\User\Traits\User\AuthTrait;
use Modules\User\Transformers\UserTransformer;
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\Facades\JWTAuth;

class AuthController extends ApiController
{

    use AuthTrait;
    protected $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
        $this->transformer    = UserTransformer::class;
        // $this->middleware('auth:api', ['except' => ['login']]);
    }

    /**
     * Check User login
     * return User
     * @return User
     */
    public function login(UserLoginRequest $request)
    {

        try {
            $user  = $this->authenticate($request, $this->userRepository);
            $token = JWTAuth::fromUser($user);
        } catch (JWTException $e) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        return $this->response->array([
            'token'      => $token,
            'token_type' => 'bearer',
            'expires_in' => auth('api')->factory()->getTTL() * 60,
        ]);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return User
     */
    public function store(StoreUserRequest $request)
    {
        $user = $this->getAuthenticatedUser();

        $data = $request->all();

        $data['verify_token'] = Hash::make($request->username);

        $user = $this->userRepository->create($data);

        return $this->response->item($user, new $this->transformer);
    }

    /**
     * Info User
     * @return User
     */
    public function me()
    {
        $user = $this->getAuthenticatedUser();

        return $this->response->item($user, new $this->transformer);
    }

}
