<?php









        /* Template Name: Custom Search */        
        get_header();

        require_once("banner-search.php");




  if ($_GET["Cochera"]=="Indistinto") {

    $FiltroCochera=array(
                                'key'       => 'id_propiedad',
                                'value'     => 0,
                                'type'    => 'NUMERIC',
                                'compare'   => '>'
                              );

  } else{

    if ($_GET["Cochera"]=="NO") $Comparador="!=";
    if ($_GET["Cochera"]=="SI") $Comparador="=";

    $FiltroCochera = array(
        'key'       => 'descripcion_cochera_propiedad',
        'value'     => "SI",
        'compare'   => $Comparador
    );
  }



  if ($_GET["TipoOperacion"]=="Indistinto") {

    $FiltroOperacion=array(
                                'key'       => 'id_propiedad',
                                'value'     => 0,
                                'type'    => 'NUMERIC',
                                'compare'   => '>'
                              );

  } else{

    if ($_GET["TipoOperacion"]=="Alquiler") {

        $FiltroOperacion = array(
            'key'       => 'en_alquiler',
            'value'     => "SI",
            'compare'   => '='
        );

    } else{

        $FiltroOperacion = array(
            'key'       => 'en_venta',
            'value'     => "SI",
            'compare'   => '='
        );
    }
  }





  if ($_GET["TipoPropiedad"]=="Casa" || $_GET["TipoPropiedad"]=="Departamento" || $_GET["Dormitorios"]!="Indistinto") {

    if ($_GET["Dormitorios"]==1 || $_GET["Dormitorios"]==2) {
    $FiltroDormitorios=array(
                                'key'       => 'numero_ambientes_propiedad',
                                'value'     => $_GET["Dormitorios"],
                                'type'    => 'NUMERIC',
                                'compare'   => '='
                            );
    } else{
      $FiltroDormitorios=array(
                                'key'       => 'numero_ambientes_propiedad',
                                'value'     => $_GET["Dormitorios"],
                                'type'    => 'NUMERIC',
                                'compare'   => '>'
                              );
    }



  } else{
    $FiltroDormitorios=array(
                                'key'       => 'id_propiedad',
                                'value'     => 0,
                                'type'    => 'NUMERIC',
                                'compare'   => '>'
                              );
  }




    if ($_GET["TipoPropiedad"]=="Indistinto") {

    $FiltroTipoPropiedad=array(
                                'key'       => 'id_propiedad',
                                'value'     => 0,
                                'type'    => 'NUMERIC',
                                'compare'   => '>'
                              );

  } else{

    $FiltroTipoPropiedad=array(
                               'key'       => 'nombre_tipo_propiedad',
                                'value'     => $_GET["TipoPropiedad"],
                                'compare'   => '='
                              );

  }




$the_query = new WP_Query( array('posts_per_page'=> 100,
                                 'post_type'     => 'inmuebles',
                                 'meta_query'   => array(
                                                        'relation'      => 'AND',
                                                        array($FiltroTipoPropiedad),
                                                        array($FiltroCochera),
                                                        array($FiltroOperacion),
                                                        array($FiltroDormitorios)
                                                    ),
                               )
                            ); 
?>


<script>
    $(document).ready(function(){
        $("#TipoOperacion").val("<?php echo $_GET['TipoOperacion'] ?>");
        $("#TipoPropiedad").val("<?php echo $_GET['TipoPropiedad'] ?>");
        $("#Cochera").val("<?php echo $_GET['Cochera'] ?>");
        $("#Dormitorios").val("<?php echo $_GET['Dormitorios'] ?>");
    })
</script>



<section class="inmobiliaria_section mt-5 pb-5">
   <div class="container">
      <div class="row">
         <div class="col-12">
            <h1 class="tit_prin">Resultados de busqueda</h1>
         </div>



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
            <div class="card">
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
                  <div class="col-6 py-1 icons_left"><i class="fa fa-user"></i> <?php the_field("nombre_propietario", get_the_ID()) ?> <?php the_field("apellido_propietario", get_the_ID()) ?></div>
                  <div class="col-6 py-1 pl-md-5"><i class="fa fa-clock"></i> <?php echo get_the_date() ?></div>
               </div>
                  <a href="<?php echo the_guid(get_the_ID()) ?>"><button class="btn btn-block" style="position: absolute;left: 0px;bottom: -1px;background: #272d6b;color: white;">Ver detalles</button></a>
              </div>
            </div>
         </div>

<?php endwhile; ?>

<?php if (!$the_query->have_posts()): ?>
    <div align="center" class="mt-5">
        <h2>Lo sentimos</h2>
        <h2>En este momento no tenemos disponible el inmueble que buscas. De todos modos te invitamos a contactarte con nosotros para ayudarte a encontrar la mejor opción para tu operación</h2>
    </div>
<?php endif; ?>



<script>
   $(document).ready(function(){
    $('html, body').animate({scrollTop:750}, 'slow');
  });
</script>



         








      </div>
   </div>
</section>





<?php // get_sidebar(); ?>
<?php get_footer(); ?>
