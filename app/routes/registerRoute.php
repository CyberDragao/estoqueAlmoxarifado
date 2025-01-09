<?php
require_once '../controllers/userController.php';

$method = $_SERVER['REQUEST_METHOD'];

// Verifica se o metodo é POST e instancia o UserController
// Redireciona o request para o metodo register 
// Usa o metodo register para criar o usuario
if ($method === 'POST') {
	// TODO: Passar data do formulario register.php para o metodo register
	$controller = new UserController();
	$controller->register();
}
