<?php
	session_start();
	
	include "conexao.php";
	
	$sqlBusca = "select * from usu where usuLogin='".$_POST['fUsuario']."' and usuSenha='".$_POST['fSenha']."'";
	$resultado = mysqli_query($conexao, $sqlBusca);
	$qtdLinhas = mysqli_num_rows($resultado);
	
	if ($qtdLinhas>0)
	{
		$tbUsuarios = mysqli_fetch_array($resultado);
		$_SESSION['usu']=$tbUsuarios['usuCodigo'];
		
		header("Location: principal.php"); 
	}
	else
	{
		$mensagem = "Usuário inexistente ou senha incorreta!";
	}
?>
<html>
	<head>
		<title>Fy</title>
	</head>
	
	<body>
		<h1>Fy</h1>
		
		<p><?php echo $mensagem; ?></p>
		<p>Clique <a href="index.php">aqui</a> para voltar</p>
	</body>
</html>