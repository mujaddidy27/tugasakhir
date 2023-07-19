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

                            <h5 class="card-title">Input Data Pasien</h5>

                            <!-- Multi Columns Form -->
                            @if (session('status'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ session('status') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            @endif
                            <form class="row g-3" action="{{ route('pasien.store') }}" method="POST">

                                @csrf
                                <div class="col-md-6">

                                    <label for="nama" class="form-label">Nama</label>
                                    @error('nama')
                                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                            Silahkan isi nama!
                                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                aria-label="Close"></button>
                                        </div>
                                    @enderror
                                    <input type="text" class="form-control" name="nama">
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
                                    <input type="date" class="form-control" name="tgl_lahir">
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
                                    <input type="text" class="form-control" name="j_kelamin">
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
                                    <input type="int" class="form-control" name="nik">
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
                                    <input type="text" class="form-control" name="no_hp">
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
                                    <input type="text" class="form-control" name="alamat" placeholder="1234 Main St">
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
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title m-2">List Antrian Pasien</h5>

                            <!-- Table with stripped rows -->
                            <div class="table-responsive">
                                <table class="table table-striped table-sm" cellspacing="0" width="100%">
                                    <thead>
                                        <tr>
                                            <th scope="col">No Antrian</th>
                                            <th scope="col">Nama</th>
                                            <th scope="col">Tanggal Lahir</th>
                                            <th scope="col">Umur</th>
                                            <th scope="col">Alamat</th>
                                        </tr>
                                    </thead>
                                    @foreach ($data as $pasien)
                                        <tbody>
                                            <tr>
                                                <th scope="row">{{ $loop->iteration }}</th>
                                                <td>{{ $pasien->nama }}</td>
                                                <td>{{ $pasien->tgl_lahir }}</td>
                                                <td>28</td>
                                                <td>{{ $pasien->alamat }}</td>
                                            </tr>
                                        </tbody>
                                    @endforeach

                                </table>
                            </div>
                            <!-- End Table with stripped rows -->

                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
