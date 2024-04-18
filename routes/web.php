<?php

/** @var \Laravel\Lumen\Routing\Router $router */

use App\Http\Controllers\BlogController;

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

$router->get('/blog', 'BlogController@index'); 
$router->post('/blog', 'BlogController@store');
$router->put('/blog/{id}', 'BlogController@update');  
$router->delete('/blog/{id}', 'BlogController@destroy');  


$router->get('/', function () use ($router) {
    return $router->app->version();
});
