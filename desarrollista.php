<?php

	/*
	 * Template name: Desarrollista
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
<section class="historia_section mt-5 pb-5">
   <div class="container">
      <div class="row">
         <div class="col-12">
            <h1 class="tit_prin mb-5">Desarrollista</h1>
         </div>
         <div class="col-12" style="text-align: center;font-weight: 600">
            <p>Desde el año 1970 ha gestionado numerosos planes de vivienda, construido de locales propios para la venta y alquiler y también desarrollado urbanizaciones en Córdoba Capital, en el interior de la provincia y en Santa Fe.</p>
            <p>En el comienzo de la década del dos mil, fue pionera en la generación de proyectos de inversión en el Barrio General Paz, sumado a otros emprendimientos en la ciudad de Córdoba; algunos desarrollados y comercializados por la propia organización y otros con la participación de terceros asociados.</p>
         </div>
      </div>
   </div>
</section>
<section class="proyectos mt-5 py-5">
   <div class="container">
      <div class="row">
         <div class="col-12">
            <h1 class="tit_prin_con mb-5 mt-2">Proyectos</h1>
         </div>
         <div class="col-xl-3 col-lg-4 col-sm-6 col-12">
            <div class="card" style="cursor: pointer;" data-toggle="modal" data-target="#desaix">
               <img style='width:101%' class="card-img-top" src="https://www.grupoinver.com.ar/media/desarrollos/desa-IX.jpg" alt="Card image cap">
               <div class="card-body">
                  <h5 class="card-title" style="font-weight: 600; color: #272d6b; font-size:22px; text-align: center">Desa IX</h5>
                  <p class="card-text">Edificio Desa IX, con exclusiva ubicación en la mejor zona de Nueva Córdoba</p>
               </div>
            </div>
            >
         </div>
         <div class="col-xl-3 col-lg-4 col-sm-6 col-12">
            <div class="card">
               <img style='width:101%' class="card-img-top" src="https://www.grupoinver.com.ar/media/desarrollos/desa-VIII.jpg" alt="Card image cap">
               <div class="card-body">
                  <h5 class="card-title" style="font-weight: 600; color: #272d6b; font-size:22px; text-align: center">Desa IX</h5>
                  <p class="card-text">Edificio Desa IX, con exclusiva ubicación en la mejor zona de Nueva Córdoba</p>
               </div>
            </div>
            >
         </div>
         <div class="col-xl-3 col-lg-4 col-sm-6 col-12">
            <div class="card">
               <img style='width:101%' class="card-img-top" src="https://www.grupoinver.com.ar/media/desarrollos/desa-VII.jpg" alt="Card image cap">
               <div class="card-body">
                  <h5 class="card-title" style="font-weight: 600; color: #272d6b; font-size:22px; text-align: center">Desa IX</h5>
                  <p class="card-text">Edificio Desa IX, con exclusiva ubicación en la mejor zona de Nueva Córdoba</p>
               </div>
            </div>
            >
         </div>
         <div class="col-xl-3 col-lg-4 col-sm-6 col-12">
            <div class="card">
               <img style='width:101%' class="card-img-top" src="https://www.grupoinver.com.ar/media/desarrollos/desa-VI.jpg" alt="Card image cap">
               <div class="card-body">
                  <h5 class="card-title" style="font-weight: 600; color: #272d6b; font-size:22px; text-align: center">Desa IX</h5>
                  <p class="card-text">Edificio Desa IX, con exclusiva ubicación en la mejor zona de Nueva Córdoba</p>
               </div>
            </div>
            >
         </div>
         <div class="col-xl-3 col-lg-4 col-sm-6 col-12">
            <div class="card">
               <img style='width:101%' class="card-img-top" src="https://www.grupoinver.com.ar/media/desarrollos/desa-V.jpg" alt="Card image cap">
               <div class="card-body">
                  <h5 class="card-title" style="font-weight: 600; color: #272d6b; font-size:22px; text-align: center">Desa IX</h5>
                  <p class="card-text">Edificio Desa IX, con exclusiva ubicación en la mejor zona de Nueva Córdoba</p>
               </div>
            </div>
            >
         </div>
         <div class="col-xl-3 col-lg-4 col-sm-6 col-12">
            <div class="card">
               <img style='width:101%' class="card-img-top" src="https://www.grupoinver.com.ar/media/desarrollos/desa-IV.jpg" alt="Card image cap">
               <div class="card-body">
                  <h5 class="card-title" style="font-weight: 600; color: #272d6b; font-size:22px; text-align: center">Desa IX</h5>
                  <p class="card-text">Edificio Desa IX, con exclusiva ubicación en la mejor zona de Nueva Córdoba</p>
               </div>
            </div>
            >
         </div>
         <div class="col-xl-3 col-lg-4 col-sm-6 col-12">
            <div class="card">
               <img style='width:101%' class="card-img-top" src="https://www.grupoinver.com.ar/media/desarrollos/desa-III.jpg" alt="Card image cap">
               <div class="card-body">
                  <h5 class="card-title" style="font-weight: 600; color: #272d6b; font-size:22px; text-align: center">Desa IX</h5>
                  <p class="card-text">Edificio Desa IX, con exclusiva ubicación en la mejor zona de Nueva Córdoba</p>
               </div>
            </div>
            >
         </div>
         <div class="col-xl-3 col-lg-4 col-sm-6 col-12">
            <div class="card">
               <img style='width:101%' class="card-img-top" src="https://www.grupoinver.com.ar/media/desarrollos/desa-II.jpg" alt="Card image cap">
               <div class="card-body">
                  <h5 class="card-title" style="font-weight: 600; color: #272d6b; font-size:22px; text-align: center">Desa IX</h5>
                  <p class="card-text">Edificio Desa IX, con exclusiva ubicación en la mejor zona de Nueva Córdoba</p>
               </div>
            </div>
            >
         </div>
         <div class="col-xl-3 col-lg-4 col-sm-6 col-12">
            <div class="card">
               <img style='width:101%' class="card-img-top" src="https://www.grupoinver.com.ar/media/desarrollos/desa-I.jpg" alt="Card image cap">
               <div class="card-body">
                  <h5 class="card-title" style="font-weight: 600; color: #272d6b; font-size:22px; text-align: center">Desa IX</h5>
                  <p class="card-text">Edificio Desa IX, con exclusiva ubicación en la mejor zona de Nueva Córdoba</p>
               </div>
            </div>
            >
         </div>
         <div class="col-xl-3 col-lg-4 col-sm-6 col-12">
            <div class="card">
               <img style='width:101%' class="card-img-top" src="https://www.grupoinver.com.ar/media/desarrollos/tracia.jpg" alt="Card image cap">
               <div class="card-body">
                  <h5 class="card-title" style="font-weight: 600; color: #272d6b; font-size:22px; text-align: center">Desa IX</h5>
                  <p class="card-text">Edificio Desa IX, con exclusiva ubicación en la mejor zona de Nueva Córdoba</p>
               </div>
            </div>
            >
         </div>
      </div>
   </div>
</section>




<div id="desaix" class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-lg" style="width: 80%;max-width: 80%">
      <div class="modal-content">
         <div class="modal-header">
            <h1 style="font-weight: 600; color: #272d6b">Desa IX</h1>
         </div>
         <div class="modal-body">
            <form id="crearGrupoUsuarioForm" data-parsley-validate="" class="form-horizontal form-label-left" novalidate="" style="padding: 20px;">
               <div class="row">
                  <div class="col-12">
                     <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                           <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">TIPOLOGIA</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" id="profile-tab" data-toggle="tab" href="#especificaciones" role="tab" aria-controls="especificaciones" aria-selected="false">ESPECIFICACIONES</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">GALERIA DE FOTOS</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" id="amenities-tab" data-toggle="tab" href="#amenities" role="tab" aria-controls="amenities" aria-selected="false">AMENITIES</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" id="ubicacion-tab" data-toggle="tab" href="#ubicacion" role="tab" aria-controls="ubicacion" aria-selected="false">UBICACIÓN</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" id="contacto-tab" data-toggle="tab" href="#contacto" role="tab" aria-controls="contacto" aria-selected="false">CONTACTO</a>
                        </li>
                     </ul>
                     <div class="tab-content" id="myTabContent" style="padding: 30px; padding-top: 60px">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                           <div class="row">
                              <div class="col-lg-4 col-md-6 descrip_edif">
                                 <img src="https://www.grupoinver.com.ar/desarrollista/edificios/desaIX/img/amplia/desa-IX-1.jpg" alt="" style="width: 100%;">
                              </div>
                              <div class="col-lg-4 col-md-6">
                                 <td width="255" valign="top">
                                    <div id="desaIX1">
                                       <div align="center">
                                          <table style="width: 100%;margin-right: -15px;" class="table_edi" border="0" align="right" cellpadding="0" cellspacing="0">
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
                              <div class="col-lg-4 col-md-12 descrip_edif pt-md-5" style="font-weight: 600;color: #272d6b">
                                 Edificio Desa IX, con exclusiva ubicación en la mejor zona de Nueva Córdoba, sobre la calle Obispo Salguero 724, entre Obispo Oro y Derqui, a 50 mts del Parque sarmiento y a una cuadra y media de la Plaza España.
                                 <p>Es la segunda etapa de un gran proyecto que se completa con el edificio contiguo, ya con 2 años de consolidación.<br>
                                    Actualmente se encuentra en construcción con estimación de entrega de posesión para Julio de 2016. 
                                 </p>
                                 <p>Cuenta con características exclusivas, en cuanto a disposición de departamentos, todos semipisos, de 1 dormitorio y medio, y una tipologia especial en piso 14º de 2 dormitorios y medio con una gran terraza propia de 30m2.</p>
                                 <p>Ademas  el edificio contara con detalles de categoría, pisos de porcelanato pulido, calefacción central, portero visor, grandes balcones, espacios comunes como salón de usos múltiples, gimnasio, pileta y solárium.</p>
                              </div>
                              <div class="col-lg-8 col-md-6 VerCons" style="display: none;padding: 30px;">
                                 <img src="" alt="" style="width: 100%;">
                              </div>
                           </div>
                        </div>
                        <div class="tab-pane fade" id="especificaciones" role="tabpanel" aria-labelledby="profile-tab">
                           <div class="row">
                              <div class="col-md-4">
                                 <img src="https://www.grupoinver.com.ar/desarrollista/edificios/desaIX/especificaciones.jpg" alt="" style="width: 100%;">
                              </div>
                              <div class="col-md-8 pt-md-0 pt-5" style="font-weight: 600;color: #272d6b">
                                 <table class="table">
                                    <tbody>
                                       <tr>
                                          <td><i class="fa fa-desktop"></i> <span> Portero Electrónico con visor mediante pantalla.</span></td>
                                       </tr>
                                       <tr>
                                          <td><i class="fa fa-lightbulb"></i> <span> Luces con sensores de moviento en circulaciones y palier.</span></td>
                                       </tr>
                                       <tr>
                                          <td><i class="fa fa-tv"></i> <span> Instalaciones para telefonía, internet y TV con tomas en dormitorios y estar comedor.</span></td>
                                       </tr>
                                       <tr>
                                          <td><i class="fa fa-code-branch"></i><span>  Cableado estructurado con conexión a internet y servidor para la grabación de cámaras de seguridad y provisión de internet a los departamentos.</span></td>
                                       </tr>
                                       <tr>
                                          <td><i class="fa fa-snowflake"></i> <span> Preinstalación de Aire Acondicionado con descarga de agua.</span></td>
                                       </tr>
                                       <tr>
                                          <td><i class="fa fa-thermometer-full"></i><span>  Calefacción individual con caldera dual.</span></td>
                                       </tr>
                                       <tr>
                                          <td><i class="fa fa-toilet"></i> <span> Baños completos con bañeras.</span></td>
                                       </tr>
                                       <tr>
                                          <td><i class="fa fa-utensils"></i> <span> Cocinas Semintegradas, con muebles bajomesada y alacenas con estantes, espacio para microondas y lavarropas.</span></td>
                                       </tr>
                                       <tr>
                                          <td><i class="fa fa-home"></i> <span> Carpinterías exteriores de aluminio.</span></td>
                                       </tr>
                                       <tr>
                                          <td><i class="fa fa-door-closed"></i><span>  Placard con puertas corredizas de placa de madera.</span></td>
                                       </tr>
                                       <tr>
                                          <td><i class="fa fa-square"></i> <span> Pisos Interiores de porcelanato pulido.</span></td>
                                       </tr>
                                       <tr>
                                          <td><i class="fa fa-building"></i> <span> Tipologías con balcones.</span></td>
                                       </tr>
                                    </tbody>
                                 </table>
                              </div>
                           </div>
                        </div>
                        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                           <div class="row">
                              <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                 <a href="#" class="fancybox" rel="ligthbox">
                                 <img  src="https://www.grupoinver.com.ar/desarrollista/edificios/desaIX/img/tumb/desa-IX-1.jpg" class="zoom img-fluid "  alt="">
                                 </a>
                              </div>
                              <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                 <a href="#"  class="fancybox" rel="ligthbox">
                                 <img  src="https://www.grupoinver.com.ar/desarrollista/edificios/desaIX/img/tumb/desa-IX-2.jpg" class="zoom img-fluid"  alt="">
                                 </a>
                              </div>
                              <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                 <a href="#" class="fancybox" rel="ligthbox">
                                 <img  src="https://www.grupoinver.com.ar/desarrollista/edificios/desaIX/img/tumb/desa-IX-3.jpg" class="zoom img-fluid "  alt="">
                                 </a>
                              </div>
                              <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                 <a href="#" class="fancybox" rel="ligthbox">
                                 <img  src="https://www.grupoinver.com.ar/desarrollista/edificios/desaIX/img/tumb/desa-IX-4.jpg" class="zoom img-fluid "  alt="">
                                 </a>
                              </div>
                              <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                 <a href="#" class="fancybox" rel="ligthbox">
                                 <img  src="https://www.grupoinver.com.ar/desarrollista/edificios/desaIX/img/tumb/desa-IX-5.jpg" class="zoom img-fluid "  alt="">
                                 </a>
                              </div>
                              <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                 <a href="#" class="fancybox" rel="ligthbox">
                                 <img  src="https://www.grupoinver.com.ar/desarrollista/edificios/desaIX/img/tumb/desa-IX-6.jpg" class="zoom img-fluid "  alt="">
                                 </a>
                              </div>
                              <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                 <a href="#" class="fancybox" rel="ligthbox">
                                 <img  src="https://www.grupoinver.com.ar/desarrollista/edificios/desaIX/img/tumb/desa-IX-7.jpg" class="zoom img-fluid "  alt="">
                                 </a>
                              </div>
                              <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                 <a href="#" class="fancybox" rel="ligthbox">
                                 <img  src="https://www.grupoinver.com.ar/desarrollista/edificios/desaIX/img/tumb/desa-IX-8.jpg" class="zoom img-fluid "  alt="">
                                 </a>
                              </div>
                           </div>
                        </div>
                        <div class="tab-pane fade" id="amenities" role="tabpanel" aria-labelledby="amenities-tab">
                           <div class="row">
                              <div class="col-md-4">
                                 <img src="https://www.grupoinver.com.ar/desarrollista/edificios/desaIX/amenities.jpg" alt="" style="width: 100%;">
                              </div>
                              <div class="col-md-8 pt-5 pt-md-0" style="font-weight: 600;color: #272d6b">
                                 <table class="table">
                                    <tbody>
                                       <tr>
                                          <td><i class="fa fa-bath"></i> <span> Lavadero común con máquinas de lavar y secar comerciales.</span></td>
                                       </tr>
                                       <tr>
                                          <td><i class="fa fa-swimmer"></i> <span> Terraza solarium y espejo de agua.</span></td>
                                       </tr>
                                       <tr>
                                          <td><i class="fa fa-dumbbell"></i> <span> Salón de gimnasia con locker para guardado para cada departamento.</span></td>
                                       </tr>
                                       <tr>
                                          <td><i class="fa fa-utensils"></i><span>  Salón de usos múltiples integrado a patio jardín parquizado..</span></td>
                                       </tr>
                                    </tbody>
                                 </table>
                              </div>
                           </div>
                        </div>
                        <div class="tab-pane fade" id="ubicacion" role="tabpanel" aria-labelledby="amenities-tab">
                        </div>
                        <div class="tab-pane fade" id="contacto" role="tabpanel" aria-labelledby="amenities-tab">
                           <div class="row">
                              <div class="col-4 img_cont">
                                 <img src="https://www.grupoinver.com.ar/desarrollista/edificios/desaIX/img/amplia/desa-IX-1.jpg" alt="" width="100%">
                              </div>
                              <div class="col-12 col-md-8">
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
                      </div>
                  </div>
                </div>
            </form>
         </div>
      </div>
   </div>
</div>



<?php get_footer(); ?>


