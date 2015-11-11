<?php
$loader = require __DIR__ . '/vendor/autoload.php';


use Professore\Entity\User;
use Professore\Resource\UserResource;

$app = new \Slim\Slim();
$app->get('/hello/:name', function ($name) {
    echo "Hello, $name";
});

$app->get('/', function () {
    echo "Hello";
});
$user = new User();

$userResource = new UserResource();

$app->get('/users(/(:id)(/))', function($id = null) use ($userResource) {
    echo $userResource->get($id);
});

$app->run();


