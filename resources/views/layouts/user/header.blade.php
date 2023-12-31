<header class="header_section">
    <div class="container">
      <nav class="navbar navbar-expand-lg custom_nav-container ">
        <a class="navbar-brand" href="index.html">
          <span>
            FoodieHub
          </span>
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class=""> </span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav  mx-auto ">
            <li class="nav-item active">
              <a class="nav-link" href="{{ url('/') }}">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('menu.index') }}">Menu</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('reservations.index') }}">Reservation</a>
            </li>
          </ul>
          <div class="user_option">
           
          
            <a href="{{ route('login') }}" class="user_link">
                <i class="fa fa-sign-in" aria-hidden="true"></i>
              </a>
         
            <a href="{{ route('reservations.index') }}" class="order_online">
              Book Table
            </a>
          </div>
        </div>
      </nav>
    </div>
  </header>