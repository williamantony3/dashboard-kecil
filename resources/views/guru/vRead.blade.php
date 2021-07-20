@extends('base')
@section('content')

<h2>INI BUAT VIEW</h2>
<div style="padding: 2vw">
    <div style="padding-bottom: 1vw">
        <a href="{{ route('guru.create') }}" class="btn btn-warning">Create</a>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered table-dark" >
        <tr>
            <th>No</th>
            <th>ID</th>
            <th>Nama</th>
            <th>Guru</th>
            <th>Action</th>
        </tr>
        @php
            $key=0;
        @endphp
        <tr>
            @foreach ($guru as $guruTemp)
            <tr>
                <td>{{ ++$key }}</td>
                <td>{{ $guruTemp->id }}</td>
                <td>{{ $guruTemp->nama }}</td>
                <td>{{ $guruTemp->umur }}</td>
                <td>
                    <div class="row">
                        <div class="col md 12">
                            <div>
                                <div class="pull-right">
                                    <a href="{{ url('/delete') }}" class="btn btn-warning">Delete</a>
                                    <a href="{{ url('/update') }}" class="btn btn-warning">Update</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
            @endforeach
        </tr>
    </table>
</div>
@endsection
