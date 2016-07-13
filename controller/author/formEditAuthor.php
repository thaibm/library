<?php
/**
 * Created by PhpStorm.
 * User: Thaibm
 * Date: 7/13/2016
 * Time: 2:09 PM
 */
include '../../model/author.php';
$author = new author();
$formEditAuthor = $author->getAuthorById($_POST['id']);