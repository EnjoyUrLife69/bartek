<?php

namespace App\Http\Controllers;

use App\Models\Kabupaten;
use Illuminate\Http\Request;

class KabupatenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kabupaten = Kabupaten::all();
        return view('kabupaten.index', compact('kabupaten'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kabupaten.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $kabupaten = new Kabupaten;
        $kabupaten->nama_kabupaten = $request->nama_kabupaten;
        $kabupaten->save();
        return redirect()->route('kabupaten.index')
            ->with('success', 'data berhasil di tambahkan');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kabupaten  $kabupaten
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kabupaten = Kabupaten::FindOrFail($id);
        return view('kabupaten.show', compact('kabupaten'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kabupaten  $kabupaten
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kabupaten = Kabupaten::FindOrFail($id);
        return view('kabupaten.edit', compact('kabupaten'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kabupaten  $kabupaten
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $kabupaten = Kabupaten::FindOrFail($id);
        $kabupaten->nama_kabupaten = $request->nama_kabupaten;
        $kabupaten->save();
        return redirect()->route('kabupaten.index')
            ->with('success', 'data berhasil di ubah');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kabupaten  $kabupaten
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kabupaten = Kabupaten::FindOrFail($id);
        $kabupaten->delete();
        return redirect()->route('kabupaten.index')
            ->with('success', 'data berhasil dihapus');

    }
}
