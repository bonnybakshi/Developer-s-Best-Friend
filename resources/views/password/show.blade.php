@extends('layouts.master')

@section('title', 'Generate password')
  

@section('content')
<div class="container">
  <h2>Password:</h2>
  <hr> 
	@if(isset($password)) 
    	<p><?php echo $password; ?></p> 
  	@else
    <p>password holder</p>
  	@endif	
</div>
@endsection