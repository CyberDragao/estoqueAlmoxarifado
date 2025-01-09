<?php

// A classe UserRepository é responsável por gerenciar a persistência de dados relacionados ao usuário
// Aqui são implementadas operações diretas no banco de dados ou em outros sistemas de armazenamento
class UserRepository
{
	// O método createUser simula a criação de um usuário
	// Atualmente, ele apenas exibe uma mensagem de sucesso na tela
	// Em um sistema real, ele deveria conter a lógica para inserir dados no banco de dados
	function createUser()
	{
		echo "<p>Usuário registrado com sucesso!<br></p>";
	}
}
