<div id="books" class="tab-pane fade in active">
    <div class="row">
        <div class="col-xs-8 col-xs-offset-2">
            <div class="input-group search-area">
                <div class="input-group-btn search-panel">
                    <select id="filter" type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                        <option value="0">Name</option>
                        <option value="1">Category</option>
                        <option value="2">Author</option>
                        <option value="3">Published year</option>
                        <option value="4">All</option>
                    </select>
                </div>
                <input type="hidden" name="search_param" value="all" id="search_param">
                <input type="text" class="form-control search-box" name="x" placeholder="Search term..." >
                <span class="input-group-btn">
                    <button class="btn btn-default btn-search" type="button"><span
                            class="glyphicon glyphicon-search"></span></button>
                </span>
            </div>
        </div>
    </div>
    <table class="table table-hover">
        <caption><h1>Books</h1></caption>
        <thead>
        <tr>
            <th>STT</th>
            <th>Name</th>
            <th>Categories</th>
            <th>Author</th>
            <th>Published year</th>
            <th></th>
            <th></th>
        </tr>
        </thead>
        <tbody id="list-books">

        </tbody>
    </table>
    <button type="button" class="btn btn-add" data-toggle="modal" data-target="#addBookModal">Add book</button>
    <!-- Modal add book-->
    <div id="addBookModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Add book</h4>
                </div>
                <div class="modal-body">
                    <form action="controller/book/addBook.php" role="form" onsubmit="">
                        <div class="form-group">
                            <label for="book-name">Book's name:</label>
                            <input id="book-name" type="text" placeholder="Book's name.." class="form-control" autofocus>
                            <p id="invalidBookName" style="color: red; display: none;">*Invalid book's name!</p>
                        </div>
                        <div class="form-group">
                            <label for="select-category">Category:</label>
                            <select id="select-category" name="category" class="form-control">
                                <?php
                                include 'lib/config.php';
                                $sql = 'select * from categories';
                                $result = mysqli_query($conn, $sql);
                                while ($row = mysqli_fetch_array($result)) {
                                    echo '<option value="' . $row['id'] . '">' . $row['name'] . '</option>';
                                }
                                mysqli_close($conn);
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="select-author">Author:</label>
                            <select id="select-author" name="author" class="form-control">
                                <?php
                                include 'lib/config.php';
                                $sql = 'select * from authors';
                                $result = mysqli_query($conn, $sql);

                                while ($row = mysqli_fetch_array($result)) {
                                    echo '<option value="' . $row['id'] . '">' . $row['full_name'] . '</option>';
                                }
                                mysqli_close($conn);
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="published-year">Published year:</label>
                            <input id="published-year" type="number" maxlength="4"
                                   placeholder="Published year.." class="form-control">
                            <p id="invalidPublishedYear" style="color: red; display: none;">*Invalid published year!</p>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button id="btn-add-book" type="submit" class="btn btn-add">Add book</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal add book-->
    <!-- Modal edit book-->
    <div id="editBookModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Edit book</h4>
                </div>
                <div class="modal-body">
                    <form action="controller/book/addBook.php" role="form" onsubmit="" id="form-edit-book">
                        <!--                        -->
                    </form>
                </div>
                <div class="modal-footer">
                    <button id="btn-edit-book" type="submit" class="btn btn-add">Edit book</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal edit book-->

</div>

