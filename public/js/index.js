$(function () {

// Globals
var PATH = "api/v1/photos";

// AJAX Functions
function postPhoto (data, callback) {
	$.ajax({
		url: PATH,
		type: 'POST',
		data: data,
		contentType: false,
		processData: false,
		error: onError,
		success: onSuccess,
		progress: onProgress
	})
	.done( callback );
}

// VARIABLES
var $imageInput = $('#file');
var $nameInput  = $('#name');
var $button     = $('#submit');
var $resultOut  = $('#result');
var $progress   = $('#progress');

// EVENTS LISTENERS
$imageInput.on('change', onChangeImage);
$nameInput.on('keyup', onKeyUp);
$button.on('click', onSubmit);

// EVENTS FUNCTIONS
function onKeyUp (evt) {
	if (evt.keyCode == 13) {
		onSubmit();
	};
};

function onSubmit () {
	var formData = getFormData();
	postPhoto(formData, fillPhoto);
	$resultOut.html( '<p class="loading">cargando...</p>' );
};

function onChangeImage ()
{
	var reader = new FileReader();
	reader.readAsDataURL($imageInput[0].files[0]);
	reader.onload = function (e)
	{
    photo       = {};
    photo.url   = e.target.result;
    photo.title = $imageInput.val().split(/(\\|\/)/g).pop();

    fillPhotoPreview(photo);
	}
};

function onProgress (e)
{
	if (e.lengthComputable) {
	    console.log('Loaded '+ (e.loaded / e.total * 100) + '%');
	} else {
	    console.log('Length not computable.');
	}
};

function onError ()
{
	$resultOut.html( '<p class="error">Error... :(</p>' );
};

function onSuccess ()
{
	$resultOut.html( '<p class="success">Success... :)</p>' );
};


// Fill Functions
function fillPhoto (jsonData)
{
	var html = photoTemplate(jsonData);
	$resultOut.html(html);
};

function fillPhotoPreview (photo)
{
  var html = photoPreviewTemplate(photo);
  $resultOut.html(html);
}

// Templates
function photoTemplate (photo)
{
	var html = '';
	html +=  '<img src=' + photo.url + ' />';
	return html;
}

function photoPreviewTemplate (photo)
{
	var html = '';
	html +=  '<img src='+ photo.url +' title='+ photo.title +' />';
	return html;
}


// Getters inputs
function getFormData ()
{
	var formData = new FormData();
	formData.append('file', $imageInput[0].files[0] );
	formData.append('name', $nameInput.val() );
	return formData;
}



});
