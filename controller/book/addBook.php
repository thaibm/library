<?php
/**
 * Created by PhpStorm.
 * User: Thaibm
 * Date: 7/8/2016
 * Time: 9:26 PM
 */
include '../../model/book.php';
$book = new Book();

$book->addBook($_POST['name'], $_POST['category_id'], $_POST['author_id'], $_POST['published_year']);