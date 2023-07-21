@extends('layouts.index')

@section('content')
    <div class="pagetitle">
        <h1>Order Lab</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item">Pages</li>
                <li class="breadcrumb-item active">Blank</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <div class="card">
        <section class="section m-3">
            <div class="row">
                <div class="col-lg-6">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Registrasi Order Lab WK</h5>
                            <p>This is an examle page with no contrnt. You can use it as a starter for your custom
                                pages.
                            </p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Data Pasien</h5>

                            <!-- Vertical Form -->
                            <form class="row g-3">


                                <div class="col-12">
                                    <label for="inputNanme4" class="form-label">NRM/Nama</label>
                                    <input type="text" class="form-control" id="kata_kunci">
                                </div>
                                <div class="col-12">
                                    <label for="nama" class="form-label">Nama</label>
                                    <input type="text" class="form-control" id="nama">
                                </div>
                                <div class="col-12">
                                    <label for="tgl" class="form-label">Tgl Lahir</label>
                                    <input type="text" class="form-control" id="ttl">
                                </div>
                                <div class="col-12">
                                    <label for="inputAddress" class="form-label">Jenis Kelamin</label>
                                    <input type="text" class="form-control" id="j_kelamin">
                                </div>



                            </form><!-- Vertical Form -->

                        </div>
                    </div>


                </div>

                <div class="col-lg-6">

                    <div class="card">
                        <div class="card-body">

                            <h5 class="card-title">Reg Lab</h5>
                            <!-- No Labels Form -->
                            <form class="row g-3">

                                <div class="col-md-6">
                                    <label for="input" class="form-label">Tanggal</label>
                                    <input type="text" class="form-control" name="tgl"
                                        value="{{ date('d / m / Y') }}" disabled>
                                </div>
                                <div class="col-md-6">
                                    <label for="input" class="form-label">Jam</label>
                                    <input type="text" class="form-control" name="jam" id="jam" disabled>
                                </div>
                                <div class="col-md-6">
                                    <label for="input" class="form-label">Id Petugas</label>
                                    <input type="text" class="form-control" name="user_id" disabled>
                                </div>
                                <div class="col-md-6">
                                    <label for="input" class="form-label">Nama Petugas</label>
                                    <input type="text" class="form-control" name="petugas" id="nama_petugas" disabled>
                                </div>

                            </form><!-- End No Labels Form -->

                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Data Pengirim</h5>

                            <!-- Vertical Form -->
                            <form class="row g-3">
                                <div class="col-12">
                                    <label for="inputNanme4" class="form-label">Pengirim</label>
                                    <input type="text" class="form-control" id="inputNanme4">
                                </div>
                                <div class="col-12">
                                    <label for="inputEmail4" class="form-label">Kontak</label>
                                    <input type="email" class="form-control" id="inputEmail4">
                                </div>
                                <div class="col-12">
                                    <label for="inputPassword4" class="form-label">Keluhan</label>
                                    <input type="password" class="form-control" id="inputPassword4">
                                </div>
                                <div class="col-12">
                                    <label for="inputAddress" class="form-label">Alamat</label>
                                    <input type="text" class="form-control" id="inputAddress">
                                </div>


                            </form><!-- Vertical Form -->

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section m-3">
            <div class="row">
                <div class="col-12">


                    <div class="card">
                        <div class="card-body">

                            <h5 class="card-title">Item Pemeriksaan</h5>
                            <!-- No Labels Form -->
                            <form class="row g-3">
                                <div class="col-8">
                                    <label for="inputAddress" class="form-label">Pilih Pemeriksaan</label>
                                    <select name="order_item" id="inputState" class="form-select">
                                        @foreach ($data as $item)
                                            <option value="{{ $item->id }}">{{ $item->nama }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-4">
                                    <label for="input" class="form-label"></label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="col-8">
                                    <label for="input" class="form-label">Jenis Pemeriksaan</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="col-4">
                                    <label for="input" class="form-label">Harga</label>
                                    <input type="text" class="form-control">
                                </div>

                                <button type="button" class="btn btn-success"><i class="bi bi-plus-circle"></i></button>


                            </form><!-- End No Labels Form -->

                        </div>
                    </div>


                </div>

                <div class="col-12">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">List Pemeriksaan</h5>
                            <!-- Table with stripped rows -->
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Item</th>
                                            <th scope="col">Jenis</th>
                                            <th scope="col">Nilai Rujukan</th>
                                            <th scope="col">Satuan</th>
                                            <th scope="col">Jumlah</th>
                                            <th scope="col">Harga</th>
                                            <th scope="col">Subtotal</th>
                                            <th scope="col">Aksi</th>


                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">Microalbumen</th>
                                            <td>Lab</td>
                                            <td>1-20</td>
                                            <td>m/g</td>
                                            <td>1</td>
                                            <td>20.000</td>
                                            <td>20.000</td>
                                            <td>hapus</td>

                                        </tr>
                                        <tr>
                                            <th scope="row">Microalbumen</th>
                                            <td>Lab</td>
                                            <td>1-20</td>
                                            <td>m/g</td>
                                            <td>1</td>
                                            <td>20.000</td>
                                            <td>20.000</td>
                                            <td>hapus</td>

                                        </tr>
                                        <tr>
                                            <th scope="row">Microalbumen</th>
                                            <td>Lab</td>
                                            <td>1-20</td>
                                            <td>m/g</td>
                                            <td>1</td>
                                            <td>20.000</td>
                                            <td>20.000</td>
                                            <td>hapus</td>

                                        </tr>
                                        <tr>
                                            <th scope="row">Microalbumen</th>
                                            <td>Lab</td>
                                            <td>1-20</td>
                                            <td>m/g</td>
                                            <td>1</td>
                                            <td>20.000</td>
                                            <td>20.000</td>
                                            <td>hapus</td>

                                        </tr>
                                        <tr>
                                            <th scope="row">Microalbumen</th>
                                            <td>Lab</td>
                                            <td>1-20</td>
                                            <td>m/g</td>
                                            <td>1</td>
                                            <td>20.000</td>
                                            <td>20.000</td>
                                            <td>hapus</td>

                                        </tr>
                                        <tr>
                                            <th scope="row">Microalbumen</th>
                                            <td>Lab</td>
                                            <td>1-20</td>
                                            <td>m/g</td>
                                            <td>1</td>
                                            <td>20.000</td>
                                            <td>20.000</td>
                                            <td>hapus</td>

                                        </tr>
                                        <tr>
                                            <th scope="row">Microalbumen</th>
                                            <td>Lab</td>
                                            <td>1-20</td>
                                            <td>m/g</td>
                                            <td>1</td>
                                            <td>20.000</td>
                                            <td>20.000</td>
                                            <td>hapus</td>
                                        </tr>
                                        <tr>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th>Total</th>
                                            <th></th>
                                            <th></th>
                                            <th>| Rp.140.000</th>
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
        <section class="section m-3">
            <div class="wor">
                <div class="col-lg-12">

                    <div class="card-body">
                        <a href="/add_orderlab"><button type="reset" class="btn btn-primary btn-sm">Simpan</button>
                        </a>
                        <a href="/add_orderlab"><button type="reset" class="btn btn-secondary btn-sm">Reset</button>
                        </a>
                    </div>

                </div>

            </div>
        </section>
    </div>
@endsection

@push('javascript')
    <script src="{{ asset('admin/js/code.jquery.com_jquery-3.7.0.js') }}"></script>
    <script>
        $(document).ready(function() {
            let timer;
            $('#kata_kunci').on('keyup', function(e) {
                const key = $(this).val();
                const URL = `/order/cari/${key}/pasien`;
                const token = $("meta[name='csrf-token']").attr("content");
                // WK23070001
                // console.log(URL);
                clearTimeout(timer);
                if (key.length >= 3) {
                    timer = setTimeout(() => {
                        $.ajax({
                            url: URL,
                            type: 'GET',
                            cache: false,
                            data: {
                                '_token': token,
                            },
                            success: function(e) {
                                console.log(e);
                                if (e.pasien !== null) {
                                    $('#nama').val(e.pasien.nama);
                                    $('#ttl').val(e.pasien.tgl_lahir);
                                    $('#j_kelamin').val(e.pasien.j_kelamin);
                                    $('#nama_petugas').val(e.petugas.name);
                                }
                            }
                        })
                    }, 2000);
                }
            })
            // akhir pencarian pasien

        })
    </script>
@endpush
