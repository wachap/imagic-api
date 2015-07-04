@extends('layout')

@section('content')

<header class="header-section">

	<!-- barra superior -->
	<div class="App-header">
		<section class="AppHeader">
			<div class="AppHeader-logo">
				<img src="#" alt="#"/>
			</div>
			<div class="AppHeader-actions">
				<div class="AppHeader-actionSearch">
					<input type="text" id="search" />
				</div>
				<div class="AppHeader-actionUpload">
					<button class="btn-upload" data-toggle="modal" data-target="#imageUploadModal">
						<span class="icon-upload">U</span>
					</button>
				</div>			
			</div>
		</section>		
	</div>
</header>

<section class="main-section">

	<!-- barra lateral izquierda -->
	<div class="App-options">		
		<section class="OptionList">
			<div class="OptionList-top">
				<a href="#" class="OptionList-option">
					<div class="OptionList-optionIcon">
						<span class="icon-image">I</span>							
					</div>
					<div class="OptionList-optionLabel">
						<span>Fotos</span>							
					</div>
				</a>	
			</div>
			<div class="OptionList-bottom">
				<a href="#" class="OptionList-option">
					<div class="OptionList-optionIcon">
						<span class="icon-trash">T</span>
					</div>
					<div class="OptionList-optionLabel">
						<span>Papelera</span>							
					</div>						
				</a>				
			</div>			
		</section>		
	</div>
	

	<!-- seccion principal -->
	<div class="App-main">
		<section class="PhotoList-container">
			<div class="PhotoList">
				<div class="PhotoList-date">
					<span>Hoy</span>
				</div>
				<div class="PhotoList-photos">
					<div class="PhotoList-photo">
						<button class="PhotoList-select">
							<span class="icon-check">C</span>						
						</button>					
						<a href="#" class="PhotoList-image">
							<img src="#" alt="#"/>						
						</a>
					</div>
				</div>
			</div>
		</section>		
	</div>
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
