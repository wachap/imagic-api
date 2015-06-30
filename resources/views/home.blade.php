@extends('layout')

@section('content')
  <input type="file" data-type="image" id="file" />
  <input type="text" data-type="name" id="name" />
  <button type="button" data-action="upload" id="submit">Do it</button>
  <div id="result"></div>
  <div id="progress"></div>
@stop

@section('scripts')
  <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
  <script src="js/custom-jquery.js"></script>
  <script src="js/index.js"></script>
@stop
