<?php
/**
 * Created by PhpStorm.
 * User: Thaibm
 * Date: 7/8/2016
 * Time: 5:56 PM
 */
include '../../model/book.php';
$book = new Book();
$listBook = $book->getListBook();
$stt = 1;
while ($row = mysqli_fetch_array($listBook)) {
    echo "<tr>";
    echo "<td class='stt'>" . $stt . "</td>"; $stt ++;
    echo "<td class='book-id' style='display: none;'>" . $row['id'] . "</td>";
    echo "<td class='book-name'>" . $row['name'] . "</td>";
    echo "<td class='book-category'>" . $row['category'] . "</td>";
    echo "<td class='book-author'>" . $row['author'] . "</td>";
    echo "<td class='book-year'>" . $row['published_year'] . "</td>";
    echo "<td class='edit-book' data-toggle=\"modal\" data-target=\"#editBookModal\"><i class=\"fa fa-pencil edit edit-book\" aria-hidden=\"true\"></i></td>";
    echo "<td><i class=\"fa fa-trash delete delete-book\" aria-hidden=\"true\"></i></td>";
    echo "</tr>";
}