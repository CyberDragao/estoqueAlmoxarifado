<?php
require_once '../services/userService.php';

// Um Controller recebe o request
// A classe UserController tem metodos relacionados as features do usuario
// Quando o UserControler é instanciado, ele chama automaticamente a função "__construct"
// A função "__construct" instancia a classe UserService
class UserController
{
	public $userService;

	public function __construct()
	{
		$this->userService = new UserService();
	}


	// Essa função chama a função register da classe UserService
	public function register()
	{
		$this->userService->register();
	}
}
