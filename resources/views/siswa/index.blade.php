@extends('../layout')

@section('title','Data Siswa')

@section('content')
<table class="table">
  <h1>Data Siswa</h1>
  <a class="btn btn-success" href="{{route('siswa.create')}}">Tambah siswa</a>
  <table class="table">
      <thead>
          <tr>
              <th scope="col">NO</th>
              <th scope="col">Nama</th>
              <th scope="col">NIM</th>
              <th scope="col">NISN</th>
          </tr>
      </thead>
      <tbody>
          @foreach ($siswas as $index => $siswa)
              <tr>
                <td>{{ $index+1 }}</td>
                <td>{{ $siswa->nama }}</td>
                <td>{{ $siswa->nim }}</td>
                <td>{{ $siswa->nis }}</td>
                <td>
                    <div class="btn-group" role="group">
                        <div>
                            <a class="btn btn-warning me-2" href="{{ route('siswa.edit', $siswa->id) }}">Edit</a>
                        </div>
                        <form action="{{ route('siswa.destroy', $siswa->id) }}" method="post">
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