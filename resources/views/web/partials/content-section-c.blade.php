<div  class="content-section-c ">
		<div class="container">
			<div class="row">
			<div class="col-md-6 col-md-offset-3 text-center white">
				<h2>Ultimas Noticias?</h2>
				<p class="lead" style="margin-top:0">Si quieres recibir <strong>Boletin Informativo</strong> sobre maquinas de coser, ventas de maquinas, recomendaciones y mas entonces suscríbete ahora mismo.</p>
			 </div>
			<div class="col-md-6 col-md-offset-3 text-center">
				<div class="mockup-content">
						<div class="morph-button wow pulse morph-button-inflow morph-button-inflow-1">
							<button type="button "><span>Suscríbete para recibir noticias</span></button>
							<div class="morph-content">
								<div>
									<div class="content-style-form content-style-form-4">
										<h2 class="morph-clone">Suscríbete Aqui</h2>

										{!! Form::open(['route' => 'admin.subscriber.store', 'method' => 'post']) !!}

										{!! Form::label('Correo Electronico', 'email') !!}
										
									
										{!! Form::text('email',null,['placeholder' => 'example@gmail.com','required']); !!}
										

										<button type="submit" class="btn btn-primary">Aceptar</button>

										{!! Form::close() !!}
									</div>
								</div>
							</div>
						</div>
				</div>
			</div>	
			</div>>
		</div>
	</div>