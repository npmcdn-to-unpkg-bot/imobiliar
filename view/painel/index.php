<html>
<head>
	<title>Imobiliar</title>
</head>
	<?php
	$css = $data['baseDir'];
	
	 ?>
     <!-- Links de Ferramentas de Estilos -->
	<link rel="stylesheet" type="text/css" href="/imobiliar/view/painel/css/index.css">
	<link rel="stylesheet" type="text/css" href="/imobiliar/view/painel/bootstrap/bootstrap.css">

<body class="fundo">

<section>

	<!--Bloco do Logo e Titulo -->
	<div class="logo-tit">
		<img class="logo" src="/imobiliar/view/painel/img-icon/logo.png">
		<div class="titulo">IMOBILIAR</div>
		<div class="version">versão - 0.10</div>
	</div>

	<!--Bloco do Login e Senha -->
	<div class="aut">
		<form>
		<input type="text" class="form-control" name="email" placeholder="EMAIL">
		<input type="password" class="form-control" name="senha" placeholder="PASSWORD">
		<button type="button" class="btn btn-warning btn-lg">OK</button>
		</form>
		<div class="forget"> Esqueceu sua senha ? </div>
		<div class="new"> Nova Conta </div>
	</div>

</section>

</body>
</html>