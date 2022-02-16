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
        '/viewAccount' => [[['_route' => 'viewAccount', '_controller' => 'App\\Controller\\AccountController::viewAccount'], null, null, null, false, false, null]],
        '/searchAccount' => [[['_route' => 'searchAccount', '_controller' => 'App\\Controller\\AccountController::searchAccount'], null, null, null, false, false, null]],
        '/group/new' => [[['_route' => 'groupGroup_new', '_controller' => 'App\\Controller\\GroupController::new'], null, ['GET' => 2, 'POST' => 3], null, false, false, null]],
        '/home' => [[['_route' => 'group_index', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/new' => [[['_route' => 'Group_new', '_controller' => 'App\\Controller\\HomeController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|wdt/([^/]++)(*:24)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:69)'
                            .'|router(*:82)'
                            .'|exception(?'
                                .'|(*:101)'
                                .'|\\.css(*:114)'
                            .')'
                        .')'
                        .'|(*:124)'
                    .')'
                .')'
                .'|/editAccount/([^/]++)(*:155)'
                .'|/viewAccountSearchResults/([^/]++)(*:197)'
                .'|/group/([^/]++)(?'
                    .'|(*:223)'
                    .'|/edit(*:236)'
                    .'|(*:244)'
                .')'
                .'|/([^/]++)(?'
                    .'|(*:265)'
                    .'|/edit(*:278)'
                    .'|(*:286)'
                .')'
                .'|/publication(*:307)'
                .'|/addPublication(*:330)'
                .'|/deletePublication/([^/]++)(*:365)'
                .'|/updatePublication/([^/]++)(*:400)'
                .'|/registration(*:421)'
                .'|/log(?'
                    .'|in(*:438)'
                    .'|out(*:449)'
                .')'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:486)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        24 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        69 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        82 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        101 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        114 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        124 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        155 => [[['_route' => 'editAccount', '_controller' => 'App\\Controller\\AccountController::editAccount'], ['id'], null, null, false, true, null]],
        197 => [[['_route' => 'viewAccountSearchResults', '_controller' => 'App\\Controller\\AccountController::viewAccountSearchResults'], ['keyword'], null, null, false, true, null]],
        223 => [[['_route' => 'groupGroup_show', '_controller' => 'App\\Controller\\GroupController::show'], ['id'], ['GET' => 2, 'POST' => 1], null, false, true, null]],
        236 => [[['_route' => 'groupgroup_edit', '_controller' => 'App\\Controller\\GroupController::edit'], ['id'], ['GET' => 2, 'POST' => 3], null, false, false, null]],
        244 => [[['_route' => 'groupgroup_delete', '_controller' => 'App\\Controller\\GroupController::delete'], ['id'], ['GET' => 0, 'POST' => 2], null, false, true, null]],
        265 => [[['_route' => 'Group_show', '_controller' => 'App\\Controller\\HomeController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        278 => [[['_route' => 'group_edit', '_controller' => 'App\\Controller\\HomeController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        286 => [[['_route' => 'group_delete', '_controller' => 'App\\Controller\\HomeController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        307 => [[['_route' => 'publication', '_controller' => 'App\\Controller\\PublicationController::index'], [], null, null, false, false, null]],
        330 => [[['_route' => 'add_Publication', '_controller' => 'App\\Controller\\PublicationController::addPublication'], [], null, null, false, false, null]],
        365 => [[['_route' => 'PublicationDelete', '_controller' => 'App\\Controller\\PublicationController::deletePublication'], ['id'], null, null, false, true, null]],
        400 => [[['_route' => 'PublicationUpdate', '_controller' => 'App\\Controller\\PublicationController::updatePublication'], ['id'], null, null, false, true, null]],
        421 => [[['_route' => 'registration', '_controller' => 'App\\Controller\\RegistrationController::index'], [], null, null, false, false, null]],
        438 => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], [], null, null, false, false, null]],
        449 => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], [], null, null, false, false, null]],
        486 => [
            [['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
