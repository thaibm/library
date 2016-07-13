<div id="categories" class="tab-pane fade">
    <table class="table table-hover">
        <caption><h1>Categories</h1></caption>
        <thead>
        <tr>
            <th>STT</th>
            <th>Name</th>
            <th></th>
            <th></th>
        </tr>
        </thead>
        <tbody id="list-categories">

        </tbody>
    </table>
    <!-- Modal add -->
    <button type="button" class="btn btn-add btn-add-category" data-toggle="modal" data-target="#addCategoryModal">Add category</button>

    <div id="addCategoryModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Add Category</h4>
                </div>
                <div class="modal-body">
                    <form action="" role="form" onsubmit="">
                        <div class="form-group">
                            <label for="category-name">Category's Name:</label>
                            <input id="category-name" type="text" placeholder="Category's Name.." class="form-control">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button id="btn-add-category" type="submit" class="btn btn-add" data-dismiss="modal">Add Category</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal add -->
    <!-- Modal edit -->
    <div id="editCategoryModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Edit category</h4>
                </div>
                <div class="modal-body">
                    <form action="" role="form" onsubmit="" id="form-edit-category">
                        <!--                        -->
                    </form>
                </div>
                <div class="modal-footer">
                    <button id="btn-edit-category" type="submit" class="btn btn-add" data-dismiss="modal">Edit category</button>
                </div>
            </div>
        </div>
    </div>
</div>