<!DOCTYPE html>
<html ng-app="app">
<head>
	<title>Imobiliar</title>
</head>
	 <!-- Links de Ferramentas de Estilos  -->
	<link rel="stylesheet" type="text/css" href="/imobiliar/view/painel/css/topo.css">
	<link rel="stylesheet" type="text/css" href="/imobiliar/view/painel/css/section.css">
	<link rel="stylesheet" type="text/css" href="/imobiliar/view/painel/frameworks/bootstrap/css/bootstrap.css">
	<script type="text/javascript" src="/imobiliar/view/painel/frameworks/jquery-3.1.0.min.js"></script>
	<script type="text/javascript" src="/imobiliar/view/painel/frameworks/bootstrap/js/bootstrap.js"></script>
	<script type="text/javascript" src="/imobiliar/view/painel/frameworks/angular/angular.js"></script>

	<script>
		$(document).ready(function(){
		    $('[data-toggle="tooltip"]').tooltip(); 
		});
</script>
<script type="text/javascript">
	
	var app = angular.module("app",[]);
	app.controller("appController", function($scope){
		$scope.cadastraCliente = false;
		$scope.cadastraImoveis = false;

	});
</script>
<body ng-controller="appController">

<div id="topo">
	<div id="fotoUser"><img src="/imobiliar/view/painel/perfil/afd.jpg"></div>
	<div id="user">Adnilton Santos</div>
	
<div id="bloco-menu">

<div class="dropdown menu">
  <a href="" class="dropdown-toggle" data-toggle="dropdown">
  <img src="/imobiliar/view/painel/img/icon-casa.png">
  </a>
  <ul class="dropdown-menu">
    <li><a href="#" ng-click="cadastraImoveis = true; cadastraCliente = false; ">Cadastrar Imoveis</a></li>
    <li><a href="#">Listar Imoveis</a></li>
    <li><a href="#">Publicidade</a></li>
  </ul>
</div>

<div class="dropdown menu">
  <a href="" class="dropdown-toggle" type="button" data-toggle="dropdown"><img src="/imobiliar/view/painel/img/icon-perfil.png">
 </a>
  <ul class="dropdown-menu">
    <li><a href="#" ng-click="cadastraCliente = true">Cadastrar Cliente</a></li>
    <li><a href="#">Lista de Cliente</a></li>
    </ul>
</div>

<div class="dropdown menu">
  <a href="" class="dropdown-toggle" type="button" data-toggle="dropdown"><img src="/imobiliar/view/painel/img/icon-config.png">
  </a>
  <ul class="dropdown-menu">
    <li><a href="#">Perfil</a></li>
    <li><a href="#">Configurações</a></li>
    <li><a href="#">Sair</a></li>
  </ul>
</div>

	</div>

 <div id="versao">Versão 0.10 Beta</div>
</div>


<?php require_once "pag/clientes/cadastraCliente.php"; ?>
<?php require_once "pag/imoveis/cadastraImoveis.php"; ?>

</body>
</html>