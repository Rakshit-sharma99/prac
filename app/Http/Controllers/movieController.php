<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class movieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $mov=[
            'Interstellar',
            'Avenger',
            'Bean'
        ];
        return view('mov.index',[
            'mov'=>$mov
        ]);




    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('mov.create');
        }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        return "Movie Stored: ".$req.mov ;
       }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
