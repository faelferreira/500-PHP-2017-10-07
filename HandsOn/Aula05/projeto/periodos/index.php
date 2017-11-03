<?php include_once '../_topo.php'; ?>
<?php verificarLogin() ?>


<div class="cointainer">

	<div class="page-header">
		<h2>Gerenciar <small>Períodos</small></h2>
	</div>

	<table class="table table-striped">
		<thead>
			<tr>
				<th>#</th>
				<th>Período</th>
				<th>Ações</th>
			</tr>
		</thead>
		<tbody>
			
			<?php foreach ($periodos as $periodo) :?>

			<?php endforeach; ?>
		</tbody>
	</table>
	
</div>


<?php include_once '../_rodape.php'; ?>