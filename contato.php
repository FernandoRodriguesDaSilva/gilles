<?php include_once ('includes/header.php'); ?>

<link href="assets/css/style_contato.css" rel="stylesheet" />

<style>
.bgimg-1 {
	background-image: url(assets/img/contato1.jpg);
	min-height: 400px;
	background-repeat: no-repeat;
	width: 100%;
}

.bgimg-2 {
	background-image: url(assets/img/contato2.png);
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

<div class="container">

	<div class="bgimg-1 hidden-xs col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="caption">
			<span class="border">Converse conosco</span>
		</div>
	</div>

	<hr>

	<div class="row row1">
		<div class="col-sm-6">
			<h1 class="tag-contact">Nossos Contatos</h1>
			<ul class="contact-info">
				<li><i class="fas fa-phone"></i> (16) 3343 - 4921</li>
				<li><i class="fas fa-mobile-alt"></i> (16) 99240 - 9076</li>
				<li><i class="far fa-envelope"></i> andre.gilles65@gmail.com</li>
			</ul>
		</div>
		<div class="col-sm-6">
			<h1 class="tag-contact">
				Aqui você contrata os serviços necessários para construir o projeto dos seus sonhos. 
				Ah, e se preferir alterar uma planta ou fazer um projeto novo, nós fazemos!! <br>
				Solicite um orçamento com o nosso engenheiro.
			</h1>
		</div>
	</div>

	<hr>

	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><br>
		<div class="form">
			<h2 style="text-align: center;">Entre em contato</h2><br>
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

	<div class="bgimg-2 hidden-xs col-lg-12 col-md-12 col-sm-12 col-xs-12">
	</div>

	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<h1 class="tag-home">Somos um escritório de engenharia online, voltado <strong>exclusivamente para a venda de projetos e construções.</strong> Nossos projetos são elaborados por engenheiros projetistas qualificados, satisfazendo os mais diversos perfis de clientes com um modelo de negócio versátil e inovador.</h1> 
			<hr />
		</div>
	</div>
</div>

<?php include_once ('includes/footer.php'); ?>	