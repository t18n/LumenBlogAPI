<?php

$app->get('/', 'LinkController@get');

$app->get('/version', function () use ($app) {
    return $app->version();
});

