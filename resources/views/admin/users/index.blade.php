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
                        <h5 class="card-title">DATA PENGGUNA</h5>
                        <section class="section m-2"><a href="{{ route('usersilab.create') }}">
                                <li class="gg-user-add row "></li>
                            </a>
                        </section>
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
                                        <th scope="col">No</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Password</th>
                                        <th scope="col">Hak Akses</th>
                                        <th class="text-center">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $item)
                                        <tr>
                                            <th scope="row">{{ $loop->iteration }}</th>
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->email }}</td>
                                            <td>{{ $item->password }}</td>
                                            <td>{{ $item->hak_akses }}</td>
                                            <td>
                                                <form method="POST" action="{{ route('usersilab.destroy', $item->id) }}">
                                                    @method('DELETE')
                                                    @csrf

                                                    <a href="{{ route('usersilab.edit', $item->id) }}"
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
