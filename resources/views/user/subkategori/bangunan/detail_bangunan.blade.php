@extends('layouts.main')

@section('container')
    <!-- card edit alamat -->
    <section id="services" class="services section-bg" style="padding-top: 100px;" data-aos-delay="50">
            
            <div class="container mt-4 mb-4">
                <div class="card">
                    
                    <div class="container">
                        <div class=" mt-3 mb-3" style="max-width: 100%;">
                            <div class="row g-0">
                                <div class="col-md-6 mt-3" style="padding-top: 30px">
                                    <img src="{{ asset('assets/img/Apartemen.jpg') }}" class="img-fluid rounded-start" alt="...">
                                    <div class="col-4 mt-3">
                                        <p class="text-success" style="font-size: 20px; margin-bottom: 10px">
                                            <b>Deskripsi layanan</b>
                                        </p>
                                    </div>
                                    <div class="col-12 text-muted">
                                        <p>Titip apart merupakan layanan penitipan bangunan mulai dari rumah, apartement, dan kos. Dengan fasilitas kami
                                            yang menjamin keamanan bangunan dengan penjagaan terbaik dari vendor kami
                                            dan menjamin kebersihan bangunan yang anda titipkan.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-7">
                                                <p class="mb-2" style="font-size: 23px; margin-bottom: 10px">
                                                    <b>Titip Apart | titipsini</b>
                                                </p>
                                            </div>
                                            <div class="col-5 text-end" style="padding-right: 5px;">
                                                <p style="background: #00B56A; padding: 6px; border-radius: 10px; margin: 0; 
                                                text-align: center; color: #ffffff; font-size: 15px; width:60%">
                                                Tersedia</p>
                                            </div>
                                        </div>
                                        <p class="text-success" style="font-size: 18px; margin-bottom: 10px">
                                            <b>IDR 50k / meter</b>
                                        </p>
                                        <div class="rate text-warning">
                                            <p>3,5
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-half"></i> (70)
                                            </p>
                                        </div>
                                        <p class="text-secondary" style="font-size: 13px">
                                            <b>Layanan penitipan bangunan</b>
                                        </p>
                                        <div class="row">
                                            <div class="col-7">
                                                <p class="text-success" style="font-size: 25px; margin-bottom: 10px">
                                                    <b>Buat pesanan</b>
                                                </p>
                                            </div>
                                            <div class="col-6">
                                                <p>Luas bangunan</p>
                                            </div>
                                            <div class="col-12">
                                                <select class="form-select" aria-label="Default select example">
                                                    <option selected>Luas bangunan</option>
                                                    <option value="1">100 m</option>
                                                    <option value="2">200 m</option>
                                                    <option value="3">300 m</option>
                                                </select>
                                            </div>
                                            <div class="col-6 mt-3">
                                                <p>Quantity jasa</p>
                                            </div>
                                            <div class="col-12">
                                                <div class="box text-dark">
                                                    <div class="wrapper" style="width: 250px">
                                                        <span class="minus">-</span>
                                                        <span class="num">01</span>
                                                        <span class="plus">+</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 mt-3">
                                                <p for="tanggalmasuk" class="form-label">Tanggal Masuk</p>
                                                <input type="date" class="form-control" id="tanggal">
                                            </div>
                                            <div class="col-sm-6 mb-2 mt-3">
                                                <label for="tanggalkeluar" class="form-label">Tanggal Keluar</label>
                                                <input type="date" class="form-control" id="tanggal">
                                            </div>
                                            <div class="col-sm-12 mt-2">
                                                <label for="Note">Catatan</label>
                                                <div class="input-group mb-3">
                                                    <span class="input-group-text bg-white"><i class="bi bi-bookmark-plus"></i></span>
                                                    <input type="text" class="form-control bg-white" placeholder="eg.skooter" name="skooter">
                                                </div>
                                            </div>
                                            <div class="d-grid gap-2 col-6 mx-auto">
                                                <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#wishlist">
                                                    Wishlist
                                                </button>
                                                
                                                <!-- Modal -->
                                                <div class="modal fade" id="wishlist" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered">
                                                    <div class="modal-content">
                                                        <div class="modal-body">
                                                            <div class="card-body text-center">
                                                                <img src="{{ asset('assets/img/centanghijauuu.png') }}" alt="centangHijau" width="75x" height="75x">
                                                                <h5 class="berhasil" style="padding-top: 5px; color: grey">Layanan mu sudah masuk wishlist</h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-grid gap-2 col-6 mx-auto">
                                                <a class="btn btn-outline-success" href="/user/pemesanan/pesanan/pesanan_bangunan" role="button">Langsung order</a>
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