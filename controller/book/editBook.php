<?php
/**
 * Created by PhpStorm.
 * User: Thaibm
 * Date: 7/9/2016
 * Time: 10:28 AM
 */
include '../../model/book.php';
$book = new Book();
$book->editBook(
    $_POST['id'], 
    $_POST['name'],
    $_POST['category_id'], 
    $_POST['author_id'], 
    $_POST['published_year']
);