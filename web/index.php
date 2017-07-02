<?php

// web/index.php
require_once __DIR__.'/../vendor/autoload.php';

$app = new Silex\Application();

// ... definitions
$app->get('/api/first', function() {
    return new \Symfony\Component\HttpFoundation\JsonResponse(['First api response!']);
});

$app->run();
