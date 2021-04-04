<?php

/* $db['db_host'] = 'localhost';
$db['db_user'] = 'root';
$db['db_pass'] = '';
$db['db_name'] = 'cms';

foreach ($db as $key => $value) {
    define(strtoupper($key), $value);
} */

const DB_HOST = 'localhost';
const DB_USER = 'root';
const DB_PASS = '';
const DB_NAME = 'cms';

$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
