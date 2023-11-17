@extends('../layout')

@section('title', 'Edit Siswa')

@section('content')
    <h1>Edit Siswa</h1>
    <div class="container">
        <form action="{{ route('siswa.update', $siswa->id) }}" method="post">
            @csrf
            @method('PUT')
            <div class="from-group">
                <label class="form-label" for="id">Nama</label>
                <input type="text" name="nama" id="nama" class="form-control @error('nama') is-invalid @enderror"
                    value="{{ $siswa->nama }}">
                @error('nama')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label class="form-label" for="nim">NIM</label>
                <input type="text" name="nim" id="nim" class="form-control @error('nim') is-invalid @enderror"
                    value="{{ $siswa->nim }}">
                @error('nim')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label class="form-label" for="nis">NISN</label>
                <input type="text" name="nis" id="nis" class="form-control @error('nis') is-invalid @enderror"
                    value="{{ $siswa->nis }}">
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
