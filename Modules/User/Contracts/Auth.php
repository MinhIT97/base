<?php

namespace Modules\User\Contracts;

use Illuminate\Http\Request;
use Modules\User\Repositories\UserRepository;

interface Auth
{
    public function __construct(UserRepository $repository, AuthValidatorInterface $validator);
    public function authenticate(Request $request);
    public function me(Request $request);
    public function socialLogin(Request $request);
}
