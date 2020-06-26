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
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/utilisateur' => [[['_route' => 'utilisateur', '_controller' => 'App\\Controller\\UtilisateurController::index'], null, null, null, false, false, null]],
        '/home' => [
            [['_route' => 'oc_advert_index', '_controller' => 'App\\Controller\\AdvertController::index'], null, null, null, false, false, null],
            [['_route' => 'oc_platform_home'], null, null, null, false, false, null],
            [['_route' => 'oc_platform_add'], null, null, null, false, false, null],
        ],
        '/add' => [[['_route' => 'oc_advert_add', '_controller' => 'App\\Controller\\AdvertController::add'], null, null, null, false, false, null]],
        '/menu' => [[['_route' => 'oc_advert_menu', '_controller' => 'App\\Controller\\AdvertController::menuAction'], null, null, null, false, false, null]],
        '/account' => [[['_route' => 'account', '_controller' => 'App\\Controller\\AccountController::index'], null, null, null, false, false, null]],
        '/connexion' => [[['_route' => 'connexion', '_controller' => 'App\\Controller\\AccountController::connexion'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'create_account', '_controller' => 'App\\Controller\\AccountController::register'], null, null, null, false, false, null]],
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
                .'|/view(?'
                    .'|/(\\d+)(*:183)'
                    .'|user/([^/]++)(*:204)'
                .')'
                .'|/delete/(\\d+)(*:226)'
                .'|/edit/(\\d+)(*:245)'
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
        183 => [[['_route' => 'oc_platform_view', '_controller' => 'App\\Controller\\AdvertController::view'], ['id'], null, null, false, true, null]],
        204 => [[['_route' => 'oc_account_view', '_controller' => 'App\\Controller\\AccountController::view'], ['id'], null, null, false, true, null]],
        226 => [[['_route' => 'oc_advert_delete', '_controller' => 'App\\Controller\\AdvertController::delete'], ['id'], null, null, false, true, null]],
        245 => [
            [['_route' => 'oc_advert_edit', '_controller' => 'App\\Controller\\AdvertController::edit'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
