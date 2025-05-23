<?php
 if ($_SERVER["REQUEST_METHOD"]=="POST") {
   $userSearch = $_POST["usersearch"];
  //获取用户输入
   
   try{
      require_once "includes/dbh.inc.php";
      
      $query="SELECT * FROM comments WHERE username = :usersearch;";
      
      $stmt = $pdo->prepare($query);

      $stmt->bindParam(":usersearch",$userSearch);
    //将变量绑定到 SQL 占位符
      $stmt->execute(); 
 
      $results = $stmt -> fetchAll(mode: PDO::FETCH_ASSOC);
      
       
       
      $pdo=null;
      $stmt=null;
    
      
      
   }
     catch(PDOException $e){
       die("Query failed: " . $e->getMessage());
   }//进入数据库然后搜索特定用户发表的评论
   

 }else{ header("Location:../index.php");

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
    
<section>
<h3>Search results:</h3>

    <?php
    if(empty($results)){
     echo "<div>";
     echo "<p>There were no results</p>";
     echo "</div>";
    }
    else{
         foreach($results as $row){
          ;
          echo "<h4>" . htmlspecialchars($row["username"]) . "/h4>";
          echo "<p>" . htmlspecialchars($row["comment_text"]) . "</p>";
          echo "<p>" . htmlspecialchars($row["created_at"]) . "</p>";//output from databate ,html...is necessary otherwise user maybe use js

echo "</div>"; 
         }

    }
    ?>
</section>
</body>

</html>