<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user.index');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getUser(Request $request)
    {
         
        $this->validate($request,[
            'count'  => 'required|numeric|between:1,100',
        ]);
        $data = $request->all();
        dump($data);
        foreach ($data as $name => $value){
            if($name == "count"){
                dump($value);
            }
            if($name == "language"){
                dump($value);
            }
            
        }
        
        $count = $request->input('count');
        #require the Faker autoloader
        require_once '../vendor/fzaninotto/faker/src/autoload.php';
        #create a Faker\Generator instance
        $faker;
        if ($request ->input('language') == 'spanish') {
            $faker = \Faker\Factory::create('es_ES');
        }elseif ($request ->input('language') == 'french') {
            $faker = \Faker\Factory::create('fr_FR');
        }elseif ($request ->input('language') == 'japanese') {
            $faker = \Faker\Factory::create('ja_JP');
        }else{
            $faker = \Faker\Factory::create('en_US');
        }
        
        $users = [];
        for($i = 0; $i < $count; $i++){
            $users[$i] = New \stdClass;
            $users[$i]->name = $faker->name;
            if($request->input('phone') == '1'){
                $users[$i]->phone = $faker->phoneNumber;
            }
            if($request->input('email') == '1'){
                $users[$i]->email = $faker->email;
            }
            if($request->input('address') == '1'){
                $users[$i]->address = $faker->address;
            }
            
        }
       return view('user.show',['users'=>$users]);
            
    }
    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return redirect('user.show');
    }
}




