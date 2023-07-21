<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link " href="/dashboard">
                <i class="bx bxs-dashboard"></i>
                <span>Dashboard</span>
            </a>
        </li>
        <!-- End Dashboard Nav -->

        <!-- Register -->
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#register-nav" data-bs-toggle="collapse" href="#">
                <i class="bx bxs-first-aid"></i><span>Register</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="register-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="#">
                        <i class="bi bi-circle"></i><span>Pasien</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="bi bi-circle"></i><span>Order Lab</span>
                    </a>
                </li>

            </ul>
        </li>

        <!-- End Register -->

        <!-- Pemeriksaan -->
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#pemeriksaan-nav" data-bs-toggle="collapse" href="#">
                <i class="bx bxs-flask"></i><span>Pemeriksaan</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="pemeriksaan-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{ route('pemeriksaan.index') }}">
                        <i class="bi bi-circle"></i><span>Lab</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('pemeriksaanrotgen.index') }}">
                        <i class="bi bi-circle"></i><span>Rotgen</span>
                    </a>
                </li>

            </ul>
        </li>

        <!-- End Pemeriksaan -->

        <!-- Hasil Pemeriksaan -->
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#hasilpemeriksaan-nav" data-bs-toggle="collapse"
                href="#">
                <i class="bx bx-task"></i><span>Hasil Pemeriksaan</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="hasilpemeriksaan-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="#">
                        <i class="bi bi-circle"></i><span>Lihat dan Validasi Hasil</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="bi bi-circle"></i><span>Cetak Hasil </span>
                    </a>
                </li>

            </ul>
        </li>
        <!-- End Hasil Pemeriksaan -->

        <!-- Laporan -->
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#laporan-nav" data-bs-toggle="collapse" href="#">
                <i class="bx bxs-report"></i><span>Laporan</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="laporan-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="#">
                        <i class="bi bi-circle"></i><span>Keuangan</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="bi bi-circle"></i><span>Cn Faskes </span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="bi bi-circle"></i><span>Daftar Harga </span>
                    </a>
                </li>

            </ul>
        </li>
        <!-- End Laporan -->


        {{-- <li class="nav-heading">Dokumen</li>

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#dokumen-nav" data-bs-toggle="collapse" href="#">
                <i class="bx bxs-data"></i><span>Surat</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="dokumen-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="/dashboard">
                        <i class="bi bi-circle"></i><span>Data Faskes</span>
                    </a>
                </li>
                <li>
                    <a href="/dashboard">
                        <i class="bi bi-circle"></i><span>Data Pemeriksaan</span>
                    </a>
                </li>
                <li>
                    <a href="/dashboard">
                        <i class="bi bi-circle"></i><span>Pengguna</span>
                    </a>
                </li>
                <li>
                    <a href="/dashboard">
                        <i class="bi bi-circle"></i><span>Pengumuman</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Data Master Nav --> --}}


        <li class="nav-heading">Pages</li>

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#datamaster-nav" data-bs-toggle="collapse" href="#">
                <i class="bx bxs-data"></i><span>Data Master</span><i
                    class="bi
              bi-chevron-down ms-auto"></i>
            </a>
            <ul id="datamaster-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="#">
                        <i class="bi bi-circle"></i><span>Data Jenis Pemeriksaan</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="bi bi-circle"></i><span>Data Mitra</span>
                    </a>
                </li>


            </ul>
        </li><!-- End Data Master Nav -->


        <li class="nav-item">
            <a class="nav-link collapsed" href="#">
                <i class="bi bi-person"></i>
                <span>Users</span>
            </a>
        </li><!-- End Profile Page Nav -->

        {{-- <li class="nav-item">
            <a class="nav-link collapsed" href="/faq">
                <i class="bi bi-question-circle"></i>
                <span>F.A.Q</span>
            </a>
        </li><!-- End F.A.Q Page Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="/dcontact">
                <i class="bi bi-envelope"></i>
                <span>Contact</span>
            </a>
        </li><!-- End Contact Page Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="/register">
                <i class="bi bi-card-list"></i>
                <span>Register</span>
            </a>
        </li><!-- End Register Page Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="/login">
                <i class="bi bi-box-arrow-in-right"></i>
                <span>Login</span>
            </a>
        </li><!-- End Login Page Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="/error404">
                <i class="bi bi-dash-circle"></i>
                <span>Error 404</span>
            </a>
        </li><!-- End Error 404 Page Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="blank">
                <i class="bi bi-file-earmark"></i>
                <span>Blank</span>
            </a>
        </li><!-- End Blank Page Nav --> --}}

    </ul>

</aside><!-- End Sidebar-->
