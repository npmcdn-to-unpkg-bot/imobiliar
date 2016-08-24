<html ng-app="app">
<head>
	<title>Imobiliar</title>
</head>
     <!-- Links de Ferramentas de Estilos  -->
    <link rel="stylesheet" type="text/css" href="/imobiliar/view/painel/css/index.css">
	<link rel="stylesheet" type="text/css" href="/imobiliar/view/painel/frameworks/bootstrap/css/bootstrap.css">.
	<script type="text/javascript" src="/imobiliar/view/painel/frameworks/angular/angular.js"></script>

	<script type="text/javascript">
	var app = angular.module("app",[]);
	app.controller("appController", function($scope){

		$scope.conta = true;
		$scope.newconta = false;
		$scope.senha = false;

	});
		</script>
<body class="fundo"  ng-controller="appController">

<section>

	<!--Bloco do Logo e Titulo -->
	<div class="logo-tit">
		<img class="logo" src="/imobiliar/view/painel/img/logo.png">
		<div class="titulo">IMOBILIAR</div>
		<div class="version">versão - 0.10</div>
	</div>

	<!--Bloco do Login e Senha -->
	<div class="aut" ng-show="conta" >
	
		<form action="painel/home" method="post">
			<input type="text" class="form-control" name="email" placeholder="EMAIL" autocomplete="off">
			<input type="password" class="form-control" name="senha" placeholder="SENHA">
			<button type="submit" class="btn btn-warning btn-lg botao">OK</button>
		</form>
			
		<div class="forget"><a href="" ng-click="senha = true; conta=false"> Esqueceu sua senha ? </a> </div>
		<div class="new"><a href="" ng-click="conta = false; newconta = true">Nova Conta</a></div>
	</div>

	<!--Bloco de Esqueceu sua senha -->
	<div class="aut" ng-show="senha" >
	 	<form action="painel/senha" method="post">
			 <table>
			
			 <tr>
			 	<td>
		  	<input type="text" class="form-control" name="email" placeholder="EMAIL" ng-model="user.name">
				</td>
			</tr>	
		
			<tr>
				<td>
			<br><button type="submit" class="btn btn-primary form-control">Enviar</button>
				</td>
			</tr>

			<tr>
				<td>
			<br><button type="button" class="btn btn-danger form-control" ng-click="conta = true; senha = false">Voltar</button>
				</td>
			</tr>
		
		</form>
			</table>
	</div>
		
	
	<!--Nova Conta -->
	<div class="aut newconta" ng-show="newconta">
		<table>	
			
			<form action="painel/newconta" method="post">

			<tr>
				<td>
			<input type="text" class="form-control" name="nome" placeholder="NOME">
				</td>
			</tr>

			<tr>
				<td>
			<input type="text" class="form-control" name="sobrenome" placeholder="SOBRENOME">
				</td>
			</tr>
			
			<tr>
				<td>
			<input type="text" class="form-control" name="email" placeholder="EMAIL">
				</td>
			</tr>
		
			<tr>
				<td>
			<input type="password" class="form-control" name="senha" placeholder="SENHA">
				</td>
			</tr>

			<tr>
				<td>
			<input type="text" class="form-control" name="creci" placeholder="CRECI">
				</td>
			</tr>

			<tr>
				<td>
			<input type="text" class="form-control" name="telefone" placeholder="TELEFONE" >
				</td>
			</tr>
		
			<tr>
				<td>
			</br><button type="submit" class="form-control btn btn-primary">Registrar</button>
				</td>
			</tr>

			<tr>
				<td>
			</br><button type="button" class="form-control btn btn-danger" ng-click="conta = true; newconta = false;">Voltar</button>
				</td>
			</tr>
		
		</form>
		</table>
		
	</div>


</section>

</body>
</html>



