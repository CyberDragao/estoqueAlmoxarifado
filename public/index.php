<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema De Estoque</title>
    <link rel="stylesheet" href="/estoqueAlmoxarifado/public/css/login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Nova+Square&display=swap" rel="stylesheet">
</head>
<body>

<?php 
// require_once __DIR__ . '/../vendor/autoload.php';

// use App\Controllers\userController;

// $controller = new HomeController();
// $controller->index();
?>


<div class="logo">
	<img src="../resources/images/logo.png" alt="Logo">
</div>      


<main>

<form class="formulario" action="">

    <h2>Login</h2>
    
    <div class="campoUsuario">
        <label for="nomeUsuario">Nome de Usuario</label>
        <input placeholder="Digite o seu nome de usuario:" type="text" name="nomeUsuario" id="nomeUsuarioId">

    </div>

    <div class="campoSenha">
        <label for="senhaUsuario">Senha</label>
        <input placeholder="Digite a sua senha:" type="password" name="senhaUsuario" id="senhaUsuarioId">
        
    </div>

    <a href="">Esqueci minha senha</a> 
    
                    

    <input class="botao" type="submit" value="Entrar">

    
</form>
</main>    

<footer>
<p>Empresa LTDA</p>
</footer>
</body>
</html>