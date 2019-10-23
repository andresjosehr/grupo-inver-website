<?php

  /*
   * Template name: Alquilar o Vender
   *
  */



if ($_POST["VenderAlquilarPropiedad"]) {

      $Datos="";
      foreach ($_POST as $key => $value) {
         $Datos= $Datos.$key.": ".$value.", ";
      }

      mail("fernandofilas@btob.com.ar", "Nuevo contacto | Consulta de Proyecto Desarrollista", "Nuevo contacto | Alquilar o vender Propiedad", "Has recibido un contacto de parte de un usuario que quiere alquilar o vender su propiedad. Sus datos son -->: ". $Datos);

    // $blogusers = get_users('role=Administrator');
    // foreach ($blogusers as $user) {
    //   mail("$user->user_email", "Nuevo contacto | Alquilar o vender Propiedad", "Has recibido un contacto de parte de un usuario que quiere alquilar o vender su propiedad. Sus datos son: ". $Datos)
    //   }  

}

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





<section>
   <div class="container" style="padding-top: 50px;padding-bottom: 50px;">
      <div class="row">
         <div class="col-12">
            <?php if ($_POST["VenderAlquilarPropiedad"]): ?>
               <div class="alert alert-success" role="alert">
                 Tu informacion ha sido enviada con exito
               </div>
            <?php endif ?>
            <h1 class="tit_prin">Punto de contacto</h1>
            <p class="mb-5" style="text-align: center;">Complete la informacion requerida</p>
            <form id="contact-form" method="post" role="form">
               <div class="messages"></div>
               <div class="controls">
                  <h3>Datos Personales</h3>
                  <hr>
                  <div class="row">
                     <div class="col-md-6">
                        <div class="form-group">
                           <label for="form_name">Nombre *</label>
                           <input id="form_name" type="text" name="nombre" class="form-control" placeholder="Escribe tu nombre *" required="required" data-error="Firstname is required.">
                           <div class="help-block with-errors"></div>
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="form-group">
                           <label for="form_lastname">Apellido *</label>
                           <input id="form_lastname" type="text" name="apellido" class="form-control" placeholder="Escribe tu apellido *" required="required" data-error="Lastname is required.">
                           <div class="help-block with-errors"></div>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-md-6">
                        <div class="form-group">
                           <label for="form_email">Direccion *</label>
                           <input id="form_email" type="text" name="direccion" class="form-control" placeholder="Indica tu direccion *" required="required" data-error="Valid email is required.">
                           <div class="help-block with-errors"></div>
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="form-group">
                           <label for="form_email">Ciudad *</label>
                           <input id="form_email" type="text" name="ciudad" class="form-control" placeholder="Escribe tu ciudad *" required="required" data-error="Valid email is required.">
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
                           <label for="form_email">Teléfono *</label>
                           <input id="form_email" type="text" name="telefono" class="form-control" placeholder="Escribe tu telefono *" required="required" data-error="Valid email is required.">
                           <div class="help-block with-errors"></div>
                        </div>
                     </div>
                  </div>

                  <h3 class="mt-5">Datos de la propiedad</h3>
                  <hr>
                  <div class="row">
                     <div class="col-md-12">
                        <div class="form-group">
                           <label for="form_name">Tipo Propiedad *</label>
                           <select type="text" class="form-control" name="TipoPropiedad" id="TipoPropiedad" placeholder="Password">
                              <option value="casa">Casa</option>
                              <option value="departamento">Departamento</option>
                              <option value="terreno">Terreno</option>
                              <option value="local">Local</option>
                              <option value="galpón">Galpón</option>
                              <option value="oficina">Oficina</option>
                              <option value="cochera">Cochera</option>
                            </select>
                           <div class="help-block with-errors"></div>
                        </div>
                     </div>
                     <!-- <div class="col-md-6">
                        <div class="form-group">
                            <label for="form_lastname">Tipo de Operacion *</label>
                            <select type="text" class="form-control" name="TipoOperacion" id="TipoOperacion" placeholder="Password">
                              <option value="alquiler">Alquiler</option>
                              <option value="venta">Venta</option>
                            </select>
                           <div class="help-block with-errors"></div>
                        </div>
                     </div> -->
                  </div>
                  <div class="row">
                     <div class="col-md-6">
                        <div class="form-group">
                           <label for="form_email">Dormitorios *</label>
                           <input id="form_email" type="text" name="dormitorios" class="form-control" placeholder="Indica el numero de Dormitorios *" required="required" data-error="Valid email is required.">
                           <div class="help-block with-errors"></div>
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="form-group">
                           <label for="form_email">Numero de Baños *</label>
                           <input id="form_email" type="text" name="banos" class="form-control" placeholder="Indica el numero de baños *" required="required" data-error="Valid email is required.">
                           <div class="help-block with-errors"></div>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-md-6">
                        <div class="form-group">
                           <label for="form_email">Superficie Total *</label>
                           <input id="form_email" type="text" name="superficie" class="form-control" placeholder="Indica la superficie total *" required="required" data-error="Valid email is required.">
                           <div class="help-block with-errors"></div>
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="form-group">
                           <label for="form_email">Dirección *</label>
                           <input id="form_email" type="text" name="direccion" class="form-control" placeholder="Indica la direccion de la propiedad *" required="required" data-error="Valid email is required.">
                           <div class="help-block with-errors"></div>
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="form-group">
                           <label for="form_email">Barrio *</label>
                           <input id="form_email" type="text" name="barrio" class="form-control" placeholder="Indica el barrio de la propiedad *" required="required" data-error="Valid email is required.">
                           <div class="help-block with-errors"></div>
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="form-group">
                           <label for="form_email">Ciudad *</label>
                           <input id="form_email" type="text" name="ciudad" class="form-control" placeholder="Indica la ciudad de la propiedad*" required="required" data-error="Valid email is required.">
                           <div class="help-block with-errors"></div>
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="form-group">
                           <label for="form_email">Precio *</label>
                           <input id="form_email" type="text" name="importe" class="form-control" placeholder="Indique el precio *" required="required" data-error="Valid email is required.">
                           <div class="help-block with-errors"></div>
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="form-group">
                           <label for="form_email">Horario de visita *</label>
                           <input id="form_email" type="text" name="horario" class="form-control" placeholder="Indica el horario de visita de la propiedad *" required="required" data-error="Valid email is required.">
                           <div class="help-block with-errors"></div>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-md-12">
                        <div class="form-group">
                           <label for="form_message">Indique la descripción de la propiedad *</label>
                           <textarea id="form_message" name="descripcion_propiedad" class="form-control" placeholder="Indique la descripción de la propiedad *" rows="4" required="required" data-error="Please, leave us a message."></textarea>
                           <div class="help-block with-errors"></div>
                        </div>
                     </div>
                     <div class="col-md-12">
                        <input type="submit" name="VenderAlquilarPropiedad" class="btn btn-success btn-send" value="Enviar Oferta">
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
</section>






<?php get_footer(); ?>


