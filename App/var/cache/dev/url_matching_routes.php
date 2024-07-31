<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\MainController::home'], null, null, null, false, false, null]],
        '/contact-us' => [[['_route' => 'contact', '_controller' => 'App\\Controller\\MainController::contact'], null, null, null, false, false, null]],
        '/gallerie' => [[['_route' => 'gallerie', '_controller' => 'App\\Controller\\MainController::gallerie'], null, null, null, false, false, null]],
        '/disponibilites' => [[['_route' => 'disponibilites', '_controller' => 'App\\Controller\\MainController::disponibilites'], null, null, null, false, false, null]],
        '/en-savoir-plus' => [[['_route' => 'en-savoir-plus', '_controller' => 'App\\Controller\\MainController::enSavoirPlus'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [
            [['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
