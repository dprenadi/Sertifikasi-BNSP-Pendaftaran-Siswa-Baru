@extends('dashboard.layouts.main')

@section('container')
    <div class="container">
        <div class="row my-3">
            <div class="col-lg-5 mb-3">
                <div class="btn-group" role="group" aria-label="Basic outlined example">
                    <a href="/dashboard/siswas" class="btn btn-sm btn-outline-success"><span data-feather="arrow-left"></span> Back</a>
                    <a href="/dashboard/siswas/{{ $siswa->nama }}/edit" class="btn btn-sm btn-outline-warning"><span data-feather="edit"></span> Edit</a>
                    <form action="/dashboard/siswas/{{ $siswa->nama }}" method="POST" class="d-inline">
                    @method('delete')
                    @csrf
                    <button class="btn btn-sm btn-outline-danger" onclick="return confirm('are you sure?')"><span data-feather="x-circle"></span> Delete</button>
                    </form>
                </div>

                <ul class="list-group mt-3">
                    <li class="list-group-item list-group-item-info">Nama : {{ $siswa->nama }}</li>
                    <li class="list-group-item">Asal Sekolah : {{ $siswa->asal_sekolah }}</li>
                    <li class="list-group-item">Tempat Lahir : {{ $siswa->tempat_lahir }}</li>
                    <li class="list-group-item">Tanggal Lahir : {{ $siswa->tgl_lahir }}</li>
                    <li class="list-group-item">NEM : {{ $siswa->nem }}</li>
                    <li class="list-group-item">Status : {{ $siswa->status }}</li>
                </ul>
            </div>
        </div>
    </div>
@endsection