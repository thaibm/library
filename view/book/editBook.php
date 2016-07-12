<!-- modal edit book -->
<?php
include '../../model/book.php';
$book = new Book();

$formEditBook = $book->getBookById($_POST['id']);
while($currentBook = mysqli_fetch_array($formEditBook)){
    
?>

<div class="form-group">
    <label for="edit-book-name">Book's name:</label>
    <bookId style="display: none;"><?php echo $_POST['id']; ?></bookId>
    <input id="edit-book-name" type="text" placeholder="Book's name.." class="form-control" value="<?php echo $currentBook['name'];?>" autofocus>
    <p id="invalidBookNameEdit" style="color: red; display: none;">*Invalid book's name!</p>
</div>
<div class="form-group">
    <label for="edit-select-category">Category:</label>
    <select id="edit-select-category" name="category" class="form-control" value="<?php echo $currentBook['category_id'];?>">
        <?php
        $conn = $book->connectDatabase();
        $sql = 'select * from categories';
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_array($result)) {
            echo '<option value="' . $row['id'] . '"';
            if($row['id'] == $currentBook['category_id']){echo 'selected';}
            echo '>' . $row['name'] . '</option>';
        }
        ?>
    </select>
</div>
<div class="form-group">
    <label for="edit-select-author">Author:</label>
    <select id="edit-select-author" name="author" class="form-control">
        <?php
        $sql = 'select * from authors';
        $result = mysqli_query($conn, $sql);

        while ($row = mysqli_fetch_array($result)) {
            echo '<option value="' . $row['id'] . '"';
            if($row['id'] == $currentBook['author_id']){echo 'selected';}
            echo '>' . $row['full_name'] . '</option>';
        }
        mysqli_close($conn);
        ?>
    </select>
</div>
<div class="form-group">
    <label for="edit-published-year">Published year:</label>
    <input id="edit-published-year" type="number" maxlength="4" placeholder="Published year.." class="form-control" value="<?php echo $currentBook['published_year'];?>" >
    <p id="invalidPublishedYearEdit" style="color: red; display: none;">*Invalid published year!</p>
</div>
<?php } ?>