<?php

use yii\helpers\ArrayHelper;

$db =  [
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host=127.0.0.1;dbname=photoschool',
    'username' => 'root',
    'password' => '',
    'charset' => 'utf8',
];

return ArrayHelper::merge($db, require 'db-local.php');
