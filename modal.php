<!-- adicionar job -->
<div class="modal-container">
	<div class="modal fade" id="adicionar-job" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
			<div class="modal-content padding-x2 ">
				<button type="button" class="close position-absolute r-0 t-0" data-dismiss="modal" aria-label="Close"><svg xmlns="http://www.w3.org/2000/svg" height="16" viewBox="0 0 16 16" width="16" class="icon svg-secondary"><path d="m8.07106781 6.65685425 5.65685429-5.65685425 1.4142135 1.41421356-5.65685423 5.65685425 5.65685423 5.65685429-1.4142135 1.4142135-5.65685429-5.65685423-5.65685425 5.65685423-1.41421356-1.4142135 5.65685425-5.65685429-5.65685425-5.65685425 1.41421356-1.41421356z" fill-rule="evenodd"></path></svg></button>
				<div class="modal-body">
					<div class="row">
						<div class="col-md-12 text-left">
							<h3>Vamos criar um job?</h3>
						</div>
						<div class="col-md-12">
							<form action="">
									<label for="">Nome do job</label>
									<input type="text" class="form-control" placeholder="" name="" >
									<label for="">Cliente</label>
                  <div class="form-group select-group">
                    <select class="spr-select-field form-control " name="select_0">
                      <option value="" selected="" disabled=""></option>
                      <option value=""></option>
                    </select>
                    <svg width="16" class="icon svg-default" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" style="top: 63%;">
                      <path d="M1 1L5.93026 7L10.8605 1" stroke="url(#paint0_linear)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                      <defs>
                      <linearGradient id="paint0_linear" x1="11.1575" y1="1" x2="0.438519" y2="1.70039" gradientUnits="userSpaceOnUse">
                      <stop offset="0.044957" stop-color="#6E4BE8"/>
                      <stop offset="1" stop-color="#1EA8E7"/>
                      </linearGradient>
                      </defs>
                    </svg>
                  </div>
                  <label for="">Tipo de Envio</label>
                  <div class="row text-center plr-7 justify-content-between">
										<div class="col-lg-5 box box-active">
										  <img src="images/Avulso.svg" class="img-fluid">
                      <h2>Avulso</h2>
                      <p>Envio de apenas um item para aprovação</p>
										</div>
										<div class="col-lg-5 box">
									   	<img src="images/pacote.svg" class="img-fluid">
                      <h2>Pacote</h2>
                      <p>È possivel adicionar e enviar varios itens</p>
										</div>
									</div>
									<div class="row">
										<div class="col-lg-6">
											<button type="" class="btn btn-light btn-block">cancelar</button>
										</div>
										<div class="col-lg-6">
											<button type="submit" class="btn btn-salvar btn-block">Adicionar job</button>
										</div>
									</div>
							</form>
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
<!-- Trocar de plano -->
<div class="modal-container">
	<div class="modal fade" id="plano" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
			<div class="modal-content padding-x3 ">
				<button type="button" class="close position-absolute r-0 t-0" data-dismiss="modal" aria-label="Close"><svg xmlns="http://www.w3.org/2000/svg" height="16" viewBox="0 0 16 16" width="16" class="icon svg-secondary"><path d="m8.07106781 6.65685425 5.65685429-5.65685425 1.4142135 1.41421356-5.65685423 5.65685425 5.65685423 5.65685429-1.4142135 1.4142135-5.65685429-5.65685423-5.65685425 5.65685423-1.41421356-1.4142135 5.65685425-5.65685429-5.65685425-5.65685425 1.41421356-1.41421356z" fill-rule="evenodd"></path></svg></button>
				<div class="modal-body">
					<div class="container">
						<div class="row">
							<div class="col-md-12 text-center">
								<h3>Planos de preços</h3>
								<p>Escolha seu plano alterando entre os diferentes preços</p>
							</div>
							<div class="col-md-12 text-center">
								<div class="btn-group" role="group" aria-label="Basic example">
									<button type="button" class="btn btn-secondary active">Mensal</button>
									<button type="button" class="btn btn-secondary">Anual</button>
								</div>
							</div>
						</div>
						<div class="row text-center">
							<div class="col-md-4 col-12 box box-active">
								<div class=" basico">
									<h4 class="text-primary">Básico</h4>
									<h2 class="mb-0">R$20</h2>
									<span>/Por mês</span>
									<ul>
										<li>3 clientes</li>
										<li>-</li>
										<li>-</li>
									</ul>
									<a href="usuario.php" class="btn btn-secondary btn-block ">Plano atual</a>
								</div>
							</div>
							<div class="col-md-4 col-12 box">
								<div class=" pro">
									<h4 class="text-primary">PRO</h4>
									<h2 class="mb-0">R$40</h2>
									<span>/Por mês</span>
									<ul>
										<li>6 clientes</li>
										<li>Backup</li>
										<li>4 Lorem ipsulun</li>
									</ul>
									<a href="usuario.php" class="btn btn-success btn-block ">Escolher plano</a>
								</div>
							</div>
							<div class="col-md-4 col-12 box">
								<div class=" time">
									<h4 class="text-primary">TIME</h4>
									<h2 class="mb-0">R$80</h2>
									<span>/Por mês</span>
									<ul>
										<li>12 clientes</li>
										<li>Backup</li>
										<li>Time ilimitado</li>
									</ul>
									<a href="usuario.php" class="btn btn-success btn-block">Escolher plano</a>
								</div>
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

