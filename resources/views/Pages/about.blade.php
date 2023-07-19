@extends('landing.template')

@section('container')
    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-5 mb-5 mb-lg-0" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded" src="{{ asset('landing/img/ruanganalis.jpg') }}"
                            style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="mb-4">
                        <h5 class="d-inline-block text-primary text-uppercase border-bottom border-5">Tentang Kami</h5>
                        <h1 class="display-4">Perawatan Medis Terbaik Untuk Diri Sendiri dan Keluarga Anda</h1>
                    </div>
                    <p>Laboratorium Klinik Wijaya Kusuma adalah sebuah fasilitas medis yang menyediakan berbagai layanan
                        pemeriksaan laboratorium untuk membantu diagnosis dan pemantauan kondisi kesehatan. Beroperasi
                        dengan standar tinggi dan dilengkapi dengan peralatan canggih serta tim profesional yang
                        berpengalaman, laboratorium klinik ini bertujuan untuk memberikan pelayanan terbaik kepada pasien
                        dan tenaga medis.</p>
                    <div class="row g-3 pt-3">
                        <div class="col-sm-3 col-6">
                            <div class="bg-light text-center rounded-circle py-4">
                                <i class="fa fa-3x fa-user-md text-primary mb-3"></i>
                                <h6 class="mb-0">Tim<small class="d-block text-primary">Berkualitas</small></h6>
                            </div>
                        </div>
                        <div class="col-sm-3 col-6">
                            <div class="bg-light text-center rounded-circle py-4">
                                <i class="fa fa-3x fa-procedures text-primary mb-3"></i>
                                <h6 class="mb-0">Layanan<small class="d-block text-primary">Darurat</small></h6>
                            </div>
                        </div>
                        <div class="col-sm-3 col-6">
                            <div class="bg-light text-center rounded-circle py-4">
                                <i class="fa fa-3x fa-microscope text-primary mb-3"></i>
                                <h6 class="mb-0">Hasil Test<small class="d-block text-primary">Akurat</small></h6>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
@endsection
