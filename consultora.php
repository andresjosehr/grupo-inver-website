<?php

	/*
	 * Template name: Consultora
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
            <h1 class="tit_prin mb-5"><?php echo $Seccion1["titulo"]; ?></h1>
         </div>
         <div class="col-12" style="text-align: center;font-weight: 600">
            <?php echo $Seccion1["texto"]; ?>
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
<script>
   $(document).ready(function(){
    $('html, body').animate({scrollTop:750}, 'slow');
  });
</script>







<?php get_footer(); ?>


