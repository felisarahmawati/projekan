@extends('layouts.main')

@section('container')
    <!-- card edit alamat -->
    <section id="services" class="services section-bg" style="padding-top: 100px;" data-aos-delay="50">
            
            <div class="container mt-2 mb-2">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-2">
                                <img src="{{ asset('assets/img/ninja.png') }}" style="width: 160px; padding-top: 10px">
                            </div>
                            <div class="col-4">
                                <h5><b>Wijaya - titipsini</b></h5>
                                <h6><i class="bi bi-geo-alt-fill p-1" style="color: #F24E1E"></i>Kec.Banguntapan</h6>
                                <a class="btn btn-success" href="#" role="button">Chat vendor</a>
                                <a class="btn btn-success" role="button" data-bs-toggle="modal" data-bs-target="#infoToko">Info toko</a>
                                    <!-- Modal -->
                                    <div class="modal fade" id="infoToko" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header text-white bg-success">
                                                    <h5 class="modal-title" id="exampleModalLabel"><b>Info Toko</b></h5>
                                                    <button type="button" class="btn-close bg-white rounded" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <h6><b>Deskripsi Toko</b></h6>
                                                    <p>Wijaya - titipsini menyediakan layanan penitipan kendaraan  
                                                        kecil hingga kendaraan besar, dengan kapasitas lahan 250m x 
                                                        250m. Mampu menampung kendaraan hingga 20 kendaraan kecil 
                                                        dan besar. Wijaya - titipsini juga menyediakan layanan konsul untuk
                                                        semua jenis kendaraan
                                                    </p>
                                                    <h6><b>Bergabung</b></h6>
                                                    <p>Agustus 2020</p>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                            <div class="col-2">
                                <p style="font-size: 50px">|</p>
                            </div>
                            <div class="col-4">
                                <h5 style="padding-top: 15px"><b>Nilai kualitas layanan</b></h5>
                                <div class="rate text-warning">
                                    <p>4,5
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-half"></i> (270)
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mt-3">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-5">
                                <p style="background: #D3FBE2; padding: 15px; border-radius: 10px; margin: 0; 
                                text-align: center; color: #00B56A; font-size: 15px; width:300px">
                                <b>Layanan yang disediakan</b></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-3 mt-2">
                                <div class="card" style="width: 13.5rem">
                                    
                                    <a href="#"><img src="{{ asset('assets/img/z.png') }}" class="card-img-top" alt="..."></a>
                                    <div class="card-body">

                                        <div class="row">
                                            <div class="col">
                                                <a href="#"><p class="card-title"><b>Wijaya | titipsini</b></p></a>
                                            </div>
                                            <div class="col-2">
                                                <h5><i class="bi bi-suit-heart"></i></h5>
                                            </div>
                                            <p class="text-success" style="font-size: 14px; margin-bottom: 10px">
                                                <b>IDR 65.000 - 150.000 / hari</b>
                                            </p> 
                                        </div>
                                        
                                        <div class="rate text-warning">
                                            <p>4,5
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-half"></i> (270)
                                            </p>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <div class="alamat">
                                                    <p style="font-size: 13px">Kec. BangunTapan (1.4 km)</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-4">
                                                <div class="oc">
                                                    <p style="font-size: 15px">Tutup</p>
                                                </div>
                                            </div>
                                            <div class="col-8">
                                                <div class="oc">
                                                    <p style="font-size: 15px; color: #ef5656"><b>Tidak tersedia</b></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3 mt-2">
                                <div class="card" style="width: 13.5rem">
                                    
                                    <a href="#"><img src="{{ asset('assets/img/z.png') }}" class="card-img-top" alt="..."></a>
                                    <div class="card-body">

                                        <div class="row">
                                            <div class="col">
                                                <a href="#"><p class="card-title"><b>Wijaya | titipsini</b></p></a>
                                            </div>
                                            <div class="col-2">
                                                <h5><i class="bi bi-suit-heart"></i></h5>
                                            </div>
                                            <p class="text-success" style="font-size: 14px; margin-bottom: 10px">
                                                <b>IDR 65.000 - 150.000 / hari</b>
                                            </p> 
                                        </div>
                                        
                                        <div class="rate text-warning">
                                            <p>4,5
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-half"></i> (270)
                                            </p>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <div class="alamat">
                                                    <p style="font-size: 13px">Kec. BangunTapan (1.4 km)</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-4">
                                                <div class="oc">
                                                    <p style="font-size: 15px">Tutup</p>
                                                </div>
                                            </div>
                                            <div class="col-8">
                                                <div class="oc">
                                                    <p style="font-size: 15px; color: #ef5656"><b>Tidak tersedia</b></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3 mt-2">
                                <div class="card" style="width: 13.5rem">
                                    
                                    <a href="#"><img src="{{ asset('assets/img/z.png') }}" class="card-img-top" alt="..."></a>
                                    <div class="card-body">

                                        <div class="row">
                                            <div class="col">
                                                <a href="#"><p class="card-title"><b>Wijaya | titipsini</b></p></a>
                                            </div>
                                            <div class="col-2">
                                                <h5><i class="bi bi-suit-heart"></i></h5>
                                            </div>
                                            <p class="text-success" style="font-size: 14px; margin-bottom: 10px">
                                                <b>IDR 65.000 - 150.000 / hari</b>
                                            </p> 
                                        </div>
                                        
                                        <div class="rate text-warning">
                                            <p>4,5
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-half"></i> (270)
                                            </p>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <div class="alamat">
                                                    <p style="font-size: 13px">Kec. BangunTapan (1.4 km)</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-4">
                                                <div class="oc">
                                                    <p style="font-size: 15px">Tutup</p>
                                                </div>
                                            </div>
                                            <div class="col-8">
                                                <div class="oc">
                                                    <p style="font-size: 15px; color: #ef5656"><b>Tidak tersedia</b></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3 mt-2">
                                <div class="card" style="width: 13.5rem">
                                    
                                    <a href="#"><img src="{{ asset('assets/img/z.png') }}" class="card-img-top" alt="..."></a>
                                    <div class="card-body">

                                        <div class="row">
                                            <div class="col">
                                                <a href="#"><p class="card-title"><b>Wijaya | titipsini</b></p></a>
                                            </div>
                                            <div class="col-2">
                                                <h5><i class="bi bi-suit-heart"></i></h5>
                                            </div>
                                            <p class="text-success" style="font-size: 14px; margin-bottom: 10px">
                                                <b>IDR 65.000 - 150.000 / hari</b>
                                            </p> 
                                        </div>
                                        
                                        <div class="rate text-warning">
                                            <p>4,5
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-half"></i> (270)
                                            </p>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <div class="alamat">
                                                    <p style="font-size: 13px">Kec. BangunTapan (1.4 km)</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-4">
                                                <div class="oc">
                                                    <p style="font-size: 15px">Tutup</p>
                                                </div>
                                            </div>
                                            <div class="col-8">
                                                <div class="oc">
                                                    <p style="font-size: 15px; color: #ef5656"><b>Tidak tersedia</b></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3 mt-2">
                                <div class="card" style="width: 13.5rem">
                                    
                                    <a href="#"><img src="{{ asset('assets/img/z.png') }}" class="card-img-top" alt="..."></a>
                                    <div class="card-body">

                                        <div class="row">
                                            <div class="col">
                                                <a href="#"><p class="card-title"><b>Wijaya | titipsini</b></p></a>
                                            </div>
                                            <div class="col-2">
                                                <h5><i class="bi bi-suit-heart"></i></h5>
                                            </div>
                                            <p class="text-success" style="font-size: 14px; margin-bottom: 10px">
                                                <b>IDR 65.000 - 150.000 / hari</b>
                                            </p> 
                                        </div>
                                        
                                        <div class="rate text-warning">
                                            <p>4,5
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-half"></i> (270)
                                            </p>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <div class="alamat">
                                                    <p style="font-size: 13px">Kec. BangunTapan (1.4 km)</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-4">
                                                <div class="oc">
                                                    <p style="font-size: 15px">Tutup</p>
                                                </div>
                                            </div>
                                            <div class="col-8">
                                                <div class="oc">
                                                    <p style="font-size: 15px; color: #ef5656"><b>Tidak tersedia</b></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3 mt-2">
                                <div class="card" style="width: 13.5rem">
                                    
                                    <a href="#"><img src="{{ asset('assets/img/z.png') }}" class="card-img-top" alt="..."></a>
                                    <div class="card-body">

                                        <div class="row">
                                            <div class="col">
                                                <a href="#"><p class="card-title"><b>Wijaya | titipsini</b></p></a>
                                            </div>
                                            <div class="col-2">
                                                <h5><i class="bi bi-suit-heart"></i></h5>
                                            </div>
                                            <p class="text-success" style="font-size: 14px; margin-bottom: 10px">
                                                <b>IDR 65.000 - 150.000 / hari</b>
                                            </p> 
                                        </div>
                                        
                                        <div class="rate text-warning">
                                            <p>4,5
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-half"></i> (270)
                                            </p>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <div class="alamat">
                                                    <p style="font-size: 13px">Kec. BangunTapan (1.4 km)</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-4">
                                                <div class="oc">
                                                    <p style="font-size: 15px">Tutup</p>
                                                </div>
                                            </div>
                                            <div class="col-8">
                                                <div class="oc">
                                                    <p style="font-size: 15px; color: #ef5656"><b>Tidak tersedia</b></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3 mt-2">
                                <div class="card" style="width: 13.5rem">
                                    
                                    <a href="#"><img src="{{ asset('assets/img/z.png') }}" class="card-img-top" alt="..."></a>
                                    <div class="card-body">

                                        <div class="row">
                                            <div class="col">
                                                <a href="#"><p class="card-title"><b>Wijaya | titipsini</b></p></a>
                                            </div>
                                            <div class="col-2">
                                                <h5><i class="bi bi-suit-heart"></i></h5>
                                            </div>
                                            <p class="text-success" style="font-size: 14px; margin-bottom: 10px">
                                                <b>IDR 65.000 - 150.000 / hari</b>
                                            </p> 
                                        </div>
                                        
                                        <div class="rate text-warning">
                                            <p>4,5
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-half"></i> (270)
                                            </p>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <div class="alamat">
                                                    <p style="font-size: 13px">Kec. BangunTapan (1.4 km)</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-4">
                                                <div class="oc">
                                                    <p style="font-size: 15px">Tutup</p>
                                                </div>
                                            </div>
                                            <div class="col-8">
                                                <div class="oc">
                                                    <p style="font-size: 15px; color: #ef5656"><b>Tidak tersedia</b></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3 mt-2">
                                <div class="card" style="width: 13.5rem">
                                    
                                    <a href="#"><img src="{{ asset('assets/img/z.png') }}" class="card-img-top" alt="..."></a>
                                    <div class="card-body">

                                        <div class="row">
                                            <div class="col">
                                                <a href="#"><p class="card-title"><b>Wijaya | titipsini</b></p></a>
                                            </div>
                                            <div class="col-2">
                                                <h5><i class="bi bi-suit-heart"></i></h5>
                                            </div>
                                            <p class="text-success" style="font-size: 14px; margin-bottom: 10px">
                                                <b>IDR 65.000 - 150.000 / hari</b>
                                            </p> 
                                        </div>
                                        
                                        <div class="rate text-warning">
                                            <p>4,5
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-half"></i> (270)
                                            </p>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <div class="alamat">
                                                    <p style="font-size: 13px">Kec. BangunTapan (1.4 km)</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-4">
                                                <div class="oc">
                                                    <p style="font-size: 15px">Tutup</p>
                                                </div>
                                            </div>
                                            <div class="col-8">
                                                <div class="oc">
                                                    <p style="font-size: 15px; color: #ef5656"><b>Tidak tersedia</b></p>
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