@extends('layouts.master')

@section('title', 'Lorem Ipsum')

@section('content')
<h2>Lorem Ipsum Generator</h2>
<h3>What is Lorem Ipsum?</h3>
<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
<br>
<a href="http://www.lipsum.com/">More facts about Lorem Ipsum </a>
</p>

<h4>Generate Lorem Ipsum</h4>

<form method="POST" action="/lorem/show">

    {{ csrf_field() }}
	<div class="form-group">
      	<label>* Count (1-500):</label>
      	<input type="text" id="count" name="count" value="{{ old('p-count') }}">
      	@if($errors->get('count'))
      		
            <ul class="error">
                @foreach($errors->get('count') as $error)
                    <li>* {{ $error }}</li>
                @endforeach
            </ul>
      
        @endif 
    </div>
	
    <div class="form-group">
      	<label>Select one</label><br>
      	<input type="radio" name="textType" value="paragraphs" checked> Paragraphs<br>
  		<input type="radio" name="textType" value="sentences"> Sentences<br>
  		<input type="radio" name="textType" value="words" > Words
    </div>

    <div class="form-group">
      <button type="submit" class="btn btn-primary">Generate</button>
    </div>
	
  </form>

@endsection