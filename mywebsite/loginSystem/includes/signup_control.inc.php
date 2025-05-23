<?php

declare(strict_types=1);

function is_input_empty(string $username, $pwd, $email)//声明类型
{
    if (empty($username) || empty($pwd) || empty($email)) {
        return true;
    } else {
        return false;
    }
}

function is_email_invalid(string $email)
{
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return false;
    } else {
        return true;
    }
}

function is_username_taken(object $pdo, string $username)
{
    if (get_username($pdo, $username)) {
        return true;
    } else {
        return false;
    }
}//进入数据库查询数据

function is_email_registered(object $pdo, string $email)
{
    if (get_email($pdo, $email)) {
        return true;
    } else {
        return false;
    }

}

function create_user(object $pdo, string $email, string $username, string $pwd)
{
    if (set_user($pdo, $email, $username, $pwd)) {
        return true;
    } else {
        return false;
    }

}


