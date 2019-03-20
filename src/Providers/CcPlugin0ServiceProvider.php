<?php
namespace CcPlugin0\Providers;

use Plenty\Plugin\ServiceProvider;

class CcPlugin0ServiceProvider extends ServiceProvider
{

    /**
     * Register the service provider.
     */

    public function register()
    {
        $this->getApplication()->register(CcPlugin0RouteServiceProvider::class);
    }
}