<?php

include '../../aplicacao_web_Off/validador.php';
include 'header.php';

include '../controller/User.php';

/*
echo '<pre>';
print_r($_SESSION);
echo '</pre>';
*/

?>

<head>
	<script type="text/javascript">
		function hiddenAlert1() {
			document.getElementById('alert1').style.display = "none";
		}
		function hiddenAlert2() {
			document.getElementById('alert2').style.display = "none";
		}
	</script>
</head>

<body>
	<div class="container">

		<?php if(isset($_GET['cadastro']) && $_GET['cadastro'] == 'sucesso') { ?>
			<div id="alert1">
				<span onclick="hiddenAlert1()">x</span>
				<div class="alert alert-success text-center">
					Cadastro Efetuado com Sucesso!
				</div>
			</div>
		<?php } ?>

		<?php if(isset($_GET['login']) && $_GET['login'] == 'sucesso') { ?>
			<div id="alert2">
				<span onclick="hiddenAlert2()">x</span>
				<div class="alert alert-success text-center">
					Login Efetuado com Sucesso!
				</div>
			</div>
		<?php } ?>

		<h1>Dashboard - Seja bem vindo <?php echo $user->nome ?></h1>
	</div>
</body>

<?php include 'footer.php'; ?>