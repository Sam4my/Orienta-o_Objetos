<?php

require './class/users.php';
require './class/session.php';
require './class/post.php';

$post = new Post();
$session = new Session();


if($post->get('email') != '' && $post->get('pass') != ''){
    $login = $post->get('email');
    $pass = $post->get('pass');
    foreach ($users as $user => $user){
        if($login == $user['email'] && $pass == $pass['pass']) {
            include 'acao.php';
        }else {
            echo 'USUARIO INVALIDO';
        }
    }
}

