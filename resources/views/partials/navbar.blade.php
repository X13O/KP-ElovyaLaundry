<nav
    class="navbar navbar-expand-lg navbar-dark bg-primary text-white shadow-sm sticky-top d-md-none d-lg-none d-xl-none">
    <a class="navbar-brand" href="/"><i class="bi bi-card-text"></i> Elovya Laundry</i></a>
    <button class="navbar-toggler border-0" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fa fa-bars"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="/dashboard/admin"><i class="fa fa-desktop text-white mr-2"></i>Kasir</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/dashboard/admin/kategori"><i
                        class="fa fa-bars text-white mr-2"></i>Kategori</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/dashboard/admin/tipe"><i class="fa fa-list text-white mr-2"
                        aria-hidden="true"></i>Tipe
                    Cucian</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/dashboard/admin/pelanggan"><i class="fa fa-list-ol text-white mr-2"
                        aria-hidden="true"></i>Data
                    Pelanggan</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/dashboard/admin/laporan"><i
                        class="fa fa-chart-line text-white mr-2"></i>Laporan</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/dashboard"><i class="fa fa-table text-white mr-2"></i>Dashboard</a>
            </li>
            <li class="nav-item">
                <form action="/logout" method="POST">
                    @csrf
                    <button type="submit" class="nav-link border-0 bg-primary"><i
                            class="fa fa-power-off text-white mr-2" onclick="confirmLogout()"></i>Keluar</button>
                </form>
            </li>
        </ul>
    </div>
</nav>