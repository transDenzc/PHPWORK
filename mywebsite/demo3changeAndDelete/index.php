

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>


<form action="includes/userupdate.inc.php" method="post">
<div><h3>Change account</h3></div>
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="pwd" placeholder="Password" required>
        <input type="text" name="email" placeholder="E-mail" required>
    <button type="submit">Change account</button>
</form>
 
<form action="includes/userupdelete.inc.php" method="post">
    
    <div><h3>Delete account</h3></div>
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="pwd" placeholder="Password" required>
    <button type="submit">Delete account</button>  
</form>     
</body>
</html> 