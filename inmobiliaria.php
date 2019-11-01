<?php

  /*
   * Template name: Inmobiliaria
   *
  */

  get_header();

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
   .inmobiliaria_section h1:after{
      content: "";
      display: none;
   }
   .inmobiliaria_section{
      color: #272d6b;
   }
   .description_card_in{
      font-size: 14px;
   }

   @media (min-width: 576px) and (max-width: 767.98px) {
      .icons_left {
          padding-left: 40px;
      }
   }
   @media (max-width: 576px){
      .icons_left {
          padding-left: 40px;
      }
   }
</style>




<section class="inmobiliaria_section mt-5 pb-5">
   <div class="container">
      <div class="row">
         <div class="col-12">
            <h1 class="tit_prin">Inmobiliaria</h1>
            <p class="mb-5" style="text-align: center;">Ultimas propiedades agregadas</p>
         </div>





<?php 


$the_query = new WP_Query( array('posts_per_page'=>9,
                                 'post_type'=>'inmuebles',
                                 'paged' => get_query_var('paged') ? get_query_var('paged') : 1) 
                            ); 
                            ?>
<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>

  <?php if (get_field("en_venta", get_the_ID())=="SI" && get_field("en_alquiler", get_the_ID())=="SI"): ?>
    <?php   $btn["class"]="btn-success"; ?>
    <?php   $btn["text"]="ALQUILER Y VENTA"; ?>
  <?php endif ?>

  <?php if (get_field("en_venta", get_the_ID())=="SI" && get_field("en_alquiler", get_the_ID())=="NO"): ?>
    <?php   $btn["class"]="btn-warning"; ?>
    <?php   $btn["text"]="VENTA"; ?>
  <?php endif ?>

  <?php if (get_field("en_venta", get_the_ID())=="NO" && get_field("en_alquiler", get_the_ID())=="SI"): ?>
    <?php   $btn["class"]="btn-danger"; ?>
    <?php   $btn["text"]="ALQUILER"; ?>
  <?php endif ?>


<div class="col-lg-4 col-md-6 mt-5">
  <a href="<?php echo the_permalink(get_the_ID()) ?>" style='color: #272d6b;'>
            <div class="card" style="min-height: 630px;">
              <?php if (has_post_thumbnail( get_the_ID() ) ): ?>
              <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $val->ID ), 'single-post-thumbnail' ); ?>
                <div class="card-header" align="left" id="custom-bg" style="background-image: url('<?php echo $image[0]; ?>');min-height: 260px;background-size: cover;background-repeat: no-repeat;background-position: unset;">
              <?php else: ?>
              <div class="card-header" align="left" id="custom-bg" style="background-image: url('http://www.losprincipios.org/images/default.jpg');min-height: 260px;background-size: cover;background-repeat: no-repeat;background-position: unset;">
              <?php endif; ?>

              
               <button class="btn <?php echo $btn["class"]; ?>" style="font-size: 12px"><?php echo $btn["text"]; ?></button>    
              </div>
              <div class="card-body">
               <div align="center">
                  <h4 style="font-weight: 600"><?php the_field("calle", get_the_ID()) ?></h4>
                  <p style="font-size: 80%;margin-top: -5px;"><i class="fa fa-map-marker-alt"></i> <?php  the_field("nombre_zona", get_the_ID()) ?> - <?php  the_field("nombre_pais", get_the_ID()) ?></p>
               </div>
               <hr>  
               <div class="row description_card_in mx-md-1">
                <div class="col-6 py-1 icons_left">
                     <i class="fa fa-th-large"></i> <?php the_field("nombre_tipo_propiedad", get_the_ID()) ?>
                </div>
                <div class="col-6 py-1 icons_left">
                     <i class="fa fa-arrows-alt-h"></i> Superficie <?php if (get_field("superficie_total_propiedad", get_the_ID())!=""): ?> <?php the_field("superficie_total_propiedad", get_the_ID()); ?> m2 <?php else: ?> sin informar <?php endif ?>
                  </div>
                  <div class="col-6 py-1">
                     <i class="fa fa-car"></i> Cochera <?php if (get_field("descripcion_cochera_propiedad", get_the_ID())!=""): ?> <?php the_field("descripcion_cochera_propiedad", get_the_ID()); ?> <?php else: ?> NO <?php endif ?>
                  </div>
                  <div class="col-6 py-1">
                    <?php if (get_field("nombre_tipo_propiedad", get_the_ID())!="Galpon"): ?>
                     <i class="fa fa-bath"></i> Baños <?php if (get_field("cantidad_banos_propiedad", get_the_ID())!=""): ?> <?php the_field("cantidad_banos_propiedad", get_the_ID()); ?> <?php else: ?> sin informar <?php endif ?>
                     <?php endif ?>
                  </div>
               </div>
               <hr>  
               <div class="row description_card_in mx-md-1" style="margin-bottom: 30px;">
                  <div class="col-12 py-1" align="center"><i class="fa fa-clock"></i> <?php echo get_the_date() ?></div>
               </div>
                  <a href="<?php echo the_permalink(get_the_ID()) ?>"><button class="btn btn-block" style="position: absolute;left: 0px;bottom: -1px;background: #272d6b;color: white;">Ver detalles</button></a>
              </div>
            </div>
         </div>
       </a>
<?php endwhile; ?>

<div class="pagination_inmo mt-5 pt-3">
  <?php $big = 999999999; // need an unlikely integer
   echo paginate_links( array(
      'base' => str_replace( $big, '%#%', get_pagenum_link( $big ) ),
      'format' => '?paged=%#%',
      'current' => max( 1, get_query_var('paged') ),
      'total' => $the_query->max_num_pages
  )); ?>
</div>

<?php wp_reset_postdata(); ?>

         








      </div>
   </div>
</section>

<!-- 
<section class="more_section mb-5 mt-4">
   <div class="container">
      <div class="row">
         <div class="col-12" align="center">
            <button class="btn px-5" style="background: #272d6b; font-size: 20px; color: white; font-weight: ">VER MAS PROPIEDADES</button>
         </div>
      </div>
   </div>
</section> -->


<style>
  .pagination_inmo{
    width: 100%;
    text-align: center;
  }
  .pagination_inmo .page-numbers{
      display: inline-block;
      padding: 0px 9px;
      margin-right: 4px;
      border-radius: 3px;
      border: solid 1px #c0c0c0;
      background: #e9e9e9;
      box-shadow: inset 0px 1px 0px rgba(255,255,255, .8), 0px 1px 3px rgba(0,0,0, .1);
      font-size: .875em;
      font-weight: bold;
      text-decoration: none;
      color: #717171;
      text-shadow: 0px 1px 0px rgba(255,255,255, 1);
    }
    .pagination_inmo .current{
          border: none;
    background: #616161;
    box-shadow: inset 0px 0px 8px rgba(0,0,0, .5), 0px 1px 0px rgba(255,255,255, .8);
    color: #f0f0f0;
    text-shadow: 0px 0px 3px rgba(0,0,0, .5);
    }
</style>




<script>
   $(document).ready(function(){
    $('html, body').animate({scrollTop:750}, 'slow');
  });
</script>

<?php get_footer(); ?>


