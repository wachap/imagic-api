@extends('layout')

@section('content')
  <input type="file" data-type="image" id="file" />
  <input type="text" data-type="name" id="name" />
  <button type="button" data-action="upload" id="submit">Do it</button>
  <div id="result"></div>
  <div id="progress"></div>
@stop

@section('scripts')
  <script src="js/app.js"></script>
@stop
