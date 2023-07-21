@extends('layouts.index')

@section('content')
    <div class="pagetitle">
        <h1>Form Data Pasien</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item">Forms</li>
                <li class="breadcrumb-item active">Data</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->
    <div class="card">
        <section class="section">
            <div class="row">
                <div class="text-left m-2">
                    <a href="{{ route('usersilab.index') }}"><button type="reset"
                            class="btn btn-secondary btn-sm">Kembali</button>
                    </a>
                </div>
                <div class="col-lg-6">
                    <div class="card ">

                        <div class="card-body">

                            <h5 class="card-title">Input Data Pengguna</h5>

                            <!-- Multi Columns Form -->
                            @if (session('status'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ session('status') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            @endif
                            <form class="row g-3" action="{{ route('usersilab.store') }}" method="GET">

                                @csrf
                                <div class="col-md-12">

                                    <label for="nama" class="form-label">Nama</label>
                                    @error('nama')
                                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                            Silahkan isi nama!
                                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                aria-label="Close"></button>
                                        </div>
                                    @enderror
                                    <input type="text" class="form-control" name="nama" required>
                                </div>
                                <div class="col-md-12">
                                    <label for="tgl_lahir" class="form-label">Email</label>
                                    @error('tgl_lahir')
                                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                            Silahkan isi Tanggal Lahir!
                                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                aria-label="Close"></button>
                                        </div>
                                    @enderror
                                    <input type="email" class="form-control" name="email" required>
                                </div>
                                <div class="col-md-12">
                                    <label for="tgl_lahir" class="form-label">Password</label>
                                    @error('tgl_lahir')
                                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                            Silahkan isi Tanggal Lahir!
                                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                aria-label="Close"></button>
                                        </div>
                                    @enderror
                                    <input type="password" class="form-control" name="password" required>
                                </div>
                                <div class="col-md-12">
                                    <label for="jenisk" class="form-label">Hak Akses</label>
                                    @error('j_kelamin')
                                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                            Silahkan Isi Jenis Kelamin!
                                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                aria-label="Close"></button>
                                        </div>
                                    @enderror
                                    <select class="form-select" aria-label="Default select example" name="hak_akses"
                                        required>
                                        <option selected>Pilih Hak Akses</option>
                                        <option value="admin">Admin</option>
                                        <option value="analis">Analis</option>

                                    </select>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                    <button type="reset" class="btn btn-secondary">Reset</button>
                                </div>
                            </form><!-- End Multi Columns Form -->

                        </div>
                    </div>
                </div>

            </div>
        </section>
    </div>
@endsection
