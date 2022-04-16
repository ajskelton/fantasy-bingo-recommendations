<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSquareRequest;
use App\Http\Requests\UpdateSquareRequest;
use App\Models\Square;

class SquareController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        return view('app', [
            'squares' => Square::get()
        ]);
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
     * @param  \App\Http\Requests\StoreSquareRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSquareRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param Square $square
     */
    public function show(Square $square)
    {
        return view('square.show', [
            'square' => $square
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Square $square
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(Square $square)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSquareRequest $request
     * @param Square                                  $square
     *
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSquareRequest $request, Square $square)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Square  $square
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Square $square)
    {
        //
    }
}
