<?php
/**
 * Created by PhpStorm.
 * User: Thaibm
 * Date: 7/10/2016
 * Time: 8:18 AM
 */
include '../../model/book.php';
$book = new Book();
switch ($_POST['type']){
    case 0: $type = 'name'; break;
    case 1: $type = 'category'; break;
    case 2: $type = 'author'; break;
    case 3: $type = 'published_year'; break;
    case 4: $type = 'book'; break;
    default: $type = 'book'; break;
}
$result = $book->searchBook($type, $_POST['value']);
if(mysqli_num_rows($result) > 0){
    $stt = 1;
    while ($row = mysqli_fetch_array($result)) {
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
}else{
    echo "Data not found!";
}
