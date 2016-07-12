<?php
/**
 * Created by PhpStorm.
 * User: Thaibm
 * Date: 7/8/2016
 * Time: 5:07 PM
 */
include '../../lib/config.php';

class Category
{
    public function Category(){
    }

    public function connectDatabase(){
        $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
        if (!$conn){
            die('Could not connect: '.mysqli_error($conn));
        }
        return $conn;
    }

    public function getListCategory(){
        $conn = $this->connectDatabase();
        $sql = 'select * from categories ';
        $result = mysqli_query($conn, $sql);
        return $result;
    }
    public function addCategory($name){
        $conn = $this->connectDatabase();
        $sql = "insert into Categories (name) VALUE ('" . $name . "')";
        mysqli_query($conn, $sql);
    }
    public function deleteCategory($id){
        $conn = $this->connectDatabase();
        $sql = "delete from Categories WHERE id = '".$id."'";
        mysqli_query($conn, $sql);
    }
    public function getCategoryById($id){
        $conn = $this->connectDatabase();
        $sql = "select *
                  from Categories aut
                  WHERE id = '". $id ."'
                  ORDER BY id";
        $result = mysqli_query($conn, $sql);
        return $result;
    }
    public function editCategory($id, $name){
        $conn = $this->connectDatabase();
        $sql = "update Categories set name ='" . $name . "' where id = '". $id. "'";
        mysqli_query($conn, $sql);
    }
}