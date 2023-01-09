<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/admin' => [[['_route' => 'admin', '_controller' => 'App\\Controller\\Admin\\DashboardController::index'], null, null, null, false, false, null]],
        '/favoris' => [[['_route' => 'app_favoris', '_controller' => 'App\\Controller\\FavorisController::index'], null, null, null, false, false, null]],
        '/validation' => [[['_route' => 'validation', '_controller' => 'App\\Controller\\FavorisController::validate'], null, null, null, false, false, null]],
        '/no_valide' => [[['_route' => 'non_valide', '_controller' => 'App\\Controller\\FavorisController::noValidate'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'post', '_controller' => 'App\\Controller\\PostController::index'], null, null, null, false, false, null]],
        '/categories/terrain' => [[['_route' => 'categorie_terrain', '_controller' => 'App\\Controller\\PostController::terrain'], null, null, null, false, false, null]],
        '/categories/prairie' => [[['_route' => 'categorie_prairie', '_controller' => 'App\\Controller\\PostController::prairie'], null, null, null, false, false, null]],
        '/categories/bois' => [[['_route' => 'categorie_bois', '_controller' => 'App\\Controller\\PostController::bois'], null, null, null, false, false, null]],
        '/categories/batiment' => [[['_route' => 'categorie_batiment', '_controller' => 'App\\Controller\\PostController::batiment'], null, null, null, false, false, null]],
        '/categories/exploitation' => [[['_route' => 'categorie_exploitation', '_controller' => 'App\\Controller\\PostController::exploitation'], null, null, null, false, false, null]],
        '/post/new' => [[['_route' => 'post_new', '_controller' => 'App\\Controller\\PostController::create'], null, null, null, false, false, null]],
        '/inscription' => [[['_route' => 'security_registration', '_controller' => 'App\\Controller\\SecurityController::registration'], null, null, null, false, false, null]],
        '/connexion' => [[['_route' => 'security_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/deconnexion' => [[['_route' => 'security_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/favoris/(?'
                    .'|add/([^/]++)(*:193)'
                    .'|remove/([^/]++)(*:216)'
                .')'
                .'|/post/([^/]++)(?'
                    .'|(*:242)'
                    .'|/edit(*:255)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        193 => [[['_route' => 'favoris_add', '_controller' => 'App\\Controller\\FavorisController::add'], ['id'], null, null, false, true, null]],
        216 => [[['_route' => 'favoris_remove', '_controller' => 'App\\Controller\\FavorisController::remove'], ['id'], null, null, false, true, null]],
        242 => [[['_route' => 'post_show', '_controller' => 'App\\Controller\\PostController::show'], ['id'], null, null, false, true, null]],
        255 => [
            [['_route' => 'post_edit', '_controller' => 'App\\Controller\\PostController::edit'], ['id'], null, null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
