<?php 

use function src\slimConfiguration;

use App\Controllers\UserController;

$app = new \Slim\App();

$app->get('/',UserController::class.':getUsers');

$app->get('/user/{id}',UserController::class.':getUserById');

$app->delete('/user/{id}', UserController::class.':deleteUser');

$app->put('/user',UserController::class.':updateUser');

$app->post('/user',UserController::class.':createUser');

$app->run();