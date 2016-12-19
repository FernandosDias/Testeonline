$(function() {
	$("#negocmerc").submit(function(event){
		if($('#NomeMercadoria').val() == '') {
			$('#msg').html("Por favor digite o nome da mercadoria.");
		}
		else
		if($('#TipoMercadoria').val() == '') {
		$('#msg').html("Por favor digite o tipo da mercadoria.");}
		
		else
		if($('#QtdMercadoria').val() == '') {
		$('#msg').html("Por favor digite a quantidade da mercadoria.");}
		
		else
		if($('#PrecoMercadoria').val() == '') {
		$('#msg').html("Por favor digite o preço da mercadoria.");}
		
		else
		if($('#CompraMercadoria').val() == '') {
		$('#msg').html("Por favor digite o a quantidade de compra da mercadoria.");}
		
		else
		if($('#VendaMercadoria').val() == '') {
		$('#msg').html("Por favor digite a quantidade de vendas da mercadoria.");}
		
		else {
			console.log("ok");
			return true;
		}
		event.preventDefault();
	});
});