<!-- meu-time -->

<div class="modal-container">
	<div class="modal fade" id="adicionar-membro" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
			<div class="modal-content padding-x2 ">
				<button type="button" class="close position-absolute r-0 t-0" data-dismiss="modal" aria-label="Close"><svg xmlns="http://www.w3.org/2000/svg" height="16" viewBox="0 0 16 16" width="16" class="icon svg-secondary"><path d="m8.07106781 6.65685425 5.65685429-5.65685425 1.4142135 1.41421356-5.65685423 5.65685425 5.65685423 5.65685429-1.4142135 1.4142135-5.65685429-5.65685423-5.65685425 5.65685423-1.41421356-1.4142135 5.65685425-5.65685429-5.65685425-5.65685425 1.41421356-1.41421356z" fill-rule="evenodd"></path></svg></button>
				<div class="modal-body">
					<div class="row">
						<div class="col-md-12 text-center">
							<h3>Adicionar membro</h3>
							<p>Convide alguém para fazer parte do seu time</p>
						</div>
						<div class="col-md-12">
							<form action="">
									<label for="">Nome</label>
									<input type="text" class="form-control" placeholder="" name="" >
									<label for="">Email</label>
									<input type="email" class="form-control" placeholder="" name="" >
									<div class="row">
										<div class="col-lg-6 col-6">
											<button type="" class="btn btn-light btn-block">cancelar</button>
										</div>
										<div class="col-lg-6 col-6">
											<button type="submit" class="btn btn-salvar btn-block">Salvar</button>
										</div>
									</div>
							</form>
						</div>
					</div>
				</div>
				<div class="bg-wrap">
					<div class="bg"></div>
				</div>
			</div>
    </div>
	</div>

	<div class="modal fade" id="acesso-clientes" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
			<div class="modal-content padding-x2 ">
				<button type="button" class="close position-absolute r-0 t-0" data-dismiss="modal" aria-label="Close"><svg xmlns="http://www.w3.org/2000/svg" height="16" viewBox="0 0 16 16" width="16" class="icon svg-secondary"><path d="m8.07106781 6.65685425 5.65685429-5.65685425 1.4142135 1.41421356-5.65685423 5.65685425 5.65685423 5.65685429-1.4142135 1.4142135-5.65685429-5.65685423-5.65685425 5.65685423-1.41421356-1.4142135 5.65685425-5.65685429-5.65685425-5.65685425 1.41421356-1.41421356z" fill-rule="evenodd"></path></svg></button>
				<div class="modal-body">
					<div class="row">
						<div class="col-md-12 text-center">
							<h3>Acesso aos clientes</h3>
							<p>Selecione a quais clientes <span>Tatá</span> tem acessso</p>
						</div>
						<div class="col-md-12">
							<form action="">
								<table class="table table-hover">
									<thead>
										<tr>
											<th scope="col" style="width:38px">
												<input id="" type="checkbox" name="" value="">
												<span class="checkmark"></span>
											</th>
											<th scope="col"><span>MARCAR TODOS</span></th>
										</tr>
									</thead>
									<tbody>
									<tr>
										<th scope="row"><input id="" type="checkbox" name="" value=""></th>
										<td>
										<div class="media">
											<img src="images/cliente35.png" class="align-self-center" alt="...">
											<div class="media-body align-self-center">
												<h5 class="mb-0">Sistema Cilia</h5>
											</div>
										</div>
										</td>
									</tr>
									</tbody>
								</table> 
								<div class="row">
									<div class="col-lg-6 col-6">
										<button type="" class="btn btn-light btn-block">cancelar</button>
									</div>
									<div class="col-lg-6 col-6">
										<button type="submit" class="btn btn-salvar btn-block">Salvar</button>
									</div>
								</div>
							</form>
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

