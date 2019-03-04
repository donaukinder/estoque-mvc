<h1 class="d-flex justify-content-center">Relatório</h1>
<div class="container">
<table class="table">
	<thead class="thead-light">
	<tr>
		<th>Nome do Produto</th>
		<th>Qtd.</th>
		<th>Qtd. Min.</th>
		<th>Diferença</th>
	</tr>
	</thead>
	<?php foreach ($list as $item): ?>
		<tr>
			<td><?php echo $item['name']; ?></td>
			<td><?php echo $item['quantity']; ?></td>
			<td><?php echo $item['min_quantity']; ?></td>
			<td><?php echo (floatval($item['min_quantity']) - floatval($item['quantity']));?></td>

		</tr>
	<?php endforeach; ?>	
</table>
</div>
<script type="text/javascript">
window.print();	
</script>
