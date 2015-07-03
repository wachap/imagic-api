@extends('layout')

@section('content')

<section class="PhotosApp">

	<!-- barra lateral izquierda -->
	<section class="PhotosApp-nav">
		<div class="OptionList">
			<div class="OptionList-logo">
				<img src="#" alt="#"/>
			</div>
			<div class="OptionList-options">
				<div class="OptionList-optionsTop">
					<a href="#" class="OptionList-option">
						<div class="OptionList-optionIcon">
							<span class="icon-image">I</span>							
						</div>
						<div class="OptionList-optionLabel">
							<span>Fotos</span>							
						</div>
					</a>	
				</div>
				<div class="OptionList-optionsBottom">
					<a href="#" class="OptionList-option">
						<div class="OptionList-optionIcon">
							<span class="icon-trash">T</span>
						</div>
						<div class="OptionList-optionLabel">
							<span>Papelera</span>							
						</div>						
					</a>				
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
