<?php get_header();

require_once("banner-search.php");

?>





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

<?php if (get_field("en_venta")=="SI" && get_field("en_alquiler")=="SI"): ?>
  <?php   $btn["class"]="btn-success"; ?>
  <?php   $btn["text"]="ALQUILER Y VENTA"; ?>
<?php endif ?>

<?php if (get_field("en_venta")=="SI" && get_field("en_alquiler")=="NO"): ?>
  <?php   $btn["class"]="btn-warning"; ?>
  <?php   $btn["text"]="VENTA"; ?>
<?php endif ?>

<?php if (get_field("en_venta")=="NO" && get_field("en_alquiler")=="SI"): ?>
  <?php   $btn["class"]="btn-danger"; ?>
  <?php   $btn["text"]="ALQUILER"; ?>
<?php endif ?>



<?php if (get_field("en_venta")=="SI"): ?>
  <?php $condi="venta" ?>
<?php else: ?>
  <?php $condi="alquiler" ?>
<?php endif ?>


<section class="single_propiedad_section my-5 py-5">
   <div class="container">
      <div class="row">
      	<?php if ( have_posts() ) : while (have_posts()) : the_post(); $custom = get_post_custom(); ?>
         <div class="col-lg-8 col-12 col_left_propie">
            <div class="row">
               <div class="col-12">
                <?php if (has_post_thumbnail()): ?>
                  <div class="img_prin" style="background: url(<?php echo the_post_thumbnail_url(); ?>);">
                <?php else: ?>
                  <div class="img_prin" style="background-position-y: center !important;background: url(http://www.losprincipios.org/images/default.jpg);">
                <?php endif ?>
                     <button class="btn <?php echo $btn["class"]; ?> btn_info_in"><?php echo $btn["text"]; ?></button>
                  </div>
                  <div class="fotos_slick">
                    <?php if (get_field("imagenes")!=""): ?>                      
                     <?php foreach (get_field("imagenes") as $Imagen): ?>
                        <div>
                          <a href="<?php echo  $Imagen["imagen"] ?>" data-fancybox>
                            <img src="<?php echo  $Imagen["imagen"] ?>" alt="">
                          </a>
                        </div>
                      <?php endforeach ?>
                    <?php endif ?>
                  </div>
               </div>
            </div>
            <div class="px-5">
               <div class="row mt-5">
                  <div class="col-12 col-sm-6 pb-5 est_alig">
                     <h1 class="title_pro"><?php  the_field("calle") ?></h1>
                     <h5><i class="fa fa-map-marker-alt"></i> <?php  the_field("nombre_zona") ?> - <?php  the_field("nombre_localidad") ?></h5>
                  </div>
                  <div class="col-12 col-sm-6 pb-5 est_alig" align="right">
                     <button class="btn px-5 py-2 val_pro"><?php the_field("importe_".$condi) ?> <?php the_field("signo_moneda_".$condi) ?></button>
                  </div>
               </div>
               <h2>Detalles de la propiedad</h2>
               <hr>
               <div class="row">
                  <div class="col-4 my-3">
                     <i class="fa fa-th-large"></i> <?php the_field("nombre_tipo_propiedad") ?>
                  </div>
                  <div class="col-4 my-3">
                     <i class="fa fa-car"></i> Cochera <?php if (get_field("descripcion_cochera_propiedad")!=""): ?> <?php the_field("descripcion_cochera_propiedad"); ?> <?php else: ?> NO <?php endif ?>
                  </div>
                  <?php if (get_field("nombre_tipo_propiedad")!="Galpon"): ?>
                    <div class="col-4 my-3">
                      <i class="fa fa-bath"></i> Baños <?php if (get_field("cantidad_banos_propiedad")!=""): ?> <?php the_field("cantidad_banos_propiedad"); ?> <?php else: ?> sin informar <?php endif ?>
                    </div>
                  <?php endif ?>
                  <div class="col-4 my-3">
                     <i class="fa fa-arrows-alt-h"></i> Superficie <?php if (get_field("superficie_total_propiedad")!=""): ?> <?php the_field("superficie_total_propiedad"); ?> m2 <?php else: ?> sin informar <?php endif ?>
                  </div>
                  <?php if (get_field("nombre_tipo_propiedad")=="Departamento" && get_field("piso")!=""): ?>
                    <div class="col-4 my-3">
                      <i class="fa fa-building"></i> Piso <?php the_field("piso"); ?> 
                    </div>
                  <?php endif ?>
                  <?php if (get_field("nombre_tipo_propiedad")=="Departamento" || get_field("nombre_tipo_propiedad")=="Casa"): ?>
                    <div class="col-4 my-3">
                      <i class="fa fa-bed"></i> Dormitorios <?php the_field("numero_ambientes_propiedad"); ?> 
                    </div>
                  <?php endif ?>

                  <div class="col-4 my-3">
                     <i class="fa fa-user"></i> <?php the_field("nombre_propietario") ?> <?php the_field("apellido_propietario") ?>
                  </div>
                  <div class="col-4 my-3">
                     <i class="fa fa-clock"></i> <?php print_r(get_the_date()); ?>
                  </div>
               </div>
               <h2>Descripción</h2>
               <hr>
               <div class="col-12 px-0">
                  <?php the_field("aviso_propiedad"); ?>
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
                                 <input id="form_email" type="email" name="email" class="form-control" placeholder="Indique tu direccion *" required="required" data-error="Valid email is required.">
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
               <h4 class="nom_pro" align="center"><?php the_field("nombre_propietario") ?> <?php the_field("apellido_propietario") ?></h4>
               <h5 align="center"><?php the_field("domicilio_propietario") ?></h5>
               <hr>
               <p><i class="fa fa-phone"></i> <?php the_field("telefono_propietario") ?></p>
               <?php if (get_field("mail_propietario")!=""): ?>
                <p><i class="fa fa-envelope"></i> <?php the_field("mail_propietario") ?></p>+
              <?php endif ?>
            </div>




            <?php
              // get_field('field_name', 123);


              $posts = get_posts([
                'post_type' => 'inmuebles',
                'post_status' => 'publish',
                'numberposts' => 3,
                'orderby' => 'rand',
              ]);

              foreach ($posts as $key => $val) { ?>

                <?php if (get_field("en_venta", $val->ID)=="SI" && get_field("en_alquiler", $val->ID)=="SI"): ?>
                  <?php   $btn["class"]="btn-success"; ?>
                  <?php   $btn["text"]="ALQUILER Y VENTA"; ?>
                <?php endif ?>

                <?php if (get_field("en_venta", $val->ID)=="SI" && get_field("en_alquiler", $val->ID)=="NO"): ?>
                  <?php   $btn["class"]="btn-warning"; ?>
                  <?php   $btn["text"]="VENTA"; ?>
                <?php endif ?>

                <?php if (get_field("en_venta", $val->ID)=="NO" && get_field("en_alquiler", $val->ID)=="SI"): ?>
                  <?php   $btn["class"]="btn-danger"; ?>
                  <?php   $btn["text"]="ALQUILER"; ?>
                <?php endif ?>
                <div class="col-12 mt-5">
                   <div class="card">

                
                    <?php if (has_post_thumbnail( $val->ID ) ): ?>
                      <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $val->ID ), 'single-post-thumbnail' ); ?>
                      <div class="card-header propie-side-img-prin" align="left" id="custom-bg" style="background-image: url('<?php echo $image[0]; ?>')">
                    <?php else: ?>
                    <div class="card-header propie-side-img-prin" align="left" id="custom-bg" style="background-image: url('http://www.losprincipios.org/images/default.jpg')">
                    <?php endif; ?>
                         <button class="btn <?php echo $btn['class'] ?> info-btn-side"><?php echo $btn["text"]; ?></button>    
                      </div>
                      <div class="card-body">
                         <div align="center">
                            <h4 class="nom_pro"><?php the_field('calle', $val->ID); ?></h4>
                            <p><i class="fa fa-map-marker-alt"></i> <?php  the_field("nombre_zona", $val->ID) ?> - <?php  the_field("nombre_pais", $val->ID) ?></p>
                         </div>
                         <hr>
                         <div class="row description_card_in mx-md-1 row_info_usr">
                            <div class="col-6 py-1 icons_left"><i class="fa fa-user"></i> <?php the_field("nombre_propietario", $val->ID) ?> <?php the_field("apellido_propietario", $val->ID) ?></div>
                            <div class="col-6 py-1 pl-md-5"><i class="fa fa-clock"></i> <?php echo get_post_time( get_option( 'date_format' ), false, $val->ID, true ); ?></div>
                            <div class="col-12 py-1"><i class="fa fa-th-large"></i> <?php the_field("nombre_tipo_propiedad", $val->ID) ?></div>
                         </div>
                        <a href="<?php echo the_guid($val->ID) ?>"> <button class="btn btn-block ver-datelles-btn">Ver detalles</button></a>
                      </div>
                   </div>
                </div>
            <?php } ?>
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
<script>
   $(document).ready(function(){
    $('html, body').animate({scrollTop:750}, 'slow');
  });
</script






<section style="padding-top: 200px">
	<?php if ( have_posts() ) : while (have_posts()) : the_post(); ?>
	<?php 
		$custom = get_post_custom();
		foreach($custom as $key => $value) {
		     echo $key.': '.$value[0].'<br />';
		}
	 ?>
	<?php break; endwhile; endif; ?>
</section>

<?php get_footer(); ?>


