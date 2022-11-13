<?php
require_once 'data.php';
require_once 'get.php';
require_once 'post.php';
require_once 'session.php';


?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diary</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="header">
        <h1>Diary</h1>
        <h2>Onde suas histórias se transformam em Livro!</h2>
    </div>

    <div class="user">
        <h4>Bem vindo(a)</h4>
    </div>
    <div class="caixa">
        <form action="poste.php" method="post">
            Título:<br><input type="text" name="title" id=""><br>
            Conteúdo:<br><textarea name="text" id="" cols="50" rows="20"></textarea><br>
            Autor:<br><input type="text" name="autor" id=""><br>
            <br><input type="submit" value="CONFIRMAR" class="button">
        </form>
    </div> 
</body>
</html>