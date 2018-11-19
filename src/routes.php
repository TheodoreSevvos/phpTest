<?php
$app->get('/', function ($request, $response, $args) {
    return $response->withStatus(200)->write('Hello World!');
});
$app->get('/home', function ($request, $response, $args) {
    $user = new User('testUser', 'testPassword');
    $parsedBody = $user->getPassword().' + '.$user->getUsername();
    return $response->withStatus(200)->write($parsedBody);
});
