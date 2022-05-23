@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit</h1>
    </div>

    <div class="col-lg-8">
        <form action="/dashboard/siswas/{{ $siswa->nama }}" method="POST" class="mb-5">
            @method('put')
            @csrf
        <div class="mb-3">
            <label for="nama" class="form-label">Nama Siswa</label>
            <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" required autofocus value="{{ old('nama', $siswa->nama) }}">
            @error('nama')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="asal_sekolah" class="form-label" hidden>asal_sekolah</label>
            <input type="text" class="form-control  @error('asal_sekolah') is-invalid @enderror" id="asal_sekolah" name="asal_sekolah" value="{{ old('asal_sekolah', $siswa->asal_sekolah) }}" required hidden>
            @error('asal_sekolah')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="tempat_lahir" class="form-label" hidden>Tempat lahir</label>
            <input type="text" class="form-control  @error('tempat_lahir') is-invalid @enderror" id="tempat_lahir" name="tempat_lahir" value="{{ old('tempat_lahir', $siswa->tempat_lahir) }}" required hidden>
            @error('tempat_lahir')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="tgl_lahir" class="form-label" hidden>tgl_lahir</label>
            <input type="date" class="form-control  @error('tgl_lahir') is-invalid @enderror" id="tgl_lahir" name="tgl_lahir" value="{{ old('tgl_lahir', $siswa->tgl_lahir) }}" required hidden>
            @error('tgl_lahir')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="nem" class="form-label">NEM</label>
            <input type="text" class="form-control  @error('nem') is-invalid @enderror" id="nem" name="nem" value="{{ old('nem', $siswa->nem) }}" required>
            @error('nem')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <select class="form-select" aria-label="Default select example" name="status" id="status">
            <option value="belum dikonfirmasi" selected>Belum dikonfirmasi</option>
            <option value="lulus">Lulus</option>
            <option value="tidak lulus">Tidak Lulus</option>
            </select>
        </div>



        <button type="submit" class="btn btn-primary">Update Data Siswa</button>
        </form>
    </div>

@endsection