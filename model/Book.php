<?php
/**
 * Created by PhpStorm.
 * User: Thaibm
 * Date: 7/8/2016
 * Time: 5:06 PM
 */

include '../../lib/config.php';

class Book
{

    public function Book()
    {
    }

    public function connectDatabase()
    {
        $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
        if (!$conn) {
            die('Could not connect: ' . mysqli_error($conn));
        }
        return $conn;
    }

    public function getListBook()
    {
        $conn = $this->connectDatabase();
        $sql = 'select books.id, books.name, cat.name category, aut.full_name author, published_year 
          from books, authors aut, categories cat 
          WHERE books.category_id = cat.id
          AND  books.author_id = aut.id
          ORDER BY books.id';
        $result = mysqli_query($conn, $sql);
        return $result;
    }

    public function addBook($name, $category_id, $author_id, $published_year)
    {
        $conn = $this->connectDatabase();
        $sql = "insert into books (name, category_id, author_id, published_year) VALUE ('" . $name . "', '" . $category_id . "', '" . $author_id . "', '" . $published_year . "')";
        mysqli_query($conn, $sql);
    }

    public function deleteBook($id)
    {
        $conn = $this->connectDatabase();
        $sql = "delete from books WHERE id = '" . $id . "'";
        mysqli_query($conn, $sql);
    }

    public function getBookById($id)
    {
        $conn = $this->connectDatabase();
        $sql = "select books.id, books.name, books.category_id , books.author_id , published_year 
                  from books, authors aut, categories cat 
                  WHERE books.category_id = cat.id
                  AND  books.author_id = aut.id
                  AND  books.id = '" . $id . "'
                  ORDER BY books.id";
        $result = mysqli_query($conn, $sql);
        return $result;
    }

    public function editBook($id, $name, $category_id, $author_id, $published_year)
    {
        $conn = $this->connectDatabase();
        $sql = "update books set name ='" . $name . "', category_id = '" . $category_id . "', author_id = '" . $author_id . "', published_year = '" . $published_year . "' where id = '" . $id . "'";
        mysqli_query($conn, $sql);
    }

    public function searchBook($type, $value)
    {
        $conn = $this->connectDatabase();
        if ($type != 'book'){
            $sql = "select * 
                from (select books.id, books.name, cat.name category, aut.full_name author, published_year 
                      from books, authors aut, categories cat 
                      WHERE books.category_id = cat.id
                      AND  books.author_id = aut.id
                      ORDER BY books.id) book 
                 WHERE " . $type . " like'%" . $value . "%'"; 
        } else{
            $sql = "select * 
                from (select books.id, books.name, cat.name category, aut.full_name author, published_year 
                      from books, authors aut, categories cat 
                      WHERE books.category_id = cat.id
                      AND  books.author_id = aut.id
                      ORDER BY books.id) book 
                 WHERE  name like'%" . $value . "%' 
                 or category like'%" . $value . "%'
                 or author like'%" . $value . "%'
                 or published_year like'%" . $value . "%'";
        }
        
        return mysqli_query($conn, $sql);
    }
}