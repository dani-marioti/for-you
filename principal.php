<?php
	include "seguranca.php";
	include "conexao.php";
?>

<script type="text/javascript">
	function changeModal() {
		const list = document.getElementById('modal').classList

		if (list.contains('openModal')) {
			list.remove('openModal')
		} else {
			list.add('openModal')
		}
	}
</script>

<html>
	<head>
		<title>FY</title>
		<link href="estilos/estilo.css" rel="stylesheet" type="text/css" />
		<meta charset="UTF-8">
	</head>
	<body class="body">
		<div class="container alignCenterX">
			<div class="headerWrapper">
				<div class="header">
					<img src="imagens/login.png" />
					<form class="formProcurar alignCenterY" id="procurar" action="procurar.php" method="POST">
						<input name="campo-procurar" type="text" class="inputSearch" placeholder="Pesquisar..." />
					</form>
					<img src="imagens/pesquisa.png" class="icon iconSearch" onclick="document.getElementById('procurar').submit();" />
					<img src="imagens/perfil.png" class="icon" />
					<img src="imagens/mensagem.png" class="icon iconMessage" />
					<img src="imagens/notificacao.png" class="icon" />
					<img src="imagens/configuracao.png" class="icon iconConfig" />
				</div>
				<div class="contentWrapper">
					<div class="content">
						<div class="contentLeft">
							
						</div>
						<div class="contentCenter">
							<button class="buttonPlus alignCenterX" onclick="changeModal()">+</button>
						</div>
						<div class="contentRight">
							
						</div>
					</div>
				</div>
			</div>
		</div>

		<div id="modal" class="modal">
			<button onclick="changeModal()">X</button>
		</div>
	</body>
</html>