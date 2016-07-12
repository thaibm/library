<?php
/**
 * Created by PhpStorm.
 * User: Thaibm
 * Date: 7/9/2016
 * Time: 3:55 PM
 */
include '../../model/Category.php';
$Category = new Category();
$Category->editCategory($_POST['id'], $_POST['name']);