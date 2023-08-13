<!--
=========================================================
* Material Dashboard 2 - v3.1.0
=========================================================

* Product Page: https://www.creative-tim.com/product/material-dashboard
* Copyright 2023 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="../assets/img/favicon.png" />
    <title>Material Dashboard 2 by Creative Tim</title>
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
    <!-- Nucleo Icons -->
    <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet" />
    <!-- CSS Files -->
    <link id="pagestyle" href="../assets/css/material-dashboard.css?v=3.1.0" rel="stylesheet" />
    <!-- Nepcha Analytics (nepcha.com) -->
    <!-- Nepcha is a easy-to-use web analytics. No cookies and fully compliant with GDPR, CCPA and PECR. -->
    <script defer data-site="YOUR_DOMAIN_HERE" src="https://api.nepcha.com/js/nepcha-analytics.js"></script>
  </head>

  <body class="g-sidenav-show bg-gray-200">
    <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 bg-gradient-dark" id="sidenav-main">
      <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/material-dashboard/pages/dashboard " target="_blank">
          <img src="../assets/img/logo-ct.png" class="navbar-brand-img h-100" alt="main_logo" />
          <span class="ms-1 font-weight-bold text-white">Material Dashboard 2</span>
        </a>
      </div>
      <hr class="horizontal light mt-0 mb-2" />
      <div class="collapse navbar-collapse w-auto" id="sidenav-collapse-main">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link text-white bg-gradient-primary" href="../pages/mydashboard.html">
              <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="material-icons opacity-10">dashboard</i>
              </div>
              <span class="nav-link-text ms-1">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="../pages/mykelolapeternak.html">
              <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="material-icons opacity-10">table_view</i>
              </div>
              <span class="nav-link-text ms-1">Kelola Peternak</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="../pages/mykelolaadmin.html">
              <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="material-icons opacity-10">table_view</i>
              </div>
              <span class="nav-link-text ms-1">Kelola Admin</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="../pages/mykelolainvestasi.html">
              <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="material-icons opacity-10">table_view</i>
              </div>
              <span class="nav-link-text ms-1">Kelola Investasi</span>
            </a>
          </li>

          <li class="nav-item mt-3">
            <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Account pages</h6>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="../pages/myprofile.html">
              <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="material-icons opacity-10">person</i>
              </div>
              <span class="nav-link-text ms-1">Profile</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="../pages/sign-in.html">
              <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="material-icons opacity-10">login</i>
              </div>
              <span class="nav-link-text ms-1">Logout</span>
            </a>
          </li>
        </ul>
      </div>
    </aside>
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

    <!--   Core JS Files   -->
    <script src="../assets/js/core/popper.min.js"></script>
    <script src="../assets/js/core/bootstrap.min.js"></script>
    <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
    <script src="../assets/js/plugins/chartjs.min.js"></script>
    <script>
      var ctx = document.getElementById('chart-bars').getContext('2d');

      new Chart(ctx, {
        type: 'bar',
        data: {
          labels: ['M', 'T', 'W', 'T', 'F', 'S', 'S'],
          datasets: [
            {
              label: 'Sales',
              tension: 0.4,
              borderWidth: 0,
              borderRadius: 4,
              borderSkipped: false,
              backgroundColor: 'rgba(255, 255, 255, .8)',
              data: [50, 20, 10, 22, 50, 10, 40],
              maxBarThickness: 6,
            },
          ],
        },
        options: {
          responsive: true,
          maintainAspectRatio: false,
          plugins: {
            legend: {
              display: false,
            },
          },
          interaction: {
            intersect: false,
            mode: 'index',
          },
          scales: {
            y: {
              grid: {
                drawBorder: false,
                display: true,
                drawOnChartArea: true,
                drawTicks: false,
                borderDash: [5, 5],
                color: 'rgba(255, 255, 255, .2)',
              },
              ticks: {
                suggestedMin: 0,
                suggestedMax: 500,
                beginAtZero: true,
                padding: 10,
                font: {
                  size: 14,
                  weight: 300,
                  family: 'Roboto',
                  style: 'normal',
                  lineHeight: 2,
                },
                color: '#fff',
              },
            },
            x: {
              grid: {
                drawBorder: false,
                display: true,
                drawOnChartArea: true,
                drawTicks: false,
                borderDash: [5, 5],
                color: 'rgba(255, 255, 255, .2)',
              },
              ticks: {
                display: true,
                color: '#f8f9fa',
                padding: 10,
                font: {
                  size: 14,
                  weight: 300,
                  family: 'Roboto',
                  style: 'normal',
                  lineHeight: 2,
                },
              },
            },
          },
        },
      });

      var ctx2 = document.getElementById('chart-line').getContext('2d');

      new Chart(ctx2, {
        type: 'line',
        data: {
          labels: ['Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
          datasets: [
            {
              label: 'Mobile apps',
              tension: 0,
              borderWidth: 0,
              pointRadius: 5,
              pointBackgroundColor: 'rgba(255, 255, 255, .8)',
              pointBorderColor: 'transparent',
              borderColor: 'rgba(255, 255, 255, .8)',
              borderColor: 'rgba(255, 255, 255, .8)',
              borderWidth: 4,
              backgroundColor: 'transparent',
              fill: true,
              data: [50, 40, 300, 320, 500, 350, 200, 230, 500],
              maxBarThickness: 6,
            },
          ],
        },
        options: {
          responsive: true,
          maintainAspectRatio: false,
          plugins: {
            legend: {
              display: false,
            },
          },
          interaction: {
            intersect: false,
            mode: 'index',
          },
          scales: {
            y: {
              grid: {
                drawBorder: false,
                display: true,
                drawOnChartArea: true,
                drawTicks: false,
                borderDash: [5, 5],
                color: 'rgba(255, 255, 255, .2)',
              },
              ticks: {
                display: true,
                color: '#f8f9fa',
                padding: 10,
                font: {
                  size: 14,
                  weight: 300,
                  family: 'Roboto',
                  style: 'normal',
                  lineHeight: 2,
                },
              },
            },
            x: {
              grid: {
                drawBorder: false,
                display: false,
                drawOnChartArea: false,
                drawTicks: false,
                borderDash: [5, 5],
              },
              ticks: {
                display: true,
                color: '#f8f9fa',
                padding: 10,
                font: {
                  size: 14,
                  weight: 300,
                  family: 'Roboto',
                  style: 'normal',
                  lineHeight: 2,
                },
              },
            },
          },
        },
      });

      var ctx3 = document.getElementById('chart-line-tasks').getContext('2d');

      new Chart(ctx3, {
        type: 'line',
        data: {
          labels: ['Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
          datasets: [
            {
              label: 'Mobile apps',
              tension: 0,
              borderWidth: 0,
              pointRadius: 5,
              pointBackgroundColor: 'rgba(255, 255, 255, .8)',
              pointBorderColor: 'transparent',
              borderColor: 'rgba(255, 255, 255, .8)',
              borderWidth: 4,
              backgroundColor: 'transparent',
              fill: true,
              data: [50, 40, 300, 220, 500, 250, 400, 230, 500],
              maxBarThickness: 6,
            },
          ],
        },
        options: {
          responsive: true,
          maintainAspectRatio: false,
          plugins: {
            legend: {
              display: false,
            },
          },
          interaction: {
            intersect: false,
            mode: 'index',
          },
          scales: {
            y: {
              grid: {
                drawBorder: false,
                display: true,
                drawOnChartArea: true,
                drawTicks: false,
                borderDash: [5, 5],
                color: 'rgba(255, 255, 255, .2)',
              },
              ticks: {
                display: true,
                padding: 10,
                color: '#f8f9fa',
                font: {
                  size: 14,
                  weight: 300,
                  family: 'Roboto',
                  style: 'normal',
                  lineHeight: 2,
                },
              },
            },
            x: {
              grid: {
                drawBorder: false,
                display: false,
                drawOnChartArea: false,
                drawTicks: false,
                borderDash: [5, 5],
              },
              ticks: {
                display: true,
                color: '#f8f9fa',
                padding: 10,
                font: {
                  size: 14,
                  weight: 300,
                  family: 'Roboto',
                  style: 'normal',
                  lineHeight: 2,
                },
              },
            },
          },
        },
      });
    </script>
    <script>
      var win = navigator.platform.indexOf('Win') > -1;
      if (win && document.querySelector('#sidenav-scrollbar')) {
        var options = {
          damping: '0.5',
        };
        Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
      }
    </script>
    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="../assets/js/material-dashboard.min.js?v=3.1.0"></script>
  </body>
</html>
