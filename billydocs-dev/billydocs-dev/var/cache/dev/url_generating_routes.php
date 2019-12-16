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
    'addfile' => [[], ['_controller' => 'App\\Controller\\AddFileController::addFile'], [], [['text', '/addfile']], [], []],
    'contact' => [[], ['_controller' => 'App\\Controller\\ContactController::index'], [], [['text', '/contact.html']], [], []],
    'formulas' => [[], ['_controller' => 'App\\Controller\\FormulasController::index'], [], [['text', '/formules.html']], [], []],
    'home' => [[], ['_controller' => 'App\\Controller\\HomeController::index'], [], [['text', '/']], [], []],
    'editdocument' => [['id'], ['_controller' => 'App\\Controller\\UpdateFile::update'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/file']], [], []],
    'remove_file' => [['id'], ['_controller' => 'App\\Controller\\UpdateFile::delete'], ['id' => '\\d+'], [['text', '/file-remove'], ['variable', '/', '\\d+', 'id', true]], [], []],
    'user_register' => [[], ['_controller' => 'App\\Controller\\UserController::register'], [], [['text', '/inscription.html']], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\UserController::login'], [], [['text', '/connexion.html']], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\UserController::logout'], [], [['text', '/deconnexion.html']], [], []],
    'profil' => [[], ['_controller' => 'App\\Controller\\UserController::profil'], [], [['text', '/profil']], [], []],
    'updatemdp' => [[], ['_controller' => 'App\\Controller\\UserController::updatemdp'], [], [['text', '/updatemdp']], [], []],
    'qr_code_generate' => [['text', 'extension'], ['_controller' => 'Endroid\\QrCodeBundle\\Controller\\GenerateController'], ['text' => '[\\w\\W]+'], [['variable', '.', '[^/]++', 'extension', true], ['variable', '/', '[\\w\\W]+', 'text', true], ['text', '/qr-code']], [], []],
    '2fa_login' => [[], ['_controller' => 'App\\Controller\\UserController::check2fa'], [], [['text', '/2fa']], [], []],
    '2fa_login_check' => [[], [], [], [['text', '/2fa_check']], [], []],
];
