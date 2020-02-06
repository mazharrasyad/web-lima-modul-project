<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Semester;
use App\Models\Mahasiswa;
use App\Models\Scrummaster;
use App\Models\Tim;
use App\Models\Membertim;
use Illuminate\Http\Request;

class PilihController extends Controller
{
    public function tim($id)
    {
        $project = Project::findOrFail($id);
        $tims = Tim::all();
        $mahasiswas = Mahasiswa::all();
        $membertims = Membertim::all();

        return view('projects.tim', compact('project', 'tims', 'mahasiswas', 'membertims'));
    }

    public function pilih(Request $request, $id)
    {
        $this->validate($request,[
            'tim_id' => 'required',
        ]);

        $project = Project::findOrFail($id);
        $project->update($request->all());
        return redirect()->route('project.index')->withMessage('Tim Berhasil diPilih');
    }

    public function membertim($id)
    {
        $project = Project::findOrFail($id);
        $tims = Tim::all();
        $membertims = Membertim::all();

        return view('projects.membertim', compact('project', 'tims', 'membertims'));
    }
}
