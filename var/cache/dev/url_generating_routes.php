<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    'insert' => [[], ['_controller' => 'App\\Controller\\AdminController::insert'], [], [['text', '/admin/insert']], [], []],
    'update' => [['id'], ['_controller' => 'App\\Controller\\AdminController::update'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/update']], [], []],
    'delete' => [['id'], ['_controller' => 'App\\Controller\\AdminController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/delete']], [], []],
    'error' => [[], ['_controller' => 'App\\Controller\\ErrorController::show'], [], [['text', '/error']], [], []],
    'liste' => [[], ['_controller' => 'App\\Controller\\ListeProduitsController::index'], [], [['text', '/liste']], [], []],
    'distributeurs' => [[], ['_controller' => 'App\\Controller\\ListeProduitsController::listedistributeur'], [], [['text', '/distrib']], [], []],
    'eager' => [[], ['_controller' => 'App\\Controller\\ListeProduitsController::eager'], [], [['text', '/eager']], [], []],
    'apitest' => [[], ['_controller' => 'App\\Controller\\ListeProduitsController::apiTest'], [], [['text', '/apitest']], [], []],
    'mail' => [[], ['_controller' => 'App\\Controller\\MailController::index'], [], [['text', '/mail']], [], []],
    'register' => [[], ['_controller' => 'App\\Controller\\RegisterController::register'], [], [['text', '/register']], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], []],
    'test' => [[], ['_controller' => 'App\\Controller\\TestController::index'], [], [['text', '/test']], [], []],
    'hello' => [['age', 'nom', 'prenom'], ['prenom' => '', '_controller' => 'App\\Controller\\TestController::hello'], ['nom' => '[a-z]{2,50}'], [['variable', '/', '[^/]++', 'prenom', true], ['variable', '/', '[a-z]{2,50}', 'nom', true], ['variable', '/', '[^/]++', 'age', true], ['text', '/hello']], [], []],
    'langue' => [['_locale'], ['_controller' => 'App\\Controller\\TestController::langue'], ['_locale' => 'en|fr|de'], [['variable', '/', 'en|fr|de', '_locale', true], ['text', '/langue']], [], []],
    'index' => [[], ['_controller' => 'App\\Controller\\TestController::index'], [], [['text', '/testroute']], [], []],
];
