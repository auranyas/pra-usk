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

    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Identitas Aplikasi</h3>

                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <!-- // Basic multiple Column Form section start -->
        <section id="multiple-column-form">
            <div class="row match-height">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-6"><h4 class="card-title">Edit Identitas Aplikasi</h4></div>
                                <div class="col-6"><h4 class="card-title">Identitas Aplikasi</h4></div>
                            </div>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <form class="form" data-parsley-validate>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="">
                                                <div class="form-group mandatory">
                                                    <label for="first-name-column" class="form-label">Nama Aplikasi</label>
                                                    <input type="text" id="first-name-column" class="form-control" placeholder="E - Perpus SLP" name="fname-column" data-parsley-required="true">
                                                </div>
                                            </div>

                                            <div class="">
                                                <div class="form-group">
                                                    <label for="city-column" class="form-label">Alamat Lengkap</label>
                                                    <input type="text" id="city-column" class="form-control" placeholder="Alamat" name="city-column" data-parsley-restricted-city="Jakarta">
                                                </div>
                                            </div>

                                            <div class="">
                                                <div class="form-group">
                                                    <label for="company-column" class="form-label">Email</label>
                                                    <input type="text" id="company-column" class="form-control" name="company-column" placeholder="Email">
                                                </div>
                                            </div>

                                            <div class="">
                                                <div class="form-group mandatory">
                                                    <label for="email-id-column" class="form-label">Nomor Telfon</label>
                                                    <input type="email" id="email-id-column" class="form-control" name="email-id-column" placeholder="nomor" data-parsley-required="true">
                                                </div>
                                            </div>

                                            <div class="d-flex justify-content-end">
                                                <button type="submit" class="btn btn-primary me-1 mb-1 ">Update</button>
                                            </div>
                                        </div>
                                        <div class="col-6 d-flex justify-content-center">
                                            <div class="col-md-6 col-12">
                                                <div class=""><img src="assets/images/OIP.jpg" alt="" width="100%"></div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- // Basic multiple Column Form section end -->
    </div>
@endsection
