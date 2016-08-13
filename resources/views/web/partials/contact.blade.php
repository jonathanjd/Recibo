<div id="contact" class="content-section-a">
		<div class="container">
			<div class="row">
			
			<div class="col-md-6 col-md-offset-3 text-center wrap_title">
				<h2>Contactanos</h2>
				<p class="lead" style="margin-top:0">Completa el siguiente formulario para comunicarte con nosotros, “No Olvides” rellenar todos los campos, es muy importante que revises bien los datos escritos para poder contactarte lo más pronto posible y ofrecerte la información que solicitas, al final del formulario haz clic en <strong>"ENVIAR MENSAJE"</strong>.</p>
			</div>
				
		
			{!! Form::open(['route' => 'admin.contact.store', 'method' => 'POST']) !!}
				<div class="col-md-6">

					<div class="form-group">
						<label for="InputName">Nombre</label>
						<div class="input-group">
							<input v-model = "InputName" type="text" class="form-control" name="name" id="InputName" placeholder="Enter Name" required>
							<span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span>
						</div>
					</div>
					
					<div class="form-group">
						<label for="InputEmail">Correo Electronico</label>
						<div class="input-group">
							<input v-model="InputEmail" type="email" class="form-control" id="InputEmail" name="email" placeholder="Enter Email" required  >
							<span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span>
						</div>
					</div>
					
					<div class="form-group">
						<label for="InputMessage">Mensaje</label>
						<div class="input-group">
							<textarea v-model="InputMessage" name="message" id="InputMessage" class="form-control" rows="5" required></textarea>
							<span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span>
						</div>
					</div>

					<input v-if="mostrar" type="submit" name="submit" id="submit" value="ENVIAR MENSAJE" class="btn wow tada btn-embossed btn-primary pull-right">
					<input v-else type="submit" name="submit" id="submit" value="ENVIAR MENSAJE" class="btn wow tada btn-embossed btn-primary pull-right" disabled="disabled">

				</div>
			{!! Form::close() !!}
			
			<hr class="featurette-divider hidden-lg">
				<div class="col-md-5 col-md-push-1 address">
					<address>
					<h3>Donde nos encontramos?</h3>
					<p class="lead"><a href="https://www.google.com/maps/place/Barcelona,+Anzo%C3%A1tegui,+Venezuela/@10.1364313,-64.6885074,19z/data=!4m5!3m4!1s0x8c2d723eff71306f:0x22feb43cef889e75!8m2!3d10.1445691!4d-64.67768">Anzoategui-Venezuela<br>
					Barcelona, Calle Eulalia Buroz, Nº 7-25, cerca del Liceo 'Felipe Guevara Rojas'.</a><br>
					Movil: 0416-480-6889<br>
					Local: 0281-332-8849</p>
					</address>

					<h3>Social</h3>
					<li class="social"> 
					<a href="#"><i class="fa fa-facebook-square fa-size"> </i></a>
					<a href="#"><i class="fa  fa-twitter-square fa-size"> </i> </a> 
					<a href="#"><i class="fa fa-google-plus-square fa-size"> </i></a>
					<a href="#"><i class="fa fa-flickr fa-size"> </i> </a>
					</li>
				</div>
			</div>
		</div>
	</div>

@section('js')
<!-- vue-js -->
<script src="{{ asset('js/vue-web.js') }}"></script>

@endsection