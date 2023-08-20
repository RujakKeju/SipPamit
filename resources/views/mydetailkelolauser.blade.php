
@extends('layout.admin_main')
@section('content')
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg">
      <!-- Navbar -->
      <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" data-scroll="true">
        <div class="container-fluid py-1 px-3">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
              <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
              <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Kelola Peternak</li>
              <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Detail Peternak</li>
            </ol>
            <h6 class="font-weight-bolder mb-0">Kelola Peternak</h6>
          </nav>
        </div>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
            <!-- Button trigger modal -->
            <ul class="navbar-nav justify-content-end">
              <li class="nav-item d-flex align-items-center">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-outline-primary btn-sm mb-0 me-3" data-bs-toggle="modal" data-bs-target="#exampleModal">+</button>
              </li>
            </ul>
            <!-- End Button Modal -->
            <div class="input-group input-group-outline">
              <label class="form-label">Type here...</label>
              <input type="text" class="form-control" />
            </div>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->

      <!-- Modal Tambah Peternak -->
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title font-weight-normal" id="exampleModalLabel">Tambah Akun Peternak</h5>
              <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form>
                <div class="row">
                  <div class="col-md-6">
                    <div class="input-group input-group-outline my-3">
                      <label class="form-label">Nama Peternakan</label>
                      <input type="text" class="form-control" />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="input-group input-group-outline my-3">
                      <label class="form-label">No HP</label>
                      <input type="text" class="form-control" />
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="input-group input-group-outline my-3">
                      <label class="form-label">Alamat</label>
                      <input type="text" class="form-control" />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="input-group input-group-outline my-3">
                      <label for="formFile" class="form-label">Pilih Foto Profil</label>
                      <input class="form-control" type="file" id="formFile" />
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="input-group input-group-outline my-3">
                      <label class="form-label">Pemilik</label>
                      <input type="text" class="form-control" />
                    </div>
                  </div>
                </div>
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
              <button type="button" class="btn bg-gradient-primary">Save changes</button>
            </div>
          </div>
        </div>
      </div>
      <!-- End Modal Tambah Peternak -->
      <!-- Ini Detail Peternak -->
      <div class="container-fluid py-4">
        <div class="card card-frame">
          <div class="card-body">
            <div class="row justify-content-center">
              <div class="col-12 col-sm-10">
                <h2 class="text-center">Profil Peternak</h2>
                <h4 class="text-center mb-3">Kelola Peternak untuk Lorem ipsum dolor sit.</h4>
                <div class="row">
                  <div class="col-lg-8 col-md-6 mt-4 mb-4">
                    <div class="card z-index-2">
                      <div class="text-start pt-1">
                        <p class="text-sm mb-0 text-capitalize">Nama Peternakan</p>
                        <h4 class="mb-0">PT WIBU STRESS SEJAHTERA</h4>
                      </div>
                      <div class="text-start pt-1">
                        <p class="text-sm mb-0 text-capitalize">Alamat :</p>
                        <h4 class="mb-0">Fontaine</h4>
                      </div>
                      <div class="text-start pt-1">
                        <p class="text-sm mb-0 text-capitalize">Pemilik :</p>
                        <h4 class="mb-0">Bang Rusdi</h4>
                      </div>
                      <div class="text-start pt-1">
                        <p class="text-sm mb-0 text-capitalize">No HP :</p>
                        <h4 class="mb-0">0822xxxx</h4>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6 mt-4 mb-4">
                    <div class="card z-index-2">
                      <div class="text-start pt-1">
                        <div class="img-circle text-center mb-3"><img img src="https://demos.creative-tim.com/test/material-dashboard-pro/assets/img/team-2.jpg" alt="Image" class="shadow rounded-circle" width="150" height="150" /></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- End DEtail Peternak -->
      <!-- Ini buat Galer ry -->
      <div class="container-fluid py-4">
        <div class="ms-md-auto pe-md-3 d-flex align-items-center">
          <!-- Button trigger modal -->
          <ul class="navbar-nav justify-content-end">
            <li class="nav-item d-flex align-items-center">
              <!-- Button trigger modal -->
              <button type="button" class="btn btn-outline-primary btn-sm mb-0 me-3" data-bs-toggle="modal" data-bs-target="#exampleModal">+</button>
            </li>
          </ul>
          <!-- End Button Modal -->
        </div>
        <div class="card card-frame">
          <div class="card-body">
            <div class="row justify-content-center">
              <div class="col-12 col-sm-10">
                <h2 class="text-center">Gallery</h2>
                <div class="row">
                  <div class="col-md-12 mx-auto">
                    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                      <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-bs-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-bs-slide-to="2"></li>
                      </ol>
                      <div class="carousel-inner">
                        <div class="carousel-item active">
                          <img class="d-block w-100" src="https://demos.creative-tim.com/test/material-dashboard-pro/assets/img/products/product-1-min.jpg" alt="First slide" />
                        </div>
                        <div class="carousel-item">
                          <img class="d-block w-100" src="https://demos.creative-tim.com/test/material-dashboard-pro/assets/img/products/product-2-min.jpg" alt="Second slide" />
                        </div>
                        <div class="carousel-item">
                          <img class="d-block w-100" src="https://demos.creative-tim.com/test/material-dashboard-pro/assets/img/products/product-3-min.jpg" alt="Third slide" />
                        </div>
                      </div>
                      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                      </a>
                      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                      </a>
                    </div>
                  </div>
                  <!-- Opsional Mau pake Carusel atau enggk -->
                  <!-- Kalo make hapus aja yg di baris ini dibagian card background -->

                  <!-- <div class="card card-background">
                    <div
                      class="full-background"
                      style="background-image: url('https://images.unsplash.com/photo-1497294815431-9365093b7331?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1950&q=80')"
                    ></div>
                    <div class="card-body pt-12">
                      <h4 class="text-white font-weight-normal">Search and Discovery</h4>
                      <p>Website visitors today demand a frictionless user expericence — especially when using search. Because of the hight standards.</p>
                    </div>
                  </div> -->
                  <!-- Ini dihapus gkpp -->
                </div>
              </div>
              <div class="container-fluid py-4">
                <!-- Ini isi Galerry yg kecil kecil -->
                <div class="row mt-4">
                  <div class="col-lg-4 col-md-6 mt-4 mb-4">
                    <div class="card z-index-2">
                      <div class="card bg-dark text-white border-0">
                        <img class="card-img" src="https://images.unsplash.com/photo-1560157368-946d9c8f7cb6?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1951&q=80" alt="Card image" />
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6 mt-4 mb-4">
                    <div class="card z-index-2">
                      <div class="card bg-dark text-white border-0">
                        <img class="card-img" src="https://images.unsplash.com/photo-1560157368-946d9c8f7cb6?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1951&q=80" alt="Card image" />
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6 mt-4 mb-4">
                    <div class="card z-index-2">
                      <div class="card bg-dark text-white border-0">
                        <img class="card-img" src="https://images.unsplash.com/photo-1560157368-946d9c8f7cb6?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1951&q=80" alt="Card image" />
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6 mt-4 mb-4">
                    <div class="card z-index-2">
                      <div class="card bg-dark text-white border-0">
                        <img class="card-img" src="https://images.unsplash.com/photo-1560157368-946d9c8f7cb6?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1951&q=80" alt="Card image" />
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6 mt-4 mb-4">
                    <div class="card z-index-2">
                      <div class="card bg-dark text-white border-0">
                        <img class="card-img" src="https://images.unsplash.com/photo-1560157368-946d9c8f7cb6?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1951&q=80" alt="Card image" />
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6 mt-4 mb-4">
                    <div class="card z-index-2">
                      <div class="card bg-dark text-white border-0">
                        <img class="card-img" src="https://images.unsplash.com/photo-1560157368-946d9c8f7cb6?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1951&q=80" alt="Card image" />
                      </div>
                    </div>
                  </div>
                </div>
                <!-- End Isi Galerry kecil kecil -->
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- End GALER y foto foto -->
    </main>
@endsection