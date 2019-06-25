<?php get_header(); ?>





  <!-- The overlay -->
<div id="myNav" class="overlay">
   <!-- Button to close the overlay navigation -->
   <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
   <!-- Overlay content -->
   <div class="overlay-content">
      <a href="#">About</a>
      <a href="#">Services</a>
      <a href="#">Clients</a>
      <a href="#">Contact</a>
   </div>
</div>


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css">
<!-- END The overlay -->
<section class="banner_section">
   <div class="container">
      <div class="row">
         <div class="col-12">
            <div class="search-box" style="margin-top: 200px;">
               <div class="box-descripcion">
                  <div class="box-descripcion-text">
                     <h4><i class="fa fa-search"></i> ¡Encuentra la propiedad que buscas!</h4>
                  </div>
               </div>
               <div class="card" style="margin: 0 auto;">
                  <div class="card-body">
                     <form>
                        <div class="row">
                           <div class="col-md-3">
                              <div class="form-group">
                                 <label for="exampleInputEmail1">Tipo de operacion</label>
                                 <select type="text" class="form-control" id="TipoOperacion" placeholder="Password">
                                    <option value="1">Alquiler</option>
                                    <option value="2">Venta</option>
                                 </select>
                              </div>
                           </div>
                           <div class="col-md-3">
                              <div class="form-group">
                                 <label for="exampleInputPassword1">Tipo de proriedad</label>
                                 <select type="text" class="form-control" id="TipoPropiedad" placeholder="Password">
                                    <option value="1">Casa</option>
                                    <option value="2">Departamento</option>
                                    <option value="3">Terreno</option>
                                    <option value="4">Local</option>
                                    <option value="5">Galpón</option>
                                    <option value="6">Oficina</option>
                                    <option value="7">Cochera</option>
                                 </select>
                              </div>
                           </div>
                           <div class="col-md-2">
                              <div class="form-group">
                                 <label for="exampleInputPassword1">Dormitorios</label>
                                 <select type="text" class="form-control" id="Dormitorios" placeholder="Password">
                                    <option value="1">Uno</option>
                                    <option value="2">Dos</option>
                                    <option value="3">Mas de Dos</option>
                                 </select>
                              </div>
                           </div>
                           <div class="col-md-2">
                              <div class="form-group">
                                 <label for="exampleInputPassword1">Cochera</label>
                                 <select type="text" class="form-control" id="Cochera" placeholder="Password">
                                    <option value="1">Si</option>
                                    <option value="2">No</option>
                                    <option value="3">Indistinto</option>
                                 </select>
                              </div>
                           </div>
                           <div class="col-md-2">
                              <div class="form-group">
                                 <label for="exampleInputPassword1" style="color: white">_</label><br>
                                 <button type="submit" class="btn btn-primary btn-block">Buscar <i style="margin-left: 20px;" class="fa fa-search"></i></button>
                              </div>
                           </div>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>

<style>
  @media (max-width: 575.98px) { 
  
  .est_alig{
    text-align: center;
  }

  }
  .img_prin{
  	margin-bottom:11px;
  	background-repeat: no-repeat;
  	background-size: cover;
  	min-height: 400px;
  	padding: 1.25rem 1.25rem;

  }
  .col_left_propie{
		border: 1px solid #e1e1e1;padding: 0;
  }
  .btn_info_in´{
	.font-size: 12px
  }
  .fotos_slick{
	margin: 0px -2px;
  }
  .title_pro{
					font-weight: 600;
					color: #272d6b
            	}
				.fa-map-marker-alt{
					color: black
				}

				.val_pro{
					background: #272d6b;
					color: white;
					font-size: 24px !important
				}
				.side-bar-pro .info_usr_propie{
				width: 100%;
				padding: 29px;
				border: 1px solid #ebebeb;
         	}
         	.nom_pro{
				font-weight: 600;
         	}

         	.propie-side-img-prin{
         		min-height: 260px;
         		background-size: cover;
         		background-repeat: no-repeat;
         		background-position: unset;
         	}
         	.info-btn-side{
         		font-size: 12px; color: white
         	}
         	.sub-nom-pro{
				font-size: 80%;
				margin-top: -5px;
         	}
         	.row_info_usr{
         		margin-bottom: 30px;
         	}
         	.ver-datelles-btn{
         		position: absolute;
         		left: 0px;bottom: -1px;
         		background: #272d6b;
         		color: white;
         	}


         	  .single_propiedad_section{
    color: #272d6b
  }
  .fotos_slick img{
    max-width: 100%;
  }
  .fotos_slick div{
    margin-left: 3px;
    margin-right: 3px;
  }
  .slick-prev.slick-arrow:before, .slick-next.slick-arrow:before{
    color: #fff
  }
  .slick-prev.slick-arrow{
    margin-left: 35px;
    z-index: 1;
  }

  .slick-next.slick-arrow{
    margin-right: 35px;
    z-index: 1;
  }
