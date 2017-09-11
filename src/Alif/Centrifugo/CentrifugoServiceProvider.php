<?php

namespace Alif\Centrifugo;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Support\ServiceProvider;
use phpcent\Client;

class CentrifugoServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $configPath = __DIR__ . '/../../../config/centrifugo.php';
        if (function_exists('config_path')) {
            $publishPath = config_path('centrifugo.php');
        } else {
            $publishPath = base_path('config/centrifugo.php');
        }
        $this->publishes([$configPath => $publishPath], 'config');
    }

    public function register()
    {
        $configPath = __DIR__ . '/../../../config/centrifugo.php';
        $this->mergeConfigFrom($configPath, 'centrifugo');

        $this->app->singleton('centrifugo', function (Application $app) {
            $client = new Client($app['config']->get('host'));
            $client->setSecret($app['config']->get('secret'));
            return $client;
        });
    }
}