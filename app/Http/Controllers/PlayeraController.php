<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Playera;
class PlayeraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datplayeras = Playera::all();
        return view('playeras.index', ['playeras'=>$datplayeras]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('playeras.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datplayeras = request()->except('_token'); //@csrf
        Playera::insert($datplayeras);
        return redirect('playeras');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
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
        $dataplayeras = Playera::findOrfail($id);
        return view('playeras.edit', ['datplayera'=>$dataplayeras]);

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
        $dataplayeras = request()->except('_token', '_method'); //@csrf,method
        Playera::where('id', '=', $id)->update($dataplayeras);
        return redirect('playeras');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Playera::destroy($id);
        return redirect ('playeras');

    }
}
