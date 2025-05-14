<?php
 
 if ($_SERVER["REQUEST_METHOD"]=="POST") {
   $username = $_POST["username"];
   $pwd = $_POST["pwd"];
   $email = $_POST["email"];//获取用户输入
   
   try{
      require_once "dbh.inc.php";
      $query="UPDATE users SET username = :username, pwd= :pwd, 
      email = :email WHERE id = 2;";
      
      $stmt = $pdo->prepare($query);

      $stmt->bindParam(":username",$username);
      $stmt->bindParam(":pwd",$pwd);
      $stmt->bindParam(":email",$email);
      //将变量绑定到 SQL 占位符
      $stmt->execute();

      
      //execute the query with the values of username, password and email
      $pdo=null;
      $stmt=null;
       
      header("Location:../index.php");
      die();
   }
     catch(PDOException $e){
       die("Query failed: " . $e->getMessage());
   }
   

 }
 