<?php include "header.php";  ?>

<section id="jobs" class="pb-50 pt-30 pb-md-50 pt-md-30 light">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 breadcrumb-linha" style="">
				<ul>
					<li class="breadcrumb-home">
						<a href="#">
								<ic-icon inline="true" size="20px" class="ic-inline" style="font-size: 20px;">
									<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg); vertical-align: -0.125em;"><path d="M12 3L2 12h3v8h6v-6h2v6h6v-8h3L12 3zm5 15h-2v-6H9v6H7v-7.81l5-4.5 5 4.5V18z" fill="currentColor"></path><path opacity=".3" d="M7 10.19V18h2v-6h6v6h2v-7.81l-5-4.5z" fill="currentColor"></path>
									</svg>
								</ic-icon>
						</a>
					</li>
					<li><a href="#">Minha conta</a></li>
				</ul>
			</div>
		</div> 
	</div>
	<div class="bg-wrap">
			<div class="bg"></div>
	</div>
</section>

<section id="conta" class="pb-50 pt-50 pb-md-100 pt-md-50 light">
	<div class="container">
		<div class="row justify-content-md-center layout-header pb-100 pt-20 pb-md-100 pt-md-100 shadow">
			<div class="col-lg-3">
				<nav class="nav flex-column">
					<a class="nav-link " href="#">Minha Conta</a>
					<a class="nav-link active" href="#">Meu Time</a>
					<a class="nav-link " href="#">Configurações</a>
					<a class="nav-link " href="#">senha</a>
				</nav>
			</div>
			<div class="col-lg-6 membros">
				<div class="row membros-linha">
					<div class="col-lg-6  col-6 plr-0">
						<h3>Membros do time</h3>
					</div>
					<div class="col-lg-6 col-6  plr-0 text-right order-md-3">
						<a href="#" class="adicionar" data-toggle="modal" data-target="#adicionar-membro"><img src="images/adicionar.svg"> adicionar Membro</a>
					</div>
				</div>
				<div class="row lista">
					<div class="col-lg-2 col-2 plr-0 mb-lista">
						<p>Tatá</p>
					</div>
					<div class="col-lg-7 col-5 plr-0 mb-lista border-bottom">
						(tavanylopes@gmail.com)
					</div>
					<div class="col-lg-3 col-5 plr-0 mb-lista border-bottom">
						<ul>
							<li><a href="#" data-toggle="modal" data-target="#acesso-clientes"><img src="images/Union.svg" class=""></a></li>
							<li><a href="#"><img src="images/lixeira.svg" class="form-excluir"></a></li>
						</ul>
					</div>

				</div>
			</div>
		</div> 
	</div>

	<div class="bg-wrap">
			<div class="bg"></div>
	</div>
</section>



<?php include "modal.php";  ?>   
<?php include "footer.php";  ?>

