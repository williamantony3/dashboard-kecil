@extends('base')
@section('content')

<h2>INI BUAT UPDATE</h2>
<div class="pull-right" style="padding-left: 2vw">
    <a class="btn btn-primary" href="{{ route('guru.index') }}"> Back</a>
</div>
<div class="row">
    <div class="col md 12">
        <div style="padding: 2vw">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <table class="table table-bordered table-dark" >
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Guru</th>
                </tr>
                <tr>
                    <td>{{ $guru->id }}</td>
                    <td>{{ $guru->nama }}</td>
                    <td>{{ $guru->umur }}</td>
                </tr>
            </table>

            <form action="{{ route('guru.update', $guru->id) }}" method="POST">
                @csrf
                @method('PUT')

                 <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Name:</strong>
                            <input type="text" name="nama" class="form-control" placeholder="Name">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>umur:</strong>
                            <input type="text" name="umur" class="form-control" placeholder="umur">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                            <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>
@endsection
