<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Cadastro</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Nova+Square&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="/estoqueAlmoxarifado/public/css/register.css">
</head>

<body>
	<div class="logo">
		<img src="../../resources/images/logo.png" alt="Logo">
	</div>
	<div class="modal">
		<div class="modal-header">
			<svg width="35" height="35" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path d="M7.825 13L13.425 18.6L12 20L4 12L12 4L13.425 5.4L7.825 11H20V13H7.825Z" fill="#1D1B20" />
			</svg>
			<h1>Registro</h1>
		</div>
		<form>
			<div class="input-group">
				<label>Senha</label>
				<input type="password">
			</div>

			<div class="input-group">
				<label>Confirme sua senha</label>
				<input type="password">
			</div>

			<div class="input-group">
				<label>Cargo</label>
				<input type="text">
			</div>

			<div class="input-group">
				<label>Nome de usuário</label>
				<input type="text">
			</div>

			<div class="input-group">
				<label>Nome completo</label>
				<input type="text">
			</div>

			<div class="input-group">
				<label for="">Setor</label>
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
			</div>
		</form>

		<div class="modal-footer">
			<button type="submit" class="submit-button">Salvar</button>
		</div>
	</div>
	</div>
</body>

</html>