<?php

define('BASE_DIR', dirname(__FILE__, 1));
define('VIEWS', BASE_DIR . '/View');

$_ENV['db']['host'] = 'localhost:3306';
$_ENV['db']['user'] = 'root';
$_ENV['db']['pass'] = '';
$_ENV['db']['database'] = 'form';