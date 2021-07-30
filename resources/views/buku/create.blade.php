@extends('base')
@section('content')
<!-- Header -->
    <!-- Header -->
    <div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <h6 class="h2 text-white d-inline-block mb-0">Tambah Buku</h6>
            </div>
            <div class="col-lg-6 col-5 text-right">
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--6">
      <div class="row">
        <div class="col">
          <div class="card">
            <div class="card-body">
              @if(\Session::has('alert-success'))
                <div class="alert alert-success">
                    <div>{{Session::get('alert-success')}}</div>
                </div>
              @endif
              @if(\Session::has('alert'))
                <div class="alert alert-danger">
                    <div>{{Session::get('alert')}}</div>
                </div>
              @endif
              @if ($errors->any())
                  <div class="alert alert-danger">
                      <ul>
                          @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                          @endforeach
                      </ul>
                  </div>
              @endif
              <form action="{{route('buku.store')}}" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                  <label for="nama" class="form-control-label">Nama</label>
                  <input class="form-control" type="text" id="nama" name="nama"/>
                </div>
                <div class="form-group">
                  <label for="Deskripsi" class="form-control-label">Deskripsi</label>
                  <textarea name="deskripsi" id="deskripsi" cols="30" rows="5" class="form-control"></textarea>
                </div>
                <div class="form-group">
                  <input type="submit" value="Simpan" class="btn btn-primary">
                  <input type="reset" value="Batal" class="btn btn-danger">
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection