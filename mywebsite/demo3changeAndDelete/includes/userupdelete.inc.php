<?php
 
 if ($_SERVER["REQUEST_METHOD"]=="POST") {
   $username = $_POST["username"];
   $pwd = $_POST["pwd"];
   //获取用户输入
   
   try{
      require_once "dbh.inc.php";
      $query="DELETE FROM users WHERE username = :username And pwd= :pwd
      ;";
      
      $stmt = $pdo->prepare($query);

      $stmt->bindParam(":username",$username);
      $stmt->bindParam(":pwd",$pwd);
      
      //将变量绑定到 SQL 占位符
      $stmt->execute();

      
      //execute the quer y with the values of username, password and email
      $pdo=null;
      $stmt=null;
       
      header("Location:../index.php");
      die();
   }
     catch(PDOException $e){
       die("Query failed: " . $e->getMessage());
   }
   

 }