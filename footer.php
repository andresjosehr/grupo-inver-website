<footer class="section footer">
	<div class="container">
		<div class="row footer_logo_responsive">
			<div class="col-12 col-sm-4" align="center">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo_inver.png" alt="">
			</div>
			<div class="col-12 col-sm-4 center-sm">
				<ul class="footer_menu">
					<a href="../"><li>INICIO</li></a>
					<a href="desarrollista"><li>DESARROLLISTA</li></a>
					<a href="inmobiliaria"><li>INMOBILIARIA</li></a>
					<a href="consultora"><li>CONSULTORA</li></a>
					<a href="arquitectura-y-diseno"><li>ARQUITECTURA Y DISEÑO</li></a>
					<a href="contacto"><li>CONTACTO</li></a>
				</ul>
			</div>
			<div class="col-12 col-sm-4 center-sm data_fiscal">
				<div class="row">
					<div class="col-md-3">
						<p class="center-sm" style="margin-top: -16px;"><a class="data_fiscal_link" href="http://qr.afip.gob.ar/?qr=Xx_Se24j7HgBlJ1r8ugDaA,," target="_blank"></a></p>	
					</div>
					<div class="col-md-9">
						<p>Av. 24 de Setiembre 1616 <br> Barrio General Paz  X5004FTT <br> Córdoba - Argentina</p>	
					</div>
				</div>
				<div class="div_social_footer" style="margin-top: 25px">
					<a href="https://www.instagram.com/inverinmobiliaria/" target="_blank">
						<i style="font-size: 40px" class="fab fa-instagram social_footer"></i>
					</a> <p style="font-size: 20px">@inverinmobiliaria</p>
				</div>
				<div class="div_social_footer" style="margin-top: 5px">
					<a href="https://www.facebook.com/grupoinverconsultorainmobiliaria/" target="_blank">
						<i style="font-size: 40px" class="fab fa-facebook social_footer"></i>
					</a> <p style="font-size: 20px">grupoinverconsultorainmobiliaria</p>
				</div>
				<div class="div_social_footer" style="margin-top: 5px">
					<a href="https://api.whatsapp.com/send?phone=5493512916132" target="_blank">
						<i style="font-size: 40px" class="fab fa-whatsapp social_footer"></i>
					</a>
					<a class="ws_num" style="color: #272d6b!important;cursor: pointer;" href="https://api.whatsapp.com/send?phone=5493512916132" target="_blank"><p class="p_number">+54 9 351 291-6132</p></a>
				</div>

				<div class="div_social_footer" style="margin-top: 5px">
					<i style="font-size: 30px;margin-left: 13px;margin-right: 17px;" class="fa fa-phone"></i> 0351 453-4685 / 0351 451-7335 <br>	
				</div>

			</div>
		</div>
	</div>
</footer>

<section class="postfooter">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 copydiv" style="color: white; text-align: center;">
				<h3 class="center-sm dere_rev" style='font-family: "Open Sans",sans-serif;color: white !important'>© Copyright 2019 Grupo INVER | Desarrollado por <a href="https://www.btob.com.ar/" target="_blank" style="text-decoration: none;color: white;font-weight: 600;"> <span style="color: #fb1515;font-size: 13px;position: relative;margin-right: 5px;bottom: -.5px;">BtoB</span>Soluciones </a> <!-- Todos los derechos reservados --></h3>
			</div>
		</div>
	</div>
</section>


<a href="javascript:" id="return-to-top"><i class="fa fa-arrow-up"></i></a>

<style>
	.ws_num{
		padding-top: 7px;
	}
	.div_social_footer{
		display: flex;
	}
	.social_footer{
		padding: 0 10px;
	}
	@media (max-width: 1000px){
		.div_social_footer{
			display: block;
		}

		.p_number{
		    margin-top: 15px;
		}
	}
	input[type=number]::-webkit-inner-spin-button, 
	input[type=number]::-webkit-outer-spin-button { 
	    -webkit-appearance: none;
	    -moz-appearance: none;
	    appearance: none;
	    margin: 0; 
	}

	#return-to-top {
    position: fixed;
    bottom: 20px;
    right: 20px;
    background: rgb(0, 0, 0);
    background: rgba(0, 0, 0, 0.7);
    width: 50px;
    height: 50px;
    display: block;
    text-decoration: none;
    -webkit-border-radius: 35px;
    -moz-border-radius: 35px;
    border-radius: 35px;
    display: none;
    -webkit-transition: all 0.3s linear;
    -moz-transition: all 0.3s ease;
    -ms-transition: all 0.3s ease;
    -o-transition: all 0.3s ease;
    transition: all 0.3s ease;
}
#return-to-top i {
    color: #fff;
    margin: 0;
    position: relative;
    left: 16px;
    top: 13px;
    font-size: 19px;
    -webkit-transition: all 0.3s ease;
    -moz-transition: all 0.3s ease;
    -ms-transition: all 0.3s ease;
    -o-transition: all 0.3s ease;
    transition: all 0.3s ease;
}
#return-to-top:hover {
    background: rgba(0, 0, 0, 0.9);
}
#return-to-top:hover i {
    color: #fff;
    top: 5px;
}

</style>


<script>

	$(document).ready(function(){
		var parts = window.location.href.split('/');
		var lastSegment = parts.pop() || parts.pop();  // handle potential trailing slash
		if (lastSegment=="desarrollista") $("#menu-item-38").addClass("active");
		if (lastSegment=="inmobiliaria" || parts[parts.length-1]=="inmuebles" || lastSegment=="vender-o-alquilar") {
			$("#menu-item-43").addClass("active");
			setInterval(function(){
				$("#menu-item-15").removeClass("active")
			}, 100);
		}
		if (lastSegment=="consultora") $("#menu-item-423").addClass("active");
		if (lastSegment=="arquitectura-y-diseno") $("#menu-item-812").addClass("active");
		if (lastSegment=="contacto") $("#menu-item-422").addClass("active");
	});

	// ===== Scroll to Top ==== 
$(window).scroll(function() {
    if ($(this).scrollTop() >= 50) {        // If page is scrolled more than 50px
        $('#return-to-top').fadeIn(200);    // Fade in the arrow
    } else {
        $('#return-to-top').fadeOut(200);   // Else fade out the arrow
    }
});
$('#return-to-top').click(function() {      // When arrow is clicked
    $('body,html').animate({
        scrollTop : 0                       // Scroll to top of body
    }, 500);
});


</script>

<?php // wp_footer(); ?>
<script src='<?php echo get_site_url(); ?>/wp-includes/js/wp-embed.min.js?ver=4.9.8'></script>
</body>
</html>

