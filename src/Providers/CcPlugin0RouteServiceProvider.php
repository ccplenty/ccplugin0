<?php
namespace CcPlugin0\Providers;

use Plenty\Plugin\RouteServiceProvider;
use Plenty\Plugin\Routing\Router;

class CcPlugin0RouteServiceProvider extends RouteServiceProvider
{
    public function map(Router $router)
    {
        $router->get('cc', 'CcPlugin0\Controllers\ContentController@sayHello');
    }
}