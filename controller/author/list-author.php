<?php
/**
 * Created by PhpStorm.
 * User: Thaibm
 * Date: 7/9/2016
 * Time: 2:08 PM
 */
include '../../model/author.php';
$author = new Author();
$result = $author->getListAuthor();
$stt = 1;
while ($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td class='stt'>" . $stt . "</td>"; $stt++;
    echo "<td class='author-id' style='display: none;'>" . $row['id'] . "</td>";
    echo "<td class='author-name'>" . $row['full_name'] . "</td>";
    echo "<td class='author-email'>" . $row['email'] . "</td>";
    echo "<td class='author-phone'>" . $row['phone_number'] . "</td>";
    echo "<td class='author-birthday'>" . $row['birthday'] . "</td>";
    echo "<td class='author-address'>" . $row['address'] . "</td>";
    echo "<td class='' data-toggle=\"modal\" data-target=\"#editAuthorModal\"><i class=\"fa fa-pencil edit edit-author\" aria-hidden=\"true\"></i></td>";
    echo "<td><i class=\"fa fa-trash delete delete-author\" aria-hidden=\"true\"></i></td>";
    echo "</tr>";
}
mysqli_close($conn);
