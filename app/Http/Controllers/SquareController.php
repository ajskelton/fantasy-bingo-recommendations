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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Models\Square  $square
     * @return \Illuminate\Http\Response
     */
    public function show(Square $square)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Square  $square
     * @return \Illuminate\Http\Response
     */
    public function edit(Square $square)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSquareRequest  $request
     * @param  \App\Models\Square  $square
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSquareRequest $request, Square $square)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Square  $square
     * @return \Illuminate\Http\Response
     */
    public function destroy(Square $square)
    {
        //
    }
}