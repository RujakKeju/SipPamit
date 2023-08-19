
@extends('layout.admin_main')

@section('content')
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg">
      <!-- Navbar -->
      <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" data-scroll="true">
        <div class="container-fluid py-1 px-3">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
              <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
              <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Dashboard</li>
            </ol>
            <h6 class="font-weight-bolder mb-0">Dashboard</h6>
          </nav>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="container-fluid py-4">
        <div class="row">
          <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
              <div class="card-header p-3 pt-2">
                <div class="icon icon-lg icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                  <i class="material-icons opacity-10">person</i>
                </div>
                <div class="text-end pt-1">
                  <p class="text-sm mb-0 text-capitalize">User Online</p>
                  <h4 class="mb-0">1726</h4>
                </div>
              </div>
              <hr class="dark horizontal my-0" />
              <div class="card-footer p-3">
                <!-- <p class="mb-0"><span class="text-success text-sm font-weight-bolder">+55% </span>than last week</p> -->
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
              <div class="card-header p-3 pt-2">
                <div class="icon icon-lg icon-shape bg-gradient-primary shadow-primary text-center border-radius-xl mt-n4 position-absolute">
                  <i class="material-icons opacity-10">gite</i>
                </div>
                <div class="text-end pt-1">
                  <p class="text-sm mb-0 text-capitalize">Farmer Online</p>
                  <h4 class="mb-0">765</h4>
                </div>
              </div>
              <hr class="dark horizontal my-0" />
              <div class="card-footer p-3">
                <!-- <p class="mb-0"><span class="text-success text-sm font-weight-bolder">+3% </span>than last month</p> -->
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
              <div class="card-header p-3 pt-2">
                <div class="icon icon-lg icon-shape bg-gradient-info shadow-info text-center border-radius-xl mt-n4 position-absolute">
                  <i class="material-icons opacity-10">verified_user</i>
                </div>
                <div class="text-end pt-1">
                  <p class="text-sm mb-0 text-capitalize">User sign-in</p>
                  <h4 class="mb-0">3462</h4>
                </div>
              </div>
              <hr class="dark horizontal my-0" />
              <div class="card-footer p-3">
                <!-- <p class="mb-0"><span class="text-danger text-sm font-weight-bolder">-2%</span> than yesterday</p> -->
              </div>
            </div>
          </div>
        </div>
        <div class="row mt-4">
          <div class="col-lg-4 col-md-6 mt-4 mb-4">
            <div class="card z-index-2">
              <div class="card-header p-3 pt-2">
                <div class="icon icon-lg icon-shape bg-gradient-success shadow-success text-center border-radius-xl mt-n4 position-absolute top-0 end-0">
                  <i class="material-icons opacity-10">task_alt</i>
                </div>
              </div>
              <div class="card-body">
                <h6 class="mb-0">Invest Verified</h6>
                <p class="text-sm">Total Invest Terverifikasi</p>
                <h2>121</h2>
                <hr class="dark horizontal" />
                <div class="d-flex">
                  <i class="material-icons text-sm my-auto me-1">schedule</i>
                  <p class="mb-0"><span class="text-success text-sm font-weight-bolder">16 </span> Telah disetujui hari ini</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mt-4 mb-4">
            <div class="card z-index-2">
              <div class="card-header p-3 pt-2">
                <div class="icon icon-lg icon-shape bg-gradient-warning shadow-warning text-center border-radius-xl mt-n4 position-absolute top-0 end-0">
                  <i class="material-icons opacity-10">pending_actions</i>
                </div>
              </div>
              <div class="card-body">
                <h6 class="mb-0">Invest Unerified</h6>
                <p class="text-sm">Total Invest Menunggu Persetujuan</p>
                <h2>21</h2>
                <hr class="dark horizontal" />
                <div class="d-flex">
                  <i class="material-icons text-sm my-auto me-1">schedule</i>
                  <p class="mb-0"><span class="text-success text-sm font-weight-bolder">9 </span> Telah diajukan hari ini</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mt-4 mb-4">
            <div class="card z-index-2">
              <div class="card-header p-3 pt-2">
                <div class="icon icon-lg icon-shape bg-gradient-secondary shadow-secondary text-center border-radius-xl mt-n4 position-absolute top-0 end-0">
                  <i class="material-icons opacity-10">shopping_cart</i>
                </div>
              </div>
              <div class="card-body">
                <h6 class="mb-0">Shop</h6>
                <p class="text-sm">Maksudnya apa ini</p>
                <h2>Gk tau diisi</h2>
                <hr class="dark horizontal" />
                <div class="d-flex">
                  <i class="material-icons text-sm my-auto me-1">schedule</i>
                  <p class="mb-0"><span class="text-success text-sm font-weight-bolder">9 </span> bingung juga ehe</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>

@endsection
