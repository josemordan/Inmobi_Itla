<!-- Submit Ad -->
  <div class="submit-ad main-grid-border">
    <div class="container">
      <h2 class="w3-head">Publicar Anuncio</h2>
      <div class="post-ad-form">
        <form action="<?php echo base_url('Anuncio/guardar'); ?>" method="post"  id="form_anuncio" enctype="multipart/form-data">

          <label> Titulo<span>*</span></label>
          <input type="text" class="phone" name="titulo" placeholder="" >
          <div class="clearfix"></div>
          <label>Direccion <span>*</span></label>
          <input type="text" class="phone" name="direccion" placeholder="">
          <div class="clearfix"></div>
          <label>Tipo<span>*</span></label>
          <select class="" name="tipo">
            <option>Casa</option>
            <option>Apartamento</option>
            <option>Cabaña</option>
            <option>Hotel</option>
            <option>PentHouse</option>
            <option>Construccion</option>
            <option>Finca</option>
            <option>Hotel</option>
          </select>
          
          <div class="clearfix"></div>
          <label>Precio<span>*</span></label>
          <input type="text" class="phone" name="precio" placeholder="">
          <div class="clearfix"></div>
          <label>Accion<span>*</span></label>
          <select name="accion">
            <option>Vender</option>
            <option>Alquilar</option>
          </select>
          
          <div class="clearfix"></div>
          <label>Descripcion<span>*</span></label>
          <textarea class="mess" placeholder="describir el inmobiliario" name="descripcion"></textarea>
          <div class="clearfix"></div>

          <label>File: <span>*</span></label>

          <input type="file" name="imagen" class="phone">
            <div class="clearfix"></div>

          <br><br><div class="col col-md-offset-6">
            <button type="submit" class="btn btn-info btn-ms">Guardar</button>
          </div>
        
          </form>
          </div>
      </div>
    </div>  
  </div>
