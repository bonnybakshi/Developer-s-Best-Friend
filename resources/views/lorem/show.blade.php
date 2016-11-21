@extends('layouts.master')

@section('title', 'Lorem Ipsum')
  

@section('content')
<div class="container">
<div class="row">
<div class="col-md-12">
	<a href="/lorem"><i class="fa fa-arrow-left"></i> Go back</a> <br>
	<h3>Lorem Ipsum Text:</h3>
	<hr>
	@if(isset($text)) 
	    <p><?php echo $text; ?></p> 
	@else
	    <p>No content generated.</p>
	@endif
</div>
</div>
</div>
@endsection