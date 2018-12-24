<?php include_once ('includes/header.php'); ?>

<link href="assets/css/style_contato.css" rel="stylesheet" />

<div class="container">
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
</div>

<div class="container">
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
</div>

<div class="container">
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<h1 class="tag-home">Somos um escritório de engenharia online, voltado <strong>exclusivamente para a venda de projetos e construções.</strong> Nossos projetos são elaborados por engenheiros projetistas qualificados, satisfazendo os mais diversos perfis de clientes com um modelo de negócio versátil e inovador.</h1> 
			<hr />
		</div>
	</div>
</div>

<?php include_once ('includes/footer.php'); ?>	