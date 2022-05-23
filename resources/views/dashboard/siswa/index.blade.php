@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Data Siswa</h1>
      </div>

      @if (session()->has('success'))
          <div class="alert alert-info" role="alert">
          {{ session('success') }}
          </div>
      @endif

      <div class="table-responsive">
        <a href="/dashboard/siswas/create" class="btn btn-sm btn-primary mb-3">Add Data Siswa</a>
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Nama Siswa</th>
              <th scope="col">Asal Sekolah</th>
              <th scope="col">Tempat Lahir</th>
              <th scope="col">Tanggal Lahir</th>
              <th scope="col">NEM</th>
              <th scope="col">Status</th>
              <th scope="col">Ubah Status</th>
            </tr>
          </thead>
          <tbody>
              @foreach ($siswas as $siswa)    
              <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $siswa->nama }}</td>
                <td>{{ $siswa->asal_sekolah }}</td>
                <td>{{ $siswa->tempat_lahir }}</td>
                <td>{{ $siswa->tgl_lahir }}</td>
                <td>{{ $siswa->nem }}</td>
                <td>{{ $siswa->status }}</td>
                <td><a href="/dashboard/siswas/{{ $siswa->nama }}/edit" class="btn btn-sm btn-outline-info">Ubah Status</span></a></td>
                <td>
                    <a href="/dashboard/siswas/{{ $siswa->nama }}" class="badge bg-info"><span data-feather="eye"></span></a>
                    <a href="/dashboard/siswas/{{ $siswa->nama }}/edit" class="badge bg-warning"><span data-feather="edit"></span></a>

                    <form action="/dashboard/siswas/{{ $siswa->nama }}" method="POST" class="d-inline">
                    @method('delete')
                    @csrf
                    <button class="badge bg-danger border-0" onclick="return confirm('are you sure?')"><span data-feather="x-circle"></span></button>
                    </form>
                    
                </td>
              </tr>
              @endforeach
          </tbody>
        </table>
      </div>

@endsection