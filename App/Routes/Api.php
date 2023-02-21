<?php

use App\Core\Router;

use App\Controllers\UsersController;
use App\Controllers\AuthController;
use App\Controllers\Data1Controller;
use App\Controllers\PesertaController;
use App\Controllers\ProfileController;
use App\Controllers\RegController;
use App\Middleware\AdminMiddleware;
use App\Middleware\AuthMiddleware;
use App\Middleware\UserMiddleware;

// Router::controller(UsersController::class,[AuthMiddleware::class, AdminMiddleware::class])->group(function () {
//     //for user & admin
//     Router::get('/users', 'index');
//     Router::get('/users/{id}', 'show');

// });
// Router::controller(UsersController::class,[UserMiddleware::class])->group(function () {
//     //user role
//     Router::get('/users', 'index');
//     Router::get('/users/{id}', 'show');
// });

Router::controller(AuthController::class)->group(function () {
    //for all role
    Router::post('/auth/login', 'login');
    Router::post('/auth/register', 'register');
});

Router::controller(RegController::class)->group(function(){
    Router::post('/registrasi','create');
});

Router::controller(ProfileController::class)->group(function(){
    Router::get('/profile/{id}', 'show');
    Router::post('/profile', 'create');
    Router::put('/profile/{id}', 'update');

});

Router::controller(PesertaController::class)->group(function(){
    Router::get('/peserta/{id}', 'show');
    Router::post('/peserta', 'create');
    Router::put('/peserta/{id}', 'update');
});

Router::controller(Data1Controller::class)->group(function(){
    Router::get('/data1/{id}', 'show');
    Router::post('/data1', 'create');
    Router::put('/data1/{id}', 'update');
});


Router::run();