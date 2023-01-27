@extends('layouts.master')

@section('master')
    <nav class="navbar navbar-expand navbar-light navbar-top m-0">
        <div class="container-fluid">
            <a href="#" class="burger-btn d-block">
                <i class="bi bi-justify fs-3"></i>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-lg-0">
                    <li class="nav-item dropdown me-1">
                        <a class="nav-link active dropdown-toggle text-gray-600" href="#" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <i class='bi bi-envelope bi-sub fs-4'></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton">
                            <li>
                                <h6 class="dropdown-header">Mail</h6>
                            </li>
                            <li><a class="dropdown-item" href="#">No new mail</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown me-3">
                        <a class="nav-link active dropdown-toggle text-gray-600" href="#" data-bs-toggle="dropdown"
                            data-bs-display="static" aria-expanded="false">
                            <i class='bi bi-bell bi-sub fs-4'></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end notification-dropdown"
                            aria-labelledby="dropdownMenuButton">
                            <li class="dropdown-header">
                                <h6>Notifications</h6>
                            </li>
                            <li class="dropdown-item notification-item">
                                <a class="d-flex align-items-center" href="#">
                                    <div class="notification-icon bg-primary">
                                        <i class="bi bi-cart-check"></i>
                                    </div>
                                    <div class="notification-text ms-4">
                                        <p class="notification-title font-bold">Successfully check out</p>
                                        <p class="notification-subtitle font-thin text-sm">Order ID #256</p>
                                    </div>
                                </a>
                            </li>
                            <li class="dropdown-item notification-item">
                                <a class="d-flex align-items-center" href="#">
                                    <div class="notification-icon bg-success">
                                        <i class="bi bi-file-earmark-check"></i>
                                    </div>
                                    <div class="notification-text ms-4">
                                        <p class="notification-title font-bold">Homework submitted</p>
                                        <p class="notification-subtitle font-thin text-sm">Algebra math homework</p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <p class="text-center py-2 mb-0"><a href="#">See all notification</a></p>
                            </li>
                        </ul>
                    </li>
                </ul>
                <div class="dropdown">
                    <a href="#" data-bs-toggle="dropdown" aria-expanded="false">
                        <div class="user-menu d-flex">
                            <div class="user-name text-end me-3">
                                <h6 class="mb-0 text-gray-600">{{ Auth::user()->fullname }}</h6>
                                <p class="mb-0 text-sm text-gray-600">{{ Auth::user()->role }}</p>
                            </div>
                            <div class="user-img d-flex align-items-center">
                                <div class="avatar avatar-md">
                                    <img src="assets/images/faces/1.jpg">
                                </div>
                            </div>
                        </div>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton"
                        style="min-width: 11rem;">
                        <li>
                            <h6 class="dropdown-header">Hello, John!</h6>
                        </li>
                        <li><a class="dropdown-item" href="{{ route('user.profile') }}"><i
                                    class="icon-mid bi bi-person me-2"></i> My
                                Profile</a></li>
                        <li><a class="dropdown-item" href="#"><i class="icon-mid bi bi-gear me-2"></i>
                                Settings</a></li>
                        <li><a class="dropdown-item" href="#"><i class="icon-mid bi bi-wallet me-2"></i>
                                Wallet</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="{{ route('logout') }}"><i
                                    class="icon-mid bi bi-box-arrow-left me-2"></i>
                                Logout</a></li>

                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <div class="card">
        <div class="card-header">
            <h5 class="card-title">Laporan Perpustakaan</h5>
        </div>
        <div class="card-body">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <a class="nav-link active" id="home-tab" data-bs-toggle="tab" href="#home" role="tab"
                        aria-controls="home" aria-selected="true">Tanggal Peminjaman</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#profile" role="tab"
                        aria-controls="profile" aria-selected="false">Tanggal Pengembalian</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="contact-tab" data-bs-toggle="tab" href="#contact" role="tab"
                        aria-controls="contact" aria-selected="false">Nama Anggota Siswa</a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <p class='my-2'>
                        Tanggal Peminjaman
                    </p>
                    <div class="dataTable-search">
                        <input class="dataTable-input" placeholder="Search..." type="text">
                    </div>
                    <div class="mt-1"><a href="#" class="btn btn-sm btn-outline-primary">Tampilkan Data</a></div>
                </div>

                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <p class='my-2'>
                        Tanggal Pengembalian
                    </p>
                    <div class="dataTable-search">
                        <input class="dataTable-input" placeholder="Search..." type="text">
                    </div>
                    <div class="mt-1"><a href="#" class="btn btn-sm btn-outline-primary">Tampilkan Data</a></div>
                </div>
                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                    <p class='my-2'>
                        Nama Anggota Siswa
                    </p>
                    <div class="dataTable-search">
                        <input class="dataTable-input" placeholder="Search..." type="text">
                    </div>
                    <div class="mt-1"><a href="#" class="btn btn-sm btn-outline-primary">Tampilkan Data</a></div>
                </div>
            </div>
        </div>
    </div>
@endsection
