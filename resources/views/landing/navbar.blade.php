<!-- Navbar Start -->
<div class="container-fluid sticky-top bg-white shadow-sm">
    <div class="container">
        <nav class="navbar navbar-expand-lg bg-white navbar-light py-3 py-lg-0">
            <a href="/" class="navbar-brand">
                <h1 class="m-0 text-uppercase text-primary"><i class="fa me-2"><img
                            src="{{ asset('landing/img/wklogo.png') }}" alt=""></i>
                </h1>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="/" class="nav-item nav-link {{ $title === 'Home' ? 'active' : '' }}">Home</a>
                    <a href="/about" class="nav-item nav-link {{ $title === 'About' ? 'active' : '' }}">About</a>
                    <div class="nav-item dropdown">

                        <a href="#"
                            class="nav-link {{ $title === 'Blog' ? 'active' : '' }}{{ $title === 'Blog_detail' ? 'active' : '' }}{{ $title === 'Team' ? 'active' : '' }}{{ $title === 'Search' ? 'active' : '' }}{{ $title === 'Appoinment' ? 'active' : '' }}{{ $title === 'Testimonial' ? 'active' : '' }} dropdown-toggle"
                            data-bs-toggle="dropdown">Pages</a>
                        <div class="dropdown-menu m-0">
                            <a href="/blog" class="dropdown-item">Blog Grid</a>
                            <a href="/detail-blog" class="dropdown-item">Blog Detail</a>
                            <a href="/team" class="dropdown-item">The Team</a>
                            <a href="/testimonial" class="dropdown-item">Testimonial</a>
                            <a href="/appointment" class="dropdown-item">Appointment</a>
                            <a href="/search" class="dropdown-item">Search</a>
                        </div>
                    </div>
                    <a href="/contact" class="nav-item nav-link {{ $title === 'Contact' ? 'active' : '' }}">Contact</a>
                    <a href="{{ route('login') }}" class="nav-item nav-link" style="margin-top: -8px;">

                        <button type="button" class="btn btn-primary">Login</button>
                    </a>

                </div>
            </div>
        </nav>
    </div>
</div>
<!-- Navbar End -->
