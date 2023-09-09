<!DOCTYPE html>
<html lang="zxx">
  <head>
    <meta charset="UTF-8" />
    <meta name="description" content="Fashi Template" />
    <meta name="keywords" content="Fashi, unica, creative, html" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Fashi | Template</title>

    <!-- Google Font -->
    <link
      href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap"
      rel="stylesheet"
    />

    <!-- Css Styles -->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css" type="text/css" />
    <link rel="stylesheet" href="../assets/css/font-awesome.min.css" type="text/css" />
    <link rel="stylesheet" href="../assets/css/themify-icons.css" type="text/css" />
    <link rel="stylesheet" href="../assets/css/elegant-icons.css" type="text/css" />
    <link rel="stylesheet" href="../assets/css/owl.carousel.min.css" type="text/css" />
    <link rel="stylesheet" href="../assets/css/nice-select.css" type="text/css" />
    <link rel="stylesheet" href="../assets/css/jquery-ui.min.css" type="text/css" />
    <link rel="stylesheet" href="../assets/css/slicknav.min.css" type="text/css" />
    <link rel="stylesheet" href="../assets/css/style.css" type="text/css" />
  </head>

  <body>
    <!-- Page Preloder -->
    <div id="preloder">
      <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <!-- <header class="header-section">
      <div class="container">
        <div class="inner-header">
          <div class="row">
            <div class="col-lg-2 col-md-2">
              <div class="logo">
                <a href="./index.html">
                  <img src="img/logo.png" alt="" />
                </a>
              </div>
            </div>
            <div class="col-lg-7 col-lg-7">
              <div class="advanced-search">
                <button type="button" class="category-btn">All Categories</button>
                <form action="#" class="input-group">
                  <input type="text" placeholder="What do you need?" />
                  <button type="button"><i class="ti-search"></i></button>
                </form>
              </div>
            </div>
            <div class="col-lg-3 text-right col-lg-3">
              <ul class="nav-right">
                <li class="heart-icon">
                  <a href="#">
                    <i class="icon_heart_alt"></i>
                    <span>1</span>
                  </a>
                </li>
                <li class="cart-icon">
                  <a href="#">
                    <i class="icon_bag_alt"></i>
                    <span>3</span>
                  </a>
                  <div class="cart-hover">
                    <div class="select-items">
                      <table>
                        <tbody>
                          <tr>
                            <td class="si-pic"><img src="img/select-product-1.jpg" alt="" /></td>
                            <td class="si-text">
                              <div class="product-selected">
                                <p>$60.00 x 1</p>
                                <h6>Kabino Bedside Table</h6>
                              </div>
                            </td>
                            <td class="si-close">
                              <i class="ti-close"></i>
                            </td>
                          </tr>
                          <tr>
                            <td class="si-pic"><img src="img/select-product-2.jpg" alt="" /></td>
                            <td class="si-text">
                              <div class="product-selected">
                                <p>$60.00 x 1</p>
                                <h6>Kabino Bedside Table</h6>
                              </div>
                            </td>
                            <td class="si-close">
                              <i class="ti-close"></i>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    <div class="select-total">
                      <span>total:</span>
                      <h5>$120.00</h5>
                    </div>
                    <div class="select-button">
                      <a href="#" class="primary-btn view-card">VIEW CARD</a>
                      <a href="#" class="primary-btn checkout-btn">CHECK OUT</a>
                    </div>
                  </div>
                </li>
                <li class="cart-price">$150.00</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="nav-item">
        <div class="container">
          <div class="nav-depart">
            <div class="depart-btn">
              <i class="ti-menu"></i>
              <span>Kategori</span>
              <ul class="depart-hover">
                <li class="active"><a href="#">Daging</a></li>
                <li><a href="#">Tai</a></li>
                <li><a href="#">Investasi</a></li>
              </ul>
            </div>
          </div>
          <nav class="nav-menu mobile-menu nav justify-content-center">
            <ul>
              <li><a href="./index.html">Beranda</a></li>
              <li><a href="./shop.html">Belanja</a></li>
              <li><a href="#">Investasi</a></li>
              <li><a href="#">Profile Saya</a></li>
              <li><a href="#">Login/Logout</a></li>
            </ul>
          </nav>
          <div id="mobile-menu-wrap"></div>
        </div>
      </div>
    </header> -->
    <!-- Header End -->

    <!-- Breadcrumb Section Begin -->
    <!-- <div class="breacrumb-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="breadcrumb-text">
              <a href="#"><i class="fa fa-home"></i> Home</a>
              <span>Login</span>
            </div>
          </div>
        </div>
      </div>
    </div> -->
    <!-- Breadcrumb Form Section Begin -->

    <!-- Register Section Begin -->
    <div class="register-login-section spad">
      @if(session()->has('loginError'))
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
          {{ session('loginError') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      @endif
      <div class="container">
        <div class="row">
          <div class="col-lg-6 offset-lg-3">
            <div class="login-form">
              <h2>Login</h2>
              <form  action="{{ route('login') }}" method="post">
                <div class="group-input">
                  <label for="username">Username</label>
                  @csrf
                  <input type="email" class="input" name="email" placeholder="email" required />
                  @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                  @enderror
                </div>
                <div class="group-input">
                 <label for="pass">Password</label>
                 <input type="text" class="input is-invalid" name="password" placeholder="password" required>
                 {{-- <input type="password" id="pass" placeholder="Masukan Password Anda" /> --}}
                        
                </div>
                <div class="group-input gi-check">
                  <div class="gi-more">
                    <label for="save-pass">
                      Simpan Password
                      <input type="checkbox" id="save-pass" />
                      <span class="checkmark"></span>
                    </label>
                    <a href="#" class="forget-pass">Lupa Password</a>
                  </div>
                </div>
                <button type="submit" class="site-btn login-btn">Login</button>
              </form>
              <div class="switch-login">
                <a  href="{{ route('registerForm') }}" class="or-login">Sign Up Now</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Register Form Section End -->

    <!-- Footer Section Begin -->
    <!-- <footer class="footer-section">
      <div class="copyright-reserved">
        <div class="container">
          <div class="row text-center">
            <div class="col-lg-12">
              <p class="text-center">Copyright © 2023 All rights reserved | SiPAMIT DEV</p>
            </div>
          </div>
        </div>
      </div>
    </footer> -->
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="../assets/js/shop/jquery-3.3.1.min.js"></script>
    <script src="../assets/js/shop/bootstrap.min.js"></script>
    <script src="../assets/js/shop/jquery-ui.min.js"></script>
    <script src="../assets/js/shop/jquery.countdown.min.js"></script>
    <script src="../assets/js/shop/jquery.nice-select.min.js"></script>
    <script src="../assets/js/shop/jquery.zoom.min.js"></script>
    <script src="../assets/js/shop/jquery.dd.min.js"></script>
    <script src="../assets/js/shop/jquery.slicknav.js"></script>
    <script src="../assets/js/shop/owl.carousel.min.js"></script>
    <script src="../assets/js/shop/main.js"></script>
  </body>
</html>
