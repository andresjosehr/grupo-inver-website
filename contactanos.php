<?php

	/*
	 * Template name: Contactanos
	 *
	*/

	get_header();


  require_once("banner-search.php");

     $Contacto=get_field('informacion_de_contacto');
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
                <img style="transform: rotate(0deg);" src="<?= get_template_directory_uri() ?>/images/casa.png" alt="rocket_contact"/>
            </div>
            <form method="post">
                <h3>Contáctenos y atenderemos su solicitud inmediatamente</h3>
               <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" name="txtName" class="form-control" placeholder="Nombre *" value="" />
                        </div>
                        <div class="form-group">
                            <input type="text" name="txtEmail" class="form-control" placeholder="Apellido *" value="" />
                        </div>
                        <div class="form-group">
                            <input type="text" name="txtPhone" class="form-control" placeholder="Dirección *" value="" />
                        </div>
                        <div class="form-group">
                            <input type="text" name="txtName" class="form-control" placeholder="Ciudad *" value="" />
                        </div>
                        <div class="form-group">
                            <input type="text" name="txtEmail" class="form-control" placeholder="Email *" value="" />
                        </div>
                        <div class="form-group">
                            <input type="text" name="txtPhone" class="form-control" placeholder="Teléfono *" value="" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <textarea name="txtMsg" class="form-control" placeholder="Mensaje *" style="width: 100%; height: 363px;"></textarea>
                        </div>
                    </div>
                    <div class="col-md-6 btn_submit">
                    	<div class="form-group">
                            <input style="background: #272d6b" type="submit" name="btnSubmit" class="btnContact btn-block btn-primary" value="Enviar Mensaje" />
                        </div>
                    </div>
                </div>
                <div class="row pb-5">
                	<div class="col-md-6 mt-5 pt-5" align="center">
                    	<a href="https://api.whatsapp.com/send?phone=5493512916132" target="_blank"><img class="ws_img" src="<?= get_template_directory_uri() ?>/images/wapp.png" alt=""></a><br><br>
                    	<p style="font-size: 14px">Escríbanos por este medio por consultas o asesoramiento.</p>
                    </div>
                    <div class="col-md-6 mt-md-5 pt-md-5" align="left" style="left: 20px">
                    	<p class="m-0" style="color: "><i class="fa fa-mobile"></i> <?php echo $Contacto["n_whatsapp"] ?></p>
					             <p class="m-0" style="color: "><i class="fa fa-phone"></i> <?php echo $Contacto["n_telefono"] ?></p>
					             <p class="m-0" style="color: "><i class="fa fa-envelope"></i> <?php echo $Contacto["email"] ?></p>
					             <p class="m-0" style="color: "><i class="fa fa-address-book"></i> <?php echo $Contacto["direccion"] ?></p>
                    </div>
                </div>
            </form>
</div>
</section>

<script>
  $(document).ready(function(){
    $('html, body').animate({scrollTop:750}, 'slow');

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


