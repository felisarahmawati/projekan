<!DOCTYPE html>

<html lang="en" >

<head>
    <meta charset="UTF-8">
    <title>titipsini.com | SuperAdmin </title>
    <link href="{{ asset('assets/img/ic2.png') }}" rel="icon">
    <link href="{{ asset('assets/css/admin.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/modal.css') }}" rel="stylesheet">
    <link href="{{ asset('style/loginview2.css') }}" rel="stylesheet">
    <!-- Boxiocns CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <div class="sidebar">
        <div class="logo-details">
            <div class="profile-content">
                <img class="p-1 mt-1 ms-3" style="width: 45px; height: 45px;" src="{{ asset('Frame 172.png') }}"
                    alt="Profile">
            </div>

            <a href="/" style="text-decoration: none;">
                <span class="logo_name">Titipsini.com</span>
            </a>
        </div>
        <ul class="nav-links">
            <li class="list {{ Request::segment(2) == 'dashboard' ? 'active' : '' }}">
                <a href="/superadmin/dashboard">
                    <i class='bx bx-grid-alt'></i>
                    <span class="link_name">Dashboard</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="/superadmin/dashboard">Dasboard</a></li>
                </ul>
            </li>
            <li class="list {{ Request::segment(2) == 'profil' ? 'active' : '' }}">
                <a href="/superadmin/profil">
                    <i class='bx bx-user'></i>
                    <span class="link_name">Profile</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="/superadmin/profil">Profile</a></li>
                </ul>
            </li>
           
            <li class="list {{ Request::segment(2) == 'data' ? 'active' : '' }}">
                <div class="iocn-link">
                    <a>
                        <i class='bx bx-data'></i>
                        <span class="link_name dropBtn">Data</span>
                    </a>
                    <i class='bx bxs-chevron-down arrow'></i>
                </div>
                <div class="sub-menu">
                    <div class="drop-box">
                        <a href="/superadmin/data/order">Order</a>
                        <a href="/superadmin/data/payment">Payment</a>
                        <a href="/superadmin/data/pengaturan-user">Pengaturan Admin</a>
                        <a href="/superadmin/data/alamat">Alamat Admin</a>
                    </div>
                </div>
            </li>
            <li class="list {{ Request::segment(2) == 'vendor' ? 'active' : '' }}">
                <div class="iocn-link">
                    <a>
                        <i class='bx bxs-shopping-bags'></i>
                        <span class="link_name dropBtn">Vendor</span>
                    </a>
                    <i class='bx bxs-chevron-down arrow'></i>
                </div>
                <div class="sub-menu">
                    <div class="drop-box">
                        <a href="/superadmin/vendor/vendor">Data Vendor</a>
                        <a href="/superadmin/vendor/transaksi">Data Transaksi</a>
                        <a href="/superadmin/vendor/pickup">Data pick up</a>
                        <a href="/superadmin/vendor/laporan">Laporan</a>
                    </div>
                </div>
            </li>
            <li class="list {{ Request::segment(2) == 'setting' ? 'active' : '' }}">
                <div class="iocn-link">
                    <a>
                        <i class='bx bx-cog'></i>
                        <span class="link_name dropBtn">Pengaturan</span>
                    </a>
                    <i class='bx bxs-chevron-down arrow'></i>
                </div>
                <div class="sub-menu">
                    <div class="drop-box">
                        <a href="/superadmin/setting/tambah">Tambah Data Admin</a>
                        <a href="/superadmin/setting/hapus">Hapus Data Admin</a>
                    </div>
                </div>
            </li>
            {{-- <li class="list {{ Request::segment(2) == 'setting' ? 'active' : '' }}">
                <a href="/superadmin/setting">
                    <i class='bx bx-cog'></i>
                    <span class="link_name">Setting</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="/superadmin/setting">Setting</a></li>
            </ul>
            </li> --}}
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    <i class='bx bx-log-out'></i>{{ Auth::user()->name }}
                </a>
    
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <a data-bs-toggle="modal" data-bs-target="#ModalLogout" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
    
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </li>
            {{-- <li>
                <div class="profile-details">
                    <div class="profile-content">
                        <img src="{{ asset('assets/img/foto1.jpg') }}" alt="Profile">
                    </div>
                    <div class="name-job">
                        <div class="profile_name">Ahmad Arif</div>
                        <div class="job">Web Designer</div>
                    </div>
                    <a data-bs-toggle="modal" data-bs-target="#ModalLogout">
                        <i class='bx bx-log-out'></i>
                    </a>

                </div>
            </li> --}}
        </ul>
    </div>
    <!-- Modal Logout -->
    <div class="modal fade" id="ModalLogout" tabindex="-1" aria-labelledby="ModalLogoutLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="ModalLogoutLabel">Log Out <i class="bx bxs-lock-alt"></i></h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Are you sure you want to log-off?
                </div>
                <div class="modal-footer">
                    <a href="{{ route('logout') }}" class="btn btn-danger"> Logout</a>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- get child view data -->
    @yield('content')
    <!-- end child view -->

    <script src="{{ asset('assets/js/my_chart.js') }}" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.6.0/dist/chart.min.js"></script>

    <script>
        // Script for sidenav dropdown
        let arrow = document.querySelectorAll(".arrow");
        let dropdownBtn = document.querySelectorAll(".dropBtn");
        for (var i = 0; i < arrow.length; i++) {
            arrow[i].addEventListener("click", (e) => {
                let arrowParent = e.target.parentElement.parentElement;
                arrowParent.classList.toggle("showMenu");
            })
            dropdownBtn[i].addEventListener("click", (e) => {
                let dropdownParent = e.target.parentElement.parentElement.parentElement;
                dropdownParent.classList.toggle("showMenu");
            });
        }
        // script for sidenav toggle
        let sidebar = document.querySelector(".sidebar");
        let sidebarBtn = document.querySelector(".bx-menu");
        console.log(sidebarBtn);
        sidebarBtn.addEventListener("click", () => {
            sidebar.classList.toggle("close");
        });
    </script>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>
