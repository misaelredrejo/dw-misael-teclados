<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/categoria' => [[['_route' => 'categoria_index', '_controller' => 'App\\Controller\\CategoriaController::index'], null, ['GET' => 0], null, true, false, null]],
        '/categoria/new' => [[['_route' => 'categoria_new', '_controller' => 'App\\Controller\\CategoriaController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/' => [[['_route' => 'homepage', '_controller' => 'App\\Controller\\DefaultController::index'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'security_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'security_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/teclado' => [[['_route' => 'teclado_index', '_controller' => 'App\\Controller\\TecladoController::index'], null, ['GET' => 0], null, true, false, null]],
        '/teclado/new' => [[['_route' => 'teclado_new', '_controller' => 'App\\Controller\\TecladoController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/register' => [[['_route' => 'user_register', '_controller' => 'App\\Controller\\UserController::register'], null, null, null, false, false, null]],
        '/admin' => [[['_route' => 'easyadmin', '_controller' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Controller\\EasyAdminController::indexAction'], null, null, null, true, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/categoria/([^/]++)(?'
                    .'|(*:64)'
                    .'|/edit(*:76)'
                    .'|(*:83)'
                .')'
                .'|/teclado/([^/]++)(?'
                    .'|(*:111)'
                    .'|/edit(*:124)'
                    .'|(*:132)'
                .')'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        64 => [[['_route' => 'categoria_show', '_controller' => 'App\\Controller\\CategoriaController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        76 => [[['_route' => 'categoria_edit', '_controller' => 'App\\Controller\\CategoriaController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        83 => [[['_route' => 'categoria_delete', '_controller' => 'App\\Controller\\CategoriaController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        111 => [[['_route' => 'teclado_show', '_controller' => 'App\\Controller\\TecladoController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        124 => [[['_route' => 'teclado_edit', '_controller' => 'App\\Controller\\TecladoController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        132 => [
            [['_route' => 'teclado_delete', '_controller' => 'App\\Controller\\TecladoController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
