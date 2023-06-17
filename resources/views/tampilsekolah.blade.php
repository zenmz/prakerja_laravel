@extends('template')
@section('main')
    <h1>Data Sekolah</h1>
    {{-- <a href="{{ url('siswa/create') }}" class="btn btn-primary">Tambah Data URL</a> --}}
    {{-- <a href="{{ route('siswa.create') }}" class="btn btn-primary">Tambah Data</a> --}}
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nama Sekolah</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $item->namasekolah }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
