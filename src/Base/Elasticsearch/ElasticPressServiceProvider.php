<?php

namespace OWC\OpenPub\Base\Elasticsearch;

use OWC\OpenPub\Base\Foundation\ServiceProvider;

class ElasticPressServiceProvider extends ServiceProvider
{

    /**
     * Register the service provider.
     */
    public function register()
    {

    }

    /**
     * Register the service provider
     * @throws \Exception
     */
    public function boot()
    {
        if ( ! is_plugin_active('elasticpress/elasticpress.php') ) {
            throw new \Exception('Plugin ElasticPress should be installed and active to run this plugin');
        }

        $elasticPress = new ElasticPress($this->plugin->config);
        $this->plugin->loader->addAction('init', $elasticPress, 'setSettings', 10, 1);
        $this->plugin->loader->addAction('init', $elasticPress, 'init', 10, 1);
    }
}
