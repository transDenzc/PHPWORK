<?php

$pwd="krossing";

$options = [
    'cost' => 12
];

$hashPwd=password_hash($pwd,PASSWORD_BCRYPT,$options);

$pwdLogin = "krossing";

if(password_verify($pwdLogin,$hashPwd)){
    echo"They are the same!";

}else{
    echo"They are not the same!";
}