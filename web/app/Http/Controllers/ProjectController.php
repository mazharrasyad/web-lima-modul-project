<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Semester;
use App\Models\Scrummaster;
use App\Models\Tim;
use App\Models\Membertim;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $semesters = Semester::all();
        $projects = Project::all();

        return view('projects.index', compact('semesters', 'projects'));
    }

    public function create()
    {
        $semesters = Semester::all();
        $scrummasters = Scrummaster::all();

        return view('projects.create', compact('semesters', 'scrummasters'));
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'nama' => 'required',
            'deskripsi' => 'required',
            'tanggal_mulai' => 'required',
            'tanggal_akhir' => 'required',
            'jumlah_sprint' => 'required',
            'budget' => 'required',
            'semester_id' => 'required',             
            'scrummaster_id' => 'required',            
        ]);
        
        Project::create($request->all());

        return redirect()->route('project.index')->withMessage('Data Project Berhasil diTambah');
        // return response()->json($request, 200);
    }

    public function show($id)
    {
        $project = Project::findOrFail($id);
        $semesters = Semester::all();
        $scrummasters = Scrummaster::all();

        return view('projects.show', compact('project', 'semesters', 'scrummasters'));
    }

    public function edit($id)
    {
        $project = Project::findOrFail($id);
        $semesters = Semester::all();
        $scrummasters = Scrummaster::all();

        return view('projects.edit', compact('project', 'semesters', 'scrummasters'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'nama' => 'required',
            'deskripsi' => 'required',
            'tanggal_mulai' => 'required',
            'tanggal_akhir' => 'required',
            'jumlah_sprint' => 'required',
            'budget' => 'required',
            'semester_id' => 'required',             
            'scrummaster_id' => 'required',            
        ]);

        $project = Project::findOrFail($id);

        $project->update($request->all());

        return redirect()->route('project.index')->withMessage('Data Project berhasil diUbah');
    }

    public function destroy($id)
    {
        $project = Project::findOrFail($id);
        $project->delete();

        return redirect()->route('project.index')->withMessage('Data Project berhasil diHapus');
    }

    public function tim($id)
    {
        $project = Project::findOrFail($id);
        $tims = Tim::all();
        $membertims = Membertim::all();

        return view('projects.tim', compact('project', 'tims', 'membertims'));
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
