/**
 * Created by Thaibm on 7/9/2016.
 */
$(document).ready(function () {
    function fetch_data(id, url) {
        $.ajax({
            url: url,
            method: "POST",
            success: function (data) {
                $(id).html(data);
            }
        });
    }
    fetch_data('#list-authors', 'controller/author/list-author.php');
    
    //add author
    var correctEmail = false;
    var correctPhone = false;
    $(document).on('click', '#btn-add-author', function () {
        var full_name = $('#author-name').val();
        var email = $('#author-email').val();
        var phone_number = $('#author-phone-number').val();
        var birthday = $('#author-dob').val();
        var address = $('#author-address').val();
        if (full_name.length == 0 ){
            $('#invalid-author-name').fadeIn();
            return false;
        }else{
            $('#invalid-author-name').fadeOut();
        }
        if(!correctEmail){
            $('#invalid-email').fadeIn();
            return false;
        }else{
            $('#invalid-email').fadeOut();
        }
        if(!correctPhone){
            $('#invalid-phone').fadeIn();
            return false;
        }else{
            $('#invalid-phone').fadeOut();
        }
        if (address.length == 0){
            $('#invalid-author-address').fadeIn();
            return false;
        }else{
            $('#invalid-author-address').fadeOut();
        }
        if (birthday.length == 0){
            $('#invalid-author-birthday').fadeIn();
            return false;
        }else{
            $('#invalid-author-birthday').fadeOut();
        }
        $.ajax({
            url: "controller/author/addAuthor.php",
            method: "POST",
            data: {full_name: full_name, email: email, phone_number: phone_number, birthday: birthday, address:address},
            dataType: "text",
            success: function (data) {
                $('#addAuthorModal').slideUp();
                $('.modal-backdrop').fadeOut();
                fetch_data('#list-authors', 'controller/author/list-author.php');
            }
        });
    });
    //delete author
    $(document).on('click', 'i.delete-author', function () {
        var id = $(this).parent().siblings('.author-id').text();
        if (confirm("Are you sure you want to delete this?")) {
            $.ajax({
                url: "controller/author/deleteAuthor.php",
                method: "POST",
                data: {id: id},
                dataType: "text",
                success: function (data) {
                    fetch_data('#list-authors', 'controller/author/list-author.php');
                }
            });
        }
    });
    //edit form
    $(document).on('click', 'i.edit-author', function () {
        var id = $(this).parent().siblings('.author-id').text();
        $.ajax({
            url: "view/author/editAuthor.php",
            method: "POST",
            data: {id:id},
            dataType: "text",
            success: function (data) {
                $('#form-edit-author').html(data);
            }
        });
    });
    //edit function
    $(document).on('click', '#btn-edit-author', function () {
        var id = $('authorId').text();
        var full_name = $('#edit-author-name').val();
        var email = $('#edit-author-email').val();
        var phone_number = $('#edit-author-phone-number').val();
        var birthday = $('#edit-author-dob').val();
        var address = $('#edit-author-address').val();
        if (full_name.length == 0 || !correctEmail || !correctPhone || address.length == 0 || birthday.length == 0){
            if (full_name.length == 0 ){
                $('#invalid-author-name-edit').fadeIn();
            }else{
                $('#invalid-author-name-edit').fadeOut();
            }
            if(!correctEmail){
                $('#invalid-email-edit').fadeIn();
            }else{
                $('#invalid-email-edit').fadeOut();
            }
            if(!correctPhone){
                $('#invalid-phone-edit').fadeIn();
            }else{
                $('#invalid-phone-edit').fadeOut();
            }
            if (address.length == 0){
                $('#invalid-author-address-edit').fadeIn();
            }else{
                $('#invalid-author-address-edit').fadeOut();
            }
            if (birthday.length == 0){
                $('#invalid-author-date-edit').fadeIn();
            }else{
                $('#invalid-author-date-edit').fadeOut();
            }
        }else{
            $.ajax({
                url: "controller/author/editAuthor.php",
                method: "POST",
                data: {id:id, full_name:full_name, email:email, phone_number:phone_number, birthday:birthday, address:address},
                dataType: "text",
                success: function (data) {
                    $('#editAuthorModal').slideUp();
                    $('.modal-backdrop').fadeOut();
                    fetch_data('#list-authors', 'controller/author/list-author.php');
                }
            });
        }
    });
    //validate email
    $(document).on('focusout', '#author-email', function () {
        var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        if(!regex.test($('#author-email').val())){
            $('#invalid-email').fadeIn();
            $('#correct-email').fadeOut();
            correctEmail = false;
        }else{
            $('#correct-email').fadeIn();
            $('#invalid-email').fadeOut();
            correctEmail = true;
        }
    });
    $(document).on('keyup', '#author-phone-number', function () {
        var regex = /\(?([0-9]{3})\)?([ .-]?)([0-9]{3})\2([0-9]{4})/;
        if(!regex.test($('#author-phone-number').val()) || $('#author-phone-number').val().length >11 ){
            $('#invalid-phone').fadeIn();
            $('#correct-phone').fadeOut();
            correctPhone = false;
        }else{
            $('#correct-phone').fadeIn();
            $('#invalid-phone').fadeOut();
            correctPhone= true;
        }
    });
    $(document).on('focusout', '#edit-author-email', function () {
        var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        if(!regex.test($('#author-email').val())){
            $('#invalid-email').fadeIn();
            $('#correct-email').fadeOut();
            correctEmail = false;
        }else{
            $('#correct-email').fadeIn();
            $('#invalid-email').fadeOut();
            correctEmail = true;
        }
    });
    $(document).on('keyup', '#edit-author-phone-number', function () {
        var regex = /\(?([0-9]{3})\)?([ .-]?)([0-9]{3})\2([0-9]{4})/;
        if(!regex.test($('#author-phone-number').val()) || $('#author-phone-number').val().length >11 ){
            $('#invalid-phone').fadeIn();
            $('#correct-phone').fadeOut();
            correctPhone = false;
        }else{
            $('#correct-phone').fadeIn();
            $('#invalid-phone').fadeOut();
            correctPhone= true;
        }
    });
});