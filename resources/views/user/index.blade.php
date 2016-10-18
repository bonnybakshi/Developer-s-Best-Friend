@extends('layouts.master')

@section('title', 'Random User')

@section('content')
  <h2>Genetate Random User</h2>
 
  <form method="POST" action="/user/show">

    {{ csrf_field() }}
    
    <div class="form-group">
      <label>* Number of users (1-100):</label>
      <input class="form-control" type="text" id="count" name="count" value="{{ old('count') }}">
    </div>
    <div class="form-group">
      <button type="submit" class="btn btn-primary">Generate</button>
    </div>
  </form>
@endsection