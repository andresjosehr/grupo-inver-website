<?php

	/*
	 * Template name: Desarrollista
	 *
	*/

	get_header();


require_once("banner-search.php");

   $Seccion1=get_field('seccion_1');
   $Seccion2=get_field('seccion_2');


   if ($_POST["ConsultaDesa"]) {

      $Datos="";
      foreach ($_POST as $key => $value) {
         $Datos= $Datos.$key.": ".$value.", ";
      }

      mail("fernandofilas@btob.com.ar", "Nuevo contacto | Consulta de Proyecto Desarrollista", "Has recibido una consulta de parte de un usuario que quiere saber mas de un proyecto desarrollista, la informacion correspondiente es la siguient -->: ". $Datos);

    // $blogusers = get_users('role=Administrator');
    // foreach ($blogusers as $user) {
    //   mail("$user->user_email", "Nuevo contacto | Alquilar o vender Propiedad", "Has recibido un contacto de parte de un usuario que quiere alquilar o vender su propiedad. Sus datos son: ". $Datos)
    //   }  

}


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
   .proyectos .card-img-top{
      width:101%;
   }

   .proyectos .card{
      cursor: pointer;
   }
   .proyectos .card_ex{

      min-height: 800px;

   }

   .proyectos .card-title{
      font-weight: 600;
      color: #272d6b;
      font-size:22px;
      text-align: center;
   }

   .modal_pro .modal-lg{
      width: 80%;
      max-width: 80%;
   }
   .modal_pro .modal-title{
      font-weight: 600;
      color: #272d6b;
   }
   .modal_pro .form-horizontal{
      padding: 20px;
   }
   .modal_pro #myTabContent{
      padding: 30px;
      padding-top: 60px
   }
   .descrip_edif{
      font-weight: 600;
      color: #272d6b;
   }
   .div_espe{
      font-weight: 600;
      color: #272d6b;
   }

   .amenities_div{
      font-weight: 600;
      color: #272d6b;
   }

   
</style>



