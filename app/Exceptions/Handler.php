<?php

namespace App\Exceptions;

use Illuminate\Auth\AuthenticationException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Support\Arr;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * The list of the inputs that are never flashed to the session on validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     */
    public function register(): void
    {
        $this->reportable(function (Throwable $e) {
            //
        });
    }

    public function unauthenticated($request, AuthenticationException $exception)
    {

        $guard = Arr::get($exception->guards(), 0);
        switch ($guard)
        {
            case 'admin':
                $login = 'auth.showAdminLoginForm';
                break;

            case 'provider':
                $login = 'provider.showProviderLoginForm';
                break;

            default:
                $login = 'login';
                break;
        }

        return redirect()->guest(route($login));
    }

}
