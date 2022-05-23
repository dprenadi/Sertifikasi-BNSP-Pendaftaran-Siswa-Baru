@extends('layouts.main')

@section('container')
    <div class="container">
        <div class="row my-3">  
            @foreach ($siswas as $siswa)    
            <div class="col-lg-5 mb-3">
                <ul class="list-group mt-3">
                    <li class="list-group-item list-group-item-info">Nama : {{ $siswa->nama }}</li>
                    <li class="list-group-item">Asal Sekolah : {{ $siswa->asal_sekolah }}</li>
                    <li class="list-group-item">Tempat Lahir : {{ $siswa->tempat_lahir }}</li>
                    <li class="list-group-item">Tanggal Lahir : {{ $siswa->tgl_lahir }}</li>
                    <li class="list-group-item">NEM : {{ $siswa->nem }}</li>
                    <li class="list-group-item">Status : {{ $siswa->status }}</li>
                </ul>
            </div>
            @endforeach
        </div>
    </div>
@endsection