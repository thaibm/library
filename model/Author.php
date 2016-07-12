<?php

/**
 * Created by PhpStorm.
 * User: Thaibm
 * Date: 7/8/2016
 * Time: 5:07 PM
 */
include '../../lib/config.php';

class Author
{
    public function Author(){
    }

    public function connectDatabase(){
        $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
        if (!$conn){
            die('Could not connect: '.mysqli_error($conn));
        }
        return $conn;
    }

    public function getListAuthor(){
        $conn = $this->connectDatabase();
        $sql = 'select * from authors aut ';
        $result = mysqli_query($conn, $sql);
        return $result;
    }
    public function addAuthor($full_name, $email, $phone_number, $birthday, $address){
        $conn = $this->connectDatabase();
        $sql = "insert into authors (full_name, email, phone_number, birthday, address) VALUE ('" . $full_name . "', '" . $email . "', '" . $phone_number . "', '" . $birthday ."', '" . $address . "')";
        mysqli_query($conn, $sql);
    }
    public function deleteAuthor($id){
        $conn = $this->connectDatabase();
        $sql = "delete from authors WHERE id = '".$id."'";
        mysqli_query($conn, $sql);
    }
    public function getAuthorById($id){
        $conn = $this->connectDatabase();
        $sql = "select *
                  from authors aut
                  WHERE id = '". $id ."'
                  ORDER BY id";
        $result = mysqli_query($conn, $sql);
        return $result;
    }
    public function editAuthor($id, $full_name, $email, $phone_number, $birthday, $address){
        $conn = $this->connectDatabase();
        $sql = "update authors set full_name ='" . $full_name . "', email = '". $email . "', phone_number = '".$phone_number."', birthday = '".$birthday."', address ='". $address."' where id = '". $id. "'";
        mysqli_query($conn, $sql);
    }
}