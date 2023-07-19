@extends('layouts.index');

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
                        <h5 class="card-title">DATA JENIS PEMERIKSAAN</h5>
                        <a href="{{ route('datajenispemeriksaan.create') }}">
                            <button type="button" class="btn btn-primary"><i class="bi bi-star me-1"></i> Tambah</button>
                        </a>
                        @if (session('status'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session('status') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @endif
                        <!-- Table with stripped rows -->
                        <table class="table datatable ">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Kode</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Nilai Rujukan</th>
                                    <th scope="col">Satuan</th>
                                    <th scope="col">Harga</th>
                                    <th scope="col">Aksi</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $item)
                                    <tr>
                                        <th scope="row">{{ $loop->iteration }}</th>
                                        <td>{{ $item->kode }}</td>
                                        <td>{{ $item->nama }}</td>
                                        <td>{{ $item->nilai_rujukan }}</td>
                                        <td>{{ $item->satuan }}</td>
                                        <td>{{ $item->harga }}</td>
                                        <td>
                                            <form method="POST"
                                                action="{{ route('datajenispemeriksaan.destroy', $item->id) }}">
                                                @method('DELETE')
                                                @csrf

                                                <a href="{{ route('datajenispemeriksaan.edit', $item->id) }}"
                                                    class="btn btn-warning"><i class="bi bi-pencil-square"></i></a>
                                                <button type="submit" class="btn btn-danger "><i
                                                        class="bi bi-eraser"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>

                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
