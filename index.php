<?php

require 'Routing.php';

$path = trim($_SERVER['REQUEST_URI'], '/');
$path = parse_url($path, PHP_URL_PATH);

Router::get('', 'DefaultController');
Router::get('excerpts', 'ExcerptController');
Router::post('login', 'SecurityController');
Router::post('addExcerpt', 'ExcerptController');

Router::post('register', 'DefaultController');
#Router::post('logout', 'SecurityController');
Router::post('search', 'ExcerptController');
Router::post('favourites', 'DefaultController');
Router::post('users', 'DefaultController');
Router::post('settings', 'DefaultController');
Router::post('chosen-excerpt', 'DefaultController');

Router::run($path);