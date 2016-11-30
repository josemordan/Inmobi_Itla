<!--single-page-->
	<div class="single-page main-grid-border">
		<div class="container">
			<div class="product-desc">
				<div class="col-md-7 product-view">
					<h2>INMOBI_ITLA es simplemente un texto ficticio de la industria de impresión y composición</h2>
					<p> <i class="glyphicon glyphicon-map-marker"></i><a href="#">Estado</a>, <a href="#">Ciudad</a>| Añadido 06:55 pm, Ad ID: 987654321</p>
					<div class="flexslider">
						<ul class="slides">
							<li data-thumb="<?php echo base_url('');?>images/P1.jpg">
								<img src="<?php echo base_url('');?>images/P10.jpg"/>
							</li>
							<li data-thumb="<?php echo base_url('');?>images/P2.jpg">
								<img src="<?php echo base_url('');?>images/P2.jpg" />
							</li>
							<li data-thumb="<?php echo base_url('');?>images/P13.jpg">
								<img src="<?php echo base_url('');?>images/P13.jpg" />
							</li>
							<li data-thumb="<?php echo base_url('');?>images/P6.jpg">
								<img src="<?php echo base_url('');?>images/P6.jpg" />
							</li>
						</ul>
					</div>
					<!-- FlexSlider -->
					  <script defer src="js/jquery.flexslider.js"></script>

						<script>
					// Can also be used with $(document).ready()
					$(window).load(function() {
					  $('.flexslider').flexslider({
						animation: "slide",
						controlNav: "thumbnails"
					  });
					});
					</script>
					<!-- //FlexSlider -->
					<div class="product-details">
						
						<h4><span class="w3layouts-agileinfo">Resumen</span> :<p>Excelente apartamento en una de las ciudades mas importantes del pais, con financiamiento disponoble, lus, agua internet 24/7.</p><div class="clearfix"></div></h4>
					
					</div>
				</div>
				<div class="col-md-5 product-details-grid">
					<div class="item-price">
						<div class="product-price">
							<p class="p-price">Precio</p>
							<h3 class="rate">$ 3,459,000</h3>
							<div class="clearfix"></div>
						</div>
						<div class="condition">
							<p class="p-price">Condicion</p>
							<h4>Excelente</h4>
							<div class="clearfix"></div>
						</div>
						
					</div>
					<div class="interested text-center">
						<h4>¿Interesado?<small> COntacta con el vendedor!</small></h4>
						<p><i class="glyphicon glyphicon-earphone"></i>829-567-1062</p>
					</div>
						
				</div>
			<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!--//single-page-->


	<table class="table">
		<thead>
			
			<tr>
				<th>titulo</th>
				<th>direccion</th>
				<th>tipo</th>
				<th>precio</th>
				<th>accion</th>
				<th>Descripcion</th>

			</tr>
		</thead>
        <tbody>
        	
         <?php 
             foreach ($Anuncio as $anuncio) {
             	
             	echo <<<filas

             	<tr>
                 <th>{$anuncio->titulo}</th>
                  <th>{$anuncio->direccion}</th>
                   <th>{$anuncio->tipo}</th>
                    <th>{$anuncio->precio}</th>
                     <th>{$anuncio->accion}</th>
                      <th>{$anuncio->descripcion}</th>

             	</tr>

filas;
             }


          ?>
        </tbody>

	</table>