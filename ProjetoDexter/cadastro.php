<!doctype html>
<html dir="ltr" lang="pt-BR">
<head>
<meta charset="utf-8">
<title>Dexter Courier | Cadastre-se</title>
<link href='http://fonts.googleapis.com/css?family=Raleway:400,700'
	rel='stylesheet' type='text/css'>
<link
	href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700'
	rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<header class="header">
        <?php include_once 'template/topo.php'; ?>
    </header>

	<div class="container content">
		<div class="title center">
			<h1>Cadastre-se</h1>
		</div>

		<div class="banner-fixed">
			<img src="img/banner-cadastro.jpg" alt="Banner Sobre">
		</div>


		<?php 

		if ($_POST) {
			
			// var_dump($_POST);

			$ok = true;
			$invalidos = [];
			if (!validaCampo($_POST['nome'])) {
				$invalidos[] = 'Campo Nome é Obrigatório';
				$ok = false;
			}

			if (!validaCampo($_POST['email'])) {
				$invalidos[] = 'Campo Email é Obrigatório';
				$ok = false;
			}
			

			if (!$ok){
				echo '<div class="alert alert-danger" role="alert">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">
				&times;
				</button>';
				foreach ($invalidos as $msg) {
					echo $msg . '<br>';
				}
				echo '</div>';
			} else {
				echo '<div class="alert alert-success" role="alert">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">
				&times;
				</button>
				Enviado</div>';
			}
		}


		 ?>		

		<form action="#" method="post" class="form">
			<p>
				<label for="nome">Nome/Razao</label> <input type="text" value="<?= (isset($_POST['nome'])) ? $_POST['nome'] : ''; ?>" name="nome"
					id="nome_razao">
			</p>
			<p>
				<label for="email">Email</label> <input type="email" value="<?= (isset($_POST['email'])) ? $_POST['email'] : ''; ?>" name="email"
					id="email">
			</p>
			<p>
				<label for="tel">Telefone</label> <input type="tel" value="<?= (isset($_POST['telefone'])) ? $_POST['telefone'] : ''; ?>" name="telefone"
					id="telefone" >
			</p>
			<p>
				<label for="cel">Celular</label> <input type="tel" value="<?= (isset($_POST['celular'])) ? $_POST['celular'] : ''; ?>" name="celular"
					id="celular"  >
			</p>
			<p>
				<label for="cep">Cep</label> <input type="tel" value="<?= (isset($_POST['cep'])) ? $_POST['cep'] : ''; ?>" name="cep" id="tel"
					 >
			</p>
			<p>
				<label for="endereco">Endereço</label> <input type="tel"
				 value="<?= (isset($_POST['telefone'])) ? $_POST['telefone'] : ''; ?>"	name="telefone" id="bai" >
			</p>
			<p>
				<label for="bairro">Bairro</label> <input type="tel" value="<?= (isset($_POST['bairro'])) ? $_POST['bairro'] : ''; ?>" name="bairro"
					id="tel" >
			</p>
			<p>
				<label for="cidade">Cidade</label> <input type="tel" value="<?= (isset($_POST['cidade'])) ? $_POST['cidade'] : ''; ?>" name="cidade"
					id="cidade" >
			</p>
			<p>
				<label for="Estado">Estado</label>
				 <select name="estado" id="estado">
					<option <?= (isset($_POST['estado']) && $_POST['estado'] == '')? 'selected' : ''; ?> value="">Selecione</option>
					<option <?= (isset($_POST['estado']) && $_POST['estado'] == 'AC')? 'selected' : ''; ?> value="AC">AC</option>
					<option <?= (isset($_POST['estado']) && $_POST['estado'] == 'AL')? 'selected' : ''; ?> value="AL">AL</option>
					<option <?= (isset($_POST['estado']) && $_POST['estado'] == 'AP')? 'selected' : ''; ?> value="AP">AP</option>
					<option <?= (isset($_POST['estado']) && $_POST['estado'] == 'AM')? 'selected' : ''; ?> value="AM">AM</option>
					<option <?= (isset($_POST['estado']) && $_POST['estado'] == 'BA')? 'selected' : ''; ?> value="BA">BA</option>
					<option <?= (isset($_POST['estado']) && $_POST['estado'] == 'CE')? 'selected' : ''; ?> value="CE">CE</option>
					<option <?= (isset($_POST['estado']) && $_POST['estado'] == 'DF')? 'selected' : ''; ?> value="DF">DF</option>
					<option <?= (isset($_POST['estado']) && $_POST['estado'] == 'ES')? 'selected' : ''; ?> value="ES">ES</option>
					<option <?= (isset($_POST['estado']) && $_POST['estado'] == 'GO')? 'selected' : ''; ?> value="GO">GO</option>
					<option <?= (isset($_POST['estado']) && $_POST['estado'] == 'MA')? 'selected' : ''; ?> value="MA">MA</option>
					<option <?= (isset($_POST['estado']) && $_POST['estado'] == 'MT')? 'selected' : ''; ?> value="MT">MT</option>
					<option <?= (isset($_POST['estado']) && $_POST['estado'] == 'MS')? 'selected' : ''; ?> value="MS">MS</option>
					<option <?= (isset($_POST['estado']) && $_POST['estado'] == 'MG')? 'selected' : ''; ?> value="MG">MG</option>
					<option <?= (isset($_POST['estado']) && $_POST['estado'] == 'PA')? 'selected' : ''; ?> value="PA">PA</option>
					<option <?= (isset($_POST['estado']) && $_POST['estado'] == 'PB')? 'selected' : ''; ?> value="PB">PB</option>
					<option <?= (isset($_POST['estado']) && $_POST['estado'] == 'PR')? 'selected' : ''; ?> value="PR">PR</option>
					<option <?= (isset($_POST['estado']) && $_POST['estado'] == 'PE')? 'selected' : ''; ?> value="PE">PE</option>
					<option <?= (isset($_POST['estado']) && $_POST['estado'] == 'PI')? 'selected' : ''; ?> value="PI">PI</option>
					<option <?= (isset($_POST['estado']) && $_POST['estado'] == 'RJ')? 'selected' : ''; ?> value="RJ">RJ</option>
					<option <?= (isset($_POST['estado']) && $_POST['estado'] == 'RN')? 'selected' : ''; ?> value="RN">RN</option>
					<option <?= (isset($_POST['estado']) && $_POST['estado'] == 'RS')? 'selected' : ''; ?> value="RS">RS</option>
					<option <?= (isset($_POST['estado']) && $_POST['estado'] == 'RO')? 'selected' : ''; ?> value="RO">RO</option>
					<option <?= (isset($_POST['estado']) && $_POST['estado'] == 'RR')? 'selected' : ''; ?> value="RR">RR</option>
					<option <?= (isset($_POST['estado']) && $_POST['estado'] == 'SC')? 'selected' : ''; ?> value="SC">SC</option>
					<option <?= (isset($_POST['estado']) && $_POST['estado'] == 'SP')? 'selected' : ''; ?> value="SP">SP</option>
					<option <?= (isset($_POST['estado']) && $_POST['estado'] == 'SE')? 'selected' : ''; ?> value="SE">SE</option>
					<option <?= (isset($_POST['estado']) && $_POST['estado'] == 'TO')? 'selected' : ''; ?> value="TO">TO</option>
				</select>
			</p>
			<p>
				<button class="btn">Enviar</button>
			</p>
		</form>
	</div>

	<footer class="footer">
        <?php include_once 'template/rodape.php'; ?>
    </footer>

</body>

</html>
