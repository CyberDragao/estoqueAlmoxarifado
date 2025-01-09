<?php
require_once '../repositories/userRepository.php';

// A classe UserService gerencia a lógica de negócio relacionada ao usuário
// Ela é responsável por processar dados e interagir com o repositório para persistência
class UserService
{
	// Atributo que contém uma instância de UserRepository
	public $userRepository;

	// O método __construct é chamado automaticamente quando a classe é instanciada
	// Ele inicializa a instância de UserRepository
	public function __construct()
	{
		$this->userRepository = new UserRepository();
	}

	// O método register encapsula a lógica de registro do usuário
	// Ele delega a responsabilidade de persistir os dados ao método createUser do UserRepository
	function register()
	{
		$this->userRepository->createUser();
	}
}
