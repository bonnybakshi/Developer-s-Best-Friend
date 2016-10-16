<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class LoremController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('lorem.index');
    }

    /**
    * 
    */
    public function getLorem(Request $request)
    {
        # Validate request
        $this->validate($request,[
            'count' => 'required|numeric|between:1,500',
            'textType' => 'required'
        ]);
        
        # Generate the lorem ipsum text
        $count = $request->input('count');
        
        # Logic
        $lipsum = new \joshtronic\LoremIpsum();

        if ($request ->input('textType') == 'paragraphs') {
            $textArray = $lipsum->paragraphsArray($count);
            return view('lorem.show')
                ->with('text', implode('<br /> <br />', $textArray));
        }elseif ($request ->input('textType') == 'sentences') {
            $text = $lipsum->sentences($count);
            return view('lorem.show')->with('text', $text);
        }else{
            $words = $lipsum->words($count);
            return view('lorem.show')->with('text', $words);
        }  
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showLorem()
    {
        return view('lorem.show');
    }






    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
