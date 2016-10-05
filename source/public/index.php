<?php

use Phalcon\Mvc\Micro;

$app = new Micro();
$app->notFound(function () use ($app) {
    $app->response->setStatusCode(404, 'Not Found')->sendHeaders();
    echo '<h1>404, this page was not found!</h1>';
    echo '<p>Server: ', $_SERVER['HTTP_HOST'], '</p>';
    echo '<p>DIR: ', __DIR__, '</p>';
});
$app->get('/', function () {
    echo '<h1>Welcome to API!</h1>';
    echo '<p>Server: ', $_SERVER['HTTP_HOST'], '</p>';
    echo '<p>DIR: ', __DIR__, '</p>';
});
$app->get('/api/1/{serviceName}/?{responseType:[a-z]*}',
    function (string $serviceName, string $responseType) use ($app) {
        $responseType = $responseType ?: "json";
        if ($responseType == 'json') {
            $array = ["serviceName" => $serviceName];
            return $app->response->setJsonContent($array);
        }
        return $app->response->setContent("Not JSON response type.");
    });
$app->handle();