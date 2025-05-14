<?php

if($_SERVER['REQUEST_METHOD']== "post"){
    $username =$_POST['username'];
    $pwd = $_POST['pwd'];
    $email = $_POST['email'];

    try{
        require_once 'dbh.inc.php';
       $query ="INSERT INTO users (
       username, pwd, email) VALUES ($username, $pwd, $email);";

        $stmt =$pdo ->
    }catch(PDOException $e){
        echo "Query failed:" . $e->getMessage();
    }
    


}else{
    header("Location: ../index.php");
    exit();
}