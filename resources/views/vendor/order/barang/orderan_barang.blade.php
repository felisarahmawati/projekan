@extends('layouts.dashboard_vendor')

<!--hero section-->
@section('container')
<section class="home-section"  >
    <div class="main">
        <div class="topbar">
            <div class="home-content">
                <i class='bx bx-menu'></i>
            </div>
            <div class="cardHeader-title">
                <h2>Pesanan</h2>
            </div>
        </div>    
        <div class="">
            <div class="cardBox1">
                <div class="card1">
                    <div>
                        <a href="/orderan_baru" style="text-decoration:none">
                            <div class="cardName1">Kendaraan
                            </div>
                        </a>
                    </div>
                </div>
        
                <div class="card1">
                    <div>
                        <a href="/orderan_bangunan" style="text-decoration:none">
                            <div class="cardName1">Bangunan
                            </div>
                        </a>
                    </div>
                </div>
        
                <div class="card2">
                    <div>
                        <a href="/orderan_barang" style="text-decoration:none">
                            <div class="cardName2">Barang
                            </div>
                        </a>
                    </div>
                </div>
                <div class="card1">
                    <div>
                        <a href="/orderan_pickup" style="text-decoration:none">
                            <div class="cardName1">Pick Up
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row container">
            <div class="col-md-11">
                <div class="card" style="background-color: #fff;">
                    <div class="container">
                        <div class="row">
                            <div class="col-md" style="padding-top: 25px; font-size:20px">
                                <h3><b>Today</b></h3>
                            </div>
                        </div>
                            <div class="card-body justify-content-center" style="margin-top: 10px; width:80%; margin:auto">
                                <div class="card mt-2 shadow rounded-3">
                                    <div class="row align-items-center">
                                    <div class="col text-center">
                                        <img src="../assets/img/icon_barang.png" class="img-fluid rounded" alt="..." style="width: 30%; height:30%; padding-top: 15px">
                                        <p style="padding-top: 15px">Barang</p>
                                        <p><b>Mori Ucing</b></p>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md">
                                                    <p>Sepatu</p>
                                                </div>
                                                <div class="col-md-3">
                                                    1
                                                </div>   
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <p>Tas carier</p>
                                                </div>
                                                <div class="col-md-3">
                                                    2
                                                </div>   
                                            </div>
                                            <span class="border bg-warning text-center rounded-3">Pick Up</span>
                                            <div class="d-grid gap-2 col-6 mx-auto">
                                                <a class="btn btn-outline-success" href="/rincian_barang" role="button">Detail</a>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                    </div>

                    <div class="container">
                        <div class="card-body mt-10" style="margin-top: 10px; width:80%; margin:auto">
                            <div class="card shadow rounded-3">
                                <div class="row align-items-center">
                                <div class="col text-center">
                                    <img src="../assets/img/icon_barang.png" class="img-fluid rounded" alt="..." style="width: 30%; height:30%; padding-top: 15px">
                                    <p style="padding-top: 15px">Barang</p>
                                    <p><b>Mori Ucing</b></p>
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md">
                                                <p>Laptop</p>
                                            </div>
                                            <div class="col-md-3">
                                                1
                                            </div>   
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <p>Lemari</p>
                                            </div>
                                            <div class="col-md-3">
                                                2
                                            </div>   
                                        </div>
                                        
                                        <div class="d-grid gap-2 col-6 mx-auto">
                                            <a class="btn btn-outline-success" href="/rincian_tanpapick" role="button">Detail</a>
                                        </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="container">
                        <div class="card-body justify-content-center" style="margin-top: 10px; width:80%; margin:auto">
                            <div class="card mb-4 shadow rounded-3">
                                <div class="row align-items-center">
                                <div class="col text-center">
                                    <img src="../assets/img/icon_barang.png" class="img-fluid rounded" alt="..." style="width: 30%; height:30%; padding-top: 15px">
                                    <p style="padding-top: 15px">Barang</p>
                                    <p><b>Mori Ucing</b></p>
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md">
                                                <p>Mobil</p>
                                            </div>
                                            <div class="col-md-3">
                                                3
                                            </div>   
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <p>Motor</p>
                                            </div>
                                            <div class="col-md-3">
                                                3
                                            </div>   
                                        </div>
                                        <span class="border bg-warning text-center rounded-3">Pick Up</span>
                                        <div class="d-grid gap-2 col-6 mx-auto">
                                            <a class="btn btn-outline-success" href="/rincian_barang" role="button">Detail</a>
                                        </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                </div>
                </div>
            </div>
        </div>
        

    </section>
    @endsection