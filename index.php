<?php
require_once 'likha/vendor/autoload.php';
require_once 'likha/engine/autoload.php';
require_once 'likha/app.php';

$app = new Likha\App();

$app->addControllers();

$app->start();