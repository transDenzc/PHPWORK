<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="style.css"> 
</head>
<body>
    
    <form action="includes/formhandler.inc.php" method="post">
    <div><h3>Signup</h3></div>


        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="pwd" placeholder="Password" required>
        <input type="text" name="email" placeholder="E-mail" required>
    <button type="submit">Signup</button> 
 
    </form>

    
</body>
</html>