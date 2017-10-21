

<?php include_once '_topo.php'; ?>

<h1>Contato</h1>

<div class="col-sm-6">
<form action="#" method="POST">
 <div class="form-group">
    <label for="exampleInputName">Nome</label>
    <input type="text" name="nome" class="form-control" id="exampleInputName" placeholder="Nome">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Assunto</label>
    <input type="text" name="assunto" class="form-control" id="exampleInputEmail1" placeholder="Mensagem">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Mensagem</label>
    <textarea class="form-control" name="mensagem"></textarea>
  </div>
 
  <button type="submit" class="btn btn-default">Submit</button>
</form>
</div>
<div class="col-sm-6">
	<h3>Mensagem</h3>
	<?php 

	if ($_POST) {
		
		echo "<p>". $_POST['nome']."</p>";
		echo "<p>". $_POST['email']."</p>";
		echo "<p>". $_POST['assunto']."</p>";
		echo "<p>". $_POST['mensagem']."</p>";

		var_dump($_POST);

	}

	 ?>
</div>
<?php include_once '_rodape.php'; ?>