<?php
/**
 * Created by PhpStorm.
 * User: Thaibm
 * Date: 7/9/2016
 * Time: 3:39 PM
 */
include '../../model/Category.php';
$Category = new Category();
$listCategory = $Category->getListCategory();
$stt = 1;
while ($row = mysqli_fetch_array($listCategory)) {
    echo "<tr>";
    echo "<td class='stt'>" . $stt . "</td>"; $stt++;
    echo "<td class='category-id' style='display: none;'>" . $row['id'] . "</td>";
    echo "<td class='category-name'>" . $row['name'] . "</td>";
    echo "<td class='edit-category' data-toggle=\"modal\" data-target=\"#editCategoryModal\"><i class=\"fa fa-pencil edit edit-category\" aria-hidden=\"true\"></i></td>";
    echo "<td><i class=\"fa fa-trash delete delete-category\" aria-hidden=\"true\"></i></td>";
    echo "</tr>";
}