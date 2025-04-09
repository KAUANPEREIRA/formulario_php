

<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
</head>

<body>
    <form method="post" action="login.php">
        <label for="username">Usuario:</label>
        <input type="text" name="usuario" value="<?= $usuario ?? '' ?>"><br>
        <label for="password" >Senha:</label>
        <input type="password" name="password" value="<?= $password ?? '' ?>"><br>
        <label for="lembrar">Tema Preferido: </label>
        <select name="tema">
            <option value="black">escuro</option>
            <option value="white">claro</option>
        </select> <br>
        <input type="submit">
    </form>
</body>

</html>