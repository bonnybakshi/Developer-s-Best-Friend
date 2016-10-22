@extends('layouts.master')

@section('title', 'Random User')

@section('content')
<div class='container'>
	<h2> <img src="https://openclipart.org/download/190821/Cles-de-serrure-lock-keys.svg" width="50" alt="key clip art" />Password Generator</h2>
	<p>Generates a random phrase</p>

	@if(isset($password)) 
    	<h3>PASSWORD: <?php echo $password; ?></h3> 
  	@endif	
	<br>
	<form method="POST" action="/password" >
		
		{{ csrf_field() }}
		
		<div class="form-group">
		<label for="word_num"> * Number of Words (1-8):
		<input type="number" name="word_num" id="word_num" value="{{ old('word_num') }}">
		@if($errors->get('word_num'))
            <ul class="error">
                @foreach($errors->get('word_num') as $error)
                    <li>* {{ $error }}</li>
                @endforeach
            </ul>
      
        @endif 
		</label>
		</div>	
		
		<div class="form-group">
		<label class="form-check-label">
	  	<input class="form-check-input" type="checkbox"  name="number" id="number" 
		value="{{ old('number') }}"
	  	> Include a number
		</label>
		</div>

		<div class="form-group">
		<label class="form-check-label">
	  		<input class="form-check-input" type="checkbox" name="symbol" id="symbol" 
	  		value="{{ old('symbol') }}"
	  		> Include a symbol
		</label>
		</div>

		<div class="form-group"> 
	    <label class="radio-inline">
	      <input name="case" type="radio" value="upper" >
	      All upper case
	    </label>
	  
	    <label class="radio-inline">
	      <input name="case" type="radio" value="lower" checked >
	      All lower case
	    </label>
	  </div>

		<div class="form-group">
      <button type="submit" class="btn btn-primary">Generate</button>
    	</div>			
	</form>

	<p><a href='http://xkcd.com/936/'>Inspired by xkcd password strength</a></p>
	<a href='http://xkcd.com/936/'>
	<img class='xkcd center' src='http://imgs.xkcd.com/comics/password_strength.png' alt='xkcd password strength'>
	</a>
</div>
@endsection