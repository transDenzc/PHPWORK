<?php
declare(strict_types=1);

function  get_user(object $pdo, string $username){

    $query =" SELECT * FROM users WHERE username = :username;";//获取
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":username",$username);
    $stmt->execute();

    $result =$stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
};
//存在用户的会返回数组，不存在则返回FALSE,

echo' . $result .';