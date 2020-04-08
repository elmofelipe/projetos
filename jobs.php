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
                  <li><a href="#">Jobs</a></li>
                </ul>
            </div>
        </div> 
    </div>
    <div class="bg-wrap">
        <div class="bg"></div>
    </div>
  </section>

			<section id="ajustes" class="pb-50 pt-50 pb-md-100 pt-md-50 light">


				<div class="container">


						<div class="row layout-header pb-5 pt-20 pb-md-5 pt-md-20 shadow">
          			<div class="col-12 col-lg-1 " style="">
              			<h2>Jobs</h2>
          			</div>
          			<div class="col-12 col-lg-9 text-right search">

              		<div class="bg-card rounded-full border px-4 search-btn" >

                    <ic-icon _ngcontent-svv-c19="" class="ng-tns-c19-3" size="20px" style="font-size: 20px;">
                      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);"><path d="M15.5 14h-.79l-.28-.27A6.471 6.471 0 0 0 16 9.5 6.5 6.5 0 1 0 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z" fill="currentColor"></path>
                      </svg>
                    </ic-icon>

                    <input _ngcontent-svv-c19="" class="px-4 py-3 border-0 outline-none w-full bg-transparent ng-pristine ng-valid ng-touched" placeholder="Buscar..." type="search">

                  </div>

          			</div>
      			</div> 

      			<div class="row tabela-jobs">

          			

          			<div class="col-lg-12">
                  <div class="table-responsivo">
                		<table class="table table-hover">
                      <thead>
                        <tr>
                          <th scope="col">CLIENTE</th>
                          <th scope="col">TIPO</th>
                          <th scope="col">ÚLTIMA ATUALIZAÇÃO</th>
                          <th scope="col">STATUS</th>
                          <th scope="col">LINK</th>
                        </tr>
                      </thead>
                      <tbody>
                        
                        <tr onclick="location.href = 'aprovacao.html';">
                          <th scope="row">
                            <div class="media">
                              <img src="images/cliente-tabela.png"  alt="">
                              <div class="media-body">
                                <p>Social post | Janeiro 2020</p>
                              </div>
                            </div>
                          </th>
                          <td>Pacote (9)</td>
                          <td>Hoje</td>
                          <td>
                            <div class="tag-space font-medium text-xs ng-tns-c19-3 ng-star-inserted aprovado-tag"> Aprovado </div>
                          </td>
                          <td>
                            <a href="#"><img src="images/link.svg" class="link"></a>
                          </td>
                        </tr>
                        <tr onclick="location.href = 'aprovacao.html';">
                          <th scope="row">
                            <div class="media">
                              <img src="images/cliente-tabela.png"  alt="">
                              <div class="media-body">
                                <p>Social post | Janeiro 2020</p>
                              </div>
                            </div>
                          </th>
                          <td>Pacote (9)</td>
                          <td>Hoje</td>
                          <td>
                            <div class="tag-space font-medium text-xs ng-tns-c19-3 ng-star-inserted reprovado-tag"> Reprovado </div>
                          </td>
                          <td>
                            <a href="#"><img src="images/link.svg" class="link"></a>
                          </td>
                        </tr>
                        <tr onclick="location.href = 'aprovacao.html';">
                          <th scope="row">
                            <div class="media">
                              <img src="images/cliente-tabela.png"  alt="">
                              <div class="media-body">
                                <p>Social post | Janeiro 2020</p>
                              </div>
                            </div>
                          </th>
                          <td>Pacote (9)</td>
                          <td>Hoje</td>
                          <td>
                            <div class="tag-space  font-medium text-xs ng-tns-c19-3 ng-star-inserted pendente-tag"> Pendente</div>
                          </td>
                          <td>
                            <a href="#"><img src="images/link.svg" class="link"></a>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>

								   <div class="row">
                    <div class="col-lg-8 col-12 text-right text-center-responsivo">
                      
                      <label>Itens por paginas <select name="example_length" aria-controls="example" class=""><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select></label>

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

      			</div> 
		
  			</div>

  			<div class="bg-wrap">
      			<div class="bg"></div>
  			</div>
			</section>



   
      <?php include "footer.php";  ?>

