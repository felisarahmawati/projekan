@extends('Layouts.dashboard_vendor')
@section('container')
<section class="home-section">

    <div class="main">
        <div class="topbar">
            <!-- Extend Navbar >> bermasalah khusus dashboard -->
            <div class="home-content">
                <i class='bx bx-menu'></i>
            </div>
            <!-- Search -->
            <div class="search" data-aos="fade-left" data-aos-duration="1000">
                <label>
                    <input type="text" placeholder="Cari Disini">
                    <ion-icon name="search-outline"></ion-icon>
                </label>
            </div>
        </div>
        
        <div class="cardBox" data-aos="fade-up" data-aos-delay="100">
          

            <div class="card border-0" style="background-color:#00B56A;">
                <div class="card-body">
                    <div class="numbers" style="color:white">$230.000</div>
                    <div class="cardName" style="color:white">Pemasukan</div>
                </div>
                <div class="iconBx card-img-overlay">
                   <a href="/vendor/pemasukan"> <ion-icon name="archive-outline" style= "color:white"></ion-icon></a>
                </div>
            </div>
                <div class="card border-0">
                    <div class="card-body">
                        <div class="numbers">$200.000</div>
                        <div class="cardName">Penarikan</div>
                    </div>
                    <div class="iconBx card-img-overlay">
                        <a href="/vendor/penarikan"><ion-icon name="browsers"></ion-icon></a>
                    </div>
                </div>

            <div class="card border-0">
                <div class="card-body">
                    <div class="numbers">$30.000</div>
                    <div class="cardName">Saldo</div>
                </div>
                <div class="iconBx card-img-overlay">
                   <a href="/vendor/saldo"> <ion-icon name="card"></ion-icon></a>
                </div>
            </div>
        </div>
   
    
        <div class="row">
            <div class="col-xs-10">
                <div class="recentOrders">
                    <div class="details3">
                        <div class="recentOrders3">
                            <div class="rincian d-inline mb-2">
                                <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-success fw-bold px-2 shadow float-end"><a href="/finance/DataPenarikan/konfirmasi">Konfirmasi</a></button>
                            </div>
                            <table>
                                <thead>
                                    <tr>
                                        <td><input type="checkbox" onchange="checkAll(this)"></td>
                                        <td>Layanan</td>
                                        <td>Tanggal</td>
                                        <td>metode pembayaran</td>
                                        <td>Status</td>
                                        <td>Total</td>
                                        <td>Action</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><input type="checkbox" onchange="checkAll(this)"></td>
                                        <td>Kendaraan</td>
                                        <td>23/08/22</td>
                                        <td>Dana</td>
                                        {{-- <td>pending</td> --}}
                                        <td class="text-start"><span class="status delivered">Delivered</span></td>
                                        <td>Rp200.000</td>
                                        <td class="td" style="size: 30px;">
                                            <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal"
                                                class="btndetail">
                                                <i class='bx bx-detail'></i>
                                            </button>
                                            <button class="btndelete">
                                                <i class='bx bxs-trash'></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" onchange="checkAll(this)"></td>
                                        <td>Kendaraan</td>
                                        <td>23/08/22</td>
                                        <td>Dana</td>
                                        {{-- <td>pending</td> --}}
                                        <td class="text-start"><span class="status delivered">Delivered</span></td>
                                        <td>Rp200.000</td>
                                        <td class="td" style="size: 30px;">
                                            <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal"
                                                class="btndetail">
                                                <i class='bx bx-detail'></i>
                                            </button>
                                            <button class="btndelete">
                                                <i class='bx bxs-trash'></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" onchange="checkAll(this)"></td>
                                        <td>Kendaraan</td>
                                        <td>23/08/22</td>
                                        <td>Dana</td>
                                        {{-- <td>pending</td> --}}
                                        <td class="text-start"><span class="status delivered">Delivered</span></td>
                                        <td>Rp200.000</td>
                                        <td class="td" style="size: 30px;">
                                            <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal"
                                                class="btndetail">
                                                <i class='bx bx-detail'></i>
                                            </button>
                                            <button class="btndelete">
                                                <i class='bx bxs-trash'></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" onchange="checkAll(this)"></td>
                                        <td>Kendaraan</td>
                                        <td>23/08/22</td>
                                        <td>Dana</td>
                                        {{-- <td>pending</td> --}}
                                        <td class="text-start"><span class="status delivered">Delivered</span></td>
                                        <td>Rp200.000</td>
                                        <td class="td" style="size: 30px;">
                                            <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal"
                                                class="btndetail">
                                                <i class='bx bx-detail'></i>
                                            </button>
                                            <button class="btndelete">
                                                <i class='bx bxs-trash'></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" onchange="checkAll(this)"></td>
                                        <td>Kendaraan</td>
                                        <td>23/08/22</td>
                                        <td>Dana</td>
                                        {{-- <td>pending</td> --}}
                                        <td class="text-start"><span class="status delivered">Delivered</span></td>
                                        <td>Rp200.000</td>
                                        <td class="td" style="size: 30px;">
                                            <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal"
                                                class="btndetail">
                                                <i class='bx bx-detail'></i>
                                            </button>
                                            <button class="btndelete">
                                                <i class='bx bxs-trash'></i>
                                            </button>
                                        </td>
                                    </tr>
                                   
                                </tbody>
                               
                            </table>
                        </div>
                    </div>
                </div>
                <!-- /.box -->
            </div>
        </div>
    </div>
    </div>
</section>
@endsection