<section class="proyectos mt-5 py-5">
   <div class="container">
      <div class="row">
         <?php if ($_POST["ConsultaDesa"]): ?>
               <div class="alert alert-success" role="alert">
                 Tu informacion ha sido enviada con exito
               </div>
            <?php endif ?>
         <div class="col-12">
            <h1 class="tit_prin_con mb-5 mt-2">Proyectos</h1>
         </div>
         <?php $i=0; ?>
         <?php $TreTit=$Proyecto["informacion_breve"]["titulo"]; ?>
            <?php foreach ($Seccion2["proyectos"] as $Proyecto): ?>
               <div class="col-xl-3 col-lg-4 col-sm-6 col-6 my-2">
                  <div class="card card_ex" data-toggle="modal" data-target="#proyecto<?php echo $i; ?>">
                     <img class="card-img-top" src="<?php echo $Proyecto["informacion_breve"]['imagen'] ?>" alt="Card image cap">
                     <div class="card-body">
                        <h5 class="card-title"><?php echo $Proyecto["informacion_breve"]["titulo"] ?></h5>
                        <p class="card-text"><?php echo $Proyecto["informacion_breve"]["descripcion_corta"] ?></p>
                     </div>
                  </div>
               </div>



         


















   <div id="proyecto<?php echo $i; ?>" class="modal fade bd-example-modal-xl modal_pro" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
   <div class="modal-dialog modal-lg">
      <div class="modal-content">
         <div class="modal-header">
            <div class="row" style="width: 100%">
               <div class="col-6">
                  <h1 class="modal-title"><?php echo $TreTit; ?></h1>
               </div>
               <div class="col-6" align="right">
                  <a style="cursor: pointer;" onclick="$('#proyecto<?php echo $i; ?>').modal('toggle');">X</a>
               </div>
            </div>
         </div>
         <div class="modal-body">
            <div id="crearGrupoUsuarioForm" data-parsley-validate="" class="form-horizontal form-label-left tab_con_des" novalidate="">
               <div class="row">
                  <div class="col-12">
                     <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <?php if ($Proyecto["informacion_detallada"]["tipologia"]!=""): ?>
                           <li class="nav-item">
                              <a class="nav-link active" id="tipologia-tab" data-toggle="tab" href="#proyecto<?php echo $i; ?>_tipologia" role="tab" aria-controls="home" aria-selected="true">TIPOLOGIA</a>
                           </li>
                        <?php endif ?>
                        <?php if ($Proyecto["informacion_detallada"]["especificaciones"]["lista_de_especificaciones"]!=""): ?>
                           <li class="nav-item">
                              <a class="nav-link" id="especificaciones-tab" data-toggle="tab" href="#proyecto<?php echo $i; ?>_especificaciones" role="tab" aria-controls="especificaciones" aria-selected="false">ESPECIFICACIONES</a>
                           </li>
                        <?php endif ?>  
                        <?php if ($Proyecto["informacion_detallada"]["galeria_de_fotos"]!=""): ?> 
                           <li class="nav-item">
                              <a class="nav-link" id="fotos-tab" data-toggle="tab" href="#proyecto<?php echo $i; ?>_fotos" role="tab" aria-controls="contact" aria-selected="false">GALERIA DE FOTOS</a>
                           </li>
                        <?php endif ?>  
                        <?php if ($Proyecto["informacion_detallada"]["amenities"]["lista_de_amenities"]!=""): ?>
                           <li class="nav-item">
                              <a class="nav-link" id="amenities-tab" data-toggle="tab" href="#proyecto<?php echo $i; ?>_amenities" role="tab" aria-controls="amenities" aria-selected="false">AMENITIES</a>
                           </li>
                        <?php endif ?>  
                        <?php if ($Proyecto["informacion_detallada"]["ubicacion"]!=""): ?> 
                           <li class="nav-item">
                              <a class="nav-link" id="ubicacion-tab" data-toggle="tab" href="#proyecto<?php echo $i; ?>_ubicacion" role="tab" aria-controls="ubicacion" aria-selected="false">UBICACIÓN</a>
                           </li>
                        <?php endif ?>  
                           <li class="nav-item">
                              <a class="nav-link" id="contacto-tab" data-toggle="tab" href="#proyecto<?php echo $i; ?>_contacto" role="tab" aria-controls="contacto" aria-selected="false">CONTACTO</a>
                           </li>
                     </ul>
                     <div class="tab-content tab_con_des" id="myTabContent">
                        <div class="tab-pane fade show active" id="proyecto<?php echo $i; ?>_tipologia" role="tabpanel" aria-labelledby="home-tab">
                           <div class="row">
                              <div class="col-lg-6 col-md-4 descrip_edif">
                                 <img src='<?php print_r($Proyecto["informacion_detallada"]["tipologia"]["imagen"]) ?>' alt="" style="width: 100%;">
                              </div>
                              <div class="col-lg-6 col-md-8 descrip_edif">
                                 <?php print_r($Proyecto["informacion_detallada"]["tipologia"]["texto"]) ?>
                              </div>
                           </div>
                           <div class="row">
                              <?php $Col="col-md-12" ?>
                              <?php if ($Proyecto["informacion_detallada"]["tipologia"]["codigo_del_plano_del_edificio"]!=""): ?>
                                 <div class="col-md-4">
                                 <td width="255" valign="top">
                                    <div id="desaIX1">
                                       <div align="center">
                                          <table class="table_edi mr-md-5" border="0" align="right" cellpadding="0" cellspacing="0">
                                             <tbody>
                                                <tr>
                                                   <td><img src="https://www.grupoinver.com.ar/desarrollista/edificios/desaIX/menu/menu1.jpg" width="255" height="20"></td>
                                                </tr>
                                                <tr>
                                                   <td>
                                                      <div class="desaIX2">
                                                         <lu>
                                                            <table border="0" cellpadding="0" cellspacing="0">
                                                               <tbody>
                                                                  <tr>
                                                                     <td>
                                                                        <li><a style="cursor: pointer;" onclick="VerCons('https://www.grupoinver.com.ar/desarrollista/edificios/desaIX/tipologias/terraza.jpg')"></a>
                                                                        </li>
                                                                     </td>
                                                                  </tr>
                                                               </tbody>
                                                            </table>
                                                         </lu>
                                                      </div>
                                                   </td>
                                                </tr>
                                                <tr>
                                                   <td>
                                                      <div class="desaIX3">
                                                         <lu>
                                                            <table border="0" cellpadding="0" cellspacing="0">
                                                               <tbody>
                                                                  <tr>
                                                                     <td>
                                                                        <li><a href="#"></a>
                                                                        </li>
                                                                     </td>
                                                                  </tr>
                                                               </tbody>
                                                            </table>
                                                         </lu>
                                                      </div>
                                                   </td>
                                                </tr>
                                                <tr>
                                                   <td>
                                                      <div class="desaIX4">
                                                         <lu>
                                                            <table border="0" cellpadding="0" cellspacing="0">
                                                               <tbody>
                                                                  <tr>
                                                                     <td>
                                                                        <li><a style="cursor: pointer;" onclick="VerCons('<?php bloginfo('template_directory'); ?>/images/pisos_1.png')"></a>
                                                                        </li>
                                                                     </td>
                                                                  </tr>
                                                               </tbody>
                                                            </table>
                                                         </lu>
                                                      </div>
                                                   </td>
                                                </tr>
                                                <tr>
                                                   <td>
                                                      <div class="desaIX5">
                                                         <lu>
                                                            <table border="0" cellpadding="0" cellspacing="0">
                                                               <tbody>
                                                                  <tr>
                                                                     <td>
                                                                        <li><a style="cursor: pointer;" onclick="VerCons('https://www.grupoinver.com.ar/desarrollista/edificios/desaIX/tipologias/plantabaja.jpg')"></a>
                                                                        </li>
                                                                     </td>
                                                                  </tr>
                                                               </tbody>
                                                            </table>
                                                         </lu>
                                                      </div>
                                                   </td>
                                                </tr>
                                                <tr>
                                                   <td>
                                                      <div class="desaIX6">
                                                         <lu>
                                                            <table border="0" cellpadding="0" cellspacing="0">
                                                               <tbody>
                                                                  <tr>
                                                                     <td>
                                                                        <li><a style="cursor: pointer;" onclick="VerCons('https://www.grupoinver.com.ar/desarrollista/edificios/desaIX/tipologias/subsuelo.jpg')"></a>
                                                                        </li>
                                                                     </td>
                                                                  </tr>
                                                               </tbody>
                                                            </table>
                                                         </lu>
                                                      </div>
                                                   </td>
                                                </tr>
                                                <tr>
                                                   <td><img src="https://www.grupoinver.com.ar/desarrollista/edificios/desaIX/menu/menu7.jpg" width="255" height="61"></td>
                                                </tr>
                                             </tbody>
                                          </table>
                                       </div>
                                    </div>
                                 </td>
                                 </div>
                                 <?php $Col="col-md-8" ?>
                              <?php endif ?>
                              <div class="<?php echo $Col ?> pt-5">                              
                                 <div id="accordion">
                                 <?php $j=0; ?>
                                 <?php foreach ($Proyecto["informacion_detallada"]["tipologia"]["pisos"] as $Piso): ?>
                                   <div class="card">
                                     <div class="card-header" id="headingThree">
                                       <h5 class="mb-0">
                                         <button class="btn btn-link collapsed accor_btn" data-toggle="collapse" data-target="#piso_<?php echo $j; ?>" aria-expanded="false" aria-controls="collapseThree">
                                           <?php echo $Piso["descripcion_del_piso"] ?>
                                         </button>
                                       </h5>
                                     </div>
                                     <div id="piso_<?php echo $j; ?>" class="collapse contenedor_pisos" aria-labelledby="headingThree" data-parent="#accordion">
                                       <div class="card-body" align="center" style="width: 100%">
                                          <?php $fo=1; ?>
                                          <?php foreach ($Piso["imagenes_del_piso"] as $Imagen): ?>
                                             <a href="<?php echo  $Imagen['imagen'] ?>" data-fancybox="fotos_piso<?php echo $i; ?>" data-caption="Piso_<?php echo $i; ?> #<?php echo $fo; ?>">
                                                <img width="20%" src="<?php echo $Imagen['imagen']; ?>" alt="">
                                             </a>
                                             <?php $fo++; ?>
                                          <?php endforeach ?>
                                       </div>
                                     </div>
                                   </div>
                                   <?php $j++; ?>
                                   <?php endforeach ?>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="tab-pane fade" id="proyecto<?php echo $i; ?>_especificaciones" role="tabpanel" aria-labelledby="profile-tab">
                           <div class="row">
                              <div class="col-md-4">
                                 <img src='<?php echo $Proyecto["informacion_detallada"]["especificaciones"]["imagen"] ?>' alt="" style="width: 100%;">
                              </div>
                              <div class="col-md-8 pt-md-0 pt-5 div_espe">

                                 <table class="table">
                                    <tbody>
                                       <?php if ($Proyecto["informacion_detallada"]["especificaciones"]["lista_de_especificaciones"]!=""): ?>
                                          <?php foreach ($Proyecto["informacion_detallada"]["especificaciones"]["lista_de_especificaciones"] as $Especificacion): ?>
                                             <tr>
                                                <td><img src="<?php print_r($Especificacion["icono"]); ?>" alt=""> <span> <?php print_r($Especificacion["especificacion"]); ?></span></td>
                                             </tr>
                                          <?php endforeach ?>
                                       <?php endif ?>
                                    </tbody>
                                 </table>
                              </div>
                           </div>
                        </div>
                        <div class="tab-pane fade" id="proyecto<?php echo $i; ?>_fotos" role="tabpanel" aria-labelledby="contact-tab">
                           <div class="row">
                              <?php $fo=1; ?>
                              <?php foreach ($Proyecto["informacion_detallada"]["galeria_de_fotos"] as $Foto): ?>
                              <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                 <a href="<?php echo  $Foto["imagen"] ?>" data-fancybox="fotos<?php echo $i; ?>" data-caption="Proiedad_<?php echo $i; ?> #<?php echo $fo; ?>">
                                 <img  src="<?php echo $Foto['imagen'] ?>" class="zoom img-fluid "  alt="">
                                 </a>
                              </div>
                              <?php $fo++; ?>
                              <?php endforeach ?>
                           </div>
                        </div>
                        <div class="tab-pane fade" id="proyecto<?php echo $i; ?>_amenities" role="tabpanel" aria-labelledby="amenities-tab">
                           <div class="row">
                              <div class="col-md-4">
                                 <img src="<?php echo $Proyecto["informacion_detallada"]["amenities"]["imagen"] ?>" alt="" style="width: 100%;">
                              </div>
                              <div class="col-md-8 pt-5 pt-md-0 amenities_div">
                                 <table class="table">
                                    <tbody>
                                       <?php if ($Proyecto["informacion_detallada"]["amenities"]["lista_de_amenities"]!=""): ?>
                                          <?php foreach ($Proyecto["informacion_detallada"]["amenities"]["lista_de_amenities"] as $Ametinie): ?>
                                             <tr>
                                                <td><img src="<?php print_r($Ametinie["icono"]); ?>" alt=""> <span> <?php print_r($Ametinie["amenitie"]); ?></span></td>
                                             </tr>
                                          <?php endforeach ?>
                                       <?php endif ?>
                                    </tbody>
                                 </table>
                              </div>
                           </div>
                        </div>
                        <div class="tab-pane fade" id="proyecto<?php echo $i; ?>_ubicacion" role="tabpanel" aria-labelledby="amenities-tab">
                        </div>
                        <div class="tab-pane fade" id="proyecto<?php echo $i; ?>_contacto" role="tabpanel" aria-labelledby="amenities-tab">
                           <div class="row">
                              <div class="col-4 img_cont">
                                 <img src="<?php print_r($Proyecto["informacion_detallada"]["tipologia"]["imagen"]) ?>" alt="" width="100%">
                              </div>
                              <div class="col-12 col-md-8">
                               <form method="post">
                                 <input type="hidden" name="Proyecto" value="<?php echo $TreTit; ?>">
                                  <div class="messages"></div>
                                  <div class="controls">
                                     <div class="row">
                                        <div class="col-md-6">
                                           <div class="form-group">
                                              <label for="form_name">Nombre *</label>
                                              <input id="form_name" type="text" name="Nombre" class="form-control" placeholder="Indique su nombre *" required="required" data-error="Firstname is required.">
                                              <div class="help-block with-errors"></div>
                                           </div>
                                        </div>
                                        <div class="col-md-6">
                                           <div class="form-group">
                                              <label for="form_lastname">Apellido *</label>
                                              <input id="form_lastname" type="text" name="Apellido" class="form-control" placeholder="Indique su apellido *" required="required" data-error="Lastname is required.">
                                              <div class="help-block with-errors"></div>
                                           </div>
                                        </div>
                                     </div>
                                     <div class="row">
                                        <div class="col-md-6">
                                           <div class="form-group">
                                              <label for="form_email">Dirección *</label>
                                              <input id="form_email" type="text" name="Direccion" class="form-control" placeholder="Indica tu dirección *" required="required" data-error="Valid email is required.">
                                              <div class="help-block with-errors"></div>
                                           </div>
                                        </div>
                                        <div class="col-md-6">
                                           <div class="form-group">
                                              <label for="form_email">Ciudad *</label>
                                              <input id="form_email" type="text" name="Ciudad" class="form-control" placeholder="Indique su ciudad *" required="required" data-error="Valid email is required.">
                                              <div class="help-block with-errors"></div>
                                           </div>
                                        </div>
                                     </div>
                                     <div class="row">
                                        <div class="col-md-6">
                                           <div class="form-group">
                                              <label for="form_email">Email *</label>
                                              <input id="form_email" type="email" name="Email" class="form-control" placeholder="Indique su email *" required="required" data-error="Valid email is required.">
                                              <div class="help-block with-errors"></div>
                                           </div>
                                        </div>
                                        <div class="col-md-6">
                                           <div class="form-group">
                                              <label for="form_email">Teléfono *</label>
                                              <input id="form_email" type="number" name="Telefono" class="form-control" placeholder="Indique su teléfono *" required="required" data-error="Valid email is required.">
                                              <div class="help-block with-errors"></div>
                                           </div>
                                        </div>
                                     </div>
                                     <div class="row">
                                        <div class="col-md-12">
                                           <div class="form-group">
                                              <label for="form_message">Mensaje *</label>
                                              <textarea id="form_message" name="Mensaje" class="form-control" placeholder="Indique su mensaje *" rows="4" required="required" data-error="Please, leave us a message."></textarea>
                                              <div class="help-block with-errors"></div>
                                           </div>
                                        </div>
                                        <div class="col-md-12">
                                           <input type="submit" name="ConsultaDesa" class="btn btn-success btn-send" value="Enviar consulta">
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
                      </div>
                  </div>
                </div>
            </div>
         </div>
      </div>
   </div>
</div>













































            <?php $i++; ?>
         <?php endforeach ?> 
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


