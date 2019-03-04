
<!DOCTYPE html>
<html>
<head>
	<title>Home - Estoque</title>
	 <!-- Principal CSS do Bootstrap -->
    <link href="<?php echo BASE_URL; ?>assets/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
<div class="button mt-2">	
<a class="btn btn-primary mr-2" role="button" href="<?php echo BASE_URL; ?>home/add">Adicionar Produto</a>
<a class="btn btn-danger mr-2" role="button" href="<?php echo BASE_URL; ?>relatorio">Relatório PDF</a>
<a class="btn btn-primary mr-2" role="button" href="<?php echo BASE_URL; ?>login/sair">Sair</a><br/><br/>
</div>
<div class="container">
<fieldset>
	
	<form method="GET">
		<div class="active">
		<input type="text"  class="form-control mr-sm-2" type="search" id="busca" name="busca" value="<?php echo (!empty($_GET['busca']))?$_GET['busca']:''; ?>" placeholder="Digite o código de barras ou o nome do produto" style="width:100%;height:40px;font-size:18px;" />
		</div>
	</form>

</fieldset>
<br/><br/>

<table class="table">
	<thead class="thead-light">
	<tr>
		<th>Cód.</th>
		<th>Nome</th>
		<th>Preço Unit.</th>
		<th>Qtd.</th>
		<th>Ações</th>
	</tr>
	</thead>
	<?php foreach($list as $item): ?>
		<tr>
			<td><?php echo $item['cod']; ?></td>
			<td><?php echo $item['name']; ?></td>
			<td>R$ <?php echo number_format($item['price'], 2, ',', '.'); ?></td>
			<td><?php echo $item['quantity']; ?></td>
			<td>
				<a class="btn btn-secondary" href="<?php echo BASE_URL; ?>home/edit/<?php echo $item['id']; ?>">Editar</a>
			</td>
		</tr>
	<?php endforeach; ?>
</table>
</div>
</body>
<script type="text/javascript">
document.getElementById("busca").focus();
</script>
</html>