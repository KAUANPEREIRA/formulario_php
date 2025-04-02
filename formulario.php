<?php

$mensagem = null;

if(!empty($_POST['login']) && !empty($_POST['password'])){

    $login = htmlspecialchars($_POST['login']);
    $password = htmlspecialchars($_POST['password']);

  
  
    if($login == 'admin' && $password == 'admin'){
        $mensagem = 'Login efetuado com sucesso';
    }else{
        $mensagem = 'Falha ao efetuar login';
    }
   
//    if($_SERVER['REQUEST_METHOD'] == 'POST'){
//     echo 'Foi enviado um formulario';
//    }else{
//     echo 'Não foi enviado nada';
//    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <form action="" method="POST">
        <input type="text" name="login" placeholder="Digite seu nome" value="<?=$login ?? '' ?>">
          <input type="password" name="password" placeholder="Digite sua senha" value="<?=$password ?? '' ?>">
        <input type="submit" value="enviar">

    </form>
    
</body>
</html>

    <?php
    if(!empty($mensagem)){
        echo $mensagem;
    }
    
    ?>
    
</body>
</html>