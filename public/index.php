<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema De Estoque</title>
    <link rel="stylesheet" href="/estoqueAlmoxarifado/public/css/style.css">
</head>
<body>

<?php 
require_once __DIR__ . '/../vendor/autoload.php';

use App\Controllers\HomeController;

$controller = new HomeController();
$controller->index();
?>


<header>
    
</header>           


<main><h1>
     Almoxarifado
    </h1>
<form class="formulario" action="">

    <h2>Login</h2>
    
    <div class="campoUsuario">
        <label for="nomeUsuario">Usuario</label>
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