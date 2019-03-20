<?php
namespace CcPlugin\Providers;

use Plenty\Plugin\ServiceProvider;

class CcPluginServiceProvider extends ServiceProvider
{

    /**
     * Register the service provider.
     */

    public function register()
    {
        $this->getApplication()->register(CcPluginRouteServiceProvider::class);
    }
}