<?php
if (!file_exists(__DIR__ . '/rb-mysql.php')) {
    die('RedBeanPHP (rb-mysql.php) не найден. Пожалуйста, скачайте его с https://www.redbeanphp.com/ и поместите в папку libs/.');
}
require __DIR__ . '/rb-mysql.php';
R::setup( 'mysql:host=mariadb;dbname=pohy',
        'pohy', 'pohy' );  
session_start();
?>