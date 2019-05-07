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

		<?php if(isset($_GET['contato']) && $_GET['contato'] == 'sucesso') { ?>
			<div id="alert1">
				<span onclick="hiddenAlert1()">x</span>
				<div class="alert alert-success text-center">
					Sua mensagem foi enviada com sucesso, em breve retornaremos o contato!
				</div>
			</div>
		<?php } ?>

		<?php if(isset($_GET['contato']) && $_GET['contato'] == 'erro') { ?>
			<div id="alert2">
				<span onclick="hiddenAlert2()">x</span>
				<div class="alert alert-danger text-center">
					Houve um erro ao enviar a mensagem, tente novamente mais tarde!
				</div>
			</div>
		<?php } ?>


		<div class="row">
			<div class="col-md-6">
				<div class="p-5">
					<form class="form-group" action="process/cadastrar/contato.php" method="post">
						<div>
							<label class="ml-2 mt-2">Nome:</label>
							<input type="text" name="nome" class="form-control">
						</div>
						<div>
							<label class="ml-2 mt-2">Email:</label>
							<input type="text" name="email" class="form-control">
						</div>
						<div>
							<label class="ml-2 mt-2">Telefone:</label>
							<input type="text" name="telefone" class="form-control">
						</div>
						<div>
							<label class="ml-2 mt-2">Assunto:</label>
							<input type="text" name="assunto" class="form-control">
						</div>
						<div>
							<label class="ml-2 mt-2">Mensagem:</label>
							<textarea type="text" name="mensagem" class="form-control" rows="5"></textarea> 
						</div>
						<div class="mt-4">
							<button class="btn btn-success btn-block">Enviar Mensagem</button>
						</div>
					</form>
				</div>
			</div>

			<div class="col-md-6">
				<div class="p-5">
					<h1>Entre em contato</h1>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus convallis euismod pretium. Nunc ultrices odio non ipsum mollis, eu dictum tellus iaculis. Sed quis mi ex. Nullam a ante eros. Donec porttitor risus id augue feugiat, in tincidunt lorem porttitor. Sed ante ante, consectetur sed lobortis in, feugiat nec arcu. Nam scelerisque posuere dignissim. Nunc euismod hendrerit pellentesque. In at dignissim justo, in hendrerit enim. Donec scelerisque vel felis in laoreet. 
					</p>
					<p>
						Morbi sit amet enim non lacus efficitur efficitur ornare a justo. Vestibulum dolor tellus, eleifend vel tristique id, imperdiet lacinia neque. Duis hendrerit consectetur tellus. Duis vehicula odio non aliquam varius. Sed ante ante, consectetur sed lobortis in, feugiat nec arcu. Nam scelerisque posuere dignissim. Nunc euismod hendrerit pellentesque. In at dignissim justo, in hendrerit enim. Donec scelerisque vel felis in laoreet.
					</p>
				</div>
			</div>
		</div>


	</div>
</body>

<?php include 'footer.php'; ?>