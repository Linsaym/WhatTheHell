<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckPermissions
{
    public function handle(Request $request, Closure $next, string $requiredPermissions)
    {
        // Проверка аутентификации
        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'Необходимо авторизоваться.');
        }

        // Проверка прав
        $userPermissions = Auth::user()->permissions;

        // Проверка иерархии прав (сравнение строк)
        if (
            $userPermissions === 'absolute' ||
            $userPermissions === $requiredPermissions ||
            (
                $userPermissions === 'high' &&
                in_array($requiredPermissions, ['low', 'medium'])
            ) ||
            (
                $userPermissions === 'medium' &&
                $requiredPermissions === 'low'
            )
        ) {
            return $next($request);
        }

        return redirect()->route('403');
    }
}
