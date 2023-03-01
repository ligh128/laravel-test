<?php

namespace App\Http\Controllers;
use App\Models\Publication;
use Illuminate\Http\Request;

class PublicationController extends Controller
{
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function index()
    {
        $publications = Publication::orderBy('id','desc')->paginate(5);
        return view('publications.index', compact('publications'));
    }

    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function create()
    {
        return view('publications.index');
    }

    /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
    public function store(Request $request)
    {
        
        
        Publication::create($request->post());

        return redirect()->route('publications.index')->with('success','Publication has been created successfully.');
    }

}
