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
							<img class="profilePhoto" src="imagens/perfil.jpg" alt="perfil" />
							<h2>Sheik</h2>
						</div>
						<div class="contentCenter">
							<?php include('content.php') ?>
						</div>
						<div class="contentRight"></div>
					</div>
				</div>
			</div>
		</div>

		<div id="modal" class="modal">
			<div class="closeRow">
				<button onclick="changeModal()">X</button>
			</div>
			<div class="row firstRow">
				<a href="#">
					<button class="buttonCircle modalButton alignCenterX">
						<img src="imagens/localizacao.png" class="buttonLocalizacao" alt="Localização" />
					</button>
				</a>
				<a href="#">
					<button class="buttonCircle modalButton alignCenterX">
						<img src="imagens/imagem.png" class="buttonImagem" alt="Imagem" />
					</button>
				</a>
				<a href="#">
					<button class="buttonCircle modalButton alignCenterX">
						<img src="imagens/video.png" class="buttonVideo" alt="Vídeo" />
					</button>	
				</a>
			</div>
			<div class="row">
				<a href="#">
					<button class="buttonCircle modalButton alignCenterX">
						<img src="imagens/musica.png" class="buttonMusica" alt="Música" />
					</button>
				</a>
				<a href="#">
					<button class="buttonCircle modalButton alignCenterX">
						<img src="imagens/livros.png" class="buttonLivros" alt="Livros" />
					</button>
				</a>
			</div>
		</div>
	</body>
</html>