<html>
<head>
	<title>FY</title>
	<link href="estilos/estiloLogin.css" rel="stylesheet" type="text/css" />
	<style type="text/css" media="all">
		#topright {
			position: absolute;
			right: 0;
			top: 0;
			display: block;
			height: 657px;
			width: 700px;
			background: url("imagens/backgroundLogin.jpg") no-repeat;
			text-indent: -999em;
			text-decoration: none;
		}
	</style>
</head>

<body style="text-align: center">
	<a id="topright" href="#" title="TopRight"></a>
	<p>
		<h1 class="text_1" style="text-align: left">Fy</h1>
		<h2 class="text_2">Welcome</h2>
		<h3 class="text_3" >A place For You</h3>
	</p>
	
	<form action="entrar.php" method="post">
		<input type="text" id="fUsuario" name="fUsuario" class="label"><br><br>
		<input type="password" id="fSenha" name="fSenha" class="label"><br><br>
		
		<input type="submit" value="Log In" class="button_1">
		<h4 class="text_4">Forgot Password?</h4>
		<input type="reset" value="Create New Account" class="button_2">
	</form>		
</body>
</html>