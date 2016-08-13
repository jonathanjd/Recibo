<div id="screen" class="content-section-b">
        <div class="container">
          <div class="row" >
			 <div class="col-md-6 col-md-offset-3 text-center wrap_title ">
				<h2>A la Venta</h2>
				<p class="lead" style="margin-top:0">Maquinas de coser usada, totalmente operativa y listo para trabajar.</p>
			 </div>
		  </div>
		    <div class="row wow bounceInUp" >
              <div id="owl-demo" class="owl-carousel">

              	@foreach($imagenes as $imagen)
              		<a href="{{ asset($imagen->name) }}" class="image-link">
						<div class="item">
							<img  class="img-responsive img-rounded" src="{{ asset($imagen->name) }}" alt="Owl Image">
						</div>
					</a>
              	@endforeach
				
              </div>       
          </div>
        </div>


	</div>
	