@extends('layouts.master')

@section('title', 'Random User')

@section('content')

<div class="container">
    <h1>Random User List</h1>
    <hr>
    @for($i = 0; $i < count($users); $i++)
        <div class="userbox">
        <p><strong>Name: {{$users[$i]->name}}</strong></p>
        
        @if(isset($users[$i]->phone))
            <p>Phone Number: {{$users[$i]->phone}}</p>
        @endif

        @if(isset($users[$i]->email))
            <p>Email Address: {{$users[$i]->email}}</p>
        @endif

        @if(isset($users[$i]->address))
            <p>Address: {{$users[$i]->address}}</p>
        @endif
        </div> 
        <br>
        <br>
    @endfor
    
</div>

@endsection