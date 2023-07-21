@extends('analis.index')

@section('content')
    <div class="pagetitle">
        <h1>Data Tables</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item">Tables</li>
                <li class="breadcrumb-item active">Data</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">PERMINTAAN PEMERIKSAAN</h5>
                        <section class="section m-2"><a href="{{ route('order.create') }}">
                                <li class="gg-user-add row "></li>
                            </a>
                        </section>
                        <!-- Table with stripped rows -->
                        <div class="table-responsive">
                            <table class="table datatable">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Tanggal</th>
                                        <th scope="col">No Lab</th>
                                        <th scope="col">Nama Pasien</th>
                                        <th scope="col">Pengirim</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Proses</th>
                                        <th class="text-center">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <tr>
                                        <th scope="row">1</th>
                                        <td>12-07-2023</td>
                                        <td>WK20230001</td>
                                        <td>Abdullah</td>
                                        <td>Dr. Fathurrahman</td>
                                        <td>BPJS</td>
                                        <td>selesai</td>
                                        <td>
                                            <a href="{{ route('pemeriksaanrotgen.create') }}">
                                                <button type="button" class="btn btn-warning"><i
                                                        class="bi bi-pencil-square"></i></button>
                                            </a>
                                        </td>
                                    </tr>


                                </tbody>
                            </table>
                        </div>
                        <!-- End Table with stripped rows -->

                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
