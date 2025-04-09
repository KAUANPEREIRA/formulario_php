<?php
//Para receber os dados é necessário verificar se não estão vazios;
//header() -> Envia um cabeçalho -> com o location redireciona para uma pagina;


session_start(); //sempre for trabalhar com sessões



if(!empty($_POST['usuario']) && !empty($_POST['password'])){



    $usuario = htmlspecialchars($_POST['usuario']);
    $senha = htmlspecialchars($_POST['password']);

    if(!empty($_POST['tema'])){
        setcookie('tema',$_POST['tema']);
    }

   if($usuario == 'admin' && $senha == 'admin'){
        $_SESSION['usuario'] = $usuario;
        header('Location: welcome.php');//redirecionamento com php , envio cabecalho html
        exit;
    }else{
        echo 'Usuario ou senha invalidas';
        echo '<a href="index.php">Voltar</a>';
       
    }

}else{
    echo 'Preencha todos os dados';
    echo '<a href="index.php">Voltar</a>';
}




?>