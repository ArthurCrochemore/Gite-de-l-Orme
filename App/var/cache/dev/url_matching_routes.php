<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\MainController::home'], null, null, null, false, false, null]],
        '/nous-contacter' => [[['_route' => 'contact_us', '_controller' => 'App\\Controller\\MainController::contacts'], null, null, null, false, false, null]],
        '/voir-les-photos' => [[['_route' => 'see_photos', '_controller' => 'App\\Controller\\MainController::gallerie'], null, null, null, false, false, null]],
        '/quand-sommes-nous-dispo' => [[['_route' => 'when_can_i_book', '_controller' => 'App\\Controller\\MainController::disponibilites'], null, null, null, false, false, null]],
        '/en-apprendre-plus' => [[['_route' => 'learn_more', '_controller' => 'App\\Controller\\MainController::enSavoirPlus'], null, null, null, false, false, null]],
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
