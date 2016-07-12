<?php
/**
 * Created by PhpStorm.
 * User: Thaibm
 * Date: 7/9/2016
 * Time: 2:52 PM
 */
include '../../model/author.php';
$author = new Author();
$author->deleteAuthor($_POST['id']);