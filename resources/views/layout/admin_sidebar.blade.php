

    {{-- <aside
        class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 bg-gradient-dark"
        id="sidenav-main">
        <div class="sidenav-header">
            <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
                aria-hidden="true" id="iconSidenav"></i>
            <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/material-dashboard/pages/dashboard "
                target="_blank">
                <img src="../assets/img/logo-ct.png" class="navbar-brand-img h-100" alt="main_logo" />
                <span class="ms-1 font-weight-bold text-white">Selamat datang {{ auth()->user()->username }}</span>
            </a>
        </div>
        <hr class="horizontal light mt-0 mb-2" />
        <div class="collapse navbar-collapse w-auto" id="sidenav-collapse-main">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link text-light {{ Request::is('dashboard') ? 'bg-gradient-primary' : '' }}" href="/dashboard">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">dashboard</i>
                        </div>
                        <span class="nav-link-text ms-1">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item">
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Kelola User
                        </button>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="/kelolapeternak">Kelola Peternak</a></li>
                          <li><a class="dropdown-item" href="/kelolapembeli">Kelola Pembeli</a></li>
                          <li><a class="dropdown-item" href="/kelolaadmin">Kelola admin</a></li>
                        </ul>
                      </div>
                    {{-- <a class="nav-link text-white {{ Request::is('kelolauser') ? 'bg-gradient-primary' : '' }}" href="/kelolauser">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">table_view</i>
                        </div>
                        <span class="nav-link-text ms-1">Kelola User</span>
                    </a> --}}
                {{-- </li> --}}
                {{-- <li class="nav-item">
                    <a class="nav-link text-white {{ Request::is('kelolaadmin') ? 'bg-gradient-primary' : '' }}" href="/kelolaadmin">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">table_view</i>
                        </div>
                        <span class="nav-link-text ms-1">Kelola Admin</span>
                    </a>
                </li> --}}
                {{-- <li class="nav-item">
                    <a class="nav-link text-white {{ Request::is('kelolainvest') ? 'bg-gradient-primary' : '' }}" href="/kelolainvest">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">table_view</i>
                        </div>
                        <span class="nav-link-text ms-1">Kelola Investasi</span>
                    </a>
                </li>

                <li class="nav-item mt-3">
                    <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Account pages
                    </h6>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white {{ Request::is('profile') ? 'bg-gradient-primary' : '' }}" href="/profile">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">person</i>
                        </div>
                        <span class="nav-link-text ms-1">Profile</span>
                    </a>
                </li>
                <li class="nav-item">
                    <form action="/logout" method="post">
                      @csrf
                        <button type="submit" class="nav-link text-white">
                            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                                <i class="material-icons opacity-10">Logout</i>
                            </div>
                            <span class="nav-link-text ms-1">Logout</span>
                        </button>
                    </form>
                </li>
            </ul>
        </div>
    </aside> --}} 



    <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 bg-gradient-dark" id="sidenav-main">
        <div class="sidenav-header">
          <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
          <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/material-dashboard/pages/dashboard " target="_blank">
            <img src="../assets/img/logo-ct.png" class="navbar-brand-img h-100" alt="main_logo" />
            <span class="ms-1 font-weight-bold text-white">Selamat Datang {{ auth()->user()->username }}</span>
          </a>
        </div>
        <hr class="horizontal light mt-0 mb-2" />
        <div class="collapse navbar-collapse w-auto" id="sidenav-collapse-main">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link text-white {{ Request::is('dashboard') }}" href="/dashboard">
                <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                  <i class="material-icons opacity-10">dashboard</i>
                </div>
                <span class="nav-link-text ms-1">Dashboard</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                  <i class="material-icons opacity-10"><span class="material-symbols-outlined"> admin_panel_settings </span></i>
                </div>
                <span class="nav-link-text ms-1">Kelola User</span>
              </a>
              <div class="collapse" id="collapseExample">
                <div class="card-body">
                  <a class="nav-link text-white" href="/kelolaadmin">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                      <i class="material-icons opacity-10">settings_accessibility </i>
                    </div>
                    <span class="nav-link-text ms-1">Kelola Admin</span>
                  </a>
                  <a class="nav-link text-white" href="/kelolapeternak">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                      <i class="material-icons opacity-10">real_estate_agent</i>
                    </div>
                    <span class="nav-link-text ms-1">Kelola Peternak</span>
                  </a>
                  <a class="nav-link text-white" href="/kelolapembeli">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                      <i class="material-icons opacity-10">payments</i>
                    </div>
                    <span class="nav-link-text ms-1">Kelola Investor</span>
                  </a>
                </div>
              </div>
            </li>
  
            <li class="nav-item">
              <a class="nav-link text-white {{ Request::is('kelolainvest') }}" href="/kelolainvest">
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
              <a class="nav-link text-white {{ Request::is('profile') }}" href="/profile">
                <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                  <i class="material-icons opacity-10">person</i>
                </div>
                <span class="nav-link-text ms-1">Profile</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="/logout">
                <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                  <i class="material-icons opacity-10">login</i>
                </div>
                <span class="nav-link-text ms-1">Logout</span>
              </a>
            </li>
          </ul>
        </div>
      </aside>

