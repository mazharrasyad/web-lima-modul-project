<?php

namespace App\Http\Controllers;

use App\Models\Membertim;
use App\Models\Tim;
use App\Models\Mahasiswa;
use App\Models\Peran;
use Illuminate\Http\Request;

class MembertimController extends Controller
{
    public function index()
    {
        $tims = Tim::all();
        $membertims = Membertim::all();

        return view('membertims.index', compact('tims', 'membertims'));
    }

    public function create()
    {
        $tims = Tim::all();
        $mahasiswas = Mahasiswa::all();
        $perans = Peran::all();

        return view('membertims.create', compact('tims', 'mahasiswas', 'perans'));
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'tim_id' => 'required', 
            'mahasiswa_id' => 'required',
            'peran_id' => 'required',
            'tanggung_jawab' => 'required',
        ]);

        Membertim::create($request->all());

        return redirect()->route('membertim.index')->withMessage('Data Membertim Berhasil diTambah');
    }

    public function show($id)
    {
        $membertim = Membertim::findOrFail($id);
        $tims = Tim::all();

        return view('membertims.show', compact('membertim', 'tims'));
    }

    public function edit($id)
    {
        $tims = Tim::all();
        $perans = Peran::all();
        $mahasiswas = Mahasiswa::all();
        $membertim = Membertim::findOrFail($id);        

        return view('membertims.edit', compact('tims', 'mahasiswas', 'perans', 'membertim'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'tim_id' => 'required', 
            'mahasiswa_id' => 'required',
            'peran_id' => 'required',
            'tanggung_jawab' => 'required',
        ]);

        $membertim = Membertim::findOrFail($id);

        $membertim->update($request->all());

        return redirect()->route('membertim.index')->withMessage('Data Membertim berhasil diUbah');
    }

    public function destroy($id)
    {
        $membertim = Membertim::findOrFail($id);
        $membertim->delete();

        return redirect()->route('membertim.index')->withMessage('Data Membertim berhasil diHapus');
    }
}
