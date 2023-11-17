@extends('../layout')

@section('title', 'Edit Siswa')

@section('content')
    <h1>Edit Siswa</h1>
    <div class="container">
        <form action="{{ route('kelas.update', $kelas->id) }}" method="post">
            @csrf
            @method('PUT')
            <div class="from-group">
                <label class="form-label" for="id">Nama</label>
                <input type="text" name="nama" id="nama" class="form-control @error('nama') is-invalid @enderror"
                    value="{{ $kelas->nama }}">
                @error('nama')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="mt-2">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="{{ route('kelas.index') }}" class="btn btn-secondary">Cancel</a>
            </div>
        </form>
    </div>
@endsection
