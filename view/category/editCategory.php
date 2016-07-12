<!-- modal edit book -->
<?php
include '../../model/Category.php';
$Category = new Category();

$formEditCategory = $Category->getCategoryById($_POST['id']);
while($currentCategory = mysqli_fetch_array($formEditCategory)){?>
    <div class="form-group">
        <label for="category-name">Category's Name:</label>
        <categoryId style="display: none;"><?php echo $_POST['id']; ?></categoryId>
        <input id="edit-category-name" type="text" placeholder="Category's name.." class="form-control" value="<?php echo $currentCategory['name'];?>">
    </div>
<?php } ?>