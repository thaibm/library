<?php
/**
 * Created by PhpStorm.
 * User: Thaibm
 * Date: 7/9/2016
 * Time: 3:50 PM
 */
include '../../model/category.php';
$category = new Category();
$category->deleteCategory($_POST['id']);