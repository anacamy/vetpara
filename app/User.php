<?php

//Controla a sessão dos logins
//Cria sessão quando o usuário faz um login pelo google ou manualmente 
//Arquivo disponibilizado pelo google

namespace App\Session;

class User{
    private static function init(){
        return session_status() !== PHP_SESSION_ACTIVE ? session_start() : true;

    }

public static function login($nome, $email){
    self::init();

    $_SESSION['user'] = [
        'name'  => $nome,
        'email' => $email
    ];
}

public static function isLogged(){
    self::init();
    return isset($_SESSION['user']);
}

public static function getInfo(){
    self::init();
    return $_SESSION['user'] ?? [];
}

public static function logout(){
    self::init();
    unset($_SESSION['user']);
}

}