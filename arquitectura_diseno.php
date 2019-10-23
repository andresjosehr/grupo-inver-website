<?php

	/*
	 * Template name: Arquitectura y Diseño
	 *
	*/

	get_header();


require_once("banner-search.php");

   $Seccion1=get_field('seccion_1');


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

<section class="historia_section mt-5 pb-5">
   <div class="container">
      <div class="row">
         <div class="col-12">
            <h1 class="tit_prin mb-5">Arquitectura y Diseño</h1>
         </div>
         <div class="col-md-6" style="text-align: left;font-weight: 600;font-size: 20px">
            Como servicio complementario a nuestra actividad inmobiliaria, se desarrolló nuestra área de Arquitectura y Diseño a fines de brindar asesoramiento a nuestros clientes para un óptimo aprovechamiento de sus inmuebles. 
            <br><br>
            Los servicios prestados son de proyecto arquitectónico (obras nuevas y refacciones), como así también dirección técnica, ejecución y/o  administración de obras.
         </div>
         <div class="col-md-6 pt-md-0 pt-5" style="text-align: left;font-weight: 600;font-size: 20px">
            <img width="100%" src="https://www.avanzaentucarrera.com/orientacion/comp/uploads/2018/01/ThinkstockPhotos-695448564-724x449.jpg" alt="">
         </div>
      </div>
   </div>
</section>







<style>  
    .accor_btn{
       color: #272d6b;
       text-decoration: none;
       font-size: 16px;
       font-weight: 800;
       cursor: pointer;
    }  

</style>








<?php get_footer(); ?>


