@extends('layouts.master')

@section('title', 'Random User')

@section('content')

<div class="container">
    <h1>Random User List</h1>
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

@endsection