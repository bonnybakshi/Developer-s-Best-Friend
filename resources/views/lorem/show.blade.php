@extends('layouts.master')

@section('title', 'Lorem Ipsum')
  

@section('content')
<div class="container">
  <h2>Lorem Ipsum Text:</h2>
  <hr>
  @if(isset($text)) 
    <p><?php echo $text; ?></p> 
  @else
    <p>No content generated.</p>
  @endif
</div>
@endsection