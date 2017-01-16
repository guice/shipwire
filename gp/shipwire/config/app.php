<?php
/**
 * app.php
 *
 * User: Philip G
 * Date: 10/20/15
 */

return [
    'config' => [
        'sqlite' => __DIR__ . '/../data/shipwire.sqlite',
        'googleMaps' => [
            'apiKey' => 'AIzaSyACCF5bX0fp44kJvEB91dQ3h1G37oQlmh8'
        ],
    ],

    /**
     * Maybe better off with ZendService Manager. A little more organized than this.
     */
    'Http\\Client' => function ($c) {
        return new \GP\Shipwire\Service\Client($c);
    },
    'Sqlite' => function ($c) {
        return new \GP\Shipwire\Service\Sqlite($c);
    },
    'GoogleMaps' => function ($c) {
        return new \GP\Shipwire\Service\GoogleMapsAPI($c);
    },

    // Going to get a little crowded here. Hmm.
    'warehouse:create' => function ($c) {
        return new \GP\Shipwire\Command\Warehouse\Create($c);
    },
    'warehouse:list' => function ($c) {
        return new GP\Shipwire\Command\Warehouse\Listing($c);
    },

    'product:create' => function ($c) {
        return new \GP\Shipwire\Command\Product\Create($c);
    },

    'product:list' => function ($c) {
        return new \GP\Shipwire\Command\Product\Listing($c);
    },

    'order:create' => function ($c) {
        return new \GP\Shipwire\Command\Order\Create($c);
    },
    'commands' => function ($c) {
        return [
            $c['warehouse:create'],
            $c['warehouse:list'],
            $c['product:create'],
            $c['product:list'],
            $c['order:create'],
        ];
    },

    'application' => function ($c) {
        $application = new \Symfony\Component\Console\Application();
        $application->addCommands($c['commands']);
        return $application;
    }
];