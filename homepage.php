<?php

	/*
	 * Template name: Homepage
	 *
	*/

	get_header();

    $Seccion1=get_field('seccion_1');
    $Seccion2=get_field('seccion_2');
    $Seccion3=get_field('seccion_3');
    $Seccion4=get_field('seccion_4');

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

<!-- END The overlay -->


  <?php echo do_shortcode( '[rev_slider alias="sports-hero"]' ); ?>


<section class="grupo">
   <div class="container">
      <div class="row">
         <div class="col-12">
            <h1 class="tit_prin mb-5"><?php echo $Seccion1["titulo_1"] ?></h1>    
            <?php
              // print_r($Seccion1);
            ?>  
         </div>
         <div class="col-md-4 col-sm-6 mt-4">
            <div class="card" style="  min-height: 300px">
              <div class="card-body">
                <div style="width: 100%" align="center"><i class="fas fa-users-cog grupo_icon"></i></div>
                <h5 class="card-title" align="center" style="font-weight: 600"><?php echo $Seccion1["cuadros"]["cuadro_1"]["titulo"]; ?></h5>
                <p class="card-text"><?php echo $Seccion1["cuadros"]["cuadro_1"]["texto"]; ?></p>
              </div>
            </div>
         </div>
         <div class="col-md-4 col-sm-6 mt-4">
            <div class="card" style="  min-height: 300px">
              <div class="card-body">
                <div style="width: 100%" align="center"><i class="fas fa-search grupo_icon"></i></div>
                <h5 class="card-title" align="center" style="font-weight: 600"><?php echo $Seccion1["cuadros"]["cuadro_2"]["titulo"]; ?></h5>
                <p class="card-text"><?php echo $Seccion1["cuadros"]["cuadro_2"]["texto"]; ?></p>
              </div>
            </div>
         </div>
         <div class="col-md-4 col-sm-12 mt-4">
            <div class="card" style="min-height: 300px">
              <div class="card-body">
                <div style="width: 100%" align="center"><i class="fas fa-home grupo_icon"></i></div>
                <h5 class="card-title" align="center" style="font-weight: 600"><?php echo $Seccion1["cuadros"]["cuadro_2"]["titulo"]; ?></h5>
                <p class="card-text"><?php echo $Seccion1["cuadros"]["cuadro_3"]["texto"]; ?></p>
              </div>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="mt-5 pt-5">
   <div class="container">
      <div class="row">
         <div class="col-12">
            <h1 class="tit_prin mb-5"><?php echo $Seccion2["titulo"] ?></h1>
            
         </div>
         <div class="col-xl-8 col-lg-6 col-md-6 mt-md-5 mb-md-5 pb-md-5">
            <?php echo $Seccion2["contenido"]["fila_1"]["texto"] ?>
         </div>
         <div class="col-xl-4 col-lg-6 col-md-6 mb-md-5 pb-md-5 pt-5 pb-5 pb-md-0 " align="right">
            <img class="img_historia" src='<?php echo $Seccion2["contenido"]["fila_1"]["imagen"] ?>' alt="">
         </div>
         <div class="img_historia_des col-xl-4 col-lg-6 col-md-6 mb-5 pb-5" align="left">
            <img class="img_historia" src='<?php echo $Seccion2["contenido"]["fila_2"]["imagen"] ?>' alt="">
         </div>
         <div class="col-xl-8 col-lg-6 col-md-6 mb-md-5 pb-md-5 anos_tardes">
            <?php echo $Seccion2["contenido"]["fila_2"]["texto"] ?>
         </div>
         <div class="col-xl-4 col-lg-6 col-md-6 mb-md-5 pb-md-5 pt-5 pb-5 pt-md-0 pb-md-0 img_historia_res" align="left" style="display: none">
            <img class="img_historia" src='<?php echo $Seccion2["contenido"]["fila_2"]["imagen"] ?>' alt="">
         </div>
         <div class="col-xl-8 col-lg-6 col-md-6 mb-md-5 pb-md-5">
            <?php echo $Seccion2["contenido"]["fila_3"]["texto"] ?>
         </div>
         <div class="col-xl-4 col-lg-6 col-md-6 mb-md-5 pb-md-5 pt-5 pb-5 pt-md-0 pb-md-0 " align="right">
            <img class="img_historia" src='<?php echo $Seccion2["contenido"]["fila_3"]["imagen"] ?>' alt="">
         </div>
      </div>
   </div>
</section>
<section class="skewed-bg">
   <div class="content container">
      <div class="row">
         <div class="col-md-12">
            <h1 class="tit_prin_con mb-5" align="center" style="color: white !important"><?php echo $Seccion3["titulo"] ?></h1>
            <p class="text text-justify service_text"><?php echo $Seccion3["contenido"]["texto"]; ?></p>
            <div class="row mb-5 mt-5">
              <?php foreach ($Seccion3["contenido"]["servicios"] as $Servicio): ?>
                <div class="col-md-4 col-sm-6 list_service">
                  <p ><i class="fa fa-check"></i> <?php echo $Servicio["servicio"] ?></p>
               </div>
              <?php endforeach ?>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="location_section mb-5">
   <div class="container">
      <div class="row">
         <div class="col-12">
            <h1 class="tit_prin mb-5" align="center"><?php echo $Seccion4["titulo"]; ?></h1>
         </div>
         <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
            <p class="text_history"><?php echo $Seccion4["contenido"]["contenido"] ?></p>
            <div class="row">
               <div class="col-md-6 col-sm-4 col-6" align="center">
                  <img class="info_loca" src="<?php echo $Seccion4["contenido"]["bloque_1"]["imagen"] ?>">
               </div>
               <div class="col-md-6 col-sm-8 col-6">
                  <img src="https://www.grupoinver.com.ar/media/contacto/icon-cq.png" alt=""><br> 
                  <p><?php echo $Seccion4["contenido"]["bloque_1"]["texto"] ?></p>
               </div>
            </div>
            <br>  
            <div class="row">
               <div class="col-md-6 col-sm-4 col-6" align="center">
                  <img class="info_loca" src="<?php echo $Seccion4["contenido"]["bloque_2"]["imagen"] ?>">
               </div>
               <div class="col-md-6 col-sm-8 col-6">
                  <img src="https://www.grupoinver.com.ar/media/contacto/icon-google.png" alt=""><br> 
                  <p><?php echo $Seccion4["contenido"]["bloque_2"]["texto"] ?></p>
               </div>
            </div>
         </div>
         <div class="col-xl-8 col-lg-6 col-md-6 col-sm-12 pt-5 pt-md-0">
            <?php echo $Seccion4["contenido"]["mapa"] ?>
         </div>
      </div>
   </div>
</section>



<?php get_footer(); ?>


