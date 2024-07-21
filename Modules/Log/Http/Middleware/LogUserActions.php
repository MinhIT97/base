<?php

namespace Modules\Log\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Modules\Log\Entities\Log;

class LogUserActions
{

    public function handle(Request $request, Closure $next)
    {
        $response = $next($request);

        if (Auth::check()) {
            $user = Auth::user();
            $action = $request->route()->getName(); // Lấy tên route như là tên hành động
            $details = [
                'method' => $request->method(),
                'url' => $request->fullUrl(),
                'ip' => $request->ip(),
                'input' => $request->except(['password', 'password_confirmation']), // Loại trừ mật khẩu
            ];

            Log::create([
                'user_id' => $user->id,
                'action' => $action,
                'details' => $details,
            ]);
        }

        return $response;
    }
}
