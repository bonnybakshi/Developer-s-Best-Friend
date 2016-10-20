<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PasswordController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('password.index');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function getPassword(Request $request)
    {
        $this->validate($request,[
            'word_num'  => 'required|numeric|between:1,8',
        ]);
        $number = $request->input('number');

        /* get the list of words into an array */
        $wordList =  file ( "../public/file/wordlist.txt" );

        $password = ""; /*variable to hold password*/

        # array to store user input 
        $config['word_num']= 2; /* minimum 2 words */
        $config['number']= false;
        $config['symbol']= false;
        $config['case']= false;

        
        $data = $request->all();
        foreach ($data as $name => $value){
            if ($name == 'word_num'){
                $config[$name]= $value;
            }
            if ($name == 'number'){
                $config[$name]= $value;
            }
            if ($name == 'symbol'){
                $config[$name]= $value;
            }
            if ($name == 'case'){
                $config[$name]= $value;
            }
        }

        /* generate password*/
        for ($i = 1; $i <= (int)($config['word_num']); $i++) { 
            $index = rand(0, count($wordList) - 1);
            $word = $wordList[$index];
            # use hyphen after second word 
            if ($i >= 2) {
                # if the user selects 'All upper case", convert the password into uppercase 
                if($config['case'] == 'upper'){
                    $password .= "-" . strtoupper(trim($word));
                }else{ # else keep it lower case 
                    $password .= "-" . trim($word);
                }
            }else{
                # if the user selects 'All upper case", convert the password into uppercase
                if($config['case'] == 'upper'){
                    $password .= strtoupper(trim($word));
                }else{ # else keep it lower case 
                    $password .= trim($word);;
                }
                
            }
        }
        /* append a random symbol from the given symbol array if 'add a symbol' option is checked*/
        $symbol = array("!","@","#","$","%","&");
        if($config['symbol']){
            $index = rand(0, count($symbol) - 1);
            $password .= $symbol[$index];
        }

        /* append a random number between 0 and 9 if 'add a number' option is checked*/ 
        if($config['number']){
            $number = rand(0, 9);
            $password .= $number;
        }
        
        return view('password.index') -> with('password', $password);
                        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return redirect('password.show');
    }
}    