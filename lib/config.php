<?php
/**
 * Created by PhpStorm.
 * User: Thaibm
 * Date: 7/8/2016
 * Time: 5:07 PM
 */
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'library');

$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
if (!$conn) {
    die('Could not connect: ' . mysqli_error($conn));
}