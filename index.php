<?php

date_default_timezone_set("America/New_York");

require_once __DIR__ . '/vendor/autoload.php';

$app = new Silex\Application();

$app['debug']=true;

//PROD URL
$url = 'https://' . $_SERVER['SERVER_NAME'];
//TEST URL
// $url = 'http://localhost:8888/AnthonyBarrettiSiteSILEXBootstrap';
$dir = basename($_SERVER['REQUEST_URI']);
$test = $url == 'http://localhost:8888/AnthonyBarrettiSiteSILEXBootstrap' ? true : false;

$app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/views',
    ));

$app->get('/', function () use ($app, $url, $dir, $test) {
    return $app['twig']->render('home.twig', ['url' => $url, 'dir' => $dir, 'test' => $test]);
});

$app->get('/about', function () use ($app, $url, $dir, $test) {
    return $app['twig']->render('about.twig', ['url' => $url, 'dir' => $dir, 'test' => $test]);
});

$app->get('/cv', function () use ($app, $url, $dir, $test) {
    return $app['twig']->render('cv.twig', ['url' => $url, 'dir' => $dir, 'test' => $test]);
});

$app->get('/contact', function () use ($app, $url, $dir, $test) {
    return $app['twig']->render('contact.twig', ['url' => $url, 'dir' => $dir, 'test' => $test]);
});

$app->run();
