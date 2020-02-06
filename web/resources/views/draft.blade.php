<select name="project_id" id="project_id" class="btn btn-secondary dropdown-toggle" type="button">     
    <option value="" disabled selected>Pilih Project</option>                           
    @foreach ($projects as $project)
        <option value="{{ $project->id }}">{{ $project->nama }}</option>
    @endforeach                       
</select>