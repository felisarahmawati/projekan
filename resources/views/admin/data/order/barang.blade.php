@extends('Layoutsadmin.adminlayout')
@section('content')
<section class="home-section">
    <div class="main">
        <div class="topbar">
            <div class="home-content">
                <i class='bx bx-menu'></i>
            </div>
            <div class="cardHeader-title">
                <h2>Admin-Data Order</h2>
            </div>
        </div>

        {{-- Navbar Layanan --}}
        <div class="cardBox1">
            <div class="card1">
                <div>
                    <a href="{{route('/okendaraan')}}" style="text-decoration:none">
                    <div class="cardName1">Kendaraan</div>
                    </a>
                </div>
            </div>
            <div class="card1">
                <div>
                    <a href="{{ route('/obarang' )}}" style="text-decoration:none">
                    <div class="cardName1">Barang</div>
                    </a>
                </div>
            </div>
            <div class="card1">
                <div>
                    <a href="{{ route('/obangunan' )}}" style="text-decoration:none">
                    <div class="cardName1">Bangunan</div>
                    </a>
                </div>
            </div>
            <div class="card1">
                <div>
                    <a href="{{ route('/opickup' )}}" style="text-decoration:none">
                    <div class="cardName1">Pick up</div>
                    </a>
                </div>
            </div>
        </div>

        {{-- Data List --}}
        <div class="details1 ">
            <div class="recentOrders">
                <div class="cardHeader" >
                    <h5>Order</h5>
                    <a href="#" class="btn btn-thema"data-bs-toggle="modal" data-bs-target="#exampleModal2" class="btn btn-primary fw-bold rounded-pill px-4 shadow float-end">Tambah</a>
                </div>
                <table>
                    <thead>
                        <tr>
                            <td>Gambar</td>
                            <td>Kategori</td>
                            <td Kategori</td>
                            <td>Detail Kategorri</td>
                            <td>Detail Harga</td>
                            {{-- <td>Status</td> --}}
                            <td>Aksi</td>
                        </tr>
                    </thead>
                    <tbody>
                        
                        <tr>
                            <td><img src="{{asset('assets/img/ic2.png')}}"></td>
                            <td>Kendaraan</td>
                            <td>Kendaraan roda 2</td>
                            <td>- dapat memanaskan motor</td>
                            <td>Rp.12.000/jam</td>
                            <td class="td" style="size: 30px;">
                                <button class="btnedit" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-primary fw-bold rounded-pill px-4 shadow float-end">
                                    <i class='bx bx-edit'></i>
                                </button>
                                <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal1" class="btndetail">
                                            <i class='bx bx-detail'></i>
                                </button>
                                <button class="btndelete" ><a href="#" class='bx bx-trash' onclick="return confirm('yakin?');"></a></button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Modal Create -->
    <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" style="width: 50%">
            <div class="modal-content">
                <div class="modal-header hader">
                    <h3 class="modal-title" id="exampleModalLabel">TambahKategori</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    <label for="kategori">Kategori : </label>
                    {{-- <select class="form-control" name="kategori" style="width: 100%;">
                        <option selected="selected" value="">-- Kategori --</option>
                        <option>Kendaraan</option>
                        <option>Bangunan</option>
                        <option>Barang</option>
                    </select> --}}
                    <label class="label">Gambar</label>
                    <input class="form-control" type="file" id="gambar">
                    <label class="label">Kategori</label>
                    <input class="form-control" type="text" id="id">
                    <label class="label" Kategori</label>
                    <input class="form-control" type="text" id="id">
                    <label class="label">Detail Kategori</label>
                    <textarea name="isi" class="my-editor form-control" id="my-editor" cols="30" rows="10"></textarea>
                    <label class="label">Detail Harga</label>
                    <input class="form-control" type="text" id="id">
                </div>
                <div class="modal-footer d-md-block">
                    <button type="button" class="btn btn-primary btn-sm">Simpan</button>
                    <button type="button" class="btn btn-danger btn-sm">Batal</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Edit-->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" style="width:38%">
            <div class="modal-content">
                <div class="modal-header hader">
                    <h3 class="modal-title" id="exampleModalLabel">EditKategori</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <label for="kategori">Kategori : </label>
                    {{-- <select class="form-control" name="kategori" style="width: 100%;">
                        <option selected="selected" value="">-- Kategori --</option>
                        <option>Kendaraan</option>
                        <option>Bangunan</option>
                        <option>Barang</option>
                    </select> --}}
                    <label class="label">Gambar</label>
                    <input class="form-control" type="file" id="gambar">
                    <label class="label">Kategori</label>
                    <input class="form-control" type="text" id="id">
                    <label class="label" Kategori</label>
                    <input class="form-control" type="text" id="id">
                    <label class="label">Detail Kategori</label>
                    <textarea name="isi" class="my-editor form-control" id="my-edit" cols="30" rows="10"></textarea>
                    <label class="label">Detail Harga</label>
                    <input class="form-control" type="text" id="id">
                </div>
                <div class="modal-footer d-md-block">
                    <button type="button" class="btn btn-primary btn-sm">Simpan</button>
                    <button type="button" class="btn btn-danger btn-sm">Batal</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Detail-->
    <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" style="width: 40%">
            <div class="modal-content">
                <div class="modal-header hader text-center">
                    <h3 class="modal-title" id="exampleModalLabel">DetailKategori</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="card text-center">
                    <div class="card-header">
                        Kendaraan
                    </div>
                    <div class="icon-box">
                        <div class="icon"><i class="bx bxs-truck"></i></div>
                        <div class="card-body">
                          <h5 class="card-title">Layanan yang kami sediakan</h5>
                          <p class="description"></p>
                          <p class="description">- Free cuci kendaraan</p>
                          <p class="description">- Kendaraan dibersihakan</p>
                          <p class="description">- Kontrol mesin setiap pagi</p>
                          <p class="description">- Konsultasi & Support</p>
                          <b><br>IDR 100k/hari</b>
                        </div>
                    </div>
                  </div>
                <div class="modal-footer d-md-block">
                    <button type="button" class="btn btn-primary btn-sm">Edit</button>
                    <button type="button" class="btn btn-danger btn-sm">Batal</button>
                </div>
            </div>
        </div>
    </div>
</section>
<script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('my-editor');
    </script>
<script>
    CKEDITOR.replace('my-edit');
    </script>
@endsection
