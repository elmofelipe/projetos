<?php include "header.php";  ?>

<section id="jobs" class="pb-30 pt-30 pb-md-30 pt-md-30 light">
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
          <li><a href="#">Clientes</a></li>
          <li><a href="#">Sistema Cilia</a></li>
          <li><a href="#">Ajustes </a></li>
        </ul>
      </div>
		</div> 
	</div>
	<div class="bg-wrap">
		<div class="bg"></div>
	</div>
</section>

<section id="cliente">
	<form action="">

		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="row">
						<div class="col-lg-6">
							<h1><strong>Ajustes do Cliente</strong><br>e aprovadores</h1>
							<div class="form-group ">
								<label for="">Cliente</label>
								<input type="text" class="form-control" placeholder="Digite o nome do Cliente que você deseja adicionar" name="cliente" >
							</div>
							<div class="row">
								<div class="col-lg-6 col-11">
									<label for="">Nome do aprovador</label>
									<input type="text" class="form-control" placeholder="Nome do aprovador" name="Nomeaprovador">
								</div>
								<div class="col-lg-6 col-11">
									<label for="">E-mail</label>
									<input type="email" class="form-control"  placeholder="Email do aprovador" name="email"><a href="#">
										<img src="images/Union.svg" class="form-editar"></a>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-6 col-11">
									<label for="">Nome do aprovador</label>
									<input type="text" class="form-control" placeholder="Nome do aprovador" name="Nomeaprovador">
								</div>
								<div class="col-lg-6 col-11">
									<label for="">E-mail</label>
									<input type="email" class="form-control"  placeholder="Email do aprovador" name="email"><a href="#">
										<img src="images/lixeira.svg" class="form-excluir"></a>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-3 col-3">
									<a href="#" id="set-post-thumbnail" aria-describedby="set-post-thumbnail-desc" class="thickbox">
										<svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 64 64" height="24px" viewBox="0 0 64 64" width="24px" src="./images/gallery/lineaicons/arrows_plus.svg" class="icon svg-secondary" alt="icon" style=""><path d="m31 14v17h-17v2h17v17h2v-17h17v-2h-17v-17z"></path></svg>
									</a>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-12 excluir-cliente">
									<a href="#" data-toggle="modal" data-target="#excluir-cliente">Excluir Cliente</a>
								</div>
							</div>
						</div><!-- 6 -->
						<div class="col-lg-6 pl-12 editar-capa">
							<img src="images/editar-cliente.png" class="img-capa"> 
							<a href="#" class="link">Editar capa</a>
						</div>
					</div>
				</div>
			</div>
		</div>

    <div class="container-fluid shadow concluir">
			<div class="row justify-content-end">
				<div class="col-lg-2 col-6">
					<a href="cliente-com-jobs.php" class="btn btn-light">Cancelar</a>
				</div>
				<div class="col-lg-3 col-6">
					<a href="usuario.php" class="btn btn-success">Editar conteudo</a>
				</div>
			</div>
		</div>
		
	</form>
</section>

<div class="modal-container">
	<div class="modal fade" id="excluir-cliente" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
			<div class="modal-content padding-x3 ">
				<button type="button" class="close position-absolute r-0 t-0" data-dismiss="modal" aria-label="Close"><svg xmlns="http://www.w3.org/2000/svg" height="16" viewBox="0 0 16 16" width="16" class="icon svg-secondary"><path d="m8.07106781 6.65685425 5.65685429-5.65685425 1.4142135 1.41421356-5.65685423 5.65685425 5.65685423 5.65685429-1.4142135 1.4142135-5.65685429-5.65685423-5.65685425 5.65685423-1.41421356-1.4142135 5.65685425-5.65685429-5.65685425-5.65685425 1.41421356-1.41421356z" fill-rule="evenodd"></path></svg></button>
				<div class="modal-body">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<img src="images/certeza.svg" class="img-fluid" alt="logo">
							</div>
							<div class="col-md-12 text-center">
								<h3>Tem certeza que deseja excluir esse cliente?</h3>
							</div>
							<div class="col-md-6 col-4">
								<button type="button" class="btn btn-light"  data-dismiss="modal" aria-label="Close">Cancelar</button>
							</div>
							<div class="col-md-6 col-6">
								<a href="usuario.php" class="btn btn-adiciobar-job">Sim, excluir</a>
							</div>
						</div>
					</div>
				</div>
				<div class="bg-wrap">
					<div class="bg"></div>
				</div>
			</div>
    </div>
	</div>
</div>

<?php include "footer.php";  ?>