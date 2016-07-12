<?php
/**
 * Created by PhpStorm.
 * User: Thaibm
 * Date: 7/9/2016
 * Time: 3:44 PM
 */
include '../../model/category.php';
$Category = new Category();

$Category->addCategory($_POST['name']);