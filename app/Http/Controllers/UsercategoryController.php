<?php

namespace App\Http\Controllers;

use App\Models\Usercategory;
use App\Http\Requests\StoreUsercategoryRequest;
use App\Http\Requests\UpdateUsercategoryRequest;

class UsercategoryController extends Controller
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
     * @param  \App\Http\Requests\StoreUsercategoryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUsercategoryRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Usercategory  $usercategory
     * @return \Illuminate\Http\Response
     */
    public function show(Usercategory $usercategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Usercategory  $usercategory
     * @return \Illuminate\Http\Response
     */
    public function edit(Usercategory $usercategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUsercategoryRequest  $request
     * @param  \App\Models\Usercategory  $usercategory
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUsercategoryRequest $request, Usercategory $usercategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Usercategory  $usercategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(Usercategory $usercategory)
    {
        //
    }
}
