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
                    <div class="row" style="padding: 1vw">
                        <a href="{{ route('guru.edit', $guruTemp->id) }}" class="btn btn-warning">Update</a>
                        <form action="{{ route('guru.destroy', $guruTemp->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                    </div>
                </td>
            </tr>
            @endforeach
        </tr>
    </table>
</div>
@endsection
