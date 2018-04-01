<?php
use Cake\Routing\RouteBuilder;
use Cake\Routing\Router;
use Cake\Routing\Route\DashedRoute;

Router::plugin(
    'Phi',
    ['path' => '/phi'],
    function (RouteBuilder $routes) {
        $routes->fallbacks(DashedRoute::class);
    }
);
