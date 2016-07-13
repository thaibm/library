<div id="authors" class="tab-pane fade">
    <table class="table table-hover">
        <caption><h1>Author</h1></caption>
        <thead>
        <tr>
            <th>STT</th>
            <th>Full name</th>
            <th>Email</th>
            <th>Phone number</th>
            <th>Birthday</th>
            <th>Address</th>
            <th></th>
            <th></th>
        </tr>
        </thead>
        <tbody id="list-authors">
            
        </tbody>
    </table>
    <!-- Modal add -->
    <button type="button" class="btn btn-add btn-add-author" data-toggle="modal" data-target="#addAuthorModal">Add author</button>
    <div id="addAuthorModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Add author</h4>
                </div>
                <div class="modal-body">
                    <form action="" role="form" onsubmit="">
                        <div class="form-group">
                            <label for="author-name">Full Name:</label>
                            <input id="author-name" type="text" placeholder="Author's name.." class="form-control">
                            <p id="invalid-author-name" class="invalid">Invalid!</p>
                        </div>
                        <div class="form-group">
                            <label for="author-email">Email:</label>
                            <input id="author-email" type="email" placeholder="Author's email.." class="form-control">
                            <p id="invalid-email" class="invalid">Invalid email!</p>
                            <p id="correct-email" class="correct">Correct email!</p>
                        </div>
                        <div class="form-group">
                            <label for="author-phone-number">Phone number:</label>
                            <input id="author-phone-number" type="number" maxlength="11" minlength="10" placeholder="Author's phone number.." class="form-control">
                            <p id="invalid-phone" class="invalid">Invalid phone number!</p>
                            <p id="correct-phone" class="correct">Correct phone number!</p>
                        </div>
                        <div class="form-group">
                            <label for="author-dob">Date of Birth:</label>
                            <input id="author-dob" type="date" class="form-control">
                            <p id="invalid-author-birthday" class="invalid">Invalid date!</p>
                        </div>
                        <div class="form-group">
                            <label for="author-address">Address:</label>
                            <input id="author-address" type="text" class="form-control" placeholder="Address..">
                            <p id="invalid-author-address" class="invalid">Invalid!</p>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button id="btn-add-author" type="submit" class="btn btn-add">Add author</button>
                </div>
            </div>
        </div>
    </div>
    <!--end Modal add -->
    <!-- Modal edit -->
    <div id="editAuthorModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Edit author</h4>
                </div>
                <div class="modal-body">
                    <form action="" role="form" onsubmit="" id="form-edit-author">
                        <!--                        -->
                    </form>
                </div>
                <div class="modal-footer">
                    <button id="btn-edit-author" type="submit" class="btn btn-add">Edit author</button>
                </div>
            </div>
        </div>
    </div>
</div>