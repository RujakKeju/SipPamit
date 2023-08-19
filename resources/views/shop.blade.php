@extends('layout.shopping_main')

@section('content')
    <!-- Breadcrumb Section Begin -->
    <div class="breacrumb-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="breadcrumb-text">
              <a href="index.html"><i class="fa fa-home"></i> Home</a>
              <span>Shop</span>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Breadcrumb Section Begin -->

    <!-- Product Shop Section Begin -->
    <section class="product-shop spad">
      <div class="container">
        <div class="row">
            <div class="col-lg-12 order-1 order-lg-2">
            <!-- Bagian untuk mengatur opsi tampilan produk -->
            <div class="product-show-option">
              <!-- Baris untuk opsi sorting dan tampilan produk -->
              <div class="row">
                <div class="col-lg-7 col-md-7">
                  <!-- Menggeser ke sebelah kiri pada layar besar dan menengah -->
                  <div class="select-option">
                    <!-- Dropdown untuk sorting -->
                    <select class="sorting">
                      <option value="">Default Sorting</option>
                    </select>
                    <!-- Dropdown untuk jumlah tampilan produk -->
                    <select class="p-show">
                      <option value="">Show:</option>
                    </select>
                  </div>
                </div>
                <div class="col-lg-5 col-md-5 text-right">
                  <!-- Menggeser ke sebelah kanan pada layar besar dan menengah -->
                  <!-- Informasi jumlah tampilan produk -->
                  <p>Show 01-09 Of 36 Product</p>
                </div>
              </div>
            </div>

            <!-- Daftar produk -->
            <div class="product-list">
              <div class="row">
                <!-- Setiap produk di dalam kolom -->
                <div class="col-lg-3 col-sm-6">
                  <div class="product-item">
                    <!-- Gambar produk dan ikon penanda diskon -->
                    <div class="pi-pic">
                      <img src="img/alat minum.png" alt="" />
                      <div class="sale pp-sale">Sale</div>
                      <div class="icon">
                        <i class="icon_heart_alt"></i>
                      </div>
                      <!-- Tombol dan ikon aksi produk -->
                      <ul>
                        <li class="w-icon active">
                          <a href="#"><i class="icon_bag_alt"></i></a>
                        </li>
                        <li class="quick-view">
                          <a href="/product">+ Quick View</a>
                        </li>
                        <li class="w-icon">
                          <a href="#"><i class="fa fa-random"></i></a>
                        </li>
                      </ul>
                    </div>
                    <!-- Informasi produk -->
                    <div class="pi-text">
                      <div class="catagory-name">Peralatan</div>
                      <a href="#">
                        <h5>Alat Minum</h5>
                      </a>
                      <div class="product-price">
                        Rp 300.000
                        <span>$35.00</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                  <div class="product-item">
                    <!-- Gambar produk dan ikon penanda diskon -->
                    <div class="pi-pic">
                      <img src="img/ayam potong.jpeg" alt="" />
                      <div class="sale pp-sale">Sale</div>
                      <div class="icon">
                        <i class="icon_heart_alt"></i>
                      </div>
                      <!-- Tombol dan ikon aksi produk -->
                      <ul>
                        <li class="w-icon active">
                          <a href="#"><i class="icon_bag_alt"></i></a>
                        </li>
                        <li class="quick-view">
                          <a href="/product">+ Quick View</a>
                        </li>
                        <li class="w-icon">
                          <a href="#"><i class="fa fa-random"></i></a>
                        </li>
                      </ul>
                    </div>
                    <!-- Informasi produk -->
                    <div class="pi-text">
                      <div class="catagory-name">Daging</div>
                      <a href="#">
                        <h5>Ayam Potong</h5>
                      </a>
                      <div class="product-price">
                        Rp 25.000/kg
                        <span>$35.00</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                  <div class="product-item">
                    <!-- Gambar produk dan ikon penanda diskon -->
                    <div class="pi-pic">
                      <img src="img/obat.jpeg" alt="" />
                      <div class="sale pp-sale">Sale</div>
                      <div class="icon">
                        <i class="icon_heart_alt"></i>
                      </div>
                      <!-- Tombol dan ikon aksi produk -->
                      <ul>
                        <li class="w-icon active">
                          <a href="#"><i class="icon_bag_alt"></i></a>
                        </li>
                        <li class="quick-view">
                          <a href="/product">+ Quick View</a>
                        </li>
                        <li class="w-icon">
                          <a href="#"><i class="fa fa-random"></i></a>
                        </li>
                      </ul>
                    </div>
                    <!-- Informasi produk -->
                    <div class="pi-text">
                      <div class="catagory-name">Obat</div>
                      <a href="#">
                        <h5>Obat pelancar berak</h5>
                      </a>
                      <div class="product-price">
                        Rp 30.000
                        <span>$35.00</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                  <div class="product-item">
                    <!-- Gambar produk dan ikon penanda diskon -->
                    <div class="pi-pic">
                      <img src="img/pupuk.jpg" alt="" />
                      <div class="sale pp-sale">Sale</div>
                      <div class="icon">
                        <i class="icon_heart_alt"></i>
                      </div>
                      <!-- Tombol dan ikon aksi produk -->
                      <ul>
                        <li class="w-icon active">
                          <a href="#"><i class="icon_bag_alt"></i></a>
                        </li>
                        <li class="quick-view">
                          <a href="/product">+ Quick View</a>
                        </li>
                        <li class="w-icon">
                          <a href="#"><i class="fa fa-random"></i></a>
                        </li>
                      </ul>
                    </div>
                    <!-- Informasi produk -->
                    <div class="pi-text">
                      <div class="catagory-name">Pupuk</div>
                      <a href="#">
                        <h5>Pupuk kering</h5>
                      </a>
                      <div class="product-price">
                        Rp 2.000/kg
                        <span>$35.00</span>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Pengulangan untuk produk lainnya -->
                <!-- ... -->
              </div>
            </div>
            <!-- Tombol "Loading More" untuk memuat lebih banyak produk -->
            <div class="loading-more">
              <i class="icon_loading"></i>
              <a href="#"> Loading More </a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Product Shop Section End -->

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
