<?php include_once '_topo.php'; ?>

<?php 
	
	if ($_POST) {
		if (login($_POST)) {
			header('Location:index.php');
		}
	}

 ?>
<h1>Login</h1>

<form action="#" method="POST">
  <div class="form-group">
    <label>Email address</label>
    <input type="email" name="email" class="form-control" placeholder="Email" required>
  </div>
  <div class="form-group">
    <label>Password</label>
    <input type="password" name="senha" class="form-control" placeholder="Password" required>
  </div>
  <button type="submit" class="btn btn-default">Login</button>
</form>

<?php include_once '_rodape.php'; ?>