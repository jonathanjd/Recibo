@extends('web.base')

@section('content')
<!--intro-header-->
	@include('admin.template.partials.mensaje')
	
	@include('web.partials.intro-header')
	
	
	<!-- NavBar-->
	@include('web.partials.nav-bar')

	
	<!-- What is -->
	@include('web.partials.whatis')


	<!-- Use it -->
	


	<!--content-section-b-->
	
  
    <!--content-section-a-->
	
	
	<!-- Screenshot -->
	@include('web.partials.screen')

	<!--content-section-c-->
	@include('web.partials.content-section-c')
	
	<!-- Credits -->
	
	<!-- Banner Download -->
	
	<!-- Contact -->
	@include('web.partials.contact')
	
	<!--Footer-->
	@include('web.partials.footer')


@endsection