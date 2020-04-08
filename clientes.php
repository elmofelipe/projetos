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
					<li><a href="#">Clientes</a></li>
				</ul>
			</div>
		</div> 
	</div>
	<div class="bg-wrap">
			<div class="bg"></div>
	</div>
</section>

<section id="customer-lists" class="pb-50 pt-50 pb-md-100 pt-md-50 light">


	<div class="container">


		<div class="row layout-header pb-5 pt-20 pb-md-5 pt-md-20 shadow order-md-1">
			<div class="col-4 col-lg-2 ">
				<h2>Clientes</h2>
			</div>
			<div class="col-8 col-lg-3 text-right order-md-3">
				<a href="adicionar-cliente.php" class="adicionar"><img src="images/adicionar.svg"> adicionar Cliente</a>
			</div> 
			<div class="col-12 col-lg-7 text-right search order-md-2">
				<div class="bg-card rounded-full border px-4 search-btn" >
					<ic-icon _ngcontent-svv-c19="" class="ng-tns-c19-3" size="20px" style="font-size: 20px;">
						<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);"><path d="M15.5 14h-.79l-.28-.27A6.471 6.471 0 0 0 16 9.5 6.5 6.5 0 1 0 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z" fill="currentColor"></path>
						</svg>
					</ic-icon>
					<input _ngcontent-svv-c19="" class="px-4 py-3 border-0 outline-none w-full bg-transparent ng-pristine ng-valid ng-touched" placeholder="Buscar..." type="search">
				</div>
			</div>
			
		</div> 
		
		<div class="row box-Client shadow">

			<div class="col-lg col-10 order-md-0 " style="border: 0px;">
				<div class="media">
					<img src="images/clie2.png" class="align-self-center mr-3 img-client" alt="">
					<div class="media-body align-self-center">
						<h5 class="mt-0">Sistema Cilia</h5>
						<p class="mb-0">Alex marques</p>
					</div>
				</div>
			</div>

			<div class="col-lg-1 col-2 align-self-center order-md-4">
				<a href="editar-cliente.php"><img src="images/Union.svg" class="btn-editar"></a>
			</div>

			<div class="col-lg align-self-center order-md-1" style="border-left: 1px solid rgba(28, 28, 28, 0.12);">
				<div class="media">
					<div class="rounded-full w-12 h-12 flex items-center justify-center ng-tns-c22-4 ng-star-inserted" style="background-color: rgba(255, 152, 0, 0.098); color: rgb(255, 152, 0);">
						<span class="mat-icon notranslate material-icons mat-icon-no-color" role="img" aria-hidden="true">
							<img src="images/icone-solitacao.png" class="img-icon" alt=""> 
						</span>
					</div>
					<div class="media-body align-self-center">
						<ul>
							<li><h3>5</h3></li>
							<li><p>Solicitações De Ajustes</p></li>
						</ul>
					</div>
				</div>
			</div>

			<div class="col-lg align-self-center order-md-2">
				<div class="media">
					<div class="rounded-full flex items-center justify-center ng-tns-c22-4 ng-star-inserted">
						<mat-icon class="mat-icon notranslate material-icons mat-icon-no-color" role="img" aria-hidden="true">
							<svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 64 64" height="64" viewBox="0 0 64 64" width="64" src="./images/gallery/lineaicons/basic_clessidre.svg" style="-ms-transform: rotate(360deg);-webkit-transform: rotate(360deg);transform: rotate(360deg);width: 56%;display: block;margin: 15px auto 10px auto;color: #5c77ff;"><circle opacity=".3" cx="9" cy="8.5" r="1.5" fill="currentColor"></circle><path d="m17 45v13h-4v6h38v-6h-3v-13c0-3.148-5.141-6.879-13.68-12.5 8.539-5.621 13.68-9.352 13.68-12.5v-14h3v-6h-38v6h4v14c0 3.148 5.141 6.879 13.68 12.5-8.539 5.621-13.68 9.352-13.68 12.5zm32 17h-34v-2h34zm-34-60h34v2h-34zm4 18v-14h27v14c0 2.389-7.343 7.269-13.5 11.304-6.157-4.035-13.5-8.915-13.5-11.304zm13.5 13.696c6.157 4.035 13.5 8.915 13.5 11.304v13h-27v-13c0-2.389 7.343-7.269 13.5-11.304z"></path></svg>
						</mat-icon>
					</div>
					<div class="media-body align-self-center">
						<ul>
							<li><h3>19</h3></li>
							<li><p>Aprovações Pendentes</p></li>
						</ul>
					</div>
				</div>
			</div>

			<div class="col-lg align-self-center order-md-3">
				<div class="media">
					<div class="rounded-full w-12 h-12 flex items-center justify-center ng-tns-c22-4 ng-star-inserted" style="background-color: #e6f5f3;">
						<span class="mat-icon notranslate material-icons mat-icon-no-color" role="img" aria-hidden="true">
							<img src="images/icone-aprovacao.png" class="img-icon" alt=""> 
						</span>
					</div>
					<div class="media-body align-self-center">
						<ul>
							<li><h3>50</h3></li>
							<li><p>Jobs Aprovados</p></li>
						</ul>
					</div>
				</div>
			</div>
			
		</div> <!-- box-Client -->

		<div class="row box-Client shadow">

			<div class="col-lg col-10 order-md-0 " style="border: 0px;">
				<div class="media">
					<img src="images/clie1.png" class="align-self-center mr-3 img-client" alt="">
					<div class="media-body align-self-center">
						<h5 class="mt-0">Sistema Cilia</h5>
						<p class="mb-0">Alex marques</p>
					</div>
				</div>
			</div>

			<div class="col-lg-1 col-2 align-self-center order-md-4">
				<a href="editar-cliente.php"><img src="images/Union.svg" class="btn-editar"></a>
			</div>

			<div class="col-lg align-self-center order-md-1" style="border-left: 1px solid rgba(28, 28, 28, 0.12);">
				<div class="media">
					<div class="rounded-full w-12 h-12 flex items-center justify-center ng-tns-c22-4 ng-star-inserted" style="background-color: rgba(255, 152, 0, 0.098); color: rgb(255, 152, 0);">
						<span class="mat-icon notranslate material-icons mat-icon-no-color" role="img" aria-hidden="true">
							<img src="images/icone-solitacao.png" class="img-icon" alt=""> 
						</span>
					</div>
					<div class="media-body align-self-center">
						<ul>
							<li><h3>5</h3></li>
							<li><p>Solicitações De Ajustes</p></li>
						</ul>
					</div>
				</div>
			</div>

			<div class="col-lg align-self-center order-md-2">
				<div class="media">
					<div class="rounded-full flex items-center justify-center ng-tns-c22-4 ng-star-inserted">
						<mat-icon class="mat-icon notranslate material-icons mat-icon-no-color" role="img" aria-hidden="true">
							<svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 64 64" height="64" viewBox="0 0 64 64" width="64" src="./images/gallery/lineaicons/basic_clessidre.svg" style="-ms-transform: rotate(360deg);-webkit-transform: rotate(360deg);transform: rotate(360deg);width: 56%;display: block;margin: 15px auto 10px auto;color: #5c77ff;"><circle opacity=".3" cx="9" cy="8.5" r="1.5" fill="currentColor"></circle><path d="m17 45v13h-4v6h38v-6h-3v-13c0-3.148-5.141-6.879-13.68-12.5 8.539-5.621 13.68-9.352 13.68-12.5v-14h3v-6h-38v6h4v14c0 3.148 5.141 6.879 13.68 12.5-8.539 5.621-13.68 9.352-13.68 12.5zm32 17h-34v-2h34zm-34-60h34v2h-34zm4 18v-14h27v14c0 2.389-7.343 7.269-13.5 11.304-6.157-4.035-13.5-8.915-13.5-11.304zm13.5 13.696c6.157 4.035 13.5 8.915 13.5 11.304v13h-27v-13c0-2.389 7.343-7.269 13.5-11.304z"></path></svg>
						</mat-icon>
					</div>
					<div class="media-body align-self-center">
						<ul>
							<li><h3>19</h3></li>
							<li><p>Aprovações Pendentes</p></li>
						</ul>
					</div>
				</div>
			</div>

			<div class="col-lg align-self-center order-md-3">
				<div class="media">
					<div class="rounded-full w-12 h-12 flex items-center justify-center ng-tns-c22-4 ng-star-inserted" style="background-color: #e6f5f3;">
						<span class="mat-icon notranslate material-icons mat-icon-no-color" role="img" aria-hidden="true">
							<img src="images/icone-aprovacao.png" class="img-icon" alt=""> 
						</span>
					</div>
					<div class="media-body align-self-center">
						<ul>
							<li><h3>50</h3></li>
							<li><p>Jobs Aprovados</p></li>
						</ul>
					</div>
				</div>
			</div>
			
		</div> <!-- box-Client -->

		<div class="row box-Client shadow">

			<div class="col-lg col-10 order-md-0 " style="border: 0px;">
				<div class="media">
					<img src="images/clie1.png" class="align-self-center mr-3 img-client" alt="">
					<div class="media-body align-self-center">
						<h5 class="mt-0">Sistema Cilia</h5>
						<p class="mb-0">Alex marques</p>
					</div>
				</div>
			</div>

			<div class="col-lg-1 col-2 align-self-center order-md-4">
				<a href="editar-cliente.php"><img src="images/Union.svg" class="btn-editar"></a>
			</div>

			<div class="col-lg align-self-center order-md-1" style="border-left: 1px solid rgba(28, 28, 28, 0.12);">
				<div class="media">
					<div class="rounded-full w-12 h-12 flex items-center justify-center ng-tns-c22-4 ng-star-inserted" style="background-color: rgba(255, 152, 0, 0.098); color: rgb(255, 152, 0);">
						<span class="mat-icon notranslate material-icons mat-icon-no-color" role="img" aria-hidden="true">
							<img src="images/icone-solitacao.png" class="img-icon" alt=""> 
						</span>
					</div>
					<div class="media-body align-self-center">
						<ul>
							<li><h3>5</h3></li>
							<li><p>Solicitações De Ajustes</p></li>
						</ul>
					</div>
				</div>
			</div>

			<div class="col-lg align-self-center order-md-2">
				<div class="media">
					<div class="rounded-full flex items-center justify-center ng-tns-c22-4 ng-star-inserted">
						<mat-icon class="mat-icon notranslate material-icons mat-icon-no-color" role="img" aria-hidden="true">
							<svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 64 64" height="64" viewBox="0 0 64 64" width="64" src="./images/gallery/lineaicons/basic_clessidre.svg" style="-ms-transform: rotate(360deg);-webkit-transform: rotate(360deg);transform: rotate(360deg);width: 56%;display: block;margin: 15px auto 10px auto;color: #5c77ff;"><circle opacity=".3" cx="9" cy="8.5" r="1.5" fill="currentColor"></circle><path d="m17 45v13h-4v6h38v-6h-3v-13c0-3.148-5.141-6.879-13.68-12.5 8.539-5.621 13.68-9.352 13.68-12.5v-14h3v-6h-38v6h4v14c0 3.148 5.141 6.879 13.68 12.5-8.539 5.621-13.68 9.352-13.68 12.5zm32 17h-34v-2h34zm-34-60h34v2h-34zm4 18v-14h27v14c0 2.389-7.343 7.269-13.5 11.304-6.157-4.035-13.5-8.915-13.5-11.304zm13.5 13.696c6.157 4.035 13.5 8.915 13.5 11.304v13h-27v-13c0-2.389 7.343-7.269 13.5-11.304z"></path></svg>
						</mat-icon>
					</div>
					<div class="media-body align-self-center">
						<ul>
							<li><h3>19</h3></li>
							<li><p>Aprovações Pendentes</p></li>
						</ul>
					</div>
				</div>
			</div>

			<div class="col-lg align-self-center order-md-3">
				<div class="media">
					<div class="rounded-full w-12 h-12 flex items-center justify-center ng-tns-c22-4 ng-star-inserted" style="background-color: #e6f5f3;">
						<span class="mat-icon notranslate material-icons mat-icon-no-color" role="img" aria-hidden="true">
							<img src="images/icone-aprovacao.png" class="img-icon" alt=""> 
						</span>
					</div>
					<div class="media-body align-self-center">
						<ul>
							<li><h3>50</h3></li>
							<li><p>Jobs Aprovados</p></li>
						</ul>
					</div>
				</div>
			</div>
			
		</div> <!-- box-Client -->

		<div class="row">

			<div class="col-lg-8 col-12 text-right text-center-responsivo">
				<label>Itens por paginas 
					<select name="example_length" aria-controls="example" class="">
						<option value="10">10</option>
						<option value="25">25</option>
						<option value="50">50</option>
						<option value="100">100</option>
					</select>
				</label>
			</div>

			<div class="col-lg-2 col-12 text-right text-center-responsivo">
				<div class="mat-paginator-range-label">1 – 10 of 30</div>
			</div>

			<div class="col-lg-2 col-12 text-right text-center-responsivo">
				<button class="mat-paginator-navigation-previous mat-icon-button mat-button-base" mat-icon-button="" type="button" style="touch-action: none; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);" aria-label="Previous page">
					<span class="mat-button-wrapper">
						<svg class="mat-paginator-icon" focusable="false" viewBox="0 0 24 24">
							<path d="M15.41 7.41L14 6l-6 6 6 6 1.41-1.41L10.83 12z"></path>
						</svg>
					</span>
					<div class="mat-button-ripple mat-ripple mat-button-ripple-round" matripple=""></div>
					<div class="mat-button-focus-overlay"></div>
				</button>

				<button class="mat-paginator-navigation-next mat-icon-button mat-button-base" mat-icon-button="" type="button" style="touch-action: none; user-select: none;" aria-label="Next page">
					<span class="mat-button-wrapper">
						<svg class="mat-paginator-icon" focusable="false" viewBox="0 0 24 24"><path d="M10 6L8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6z"></path>
						</svg>
					</span>
					<div class="mat-button-ripple mat-ripple mat-button-ripple-round" matripple=""></div><div class="mat-button-focus-overlay"></div>
				</button>
			</div>

		</div>

	</div>

	<div class="bg-wrap">
			<div class="bg"></div>
	</div>
</section>



   
      <?php include "footer.php";  ?>

