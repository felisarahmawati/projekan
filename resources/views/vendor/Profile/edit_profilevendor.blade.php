@extends('layouts.dashboard_vendor')
@section('container')
<section class="home-section">
    <div class="main">
        {{-- @include('admin.profile.partials') --}}
        <div class="topbar">
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

        <div class="container-fluid">
            <div class="row">
                <div class="col-8 ms-4">
                    <p class="mb-0">OVERVIEW</p>
                    <h3>Profile Vendor</h3>
                </div>
            </div>
<div class="container mt-4 mb-4">
    <div class="row row-cols-1 row-cols-md-2 g-4">
        <div class="col" style="width: 400px">
          
            <div class="card-profile d-flex justify-content-center align-items-center py-3 rounded-lg flex-column">
                       <div class="person-img px-xl-5"><br>
                           <img src="{{ asset('../../assets/img/team-4.jpg') }}" class="img-fluid rounded-circle" alt="">
                       </div>
                       <div class="person-name">
                           <h2 class="text-center fs-4 my-2">CV. Braxy Panda</h2>
                       </div>
                       <hr width="100%" color="#c0c0c0"> 
            <div class="card-body ">
          
            <div class="row" style="width: 300px">
                <div class="col-md">

                    <p style="color:rgb(85, 182, 91)"><i class="bi bi-geo-alt px-1"  style="color:rgb(85, 182, 91)"></i>Pengaturan profil</p>
                </div>
                <div class="col-md-3">
                    <p class="text-end"><a href="/Vendor/Profile/edit_profilevendor"><i class="bi bi-chevron-right"></i></a></p>
                </div>   
            </div>

            <div class="row">
                <div class="col-md">
                    <p><i class="bi bi-question-circle px-1"  style="color:rgb(85, 182, 91)"></i>Kebijakan Privasi</p>
                </div>
                <div class="col-md-3">
                    <p class="text-end"><a href="/Vendor/Profile/Kebijakan_privasi"><i class="bi bi-chevron-right"></i></a></p>
                </div>   
            </div>

            <div class="row">
                <div class="col-md">
                    <p><i class="bi bi-question-circle px-1"  style="color:rgb(85, 182, 91)"></i>Ketentuan Layanan</p>
                </div>
                <div class="col-md-3">
                    <p class="text-end"><a href="/Vendor/Profile/Ketentuan_layanan"><i class="bi bi-chevron-right"></i></a></p>
                </div>    
            </div>

            <div class="row">
                <div class="col-md">
                    <p><i class="bi bi-question-circle px-1"  style="color:rgb(85, 182, 91)"></i>Pusat Bnatuan</p>
                </div>
                <div class="col-md-3">
                    <p class="text-end"><a href="/Vendor/Profile/Pusat_bantuan"><i class="bi bi-chevron-right"></i></a></p>
                </div>    
            </div>
          

            </div>
          </div>
        </div>
        {{-- FormProfile --}}
        <div class="col-lg-8 col-md-6 mt-4 pe-2 ps-2 mb-1">
            <div class="card-profile d-flex flex-column px-0 py-4">
                <div class="id-user px-3">
                    <h6 class="mb-0 fw-bold float-left">Account ID {{Auth::user()->id}}</h6>
                </div>
                <hr width="100%" color="#c0c0c0">
                <div class=" p-3">
                    <form class="row g-3 fw-bold">
                        <div class="col-md-12">
                            <label for="Name" class="form-label">Name</label>
                            <input type="text" class="form-control input-text" id="Name"
                                placeholder="name" value="{{Auth::user()->name}}">
                        </div>
                       
                        <div class="col-md-12">
                            <label for="inputEmail" class="form-label">Email</label>
                            <input type="email" class="form-control" id="inputEmail"
                                value="{{Auth::user()->email}}">
                        </div>
                        <div class="col-md-12">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" class="form-control input-text" id="username"
                                placeholder="username" value="{{Auth::user()->name}}">
                        </div>
                
                        <div class="col-md-12">
                            <label for="inputCity" class="form-label">Password</label>
                            <input type="text" class="form-control input-text" id="inputPassword"
                                placeholder="Password" value="{{Auth::user()->Password}}">
                        </div>
                        <div class="col-md-12">
                            <label for="inputState" class="form-label">Konfirmasi Password</label>
                            <input type="text" class="form-control input-text" id="inputPassword"
                                placeholder="Password" value="">
                        </div>
                    
                        <div class="col-md-12">
                            <input id="photo" type="file" class="form-control" name="photo">
                        </div>
            
                    </form>
                    <a href="/Vendor/profile_vendor" class="btn btn-success mt-4 col-sm-2">Update</a>
                </div>
            </div>
        </div>
        {{-- End Form Edit User Profile --}}
    </div>
    {{-- End User Profile --}}
</div>
          </div>
        </div>
       
      </div>
    
</div></section>
@endsection