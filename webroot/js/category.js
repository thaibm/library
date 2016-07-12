/**
 * Created by Thaibm on 7/9/2016.
 */
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
    fetch_data('#list-categories', 'controller/category/list-category.php');

    //add category
    $(document).on('click', '#btn-add-category', function () {
        var name = $('#category-name').val();
        if(name != '') {
            $.ajax({
                url: "controller/category/addCategory.php",
                method: "POST",
                data: {name: name},
                dataType: "text",
                success: function (data) {
                    fetch_data('#list-categories', 'controller/category/list-category.php');
                }
            });
        }else{
            
        }
    });
    //delete category
    $(document).on('click', 'i.delete-category', function () {
        var id = $(this).parent().siblings('.category-id').text();
        if (confirm("Are you sure you want to delete this?")) {
            $.ajax({
                url: "controller/category/deleteCategory.php",
                method: "POST",
                data: {id: id},
                dataType: "text",
                success: function (data) {
                    fetch_data('#list-categories', 'controller/category/list-category.php');
                }
            });
        }
    });
    //edit form
    $(document).on('click', 'i.edit-category', function () {
        var id = $(this).parent().siblings('.category-id').text();
        $.ajax({
            url: "view/category/editCategory.php",
            method: "POST",
            data: {id:id},
            dataType: "text",
            success: function (data) {
                $('#form-edit-category').html(data);
            }
        });
    });
    //edit function
    $(document).on('click', '#btn-edit-category', function () {
        var id = $('categoryId').text();
        var name = $('#edit-category-name').val();
        $.ajax({
            url: "controller/category/editCategory.php",
            method: "POST",
            data: {id:id, name:name},
            dataType: "text",
            success: function (data) {
                fetch_data('#list-categories', 'controller/category/list-category.php');
            }
        });
    })

});