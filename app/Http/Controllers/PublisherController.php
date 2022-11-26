<?php

namespace App\Http\Controllers;

use App\Models\Publisher;
use Illuminate\Http\Request;

class PublisherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $publishers = Publisher::paginate(4);

        return view('publisher', compact('publishers'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Publisher  $publisher
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $publisher = Publisher::find($id);
        $books = Publisher::find($id)->manyBook()->paginate(4);
        //dd($books);
        return view('publisherDetail', compact('publisher', 'books'));
    }
}
