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

$router->get('/', 'Controller@index');

$router->get('instruction', function () use ($router) {
    // return view('instruction');
    return Cache::get( 'cart' );
});

$router->get('cart/get', 'CartController@get');

$router->get('newsletter/subscribe', 'NewsletterController@subscribe');
