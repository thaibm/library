<?php
/**
 * Created by PhpStorm.
 * User: Thaibm
 * Date: 7/9/2016
 * Time: 3:22 PM
 */
include '../../model/author.php';
$author = new author();
$author->editAuthor($_POST['id'], $_POST['full_name'], $_POST['email'], $_POST['phone_number'], $_POST['birthday'], $_POST['address']);