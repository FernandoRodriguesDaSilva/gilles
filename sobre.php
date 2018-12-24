<?php include_once('includes/header.php'); ?>

<link href="assets/css/style_sobre.css" rel="stylesheet" />

<style>
.bgimg-1 {
	background-image: url(assets/img/const2.jpg);
	min-height: 400px;
	background-repeat: no-repeat;
}

.bgimg-2 {
	background-image: url(assets/img/const3.jpg);
	min-height: 400px;
	width: 100%;
	background-repeat: no-repeat;
}

.caption {
	position: absolute;
	left: 0;
	top: 50%;
	width: 100%;
	text-align: center;
	color: #000;
}


</style>

<hr/>

<div class="container">

	<div class="bgimg-1 col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="caption">
			<span class="border">Como surgiu a empresa</span>
		</div>
	</div>

	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<h1 class="tag-about"> 
				Como já faz sucesso em países com Estados Unidos e Canadá, surgiu a necessidade de viabilizarmos plantas de casas e projetos feitos por profissionais competentes e de bom gosto a preços muitos mais acessíveis que um escritório de engenharia convencional. Tendo, assim como objetivo a satisfação plena de nossos clientes, através da excelência no atendimento e acompanhamento técnico necessário. Com isso, apresentamos um escritório virtual que contém uma grande variedade de projetos de plantas já prontos, mas com a escolha de modificá-los ou criar um modelo sob-medida, além de projetos complementares e de reformas interiores/exteriores.
				Para saber mais entre em contato conosco, para conhecer mais projetos finalizados e também em andamento.
			</h1>
			<hr/>
		</div>
	</div>

	<div class="col-lg-12 col-md-12 col-sm-6 col-xs-6 hidden-xs img-tablet">
		<div class="bgimg-2"></div>
	</div>

	<div class="container">
		<!-- Trigger the modal with a button -->
		<button type="button" class=" text-center btn btn-info btn-lg button-mobile button-tablet" data-toggle="modal" data-target="#myModal">Entre em contato</button>
		<!-- Modal -->
		<div class="modal fade" id="myModal" style="padding-right: 20em;" role="dialog">
			<div class="modal-dialog">
				<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title text-center">Preencha os campos abaixo</h4>
					</div>
					
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="margin-left: 5em;"><br>
						<div class="form">
							<h2>Entre em contato</h2><br>
							<form action="processa.php" method="post">
								<div class="form-group">
									<input type="text" name="mensagem" class="form-control" placeholder="Digite um assunto">
								</div><br>
								<div class="form-group">
									<input type="text" name="nome" class="form-control" placeholder="Digite seu nome">
								</div><br>
								<div class="form-group">
									<input type="text" name="email" class="form-control" placeholder="Digite seu email">
								</div><br>
								<div class="form-group">
									<input type="text" name="telefone" class="form-control" placeholder="Digite seu telefone">
								</div>
								<input type="submit" value="Enviar" class="btn btn-success">
							</form>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php include_once ('includes/footer.php'); ?>