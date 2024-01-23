<!DOCTYPE html>
<html lang="en">

<head>
    <title>Elovya Laundry | {{ $title }}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('fontawesome/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('DataTables/datatables.min.css') }}" />
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <!-- PWA  -->
    <meta name="theme-color" content="#6777ef" />
    <link rel="apple-touch-icon" href="{{ asset('logo.png') }}">
    <link rel="manifest" href="{{ asset('/manifest.json') }}">


    <style>
        .btn-group-xs>.btn,
        .btn-xs {
            padding: .25rem .4rem;
            font-size: .875rem;
            line-height: .5;
            border-radius: .2rem;
        }

        .card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 6px 20px rgb(17 26 104 / 10%);
        }

        .card-header {
            border-radius: 15px 15px 0px 0px !important;
        }

        .form-control {
            border-radius: 15px;
        }

        .btn {
            border-radius: 15px;
        }

        button.buttons-html5 {
            padding: .25rem .4rem !important;
            font-size: .875rem !important;
            line-height: .5 !important;
        }
    </style>
</head>

<body>
    {{-- Humberger Start --}}
    @include('partials.navbar')
    {{-- Humberger End --}}

    <div class="bg-primary text-center py-2 shadow-sm sticky-top d-none d-md-block mx-auto">
        <a class="navbar-brand text-white" href="/dashboard"><i class="bi bi-card-text"></i> Elovya Laundry</a>
    </div>
    <br>
    <div class="container-fluid">
        <div class="row">
            {{-- Main Bagian Kiri Start --}}
            <div class="col-md-3 mb-2 d-none d-md-block">
                <div class="card">
                    <div class="card-header bg-primary">
                        <div class="card-tittle text-white">Hallo, {{ auth()->user()->username }}</div>
                    </div>
                    <div class="card-body">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="/dashboard/admin"><i
                                        class="fa fa-desktop text-primary mr-2"></i>Kasir</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/dashboard/admin/kategori"><i
                                        class="fa fa-list text-primary mr-2"></i>Kategori</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/dashboard/admin/tipe"><i
                                        class="fa fa-list-ol text-primary mr-2"></i>Tipe Cucian</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/dashboard/admin/pelanggan"><i
                                        class="fa fa-list-ol text-primary mr-2"></i>Data
                                    Pelanggan</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/dashboard/admin/laporan"><i
                                        class="fa fa-chart-line text-primary mr-2"></i>Laporan</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/dashboard"><i
                                        class="fa fa-table text-primary mr-2"></i>Dashboard</a>
                            </li>
                            <form action="/logout" method="POST">
                                @csrf
                                <button type="submit" class="nav-link border-0 bg-white"><i
                                        class="fa fa-power-off text-primary mr-2"
                                        onclick="confirmLogout()"></i>Keluar</button>
                            </form>
                        </ul>
                    </div>
                </div>
            </div>
            {{-- Main Bagian Kiri End --}}

            {{-- Main Bagian Tengah Start --}}
            <div class="col-md-8 mb-2">
                <div class="row">
                    <div class="col-md-12 mb-3">
                        @if (session()->has('success'))
                        <!-- Bootstrap Alert -->
                        <div class="alert alert-success alert-dismissible fade show text-lg-left" role="alert">
                            {{ session('success') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        @endif
                        <br>
                        <div class="card">
                            <div class="card-body py-4">
                                <form method="POST" action="/dashboard/admin/laporan">
                                    @csrf
                                    <div class="table-responsive">
                                        <a href="/dashboard/admin/tipe/create" class="btn btn-primary mt-2 mb-3">Tambah
                                            Tipe Cucian
                                            Baru</a>
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th scope="col">No</th>
                                                    <th scope="col">Tipe Cucian</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    @foreach ($tipe as $dataTipe)
                                                <tr class="text-left ">
                                                    <td class="text-left text-lg-left">{{ $loop->iteration }}</td>
                                                    <td class="text-left text-lg-left">{{
                                                        $dataTipe->tipe_harga
                                                        }}</td>
                                                    <td class="text-left text-lg-left">
                                                        <a href="/dashboard/admin/tipe/{{ $dataTipe->id }}/edit"
                                                            class="badge bg-warning text-white mt-2 mb-2 "><i
                                                                class="bi bi-pencil" style="font-size: 1.7em;"></i></a>
                                                        <form action="/dashboard/admin/tipe/{{ $dataTipe->id }}"
                                                            method="POST" class="d-inline">
                                                            @method('delete')
                                                            @csrf
                                                            <button
                                                                class="badge bg-danger border-0 text-white mt-2 mb-2"
                                                                onclick="return confirm('Yakin Mau Hapus Tipe Cucian {{ $dataTipe->tipe_harga }}??')"><i
                                                                    class="bi bi-x-circle"
                                                                    style="font-size: 1.7em;"></i></button>
                                                        </form>
                                                    </td>
                                                </tr>
                                                @endforeach
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- Main Bagian Tengah End --}}
        </div>
    </div>

    <!-- Include Bootstrap JS (jQuery and Popper.js required) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="{{ asset('/sw.js') }}"></script>
    <script>
        if ("serviceWorker" in navigator) {
          // Register a service worker hosted at the root of the
          // site using the default scope.
          navigator.serviceWorker.register("/sw.js").then(
          (registration) => {
             console.log("Service worker registration succeeded:", registration);
          },
          (error) => {
             console.error(`Service worker registration failed: ${error}`);
          },
        );
      } else {
         console.error("Service workers are not supported.");
      }
    </script>
</body>