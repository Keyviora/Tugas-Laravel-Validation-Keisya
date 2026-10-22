<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Volt - Free Bootstrap 5 Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Vendor CSS -->
    <link type="text/css" href="{{ asset('assets-admin/vendor/@fortawesome/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <link type="text/css" href="{{ asset('assets-admin/vendor/notyf/notyf.min.css') }}" rel="stylesheet">
    
    <!-- Volt CSS -->
    <link type="text/css" href="{{ asset('assets-admin/css/volt.css') }}" rel="stylesheet">
</head>

<body>

    <!-- Sidebar -->
    <nav id="sidebarMenu" class="sidebar d-lg-block bg-dark text-white collapse data-simplebar" data-simplebar>
        <div class="sidebar-inner px-4 pt-3">
            <div class="user-card d-flex d-md-none align-items-center justify-content-between justify-content-md-center pb-4">
                <div class="d-flex align-items-center">
                    <div class="avatar-lg me-4">
                        <img src="{{ asset('assets-admin/assets/img/team/profile-picture-3.jpg') }}" class="card-img-top rounded-circle border-white" alt="Bonnie Green">
                    </div>
                    <div class="text-block">
                        <h2 class="h6 mb-0">Hi, Jane</h2>
                        <a href="#" class="btn btn-secondary btn-sm text-white mt-3"><span class="fas fa-sign-out-alt me-2"></span>Sign Out</a>
                    </div>
                </div>
                <div class="collapse-close d-md-none">
                    <a href="#sidebarMenu" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="true" aria-label="Toggle navigation">
                        <svg class="icon icon-xs" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </a>
                </div>
            </div>
            <ul class="nav flex-column pt-3 pt-md-0">
                <li class="nav-item">
                    <span class="nav-link collapsed d-flex justify-content-between align-items-center" data-bs-toggle="collapse" data-bs-target="#submenu-dashboard">
                        <span>
                            <span class="sidebar-icon"><svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path><path d="M2 10a8 8 0 008 8v-8H2z"></path></svg></span>
                            <span class="sidebar-text">Dashboard</span>
                        </span>
                        <span class="link-arrow"><svg class="icon icon-sm" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1.000 1.000 0 010-1.414L10.586 10 7.293 6.707a1.000 1.000 0 011.414-1.414l4 4a1.000 1.000 0 010 1.414l-4 4a1.000 1.000 0 01-1.414 0z" clip-rule="evenodd"></path></svg></span>
                    </span>
                    <div class="multi-level collapse show" role="list" id="submenu-dashboard" aria-expanded="false">
                        <ul class="flex-column nav">
                            <li class="nav-item active"><a class="nav-link" href="{{ route('dashboard') }}"><span class="sidebar-text">Overview</span></a></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </nav>

    <main class="content">
        <!-- Navbar -->
        <nav class="navbar navbar-top navbar-expand navbar-dashboard navbar-dark ps-0 pe-2 pb-0">
            <div class="container-fluid px-0">
                <div class="d-flex justify-content-between w-100" id="navbarSupportedContent">
                    <div class="d-flex align-items-center">
                        <button id="sidebar-toggle" class="sidebar-toggle me-3 btn btn-icon-only d-none d-lg-inline-block align-items-center justify-content-center"><span class="fas fa-bars"></span></button>
                    </div>
                    <ul class="navbar-nav align-items-center">
                        <li class="nav-item dropdown ms-3">
                            <a class="nav-link dropdown-toggle pt-1 px-0" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <div class="media d-flex align-items-center">
                                    <img class="avatar rounded-circle" alt="Image placeholder" src="{{ asset('assets-admin/assets/img/team/profile-picture-3.jpg') }}">
                                    <div class="media-body ms-2 text-dark align-items-center d-none d-lg-block">
                                        <span class="mb-0 font-small fw-bold text-gray-900">Jane Doe</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="py-4">
            <div class="d-flex justify-content-between w-100 flex-wrap">
                <div class="mb-3 mb-lg-0">
                    <h1 class="h4">Dashboard Overview</h1>
                    <p class="mb-0">Halaman utama admin template Volt berhasil dipasang.</p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12 mb-4">
                <div class="card border-0 shadow components-section">
                    <div class="card-body">
                        <h2 class="h5 mb-4">Selamat Datang!</h2>
                        <p class="mb-0">Template Volt berhasil diintegrasikan ke project Laravel dengan aman.</p>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Core -->
    <script src="{{ asset('assets-admin/vendor/@popperjs/core/dist/umd/popper.min.js') }}"></script>
    <script src="{{ asset('assets-admin/vendor/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets-admin/vendor/onscreen/dist/on-screen.umd.min.js') }}"></script>
    <script src="{{ asset('assets-admin/vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js') }}"></script>
    <script src="{{ asset('assets-admin/vendor/notyf/notyf.min.js') }}"></script>
    <script src="{{ asset('assets-admin/assets/js/volt.js') }}"></script>

</body>

</html>