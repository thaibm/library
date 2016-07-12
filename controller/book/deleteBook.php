<?php
/**
 * Created by PhpStorm.
 * User: Thaibm
 * Date: 7/9/2016
 * Time: 8:41 AM
 */
include '../../model/book.php';
$book = new Book();
$book->deleteBook($_POST['id']);