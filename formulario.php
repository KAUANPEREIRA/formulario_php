<?php

$mensagem = null;

if(!empty($_POST['login']) && !empty($_POST['password'])){

    $login = htmlspecialchars($_POST['login']);
    $password = htmlspecialchars($_POST['password']);
    $tema = htmlspecialchars($_POST['tema']);

  
  
    if($login == 'admin' && $password == 'admin'){
        $mensagem = 'Login efetuado com sucesso';
    }else{
        $mensagem = 'Falha ao efetuar login';
    }


   

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
    <form action="login.php" method="POST">
        <input type="text" name="login" placeholder="Digite seu nome" value="<?=$login ?? '' ?>">
          <input type="password" name="password" placeholder="Digite sua senha" value="<?=$password ?? '' ?>">
        <input type="submit" value="enviar">

    </form>
    
</body>
</html>

    
    
