@extends('layouts.master')

@section('title', 'Lorem Ipsum')
  

@section('content')
  <h3>Lorem Ipsum:</h3>
  <hr>
  @if(isset($text)) 
    <p><?php echo $text; ?></p> 
  @else
    <p>No content generated.</p>
  @endif
@endsection