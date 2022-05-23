@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Create New Post</h1>
    </div>

    <div class="col-lg-8">
        <form action="/dashboard/siswas" method="POST" class="mb-5">
        @csrf
        <div class="mb-3">
            <label for="user_id" class="form-label" hidden>User Id</label>
            <input type="text" class="form-control" id="user_id"  name="user_id" value="1" required  hidden>
        </div>
        <div class="mb-3">
            <label for="nama" class="form-label">Nama Siswa</label>
            <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" required autofocus value="{{ old('nama') }}">
            @error('nama')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="asal_sekolah" class="form-label">Asal Sekolah</label>
            <input type="text" class="form-control  @error('asal_sekolah') is-invalid @enderror" id="asal_sekolah" name="asal_sekolah" value="{{ old('asal_sekolah') }}" required>
            @error('asal_sekolah')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
            <input type="text" class="form-control  @error('tempat_lahir') is-invalid @enderror" id="tempat_lahir" name="tempat_lahir" value="{{ old('tempat_lahir') }}" required>
            @error('tempat_lahir')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="tgl_lahir" class="form-label">Tanggal lahir</label>
            <input type="date" class="form-control  @error('tgl_lahir') is-invalid @enderror" id="tgl_lahir" name="tgl_lahir" value="{{ old('tgl_lahir') }}" required>
            @error('tgl_lahir')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="nem" class="form-label">NEM</label>
            <input type="text" class="form-control  @error('nem') is-invalid @enderror" id="nem" name="nem" value="{{ old('nem') }}" required>
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

        <button type="submit" class="btn btn-primary">Submit Pendaftaran</button>
        </form>
    </div>

@endsection