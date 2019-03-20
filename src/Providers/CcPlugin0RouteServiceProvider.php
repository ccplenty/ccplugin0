<?php
namespace CcPlugin\Providers;

use Plenty\Plugin\RouteServiceProvider;
use Plenty\Plugin\Routing\Router;

class CcPluginRouteServiceProvider extends RouteServiceProvider
{
    public function map(Router $router)
    {
        $router->get('cc', 'CcPlugin\Controllers\ContentController@sayHello');
    }
}