<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Sentence;

class SentencesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sentences = Sentence::all();

        return view('sentences.index',[
            'sentences' => $sentences,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sentence = new Sentence;

        return view('sentences.create',[
            'sentence' => $sentence,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'subject' => 'required|max:255',
            'particle' => 'required|max:10',
            'object' => 'required|max:255',
        ]);

        $sentence = new Sentence;
        $sentence->subject = $request->subject;
        $sentence->particle = $request->particle;
        $sentence->object = $request->object;
        $sentence->save();

        return redirect('sentences');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $sentence = Sentence::find($id);

        return view('sentences.show',[
            'sentence' => $sentence,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sentence = Sentence::find($id);

        return view('sentences.edit',[
            'sentence' => $sentence,
        ]);
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
        $this->validate($request,[
            'subject' => 'required|max:255',
            'particle' => 'required|max:10',
            'object' => 'required|max:255',
        ]);

        $sentence = Sentence::find($id);
        $sentence->subject = $request->subject;
        $sentence->particle = $request->particle;
        $sentence->object = $request->object;
        $sentence->save();

        return redirect('sentences');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sentence = Sentence::find($id);
        $sentence->delete();

        return redirect('sentences');
    }
}
