<?php

return [

    /**
     * Service Providers.
     */
    'providers'    => [
        /**
         * Global providers.
         */
        OWC\OpenPub\Base\PostType\PostTypeServiceProvider::class,
        OWC\OpenPub\Base\Taxonomy\TaxonomyServiceProvider::class,
        OWC\OpenPub\Base\PostsToPosts\PostsToPostsServiceProvider::class,
        OWC\OpenPub\Base\Metabox\MetaboxServiceProvider::class,
        OWC\OpenPub\Base\RestAPI\RestAPIServiceProvider::class,
        OWC\OpenPub\Base\Redirect\RedirectServiceProvider::class,
        /**
         * Providers specific to the admin.
         */
        'admin' => [
            OWC\OpenPub\Base\Admin\Settings\SettingsServiceProvider::class,
            OWC\OpenPub\Base\Elasticsearch\ElasticPressServiceProvider::class,
            // OWC\OpenPub\Base\Admin\InterfaceServiceProvider::class
        ],

        'cli' => [
            OWC\OpenPub\Base\Elasticsearch\ElasticPressServiceProvider::class,
        ]
    ],

    /**
     * Dependencies upon which the plugin relies.
     *
     * Required: type, label
     * Optional: message
     *
     * Type: plugin
     * - Required: file
     * - Optional: version
     *
     * Type: class
     * - Required: name
     */
    'dependencies' => [
        [
            'type'    => 'plugin',
            'label'   => 'RWMB Metabox',
            'version' => '4.14.0',
            'file'    => 'meta-box/meta-box.php'
        ],
        [
            'type'    => 'plugin',
            'label'   => 'Meta Box Group',
            'version' => '1.2.14',
            'file'    => 'metabox-group/meta-box-group.php'
        ],
        [
            'type'  => 'class',
            'label' => '<a href="https://github.com/johnbillion/extended-cpts" target="_blank">Extended CPT library</a>',
            'name'  => 'Extended_CPT'
        ]
    ]

];