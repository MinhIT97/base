<?php

namespace Modules\User\Traits\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;
use Symfony\Component\HttpKernel\Exception\ConflictHttpException;

trait AuthTrait
{
    public function authenticate($request, $userRepository)
    {

        $user = $userRepository->findByField('username', $request->get('username'))->first();

        if (!$user) {
            $user = $userRepository->findByField('email', $request->get('username'))->first();
            if (!$user) {
                throw new BadRequestHttpException('User not found');
            }
        }

        if (!Hash::check($request->get('password'), $user->password)) {
            throw new \Exception("Password does not match", 1003);
        }

        return $user;
    }

    public function isEmpty(Request $request)
    {
        if (!$this->repository->findByField('email', $request->get('email'))->isEmpty()) {
            throw new ConflictHttpException('Email already exist', null, 1001);
        }

        if (!$this->repository->findByField('username', $request->get('username'))->isEmpty()) {
            throw new ConflictHttpException('Username already exist', null, 1001);
        }
    }

    public function isExists(Request $request, $id)
    {
        if ($request->has('email')) {
            $user = $this->repository->findWhere([
                'email' => $request->get('email'),
                ['id', '!=', $id],
            ])->first();

            if ($user) {
                throw new ConflictHttpException('Email already exist', null, 1001);
            }
        }
    }

}
