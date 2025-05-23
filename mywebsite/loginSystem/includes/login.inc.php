<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST["username"];
    $pwd = $_POST["pwd"];

    try {
        require_once 'dbh.inc.php';
        require_once 'login_model.inc.php';
        require_once 'login_control.inc.php';//order is important 

        $errors = [];

        // 1. 检查输入是否为空
        if (is_input_empty($username, $pwd)) {
            $errors["empty_input"] = "Fill in all fields!!!";
        }
        // 2. 从数据库获取用户数据
        $results = get_user($pdo, $username);
        // 3. 检查用户名是否存在
        if (is_username_wrong($results)) {
            $errors["login_incorrect"] = "Incorrect login info!!!";
        }

        // 4. 如果用户名正确,验证密码
        if (is_username_wrong($results) && is_password_wrong($pwd, $results)) {
            $errors["login_incorrect"] = "Incorrect login info!!!";
        }

        require_once 'config.session.inc.php';


        // 5. 如果有任何错误，存储到会话并重定向
        if ($errors) {
            $_SESSION["errors_login"] = $errors;
            header("Location:../index.php");
            die();
        }

        // 6. 登录成功：处理会话和重定向

        $newSessionId = session_create_id();
        $sessionID = $newSessionId . "_" . $results["id"];
        session_id($sessionID);

        $_SESSION["user_id"] = $results["id"];
        $_SESSION["user_username"] = htmlspecialchars($result["username"]);

         // 记录最后一次活动时间，用于会话超时管理 
        $_SESSION["last_regeneration"] = time();
        header("Location:../index.php?login=success");
        $pdo = null;
        $statement = null;
        die();

    } catch (PDOException $e) {
        die("Query failed:" . $e->getMessage());
    }
} else {
    header("Location:../index.php");
    die();
}


