<?php
$basePath = dirname(__DIR__);
require_once $basePath . '/app/bootstrap.php';
initialize($basePath, 'home');

$container = SlimConfigHelper::getDefaultJsonContainer();
$app = new Slim\App($container);
$app->get('/',                  'AppModule\Home:defaultPage');
$app->get('/status/{type}',     'AppModule\Home:status');
$app->get('/login',             'AppModule\Auth:login');
$app->get('/fb-callback',       'AppModule\Auth:facebookCallback');
$app->get('/fb-active-save',    'AppModule\Home:fbActiveSave');

if (isTraining()) {
    $app->get('/help',          'AppModule\Help:help');
    $app->get('/help-info',     'AppModule\Help:info');
}

$app->run();
