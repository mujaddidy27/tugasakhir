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
            <div class="col-lg-6">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">DATA KATEGORI</h5>
                        @if (session('status'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session('status') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @endif
                        <!-- Table with stripped rows -->
                        <table class="table ">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $item)
                                    <tr>
                                        <th scope="row">{{ $loop->iteration }}</th>
                                        <td>{{ $item->nama }}</td>
                                        <td>
                                            <form action="{{ route('datakategori.destroy', $item->id) }}" method="POST">
                                                @method('DELETE')
                                                @csrf
                                                <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                        <form class="row g-2" method="post" action="{{ route('datakategori.store') }}">
                            @csrf
                            <input class="form-control" type="text" name="nama" placeholder="Tambah Kategori">
                            <button class="btn btn-primary">Tambah</a>
                        </form>
                        {{-- <form method="POST" action="{{ route('pasien.destroy', $item->id) }}">
                            @method('DELETE')
                            @csrf
                            <a href="{{ route('pasien.show', $item->id) }}" class="btn btn-primary">Tambah</a>
                            <a href="{{ route('pasien.edit', $item->id) }}" class="btn btn-warning">Edit</a>
                            <button type="submit" class="btn btn-danger ">Hapus</button>
                        </form> --}}
                        <!-- End Table with stripped rows -->

                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
