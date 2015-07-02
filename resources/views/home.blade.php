@extends('layout')

@section('content')

<section class="PhotosApp">

	<!-- barra lateral izquierda -->
	<section class="PhotosApp-nav">
		<div class="nav-logo">
			<img src="#" alt="#"/>
		</div>
		<div class="nav-options">
			<div class="options-top">
				<div class="option">
					<span class="icon-image">I</span>
					<span class="option-label">Fotos</span>
				</div>				
			</div>
			<div class="options-bottom">
				<div class="option">
					<span class="icon-trash">T</span>
					<span class="option-label">Papelera</span>
				</div>				
			</div>
		</div>
	</section>

	<!-- seccion principal -->
	<section class="PhotosApp-main">
		<div class="PhotoList">
			<div class="PhotoList-date">
				<span>Hoy</span>
			</div>
			<div class="PhotoList-photos">
				<div class="PhotoList-photo">
					<button class="PhotoList-buttonSelect">
						<span class="icon-check">C</span>						
					</button>					
					<a href="#" class="PhotoList-photoContainer">
						<img src="#" alt="#"/>						
					</a>
				</div>
			</div>
		</div>
	</section>

	<!-- barra superior -->
	<section class="PhotosApp-options">
		<div class="PhotoOptions">
			<div class="PhotoOptions-search">
				<input type="text" id="search" />
			</div>
			<div class="PhotoOptions-upload">
				<button class="btn-upload" data-toggle="modal" data-target="#imageUploadModal">
					<span class="icon-upload">U</span>
				</button>
			</div>			
		</div>
	</section>
</section>

<!--
  <input type="file" data-type="image" id="image" />
  <input type="text" data-type="name" id="name" />
  <button type="button" data-action="upload" id="submit">Do it</button>
  <div id="result"></div>
  <div id="progress"></div>
-->
@stop

@section('scripts')
  <script src="js/app.js"></script>
@stop
