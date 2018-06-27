<?php
require_once 'vendor/autoload.php';
require_once 'Likha/Engine/autoload.php';
require_once 'Likha/app.php';

$app = new Likha\App();

$app->addControllers();

$app->start();