<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    'home' => [[], ['_controller' => 'App\\Controller\\MainController::home'], [], [['text', '/']], [], [], []],
    'contact' => [[], ['_controller' => 'App\\Controller\\MainController::contact'], [], [['text', '/contact-us']], [], [], []],
    'gallerie' => [[], ['_controller' => 'App\\Controller\\MainController::gallerie'], [], [['text', '/gallerie']], [], [], []],
    'disponibilites' => [[], ['_controller' => 'App\\Controller\\MainController::disponibilites'], [], [['text', '/disponibilites']], [], [], []],
    'en-savoir-plus' => [[], ['_controller' => 'App\\Controller\\MainController::enSavoirPlus'], [], [['text', '/en-savoir-plus']], [], [], []],
    'App\Controller\MainController::home' => [[], ['_controller' => 'App\\Controller\\MainController::home'], [], [['text', '/']], [], [], []],
    'App\Controller\MainController::contact' => [[], ['_controller' => 'App\\Controller\\MainController::contact'], [], [['text', '/contact-us']], [], [], []],
    'App\Controller\MainController::gallerie' => [[], ['_controller' => 'App\\Controller\\MainController::gallerie'], [], [['text', '/gallerie']], [], [], []],
    'App\Controller\MainController::disponibilites' => [[], ['_controller' => 'App\\Controller\\MainController::disponibilites'], [], [['text', '/disponibilites']], [], [], []],
    'App\Controller\MainController::enSavoirPlus' => [[], ['_controller' => 'App\\Controller\\MainController::enSavoirPlus'], [], [['text', '/en-savoir-plus']], [], [], []],
];
