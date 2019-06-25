<?php

  /*
   * Template name: Inmobiliaria
   *
  */

  get_header();



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
         <div class="col-lg-4 col-md-6 mt-5">
            <div class="card">
              <div class="card-header" style="background: url(https://www.grupoinver.com.ar/profit/SII/images/1755.JPG);min-height: 260px;background-size: cover;background-repeat: no-repeat;background-position: unset;">
               <button class="btn btn-success" style="font-size: 12px">ALQUILER Y VENTA</button>    
              </div>
              <div class="card-body">
               <div align="center">
                  <h4 style="font-weight: 600">General Paz</h4>
                  <p style="font-size: 80%;margin-top: -5px;"><i class="fa fa-map-marker-alt"></i> Córdoba - Argentina</p>
               </div>
               <hr>  
               <div class="row description_card_in mx-md-1">
                  <div class="col-6 py-1 icons_left">
                     <i class="fa fa-th-large"></i> 100 m2
                  </div>
                  <div class="col-6 py-1 pl-md-5">
                     <i class="fa fa-car"></i> 1 cochera
                  </div>
                  <div class="col-6 py-1 icons_left">
                     <i class="fa fa-bed"></i> 0 dormitorios
                  </div>
                  <div class="col-6 py-1 pl-md-5">
                     <i class="fa fa-bath"></i> 0 baños
                  </div>
               </div>
               <hr>  
               <div class="row description_card_in mx-md-1" style="margin-bottom: 30px;">
                  <div class="col-6 py-1 icons_left"><i class="fa fa-user"></i> Pedro Perez</div>
                  <div class="col-6 py-1 pl-md-5"><i class="fa fa-clock"></i> 1 dia</div>
               </div>
                  <button class="btn btn-block" style="position: absolute;left: 0px;bottom: -1px;background: #272d6b;color: white;">Ver detalles</button>
              </div>
            </div>
         </div>
         <div class="col-lg-4 col-md-6 mt-5">
            <div class="card">
              <div class="card-header" style="background: url(https://www.grupoinver.com.ar/profit/SII/images/5021.JPG);min-height: 260px;background-size: cover;background-repeat: no-repeat;background-position: unset;">
               <button class="btn btn-warning" style="font-size: 12px; color: white">VENTA</button>    
              </div>
              <div class="card-body">
               <div align="center">
                  <h4 style="font-weight: 600">General Paz</h4>
                  <p style="font-size: 80%;margin-top: -5px;"><i class="fa fa-map-marker-alt"></i> Córdoba - Argentina</p>
               </div>
               <hr>  
               <div class="row description_card_in mx-md-1">
                  <div class="col-6 py-1 icons_left">
                     <i class="fa fa-th-large"></i> 100 m2
                  </div>
                  <div class="col-6 py-1 pl-md-5">
                     <i class="fa fa-car"></i> 1 cochera
                  </div>
                  <div class="col-6 py-1 icons_left">
                     <i class="fa fa-bed"></i> 0 dormitorios
                  </div>
                  <div class="col-6 py-1 pl-md-5">
                     <i class="fa fa-bath"></i> 0 baños
                  </div>
               </div>
               <hr>  
               <div class="row description_card_in mx-md-1" style="margin-bottom: 30px;">
                  <div class="col-6 py-1 icons_left"><i class="fa fa-user"></i> Pedro Perez</div>
                  <div class="col-6 py-1 pl-md-5"><i class="fa fa-clock"></i> 1 dia</div>
               </div>
                  <button class="btn btn-block" style="position: absolute;left: 0px;bottom: -1px;background: #272d6b;color: white;">Ver detalles</button>
              </div>
            </div>
         </div>
         <div class="col-lg-4 col-md-6 mt-5">
            <div class="card">
              <div class="card-header" style="background: url(https://www.grupoinver.com.ar/profit/SII/images/5077.JPG);min-height: 260px;background-size: cover;background-repeat: no-repeat;background-position: unset;">
               <button class="btn btn-warning" style="font-size: 12px; color: white">VENTA</button>    
              </div>
              <div class="card-body">
               <div align="center">
                  <h4 style="font-weight: 600">General Paz</h4>
                  <p style="font-size: 80%;margin-top: -5px;"><i class="fa fa-map-marker-alt"></i> Córdoba - Argentina</p>
               </div>
               <hr>  
               <div class="row description_card_in mx-md-1">
                  <div class="col-6 py-1 icons_left">
                     <i class="fa fa-th-large"></i> 100 m2
                  </div>
                  <div class="col-6 py-1 pl-md-5">
                     <i class="fa fa-car"></i> 1 cochera
                  </div>
                  <div class="col-6 py-1 icons_left">
                     <i class="fa fa-bed"></i> 0 dormitorios
                  </div>
                  <div class="col-6 py-1 pl-md-5">
                     <i class="fa fa-bath"></i> 0 baños
                  </div>
               </div>
               <hr>  
               <div class="row description_card_in mx-md-1" style="margin-bottom: 30px;">
                  <div class="col-6 py-1 icons_left"><i class="fa fa-user"></i> Pedro Perez</div>
                  <div class="col-6 py-1 pl-md-5"><i class="fa fa-clock"></i> 1 dia</div>
               </div>
                  <button class="btn btn-block" style="position: absolute;left: 0px;bottom: -1px;background: #272d6b;color: white;">Ver detalles</button>
              </div>
            </div>
         </div>
         <div class="col-lg-4 col-md-6 mt-5">
            <div class="card">
              <div class="card-header" style="background: url(https://www.grupoinver.com.ar/profit/SII/images/3052.JPG);min-height: 260px;background-size: cover;background-repeat: no-repeat;background-position: unset;">
               <button class="btn btn-danger" style="font-size: 12px">ALQUILER</button>    
              </div>
              <div class="card-body">
               <div align="center">
                  <h4 style="font-weight: 600">General Paz</h4>
                  <p style="font-size: 80%;margin-top: -5px;"><i class="fa fa-map-marker-alt"></i> Córdoba - Argentina</p>
               </div>
               <hr>  
               <div class="row description_card_in mx-md-1">
                  <div class="col-6 py-1 icons_left">
                     <i class="fa fa-th-large"></i> 100 m2
                  </div>
                  <div class="col-6 py-1 pl-md-5">
                     <i class="fa fa-car"></i> 1 cochera
                  </div>
                  <div class="col-6 py-1 icons_left">
                     <i class="fa fa-bed"></i> 0 dormitorios
                  </div>
                  <div class="col-6 py-1 pl-md-5">
                     <i class="fa fa-bath"></i> 0 baños
                  </div>
               </div>
               <hr>  
               <div class="row description_card_in mx-md-1" style="margin-bottom: 30px;">
                  <div class="col-6 py-1 icons_left"><i class="fa fa-user"></i> Pedro Perez</div>
                  <div class="col-6 py-1 pl-md-5"><i class="fa fa-clock"></i> 1 dia</div>
               </div>
                  <button class="btn btn-block" style="position: absolute;left: 0px;bottom: -1px;background: #272d6b;color: white;">Ver detalles</button>
              </div>
            </div>
         </div>
      </div>
   </div>
</section>


<section class="more_section mb-5 mt-4">
   <div class="container">
      <div class="row">
         <div class="col-12" align="center">
            <button class="btn px-5" style="background: #272d6b; font-size: 20px; color: white; font-weight: ">VER MAS PROPIEDADES</button>
         </div>
      </div>
   </div>
</section>



<?php get_footer(); ?>


