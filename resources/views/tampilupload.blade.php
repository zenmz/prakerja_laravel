@extends('template')
@section('main')
<div>
    <form action="{{ route('upload.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <label for="exampleFormControlFile1">Upload Gambar</label>
          <input type="file" class="form-control-file" name="image">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>
<div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Image</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td><img src="{{ asset('storage/'.$item->image) }}" alt="" width="150px"></td>
                    <td>
                        {{-- <a href="{{ url('siswa/'.$item->id.'/edit') }}" class="btn btn-warning">Edit Data</a> --}}
                        <a href="{{ route('siswa.edit', $item->id) }}" class="btn btn-warning">Edit Data</a>
                        <form action="{{ route('siswa.destroy', $item->id) }}" method="POST">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger">Delete Data</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
    
@endsection