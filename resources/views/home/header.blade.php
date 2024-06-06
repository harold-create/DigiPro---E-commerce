 <!-- header section strats -->
 <header class="header_section">
      <nav class="navbar navbar-expand-lg custom_nav-container ">
        <a class="navbar-brand" href="index.html">
    <style>
        .navbar {
          position: fixed;
          top: 0;
          width: 100%;
          padding: 10px 10px;
          z-index: 1000;
        }
    </style>
        <div class="navbar">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class=""></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav  ">
            <li>
              <a class="nav-link" href="/dashboard">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#shop">
                Shop
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#aboutus">
                About Us
              </a>
            </li>
           
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contact">Contact Us</a>
            </li>
          </ul>
          <div class="user_option">

          @if (Route::has('login'))

          @auth

          <a href="{{url('myorders')}}">
              My Orders
            </a>

          <a href="{{url('mycart')}}">
              <i class="fa fa-shopping-bag" aria-hidden="true"></i>[{{$count}}]
            </a>

          <form style="padding: 15px"; method="POST" action="{{ route('logout') }}">
                            @csrf

                            <input class="btn btn-success" type="submit" value="logout">
                        </form>

                        @else


            <a href="{{url('/login')}}">
              <i class="fa fa-user" aria-hidden="true"></i>
              <span>
                Seller
              </span>
            </a>

            <a href="{{url('/register')}}">
              <i class="fa fa-vcard" aria-hidden="true"></i>
              <span>
                Register
              </span>
            </a>
          </div>
            @endauth

            @endif

            

            
            
          </div>
        </div>
      </nav>
    </header>
    <!-- end header section -->