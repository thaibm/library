<!-- modal edit book -->
<?php
include '../../model/author.php';
$author = new Author();

$formEditAuthor = $author->getAuthorById($_POST['id']);
while($currentAuthor = mysqli_fetch_array($formEditAuthor)){

    ?>

    <div class="form-group">
        <label for="author-name">Full Name:</label>
        <authorId style="display: none;"><?php echo $_POST['id']; ?></authorId>
        <input id="edit-author-name" type="text" placeholder="Author's name.." class="form-control" value="<?php echo $currentAuthor['full_name'];?>">
        <p id="invalid-author-name-edit" class="invalid">Invalid!</p>
    </div>
    <div class="form-group">
        <label for="edit-author-email">Email:</label>
        <input id="edit-author-email" type="email" placeholder="Author's email.." class="form-control" value="<?php echo $currentAuthor['email'];?>">
        <p id="invalid-email-edit" class="invalid">Invalid email!</p>
        <p id="correct-email-edit" class="correct">Correct email!</p>
    </div>
    <div class="form-group">
        <label for="edit-author-phone-number">Phone number:</label>
        <input id="edit-author-phone-number" type="number" maxlength="11" minlength="10" placeholder="Author's phone number.." class="form-control" value="<?php echo $currentAuthor['phone_number'];?>">
        <p id="invalid-phone-edit" class="invalid">Invalid phone number!</p>
        <p id="correct-phone-edit" class="correct">Correct phone number!</p>
    </div>
    <div class="form-group">
        <label for="edit-author-dob">Date of Birth:</label>
        <input id="edit-author-dob" type="date" class="form-control" value="<?php echo $currentAuthor['birthday'];?>">
        <p id="invalid-birthday-edit" class="invalid">Invalid date!</p>
    </div>
    <div class="form-group">
        <label for="edit-author-address">Address:</label>
        <input id="edit-author-address" type="text" class="form-control" placeholder="Address.." value="<?php echo $currentAuthor['address'];?>">
        <p id="invalid-author-address-edit" class="invalid">Invalid!</p>
    </div>
<?php } ?>

<script>
    
</script>
