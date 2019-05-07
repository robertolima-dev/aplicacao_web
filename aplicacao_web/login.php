<?php include 'header.php'; ?>

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

		<?php if(isset($_GET['login']) && $_GET['login'] == 'erro') { ?>
			<div id="alert1">
				<span onclick="hiddenAlert1()">x</span>
				<div class="alert alert-danger text-center">
					Email e Senha incorretos, tente novamente!
				</div>
			</div>
		<?php } ?>

		<?php if(isset($_GET['login']) && $_GET['login'] == 'erro2') { ?>
			<div id="alert2">
				<span onclick="hiddenAlert2()">x</span>
				<div class="alert alert-danger text-center">
					Faça Login para acessar a página desejada!
				</div>
			</div>
		<?php } ?>



		<div class="row">
			<div class="col-md-6 mb-5">

				<div class="p-5">
					<div class="p-5" style="border: 1px solid black; border-radius: 20px;">

						<form class="form-group" action="process/validar/login.php" method="post">

							<div class="text-center">
								<h5>Faça seu Login</h5>
							</div>

							<div>
								<label>Email:</label>
								<input type="text" name="email" class="form-control">
							</div>
							<div>
								<label>Senha:</label>
								<input type="password" name="senha" class="form-control">
							</div>

							<div>
								<button class="btn btn-success btn-block mt-3">Login</button>
							</div>
						</form>

					</div>
				</div>

			</div>
		</div>
	</div>
</body>

<?php include 'footer.php'; ?>