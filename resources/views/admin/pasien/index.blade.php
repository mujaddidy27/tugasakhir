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

                        <!-- Table with stripped rows -->
                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Tgl Lahir</th>
                                    <th scope="col">Jenis Kelamin</th>
                                    <th scope="col">Ketegori Peserta</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $item)
                                    <tr>
                                        <th scope="row">{{ $loop->iteration }}</th>
                                        <td>{{ $item->nama }}</td>
                                        <td>{{ date('d-m-Y', strtotime($item->tgl_lahir)) }}</td>
                                        <td>{{ $item->j_kelamin }}</td>
                                        <td>{{ $item->kategori->nama }}</td>
                                        <td>
                                            <form method="POST" action="{{ route('pasien.destroy', $item->id) }}">
                                                @csrf
                                                @method('DELETE')
                                                <a href="{{ route('pasien.show', $item->id) }}"
                                                    class="btn btn-primary">Lihat</a>
                                                <a href="{{ route('pasien.edit', $item->id) }}"
                                                    class="btn btn-warning">Edit</a>
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                        <!-- End Table with stripped rows -->

                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
