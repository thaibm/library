<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Book Manager</title>
    <link rel="stylesheet" href="webroot/css/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="webroot/css/style.css">
    <link rel="stylesheet" href="webroot/css/font-awesome-4.6.3/css/font-awesome.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="webroot/js/jquery-1.9.1.min.js"></script>
</head>
<body>
<div class="container">
    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#books" id="book-tab">Books</a></li>
        <li><a data-toggle="tab" href="#authors" id="author-tab">Authors</a></li>
        <li><a data-toggle="tab" href="#categories" id="categories-tab">Categories</a></li>
    </ul>
    
    <div class="tab-content">
        <!--tab-list-book-->
        <?php include 'view/book/list-book.php'; ?>
        <!--tab-list-author-->
        <?php include 'view/author/list-author.php'; ?>
        <!--tab-list-categories-->
        <?php include 'view/category/list-category.php'; ?>
    </div>
</div>

<script src="webroot/css/bootstrap/js/bootstrap.min.js"></script>
<script src="webroot/js/book.js"></script>
<script src="webroot/js/author.js"></script>
<script src="webroot/js/category.js"></script>
<script src="webroot/js/jquery-1.9.1.min.js"></script>
<script></script>
</body>
</html>