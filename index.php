
<?php	
require_once("conexao.php");
$selectquery = mysql_query("SELECT * FROM mercadoria", $con);

$sucesso = false;
if (!empty($_POST)){
	$NomeMercadoria = $_POST['NomeMercadoria'];
	$TipoMercadoria=$_POST['TipoMercadoria'];
	$QtdMercadoria=$_POST['QtdMercadoria'];
	$PrecoMercadoria=$_POST['PrecoMercadoria'];
	$CompraMercadoria=$_POST['CompraMercadoria'];
	$VendaMercadoria=$_POST['VendaMercadoria'];
				
	$sqlquery ="INSERT INTO mercadoria (TipoMercadoria,NomeMercadoria, QtdMercadoria, PrecoMercadoria, CompraMercadoria,VendarMercadoria)
	VALUES ('$TipoMercadoria', '$NomeMercadoria',$QtdMercadoria, '$PrecoMercadoria',$CompraMercadoria,$VendaMercadoria)";
	
	mysql_query($sqlquery, $con);
	
	$sucesso = true;
}
?>
<!DOCTYPE html>
<html lang="pt-BR">	
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Negociação de Mercadorias</title>

    <meta name="Sistema de Negociação" content="Compras e Vendas">
    <meta name="Fernando Dias" content="Compras e Vendas">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

  </head>
  <body>
	
    <div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1 class= "text-center">Sistema de Negociação de Mercadorias</h1>
				<form role="form" id ="negocmerc" method= "post" >
					<div class="form-group">
						<label for="Nome da mercadoria">
							Nome da Mercadoria
						</label>
						<input class="form-control" id="NomeMercadoria" name="NomeMercadoria" type="text">
					</div>
					
						<div class="form-group">
						<label for="Tipo da mercadoria">
							Tipo da Mercadoria
						</label>
						<input class="form-control" id="TipoMercadoria" name="TipoMercadoria" type="text">
					</div>
					
						<div class="form-group">
						<label for="Quantidade da mercadoria">
							Quantidade da Mercadoria
						</label>
						<input class="form-control" id="QtdMercadoria" name="QtdMercadoria" type="number">
					</div>
					
						<div class="form-group">
						<label for="Preço da mercadoria">
							Preço da Mercadoria
						</label>
						<input class="form-control" id="PrecoMercadoria" name="PrecoMercadoria" type="text">
					</div>
						<div class="form-group">
						<label for="Compra da mercadoria">
							Compra da Mercadoria
						</label>
						<input class="form-control" id="CompraMercadoria" name="CompraMercadoria" type="number">
					</div>
						<div class="form-group">
						<label for="Venda da mercadoria">
							Venda da Mercadoria
						</label>
						<input class="form-control" id="VendaMercadoria" name="VendaMercadoria" type="number">
					</div>
					
					<div class="text-danger" id="msg"></div><br>
					<?php if ($sucesso){ ?>
					<div class="text-success">Mercadoria adicionada com sucesso. </div>
					<?php } ?>
					<button class="btn btn-default" type="submit" value="cadastrar">
						Cadastrar
					</button>
				</form>
				<table class="table">
					<thead>
						<tr>
							<th>
								Código da Mercadoria
							</th>
							<th>
								Nome da Mercadoria
							</th>
							<th>
								Tipo da Mercadoria
							</th>
							<th>
								Quantidade da Mercadoria
							</th>
								<th>
								Preço da Mercadoria
							</th>
								<th>
								Compra da Mercadoria
							</th>
								<th>
								Venda da Mercadoria
							</th>
								<th>
								Alterar
							</th>
						</tr>
					</thead>
					<tbody class="sucess">
					<?php
						while ($item = mysql_fetch_array($selectquery)) {
					?>
						<tr>
							<td>
								<?php echo $item['CodMercadoria'];?>
							</td>
							<td>
								<?php echo $item['NomeMercadoria'];?>
							</td>
							<td>
								<?php echo $item['TipoMercadoria'];?>
							</td>
							<td>
								<?php echo $item['QtdMercadoria'];?>
							</td>
							<td>
								<?php echo $item['PrecoMercadoria'];?>
							</td>
							<td>
								<?php echo $item['CompraMercadoria'];?>
							</td>
							<td>
								<?php echo $item['VendarMercadoria'];?>
							</td>
							<td>
								Alterar || Apagar
							</td>
						</tr>
						<?php }
						?>
					</tbody>
				</table>
			</div>
		</div>
	</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
  </body>
</html>