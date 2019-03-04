
<a class="btn btn-success ml-2 mt-2" href="<?php echo BASE_URL; ?>">Voltar</a><br/>
<div class="container">
	<h1 class="d-flex justify-content-center">Editar Produto</h1>
<div class="form-group">
<form method="POST">
	Código de Barras:<br/>
	<input class="form-control form-control-lg" type="text" name="cod" value="<?php echo $info['cod']; ?>" required /><br/>
	Nome do Produto:<br/>
	<input class="form-control form-control-lg" type="text" name="name" value="<?php echo $info['name']; ?>" required /><br/>

	Preço do Produto:<br/>
	<input class="form-control form-control-lg" type="text" name="price" value="<?php echo $info['price']; ?>" required /><br/>

	Quantidade:<br/>
	<input class="form-control form-control-lg" type="text" name="quantity" value="<?php echo $info['quantity']; ?>" required /><br/>

	Qtd. Minima:<br/>
	<input class="form-control form-control-lg" type="text" name="min_quantity" value="<?php echo $info['min_quantity']; ?>" required /><br/>

	<input class="btn btn-primary" type="submit" value="Salvar" />
</form>
</div>
</div>
</div>
