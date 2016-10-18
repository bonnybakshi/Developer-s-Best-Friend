@extends('layouts.master')

@section('title', 'Random User')

@section('content')

<div class="container">
    <h1>Random User List</h1>
    
    <?php  
    #require the Faker autoloader
    require_once '../vendor/fzaninotto/faker/src/autoload.php';
    #create a Faker\Generator instance
    $faker = \Faker\Factory::create();
    ?>

    <table>
        <tr>
            <th>Name</th>
            <th>Phone Number</th>
            <th>E-mail Address</th>
            <th>Address</th>
        </tr>
        @for($i=0; $i < $count; $i++) 
            <tr>
                <td>{{ $faker->name}}</td>
                <td>{{ $faker->phoneNumber}}</td>
                <td>{{ $faker->email }}</td>
                <td>{{ $faker->address }}</td>
            </tr>
        @endfor
    </table> 
</div>

@endsection