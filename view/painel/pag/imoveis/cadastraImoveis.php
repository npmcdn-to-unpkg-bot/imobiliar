
<div class="blocoForm" ng-show="cadastraImoveis" ng-app="imovel">
<script type="text/javascript">
	angular.module("imovel",[]);
	app.controller("appImovel", function($scope){
 	
 	$scope.casa = false;
 	$scope.apartamento=false;

	});
</script>

<div class="jumbotron" ng-controller="appImovel">
	<h3>Cadastro de Imovel</h3>

<input type="text" class="form-control" name="enderecoImovel" placeholder="Endereço" required>

<select value="estadoImovel" class="form-control">
	<option>Estado</option>
</select>

<select value="cidadeImovel" class="form-control">
	<option>Cidade</option>
</select>

<select value="bairroImovel" class="form-control">
	<option>Bairro</option>
</select>

<input type="text" class="form-control" name="iptuImovel" placeholder="IPTU Imovel" required>
<input type="text" class="form-control" name="condominioImovel" placeholder="Condominio Imovel" required>
<input type="text" class="form-control" name="idadeConstrucao" placeholder="Idade Construção" required>
<input type="text" class="form-control" name="valorLocacao" placeholder="Valor Locação" required>
<input type="text" class="form-control" name="valorVenda" placeholder="Valor Venda" required>
<input type="text" class="form-control" name="condicoes" placeholder="Condição" required>

	<button class="btn btn-danger" ng-click="casa = true; apartamento = false; ">Casa</button> ou
	<button class="btn btn-success" ng-click="casa = false; apartamento = true; ">Apartamento</button>

<br />
<br />

<div ng-show="casa">
<h4>Dados Casa</h4>
<input type="text" class="form-control" name="dormitorio" placeholder="Dormitorio" required>
<input type="text" class="form-control" name="suite" placeholder="Suite" required>
<input type="text" class="form-control" name="copa" placeholder="Copa" required>
<input type="text" class="form-control" name="garagemCoberta" placeholder="Garagem Coberta" required>
<input type="text" class="form-control" name="areaTerreno" placeholder="Area do Terreno" required>
<input type="text" class="form-control" name="banheiros" placeholder="Banheiros" required>
<input type="text" class="form-control" name="salaJantar" placeholder="Sala de Jantar" required>
<input type="text" class="form-control" name="salaEstar" placeholder="Sala de Estar" required>
<input type="text" class="form-control" name="mobiliado" placeholder="Mobiliado" required>
<input type="text" class="form-control" name="areaConstruida" placeholder="areaConstruida" required>
<input type="text" class="form-control" name="outrosDados" placeholder="Outros Dados" required>
<button type="button" class="btn btn-primary btn-block">Adicionar Imovel</button>
</div>

<div ng-show="apartamento">
<h4> Dados Apartamento</h4>
<input type="text" class="form-control" name="dormitorio" placeholder="Dormitorio" required>
<input type="text" class="form-control" name="suite" placeholder="Suite" required>
<input type="text" class="form-control" name="elevador" placeholder="Elevador" required>
<input type="text" class="form-control" name="mobiliado" placeholder="Mobiliado" required>
<input type="text" class="form-control" name="areaUtil" placeholder="Area Util" required>
<input type="text" class="form-control" name="vagasGaragem" placeholder="Vagas Garagem" required>
<input type="text" class="form-control" name="kitinet" placeholder="Kitinet" required>
<input type="text" class="form-control" name="banheiro" placeholder="Banheiro" required>
<input type="text" class="form-control" name="andares" placeholder="Andares" required>
<input type="text" class="form-control" name="areaTotal" placeholder="areaTotal" required>
<input type="text" class="form-control" name="outrosDados" placeholder="Outros Dados" required>
<button type="button" class="btn btn-primary btn-block">Adicionar Imovel</button>
</div>

</div>
</div>