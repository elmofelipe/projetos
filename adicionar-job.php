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
          <li><a href="#">Adicionar job</a></li>
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
							<div class="form-group ">
								<label for="">Nome deste item</label>
								<input type="text" class="form-control" placeholder="Nome deste item" name="cliente" >
							</div>
							<div class="form-group">
								<label for="">Descrição</label>
								<textarea class="form-control" id="" ></textarea>
							</div>
							<div class="row justify-content-end">
								<div class="col-lg-4 col">
								<button type="button" class="btn btn-excluir-item" disabled>Excluir item</button>
								</div>
								<div class="col-lg-4 col">
									<button type="submit" class="btn btn-item">Adicionar item</button>
								</div>
							</div>
						</div><!-- 6 -->
						<div class="col-lg-6 pl-12 editar-capa">
							<a href="#" class="upload">
								<div class="texto">
									<img src="images/arquivo.svg" class="img-upload">
									Cliqui ou arraste para fazer upload do arquivo
								</div>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>

    <div class="container-fluid shadow concluir">
			<div class="row justify-content-end">
				<div class="col-lg-7 col-12">
				<nav aria-label="...">
					<ul class="pagination pagination-sm">
						<li class="page-item active" aria-current="page">
							<span class="page-link">1</span>
						</li>
						<li class="page-item"><a class="page-link" href="#">2</a></li>
						<li class="page-item"><a class="page-link" href="#"><img src="images/positivo.svg" class="img-upload"></a></li>
					</ul>
				</nav>
				</div>
				<div class="col-lg-2 col-6">
					<a href="usuario.php" class="btn btn-light">Cancelar</a>
				</div>
				<div class="col-lg-3 col-6">
					<a href="revisao.php" class="btn btn-success">Concluir e revisar</a>
				</div>
			</div>
		</div>
		
	</form>
</section>


<?php include "footer.php";  ?>