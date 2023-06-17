@extends('template')
@section('main')
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nama Hewan</th>
                {{-- <th scope="col">Nama Buah</th> --}}
            </tr>
        </thead>

        {{-- @php
            var_dump($data);
        @endphp --}}
        <tbody>
            {{-- @foreach ($data as $item)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $item }}</td>
                </tr>
            @endforeach --}}

        </tbody>
    </table>
@endsection
