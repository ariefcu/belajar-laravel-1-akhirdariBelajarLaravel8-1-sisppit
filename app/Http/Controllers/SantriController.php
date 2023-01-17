<?php

namespace App\Http\Controllers;

use App\Models\Santri;
use App\Http\Requests\StoreSantriRequest;
use App\Http\Requests\UpdateSantriRequest;

class SantriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        

        $title = '';
        if(request('santri')) {
            $santri = Santri::firstWhere('slug', request('santri'));
            $title = ' in ' . $santri->name;
        }

        if(request('author')) {
            $santri = Santri::firstWhere('username', request('santri'));
            $title = ' by ' . $santri->name;
        }

        return view('dashboard.santris.index', [
            'santris' => Santri::all(),
            'title' => 'Semua Santri',
            // 'posts' => Post::where('user_id', auth()->user()->id)->get()
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
     * @param  \App\Http\Requests\StoreSantriRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSantriRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Santri  $santri
     * @return \Illuminate\Http\Response
     */
    public function show(Santri $santri)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Santri  $santri
     * @return \Illuminate\Http\Response
     */
    public function edit(Santri $santri)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSantriRequest  $request
     * @param  \App\Models\Santri  $santri
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSantriRequest $request, Santri $santri)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Santri  $santri
     * @return \Illuminate\Http\Response
     */
    public function destroy(Santri $santri)
    {
        //
    }
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function rekapsantri()
    {
        $jumlahsantri7a = Santri::where('kelas', '7')
                                ->where('kelas_paralel', 'A')
                                ->count();
        $jumlahsantri7b = Santri::where('kelas', '7')
                                ->where('kelas_paralel', 'B')
                                ->count();
        $jumlahsantri7c = Santri::where('kelas', '7')
                                ->where('kelas_paralel', 'C')
                                ->count();
        $jumlahsantri7d = Santri::where('kelas', '7')
                                ->where('kelas_paralel', 'D')
                                ->count();
        $jumlahsantri7e = Santri::where('kelas', '7')
                                ->where('kelas_paralel', 'E')
                                ->count();
        $jumlahsantri7f = Santri::where('kelas', '7')
                                ->where('kelas_paralel', 'F')
                                ->count();
        $jumlahsantri8a = Santri::where('kelas', '8')
                                ->where('kelas_paralel', 'A')
                                ->count();
        $jumlahsantri8b = Santri::where('kelas', '8')
                                ->where('kelas_paralel', 'B')
                                ->count();
        $jumlahsantri8c = Santri::where('kelas', '8')
                                ->where('kelas_paralel', 'C')
                                ->count();
        $jumlahsantri8d = Santri::where('kelas', '8')
                                ->where('kelas_paralel', 'D')
                                ->count();
        $jumlahsantri8e = Santri::where('kelas', '8')
                                ->where('kelas_paralel', 'E')
                                ->count();
        $jumlahsantri8f = Santri::where('kelas', '8')
                                ->where('kelas_paralel', 'F')
                                ->count();
        $jumlahsantri9a = Santri::where('kelas', '9')
                                ->where('kelas_paralel', 'A')
                                ->count();
        $jumlahsantri9b = Santri::where('kelas', '9')
                                ->where('kelas_paralel', 'B')
                                ->count();
        $jumlahsantri9c = Santri::where('kelas', '9')
                                ->where('kelas_paralel', 'C')
                                ->count();
        $jumlahsantri9d = Santri::where('kelas', '9')
                                ->where('kelas_paralel', 'D')
                                ->count();
        $jumlahsantri9e = Santri::where('kelas', '9')
                                ->where('kelas_paralel', 'E')
                                ->count();
        $jumlahsantri9f = Santri::where('kelas', '9')
                                ->where('kelas_paralel', 'F')
                                ->count();
        $jumlahsantri10a = Santri::where('kelas', '10')
                                ->where('kelas_paralel', 'A')
                                ->count();
        $jumlahsantri10b = Santri::where('kelas', '10')
                                ->where('kelas_paralel', 'B')
                                ->count();
        $jumlahsantri10c = Santri::where('kelas', '10')
                                ->where('kelas_paralel', 'C')
                                ->count();
        $jumlahsantri10d = Santri::where('kelas', '10')
                                ->where('kelas_paralel', 'D')
                                ->count();
        $jumlahsantri10e = Santri::where('kelas', '10')
                                ->where('kelas_paralel', 'E')
                                ->count();
        $jumlahsantri10f = Santri::where('kelas', '10')
                                ->where('kelas_paralel', 'F')
                                ->count();
        $jumlahsantri11a = Santri::where('kelas', '11')
                                ->where('kelas_paralel', 'A')
                                ->count();
        $jumlahsantri11b = Santri::where('kelas', '11')
                                ->where('kelas_paralel', 'B')
                                ->count();
        $jumlahsantri11c = Santri::where('kelas', '11')
                                ->where('kelas_paralel', 'C')
                                ->count();
        $jumlahsantri11d = Santri::where('kelas', '11')
                                ->where('kelas_paralel', 'D')
                                ->count();
        $jumlahsantri11e = Santri::where('kelas', '11')
                                ->where('kelas_paralel', 'E')
                                ->count();
        $jumlahsantri11f = Santri::where('kelas', '11')
                                ->where('kelas_paralel', 'F')
                                ->count();
        $jumlahsantri12a = Santri::where('kelas', '12')
                                ->where('kelas_paralel', 'A')
                                ->count();
        $jumlahsantri12b = Santri::where('kelas', '12')
                                ->where('kelas_paralel', 'B')
                                ->count();
        $jumlahsantri12c = Santri::where('kelas', '12')
                                ->where('kelas_paralel', 'C')
                                ->count();
        $jumlahsantri12d = Santri::where('kelas', '12')
                                ->where('kelas_paralel', 'D')
                                ->count();
        $jumlahsantri12e = Santri::where('kelas', '12')
                                ->where('kelas_paralel', 'E')
                                ->count();
        $jumlahsantri12f = Santri::where('kelas', '12')
                                ->where('kelas_paralel', 'F')
                                ->count();

        $jumlahyatim7a = Santri::where('kelas', '7')
                                ->where('kelas_paralel', 'A')
                                ->where('yatim', 'Y')
                                ->count();        
        $jumlahyatim7b = Santri::where('kelas', '7')
                                ->where('kelas_paralel', 'B')
                                ->where('yatim', 'Y')
                                ->count();        
        $jumlahyatim7c = Santri::where('kelas', '7')
                                ->where('kelas_paralel', 'C')
                                ->where('yatim', 'Y')
                                ->count();        
        $jumlahyatim7d = Santri::where('kelas', '7')
                                ->where('kelas_paralel', 'D')
                                ->where('yatim', 'Y')
                                ->count();        
        $jumlahyatim7e = Santri::where('kelas', '7')
                                ->where('kelas_paralel', 'E')
                                ->where('yatim', 'Y')
                                ->count();        
        $jumlahyatim7f = Santri::where('kelas', '7')
                                ->where('kelas_paralel', 'F')
                                ->where('yatim', 'Y')
                                ->count();        
        $jumlahyatim8a = Santri::where('kelas', '8')
                                ->where('kelas_paralel', 'A')
                                ->where('yatim', 'Y')
                                ->count();        
        $jumlahyatim8b = Santri::where('kelas', '8')
                                ->where('kelas_paralel', 'B')
                                ->where('yatim', 'Y')
                                ->count();        
        $jumlahyatim8c = Santri::where('kelas', '8')
                                ->where('kelas_paralel', 'C')
                                ->where('yatim', 'Y')
                                ->count();        
        $jumlahyatim8d = Santri::where('kelas', '8')
                                ->where('kelas_paralel', 'D')
                                ->where('yatim', 'Y')
                                ->count();        
        $jumlahyatim8e = Santri::where('kelas', '8')
                                ->where('kelas_paralel', 'E')
                                ->where('yatim', 'Y')
                                ->count();        
        $jumlahyatim8f = Santri::where('kelas', '8')
                                ->where('kelas_paralel', 'F')
                                ->where('yatim', 'Y')
                                ->count();        
        $jumlahyatim9a = Santri::where('kelas', '9')
                                ->where('kelas_paralel', 'A')
                                ->where('yatim', 'Y')
                                ->count();        
        $jumlahyatim9b = Santri::where('kelas', '9')
                                ->where('kelas_paralel', 'B')
                                ->where('yatim', 'Y')
                                ->count();        
        $jumlahyatim9c = Santri::where('kelas', '9')
                                ->where('kelas_paralel', 'C')
                                ->where('yatim', 'Y')
                                ->count();        
        $jumlahyatim9d = Santri::where('kelas', '9')
                                ->where('kelas_paralel', 'D')
                                ->where('yatim', 'Y')
                                ->count();        
        $jumlahyatim9e = Santri::where('kelas', '9')
                                ->where('kelas_paralel', 'E')
                                ->where('yatim', 'Y')
                                ->count();        
        $jumlahyatim9f = Santri::where('kelas', '9')
                                ->where('kelas_paralel', 'F')
                                ->where('yatim', 'Y')
                                ->count();        
        $jumlahyatim10a = Santri::where('kelas', '10')
                                ->where('kelas_paralel', 'A')
                                ->where('yatim', 'Y')
                                ->count();        
        $jumlahyatim10b = Santri::where('kelas', '10')
                                ->where('kelas_paralel', 'B')
                                ->where('yatim', 'Y')
                                ->count();        
        $jumlahyatim10c = Santri::where('kelas', '10')
                                ->where('kelas_paralel', 'C')
                                ->where('yatim', 'Y')
                                ->count();        
        $jumlahyatim10d = Santri::where('kelas', '10')
                                ->where('kelas_paralel', 'D')
                                ->where('yatim', 'Y')
                                ->count();        
        $jumlahyatim10e = Santri::where('kelas', '10')
                                ->where('kelas_paralel', 'E')
                                ->where('yatim', 'Y')
                                ->count();        
        $jumlahyatim10f = Santri::where('kelas', '10')
                                ->where('kelas_paralel', 'F')
                                ->where('yatim', 'Y')
                                ->count();        
        $jumlahyatim11a = Santri::where('kelas', '11')
                                ->where('kelas_paralel', 'A')
                                ->where('yatim', 'Y')
                                ->count();        
        $jumlahyatim11b = Santri::where('kelas', '11')
                                ->where('kelas_paralel', 'B')
                                ->where('yatim', 'Y')
                                ->count();        
        $jumlahyatim11c = Santri::where('kelas', '11')
                                ->where('kelas_paralel', 'C')
                                ->where('yatim', 'Y')
                                ->count();        
        $jumlahyatim11d = Santri::where('kelas', '11')
                                ->where('kelas_paralel', 'D')
                                ->where('yatim', 'Y')
                                ->count();        
        $jumlahyatim11e = Santri::where('kelas', '11')
                                ->where('kelas_paralel', 'E')
                                ->where('yatim', 'Y')
                                ->count();        
        $jumlahyatim11f = Santri::where('kelas', '11')
                                ->where('kelas_paralel', 'F')
                                ->where('yatim', 'Y')
                                ->count();        
        $jumlahyatim12a = Santri::where('kelas', '12')
                                ->where('kelas_paralel', 'A')
                                ->where('yatim', 'Y')
                                ->count();        
        $jumlahyatim12b = Santri::where('kelas', '12')
                                ->where('kelas_paralel', 'B')
                                ->where('yatim', 'Y')
                                ->count();        
        $jumlahyatim12c = Santri::where('kelas', '12')
                                ->where('kelas_paralel', 'C')
                                ->where('yatim', 'Y')
                                ->count();        
        $jumlahyatim12d = Santri::where('kelas', '12')
                                ->where('kelas_paralel', 'D')
                                ->where('yatim', 'Y')
                                ->count();        
        $jumlahyatim12e = Santri::where('kelas', '12')
                                ->where('kelas_paralel', 'E')
                                ->where('yatim', 'Y')
                                ->count();        
        $jumlahyatim12f = Santri::where('kelas', '12')
                                ->where('kelas_paralel', 'F')
                                ->where('yatim', 'Y')
                                ->count();        

        $jumlahnonyatim7a = Santri::where('kelas', '7')
                                ->where('kelas_paralel', 'A')
                                ->where('yatim', '!=', 'Y')
                                ->count();        
        $jumlahnonyatim7b = Santri::where('kelas', '7')
                                ->where('kelas_paralel', 'B')
                                ->where('yatim', '!=', 'Y')
                                ->count();        
        $jumlahnonyatim7c = Santri::where('kelas', '7')
                                ->where('kelas_paralel', 'C')
                                ->where('yatim', '!=', 'Y')
                                ->count();        
        $jumlahnonyatim7d = Santri::where('kelas', '7')
                                ->where('kelas_paralel', 'D')
                                ->where('yatim', '!=', 'Y')
                                ->count();        
        $jumlahnonyatim7e = Santri::where('kelas', '7')
                                ->where('kelas_paralel', 'E')
                                ->where('yatim', '!=', 'Y')
                                ->count();        
        $jumlahnonyatim7f = Santri::where('kelas', '7')
                                ->where('kelas_paralel', 'F')
                                ->where('yatim', '!=', 'Y')
                                ->count();        
        $jumlahnonyatim8a = Santri::where('kelas', '8')
                                ->where('kelas_paralel', 'A')
                                ->where('yatim', '!=', 'Y')
                                ->count();        
        $jumlahnonyatim8b = Santri::where('kelas', '8')
                                ->where('kelas_paralel', 'B')
                                ->where('yatim', '!=', 'Y')
                                ->count();        
        $jumlahnonyatim8c = Santri::where('kelas', '8')
                                ->where('kelas_paralel', 'C')
                                ->where('yatim', '!=', 'Y')
                                ->count();        
        $jumlahnonyatim8d = Santri::where('kelas', '8')
                                ->where('kelas_paralel', 'D')
                                ->where('yatim', '!=', 'Y')
                                ->count();        
        $jumlahnonyatim8e = Santri::where('kelas', '8')
                                ->where('kelas_paralel', 'E')
                                ->where('yatim', '!=', 'Y')
                                ->count();        
        $jumlahnonyatim8f = Santri::where('kelas', '8')
                                ->where('kelas_paralel', 'F')
                                ->where('yatim', '!=', 'Y')
                                ->count();        
        $jumlahnonyatim9a = Santri::where('kelas', '9')
                                ->where('kelas_paralel', 'A')
                                ->where('yatim', '!=', 'Y')
                                ->count();        
        $jumlahnonyatim9b = Santri::where('kelas', '9')
                                ->where('kelas_paralel', 'B')
                                ->where('yatim', '!=', 'Y')
                                ->count();        
        $jumlahnonyatim9c = Santri::where('kelas', '9')
                                ->where('kelas_paralel', 'C')
                                ->where('yatim', '!=', 'Y')
                                ->count();        
        $jumlahnonyatim9d = Santri::where('kelas', '9')
                                ->where('kelas_paralel', 'D')
                                ->where('yatim', '!=', 'Y')
                                ->count();        
        $jumlahnonyatim9e = Santri::where('kelas', '9')
                                ->where('kelas_paralel', 'E')
                                ->where('yatim', '!=', 'Y')
                                ->count();        
        $jumlahnonyatim9f = Santri::where('kelas', '9')
                                ->where('kelas_paralel', 'F')
                                ->where('yatim', '!=', 'Y')
                                ->count();        
        $jumlahnonyatim10a = Santri::where('kelas', '10')
                                ->where('kelas_paralel', 'A')
                                ->where('yatim', '!=', 'Y')
                                ->count();        
        $jumlahnonyatim10b = Santri::where('kelas', '10')
                                ->where('kelas_paralel', 'B')
                                ->where('yatim', '!=', 'Y')
                                ->count();        
        $jumlahnonyatim10c = Santri::where('kelas', '10')
                                ->where('kelas_paralel', 'C')
                                ->where('yatim', '!=', 'Y')
                                ->count();        
        $jumlahnonyatim10d = Santri::where('kelas', '10')
                                ->where('kelas_paralel', 'D')
                                ->where('yatim', '!=', 'Y')
                                ->count();        
        $jumlahnonyatim10e = Santri::where('kelas', '10')
                                ->where('kelas_paralel', 'E')
                                ->where('yatim', '!=', 'Y')
                                ->count();        
        $jumlahnonyatim10f = Santri::where('kelas', '10')
                                ->where('kelas_paralel', 'F')
                                ->where('yatim', '!=', 'Y')
                                ->count();        
        $jumlahnonyatim11a = Santri::where('kelas', '11')
                                ->where('kelas_paralel', 'A')
                                ->where('yatim', '!=', 'Y')
                                ->count();        
        $jumlahnonyatim11b = Santri::where('kelas', '11')
                                ->where('kelas_paralel', 'B')
                                ->where('yatim', '!=', 'Y')
                                ->count();        
        $jumlahnonyatim11c = Santri::where('kelas', '11')
                                ->where('kelas_paralel', 'C')
                                ->where('yatim', '!=', 'Y')
                                ->count();        
        $jumlahnonyatim11d = Santri::where('kelas', '11')
                                ->where('kelas_paralel', 'D')
                                ->where('yatim', '!=', 'Y')
                                ->count();        
        $jumlahnonyatim11e = Santri::where('kelas', '11')
                                ->where('kelas_paralel', 'E')
                                ->where('yatim', '!=', 'Y')
                                ->count();        
        $jumlahnonyatim11f = Santri::where('kelas', '11')
                                ->where('kelas_paralel', 'F')
                                ->where('yatim', '!=', 'Y')
                                ->count();        
        $jumlahnonyatim12a = Santri::where('kelas', '12')
                                ->where('kelas_paralel', 'A')
                                ->where('yatim', '!=', 'Y')
                                ->count();        
        $jumlahnonyatim12b = Santri::where('kelas', '12')
                                ->where('kelas_paralel', 'B')
                                ->where('yatim', '!=', 'Y')
                                ->count();        
        $jumlahnonyatim12c = Santri::where('kelas', '12')
                                ->where('kelas_paralel', 'C')
                                ->where('yatim', '!=', 'Y')
                                ->count();        
        $jumlahnonyatim12d = Santri::where('kelas', '12')
                                ->where('kelas_paralel', 'D')
                                ->where('yatim', '!=', 'Y')
                                ->count();        
        $jumlahnonyatim12e = Santri::where('kelas', '12')
                                ->where('kelas_paralel', 'E')
                                ->where('yatim', '!=', 'Y')
                                ->count();        
        $jumlahnonyatim12f = Santri::where('kelas', '12')
                                ->where('kelas_paralel', 'F')
                                ->where('yatim', '!=', 'Y')
                                ->count();        

        $jumlahasrama7a = Santri::where('kelas', '7')
                                ->where('kelas_paralel', 'A')
                                ->where('asrama', 'Y')
                                ->count();        
        $jumlahasrama7b = Santri::where('kelas', '7')
                                ->where('kelas_paralel', 'B')
                                ->where('asrama', 'Y')
                                ->count();        
        $jumlahasrama7c = Santri::where('kelas', '7')
                                ->where('kelas_paralel', 'C')
                                ->where('asrama', 'Y')
                                ->count();        
        $jumlahasrama7d = Santri::where('kelas', '7')
                                ->where('kelas_paralel', 'D')
                                ->where('asrama', 'Y')
                                ->count();        
        $jumlahasrama7e = Santri::where('kelas', '7')
                                ->where('kelas_paralel', 'E')
                                ->where('asrama', 'Y')
                                ->count();        
        $jumlahasrama7f = Santri::where('kelas', '7')
                                ->where('kelas_paralel', 'F')
                                ->where('asrama', 'Y')
                                ->count();        
        $jumlahasrama8a = Santri::where('kelas', '8')
                                ->where('kelas_paralel', 'A')
                                ->where('asrama', 'Y')
                                ->count();        
        $jumlahasrama8b = Santri::where('kelas', '8')
                                ->where('kelas_paralel', 'B')
                                ->where('asrama', 'Y')
                                ->count();        
        $jumlahasrama8c = Santri::where('kelas', '8')
                                ->where('kelas_paralel', 'C')
                                ->where('asrama', 'Y')
                                ->count();        
        $jumlahasrama8d = Santri::where('kelas', '8')
                                ->where('kelas_paralel', 'D')
                                ->where('asrama', 'Y')
                                ->count();        
        $jumlahasrama8e = Santri::where('kelas', '8')
                                ->where('kelas_paralel', 'E')
                                ->where('asrama', 'Y')
                                ->count();        
        $jumlahasrama8f = Santri::where('kelas', '8')
                                ->where('kelas_paralel', 'F')
                                ->where('asrama', 'Y')
                                ->count();        
        $jumlahasrama9a = Santri::where('kelas', '9')
                                ->where('kelas_paralel', 'A')
                                ->where('asrama', 'Y')
                                ->count();        
        $jumlahasrama9b = Santri::where('kelas', '9')
                                ->where('kelas_paralel', 'B')
                                ->where('asrama', 'Y')
                                ->count();        
        $jumlahasrama9c = Santri::where('kelas', '9')
                                ->where('kelas_paralel', 'C')
                                ->where('asrama', 'Y')
                                ->count();        
        $jumlahasrama9d = Santri::where('kelas', '9')
                                ->where('kelas_paralel', 'D')
                                ->where('asrama', 'Y')
                                ->count();        
        $jumlahasrama9e = Santri::where('kelas', '9')
                                ->where('kelas_paralel', 'E')
                                ->where('asrama', 'Y')
                                ->count();        
        $jumlahasrama9f = Santri::where('kelas', '9')
                                ->where('kelas_paralel', 'F')
                                ->where('asrama', 'Y')
                                ->count();        
        $jumlahasrama10a = Santri::where('kelas', '10')
                                ->where('kelas_paralel', 'A')
                                ->where('asrama', 'Y')
                                ->count();        
        $jumlahasrama10b = Santri::where('kelas', '10')
                                ->where('kelas_paralel', 'B')
                                ->where('asrama', 'Y')
                                ->count();        
        $jumlahasrama10c = Santri::where('kelas', '10')
                                ->where('kelas_paralel', 'C')
                                ->where('asrama', 'Y')
                                ->count();        
        $jumlahasrama10d = Santri::where('kelas', '10')
                                ->where('kelas_paralel', 'D')
                                ->where('asrama', 'Y')
                                ->count();        
        $jumlahasrama10e = Santri::where('kelas', '10')
                                ->where('kelas_paralel', 'E')
                                ->where('asrama', 'Y')
                                ->count();        
        $jumlahasrama10f = Santri::where('kelas', '10')
                                ->where('kelas_paralel', 'F')
                                ->where('asrama', 'Y')
                                ->count();        
        $jumlahasrama11a = Santri::where('kelas', '11')
                                ->where('kelas_paralel', 'A')
                                ->where('asrama', 'Y')
                                ->count();        
        $jumlahasrama11b = Santri::where('kelas', '11')
                                ->where('kelas_paralel', 'B')
                                ->where('asrama', 'Y')
                                ->count();        
        $jumlahasrama11c = Santri::where('kelas', '11')
                                ->where('kelas_paralel', 'C')
                                ->where('asrama', 'Y')
                                ->count();        
        $jumlahasrama11d = Santri::where('kelas', '11')
                                ->where('kelas_paralel', 'D')
                                ->where('asrama', 'Y')
                                ->count();        
        $jumlahasrama11e = Santri::where('kelas', '11')
                                ->where('kelas_paralel', 'E')
                                ->where('asrama', 'Y')
                                ->count();        
        $jumlahasrama11f = Santri::where('kelas', '11')
                                ->where('kelas_paralel', 'F')
                                ->where('asrama', 'Y')
                                ->count();        
        $jumlahasrama12a = Santri::where('kelas', '12')
                                ->where('kelas_paralel', 'A')
                                ->where('asrama', 'Y')
                                ->count();        
        $jumlahasrama12b = Santri::where('kelas', '12')
                                ->where('kelas_paralel', 'B')
                                ->where('asrama', 'Y')
                                ->count();        
        $jumlahasrama12c = Santri::where('kelas', '12')
                                ->where('kelas_paralel', 'C')
                                ->where('asrama', 'Y')
                                ->count();        
        $jumlahasrama12d = Santri::where('kelas', '12')
                                ->where('kelas_paralel', 'D')
                                ->where('asrama', 'Y')
                                ->count();        
        $jumlahasrama12e = Santri::where('kelas', '12')
                                ->where('kelas_paralel', 'E')
                                ->where('asrama', 'Y')
                                ->count();        
        $jumlahasrama12f = Santri::where('kelas', '12')
                                ->where('kelas_paralel', 'F')
                                ->where('asrama', 'Y')
                                ->count();        

        $jumlahnonasrama7a = Santri::where('kelas', '7')
                                ->where('kelas_paralel', 'A')
                                ->where('asrama', '!=', 'Y')
                                ->count();        
        $jumlahnonasrama7b = Santri::where('kelas', '7')
                                ->where('kelas_paralel', 'B')
                                ->where('asrama', '!=', 'Y')
                                ->count();        
        $jumlahnonasrama7c = Santri::where('kelas', '7')
                                ->where('kelas_paralel', 'C')
                                ->where('asrama', '!=', 'Y')
                                ->count();        
        $jumlahnonasrama7d = Santri::where('kelas', '7')
                                ->where('kelas_paralel', 'D')
                                ->where('asrama', '!=', 'Y')
                                ->count();        
        $jumlahnonasrama7e = Santri::where('kelas', '7')
                                ->where('kelas_paralel', 'E')
                                ->where('asrama', '!=', 'Y')
                                ->count();        
        $jumlahnonasrama7f = Santri::where('kelas', '7')
                                ->where('kelas_paralel', 'F')
                                ->where('asrama', '!=', 'Y')
                                ->count();        
        $jumlahnonasrama8a = Santri::where('kelas', '8')
                                ->where('kelas_paralel', 'A')
                                ->where('asrama', '!=', 'Y')
                                ->count();        
        $jumlahnonasrama8b = Santri::where('kelas', '8')
                                ->where('kelas_paralel', 'B')
                                ->where('asrama', '!=', 'Y')
                                ->count();        
        $jumlahnonasrama8c = Santri::where('kelas', '8')
                                ->where('kelas_paralel', 'C')
                                ->where('asrama', '!=', 'Y')
                                ->count();        
        $jumlahnonasrama8d = Santri::where('kelas', '8')
                                ->where('kelas_paralel', 'D')
                                ->where('asrama', '!=', 'Y')
                                ->count();        
        $jumlahnonasrama8e = Santri::where('kelas', '8')
                                ->where('kelas_paralel', 'E')
                                ->where('asrama', '!=', 'Y')
                                ->count();        
        $jumlahnonasrama8f = Santri::where('kelas', '8')
                                ->where('kelas_paralel', 'F')
                                ->where('asrama', '!=', 'Y')
                                ->count();        
        $jumlahnonasrama9a = Santri::where('kelas', '9')
                                ->where('kelas_paralel', 'A')
                                ->where('asrama', '!=', 'Y')
                                ->count();        
        $jumlahnonasrama9b = Santri::where('kelas', '9')
                                ->where('kelas_paralel', 'B')
                                ->where('asrama', '!=', 'Y')
                                ->count();        
        $jumlahnonasrama9c = Santri::where('kelas', '9')
                                ->where('kelas_paralel', 'C')
                                ->where('asrama', '!=', 'Y')
                                ->count();        
        $jumlahnonasrama9d = Santri::where('kelas', '9')
                                ->where('kelas_paralel', 'D')
                                ->where('asrama', '!=', 'Y')
                                ->count();        
        $jumlahnonasrama9e = Santri::where('kelas', '9')
                                ->where('kelas_paralel', 'E')
                                ->where('asrama', '!=', 'ASRYAMA')
                                ->count();        
        $jumlahnonasrama9f = Santri::where('kelas', '9')
                                ->where('kelas_paralel', 'F')
                                ->where('asrama', '!=', 'Y')
                                ->count();        
        $jumlahnonasrama10a = Santri::where('kelas', '10')
                                ->where('kelas_paralel', 'A')
                                ->where('asrama', '!=', 'Y')
                                ->count();        
        $jumlahnonasrama10b = Santri::where('kelas', '10')
                                ->where('kelas_paralel', 'B')
                                ->where('asrama', '!=', 'Y')
                                ->count();        
        $jumlahnonasrama10c = Santri::where('kelas', '10')
                                ->where('kelas_paralel', 'C')
                                ->where('asrama', '!=', 'Y')
                                ->count();        
        $jumlahnonasrama10d = Santri::where('kelas', '10')
                                ->where('kelas_paralel', 'D')
                                ->where('asrama', '!=', 'Y')
                                ->count();        
        $jumlahnonasrama10e = Santri::where('kelas', '10')
                                ->where('kelas_paralel', 'E')
                                ->where('asrama', '!=', 'Y')
                                ->count();        
        $jumlahnonasrama10f = Santri::where('kelas', '10')
                                ->where('kelas_paralel', 'F')
                                ->where('asrama', '!=', 'Y')
                                ->count();        
        $jumlahnonasrama11a = Santri::where('kelas', '11')
                                ->where('kelas_paralel', 'A')
                                ->where('asrama', '!=', 'Y')
                                ->count();        
        $jumlahnonasrama11b = Santri::where('kelas', '11')
                                ->where('kelas_paralel', 'B')
                                ->where('asrama', '!=', 'Y')
                                ->count();        
        $jumlahnonasrama11c = Santri::where('kelas', '11')
                                ->where('kelas_paralel', 'C')
                                ->where('asrama', '!=', 'Y')
                                ->count();        
        $jumlahnonasrama11d = Santri::where('kelas', '11')
                                ->where('kelas_paralel', 'D')
                                ->where('asrama', '!=', 'Y')
                                ->count();        
        $jumlahnonasrama11e = Santri::where('kelas', '11')
                                ->where('kelas_paralel', 'E')
                                ->where('asrama', '!=', 'Y')
                                ->count();        
        $jumlahnonasrama11f = Santri::where('kelas', '11')
                                ->where('kelas_paralel', 'F')
                                ->where('asrama', '!=', 'Y')
                                ->count();        
        $jumlahnonasrama12a = Santri::where('kelas', '12')
                                ->where('kelas_paralel', 'A')
                                ->where('asrama', '!=', 'Y')
                                ->count();        
        $jumlahnonasrama12b = Santri::where('kelas', '12')
                                ->where('kelas_paralel', 'B')
                                ->where('asrama', '!=', 'Y')
                                ->count();        
        $jumlahnonasrama12c = Santri::where('kelas', '12')
                                ->where('kelas_paralel', 'C')
                                ->where('asrama', '!=', 'Y')
                                ->count();        
        $jumlahnonasrama12d = Santri::where('kelas', '12')
                                ->where('kelas_paralel', 'D')
                                ->where('asrama', '!=', 'Y')
                                ->count();        
        $jumlahnonasrama12e = Santri::where('kelas', '12')
                                ->where('kelas_paralel', 'E')
                                ->where('asrama', '!=', 'Y')
                                ->count();        
        $jumlahnonasrama12f = Santri::where('kelas', '12')
                                ->where('kelas_paralel', 'F')
                                ->where('asrama', '!=', 'Y')
                                ->count();        

        $jumlahagk7a = Santri::where('kelas', '7')
                                ->where('kelas_paralel', 'A')
                                ->where('agk', 'Y')
                                ->count();        
        $jumlahagk7b = Santri::where('kelas', '7')
                                ->where('kelas_paralel', 'B')
                                ->where('agk', 'Y')
                                ->count();        
        $jumlahagk7c = Santri::where('kelas', '7')
                                ->where('kelas_paralel', 'C')
                                ->where('agk', 'Y')
                                ->count();        
        $jumlahagk7d = Santri::where('kelas', '7')
                                ->where('kelas_paralel', 'D')
                                ->where('agk', 'Y')
                                ->count();        
        $jumlahagk7e = Santri::where('kelas', '7')
                                ->where('kelas_paralel', 'E')
                                ->where('agk', 'Y')
                                ->count();        
        $jumlahagk7f = Santri::where('kelas', '7')
                                ->where('kelas_paralel', 'F')
                                ->where('agk', 'Y')
                                ->count();        
        $jumlahagk8a = Santri::where('kelas', '8')
                                ->where('kelas_paralel', 'A')
                                ->where('agk', 'Y')
                                ->count();        
        $jumlahagk8b = Santri::where('kelas', '8')
                                ->where('kelas_paralel', 'B')
                                ->where('agk', 'Y')
                                ->count();        
        $jumlahagk8c = Santri::where('kelas', '8')
                                ->where('kelas_paralel', 'C')
                                ->where('agk', 'Y')
                                ->count();        
        $jumlahagk8d = Santri::where('kelas', '8')
                                ->where('kelas_paralel', 'D')
                                ->where('agk', 'Y')
                                ->count();        
        $jumlahagk8e = Santri::where('kelas', '8')
                                ->where('kelas_paralel', 'E')
                                ->where('agk', 'Y')
                                ->count();        
        $jumlahagk8f = Santri::where('kelas', '8')
                                ->where('kelas_paralel', 'F')
                                ->where('agk', 'Y')
                                ->count();        
        $jumlahagk9a = Santri::where('kelas', '9')
                                ->where('kelas_paralel', 'A')
                                ->where('agk', 'Y')
                                ->count();        
        $jumlahagk9b = Santri::where('kelas', '9')
                                ->where('kelas_paralel', 'B')
                                ->where('agk', 'Y')
                                ->count();        
        $jumlahagk9c = Santri::where('kelas', '9')
                                ->where('kelas_paralel', 'C')
                                ->where('agk', 'Y')
                                ->count();        
        $jumlahagk9d = Santri::where('kelas', '9')
                                ->where('kelas_paralel', 'D')
                                ->where('agk', 'Y')
                                ->count();        
        $jumlahagk9e = Santri::where('kelas', '9')
                                ->where('kelas_paralel', 'E')
                                ->where('agk', 'Y')
                                ->count();        
        $jumlahagk9f = Santri::where('kelas', '9')
                                ->where('kelas_paralel', 'F')
                                ->where('agk', 'Y')
                                ->count();        
        $jumlahagk10a = Santri::where('kelas', '10')
                                ->where('kelas_paralel', 'A')
                                ->where('agk', 'Y')
                                ->count();        
        $jumlahagk10b = Santri::where('kelas', '10')
                                ->where('kelas_paralel', 'B')
                                ->where('agk', 'Y')
                                ->count();        
        $jumlahagk10c = Santri::where('kelas', '10')
                                ->where('kelas_paralel', 'C')
                                ->where('agk', 'Y')
                                ->count();        
        $jumlahagk10d = Santri::where('kelas', '10')
                                ->where('kelas_paralel', 'D')
                                ->where('agk', 'Y')
                                ->count();        
        $jumlahagk10e = Santri::where('kelas', '10')
                                ->where('kelas_paralel', 'E')
                                ->where('agk', 'Y')
                                ->count();        
        $jumlahagk10f = Santri::where('kelas', '10')
                                ->where('kelas_paralel', 'F')
                                ->where('agk', 'Y')
                                ->count();        
        $jumlahagk11a = Santri::where('kelas', '11')
                                ->where('kelas_paralel', 'A')
                                ->where('agk', 'Y')
                                ->count();        
        $jumlahagk11b = Santri::where('kelas', '11')
                                ->where('kelas_paralel', 'B')
                                ->where('agk', 'Y')
                                ->count();        
        $jumlahagk11c = Santri::where('kelas', '11')
                                ->where('kelas_paralel', 'C')
                                ->where('agk', 'Y')
                                ->count();        
        $jumlahagk11d = Santri::where('kelas', '11')
                                ->where('kelas_paralel', 'D')
                                ->where('agk', 'Y')
                                ->count();        
        $jumlahagk11e = Santri::where('kelas', '11')
                                ->where('kelas_paralel', 'E')
                                ->where('agk', 'Y')
                                ->count();        
        $jumlahagk11f = Santri::where('kelas', '11')
                                ->where('kelas_paralel', 'F')
                                ->where('agk', 'Y')
                                ->count();        
        $jumlahagk12a = Santri::where('kelas', '12')
                                ->where('kelas_paralel', 'A')
                                ->where('agk', 'Y')
                                ->count();        
        $jumlahagk12b = Santri::where('kelas', '12')
                                ->where('kelas_paralel', 'B')
                                ->where('agk', 'Y')
                                ->count();        
        $jumlahagk12c = Santri::where('kelas', '12')
                                ->where('kelas_paralel', 'C')
                                ->where('agk', 'Y')
                                ->count();        
        $jumlahagk12d = Santri::where('kelas', '12')
                                ->where('kelas_paralel', 'D')
                                ->where('agk', 'Y')
                                ->count();        
        $jumlahagk12e = Santri::where('kelas', '12')
                                ->where('kelas_paralel', 'E')
                                ->where('agk', 'Y')
                                ->count();        
        $jumlahagk12f = Santri::where('kelas', '12')
                                ->where('kelas_paralel', 'F')
                                ->where('agk', 'Y')
                                ->count();        

        $jumlahnonagk7a = Santri::where('kelas', '7')
                                ->where('kelas_paralel', 'A')
                                ->where('agk', '!=', 'Y')
                                ->count();        
        $jumlahnonagk7b = Santri::where('kelas', '7')
                                ->where('kelas_paralel', 'B')
                                ->where('agk', '!=', 'Y')
                                ->count();        
        $jumlahnonagk7c = Santri::where('kelas', '7')
                                ->where('kelas_paralel', 'C')
                                ->where('agk', '!=', 'Y')
                                ->count();        
        $jumlahnonagk7d = Santri::where('kelas', '7')
                                ->where('kelas_paralel', 'D')
                                ->where('agk', '!=', 'Y')
                                ->count();        
        $jumlahnonagk7e = Santri::where('kelas', '7')
                                ->where('kelas_paralel', 'E')
                                ->where('agk', '!=', 'Y')
                                ->count();        
        $jumlahnonagk7f = Santri::where('kelas', '7')
                                ->where('kelas_paralel', 'F')
                                ->where('agk', '!=', 'Y')
                                ->count();        
        $jumlahnonagk8a = Santri::where('kelas', '8')
                                ->where('kelas_paralel', 'A')
                                ->where('agk', '!=', 'Y')
                                ->count();        
        $jumlahnonagk8b = Santri::where('kelas', '8')
                                ->where('kelas_paralel', 'B')
                                ->where('agk', '!=', 'Y')
                                ->count();        
        $jumlahnonagk8c = Santri::where('kelas', '8')
                                ->where('kelas_paralel', 'C')
                                ->where('agk', '!=', 'Y')
                                ->count();        
        $jumlahnonagk8d = Santri::where('kelas', '8')
                                ->where('kelas_paralel', 'D')
                                ->where('agk', '!=', 'Y')
                                ->count();        
        $jumlahnonagk8e = Santri::where('kelas', '8')
                                ->where('kelas_paralel', 'E')
                                ->where('agk', '!=', 'Y')
                                ->count();        
        $jumlahnonagk8f = Santri::where('kelas', '8')
                                ->where('kelas_paralel', 'F')
                                ->where('agk', '!=', 'Y')
                                ->count();        
        $jumlahnonagk9a = Santri::where('kelas', '9')
                                ->where('kelas_paralel', 'A')
                                ->where('agk', '!=', 'Y')
                                ->count();        
        $jumlahnonagk9b = Santri::where('kelas', '9')
                                ->where('kelas_paralel', 'B')
                                ->where('agk', '!=', 'Y')
                                ->count();        
        $jumlahnonagk9c = Santri::where('kelas', '9')
                                ->where('kelas_paralel', 'C')
                                ->where('agk', '!=', 'Y')
                                ->count();        
        $jumlahnonagk9d = Santri::where('kelas', '9')
                                ->where('kelas_paralel', 'D')
                                ->where('agk', '!=', 'Y')
                                ->count();        
        $jumlahnonagk9e = Santri::where('kelas', '9')
                                ->where('kelas_paralel', 'E')
                                ->where('agk', '!=', 'Y')
                                ->count();        
        $jumlahnonagk9f = Santri::where('kelas', '9')
                                ->where('kelas_paralel', 'F')
                                ->where('agk', '!=', 'Y')
                                ->count();        
        $jumlahnonagk10a = Santri::where('kelas', '10')
                                ->where('kelas_paralel', 'A')
                                ->where('agk', '!=', 'Y')
                                ->count();        
        $jumlahnonagk10b = Santri::where('kelas', '10')
                                ->where('kelas_paralel', 'B')
                                ->where('agk', '!=', 'Y')
                                ->count();        
        $jumlahnonagk10c = Santri::where('kelas', '10')
                                ->where('kelas_paralel', 'C')
                                ->where('agk', '!=', 'Y')
                                ->count();        
        $jumlahnonagk10d = Santri::where('kelas', '10')
                                ->where('kelas_paralel', 'D')
                                ->where('agk', '!=', 'Y')
                                ->count();        
        $jumlahnonagk10e = Santri::where('kelas', '10')
                                ->where('kelas_paralel', 'E')
                                ->where('agk', '!=', 'Y')
                                ->count();        
        $jumlahnonagk10f = Santri::where('kelas', '10')
                                ->where('kelas_paralel', 'F')
                                ->where('agk', '!=', 'Y')
                                ->count();        
        $jumlahnonagk11a = Santri::where('kelas', '11')
                                ->where('kelas_paralel', 'A')
                                ->where('agk', '!=', 'Y')
                                ->count();        
        $jumlahnonagk11b = Santri::where('kelas', '11')
                                ->where('kelas_paralel', 'B')
                                ->where('agk', '!=', 'Y')
                                ->count();        
        $jumlahnonagk11c = Santri::where('kelas', '11')
                                ->where('kelas_paralel', 'C')
                                ->where('agk', '!=', 'Y')
                                ->count();        
        $jumlahnonagk11d = Santri::where('kelas', '11')
                                ->where('kelas_paralel', 'D')
                                ->where('agk', '!=', 'Y')
                                ->count();        
        $jumlahnonagk11e = Santri::where('kelas', '11')
                                ->where('kelas_paralel', 'E')
                                ->where('agk', '!=', 'Y')
                                ->count();        
        $jumlahnonagk11f = Santri::where('kelas', '11')
                                ->where('kelas_paralel', 'F')
                                ->where('agk', '!=', 'Y')
                                ->count();        
        $jumlahnonagk12a = Santri::where('kelas', '12')
                                ->where('kelas_paralel', 'A')
                                ->where('agk', '!=', 'Y')
                                ->count();        
        $jumlahnonagk12b = Santri::where('kelas', '12')
                                ->where('kelas_paralel', 'B')
                                ->where('agk', '!=', 'Y')
                                ->count();        
        $jumlahnonagk12c = Santri::where('kelas', '12')
                                ->where('kelas_paralel', 'C')
                                ->where('agk', '!=', 'Y')
                                ->count();        
        $jumlahnonagk12d = Santri::where('kelas', '12')
                                ->where('kelas_paralel', 'D')
                                ->where('agk', '!=', 'Y')
                                ->count();        
        $jumlahnonagk12e = Santri::where('kelas', '12')
                                ->where('kelas_paralel', 'E')
                                ->where('agk', '!=', 'Y')
                                ->count();        
        $jumlahnonagk12f = Santri::where('kelas', '12')
                                ->where('kelas_paralel', 'F')
                                ->where('agk', '!=', 'Y')
                                ->count();        

        $totalsantri = Santri::all()
                            ->count();
        $totalsantribanin = Santri::where('jenis_kelamin', 'L')
                                    ->count();
        $totalsantribanat = Santri::where('jenis_kelamin', 'P')
                                    ->count();                      
        $totalsantrima = Santri::whereBetween('kelas', ['10','12'])
                                ->count();
        $totalsantribaninma = Santri::where('jenis_kelamin', 'L')
                                    ->whereBetween('kelas', ['10','12'])
                                    ->count();
        $totalsantribanatma = Santri::where('jenis_kelamin', 'P')
                                    ->whereBetween('kelas', ['10','12'])
                                    ->count();
        $totalsantrimts = Santri::whereBetween('kelas', ['7','9'])
                                ->count();
        $totalsantribaninmts = Santri::where('jenis_kelamin', 'L')
                                    ->whereBetween('kelas', ['7','9'])
                                    ->count();              
        $totalsantribanatmts = Santri::where('jenis_kelamin', 'P')
                                    ->whereBetween('kelas', ['7','9'])
                                    ->count();
        $totalsantrimi = Santri::whereBetween('kelas', ['1','6'])
                                ->count();
        $totalsantribaninmi = Santri::where('jenis_kelamin', 'L')
                                    ->whereBetween('kelas', ['1','6'])
                                    ->count();
        $totalsantribanatmi = Santri::where('jenis_kelamin', 'P')
                                    ->whereBetween('kelas', ['1','6'])
                                    ->count();
        $totalsantrira = Santri::where('kelas', '0')
                                ->count();
        $totalsantribaninra = Santri::where('jenis_kelamin', 'L')
                                    ->where('kelas', '0')
                                    ->count();              
        $totalsantribanatra = Santri::where('jenis_kelamin', 'P')
                                    ->where('kelas', '0')
                                    ->count();
                                                
        $totalyatim = Santri::where('yatim', 'Y')
                            ->count();
        $totalyatimbanin = Santri::where('yatim', 'Y')
                                ->where('jenis_kelamin', 'L')
                                ->count();
        $totalyatimbanat = Santri::where('yatim', 'Y')
                                ->where('jenis_kelamin', 'P')
                                ->count();
        $totalyatimma = Santri::where('yatim', 'Y')
                                ->whereBetween('kelas', ['10','12'])
                                ->count();
        $totalyatimbaninma = Santri::where('yatim', 'Y')
                                    ->where('jenis_kelamin', 'L')
                                    ->whereBetween('kelas', ['10','12'])
                                    ->count();
        $totalyatimbanatma = Santri::where('yatim', 'Y')
                                    ->where('jenis_kelamin', 'P')
                                    ->whereBetween('kelas', ['10','12'])
                                    ->count();
        $totalyatimmts = Santri::where('yatim', 'Y')
                                ->whereBetween('kelas', ['7','9'])
                                ->count();
        $totalyatimbaninmts = Santri::where('yatim', 'Y')
                                    ->where('jenis_kelamin', 'L')
                                    ->whereBetween('kelas', ['7','9'])
                                    ->count();
        $totalyatimbanatmts = Santri::where('yatim', 'Y')
                                    ->where('jenis_kelamin', 'P')
                                    ->whereBetween('kelas', ['7','9'])
                                    ->count();
        $totalyatimmi = Santri::where('yatim', 'Y')
                                ->whereBetween('kelas', ['1','6'])
                                ->count();
        $totalyatimbaninmi = Santri::where('yatim', 'Y')
                                    ->where('jenis_kelamin', 'L')
                                    ->whereBetween('kelas', ['1','6'])
                                    ->count();
        $totalyatimbanatmi = Santri::where('yatim', 'Y')
                                    ->where('jenis_kelamin', 'P')
                                    ->whereBetween('kelas', ['1','6'])
                                    ->count();
        $totalyatimra = Santri::where('yatim', 'Y')
                                ->where('kelas', '0')
                                ->count();
        $totalyatimbaninra = Santri::where('yatim', 'Y')
                                    ->where('jenis_kelamin', 'L')
                                    ->where('kelas', '0')
                                    ->count();
        $totalyatimbanatra = Santri::where('yatim', 'Y')
                                    ->where('jenis_kelamin', 'P')
                                    ->where('kelas', '0')
                                    ->count();

        $totalnonyatim = Santri::where('yatim', '!=', 'Y')
                                ->count();
        $totalnonyatimbanin = Santri::where('yatim', '!=', 'Y')
                                    ->where('jenis_kelamin', 'L')
                                    ->count();                  
        $totalnonyatimbanat = Santri::where('yatim', '!=', 'Y')
                                    ->where('jenis_kelamin', 'P')
                                    ->count();
        $totalnonyatimma = Santri::where('yatim', '!=', 'Y')
                                ->whereBetween('kelas', ['10','12'])
                                ->count();
        $totalnonyatimbaninma = Santri::where('yatim', '!=', 'Y')
                                    ->where('jenis_kelamin', 'L')
                                    ->whereBetween('kelas', ['10','12'])
                                    ->count();                                                
        $totalnonyatimbanatma = Santri::where('yatim', '!=', 'Y')
                                        ->where('jenis_kelamin', 'P')
                                        ->whereBetween('kelas', ['10','12'])
                                        ->count();
        $totalnonyatimmts = Santri::where('yatim', '!=', 'Y')
                                    ->whereBetween('kelas', ['7','9'])
                                    ->count();
        $totalnonyatimbaninmts = Santri::where('yatim', '!=', 'Y')
                                        ->where('jenis_kelamin', 'L')
                                        ->whereBetween('kelas', ['7','9'])
                                        ->count();      
        $totalnonyatimbanatmts = Santri::where('yatim', '!=', 'Y')
                                        ->where('jenis_kelamin', 'P')
                                        ->whereBetween('kelas', ['7','9'])
                                        ->count();
        $totalnonyatimmi = Santri::where('yatim', '!=', 'Y')
                                ->whereBetween('kelas', ['1','6'])
                                ->count();
        $totalnonyatimbaninmi = Santri::where('yatim', '!=', 'Y')
                                ->where('jenis_kelamin', 'L')
                                ->whereBetween('kelas', ['1','6'])
                                ->count();                                                
        $totalnonyatimbanatmi = Santri::where('yatim', '!=', 'Y')
                                        ->where('jenis_kelamin', 'P')
                                        ->whereBetween('kelas', ['1','6'])
                                        ->count();
        $totalnonyatimra = Santri::where('yatim', '!=', 'Y')
                                    ->where('kelas', '0')
                                    ->count();
        $totalnonyatimbaninra = Santri::where('yatim', '!=', 'Y')
                                        ->where('jenis_kelamin', 'L')
                                        ->where('kelas', '0')
                                        ->count();      
        $totalnonyatimbanatra = Santri::where('yatim', '!=', 'Y')
                                        ->where('jenis_kelamin', 'P')
                                        ->where('kelas', '0')
                                        ->count();

        $totalasrama = Santri::where('asrama', 'Y')
                            ->count();
        $totalasramabanin = Santri::where('asrama', 'Y')
                                    ->where('jenis_kelamin', 'L')
                                    ->count();          
        $totalasramabanat = Santri::where('asrama', 'Y')
                                    ->where('jenis_kelamin', 'P')
                                    ->count();
        $totalasramama = Santri::where('asrama', 'Y')
                                ->whereBetween('kelas', ['10','12'])
                                ->count();
        $totalasramabaninma = Santri::where('asrama', 'Y')
                                    ->where('jenis_kelamin', 'L')
                                    ->whereBetween('kelas', ['10','12'])
                                    ->count();          
        $totalasramabanatma = Santri::where('asrama', 'Y')
                                    ->where('jenis_kelamin', 'P')
                                    ->whereBetween('kelas', ['10','12'])
                                    ->count();
        $totalasramamts = Santri::where('asrama', 'Y')
                                ->whereBetween('kelas', ['7','9'])
                                ->count();
        $totalasramabaninmts = Santri::where('asrama', 'Y')
                                    ->where('jenis_kelamin', 'L')
                                    ->whereBetween('kelas', ['7','9'])
                                    ->count();          
        $totalasramabanatmts = Santri::where('asrama', 'Y')
                                    ->where('jenis_kelamin', 'P')
                                    ->whereBetween('kelas', ['7','9'])
                                    ->count();
        $totalasramami = Santri::where('asrama', 'Y')
                                ->whereBetween('kelas', ['1','6'])
                                ->count();
        $totalasramabaninmi = Santri::where('asrama', 'Y')
                                    ->where('jenis_kelamin', 'L')
                                    ->whereBetween('kelas', ['1','6'])
                                    ->count();          
        $totalasramabanatmi = Santri::where('asrama', 'Y')
                                    ->where('jenis_kelamin', 'P')
                                    ->whereBetween('kelas', ['1','6'])
                                    ->count();
        $totalasramara = Santri::where('asrama', 'Y')
                                ->where('kelas', '0')
                                ->count();
        $totalasramabaninra = Santri::where('asrama', 'Y')
                                    ->where('jenis_kelamin', 'L')
                                    ->where('kelas', '0')
                                    ->count();          
        $totalasramabanatra = Santri::where('asrama', 'Y')
                                    ->where('jenis_kelamin', 'P')
                                    ->where('kelas', '0')
                                    ->count();

        $totalnonasrama = Santri::where('asrama', '!=', 'Y')
                                 ->count();
        $totalnonasramabanin = Santri::where('asrama', '!=', 'Y')
                                    ->where('jenis_kelamin', 'L')
                                    ->count();             
        $totalnonasramabanat = Santri::where('asrama', '!=', 'Y')
                                    ->where('jenis_kelamin', 'P')
                                    ->count();
        $totalnonasramama = Santri::where('asrama', '!=', 'Y')
                                    ->whereBetween('kelas', ['10','12'])
                                    ->count();
        $totalnonasramabaninma = Santri::where('asrama', '!=', 'Y')
                                        ->whereBetween('kelas', ['10','12'])
                                        ->where('jenis_kelamin', 'L')
                                        ->count();          
        $totalnonasramabanatma = Santri::where('asrama', '!=', 'Y')
                                        ->whereBetween('kelas', ['10','12'])
                                        ->where('jenis_kelamin', 'P')
                                        ->count();
        $totalnonasramamts = Santri::where('asrama', '!=', 'Y')
                                    ->whereBetween('kelas', ['7','9'])
                                    ->count();
        $totalnonasramabaninmts = Santri::where('asrama', '!=', 'Y')
                                        ->whereBetween('kelas', ['7','9'])
                                        ->where('jenis_kelamin', 'L')
                                        ->count();                            
        $totalnonasramabanatmts = Santri::where('asrama', '!=', 'Y')
                                        ->whereBetween('kelas', ['7','9'])
                                        ->where('jenis_kelamin', 'P')
                                        ->count();
        $totalnonasramami = Santri::where('asrama', '!=', 'Y')
                                    ->whereBetween('kelas', ['1','6'])
                                    ->count();
        $totalnonasramabaninmi = Santri::where('asrama', '!=', 'Y')
                                        ->where('jenis_kelamin', 'L')
                                        ->whereBetween('kelas', ['1','6'])
                                        ->count();          
        $totalnonasramabanatmi = Santri::where('asrama', '!=', 'Y')
                                        ->where('jenis_kelamin', 'P')
                                        ->whereBetween('kelas', ['1','6'])
                                        ->count();
        $totalnonasramara = Santri::where('asrama', '!=', 'Y')
                                    ->where('kelas', '0')
                                    ->count();
        $totalnonasramabaninra = Santri::where('asrama', '!=', 'Y')
                                        ->where('jenis_kelamin', 'L')
                                        ->where('kelas', '0')
                                        ->count();                            
        $totalnonasramabanatra = Santri::where('asrama', '!=', 'Y')
                                        ->where('jenis_kelamin', 'P')
                                        ->where('kelas', '0')
                                        ->count();

        $totalagk = Santri::where('agk', 'Y')
                            ->count();
        $totalagkbanin = Santri::where('agk', 'Y')
                                ->where('jenis_kelamin', 'L')
                                ->count();
        $totalagkbanat = Santri::where('agk', 'Y')
                                ->where('jenis_kelamin', 'P')
                                ->count();
        $totalagkma = Santri::where('agk', 'Y')
                            ->whereBetween('kelas', ['10','12'])
                            ->count();
        $totalagkbaninma = Santri::where('agk', 'Y')
                                ->where('jenis_kelamin', 'L')
                                ->whereBetween('kelas', ['10','12'])
                                ->count();
        $totalagkbanatma = Santri::where('agk', 'Y')
                                ->where('jenis_kelamin', 'P')
                                ->whereBetween('kelas', ['10','12'])
                                ->count();
        $totalagkmts = Santri::where('agk', 'Y')
                            ->whereBetween('kelas', ['7','9'])
                            ->count();
        $totalagkbaninmts = Santri::where('agk', 'Y')
                                    ->where('jenis_kelamin', 'L')
                                    ->whereBetween('kelas', ['7','9'])
                                    ->count();
        $totalagkbanatmts = Santri::where('agk', 'Y')
                                    ->where('jenis_kelamin', 'P')
                                    ->whereBetween('kelas', ['7','9'])
                                    ->count();
        $totalagkmi = Santri::where('agk', 'Y')
                            ->whereBetween('kelas', ['1','6'])
                            ->count();
        $totalagkbaninmi = Santri::where('agk', 'Y')
                                ->where('jenis_kelamin', 'L')
                                ->whereBetween('kelas', ['1','6'])
                                ->count();
        $totalagkbanatmi = Santri::where('agk', 'Y')
                                ->where('jenis_kelamin', 'P')
                                ->whereBetween('kelas', ['1','6'])
                                ->count();
        $totalagkra = Santri::where('agk', 'Y')
                            ->where('kelas', '0')
                            ->count();
        $totalagkbaninra = Santri::where('agk', 'Y')
                                    ->where('jenis_kelamin', 'L')
                                    ->where('kelas', '0')
                                    ->count();
        $totalagkbanatra = Santri::where('agk', 'Y')
                                    ->where('jenis_kelamin', 'P')
                                    ->where('kelas', '0')
                                    ->count();

        $totalnonagk = Santri::where('agk', '!=', 'Y')
                            ->count();
        $totalnonagkbanin = Santri::where('agk', '!=', 'Y')
                                    ->where('jenis_kelamin', 'L')
                                    ->count();
        $totalnonagkbanat = Santri::where('agk', '!=', 'Y')
                                    ->where('jenis_kelamin', 'P')
                                    ->count();
        $totalnonagkma = Santri::where('agk', '!=', 'Y')
                                ->whereBetween('kelas', ['10','12'])
                                ->count();
        $totalnonagkbaninma = Santri::where('agk', '!=', 'Y')
                                    ->where('jenis_kelamin', 'L')
                                    ->whereBetween('kelas', ['10','12'])
                                    ->count();
        $totalnonagkbanatma = Santri::where('agk', '!=', 'Y')
                                    ->where('jenis_kelamin', 'P')
                                    ->whereBetween('kelas', ['10','12'])
                                    ->count();
        $totalnonagkmts = Santri::where('agk', '!=', 'Y')
                                ->whereBetween('kelas', ['7','9'])
                                ->count();
        $totalnonagkbaninmts = Santri::where('agk', '!=', 'Y')
                                    ->where('jenis_kelamin', 'L')
                                    ->whereBetween('kelas', ['7','9'])
                                    ->count();
        $totalnonagkbanatmts = Santri::where('agk', '!=', 'Y')
                                    ->where('jenis_kelamin', 'P')
                                    ->whereBetween('kelas', ['7','9'])
                                    ->count();
        $totalnonagkmi = Santri::where('agk', '!=', 'Y')
                                ->whereBetween('kelas', ['1','6'])
                                ->count();
        $totalnonagkbaninmi = Santri::where('agk', '!=', 'Y')
                                    ->where('jenis_kelamin', 'L')
                                    ->whereBetween('kelas', ['1','6'])
                                    ->count();
        $totalnonagkbanatmi = Santri::where('agk', '!=', 'Y')
                                    ->where('jenis_kelamin', 'P')
                                    ->whereBetween('kelas', ['1','6'])
                                    ->count();
        $totalnonagkra = Santri::where('agk', '!=', 'Y')
                                ->where('kelas', '0')
                                ->count();
        $totalnonagkbaninra = Santri::where('agk', '!=', 'Y')
                                    ->where('jenis_kelamin', 'L')
                                    ->where('kelas', '0')
                                    ->count();
        $totalnonagkbanatra = Santri::where('agk', '!=', 'Y')
                                    ->where('jenis_kelamin', 'P')
                                    ->where('kelas', '0')
                                    ->count();

        return view('dashboard.santris.rekapsantri.index', [
            'jumlahsantri7a' => $jumlahsantri7a,
            'jumlahsantri7b' => $jumlahsantri7b,
            'jumlahsantri7c' => $jumlahsantri7c,
            'jumlahsantri7d' => $jumlahsantri7d,
            'jumlahsantri7e' => $jumlahsantri7e,
            'jumlahsantri7f' => $jumlahsantri7f,
            'jumlahsantri8a' => $jumlahsantri8a,
            'jumlahsantri8b' => $jumlahsantri8b,
            'jumlahsantri8c' => $jumlahsantri8c,
            'jumlahsantri8d' => $jumlahsantri8d,
            'jumlahsantri8e' => $jumlahsantri8e,
            'jumlahsantri8f' => $jumlahsantri8f,
            'jumlahsantri9a' => $jumlahsantri9a,
            'jumlahsantri9b' => $jumlahsantri9b,
            'jumlahsantri9c' => $jumlahsantri9c,
            'jumlahsantri9d' => $jumlahsantri9d,
            'jumlahsantri9e' => $jumlahsantri9e,
            'jumlahsantri9f' => $jumlahsantri9f,
            'jumlahsantri10a' => $jumlahsantri10a,
            'jumlahsantri10b' => $jumlahsantri10b,
            'jumlahsantri10c' => $jumlahsantri10c,
            'jumlahsantri10d' => $jumlahsantri10d,
            'jumlahsantri10e' => $jumlahsantri10e,
            'jumlahsantri10f' => $jumlahsantri10f,
            'jumlahsantri11a' => $jumlahsantri11a,
            'jumlahsantri11b' => $jumlahsantri11b,
            'jumlahsantri11c' => $jumlahsantri11c,
            'jumlahsantri11d' => $jumlahsantri11d,
            'jumlahsantri11e' => $jumlahsantri11e,
            'jumlahsantri11f' => $jumlahsantri11f,
            'jumlahsantri12a' => $jumlahsantri12a,
            'jumlahsantri12b' => $jumlahsantri12b,
            'jumlahsantri12c' => $jumlahsantri12c,
            'jumlahsantri12d' => $jumlahsantri12d,
            'jumlahsantri12e' => $jumlahsantri12e,
            'jumlahsantri12f' => $jumlahsantri12f,
            'jumlahyatim7a' => $jumlahyatim7a,
            'jumlahyatim7b' => $jumlahyatim7b,
            'jumlahyatim7c' => $jumlahyatim7c,
            'jumlahyatim7d' => $jumlahyatim7d,
            'jumlahyatim7e' => $jumlahyatim7e,
            'jumlahyatim7f' => $jumlahyatim7f,
            'jumlahyatim8a' => $jumlahyatim8a,
            'jumlahyatim8b' => $jumlahyatim8b,
            'jumlahyatim8c' => $jumlahyatim8c,
            'jumlahyatim8d' => $jumlahyatim8d,
            'jumlahyatim8e' => $jumlahyatim8e,
            'jumlahyatim8f' => $jumlahyatim8f,
            'jumlahyatim9a' => $jumlahyatim9a,
            'jumlahyatim9b' => $jumlahyatim9b,
            'jumlahyatim9c' => $jumlahyatim9c,
            'jumlahyatim9d' => $jumlahyatim9d,
            'jumlahyatim9e' => $jumlahyatim9e,
            'jumlahyatim9f' => $jumlahyatim9f,
            'jumlahyatim10a' => $jumlahyatim10a,
            'jumlahyatim10b' => $jumlahyatim10b,
            'jumlahyatim10c' => $jumlahyatim10c,
            'jumlahyatim10d' => $jumlahyatim10d,
            'jumlahyatim10e' => $jumlahyatim10e,
            'jumlahyatim10f' => $jumlahyatim10f,
            'jumlahyatim11a' => $jumlahyatim11a,
            'jumlahyatim11b' => $jumlahyatim11b,
            'jumlahyatim11c' => $jumlahyatim11c,
            'jumlahyatim11d' => $jumlahyatim11d,
            'jumlahyatim11e' => $jumlahyatim11e,
            'jumlahyatim11f' => $jumlahyatim11f,
            'jumlahyatim12a' => $jumlahyatim12a,
            'jumlahyatim12b' => $jumlahyatim12b,
            'jumlahyatim12c' => $jumlahyatim12c,
            'jumlahyatim12d' => $jumlahyatim12d,
            'jumlahyatim12e' => $jumlahyatim12e,
            'jumlahyatim12f' => $jumlahyatim12f,
            'jumlahnonyatim7a' => $jumlahnonyatim7a,
            'jumlahnonyatim7b' => $jumlahnonyatim7b,
            'jumlahnonyatim7c' => $jumlahnonyatim7c,
            'jumlahnonyatim7d' => $jumlahnonyatim7d,
            'jumlahnonyatim7e' => $jumlahnonyatim7e,
            'jumlahnonyatim7f' => $jumlahnonyatim7f,
            'jumlahnonyatim8a' => $jumlahnonyatim8a,
            'jumlahnonyatim8b' => $jumlahnonyatim8b,
            'jumlahnonyatim8c' => $jumlahnonyatim8c,
            'jumlahnonyatim8d' => $jumlahnonyatim8d,
            'jumlahnonyatim8e' => $jumlahnonyatim8e,
            'jumlahnonyatim8f' => $jumlahnonyatim8f,
            'jumlahnonyatim9a' => $jumlahnonyatim9a,
            'jumlahnonyatim9b' => $jumlahnonyatim9b,
            'jumlahnonyatim9c' => $jumlahnonyatim9c,
            'jumlahnonyatim9d' => $jumlahnonyatim9d,
            'jumlahnonyatim9e' => $jumlahnonyatim9e,
            'jumlahnonyatim9f' => $jumlahnonyatim9f,
            'jumlahnonyatim10a' => $jumlahnonyatim10a,
            'jumlahnonyatim10b' => $jumlahnonyatim10b,
            'jumlahnonyatim10c' => $jumlahnonyatim10c,
            'jumlahnonyatim10d' => $jumlahnonyatim10d,
            'jumlahnonyatim10e' => $jumlahnonyatim10e,
            'jumlahnonyatim10f' => $jumlahnonyatim10f,
            'jumlahnonyatim11a' => $jumlahnonyatim11a,
            'jumlahnonyatim11b' => $jumlahnonyatim11b,
            'jumlahnonyatim11c' => $jumlahnonyatim11c,
            'jumlahnonyatim11d' => $jumlahnonyatim11d,
            'jumlahnonyatim11e' => $jumlahnonyatim11e,
            'jumlahnonyatim11f' => $jumlahnonyatim11f,
            'jumlahnonyatim12a' => $jumlahnonyatim12a,
            'jumlahnonyatim12b' => $jumlahnonyatim12b,
            'jumlahnonyatim12c' => $jumlahnonyatim12c,
            'jumlahnonyatim12d' => $jumlahnonyatim12d,
            'jumlahnonyatim12e' => $jumlahnonyatim12e,
            'jumlahnonyatim12f' => $jumlahnonyatim12f,
            'jumlahasrama7a' => $jumlahasrama7a,
            'jumlahasrama7b' => $jumlahasrama7b,
            'jumlahasrama7c' => $jumlahasrama7c,
            'jumlahasrama7d' => $jumlahasrama7d,
            'jumlahasrama7e' => $jumlahasrama7e,
            'jumlahasrama7f' => $jumlahasrama7f,
            'jumlahasrama8a' => $jumlahasrama8a,
            'jumlahasrama8b' => $jumlahasrama8b,
            'jumlahasrama8c' => $jumlahasrama8c,
            'jumlahasrama8d' => $jumlahasrama8d,
            'jumlahasrama8e' => $jumlahasrama8e,
            'jumlahasrama8f' => $jumlahasrama8f,
            'jumlahasrama9a' => $jumlahasrama9a,
            'jumlahasrama9b' => $jumlahasrama9b,
            'jumlahasrama9c' => $jumlahasrama9c,
            'jumlahasrama9d' => $jumlahasrama9d,
            'jumlahasrama9e' => $jumlahasrama9e,
            'jumlahasrama9f' => $jumlahasrama9f,
            'jumlahasrama10a' => $jumlahasrama10a,
            'jumlahasrama10b' => $jumlahasrama10b,
            'jumlahasrama10c' => $jumlahasrama10c,
            'jumlahasrama10d' => $jumlahasrama10d,
            'jumlahasrama10e' => $jumlahasrama10e,
            'jumlahasrama10f' => $jumlahasrama10f,
            'jumlahasrama11a' => $jumlahasrama11a,
            'jumlahasrama11b' => $jumlahasrama11b,
            'jumlahasrama11c' => $jumlahasrama11c,
            'jumlahasrama11d' => $jumlahasrama11d,
            'jumlahasrama11e' => $jumlahasrama11e,
            'jumlahasrama11f' => $jumlahasrama11f,
            'jumlahasrama12a' => $jumlahasrama12a,
            'jumlahasrama12b' => $jumlahasrama12b,
            'jumlahasrama12c' => $jumlahasrama12c,
            'jumlahasrama12d' => $jumlahasrama12d,
            'jumlahasrama12e' => $jumlahasrama12e,
            'jumlahasrama12f' => $jumlahasrama12f,
            'jumlahnonasrama7a' => $jumlahnonasrama7a,
            'jumlahnonasrama7b' => $jumlahnonasrama7b,
            'jumlahnonasrama7c' => $jumlahnonasrama7c,
            'jumlahnonasrama7d' => $jumlahnonasrama7d,
            'jumlahnonasrama7e' => $jumlahnonasrama7e,
            'jumlahnonasrama7f' => $jumlahnonasrama7f,
            'jumlahnonasrama8a' => $jumlahnonasrama8a,
            'jumlahnonasrama8b' => $jumlahnonasrama8b,
            'jumlahnonasrama8c' => $jumlahnonasrama8c,
            'jumlahnonasrama8d' => $jumlahnonasrama8d,
            'jumlahnonasrama8e' => $jumlahnonasrama8e,
            'jumlahnonasrama8f' => $jumlahnonasrama8f,
            'jumlahnonasrama9a' => $jumlahnonasrama9a,
            'jumlahnonasrama9b' => $jumlahnonasrama9b,
            'jumlahnonasrama9c' => $jumlahnonasrama9c,
            'jumlahnonasrama9d' => $jumlahnonasrama9d,
            'jumlahnonasrama9e' => $jumlahnonasrama9e,
            'jumlahnonasrama9f' => $jumlahnonasrama9f,
            'jumlahnonasrama10a' => $jumlahnonasrama10a,
            'jumlahnonasrama10b' => $jumlahnonasrama10b,
            'jumlahnonasrama10c' => $jumlahnonasrama10c,
            'jumlahnonasrama10d' => $jumlahnonasrama10d,
            'jumlahnonasrama10e' => $jumlahnonasrama10e,
            'jumlahnonasrama10f' => $jumlahnonasrama10f,
            'jumlahnonasrama11a' => $jumlahnonasrama11a,
            'jumlahnonasrama11b' => $jumlahnonasrama11b,
            'jumlahnonasrama11c' => $jumlahnonasrama11c,
            'jumlahnonasrama11d' => $jumlahnonasrama11d,
            'jumlahnonasrama11e' => $jumlahnonasrama11e,
            'jumlahnonasrama11f' => $jumlahnonasrama11f,
            'jumlahnonasrama12a' => $jumlahnonasrama12a,
            'jumlahnonasrama12b' => $jumlahnonasrama12b,
            'jumlahnonasrama12c' => $jumlahnonasrama12c,
            'jumlahnonasrama12d' => $jumlahnonasrama12d,
            'jumlahnonasrama12e' => $jumlahnonasrama12e,
            'jumlahnonasrama12f' => $jumlahnonasrama12f,
            'jumlahagk7a' => $jumlahagk7a,
            'jumlahagk7b' => $jumlahagk7b,
            'jumlahagk7c' => $jumlahagk7c,
            'jumlahagk7d' => $jumlahagk7d,
            'jumlahagk7e' => $jumlahagk7e,
            'jumlahagk7f' => $jumlahagk7f,
            'jumlahagk8a' => $jumlahagk8a,
            'jumlahagk8b' => $jumlahagk8b,
            'jumlahagk8c' => $jumlahagk8c,
            'jumlahagk8d' => $jumlahagk8d,
            'jumlahagk8e' => $jumlahagk8e,
            'jumlahagk8f' => $jumlahagk8f,
            'jumlahagk9a' => $jumlahagk9a,
            'jumlahagk9b' => $jumlahagk9b,
            'jumlahagk9c' => $jumlahagk9c,
            'jumlahagk9d' => $jumlahagk9d,
            'jumlahagk9e' => $jumlahagk9e,
            'jumlahagk9f' => $jumlahagk9f,
            'jumlahagk10a' => $jumlahagk10a,
            'jumlahagk10b' => $jumlahagk10b,
            'jumlahagk10c' => $jumlahagk10c,
            'jumlahagk10d' => $jumlahagk10d,
            'jumlahagk10e' => $jumlahagk10e,
            'jumlahagk10f' => $jumlahagk10f,
            'jumlahagk11a' => $jumlahagk11a,
            'jumlahagk11b' => $jumlahagk11b,
            'jumlahagk11c' => $jumlahagk11c,
            'jumlahagk11d' => $jumlahagk11d,
            'jumlahagk11e' => $jumlahagk11e,
            'jumlahagk11f' => $jumlahagk11f,
            'jumlahagk12a' => $jumlahagk12a,
            'jumlahagk12b' => $jumlahagk12b,
            'jumlahagk12c' => $jumlahagk12c,
            'jumlahagk12d' => $jumlahagk12d,
            'jumlahagk12e' => $jumlahagk12e,
            'jumlahagk12f' => $jumlahagk12f,
            'jumlahnonagk7a' => $jumlahnonagk7a,
            'jumlahnonagk7b' => $jumlahnonagk7b,
            'jumlahnonagk7c' => $jumlahnonagk7c,
            'jumlahnonagk7d' => $jumlahnonagk7d,
            'jumlahnonagk7e' => $jumlahnonagk7e,
            'jumlahnonagk7f' => $jumlahnonagk7f,
            'jumlahnonagk8a' => $jumlahnonagk8a,
            'jumlahnonagk8b' => $jumlahnonagk8b,
            'jumlahnonagk8c' => $jumlahnonagk8c,
            'jumlahnonagk8d' => $jumlahnonagk8d,
            'jumlahnonagk8e' => $jumlahnonagk8e,
            'jumlahnonagk8f' => $jumlahnonagk8f,
            'jumlahnonagk9a' => $jumlahnonagk9a,
            'jumlahnonagk9b' => $jumlahnonagk9b,
            'jumlahnonagk9c' => $jumlahnonagk9c,
            'jumlahnonagk9d' => $jumlahnonagk9d,
            'jumlahnonagk9e' => $jumlahnonagk9e,
            'jumlahnonagk9f' => $jumlahnonagk9f,
            'jumlahnonagk10a' => $jumlahnonagk10a,
            'jumlahnonagk10b' => $jumlahnonagk10b,
            'jumlahnonagk10c' => $jumlahnonagk10c,
            'jumlahnonagk10d' => $jumlahnonagk10d,
            'jumlahnonagk10e' => $jumlahnonagk10e,
            'jumlahnonagk10f' => $jumlahnonagk10f,
            'jumlahnonagk11a' => $jumlahnonagk11a,
            'jumlahnonagk11b' => $jumlahnonagk11b,
            'jumlahnonagk11c' => $jumlahnonagk11c,
            'jumlahnonagk11d' => $jumlahnonagk11d,
            'jumlahnonagk11e' => $jumlahnonagk11e,
            'jumlahnonagk11f' => $jumlahnonagk11f,
            'jumlahnonagk12a' => $jumlahnonagk12a,
            'jumlahnonagk12b' => $jumlahnonagk12b,
            'jumlahnonagk12c' => $jumlahnonagk12c,
            'jumlahnonagk12d' => $jumlahnonagk12d,
            'jumlahnonagk12e' => $jumlahnonagk12e,
            'jumlahnonagk12f' => $jumlahnonagk12f,
            'totalsantri'=> $totalsantri,
            'totalsantribanin'=> $totalsantribanin,
            'totalsantribanat'=> $totalsantribanat,
            'totalsantrima'=> $totalsantrima,
            'totalsantribaninma'=> $totalsantribaninma,
            'totalsantribanatma'=> $totalsantribanatma,
            'totalsantrimts'=> $totalsantrimts,
            'totalsantribaninmts'=> $totalsantribaninmts,
            'totalsantribanatmts'=> $totalsantribanatmts,
            'totalsantrimi'=> $totalsantrimi,
            'totalsantribaninmi'=> $totalsantribaninmi,
            'totalsantribanatmi'=> $totalsantribanatmi,
            'totalsantrira'=> $totalsantrira,
            'totalsantribaninra'=> $totalsantribaninra,
            'totalsantribanatra'=> $totalsantribanatra,
            'totalyatim'=> $totalyatim,
            'totalyatimbanin'=> $totalyatimbanin,
            'totalyatimbanat'=> $totalyatimbanat,
            'totalyatimma'=> $totalyatimma,
            'totalyatimbaninma'=> $totalyatimbaninma,
            'totalyatimbanatma'=> $totalyatimbanatma,
            'totalyatimmts'=> $totalyatimmts,
            'totalyatimbaninmts'=> $totalyatimbaninmts,
            'totalyatimbanatmts'=> $totalyatimbanatmts,
            'totalyatimmi'=> $totalyatimmi,
            'totalyatimbaninmi'=> $totalyatimbaninmi,
            'totalyatimbanatmi'=> $totalyatimbanatmi,
            'totalyatimra'=> $totalyatimra,
            'totalyatimbaninra'=> $totalyatimbaninra,
            'totalyatimbanatra'=> $totalyatimbanatra,
            'totalnonyatim'=> $totalnonyatim,
            'totalnonyatimbanin'=> $totalnonyatimbanin,
            'totalnonyatimbanat'=> $totalnonyatimbanat,
            'totalnonyatimma'=> $totalnonyatimma,
            'totalnonyatimbaninma'=> $totalnonyatimbaninma,
            'totalnonyatimbanatma'=> $totalnonyatimbanatma,
            'totalnonyatimmts'=> $totalnonyatimmts,
            'totalnonyatimbaninmts'=> $totalnonyatimbaninmts,
            'totalnonyatimbanatmts'=> $totalnonyatimbanatmts,
            'totalnonyatimmi'=> $totalnonyatimmi,
            'totalnonyatimbaninmi'=> $totalnonyatimbaninmi,
            'totalnonyatimbanatmi'=> $totalnonyatimbanatmi,
            'totalnonyatimra'=> $totalnonyatimra,
            'totalnonyatimbaninra'=> $totalnonyatimbaninra,
            'totalnonyatimbanatra'=> $totalnonyatimbanatra,
            'totalasrama'=> $totalasrama,
            'totalasramabanin'=> $totalasramabanin,
            'totalasramabanat'=> $totalasramabanat,
            'totalasramama'=> $totalasramama,
            'totalasramabaninma'=> $totalasramabaninma,
            'totalasramabanatma'=> $totalasramabanatma,
            'totalasramamts'=> $totalasramamts,
            'totalasramabaninmts'=> $totalasramabaninmts,
            'totalasramabanatmts'=> $totalasramabanatmts,
            'totalasramami'=> $totalasramami,
            'totalasramabaninmi'=> $totalasramabaninmi,
            'totalasramabanatmi'=> $totalasramabanatmi,
            'totalasramara'=> $totalasramara,
            'totalasramabaninra'=> $totalasramabaninra,
            'totalasramabanatra'=> $totalasramabanatra,
            'totalnonasrama'=> $totalnonasrama,
            'totalnonasramabanin'=> $totalnonasramabanin,
            'totalnonasramabanat'=> $totalnonasramabanat,
            'totalnonasramama'=> $totalnonasramama,
            'totalnonasramabaninma'=> $totalnonasramabaninma,
            'totalnonasramabanatma'=> $totalnonasramabanatma,
            'totalnonasramamts'=> $totalnonasramamts,
            'totalnonasramabaninmts'=> $totalnonasramabaninmts,
            'totalnonasramabanatmts'=> $totalnonasramabanatmts,
            'totalnonasramami'=> $totalnonasramami,
            'totalnonasramabaninmi'=> $totalnonasramabaninmi,
            'totalnonasramabanatmi'=> $totalnonasramabanatmi,
            'totalnonasramara'=> $totalnonasramara,
            'totalnonasramabaninra'=> $totalnonasramabaninra,
            'totalnonasramabanatra'=> $totalnonasramabanatra,
            'totalagk'=> $totalagk,
            'totalagkbanin'=> $totalagkbanin,
            'totalagkbanat'=> $totalagkbanat,
            'totalagkma'=> $totalagkma,
            'totalagkbaninma'=> $totalagkbaninma,
            'totalagkbanatma'=> $totalagkbanatma,
            'totalagkmts'=> $totalagkmts,
            'totalagkbaninmts'=> $totalagkbaninmts,
            'totalagkbanatmts'=> $totalagkbanatmts,
            'totalagkmi'=> $totalagkmi,
            'totalagkbaninmi'=> $totalagkbaninmi,
            'totalagkbanatmi'=> $totalagkbanatmi,
            'totalagkra'=> $totalagkra,
            'totalagkbaninra'=> $totalagkbaninra,
            'totalagkbanatra'=> $totalagkbanatra,
            'totalnonagk'=> $totalnonagk,
            'totalnonagkbanin'=> $totalnonagkbanin,
            'totalnonagkbanat'=> $totalnonagkbanat,
            'totalnonagkma'=> $totalnonagkma,
            'totalnonagkbaninma'=> $totalnonagkbaninma,
            'totalnonagkbanatma'=> $totalnonagkbanatma,
            'totalnonagkmts'=> $totalnonagkmts,
            'totalnonagkbaninmts'=> $totalnonagkbaninmts,
            'totalnonagkbanatmts'=> $totalnonagkbanatmts,
            'totalnonagkmi'=> $totalnonagkmi,
            'totalnonagkbaninmi'=> $totalnonagkbaninmi,
            'totalnonagkbanatmi'=> $totalnonagkbanatmi,
            'totalnonagkra'=> $totalnonagkra,
            'totalnonagkbaninra'=> $totalnonagkbaninra,
            'totalnonagkbanatra'=> $totalnonagkbanatra,
            'title' => 'Rekap Santri',
        ]);
    }

    public function santrima()
    {
        return view('dashboard.santris.index', [
            'santris' => Santri::whereBetween('kelas', ['10','12'])
                                ->orderBy('kelas', 'asc')
                                ->orderBy('kelas_paralel', 'asc')
                                ->orderBy('name', 'asc')
                                ->get(),
            'title' => 'Santri MA',
        ]);
    }

    public function santrimts()
    {
        return view('dashboard.santris.index', [
            'santris' => Santri::whereBetween('kelas', ['7','9'])
                                ->orderBy('kelas', 'asc')
                                ->orderBy('kelas_paralel', 'asc')
                                ->orderBy('name', 'asc')
                                ->get(),
            'title' => 'Santri MTs',
        ]);
    }

    public function santrimi()
    {
        return view('dashboard.santris.index', [
            'santris' => Santri::whereBetween('kelas', ['1','6'])
                                ->orderBy('kelas', 'asc')
                                ->orderBy('kelas_paralel', 'asc')
                                ->orderBy('name', 'asc')
                                ->get(),
            'title' => 'Santri MI',
        ]);
    }

    public function santrira()
    {
        return view('dashboard.santris.index', [
            'santris' => Santri::where('kelas', '0')
                                ->orderBy('kelas', 'asc')
                                ->orderBy('kelas_paralel', 'asc')
                                ->orderBy('name', 'asc')
                                ->get(),
            'title' => 'Santri RA',
        ]);
    }

    public function santriyatim()
    {
        return view('dashboard.santris.index', [
            'santris' => Santri::where('yatim', 'Y')
                                ->orderBy('kelas', 'asc')
                                ->orderBy('kelas_paralel', 'asc')
                                ->orderBy('name', 'asc')
                                ->get(),
            'title' => 'Santri Yatim',
        ]);
    }

    public function santriasrama()
    {
        return view('dashboard.santris.index', [
            'santris' => Santri::where('asrama', 'Y')
                                ->orderBy('kelas', 'asc')
                                ->orderBy('kelas_paralel', 'asc')
                                ->orderBy('name', 'asc')
                                ->get(),            
            'title' => 'Santri Asrama',
        ]);
    }

    public function santriagk()
    {
        return view('dashboard.santris.index', [
            'santris' => Santri::where('agk', 'Y')
                                ->orderBy('kelas', 'asc')
                                ->orderBy('kelas_paralel', 'asc')
                                ->orderBy('name', 'asc')
                                ->get(),
            'title' => 'Santri AGK',
        ]);
    }
}
