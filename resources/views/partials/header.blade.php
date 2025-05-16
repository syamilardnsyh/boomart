<header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container position-relative d-flex align-items-center justify-content-betwee">

      <a href="index.html" class="logo d-flex align-items-center me-auto">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1 class="sitename">BookMart</h1>
      </a>

      <form action="">
        <input type="text" placeholder="" name="search">
          <button type="submit"><i class="bi bi-search"></i></button>
            </form>

            <nav id="navmenu" class="navmenu">
              <ul>
                <li><a href="/">Home</a></li>          
              </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      @guest
      <div>
        <a href="/login" class="btn btn-primary mr-3">Login</a>
        <a href="/register" class="btn btn-primary mr-3">Register</a>
      </div>

      @endguest
      @auth
      <form action="/logout" method="POST">
        @csrf
        <a href="/profil" class="btn btn-primary mr-3">Profil</a>
        <button class="btn btn-danger">Logout</button>
      </form>
      @endauth

    </div>
  </header>