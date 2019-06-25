<?php

	/*
	 * Template name: Contactanos
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
<style>
  .banner_section{
    background: url(https://www.grupoinver.com.ar/desarrollista/edificios/desaIX/img/amplia/desa-IX-8.jpg);
    background-repeat: no-repeat;
    background-size: cover;
    background-position: bottom;
    height: 800px;
  }
  .search-box .card{
    -webkit-box-shadow: 3px 2px 36px -9px rgba(0,0,0,0.75);
    -moz-box-shadow: 3px 2px 36px -9px rgba(0,0,0,0.75);
    box-shadow: 3px 2px 36px -9px rgba(0,0,0,0.75);
  }
  .box-descripcion{
      color: white;
      background-color: #272d6b;
      max-width: 45%;
      text-align: center;
      padding-top: 10px;
      padding-bottom: 4px;
      border-radius: 10px;
      margin-bottom: -20px;
      z-index: 1;
      position: relative;
      margin-left: 23px;
  }
  .search-box .card-body{
    padding-top: 43px;
  }

  .historia_section h1:after{
        margin-left: -339px;
  }
  .historia_section h1{
        color:  #272d6b;
  }



@media (max-width: 576px) { 
  .historia_section h1{
    font-size: 55px;
  }
  .historia_section h1:after{
        margin-left: -295px;
  }
  .table_edi{
        width: 100%;
  }
  .modal-dialog{
      width: 96% !important;
      max-width: 96% !important;
  }
}


@media (max-width: 768px) { 
  .search-box{
        margin-top: 75px !important;
  }
  .box-descripcion-text h4{
    font-size: 1.3rem;
  }
  .box-descripcion{
    padding-left: 10px;
    padding-right: 10px;
  }
  .table_edi{
        width: 85%;
  }
  .img_cont{
    display: none;
  }
}


@media (max-width: 992px) { 
  .box-descripcion {
      max-width: 80% !important;
  }
  .box-descripcion{
    margin-left: auto;
    margin-right: auto;
  }
  .search-box .fa-search{
    display: none;
  }
    .nav-item{
    margin: 0 auto;
    margin-top: 2px;
    width: 100%;
  }
}


@media (max-width: 1200px) { 
  .box-descripcion {
    max-width: 55%;
  }
}


@media (min-width: 992px) and (max-width: 1199.98px) {
  .modal-dialog{
      width: 98% !important;
      max-width: 98% !important;
  }
}
</style>

<!-- END The overlay -->
<section class="banner_section">
    <div class="container">
      <div class="row">
        <div class="col-12">
            <div class="search-box" style="margin-top: 200px;">
              <div class="box-descripcion">
                <div class="box-descripcion-text">
                  <h4><i class="fa fa-search"></i> ¡Encuentra la propedad que buscas!</h4>
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
	.contact-section{
		    padding-top: 100px;
    padding-bottom: 100px;
    background: -webkit-linear-gradient(left, #0072ff, #272d6b);
}
.contact-form{
    background: #fff;
    width: 70%;
}
.contact-form .form-control{
    border-radius:1rem;
}
.contact-image{
    text-align: center;
}
.contact-image img{
    border-radius: 6rem;
    width: 11%;
    margin-top: -3%;
    transform: rotate(29deg);
}
.contact-form form{
    padding: 9%;
}
.contact-form form .row{
    margin-bottom: -7%;
}
.contact-form h3{
    margin-bottom: 8%;
    margin-top: -10%;
    text-align: center;
    color: #0062cc;
}
.contact-form .btnContact {
    width: 50%;
    border: none;
    border-radius: 1rem;
    padding: 1.5%;
    background: #dc3545;
    font-weight: 600;
    color: #fff;
    cursor: pointer;
}
.btnContactSubmit
{
    width: 50%;
    border-radius: 1rem;
    padding: 1.5%;
    color: #fff;
    background-color: #0062cc;
    border: none;
    cursor: pointer;
}

@media (min-width: 768px) { 
.btn_submit{
		    margin-top: -53px;
	}
}

@media (max-width: 468px) { 
	.ws_img{
		width: 100%
	}
}
</style>
<section class="contact-section">
<div class="container contact-form">
            <div class="contact-image">
                <img src="https://image.ibb.co/kUagtU/rocket_contact.png" alt="rocket_contact"/>
            </div>
            <form method="post">
                <h3>Contactanos y atenderemos tu solicitud inmediatamente</h3>
               <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" name="txtName" class="form-control" placeholder="Nombre *" value="" />
                        </div>
                        <div class="form-group">
                            <input type="text" name="txtEmail" class="form-control" placeholder="Apellido *" value="" />
                        </div>
                        <div class="form-group">
                            <input type="text" name="txtPhone" class="form-control" placeholder="Direccion *" value="" />
                        </div>
                        <div class="form-group">
                            <input type="text" name="txtName" class="form-control" placeholder="Ciudad *" value="" />
                        </div>
                        <div class="form-group">
                            <input type="text" name="txtEmail" class="form-control" placeholder="Email *" value="" />
                        </div>
                        <div class="form-group">
                            <input type="text" name="txtPhone" class="form-control" placeholder="Telefono *" value="" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <textarea name="txtMsg" class="form-control" placeholder="Mensaje *" style="width: 100%; height: 363px;"></textarea>
                        </div>
                    </div>
                    <div class="col-md-6 btn_submit">
                    	<div class="form-group">
                            <input type="submit" name="btnSubmit" class="btnContact btn-block" value="Enviar mensaje" />
                        </div>
                    </div>
                </div>
                <div class="row pb-5">
                	<div class="col-md-6 mt-5 pt-5" align="center">
                    	<img class="ws_img" src="https://www.grupoinver.com.ar/media/base/wapp.png" alt=""><br><br>
                    	<p style="font-size: 14px">Escríbanos por este medio por consultas, o asesoramiento.</p>
                    </div>
                    <div class="col-md-6 mt-md-5 pt-md-5" align="center">
                    	<p class="m-0" style="color: "><i class="fa fa-whatsapp"></i> 351 2916132</p>
					             <p class="m-0" style="color: "><i class="fa fa-phone"></i> 0351 453 4685</p>
					             <p class="m-0" style="color: "><i class="fa fa-envelope"></i> info@grupoinver.com.ar</p>
					             <p class="m-0" style="color: "><i class="fa fa-address-book"></i> Av. 24 de Setiembre 1616 - Córdoba</p>
                    </div>
                </div>
            </form>
</div>
</section>

<script>
  $(document).ready(function(){
    $('#desaix').modal('show');
    $("#TipoPropiedad").change(function(){
      if ($("#TipoPropiedad").val()==3 || $("#TipoPropiedad").val()==4) {
        $("#Dormitorios, #Cochera").attr("disabled", "disabled");
      } else{
        $("#Dormitorios, #Cochera").removeAttr("disabled");
      }
    })
  })
</script>

<?php get_footer(); ?>


