@extends('layouts.index')

@section('content')
    <div class="pagetitle">
        <h1>Pemeriksaan Lab</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item">Pages</li>
                <li class="breadcrumb-item active">Blank</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Input Hasil Pemeriksaan</h5>

                        <section class="section ">
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <!-- Multi Columns Form -->
                                        <form class="row m-3">
                                            <div class="col-md-6">
                                                <label for="inputNRM" class="form-label">No Reg Lab :</label>
                                                <th class="">WK202300001</th>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="inputTetala" class="form-label">Tanggal :</label>
                                                <th class="">29-06-2023</th>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="inputNama" class="form-label">Nama Pasien:</label>
                                                <th class="">Abdullah</th>
                                            </div>

                                            <div class="col-md-6">
                                                <label for="inputJenisK" class="form-label">Jenis Kelamin :</label>
                                                <th class="">Laki-laki</th>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="inputKategori" class="form-label">Kategori :</label>
                                                <th class="">BPJS</th>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="inputNoKartu" class="form-label">No Kartu :</label>
                                                <th class="">0007645273</th>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="inputAddress5" class="form-label">Alamat :</label>
                                                <th class="">Jl. Pahlawan No 209</th>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="inputNoHp" class="form-label">Pengirim :</label>
                                                <th class="">Dr. Miftahurrahman</th>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="inputAddress5" class="form-label">Petugas :</label>
                                                <th class="">Sefrin</th>
                                            </div>


                                        </form><!-- End Multi Columns Form -->

                                    </div>
                                </div>
                            </div>
                        </section>
                        <section class="section">
                            <div class="row">
                                <div class="col-lg-12">

                                    <div class="card">
                                        <div class="card-body">

                                            <!-- Table with stripped rows -->
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">No.</th>
                                                            <th scope="col">Parameter</th>
                                                            <th scope="col">Hasil</th>
                                                            <th scope="col">Satuan</th>
                                                            <th scope="col">Nilai Rujukan</th>
                                                            <th scope="col">Keterangan</th>
                                                            <th scope="col">Aksi</th>

                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row">1</th>
                                                            <td>Microalbumen</td>
                                                            <td><input type="text" class="form-control"></td>
                                                            <td>m/g</td>
                                                            <td>1-20</td>
                                                            <td>Normal</td>
                                                            <td> <a href="#"> <button type="button"
                                                                        class="btn btn-success"><i
                                                                            class="bi bi-check-lg"></i></button>
                                                                </a>
                                                            </td>

                                                        </tr>
                                                        <tr>
                                                            <th scope="row">2</th>
                                                            <td>Microalbumen</td>
                                                            <td><input type="text" class="form-control"></td>
                                                            <td>m/g</td>
                                                            <td>1-20</td>
                                                            <td>Normal</td>
                                                            <td> <a href="#"> <button type="button"
                                                                        class="btn btn-success"><i
                                                                            class="bi bi-check-lg"></i></button>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">3</th>
                                                            <td>Microalbumen</td>
                                                            <td><input type="text" class="form-control"></td>
                                                            <td>m/g</td>
                                                            <td>1-20</td>
                                                            <td>Normal</td>
                                                            <td> <a href="#"> <button type="button"
                                                                        class="btn btn-success"><i
                                                                            class="bi bi-check-lg"></i></button>
                                                                </a>
                                                            </td>

                                                        </tr>
                                                        <tr>
                                                            <th scope="row">4</th>
                                                            <td>Microalbumen</td>
                                                            <td><input type="text" class="form-control"></td>
                                                            <td>m/g</td>
                                                            <td>1-20</td>
                                                            <td>Normal</td>
                                                            <td> <a href="#"> <button type="button"
                                                                        class="btn btn-success"><i
                                                                            class="bi bi-check-lg"></i></button>
                                                                </a>
                                                            </td>>

                                                        </tr>
                                                        <tr>
                                                            <th scope="row">5</th>
                                                            <td>Microalbumen</td>
                                                            <td><input type="text" class="form-control"></td>
                                                            <td>m/g</td>
                                                            <td>1-20</td>
                                                            <td>Normal</td>
                                                            <td> <a href="#"> <button type="button"
                                                                        class="btn btn-success"><i
                                                                            class="bi bi-check-lg"></i></button>
                                                                </a>
                                                            </td>

                                                        </tr>
                                                        <tr>
                                                            <th scope="row">6</th>
                                                            <td>Microalbumen</td>
                                                            <td><input type="text" class="form-control"></td>
                                                            <td>m/g</td>
                                                            <td>1-20</td>
                                                            <td>Normal</td>
                                                            <td> <a href="#"> <button type="button"
                                                                        class="btn btn-success"><i
                                                                            class="bi bi-check-lg"></i></button>
                                                                </a>
                                                            </td>

                                                        </tr>

                                                    </tbody>
                                                </table>

                                            </div>
                                            <!-- End Table with stripped rows -->
                                        </div>
                                        <section class="section m-3">
                                            <div class="col-12">
                                                <a href="/hasilplab" class="col-mg-12"><button type="button"
                                                        class="btn btn-primary"><i class="bi bi-arrow-repeat "></i>
                                                        Simpan</button></a>
                                            </div>
                                        </section>
                                    </div>

                                </div>
                            </div>
                        </section>
                    </div>
                </div>


            </div>
        </div>
    </section>
@endsection
