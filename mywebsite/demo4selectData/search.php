<?php
 if ($_SERVER["REQUEST_METHOD"]=="POST") {
   $userSearch = $_POST["usersearch"];
  //获取用户输入
   
   try{
      require_once "<includes/indbh.inc.php";
      
      $query="SELECT * FROM comments WHERE (:username, :pwd, :email)";
      
      $stmt = $pdo->prepare($query);

      $stmt->bindParam(":usersearch",$username);
    //将变量绑定到 SQL 占位符
      $stmt->execute(); 

      $results = $stmt -> fetchAll(PDO::FETCH_ASSOC);

       
      $pdo=null;
      $stmt=null;
     header("Location:../index.php");
      die();
      
   }
     catch(PDOException $e){
       die("Query failed: " . $e->getMessage());
   }
   

 }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Search results:</h3>

    <?php
    if(empty($results)){
     var_dump($results)
    }
    else{
         
    }

    ?>

</body>
</html>