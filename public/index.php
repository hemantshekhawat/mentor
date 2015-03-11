<?php

require __DIR__ . '/../vendor/autoload.php';

$app = new Slim\Slim();

$app->get('/', function() {
    $user = User::find(1);
    
    
    echo "<pre>";
    print_r($user);
    exit;
    
    
     $user->username= "Test User";
    $user->save();

    echo "Hello, $user->username!";
});

$app->run();
