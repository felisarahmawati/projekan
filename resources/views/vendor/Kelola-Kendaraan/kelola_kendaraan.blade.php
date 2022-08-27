@extends('layouts.vendor')

<!--hero section-->
@section('container')
<section class="align-items-center  services"  id="services" style="padding-top: 100px;" data-aos-delay="50">
    <div class="">
        <div class="cardBox1">
            <div class="card2">
                <div>
                    <a href=" /Vendor/Kelola-kendaraan/kelola_kendaraan" style="text-decoration:none">
                        <div class="cardName2">Kendaraan
                        </div>
                    </a>
                </div>
            </div>
    
            <div class="card1">
                <div>
                    <a href=" /Vendor/Kelola-Bangunan/kelola_bangunan" style="text-decoration:none">
                        <div class="cardName1">Bangunan
                        </div>
                    </a>
                </div>
            </div>
    
            <div class="card1">
                <div>
                    <a href=" /Vendor/Kelola_Barang/kelola_barangstep1" style="text-decoration:none">
                        <div class="cardName1">Barang
                        </div>
                    </a>
                </div>
            </div>
            <div class="card1">
                <div>
                    <a href=" /Vendor/Kelola-PickUp/kelola_pickup" style="text-decoration:none">
                        <div class="cardName1">Pick Up
                        </div>
                    </a>
                </div>
            </div>
        </div>
    
    
            <div class="justify-content-center container">
                <img src="../../assets/img/Logoo.png" alt="" class="mx-auto d-block img-fluid mb-5 " style="width:300px">
           
        <a href=" /Vendor/Kelola-Kendaraan/layanan_step1 " class="mb-5"><button class="btn btn-outline-success mb-5" style="width:100%">Tambah Layanan</button></a>
            </div>
    </div>
</section>
@endsection