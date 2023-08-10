<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Dashboard Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <style>
      section {
        padding-top: 30px;
        padding-bottom: 30px;
      }
      .userprofil {
        padding-top: 3rem !important;
        padding-bottom: 3rem !important;
      }
      .icon-category-sm i {
      font-size: 40px;
      }

  
    </style>
  </head>
  <body>
    <!-- Navbar Atas -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">dashboard</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Features</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/logout">Logout</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Selamat datang, {{ auth()->user()->name }} </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Profile</a></li>
                <li>
                  <form action="/logout" method="post">
                    @csrf
                    <button class="dropdown-item" type="submit"> Logout</button>
                  </form>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar Atas -->

    <!-- User Profil Info -->
    <section class="userprofil">
      <div class="container">
        <div class="row">
          <div class="col-10">
            <div class="d-flex">
              <div class="w-80p h-80p rounded-circle overflow-hidden">
                <div class="avatar d-inline">
                  <img src="https://api.sdmdigital.id/file/dowload-get-file?path=foto_profil/d1d9c0a0-476b-4248-a64b-bac9db2a9d0b.png" alt="Foto user" class="avatar-img rounded-circle user" style="width: 80px; height: 80px" />
                </div>
              </div>
              <div class="flex-grow-1 mt-1 ms-4">
                <div class="mb-0"><span class="text-muted font-size-14">Selamat Datang,</span></div>
                <span class="d-block mb-2"><h4 class="fw-bolder mb-3">ARIANSYAH ARYO PRASETIO</h4></span>
              </div>
            </div>
          </div>
          <div class="col-2">
            <a href="#isikonten-profile" class="btn btn-outline-primary">Edit Profil</a>
          </div>
        </div>
        <hr />
      </div>
    </section>
    <!-- End User Profil Info -->

    <!-- Main Dashboard -->
    <section class="userdashboard">
      <div class="container ">
        <div class="row">
          <div class="d-flex align-items-start grid gap-3">
            <!-- Navigasi Menu samping -->
            <div class="col-lg-3 p-2 g-col-6 ">
              <div class="navsamping shadow-sm p-3 mb-5 bg-body-tertiary rounded border">
                <div class="nav flex-column nav-pills me-3 grid gap-3" id="isikonten-tab" role="tablist" aria-orientation="vertical">
                  <h4 class="text-center">Menu</h4>
                  <button class="nav-link active" id="isikonten-dashboard-tab" data-bs-toggle="pill" data-bs-target="#isikonten-dashboard" type="button" role="tab" aria-controls="isikonten-dashboard" aria-selected="true">Dashboard</button>
                  <button class="nav-link" id="isikonten-profile-tab" data-bs-toggle="pill" data-bs-target="#isikonten-profile" type="button" role="tab" aria-controls="isikonten-profile" aria-selected="false">Profile</button>
                  <button class="nav-link" id="isikonten-kelola_peternak-tab" data-bs-toggle="pill" data-bs-target="#isikonten-kelola_peternak" type="button" role="tab" aria-controls="isikonten-kelola_peternak" aria-selected="false">Kelola Peternak</button>
                  <button class="nav-link" id="isikonten-kelola_user-tab" data-bs-toggle="pill" data-bs-target="#isikonten-kelola_user" type="button" role="tab" aria-controls="isikonten-kelola_user" aria-selected="false">Kelola User</button>
                  <button class="nav-link" id="isikonten-kelola_investasi-tab" data-bs-toggle="pill" data-bs-target="#isikonten-kelola_investasi" type="button" role="tab" aria-controls="isikonten-kelola_investasi" aria-selected="false">Kelola Investasi</button>
                  <button class="nav-link" id="isikonten-Logout-tab" data-bs-toggle="pill" data-bs-target="#isikonten-Logout" type="button" role="tab" aria-controls="Logout" aria-selected="false">Logout</button>
                </div>
              </div>
            </div>
            <!-- End Navigasi Menu samping -->

            <!-- Isi Menu -->
            <div class="col-lg-9 p-2 g-col-6 ">
              <div class="navisi border p-3 mb-5 bg-body-white rounded">
                <div class="tab-content" id="isikonten-tabContent">
                  <!-- Isi Konten dashboard -->
                  <div class="tab-pane fade show active" id="isikonten-dashboard" role="tabpanel" aria-labelledby="isikonten-dashboard-tab" tabindex="0">
                      <!-- Info Semua User Online -->
                      <h4>Total User 10042 Online</h4>
                      <div class="container text-center p-2">
                        <div class="row g-2">
                          <div class="col-6 col-sm-4 mb-md-6 mb-2">
                            <div class="card border rounded icon-category icon-category-sm p-4">
                              <div class="row align-items-center mx-n3">
                                <div class="col-auto px-3">
                                  <div class="icon-h-p secondary"><i class="bi bi-shield-check"></i></div>
                                </div>
                                <div class="col px-3">
                                  <div class="card-body p-0">
                                    <h6 class="mb-0 text-muted line-clamp-1">Admin</h6>
                                    <h6 class="mb-0 line-clamp-1 hover-clamp-off">30 Online</h6>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-6 col-sm-4 mb-md-6 mb-2">
                            <div class="card border rounded icon-category icon-category-sm p-4">
                              <div class="row align-items-center mx-n3">
                                <div class="col-auto px-3">
                                  <div class="icon-h-p secondary"><i class="bi bi-bag text-blue"></i></div>
                                </div>
                                <div class="col px-3">
                                  <div class="card-body p-0">
                                    <h6 class="mb-0 text-muted line-clamp-1">Peternak</h6>
                                    <h6 class="mb-0 line-clamp-1 hover-clamp-off">12 Online</h6>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-6 col-sm-4 mb-md-6 mb-2">
                            <div class="card border rounded icon-category icon-category-sm p-4">
                              <div class="row align-items-center mx-n3">
                                <div class="col-auto px-3">
                                  <div class="icon-h-p secondary"><i class="bi bi-person-fill text-blue"></i></div>
                                </div>
                                <div class="col px-3">
                                  <div class="card-body p-0">
                                    <h6 class="mb-0 text-muted line-clamp-1">Pengguna</h6>
                                    <h6 class="mb-0 line-clamp-1 hover-clamp-off">10000 Online</h6>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <hr>
                      </div>
                      <!-- End Info semua user online -->
                      <!-- Total Penjualan -->
                      <div class="row text-center mb-4">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                          <div class="card">
                            <div class="card-body">
                              <h5 class="card-title">Total Transaksi</h5>
                              <p class="card-text">Hari ini : 900 Penjualan</p>
                              <a href="#" class="btn btn-outline-primary">Detail Transaksi</a>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-6 mb-3 mb-sm-0">
                          <div class="card">
                            <div class="card-body">
                              <h5 class="card-title">Total Penjualan</h5>
                              <p class="card-text">Hari ini : 617 Transaksi</p>
                              <a href="#" class="btn btn-outline-primary">Detail Penjualan</a>
                            </div>
                          </div>
                        </div>
                      </div>   
                      <hr>
                      <!-- End Total Penjualan -->


                      <!-- Graf Gk tau -->
                      <div class="card">
                        <h5 class="card-header">Grafik Apa ya kasih nama sendiri aja nanti?</h5>
                        <div class="card-body">
                          <div>
                           <canvas id="myChart"></canvas>
                         </div>
                        </div>
                      </div>
                      <!-- End Graf Gk tau -->


                  </div>
                  <!-- End Isi Konten dashboard -->

                  <!-- Isi Konten Profile -->
                  <div class="tab-pane fade" id="isikonten-profile" role="tabpanel" aria-labelledby="isikonten-profile-tab" tabindex="0">
                    <div class="row justify-content-center">
                      <div class="col-12 col-sm-10">
                          <h2 class="text-center">Profil Saya</h2>
                          <h4 class="text-center mb-3">Kelola Profile saya untuk Lorem ipsum dolor sit.</h4>
                          <hr>
                          <div class="row">
                              <div class="col-8">
                                  <!-- {{-- Isi Form --}} -->
                                  <form name="isianProfil" action="#" method="POST">
                                      <div class="mb-3">
                                        <label for="username" class="form-label">Username</label>
                                        <input type="text" class="form-control" id="username" name="username" placeholder="nama pengguna">
                                      </div>
                                      <div class="mb-3">
                                        <label for="nama" class="form-label">Nama</label>
                                        <input type="text" class="form-control" id="nama" name="nama" placeholder="isi nama lengkap anda">
                                      </div>
                                      <div class="mb-3">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="email" name="email" placeholder="masukan email anda">
                                      </div>
                                      <div class="mb-3">
                                        <label for="nohp" class="form-label">Nomor Telepon</label>
                                        <input type="text" class="form-control" id="nohp" name="nohp" placeholder="masukan nomor telepon aktif anda">
                                      </div>
                                      <div class="mb-3">
                                        <label for="namatoko" class="form-label">Nama Toko</label>
                                        <input type="text" class="form-control" id="namatoko" name="namatoko" placeholder="masukan nama toko anda">
                                      </div>
                                      <div class="mb-3">
                                        <label for="alamat" class="form-label">Alamat</label>
                                        <textarea class="form-control" id="alamat" name="alamat" placeholder="masukan alamat lengkap anda" rows="3"></textarea>
                                        </div>
                                      <fieldset class="mb-3">
                                        <label for="jenis_kelamin" class="col-form-label">Jenis Kelamin</label>
                                        <div class="container overflow-hidden">
                                          <div class="row gx-5">
                                            <div class="col">
                                             <div class="p-0">
                                              <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="jenis_kelamin" id="laki-laki" value="laki-laki">
                                                <label class="form-check-label" for="jenis_kelamin">
                                                  Laki-laki
                                                </label>
                                              </div>
                                             </div>
                                            </div>
                                            <div class="col">
                                              <div class="p-0">
                                                <div class="form-check form-check-inline">
                                                  <input class="form-check-input" type="radio" name="jenis_kelamin" id="perempuan" value="perempuan">
                                                  <label class="form-check-label" for="jenis_kelamin">
                                                    Perempuan
                                                  </label>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>           
                                      </fieldset>
                                      <div class="mb-3">
                                        <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
                                        <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir">
                                      </div>
                                      <!-- <input type="submit" class="btn btn-primary mb-3" id="submit" name="submit" value="Simpan"></input> -->
                                    </form>
                                    <!-- {{-- End Form --}} -->
                              </div>
                              <div class="col-4">
                                          <div class="p-4">
                                              <div class="img-circle text-center mb-3">
                                                  <img src="https://api.sdmdigital.id/file/dowload-get-file?path=foto_profil/d1d9c0a0-476b-4248-a64b-bac9db2a9d0b.png" alt="Image" class="shadow rounded-circle" width="150" height="150">
                                              </div>
                                              <div class="mb-3">
                                                  <label for="formFile" class="form-label">Pilih Foto Profil</label>
                                                  <input class="form-control" type="file" id="formFile">
                                                </div>
                                          </div>
                              </div>
                          </div>
                          <div class="d-grid gap-2">
                            <input type="submit" class="btn btn-primary mb-3 btn-lg" id="submit" name="submit" value="Ubah Profil"></input>
                          </div>
                      </div>
                  </div>
                  </div>
                  <!-- End Isi Konten Profile -->

                  <!-- Isi Konten ..... -->
                  <div class="tab-pane fade" id="isikonten-kelola_peternak" role="tabpanel" aria-labelledby="isikonten-kelola_peternak-tab" tabindex="0">
                    <!-- Isi Daftar peternak -->
                    <div class="tabel_onPeternak">
                      <div class="text-center">
                        <h3> Daftar Peternak Online</h3>
                      </div>
                      <!-- Ini buat Search -->
                    <nav class="navbar bg-body-white">
                      <div class="container-fluid">
                        <form class="d-flex" role="search">
                          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                          <button class="btn btn-outline-primary" type="submit">Search</button>
                        </form>
                      </div>
                    </nav>
                    <!-- End buat Seacrh -->
                      <table class="table table-bordered table-hover">
                        <thead>
                          <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Email</th>
                            <th scope="col">No Telepon</th>
                            <th scope="col">Kota</th>
                            <th scope="col">Status</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto@gmail.com</td>
                            <td>0827236364773</td>
                            <td>Planet Namex</td>
                            <td><a class="btn btn-success" href="detailpeternak.html" role="button">Online</a></td>
                          </tr>
                          <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton@gmail,com</td>
                            <td>28283737</td>
                            <td>Isekai</td>
                            <td><a class="btn btn-danger" href="detailpeternak.html" role="button">Offline</a></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    <!-- End tabel Peneternak -->
                    <!-- Ini buat paggination -->
                    <nav aria-label="page_onPeternak">
                      <ul class="pagination justify-content-center">
                        <li class="page-item">
                          <a class="page-link">Previous</a>
                        </li>
                        <li class="page-item active" aria-current="page""><a class="page-link" href="#">1</a></li>
                        <li class="page-item">
                          <a class="page-link" href="#">2</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                          <a class="page-link" href="#">Next</a>
                        </li>
                      </ul>
                    </nav>
                    <!-- End Pagginatio -->
                  </div>
                  <!-- End Isi Konten ...  -->

                  <!-- Isi Konten..... -->
                  <div class="tab-pane fade" id="isikonten-kelola_user" role="tabpanel" aria-labelledby="isikonten-kelola_user-tab" tabindex="0">
                    <!-- Isi Daftar User -->
                    <div class="tabel_onUser">
                      <div class="text-center">
                        <h3> Daftar Pengguna Online</h3>
                      </div>
                      <!-- Ini buat Search -->
                    <nav class="navbar bg-body-white">
                      <div class="container-fluid">
                        <form class="d-flex" role="search">
                          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                          <button class="btn btn-outline-primary" type="submit">Search</button>
                        </form>
                      </div>
                    </nav>
                    <!-- End buat Seacrh -->
                      <table class="table table-bordered table-hover">
                        <thead>
                          <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Email</th>
                            <th scope="col">No Telepon</th>
                            <th scope="col">Kota</th>
                            <th scope="col">Status</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto@gmail.com</td>
                            <td>0827236364773</td>
                            <td>Planet Namex</td>
                            <td><a class="btn btn-success" href="detailuser.html" role="button">Online</a></td>
                          </tr>
                          <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton@gmail,com</td>
                            <td>28283737</td>
                            <td>Isekai</td>
                            <td><a class="btn btn-danger" href="detailpeternak.html" role="button">Offline</a></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    <!-- End tabel User -->
                    <!-- Ini buat paggination -->
                    <nav aria-label="page_onUser">
                      <ul class="pagination justify-content-center">
                        <li class="page-item">
                          <a class="page-link">Previous</a>
                        </li>
                        <li class="page-item active" aria-current="page""><a class="page-link" href="#">1</a></li>
                        <li class="page-item">
                          <a class="page-link" href="#">2</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                          <a class="page-link" href="#">Next</a>
                        </li>
                      </ul>
                    </nav>
                    <!-- End Paggination -->
                  </div>
                  <!-- End Isi Konten... -->

                  <!-- Isi Konten.....  -->
                  <div class="tab-pane fade" id="isikonten-kelola_investasi" role="tabpanel" aria-labelledby="isikonten-kelola_investasi-tab" tabindex="0">
                    <!-- bingung diisi apa -->
                    <h2>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Saepe veritatis, nesciunt officiis delectus accusamus repellat necessitatibus molestiae quam autem rerum veniam voluptate praesentium incidunt tenetur amet earum qui facilis ipsam consectetur officia ab. Fuga in, obcaecati repellat voluptates inventore qui.</h2>
                    <!-- end bingung diisi apa -->
                  </div>
                   <!-- End Isi Konten... -->
                </div>
              </div>
            </div>
            <!-- End Isi Menu -->
          </div>
        </div>
      </div>
    </section>
    <!-- END Main Dashboard -->

    <!-- Footer -->
    <!-- End Footer -->
  </body>
  <!-- JS Chart -->
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script>
    const ctx = document.getElementById('myChart');
  
    new Chart(ctx, {
      type: 'bar',
      data: {
        labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
        datasets: [{
          label: '# of Votes',
          data: [12, 19, 3, 5, 2, 3],
          borderWidth: 1
        }]
      },
      options: {
        scales: {
          y: {
            beginAtZero: true
          }
        }
      }
    });
  </script>
  <!-- END JS CHART -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</html>
