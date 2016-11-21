@extends('layouts.master')

@section('title', 'Random User')

@section('content')

<div class="container">
<div class="row">
<div class="col-md-12">
    <a href="/user"><i class="fa fa-arrow-left"></i> Go back</a> <br>
    <h3>Random User List</h3>
    <hr>
    @for($i = 0; $i < count($users); $i++)
        <div class="usercard">
        <div class="top">
        <p class=" userName"><strong>{{$users[$i]->name}}</strong></p>
        @if(isset($users[$i]->jobTitle))
           <p class=" jobtitle">{{$users[$i]->jobTitle}}</p>
        @endif
        @if(isset($users[$i]->company))
           <p class="company">{{$users[$i]->company}}</p>
        @endif
        </div>
        <div class="userinfo">
        @if(isset($users[$i]->phone))
            <p>Phone: {{$users[$i]->phone}}</p>
        @endif

        @if(isset($users[$i]->email))
            <p>Email: {{$users[$i]->email}}</p>
        @endif
        @if(isset($users[$i]->address))
            <p class="useradd">Address: {{$users[$i]->address}}</p>
        @endif
        
        </div>
        </div> 
        <br>
        <br>
    @endfor
    
</div>
</div>
</div>

@endsection