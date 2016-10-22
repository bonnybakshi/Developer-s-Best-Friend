@extends('layouts.master')

@section('title', 'Random User')

@section('content')
<div class="container">
  <h2>Genetate Random User</h2>
  <p>Generates a random list of users.
    </p>
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
      Phone number</label>
    </div>
    <div>
      <label><input type="checkbox" id="email" name="email" value="1"
      @if (old('email') != null)
          checked
      @endif
      >
      Email</label>
    </div>
    <div>
      <label><input type="checkbox" id="address" name="address" value="1"
      @if (old('address') != null)
          checked
      @endif
      >
      Address</label>
    </div>
    <div>
      <label><input type="checkbox" id="jobTitle" name="jobTitle" value="1"
      @if (old('jobTitle') != null)
          checked
      @endif
      >
      Job Title</label>
    </div>
    <div>
      <label><input type="checkbox" id="company" name="company" value="1"
      @if (old('company') != null)
          checked
      @endif
      >
      Company</label>
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