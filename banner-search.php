
 <?php 


/*
   * Template name: Banner-search
   *
  */


  ?>



 <section class="banner_section" style="background: url(https://www.grupoinver.com.ar/desarrollista/edificios/desaIX/img/amplia/desa-IX-8.jpg);">
    <div class="container">
      <div class="row">
        <div class="col-12">
            <div class="search-box" style="margin-top: 200px;">
              <div class="box-descripcion">
                <div class="box-descripcion-text">
                  <h4 style="font-size: 1.2rem;"><i class="fa fa-search"></i> ¡Encuentre la propiedad que busca!</h4>
                </div>
              </div>
              <div class="card" style="margin: 0 auto;">
                <div class="card-body">
                  <form role="search" action="<?php echo site_url('/'); ?>" method="get" id="searchform">
                    <input type="hidden" name="post_type" value="inmuebles" />
                    <div class="row">
                      <div class="col-md-3">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Tipo de operación</label>
                        <select type="text" class="form-control" name="TipoOperacion" id="TipoOperacion" placeholder="Password">
                          <option value="Indistinto">Indistinto</option>
                          <option value="Alquiler">Alquiler</option>
                          <option value="Venta">Venta</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group">
                        <label for="exampleInputPassword1">Tipo de propiedad</label>
                        <select type="text" class="form-control" name="TipoPropiedad" id="TipoPropiedad" placeholder="Password">
                          <option value="Indistinto">Indistinto</option>
                          <option value="Casa">Casa</option>
                          <option value="Departamento">Departamento</option>
                          <option value="Terreno">Terreno</option>
                          <option value="Local">Local</option>
                          <option value="Galpón">Galpón</option>
                          <option value="Oficina">Oficina</option>
                          <option value="Cochera">Cochera</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-2">
                      <div class="form-group">
                        <label for="exampleInputPassword1">Dormitorios</label>
                        <select type="text" class="form-control clase-chochera" name="Dormitorios" id="Dormitorios" placeholder="Password">
                          <option value="Indistinto">Indistinto</option>
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">Mas de 2</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-2">
                      <div class="form-group">
                        <label for="exampleInputPassword1">Cochera</label>
                        <select type="text" class="form-control clase-chochera" name="Cochera" id="Cochera" placeholder="Password">
                          <option value="SI">Si</option>
                          <option value="NO">No</option>
                          <option value="Indistinto">Indistinto</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-2">
                      <div class="form-group">
                        <label for="exampleInputPassword1" style="color: white">_</label><br>
                        <button type="submit" class="btn btn-primary btn-block">Buscar <i style="margin-left: 20px;" class="fa fa-search"></i></button><br>
                        <a href="vender-o-alquilar/" class="btn btn-danger btn-block ven_btn_res">Quiero alquilar o vender mi propiedad</a>
                      </div>
                    </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <div class="row mt-5">
              <div class="col-12" align="center">
                <a href="vender-o-alquilar/" class="btn btn-primary ven_btn_des">Quiero Alquilar</a>
                <a href="vender-o-alquilar/" class="btn btn-primary ven_btn_des">Quiero Vender</a>
                <a href="vender-o-alquilar/" class="btn btn-primary ven_btn_des">Quiero que administren mi propiedad</a>
              </div>
            </div>
        </div>
      </div>
    </div>
</section>


<style>
  
  @media (min-width: 768px) { 
    .ven_btn_res{
      display: none;
    }
  }

  @media (max-width: 768px) { 
    .ven_btn_des{
      display: none;
    }
  }



</style>