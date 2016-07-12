/**
 * Created by Thaibm on 7/8/2016.
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

    fetch_data('#list-books', 'controller/book/list-book.php');

    //function add book
    $(document).on('click', '#btn-add-book', function () {
        var name = $('#book-name').val();
        var category_id = $('#select-category').val();
        var author_id = $('#select-author').val();
        var published_year = $('#published-year').val();
        $('#invalidBookName').fadeOut();
        $('#invalidPublishedYear').fadeOut();
        var date = new Date();
        var year = date.getFullYear();
        if (name != '' && published_year != '' && published_year <= year) {
            $.ajax({
                url: "controller/book/addBook.php",
                method: "POST",
                data: {name: name, category_id: category_id, author_id: author_id, published_year: published_year},
                dataType: "text",
                success: function (data) {
                    $('#addBookModal').slideUp();
                    $('.modal-backdrop').fadeOut();
                    fetch_data('#list-books', 'controller/book/list-Book.php');
                }
            });
        } else {
            if (name == '') {
                $('#invalidBookName').fadeIn();
            }
            if (published_year == '' || published_year > year) {
                $('#invalidPublishedYear').fadeIn();
            }
        }

    });
//    function delete book
    $(document).on('click', 'i.delete-book', function () {
        var id = $(this).parent().siblings('.book-id').text();
        console.log(id);
        if (confirm("Are you sure you want to delete this?")) {
            $.ajax({
                url: "controller/book/deleteBook.php",
                method: "POST",
                data: {id: id},
                dataType: "text",
                success: function (data) {
                    fetch_data('#list-books', 'controller/book/list-Book.php');
                }
            });
        }

    });

//    function edit book
    //fetch edit book
    $(document).on('click', 'i.edit-book', function () {
        var id = $(this).parent().siblings('.book-id').text();
        $.ajax({
            url: "view/book/editBook.php",
            method: "POST",
            data: {id: id},
            dataType: "text",
            success: function (data) {
                $('#form-edit-book').html(data);
            }
        });
    });
//    edit
    $(document).on('click', '#btn-edit-book', function () {
        var id = $('bookId').text();
        var name = $('#edit-book-name').val();
        var category_id = $('#edit-select-category').val();
        var author_id = $('#edit-select-author').val();
        var published_year = $('#edit-published-year').val();
        $('#invalidBookNameEdit').fadeOut();
        $('#invalidPublishedYearEdit').fadeOut();
        var date = new Date();
        var year = date.getFullYear();
        if (name != '' && published_year != '' && published_year <= year) {
            $.ajax({
                url: "controller/book/editBook.php",
                method: "POST",
                data: {
                    id: id,
                    name: name,
                    category_id: category_id,
                    author_id: author_id,
                    published_year: published_year
                },
                dataType: "text",
                success: function (data) {
                    $('#editBookModal').slideUp();
                    $('.modal-backdrop').fadeOut();
                    fetch_data('#list-books', 'controller/book/list-Book.php');
                }
            });
        } else {
            if (name == '') {
                $('#invalidBookNameEdit').fadeIn();
            }
            if (published_year == '' || published_year > year) {
                $('#invalidPublishedYearEdit').fadeIn();
            }
        }
    })
    //search function
    $(document).on('keyup', '.search-box', function () {
        var type = $('select#filter').val();
        var value = $(this).val();
        $.ajax({
            url: 'controller/book/searchBook.php',
            method: 'POST',
            data: {type: type, value: value},
            dataType: 'text',
            success: function (data) {
                $('#list-books').html(data);
            }
        })
    });
});