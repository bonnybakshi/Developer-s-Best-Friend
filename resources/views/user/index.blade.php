@extends('layouts.master')

@section('title', 'Random User')

@section('content')
<div class="container">
  <h2>Genetate Random User</h2>
 
  <form method="POST" action="/user/show" role="form">

    {{ csrf_field() }}
    
    <div class="form-group">
    <label>* Number of users (1-100):
    <input  type="text" id="count" name="count" value="{{ old('count') }}">
        @if($errors->get('count'))
            <ul class="error">
                @foreach($errors->get('count') as $error)
                    <li>* {{ $error }}</li>
                @endforeach
            </ul>
          
        @endif
    </label>
    </div>
    <h3>Show items</h3>
    <div>
      <label><input type="checkbox" id="phone" name="phone" value="1"
      @if (old('phone') != null)
          checked
      @endif
      >
      Show Phone number</label>
    </div>
    <div class="optional-item">
      <label><input type="checkbox" id="email" name="email" value="1"
      @if (old('email') != null)
          checked
      @endif
      >
      Show Email Address</label>
    </div>
    <div class="optional-item">
      <label><input type="checkbox" id="address" name="address" value="1"
      @if (old('address') != null)
          checked
      @endif
      >
      Show Address</label>
    </div>

    <h3>Select Language</h3>
    <div class="form-group">
        <input type="radio" name="language" value="english" checked> English(USA)<br>
        <input type="radio" name="language" value="french"> French <br>
        <input type="radio" name="language" value="japanese" > Japanese <br>
        <input type="radio" name="language" value="spanish" > Spanish <br>
    </div>
    <br>
    <div class="form-group">
      <button type="submit" class="btn btn-primary">Generate</button>
    </div>
  </form>
</div>
@endsection