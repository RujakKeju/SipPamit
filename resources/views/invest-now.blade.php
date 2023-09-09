@extends ('layout.shopping_main')
@section('content')
    <!-- Breadcrumb Section Begin -->
    <div class="breacrumb-section">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="breadcrumb-text product-more">
                <a href="./home.html"><i class="fa fa-home"></i> Home</a>
                <a href="./shop.html">Shop</a>
                <span>Detail</span>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Breadcrumb Section Begin -->
  
      <!-- Product Shop Section Begin -->
      <section class="product-shop spad page-details">
        <div class="container">
          <div class="row">
            <!-- DETAIL INVESTASILADOKXAIWNXUIEBCYUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUE -->
            <div class="col-lg-12">
              <div class="row">
                <div class="col-lg-6">
                  <div class="product-pic-zoom">
                    <img class="product-big-img" src="img/1.jpg" alt="" />
                    <div class="zoom-icon">
                      <i class="fa fa-search-plus"></i>
                    </div>
                  </div>
                  <div class="product-thumbs">
                    <div class="product-thumbs-track ps-slider owl-carousel">
                      <div class="pt active" data-imgbigurl="img/1.jpg">
                        <img src="img/1.jpg" alt="" />
                      </div>
                      <div class="pt" data-imgbigurl="img/2.jpg">
                        <img src="img/2.jpg" alt="" />
                      </div>
                      <div class="pt" data-imgbigurl="img/3.jpg">
                        <img src="img/3.jpg" alt="" />
                      </div>
                      <div class="pt" data-imgbigurl="img/5.jpg">
                        <img src="img/5.jpg" alt="" />
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="product-details">
                    <div class="pd-title">
                      <span>Pak Jali</span>
                      <h3>Jali's Farmer</h3>
                      <a href="#" class="heart-icon"
                        ><i class="icon_heart_alt"></i
                      ></a>
                    </div>
                    <div class="pd-rating">
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star-o"></i>
                      <span>(5)</span>
                    </div>
                    <div class="pd-desc">
                      <p>
                        <strong>Investasi akan ditutup setelah</strong> 20 hari
                      </p>
                    </div>
                    <div class="advanced-search">
                      <form action="#" class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text">Rp</span>
                        </div>
                        <input
                          type="text"
                          class="form-control"
                          placeholder="Jumlah Investasi"
                        />
                        <div class="input-group-append">
                          <span class="input-group-text">.00</span>
                        </div>
                      </form>
                    </div>
                    <br />
                    <div class="progress-wrapper">
                      <div class="progress">
                        <div
                          class="progress-bar"
                          role="progressbar"
                          style="width: 0%"
                          aria-valuenow="0"
                          aria-valuemin="0"
                          aria-valuemax="100"
                        >
                          0%
                        </div>
                      </div>
                      <div class="progress-label">
                        <span id="current-value">Rp 0,00</span> /
                        <span id="max-value">Rp 30.000.000,00</span>
                      </div>
                    </div>
                    <div>
                      <img style="height: 70px" src="img/bayar.jpg" alt="" />
                    </div>
                    <div class="quantity">
                      <a href="#" class="primary-btn pd-cart">Invest Now</a>
                    </div>
                  </div>
                </div>
              </div>
              <br />
              <div>
                <div class="d-flex align-items-center justify-content-between">
                  <div class="d-flex align-items-center">
                    <img
                      src="img/sipamit logo.jpg"
                      alt="Gambar Akun"
                      class="rounded-circle"
                      style="width: 50px; height: 50px"
                    />
                    <div class="ml-3">
                      <h5>David Sentausa</h5>
                      <p>Terakhir Online: 3 Menit lalu</p>
                    </div>
                  </div>
                  <a href="#" class="primary-btn pd-cart">Kunjungi Toko</a>
                </div>
              </div>
              <div class="product-tab">
                <div class="tab-item">
                  <ul class="nav" role="tablist">
                    <li>
                      <a class="active" data-toggle="tab" href="#tab-1" role="tab"
                        >Deskripsi</a
                      >
                    </li>
                    <li>
                      <a data-toggle="tab" href="#tab-2" role="tab"
                        >Alamat & Kontak</a
                      >
                    </li>
                    <li>
                      <a data-toggle="tab" href="#tab-3" role="tab"
                        >Detail Kandang</a
                      >
                    </li>
                  </ul>
                </div>
                 <!-- modal Deskripsi -->
              <div class="modal fade" id="editDeskripsiModal" tabindex="-1" role="dialog" aria-labelledby="editDeskripsiModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="editDeskripsiModalLabel">Edit Deskripsi</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <form id="editDeskripsiForm">
                        <div class="mb-3">
                          <label for="perkenalan">Perkenalan</label>
                          <textarea class="form-control" id="perkenalanEdit" name="perkenalanEdit"></textarea>
                        </div>
                        <div class="mb-3">
                          <label for="sejarah">Sejarah</label>
                          <textarea class="form-control" id="sejarahEdit" name="sejarahEdit"></textarea>
                        </div>
                        <div class="mb-3">
                          <label for="img">Gambar</label>
                          <input type="file" class="form-control-file" id="imgEdit" name="imgEdit">
                        </div>
                      </form>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                      <button type="button" class="btn btn-primary" id="simpanEditDeskripsi">Simpan</button>
                    </div>
                  </div>
                </div>
              </div>
              
              <!-- end of modal deskripsi-->
              <!-- modal Alamat -->
              <div class="modal fade" id="editAlamatModal" tabindex="-1" role="dialog" aria-labelledby="editAlamatModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="editAlamatModalLabel">Edit Alamat $ kontak</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <form id="editAlamatForm">
                        <div class="mb-3">
                          <label for="perkenalan">Kecamatan</label>
                          <input class="form-control" id="kecamatanEdit" name="kecamatanEdit"></input>
                        </div>
                        <div class="mb-3">
                          <label for="perkenalan">Desa</label>
                          <input class="form-control" id="desaEdit" name="desaEdit"></input>
                        </div>
                        <div class="mb-3">
                          <label for="perkenalan">Jalan</label>
                          <input class="form-control" id="jalanEdit" name="jalanEdit"></input>
                        </div>
                        <div class="mb-3">
                          <label for="perkenalan">RT/RW</label>
                          <input class="form-control" id="rtEdit" name="rtEdit"></input>
                        </div>
                        <div class="mb-3">
                          <label for="sejarah">Email</label>
                          <input class="form-control" id="emailEdit" name="emailEdit"></input>
                        </div>
                        <div class="mb-3">
                          <label for="sejarah">GMaps</label>
                          <input class="form-control" id="mapEdit" name="mapEdit"></input>
                        </div>
                      </form>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                      <button type="button" class="btn btn-primary" id="simpanEditAlamat">Simpan</button>
                    </div>
                  </div>
                </div>
              </div>
              
              <!-- end of modal Alamat-->
             <!-- Modal Kandang -->
            <div class="modal fade" id="editKandangModal" tabindex="-1" role="dialog" aria-labelledby="editKandangModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="editKandangModalLabel">Edit Detail Kandang</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <form id="editKandangForm">
                      <div class="row">
                        <div class="col-md-6">
                          <div class="mb-3">
                            <label for="PanjangEdit">Panjang</label>
                            <input type="text" class="form-control" id="PanjangEdit" name="PanjangEdit">
                          </div>
                          <div class="mb-3">
                            <label for="LebarEdit">Lebar</label>
                            <input type="text" class="form-control" id="LebarEdit" name="LebarEdit">
                          </div>
                          <div class="mb-3">
                            <label for="BahanEdit">Bahan</label>
                            <input type="text" class="form-control" id="BahanEdit" name="BahanEdit">
                          </div>
                          <div class="mb-3">
                            <label for="tahunEdit">Tahun Berdiri</label>
                            <input type="text" class="form-control" id="tahunEdit" name="tahunEdit">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="mb-3">
                            <label for="JenisEdit">Jenis</label>
                            <input type="text" class="form-control" id="JenisEdit" name="JenisEdit">
                          </div>
                          <div class="mb-3">
                            <label for="MuatanEdit">Muatan</label>
                            <input type="text" class="form-control" id="MuatanEdit" name="MuatanEdit">
                          </div>
                          <div class="mb-3">
                            <label for="pakanEdit">Pakan</label>
                            <input type="text" class="form-control" id="pakanEdit" name="pakanEdit">
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <button type="button" class="btn btn-primary" id="simpanEditKandang">Simpan</button>
                  </div>
                </div>
              </div>
            </div>
          <!-- End of Modal Kandang -->
                <div class="tab-item-content">
                  <div class="tab-content">
                    <div
                      class="tab-pane fade-in active"
                      id="tab-1"
                      role="tabpanel"
                    >
                    <br>
                  <!-- Trigger tombol modal -->
                  <a class="btn btn-primary" id="editDeskripsiButton" data-toggle="modal" data-target="#editDeskripsiModal"><i class="fas fa-pencil"></i> Edit</a>
                  <!-- end of trigger -->
                      <div class="product-content">
                        <div class="row">
                          <div class="col-lg-7">
                            <h5>Perkenalan</h5>
                            <p>
                              Assalamualaikum investor terhormat, 20 juta sabilah,
                              paling untung 200rb aowkaokwoakwoa
                            </p>
                            <h5>Sejarah</h5>
                            <p>
                              berawal dari saya mencoba berhutang ke lucky,
                              akowkaokwokaowk. terus beli satu ayam, eh ayamnya
                              dihamili lucky kemudian ayam itu beranak, hal itu
                              terulang sampai kandang saya sebesar sekarang
                            </p>
                          </div>
                          <div class="col-lg-5">
                            <img src="img/23.jpg" alt="" />
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="tab-pane fade" id="tab-2" role="tabpanel">
                    <br>
                    <!-- Trigger tombol modal -->
                    <a class="btn btn-primary" id="editAlamatButton" data-toggle="modal" data-target="#editAlamatModal"><i class="fas fa-pencil"></i> Edit</a>  
                    <!-- end of trigger -->
                      <div class="specification-table">
                        <div class="row">
                          <div class="col-md-6">
                            <h4>Alamat</h4>
                            <address>
                              <p><strong>Kecamatan :</strong> Pelaihari</p>
                              <p><strong>Desa :</strong> Pabahanan</p>
                              <p><strong>JL :</strong> Atilam</p>
                              <p><strong>RT/RW :</strong> 002/004</p>
                            </address>
                          </div>
                          <div class="col-md-6">
                            <h4>Kontak</h4>
                            <ul class="list-unstyled">
                              <li>
                                <strong>Email:</strong> luckygemink@gmail.com
                              </li>
                              <li><strong>Telepon:</strong> +1234567890</li>
                            </ul>
                          </div>
                        </div>
                        <div class="map spad">
                          <div class="container">
                            <div class="map-inner">
                              <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d48158.305462977965!2d-74.13283844036356!3d41.02757295168286!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c2e440473470d7%3A0xcaf503ca2ee57958!2sSaddle%20River%2C%20NJ%2007458%2C%20USA!5e0!3m2!1sen!2sbd!4v1575917275626!5m2!1sen!2sbd"
                                height="400"
                                width="100"
                                style="border: 0"
                                allowfullscreen=""
                              >
                              </iframe>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="tab-pane fade" id="tab-3" role="tabpanel">
                    <!-- Trigger tombol modal -->
                    <a class="btn btn-primary" id="editKandangButton" data-toggle="modal" data-target="#editKandangModal"><i class="fas fa-pencil"></i> Edit</a>  
                    <!-- end of trigger -->
                      <div class="customer-review-option">
                            <div class="row">
                              <div class="col-md-6">
                              <h4>Kandang</h4>
                              <address>
                                <p><strong>Panjang :</strong> 100m</p>
                                <p><strong>Lebar :</strong> 50m</p>
                                <p><strong>Bahan :</strong> Rotan</p>
                                <p><strong>Blower :</strong> NUH UH</p>
                                <p><strong>Tahun berdiri :</strong> 1998</p>
                              </address>
                              </div>
                              <div class="col-md-6">
                                <h4>Ayam</h4>
                                <ul class="list-unstyled">
                                  <li>
                                    <strong>Jenis :</strong> Cemani
                                  </li>
                                  <li><strong>Berat : </strong> 10kg/ayam (dewasa)</li>
                                  <li><strong>Pakan : </strong> Nasi sisa malam tadi</li>
                                </ul>
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
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Product Shop Section End -->
    <!-- Table investor begin -->
    <div class="container mt-5">
      <div class="d-flex align-items-center justify-content-between mb-3">
        <h2 class="mb-0">Investor Table</h2>
       
    </div>
      <table class="table table-bordered">
          <thead>
              <tr>
                  <th scope="col">No</th>
                  <th scope="col">Investor</th>
                  <th scope="col">Kontribusi</th>
              </tr>
          </thead>
          <tbody>
              <tr>
                  <th scope="row">1</th>
                  <td>John Doe</td>
                  <td>$10,000</td>
              </tr>
              <tr>
                  <th scope="row">2</th>
                  <td>Jane Smith</td>
                  <td>$20,000</td>
              </tr>
              <tr>
                  <th scope="row">3</th>
                  <td>ABC Inc.</td>
                  <td>$50,000</td>
              </tr>
              <!-- Add more rows as needed -->
          </tbody>
      </table>
  </div>

    <!-- table investor end -->
      <!-- Related Products Section End -->
      <div class="related-products spad">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="section-title">
                <h2>Related Investment</h2>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4">
              <div class="card custom-card">
                <div class="square-image">
                  <img class="square-image" src="img/sipamit logo.jpg" alt="" />
                </div>
                <br />
                <div class="card-body">
                  <h5 class="card-title"><strong>Jali's Farmer</strong></h5>
                  <ul class="list-unstyled">
                    <li><strong>Kapasitas Ayam:</strong> 300 ekor</li>
                    <li><strong>Ukuran Kandang:</strong> 20 m persegi</li>
                    <li><strong>Tahun Beroperasi:</strong> 2003</li>
                  </ul>
                  <div class="progress-wrapper">
                    <div class="progress">
                      <div
                        class="progress-bar"
                        role="progressbar"
                        style="width: 50%"
                        aria-valuenow="50"
                        aria-valuemin="0"
                        aria-valuemax="100"
                      >
                        50%
                      </div>
                    </div>
                    <div class="progress-label">
                      Rp 15.000.000,00 / Rp 30.000.000,00
                    </div>
                  </div>
                  <br />
                  <div class="btn-wrapper">
                    <div>
                      <a href="invest-now.html" class="primary-btn pd-cart"
                        >Invest Now</a
                      >
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card custom-card">
                <div class="square-image">
                  <img class="square-image" src="img/4.jpg" alt="" />
                </div>
                <br />
                <div class="card-body">
                  <h5 class="card-title"><strong>Suwito's Farmer</strong></h5>
                  <ul class="list-unstyled">
                    <li><strong>Kapasitas Ayam:</strong> 350 ekor</li>
                    <li><strong>Ukuran Kandang:</strong> 24 m persegi</li>
                    <li><strong>Tahun Beroperasi:</strong> 1997</li>
                  </ul>
                  <div class="progress-wrapper">
                    <div class="progress">
                      <div
                        class="progress-bar"
                        role="progressbar"
                        style="width: 50%"
                        aria-valuenow="50"
                        aria-valuemin="0"
                        aria-valuemax="100"
                      >
                        50%
                      </div>
                    </div>
                    <div class="progress-label">
                      Rp 25.000.000,00 / Rp 50.000.000,00
                    </div>
                  </div>
                  <br />
                  <div class="btn-wrapper">
                    <div>
                      <a href="invest-now.html" class="primary-btn pd-cart"
                        >Invest Now</a
                      >
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card custom-card">
                <div class="square-image">
                  <img class="square-image" src="img/6.jpg" alt="" />
                </div>
                <br />
                <div class="card-body">
                  <h5 class="card-title"><strong>Lucky's Farmer</strong></h5>
                  <ul class="list-unstyled">
                    <li><strong>Kapasitas Ayam:</strong> 2 ekor</li>
                    <li><strong>Ukuran Kandang:</strong> 0,5 m persegi</li>
                    <li><strong>Tahun Beroperasi:</strong> 2023</li>
                  </ul>
                  <div class="progress-wrapper">
                    <div class="progress">
                      <div
                        class="progress-bar"
                        role="progressbar"
                        style="width: 50%"
                        aria-valuenow="50"
                        aria-valuemin="0"
                        aria-valuemax="100"
                      >
                        50%
                      </div>
                    </div>
                    <div class="progress-label">Rp 5.000,00 / Rp 10.000,00</div>
                  </div>
                  <br />
                  <div class="btn-wrapper">
                    <div>
                      <a href="invest-now.html" class="primary-btn pd-cart"
                        >Invest Now</a
                      >
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Related Products Section End -->
  
      <!-- Partner Logo Section Begin -->
      <div class="partner-logo">
        <div class="container">
          <div class="logo-carousel owl-carousel">
            <div class="logo-item">
              <div class="tablecell-inner">
                <img src="img/logo-carousel/logo-1.png" alt="" />
              </div>
            </div>
            <div class="logo-item">
              <div class="tablecell-inner">
                <img src="img/logo-carousel/logo-2.png" alt="" />
              </div>
            </div>
            <div class="logo-item">
              <div class="tablecell-inner">
                <img src="img/logo-carousel/logo-3.png" alt="" />
              </div>
            </div>
            <div class="logo-item">
              <div class="tablecell-inner">
                <img src="img/logo-carousel/logo-4.png" alt="" />
              </div>
            </div>
            <div class="logo-item">
              <div class="tablecell-inner">
                <img src="img/logo-carousel/logo-5.png" alt="" />
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Partner Logo Section End -->
@endsection