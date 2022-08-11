@extends('layouts.main')
@section('container')
<section id="services" class="services section-bg" style="padding-top: 100px;">
    <div class="container mt-4 mb-4">
        <div class="row row-cols-1 row-cols-md-2 g-4">
            @include('partials.profile')
            <div class="col" style="width: 700px">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title"><i class="bi bi-arrow-left px-2"><a href="/"></i>Profile</h5></a>
                  <hr width="100%" color="#c0c0c0">
                  <form action="">
                    @csrf
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Nama </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="validationCustom01" value={{ Auth::user()->name }} required>
                        </div>
                      </div>
                      <div class="row mb-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="validationCustom01" value={{ Auth::user()->email }} required>
                        </div>
                      </div>
    
                      <div class="row mb-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">No_Telp </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="validationCustom01" value="{{ Auth::user()->notelp }}" required>
                        </div>
                      </div>
    
                      <div class="row mb-3">
                        <label for="text" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="validationCustom01" value="{{ Auth::user()->jns_kelamin }}" required>
                        </div>
                      </div>
    
                      <div class="row mb-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Tgl Lahir</label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control" id="validationCustom01" value="{{ Auth::user()->tgl_lahir }}" required>
                        </div>
                      </div>
    
                      <div class="row mb-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Alamat </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="validationCustom01" value="{{ Auth::user()->address }}" required>
                        </div>
                      </div>
                  </form>
                  
              </div>
            </div>
          </div>
      </div>
    </div>

    {{-- <div class="row">
      <div class="container-fluid">
        <div class="box-header">
          <h3 class="box-title">Profile User</h3>
        </div>

        <div class="box-body">
          <table id="example1" class="table table-bordered table-striped" style="width: 100%;"> --}}
            {{-- <thead>
                <tr>
                    <th style="text-align: center;">#</th>
                    <th style="text-align: center;">Nama</th>
                    <th style="text-align: center;">Email</th>
                    <th style="text-align: center;">No Telp</th>
                    <th style="text-align: center;">Jenis Kelamin</th>
                    <th style="text-align: center;">Tanggal Lahir</th>
                    <th style="text-align: center;">Alamat</th>
                </tr>
            </thead> --}}
            {{-- <tbody>
              @php $no = 1; @endphp
              @foreach($data as $datas)
              <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $datas->name }}</td>
                <td>{{ $datas->email }}</td>
                <td>{{ $datas->notelp }}</td>
                <td>{{ $datas->jns_kelamin }}</td>
                <td>{{ $datas->tgl_lahir }}</td>
                <td>{{ $datas->address }}</td>
                <td>
                  <form action="2', $datas->id) }}" method="post">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <div class="btn-group" >
                        <a href="{{ route('edit_profile', $datas->id) }}" class=" btn btn-sm btn-warning" data-toggle="tooltip" title="Edit"><span class="glyphicon glyphicon-edit"></span></a>
                        <a href="{{ route('deleteProfile', $datas->id) }}" class="btn btn-sm btn-danger" type="submit" data-toggle="tooltip" title="Hapus"><span class="glyphicon glyphicon-trash"></span></a>
                    </div>

                </form>
                </td>
              </tr>
              @endforeach
            </tbody> --}}
          {{-- </table>
        </div>

        </div>
      </div>
    </div> --}}
    <!--modal logout-->
    <div class="modal fade" id="ModalLogout" tabindex="-1" aria-labelledby="ModalLogoutLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="ModalLogoutLabel">Log Out Akun <i class="bx bxs-lock-alt"></i></h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Apakah Anda yakin ingin keluar??
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success col-md-12 mt-3"><a href="{{ route('logout') }}"> Keluar </a></button>
                    <button type="button" class="btn btn-outline-success col-md-12 mt-3" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
  {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" 
  integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/8ae831de67.js" crossorigin="anonymous"></script> --}}
{{-- </body>
</html> --}}