@extends('layouts.master')

@section('title', 'Lorem Ipsum')

@section('content')
<div class="container">
<div class="row">
<div class="col-md-12">
      <h3>Lorem Ipsum Generator</h3>
      <p>Lorem Ipsum generator is a simple tool that generates dummy text as per your project requirement.  It helps designers replace meaningful content with placeholder text for visual presentation.
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
          <input type="radio" name="textType" value="paragraphs" checked> Generate Paragraphs<br>
        <input type="radio" name="textType" value="sentences"> Generate Sentences<br>
        <input type="radio" name="textType" value="words" > Generate Words
      </div>

      <div class="form-group">
        <button type="submit" class="btn btn-primary">Generate</button>
      </div>
    </form>
</div>
</div>
</div>
@endsection