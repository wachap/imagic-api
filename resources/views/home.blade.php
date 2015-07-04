@extends('layout')

@section('content')

<header class="header-section">

	<!-- barra superior -->
	<div class="App-header">
		<section class="AppHeader">
			<div class="AppHeader-logo">
				<img src="https://ssl.gstatic.com/social/photosui/images/logo_photos_color_96px.svg" alt="#"/>
				<h1>iMagic</h1>
			</div>
			<div class="AppHeader-actions">
				<div class="AppHeader-actionSearch">
					<span class="icon-search"></span>
					<input type="text" id="search" placeholder="Buscar"/>
				</div>
				<div class="AppHeader-actionUpload">
					<button class="btn-upload" data-toggle="modal" data-target="#imageUploadModal">
						<span class="icon-backup"></span>
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
						<span class="icon-insert_photo"></span>
					</div>
					<div class="OptionList-optionLabel">
						<span>Fotos</span>
					</div>
				</a>
			</div>
			<div class="OptionList-bottom">
				<a href="#" class="OptionList-option">
					<div class="OptionList-optionIcon">
						<span class="icon-delete"></span>
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
							<span class="icon-check_circle"></span>
						</button>
						<a href="#" class="PhotoList-image">
							<img src="/images/js-logo.png" alt="#"/>
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
