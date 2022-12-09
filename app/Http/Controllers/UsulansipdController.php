<?php

namespace App\Http\Controllers;

use App\Imports\UsulanImport;
use App\Models\Usulansipd;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class UsulansipdController extends Controller
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Usulansipd  $usulansipd
     * @return \Illuminate\Http\Response
     */
    public function show(Usulansipd $usulansipd)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Usulansipd  $usulansipd
     * @return \Illuminate\Http\Response
     */
    public function edit(Usulansipd $usulansipd)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Usulansipd  $usulansipd
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Usulansipd $usulansipd)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Usulansipd  $usulansipd
     * @return \Illuminate\Http\Response
     */
    public function destroy(Usulansipd $usulansipd)
    {
        //
    }


    public function import(Request $request)
    {
        $request->validate([
            'file' => 'required|file'
        ]);
        
        Excel::import(new UsulanImport, $request->file('file'));

        return redirect('/import-usulan')->with('success','Data Usulan Behasil Di Upload');
    }
}
