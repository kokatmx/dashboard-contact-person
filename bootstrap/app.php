<?php

<<<<<<< HEAD
=======
use App\Http\Middleware\CheckUserAccess;
>>>>>>> dev
use App\Http\Middleware\CheckUserDivDeptPos;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__ . '/../routes/web.php',
        commands: __DIR__ . '/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
<<<<<<< HEAD
        $middleware->append(CheckUserDivDeptPos::class);
=======
        $middleware->append(CheckUserAccess::class);
>>>>>>> dev
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
