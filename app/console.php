#!/usr/bin/env php
<?php

// if you don't want to setup permissions the proper way, just uncomment the following PHP line
// read http://symfony.com/doc/current/book/installation.html#configuration-and-setup for more information
//umask(0000);

set_time_limit(0);

require_once __DIR__.'/../autoload.php';
require_once __DIR__ . '/../backend/core/engine/console.php';

use Fork\Core\Console\Application;

$application = new Application();
$application->run($input);