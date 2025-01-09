<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Cadastro</title>
	<link rel="stylesheet" href="/estoqueAlmoxarifado/public/css/cadastro.css">
</head>

<body>
	<h1>Cadastro</h1>
	<main>
		<h3>Bem vindo.</h3>

		<form action="../routes/registerRoute.php" method="post">

			<label for="">Digite o seu nome completo:</label>
			<input class="inputNomeCompleto" type="text">

			<label for="">Selecione seu setor:</label>
			<select name="" id="">
				<option value=""></option>
				<option value="">logistica</option>
				<option value="">expedicao</option>
				<option value="">pessoal</option>
				<option value="">financeiro</option>
				<option value="">comercial</option>
				<option value="">almoxarifado</option>
				<option value="">contabilidade</option>
				<option value="">produção</option>
			</select>

			<label for="">Digite o seu cargo:</label>
			<input type="text">




			<label for="">Crie seu Nome de Usuario:</label>
			<input type="text" name="" id="">
			<p>O nome de usuario será utitlizado apenas para acessar o aplicativo. Utilize apenas Letras e números para criar seu nome.</p>

			<label for="">Digite sua senha:</label>
			<input type="password" name="" id="">

			<label for="">Confirme sua senha:</label>
			<input type="password" name="" id="">

			<input class="botao" type="submit" value="Concluir">

		</form>

	</main>
	<footer>
		<p>Empresa-LTDA</p>
	</footer>
</body>

</html>