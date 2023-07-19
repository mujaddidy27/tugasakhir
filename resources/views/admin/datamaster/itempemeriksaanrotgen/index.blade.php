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
                        <h5 class="card-title">Item Pemeriksaan Rotgen</h5>
                        <section class="section m-2"><a href="{{ route('itemlab.create') }}">
                                <li class="gg-user-add row "></li>
                            </a>
                        </section>
                        <!-- Table with stripped rows -->
                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Tgl Lahir</th>
                                    <th scope="col">Jenis Kelamin</th>
                                    <th scope="col">No Hp</th>
                                    <th scope="col">Alamat</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                {{-- @foreach ($data as $item)
                                    <tr>
                                        <th scope="row">{{ $loop->iteration }}</th>
                                        <td>{{ $item->nama }}</td>
                                        <td>{{ date('d-m-Y', strtotime($item->tgl_lahir)) }}</td>
                                        <td>{{ $item->j_kelamin }}</td>
                                        <td>{{ $item->no_hp }}</td>
                                        <td>{{ $item->alamat }}</td>


                                        <td>
                                            <form method="POST" action="{{ route('pasien.destroy', $item->id) }}">
                                                @method('DELETE')
                                                @csrf
                                                <a href="{{ route('pasien.show', $item->id) }}" class="btn btn-primary"><i
                                                        class="bi bi-exclamation-octagon"></i></a>
                                                <a href="{{ route('pasien.edit', $item->id) }}" class="btn btn-warning"><i
                                                        class="bi bi-exclamation-octagon"></i></a>
                                                <button type="submit" class="btn btn-danger "><i
                                                        class="bi bi-exclamation-octagon"></button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach --}}

                            </tbody>
                        </table>
                        <!-- End Table with stripped rows -->

                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