</style>

<section class="single_propiedad_section my-5 py-5">
   <div class="container">
      <div class="row">
      	<?php if ( have_posts() ) : while (have_posts()) : the_post(); $custom = get_post_custom(); ?>
         <div class="col-lg-8 col-12 col_left_propie">
            <div class="row">
               <div class="col-12">
                  <div class="img_prin" style="background: url(https://www.grupoinver.com.ar/profit/SII/images/1755.JPG);">
                     <button class="btn btn-success btn_info_in">ALQUILER Y VENTA</button>
                  </div>
                  <div class="fotos_slick">
                     <div>
                        <img src="https://www.grupoinver.com.ar/profit/SII/images/1755.JPG" alt="">
                     </div>
                     <div>
                        <img src="https://www.grupoinver.com.ar/profit/SII/images/1756.JPG" alt="">
                     </div>
                     <div>
                        <img src="https://www.grupoinver.com.ar/profit/SII/images/1781.JPG" alt="">
                     </div>
                     <div>
                        <img src="https://www.grupoinver.com.ar/profit/SII/images/1784.JPG" alt="">
                     </div>
                     <div>
                        <img src="https://www.grupoinver.com.ar/profit/SII/images/1798.JPG" alt="">
                     </div>
                     <div>
                        <img src="https://www.grupoinver.com.ar/profit/SII/images/1803.JPG" alt="">
                     </div>
                     <div>
                        <img src="https://www.grupoinver.com.ar/profit/SII/images/1807.JPG" alt="">
                     </div>
                     <div>
                        <img src="https://www.grupoinver.com.ar/profit/SII/images/1810.JPG" alt="">
                     </div>
                     <div>
                        <img src="https://www.grupoinver.com.ar/profit/SII/images/1831.JPG" alt="">
                     </div>
                  </div>
               </div>
            </div>
            <div class="px-5">
               <div class="row mt-5">
                  <div class="col-12 col-sm-6 pb-5 est_alig">
                     <h1 class="title_pro"><?php echo $custom["Calle"][0]; ?></h1>
                     <h5><i class="fa fa-map-marker-alt"></i> <?php echo $custom["Localidad"][0]; ?> - <?php echo $custom["Pais"][0]; ?></h5>
                  </div>
                  <div class="col-12 col-sm-6 pb-5 est_alig" align="right">
                     <button class="btn px-5 py-2 val_pro">50.000$</button>
                  </div>
               </div>
               <h2>Detalles de la propiedad</h2>
               <hr>
               <div class="row">
                  <div class="col-4 my-3">
                     <i class="fa fa-th-large"></i> 100 metros cuadrados
                  </div>
                  <div class="col-4 my-3">
                     <i class="fa fa-car"></i> 1 cochera
                  </div>
                  <div class="col-4 my-3">
                     <i class="fa fa-bath"></i> 0 baños
                  </div>
                  <div class="col-4 my-3">
                     <i class="fa fa-bed"></i> 0 dormitorios
                  </div>
                  <div class="col-4 my-3">
                     <i class="fa fa-user"></i> Pedro Perez
                  </div>
                  <div class="col-4 my-3">
                     <i class="fa fa-clock"></i> 1 dia
                  </div>
               </div>
               <h2>Descripcion</h2>
               <hr>
               <div class="col-12 px-0">
                  Exclusiva propiedad en el corazón de barrio General Paz. Se trata de una casona de fines de siglo XIX de fuerte arraigo, en varias generaciones, de la ciudad de Córdoba, declarada como Patrimonio Arquitectónico, Urbanístico y de Áreas de Valor Cultural. Corresponde resaltar que esta emblemática propiedad que con su valor arquitectónico contribuye a definir la fisonomía del perfil urbanístico de toda una época. Se localiza estratégicamente sobre la avenida 24 de Setiembre en la esquina más cotizada de barrio General Paz. Esta propiedad en excelente estado de conservación y con detalles de verdadera jerarquía, cuenta con aproximados 1600m2 de terreno, y 750m2 cubiertos, distribuidos en tres plantas.
               </div>
               <h2 class="mt-4">Consulte por esta propiedad</h2>
               <hr>
               <div class="col-12 px0">
                  <form id="contact-form" method="post" action="contact.php" role="form">
                     <div class="messages"></div>
                     <div class="controls">
                        <div class="row">
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label for="form_name">Nombre *</label>
                                 <input id="form_name" type="text" name="name" class="form-control" placeholder="Escribe tu nombre *" required="required" data-error="Firstname is required.">
                                 <div class="help-block with-errors"></div>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label for="form_lastname">Apellido *</label>
                                 <input id="form_lastname" type="text" name="surname" class="form-control" placeholder="Escribe tu apellido *" required="required" data-error="Lastname is required.">
                                 <div class="help-block with-errors"></div>
                              </div>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label for="form_email">Direccion *</label>
                                 <input id="form_email" type="email" name="email" class="form-control" placeholder="Indica tu direccion *" required="required" data-error="Valid email is required.">
                                 <div class="help-block with-errors"></div>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label for="form_email">Ciudad *</label>
                                 <input id="form_email" type="email" name="email" class="form-control" placeholder="Escribe tu ciudad *" required="required" data-error="Valid email is required.">
                                 <div class="help-block with-errors"></div>
                              </div>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label for="form_email">Email *</label>
                                 <input id="form_email" type="email" name="email" class="form-control" placeholder="Escribe tu email *" required="required" data-error="Valid email is required.">
                                 <div class="help-block with-errors"></div>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label for="form_email">Telefono *</label>
                                 <input id="form_email" type="email" name="email" class="form-control" placeholder="Escribe tu telefono *" required="required" data-error="Valid email is required.">
                                 <div class="help-block with-errors"></div>
                              </div>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-md-12">
                              <div class="form-group">
                                 <label for="form_message">Mensaje *</label>
                                 <textarea id="form_message" name="message" class="form-control" placeholder="Escribe tu mensaje *" rows="4" required="required" data-error="Please, leave us a message."></textarea>
                                 <div class="help-block with-errors"></div>
                              </div>
                           </div>
                           <div class="col-md-12">
                              <input type="submit" class="btn btn-success btn-send" value="Enviar consulta">
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-md-12">
                              <p class="text-muted">
                                 <strong>*</strong> Campos obligatorios.
                              </p>
                           </div>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
         </div>

         <div class="col-lg-4 col-md-12 side-bar-pro" align="center">
            <div class="info_usr_propie">
               <h4 class="nom_pro" align="center">Gina Wesley</h4>
               <h5 align="center">Real Estate Agent</h5>
               <hr>
               <p><i class="fa fa-phone"></i> (567) 666 121 2233</p>
               <p><i class="fa fa-envelope"></i> corre@gmail.com</p>
            </div>
            <div class="col-12 mt-5">
               <div class="card">
                  <div class="card-header propie-side-img-prin" align="left" style="background: url(https://www.grupoinver.com.ar/profit/SII/images/5021.JPG);">
                     <button class="btn btn-warning info-btn-side">VENTA</button>    
                  </div>
                  <div class="card-body">
                     <div align="center">
                        <h4 class="nom_pro">General Paz</h4>
                        <p><i class="fa fa-map-marker-alt"></i> Córdoba - Argentina</p>
                     </div>
                     <hr>
                     <div class="row description_card_in mx-md-1 row_info_usr">
                        <div class="col-6 py-1 icons_left"><i class="fa fa-user"></i> Pedro Perez</div>
                        <div class="col-6 py-1 pl-md-5"><i class="fa fa-clock"></i> 1 dia</div>
                     </div>
                     <button class="btn btn-block ver-datelles-btn">Ver detalles</button>
                  </div>
               </div>
            </div>
         </div>
         <?php break; endwhile; endif; ?>
      </div>
   </div>
</section>



<script>
   $(document).ready(function(){
      $('.fotos_slick').slick({
        centerMode: true,
        centerPadding: '60px',
        slidesToShow: 3,
        arrows: true,
        responsive: [
          {
            breakpoint: 768,
            settings: {
              arrows: true,
              centerMode: true,
              centerPadding: '40px',
              slidesToShow: 3
            }
          },
          {
            breakpoint: 480,
            settings: {
              arrows: true,
              centerMode: true,
              centerPadding: '40px',
              slidesToShow: 1
            }
          }
        ]
      });
   })
</script>






<section style="padding-top: 200px">
	<?php if ( have_posts() ) : while (have_posts()) : the_post(); ?>
	<?php 
		$custom = get_post_custom();
		foreach($custom as $key => $value) {
		     echo $key.': '.$value[0].'<br />';
		}
	 ?>
	<?php break; endwhile; endif; ?>

	<?php 
	echo "<br>";
	echo "<br>";
	echo "<br>";
	echo "<br>";
	echo "<br>";
	echo "<br>";
	echo $custom["Calle"][0];
	 ?>
</section>

<?php get_footer(); ?>


