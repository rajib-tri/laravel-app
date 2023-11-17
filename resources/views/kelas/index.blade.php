@extends('../layout')

@section('title','Data Siswa')

@section('content')
<table class="table">
    <h1>Data Siswa</h1>
    <a class="btn btn-success" href="{{route('kelas.create')}}">Tambah siswa</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">NO</th>
                <th scope="col">Nama</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($kelas as $index => $kelas)
            <tr>
                <td>{{ $index+1 }}</td>
                <td>{{ $kelas->nama }}</td>
                <td>
                    <div class="btn-group" role="group">
                        <div>
                            <a class="btn btn-warning me-2" href="{{ route('kelas.edit', $kelas->id) }}">Edit</a>
                        </div>
                        <form action="{{ route('kelas.destroy', $kelas->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">Hapus</button>
                        </form>
                    </div>
                </td>
                </div>
                </div>
            </tr>
            @endforeach
        </tbody>
    </table>
    @endsection