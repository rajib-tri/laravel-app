@extends('../layout')

@section('title', 'Tambah Siswa')

@section('content')
    <h1>Tambah Siswa</h1>
    <div class="container">
        <form action="{{ route('siswa.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label class="form-label" for="nama">Nama</label>
                <input type="text" name="nama" id="nama" class="form-control @error('nama') is-invalid @enderror"
                    value="{{ old('nama') }}">
                @error('nama')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label class="form-label" for="nama">NIM</label>
                <input type="text" name="nim" id="nim" class="form-control @error('nim') is-invalid @enderror"
                    value="{{ old('nim') }}">
                @error('nim')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label class="form-label" for="nisn">NISN</label>
                <input type="text" name="nis" id="nis" class="form-control @error('nis') is-invalid @enderror"
                    value="{{ old('nis') }}">
                @error('nis')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="mt-2">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="{{ route('siswa.index') }}" class="btn btn-secondary">Cancel</a>
            </div>
        </form>
    </div>
@endsection