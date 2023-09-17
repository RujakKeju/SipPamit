<div class="container">
    <div class="inner-header">
      <div class="row">
        <div class="col-lg-2 col-md-2">
          <div class="logo">
            <a href="/home">
              <img src="assets/img/shop/logo.png" alt="" />
            </a>
          </div>
        </div>
        <div class="col-lg-7 col-md-7">
          <div class="advanced-search">
            <button type="button" class="category-btn">
              All Categories
            </button>
            <form action="#" class="input-group">
              <input type="text" placeholder="What do you need?" />
              <button type="button"><i class="ti-search"></i></button>
            </form>
          </div>
        </div>
        <div class="col-lg-3 text-right col-md-3">
          <ul class="nav-right">
            <li class="heart-icon">
              <a href="shopping-cart.html">
                <i class="icon_heart_alt"></i>
                <span>1</span>
              </a>
            </li>
            <li class="cart-icon">
              <a href="shopping-cart.html">
                <i class="icon_bag_alt"></i>
                <span>3</span>
              </a>
              <!-- DISINI DROPDOWN SHOPCART NYA   -->
              <div class="cart-hover">
                <div class="select-items">
                  <table>
                    <tbody>
                      <tr>
                        <td class="si-pic">
                          <img src="img/select-product-1.jpg" alt="" />
                        </td>
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
                        <td class="si-pic">
                          <img src="img/select-product-2.jpg" alt="" />
                        </td>
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
                  <a href="shopping-cart.html" class="primary-btn view-card"
                    >VIEW CARD</a
                  >
                  <a href="check-out.html" class="primary-btn checkout-btn"
                    >CHECK OUT</a
                  >
                </div>
              </div>
            </li>
            <li class="cart-price">
              @auth
              <a href="#">Selamat datang {{ auth()->user()->name }}</a>
                  <ul class="dropdown">
                    <li><a href="./shopping-cart.html">Pengaturan akun</a></li>
                    <li><a href="/logout"><button>Logout</button></a></li>
                  </ul>
              @else
               <a href="/login" class="login-panel"><i class="fa fa-user"></i>Login</a>
              @endauth
            </li>
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
          <span>All departments</span>
          <ul class="depart-hover">
            <li class="active"><a href="#">Peralatan</a></li>
            <li><a href="#">Pakan Ternak</a></li>
            <li><a href="#">Ayam Potong</a></li>
            <li><a href="#">Obat</a></li>
          </ul>
        </div>
      </div>
      <nav class="nav-menu mobile-menu">
        <ul>
          <li><a href="/home">Home</a></li>
          <li><a href="/shop">Shop</a></li>
          <li><a href="/invest">Investasi</a></li>
          <li>
            <a href="#">Pages</a>
            <ul class="dropdown">
              <li><a href="./shopping-cart.html">Shopping Cart</a></li>
              <li><a href="./register.html">Register</a></li>
              <li><a href="./login.html">Login</a></li>
            </ul>
          </li>
        </ul>
      </nav>
      <div id="mobile-menu-wrap"></div>
    </div>
  </div>
</header>
<!-- Header End -->