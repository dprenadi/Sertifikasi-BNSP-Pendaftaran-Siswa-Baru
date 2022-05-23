<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;
use \Cviebrock\EloquentSluggable\Services\SlugService;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.siswa.index', [
            //ambil database
            'siswas' => Siswa::where('user_id', auth()->user()->id)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.siswa.create', [
            'siswas' => Siswa::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'user_id' => 'required',
            'nama' => 'required|max:255',
            'asal_sekolah' => 'required|max:255',
            'tempat_lahir' => 'required|max:255',
            'tgl_lahir' => 'required|max:255',
            'nem' => 'required|max:255',
            'status' => 'required',
        ]);

        $validatedData['user_id'];

        Siswa::create($validatedData);

        return redirect('/status')->with('success', 'Anda sudah terdaftar');

        // if('nem' >= 70){
        //     return redirect('/home')->with('success', 'anda telah diterima!');
        // } else {
        //     return redirect('/home')->with('success', 'maaf, anda belum lolos!');
        // }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Arsip  $arsip
     * @return \Illuminate\Http\Response
     */
    public function show(Siswa $siswa)
    {
        return view('dashboard.siswa.show', [
            'siswa' => $siswa
        ]);
    }
    public function status()
    {
        return view('status', [
            'siswas' => Siswa::all()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Arsip  $arsip
     * @return \Illuminate\Http\Response
     */
    public function edit(Siswa $siswa)
    {
        return view('dashboard.siswa.edit', [
            'siswa' => $siswa,
            'siswas' => Siswa::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Arsip  $arsip
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Siswa $siswa)
    {
        $validatedData = $request->validate([
                'nama' => 'required|max:255',
                'asal_sekolah' => 'required|max:255',
                'tempat_lahir' => 'required|max:255',
                'tgl_lahir' => 'required|max:255',
                'nem' => 'required|max:255',
                'status' => 'required',
            ]);
            

        $validatedData['user_id'] = auth()->user()->id;

        Siswa::where('id', $siswa->id)
        ->update($validatedData);

        return redirect('/dashboard/siswas')->with('success', 'data has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Arsip  $arsip
     * @return \Illuminate\Http\Response
     */
    public function destroy(Siswa $siswa)
    {
        Siswa::destroy($siswa->id);

        return redirect('/dashboard/siswas')->with('success', 'data has been deleted!');
    }

}
