<?php

$app->get('/', function () use($app) {
    echo "Esta es la pagina de inicio";
});

$app->get('/hello/:name', function ($name) use($app) {
    echo "Hello, $name";
});