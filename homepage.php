<?php

	/*
	 * Template name: Homepage
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
                          <option value="2">Casa</option>
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


<section class="grupo">
   <div class="container">
      <div class="row">
         <div class="col-12">
            <h1 class="tit_prin mb-5">GRUPO INVER</h1>
         </div>
         <div class="col-md-4 col-sm-6 mt-4">
            <div class="card" style="  min-height: 300px">
              <div class="card-body">
                <div style="width: 100%" align="center"><i class="fas fa-users-cog grupo_icon"></i></div>
                <h5 class="card-title" align="center" style="font-weight: 600">Desarrollista</h5>
                <p class="card-text"> Un equipo de profesionales desarrollan en forma integral las diferentes etapas del desarrollo de una obra: asesoramiento, proyecto, administración, dirección y construcción.</p>
              </div>
            </div>
         </div>
         <div class="col-md-4 col-sm-6 mt-4">
            <div class="card" style="  min-height: 300px">
              <div class="card-body">
                <div style="width: 100%" align="center"><i class="fas fa-search grupo_icon"></i></div>
                <h5 class="card-title" align="center" style="font-weight: 600">Consultora</h5>
                <p class="card-text">Servicios de apoyo para terceros, como son: proyectos de inversión, análisis de costos, logística, comercio exterior, preparación y evaluación de antecedentes para licitaciones de obras, y asesoramiento económico-financiero de empresas.</p>
              </div>
            </div>
         </div>
         <div class="col-md-4 col-sm-12 mt-4">
            <div class="card" style="min-height: 300px">
              <div class="card-body">
                <div style="width: 100%" align="center"><i class="fas fa-home grupo_icon"></i></div>
                <h5 class="card-title" align="center" style="font-weight: 600">Inmobiliaria</h5>
                <p class="card-text">Se brinda asesoramiento técnico y profesional en la compraventa, tasación y administración de inmuebles con la seriedad e idoneidad que avalan el prestigio de nuestra empresa.</p>
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
            <h1 class="tit_prin mb-5">EMPRESA</h1>
         </div>
         <div class="col-xl-8 col-lg-6 col-md-6 mt-md-5 mb-md-5 pb-md-5">
            <p class="text_history text-justify">La Organización es una asociación de profesionales especializados en servicios de consultorías para empresas, orientada al asesoramiento económico-financiero, particularizando en todo lo relacionado con la gestión de organizaciones, estudios y evaluación de proyectos de inversión.</p>
            <p class="text_history text-justify">Sus comienzos - con la propia actividad profesional de su Director -, datan en la década de 1970 y de otro profesional de ciencias económicas como asociado principal que se incorpora más tarde. La estructura se completa con profesionales especializados en cada una de las áreas de actividad de la Organización.</p>
         </div>
         <div class="col-xl-4 col-lg-6 col-md-6 mb-md-5 pb-md-5 pt-5 pb-5 pb-md-0 " align="right">
            <img class="img_historia" src="https://dummyimage.com/300x200/000/fff" alt="">
         </div>
         <div class="img_historia_des col-xl-4 col-lg-6 col-md-6 mb-5 pb-5" align="left">
            <img class="img_historia" src="https://dummyimage.com/300x200/000/fff" alt="">
         </div>
         <div class="col-xl-8 col-lg-6 col-md-6 mb-md-5 pb-md-5 anos_tardes">
            <p class="text_history text-justify">Años más tarde se convocó para el área de comercialización y administración de bienes raíces a un Corredor Inmobiliario de reconocida experiencia en la materia, ex gerente de la Sucursal Santa Fe de la firma Alvear S.A. en el periodo 04/75 - 06/78 fecha desde la que continuó ejerciendo su actividad en forma independiente.</p>
            <p class="text_history text-justify">Es política central de la Organización, además de su experiencia y capacitación, la búsqueda y aplicación de metodologías eficaces y de avanzada para preservar una óptima calidad como respuesta a los problemas de sus comitentes.</p>
         </div>
         <div class="col-xl-4 col-lg-6 col-md-6 mb-md-5 pb-md-5 pt-5 pb-5 pt-md-0 pb-md-0 img_historia_res" align="left" style="display: none">
            <img class="img_historia" src="https://dummyimage.com/300x200/000/fff" alt="">
         </div>
         <div class="col-xl-8 col-lg-6 col-md-6 mb-md-5 pb-md-5">
            <p class="text_history text-justify">La propuesta y modelo de trabajo, articula los beneficios de la asociación profesional con la participación en el desarrollo y generación de negocios, que contribuyen a acrecentar las experiencias y habilidades de los ejecutivos de sus comitentes.</p>
            <p class="text_history text-justify">Una de las exigencias principales de la Organización es la propia capacitación continua y activa de sus miembros, tanto desde lo académico como cuanto foro nacional o internacional así lo imponga como medio idóneo para estar a la vanguardia de los temas que hacen a la vida y crecimiento de las empresas, como en lo referente a la gestión comercial.</p>
         </div>
         <div class="col-xl-4 col-lg-6 col-md-6 mb-md-5 pb-md-5 pt-5 pb-5 pt-md-0 pb-md-0 " align="right">
            <img class="img_historia" src="https://dummyimage.com/300x200/000/fff" alt="">
         </div>
      </div>
   </div>
</section>
<section class="skewed-bg">
   <div class="content container">
      <div class="row">
         <div class="col-md-12">
            <h1 class="tit_prin_con mb-5" align="center">Servicios</h1>
            <p class="text text-justify service_text">Destinados fundamentalmente a satisfacer los objetivos planificados – y que no son otros que los que demanda la complejidad de la realidad empresaria de hoy para dar una respuesta calificada a los requerimientos actuales de la vida económica –, como así también a impulsar la aplicación de técnicas y acciones innovadoras que contribuyan a modernizar y eficientizar a las organizaciones.</p>
            <div class="row mb-5 mt-5">
               <div class="col-md-4 col-sm-6 list_service">
                  <p ><i class="fa fa-check"></i> Consultoría</p>
               </div>
               <div class="col-md-4 col-sm-6 list_service">
                  <p ><i class="fa fa-check"></i> Desarrollo de sistemas</p>
               </div>
               <div class="col-md-4 col-sm-6 list_service">
                  <p ><i class="fa fa-check"></i> Asesoramiento económico y financiero</p>
               </div>
               <div class="col-md-4 col-sm-6 list_service">
                  <p ><i class="fa fa-check"></i> Cursos de capacitación in company</p>
               </div>
               <div class="col-md-4 col-sm-6 list_service">
                  <p ><i class="fa fa-check"></i> Costos y gestión - tributaria - societaria</p>
               </div>
               <div class="col-md-4 col-sm-6 list_service">
                  <p ><i class="fa fa-check"></i> Proyectos de inversión</p>
               </div>
               <div class="col-md-4 col-sm-6 list_service">
                  <p ><i class="fa fa-check"></i> Comercialización de bienes raíces</p>
               </div>
               <div class="col-md-4 col-sm-6 list_service">
                  <p ><i class="fa fa-check"></i> Desarrollos inmobiliarios</p>
               </div>
               <div class="col-md-4 col-sm-6 list_service">
                  <p ><i class="fa fa-check"></i> Administración de propiedades</p>
               </div>
               <div class="col-md-4 col-sm-6 list_service">
                  <p ><i class="fa fa-check"></i> Administración de tasaciones </p>
               </div>
               <div class="col-md-4 col-sm-6 list_service">
                  <p ><i class="fa fa-check"></i> Administración de servicios auxiliares</p>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="location_section mb-5">
   <div class="container">
      <div class="row">
         <div class="col-12">
            <h1 class="tit_prin mb-5" align="center">Ubicación</h1>
         </div>
         <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
            <p class="text_history">Grupo INVER cuenta con oficina propia ubicada en barrio General Paz de la ciudad de Córdoba muy cercano a la casa de gobierno, sobre la calle Av. 24 de Setiembre 1616.</p>
            <div class="row">
               <div class="col-md-6 col-sm-4 col-6" align="center">
                  <img class="info_loca" src="https://www.grupoinver.com.ar/media/contacto/cq.png">
               </div>
               <div class="col-md-6 col-sm-8 col-6">
                  <img src="https://www.grupoinver.com.ar/media/contacto/icon-cq.png" alt=""><br> 
                  <p>Lea el código QR desde su dispositivo móvil y obtenga la información para llegar hasta la empresa</p>
               </div>
            </div>
            <br>  
            <div class="row">
               <div class="col-md-6 col-sm-4 col-6" align="center">
                  <img class="info_loca" src="https://www.grupoinver.com.ar/media/contacto/google.jpg">
               </div>
               <div class="col-md-6 col-sm-8 col-6">
                  <img src="https://www.grupoinver.com.ar/media/contacto/icon-google.png" alt=""><br> 
                  <p>Más información sobre la ubicación de la empresa consultelá a través de Googlemaps</p>
               </div>
            </div>
         </div>
         <div class="col-xl-8 col-lg-6 col-md-6 col-sm-12 pt-5 pt-md-0">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d27240.36935898405!2d-64.162067!3d-31.412854!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9432a2a670b47471%3A0x8e958b093eb66206!2sAv.+24+de+Septiembre+1616%2C+X5004FTT+C%C3%B3rdoba!5e0!3m2!1ses-419!2sar!4v1560350676082!5m2!1ses-419!2sar" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>  
         </div>
      </div>
   </div>
</section>



<?php get_footer(); ?>


