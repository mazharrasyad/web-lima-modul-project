@extends('layouts.master')

@section('subtitle')
    Proyek
@endsection

@section('content')
  <div class="main-content">
    <!-- Page content -->
    <div class="container-fluid mt-4">
      <div class="row">
        
        <div class="col-xl-12">
          <div class="card bg-secondary shadow">
            <div class="card-header bg-white border-0">
              <div class="row align-items-center">
                <div class="col-8">
                  <h3 class="mb-0">PROYEK</h3>
                </div>
                <div class="col-4 text-right">
                  <a href="{{ url('/project/create') }}" class="btn btn-sm btn-primary">Tambah Data</a>
                </div>
              </div>
            </div>
            <form>
            <div class="card-body">              
                @include('layouts.message')
                <div class="pl-lg-4">
                  
                  <div class="row">
                    <div class="col-lg-3">
                      <div class="form-group">
                        <label class="form-control-label mr-4" for="pilih-semester-akademik">Pilih Tahun Akademik</label>                                                                       
                      </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="form-group">
                        <div class="dropdown">
                            <select onchange="pilih_tema()" name="semester_id" id="semester_id" class="btn btn-secondary dropdown-toggle" type="button">     
                                <option value="" disabled selected>Semester</option>                           
                                @foreach ($semesters as $semester)
                                    <option value="{{ $semester->id }}">{{ $semester->nama }}</option>
                                @endforeach                       
                            </select>
                          </div>
                        </div>
                    </div>
                  </div>

                </div>                
                    <!-- Table -->
                    <div class="row">
                      <div class="col">
                        <div class="card shadow">
                          <div class="card-header border-0">
                            <h3 class="mb-0">Proyek</h3>
                          </div>
                          <div class="table-responsive">
                            <table id="project" class="table align-items-center table-flush">
                              <thead class="thead-light">
                                <tr>
                                  <th scope="col">No</th>
                                  <th scope="col">Nama</th>
                                  <th scope="col">Scrum Master</th>
                                  <th scope="col">Status</th>
                                  <th scope="col">Persen</th>
                                  <th scope="col"></th>
                                </tr>
                              </thead>
                              <tbody>
                                <?php $nomor = 1; ?>
                                @foreach ($projects as $project)
                                <tr>                                 
                                  <td>{{ $nomor++ }}</td>
                                  <td hidden>{{ $project->semester_id }}</td>
                                  <td>{{ $project->nama }}</td>
                                  <td>{{ $project->scrummaster->nama }}</td>
                                  <td>                                    
                                      <span class="badge badge-dot mr-4">
                                        @if ($project->status == 'Baru')                                                                                
                                          <i class="bg-info"></i>{{ $project->status }}
                                        @elseif ($project->status == 'Proses')                                                                                
                                          <i class="bg-warning"></i>{{ $project->status }}
                                        @else 
                                          <i class="bg-success"></i>{{ $project->status }}
                                        @endif
                                      </span>     
                                  </td>
                                  <td>
                                    <div class="d-flex align-items-center">
                                        <span class="mr-2">{{ $project->persen }}%</span>
                                        <div>
                                          <div class="progress">
                                            @if (0 <= $project->persen && $project->persen <= 20)
                                              <div class="progress-bar bg-info" role="progressbar" aria-valuenow="{{ $project->persen }}" aria-valuemin="0" aria-valuemax="100" style="width: {{ $project->persen }}%;"></div>
                                            @elseif (21 <= $project->persen && $project->persen <= 80)
                                              <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="{{ $project->persen }}" aria-valuemin="0" aria-valuemax="100" style="width: {{ $project->persen }}%;"></div>
                                            @else
                                              <div class="progress-bar bg-success" role="progressbar" aria-valuenow="{{ $project->persen }}" aria-valuemin="0" aria-valuemax="100" style="width: {{ $project->persen }}%;"></div>
                                            @endif                                            
                                          </div>
                                        </div>
                                      </div>
                                  </td>
                                  <td>
                                    <form action="{{ route('project.destroy', $project->id) }}" method="post">
                                      {{ csrf_field() }}                                              
                                      <a class="btn btn-sm btn-icon-only text-light" href="{{ route('project.show', $project->id) }}" role="button" aria-haspopup="true" aria-expanded="false">
                                          <i class="ni ni-air-baloon text-blue"></i>
                                      </a>
                                      <a class="btn btn-sm btn-icon-only text-light" href="{{ route('project.edit', $project->id) }}" role="button" aria-haspopup="true" aria-expanded="false">
                                          <i class="ni ni-settings text-blue"></i>
                                      </a>
                                      <input type="hidden" name="_method" value="DELETE">
                                      <button onclick="return confirm('Apakah yakin dihapus?')" type="submit" value="Delete" class="btn btn-sm btn-icon-only text-light" role="button" aria-haspopup="true" aria-expanded="false">
                                          <i class="ni ni-basket text-blue"></i>
                                      </button>
                                    </form>
                                  </td>
                                </tr>
                                @endforeach
                              </tbody>
                            </table>
                          </div>
                        </div>
                      </div>
              </form>      
            </div>
          </div>
        </div>
      </div>
    @include('layouts.copyright')

    <script type="text/javascript">
      function pilih_tema() {
        var input, filter, table, tr, td, i;
        input = document.getElementById("semester_id");
        filter = input.value.toUpperCase();
        table = document.getElementById("project");
        tr = table.getElementsByTagName("tr");
        for (i = 0; i < tr.length; i++) {
          td = tr[i].getElementsByTagName("td")[1];
          if (td) {
            if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
              tr[i].style.display = "";
            } else {
              tr[i].style.display = "none";
            }
          }       
        }
      }
    </script>

@endsection