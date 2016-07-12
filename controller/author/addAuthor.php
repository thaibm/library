<?php
/**
 * Created by PhpStorm.
 * User: Thaibm
 * Date: 7/9/2016
 * Time: 2:38 PM
 */
include '../../model/author.php';
$author = new author();

$author->addAuthor($_POST['full_name'], $_POST['email'], $_POST['phone_number'], $_POST['birthday'], $_POST['address']);