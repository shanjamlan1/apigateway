<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});


$router->get('/users','UserController@index'); //get all users
$router->post('/users', 'UserController@addUser');  // create new user record
$router->get('/users/{id}', 'UserController@showUser'); // get user by id
$router->put('/users/{id}', 'UserController@updateUser'); // update user record
$router->delete('/users/{id}', 'UserController@delete'); // delete record
