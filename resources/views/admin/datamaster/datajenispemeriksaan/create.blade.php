@extends('layouts.index')

@section('content')
    <div class="pagetitle">
        <h1>Form Data Jenis Pemeriksaan</h1>
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
                    <a href="{{ route('datajenispemeriksaan.index') }}"><button type="reset"
                            class="btn btn-secondary btn-sm">Kembali</button>
                    </a>
                </div>
                <div class="col-lg-12">
                    <div class="card ">

                        <div class="card-body">

                            <h5 class="card-title">Input Data Jenis Pemeriksaan</h5>

                            <!-- Multi Columns Form -->
                            @if (session('status'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ session('status') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            @endif
                            <form class="row g-3" action="{{ route('datajenispemeriksaan.store') }}" method="POST">

                                @csrf
                                <div class="col-md-12">

                                    <label for="nama" class="form-label">Kode</label>
                                    <input type="text" class="form-control" name="kode">
                                </div>
                                <div class="col-md-12">
                                    <label for="alamat" class="form-label">Nama</label>
                                    <input type="text" class="form-control" name="nama">
                                </div>
                                <div class="col-md-12">
                                    <label for="kontak" class="form-label">Nilai Rujukan</label>
                                    <input type="text" class="form-control" name="nilai_rujukan">
                                </div>
                                <div class="col-md-12">
                                    <label for="kontak" class="form-label">Satuan</label>
                                    <input type="text" class="form-control" name="satuan">
                                </div>
                                <div class="col-md-12">
                                    <label for="kontak" class="form-label">Harga</label>
                                    <input type="text" class="form-control" name="harga">
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
