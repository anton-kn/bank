<?php

require 'autoload.php';
require 'Route.php';

/**
 * Запускаем базу данных
 */
$param = require __DIR__ . '../../config/db.php';
$db = pg_connect("host={$param['host']} dbname={$param['dbname']} user={$param['user']} password={$param['password']}");

Route::start();