<!-- revisao -->
<div class="modal-container">
	<div class="modal fade" id="enviar-cliente" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
			<div class="modal-content padding-x2 ">
				<button type="button" class="close position-absolute r-0 t-0" data-dismiss="modal" aria-label="Close"><svg xmlns="http://www.w3.org/2000/svg" height="16" viewBox="0 0 16 16" width="16" class="icon svg-secondary"><path d="m8.07106781 6.65685425 5.65685429-5.65685425 1.4142135 1.41421356-5.65685423 5.65685425 5.65685423 5.65685429-1.4142135 1.4142135-5.65685429-5.65685423-5.65685425 5.65685423-1.41421356-1.4142135 5.65685425-5.65685429-5.65685425-5.65685425 1.41421356-1.41421356z" fill-rule="evenodd"></path></svg></button>
				<div class="modal-body">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<img src="images/concluido.svg" class="img-fluid" alt="logo">
							</div>
							<div class="col-md-12 text-center">
								<h3>Concluido!</h3>
								<p>Seu job já foi enviado para o cliente, te notificaremos caso seja aprovado ou o tenha algum ajuste ;)</p>
							</div>
							<div class="col-md-12 text-center">
								<a href="#">http://seulink.com</a>
								<h6>Compartilher o link do seu job!</h6>
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

<!-- adicionar-cliente -->
<div class="modal-container">
	<div class="modal fade" id="concluir" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
			<div class="modal-content padding-x2 ">
				<button type="button" class="close position-absolute r-0 t-0" data-dismiss="modal" aria-label="Close"><svg xmlns="http://www.w3.org/2000/svg" height="16" viewBox="0 0 16 16" width="16" class="icon svg-secondary"><path d="m8.07106781 6.65685425 5.65685429-5.65685425 1.4142135 1.41421356-5.65685423 5.65685425 5.65685423 5.65685429-1.4142135 1.4142135-5.65685429-5.65685423-5.65685425 5.65685423-1.41421356-1.4142135 5.65685425-5.65685429-5.65685425-5.65685425 1.41421356-1.41421356z" fill-rule="evenodd"></path></svg></button>
				<div class="modal-body">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<img src="images/parabens.svg" class="img-fluid" alt="logo">
							</div>
							<div class="col-md-12 text-center">
								<h3>Parabéns!</h3>
								<p>Você acabou de cadastra seu primeiro cliente, o que acha de adicionar seu primeiro job?</p>
							</div>
							<div class="col-md-6 col-4">
								<a href="cliente-com-jobs.php" class="btn btn-light">Agora não</a>
							</div>
							<div class="col-md-6 col-6">
								<a href="#" class="btn btn-adiciobar-job">Sim, adicionar job</a>
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

<!-- editar-cliente -->
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