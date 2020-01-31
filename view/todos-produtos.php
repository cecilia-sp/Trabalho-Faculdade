<?php include_once("header.php");?>  <!--Chama a o header.php ou seja o cabeçalho-->

<section ng-controller="destaque-controller">
	<div id="Banner" class="container">		
		<div class="row text-center title-default-roxo">
			<h2>Banner</h2>
			<hr>	
		</div>
		<div class="row">			
			<div class="col-md-3" ng-repeat="produto in buscados">
				<div class="box-produto-info">
					<a href="produto-{{produto.id_prod}}">
						<img src="img/produtos/{{produto.foto_principal}}" alt="{{produto.nome_prod_longo}}" class="produto-img">
						<h3>{{produto.nome_prod_longo}}</h3>
						<div class="estrelas" data-score="{{produto.media}}"></div>
						<div class="text-qtd-reviews text-arial-cinza">({{produto.total_reviews}})</div>
						<div class="text-valor text-roxo">R$ {{produto.total}}</div>
						<div class="text-parcelado text-arial-cinza">{{produto.parcelas}}x de R$ {{produto.parcela}} sem juros</div>
					</a>
				</div>
			</div>
		</div>
	</div>



	<div id="Bonecos" class="container">		
		<div class="row text-center title-default-roxo">
			<h2>Bonecos</h2>
			<hr>	
		</div>
		<div class="row">			
			<div class="col-md-3" ng-repeat="produto in buscados">
				<div class="box-produto-info">
					<a href="produto-{{produto.id_prod}}">
						<img src="img/produtos/{{produto.foto_principal}}" alt="{{produto.nome_prod_longo}}" class="produto-img">
						<h3>{{produto.nome_prod_longo}}</h3>
						<div class="estrelas" data-score="{{produto.media}}"></div>
						<div class="text-qtd-reviews text-arial-cinza">({{produto.total_reviews}})</div>
						<div class="text-valor text-roxo">R$ {{produto.total}}</div>
						<div class="text-parcelado text-arial-cinza">{{produto.parcelas}}x de R$ {{produto.parcela}} sem juros</div>
					</a>
				</div>
			</div>
		</div>
	</div>
</section>

<?php include_once("footer.php");?>  <!--Coloca o rodapé aqui-->

<script>
angular.module("shop", []).controller("destaque-controller", function($scope, $http){
	$scope.produtos = [];
	$scope.buscados = [];
	var initCarousel = function(){
		$("#destaque-produtos").owlCarousel({	 
	      autoPlay: 5000,
	      items : 1,
	      singleItem: true	 
	  	});
	  	var owlDestaque = $("#destaque-produtos").data('owlCarousel');
	  	$('#btn-destaque-prev').on("click", function(){
	  		owlDestaque.prev();
	  	});
	  	$('#btn-destaque-next').on("click", function(){
	  		owlDestaque.next();
	  	});
	};
	$http({
	  method: 'GET',
	  url: 'produtos'
	}).then(function successCallback(response) {
	    $scope.produtos = response.data;
	    setTimeout(initCarousel, 1000);
	  }, function errorCallback(response) {
	  });
	var initEstrelas = function(){
		$('.estrelas').each(function(){
	  		$(this).raty({
		  		starHalf    : 'lib/raty/lib/images/star-half.png',                            // The name of the half star image.
				starOff     : 'lib/raty/lib/images/star-off.png',                             // Name of the star image off.
				starOn      : 'lib/raty/lib/images/star-on.png',
				score		: parseFloat($(this).data("score"))
		  	});
	  	});
	};
	$http({
	  method: 'GET',
	  url: 'produtos-mais-buscados'
	}).then(function successCallback(response) {
	    $scope.buscados = response.data;
	    setTimeout(initEstrelas, 1000);
	  }, function errorCallback(response) {
	  });
});

</script>