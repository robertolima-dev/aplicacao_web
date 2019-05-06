<?php include 'header.php'; ?>

<body>
	<div class="container">
		<div class="row">
			<div class="col-md-6 mb-5">

				<div class="p-5">
					<div class="p-5" style="border: 1px solid black; border-radius: 20px;">

						<form class="form-group" action="process/validar/cadastro.php" method="post">

							<div class="text-center">
								<h5>Faça seu Cadastro</h5>
							</div>

							<div>
								<label>Nome:</label>
								<input type="text" name="nome" class="form-control">
							</div>
							<div>
								<label>Email:</label>
								<input type="text" name="email" class="form-control">
							</div>
							<div>
								<label>Senha:</label>
								<input type="password" name="senha" class="form-control">
							</div>

							<input type="hidden" name="status" value="1">

							<div>
								<button class="btn btn-success btn-block mt-3">Cadastrar-se</button>
							</div>
						</form>

					</div>
				</div>

			</div>
		</div>
	</div>
</body>

<?php include 'footer.php'; ?>