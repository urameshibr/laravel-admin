<?php /** @var \Illuminate\Routing\Router $router */

/* ##################### Default routes ##################*/
$router->get('/','MainController@index');
$router->get('/admin',['as' => 'home','uses' => 'AdminController@index']);
$router->controllers(['auth' => 'Auth\AuthController','password' => 'Auth\PasswordController',]);
/* #######################################################*/

$router->group(['prefix' => 'admin', 'middleware' => 'auth'], function($router){
    //$router->get('/','AdminController@index');
});
