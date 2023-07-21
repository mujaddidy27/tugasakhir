{{-- @extends('layouts.index')

@section('content')
    <form action="{{ route('pasien.update', $data->id) }}" method="post">
        @csrf
        @method('PUT')
        <input value="{{ $data->nama }}" type="text" name="nama" id="">
    </form>
@endsection --}}
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
                    <a href="{{ route('pasien.index') }}"><button type="reset"
                            class="btn btn-secondary btn-sm">Kembali</button>
                    </a>
                </div>
                <div class="col-lg-6">
                    <div class="card ">

                        <div class="card-body">

                            <h5 class="card-title">Edit Data Pasien</h5>

                            <!-- Multi Columns Form -->

                            <form class="row g-3" action="{{ route('pasien.update', $data->id) }}" method="POST">
                                @method('PUT');
                                @csrf
                                <div class="col-md-6">

                                    <label for="nama" class="form-label">NRM</label>
                                    @error('nama')
                                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                            Silahkan isi nama!
                                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                aria-label="Close"></button>
                                        </div>
                                    @enderror
                                    <input type="text" class="form-control" name="nama" value="{{ $data->nrm }}"
                                        disabled>
                                </div>
                                <div class="col-md-6">

                                    <label for="nama" class="form-label">Nama</label>
                                    @error('nama')
                                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                            Silahkan isi nama!
                                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                aria-label="Close"></button>
                                        </div>
                                    @enderror
                                    <input type="text" class="form-control" name="nama" value="{{ $data->nama }}"
                                        required>
                                </div>
                                <div class="col-md-6">
                                    <label for="tgl_lahir" class="form-label">Tgl Lahir</label>
                                    @error('tgl_lahir')
                                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                            Silahkan isi Tanggal Lahir!
                                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                aria-label="Close"></button>
                                        </div>
                                    @enderror
                                    <input type="date" class="form-control" name="tgl_lahir"
                                        value="{{ $data->tgl_lahir }}" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="jenisk" class="form-label">Jenis Kelamin</label>
                                    @error('j_kelamin')
                                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                            Silahkan Isi Jenis Kelamin!
                                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                aria-label="Close"></button>
                                        </div>
                                    @enderror
                                    <input type="text" class="form-control" name="j_kelamin"
                                        value="{{ $data->j_kelamin }}" required>
                                </div>
                                <div class="col-md-6">

                                    <label for="nik" class="form-label">NIK</label>
                                    @error('nama')
                                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                            Silahkan isi nama!
                                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                aria-label="Close"></button>
                                        </div>
                                    @enderror
                                    <input type="int" class="form-control" name="nik" value="{{ $data->nik }}"
                                        required>
                                </div>

                                <div class="col-md-12">
                                    <label for="nohp" class="form-label">No Hp</label>
                                    @error('nohp')
                                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                            Silahkan Isi Kontak!
                                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                aria-label="Close"></button>
                                        </div>
                                    @enderror
                                    <input type="text" class="form-control" name="no_hp" value="{{ $data->no_hp }}"
                                        required>
                                </div>
                                <div class="col-12">
                                    <label for="alamat" class="form-label">Alamat</label>
                                    @error('alamat')
                                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                            Silahkan Isi Alamat!
                                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                aria-label="Close"></button>
                                        </div>
                                    @enderror
                                    <input type="text" class="form-control" name="alamat" placeholder="1234 Main St"
                                        value="{{ $data->alamat }}" required>
                                </div>
                                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
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
