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
<body class="corpse">
    <div class="box">
        <h1>Diary</h1>
        <h2>Onde suas histórias se transformam em Livro!</h2>
    </div>
    <?php
     $title = $_POST['title'];
     $text = $_POST['text'];
     $autor = $_POST['autor'];
    ?>    

    <div class="user">
        <h4>Bem vindo(a) <?= $login?></h4>
    </div>
    <div class="caixa">
        <h3> <?= $title ?> </h3>
        <p class="texto"><?= $text ?></p>
        <p class="autor"> <?= $autor ?></p>
    </div>
</body>
</html>