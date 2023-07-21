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
                        <h5 class="card-title">DATA PASIEN</h5>
                        <a href="{{ route('pasien.create') }}">
                            <button type="button" class="btn btn-primary"><i class="bi bi-star me-1"></i> Tambah</button>
                        </a>
                        <a href="{{ route('pasi') }}">
                            <button type="button" class="btn btn-success"><i class="bi bi-star me-1"></i> Pdf</button>
                        </a>
                        <!-- Table with stripped rows -->
                        @if (session('status'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session('status') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @endif
                        <div class="table-responsive">
                            <table class="table datatable">
                                <thead>
                                    <tr>
                                        <th scope="col">NRM</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Tgl Lahir</th>
                                        <th scope="col">Jenis Kelamin</th>
                                        <th scope="col">NIK</th>
                                        <th scope="col">No Hp</th>
                                        <th scope="col">Alamat</th>
                                        <th scope="col">Cetak</th>
                                        <th class="text-center">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $item)
                                        <tr>
                                            {{-- <th scope="row">{{ $loop->iteration }}</th> --}}
                                            <td>{{ $item->nrm }}</td>
                                            <td>{{ $item->nama }}</td>
                                            <td>{{ date('d-m-Y', strtotime($item->tgl_lahir)) }}</td>
                                            <td>{{ $item->j_kelamin }}</td>
                                            <td>{{ $item->nik }}</td>
                                            <td>{{ $item->no_hp }}</td>
                                            <td>{{ $item->alamat }}</td>

                                            <td class=""> <a href="{{ route('pasien.show', $item->id) }}"
                                                    class="btn btn-primary"><i class="bi bi-view-list"></i></a></td>
                                            <td>
                                                <form method="POST" action="{{ route('pasien.destroy', $item->id) }}">
                                                    @method('DELETE')
                                                    @csrf

                                                    <a href="{{ route('pasien.edit', $item->id) }}"
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
                        <!-- End Table with stripped rows -->

                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
