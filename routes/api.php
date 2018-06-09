<?php

use Illuminate\Http\Request;
use Illuminate\Routing\Router;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
/**
 * @var Router $router
 */
$router->group(['prefix', 'cms'], function (Router $router) {
    $router->group(['prefix' => '{site}'], function (Router $router) {
        $router->get('{page}', 'CMSController@page');
    });
});
