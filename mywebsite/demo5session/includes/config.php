<?php

ini_set('session.user_only_cookies',1);

ini_set('session.user_strict_mode',1);//use strict mode

session_set_cookie_params(
  [
    'lifetime' => 1800,
    'domain' => 'localhost',
    'path' => '/',
    'secure' => true,
    'httponly' => true,


  ]
);

session_start();

session_regenerate_id(true);

if(!isset($_session['last_regeneration'])) {
    session_regenerate_id(true);
    $_session['last_regeneration'] = time();
}else {
    $interval = 60*30;

    if(time() - $_session['last_regeneration']>=$interval){
        session_regenerate_id(true);
        $_session['last_regeneration']=time();

    }
}


//设定特殊coookie ，make it more security
//定期重新生成ID