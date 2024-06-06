<div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation-->
      <nav id="sidebar">
        <!-- Sidebar Header-->
        <div class="sidebar-header d-flex align-items-center">
          <div class="avatar"><img src="https://scontent.fmnl3-1.fna.fbcdn.net/v/t39.30808-1/245387120_1485302435166273_8644065499179280818_n.jpg?stp=dst-jpg_s200x200&_nc_cat=101&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeE15GNOMaRi1txfVbhIXS8d8ySKPz1TykbzJIo_PVPKRuD9DkutnPuTjmseRCkRNSCyqQaAB4oNhxi_U6uMBz-X&_nc_ohc=UkFBaNBR-RMQ7kNvgEEH4Yf&_nc_ht=scontent.fmnl3-1.fna&oh=00_AYASSXU1Y7w0PCWde8ByYDFWTtZzSWhcOiw2BTqzWv14iA&oe=66662437" alt="..." class="img-fluid rounded-circle"></div>
          <div class="title">
            <h1 class="h5">Marlyn</h1>
            <p>Seller</p>
          </div>
        </div>
        <!-- Sidebar Navidation Menus--><span class="heading">Main</span>
        <ul class="list-unstyled">
                <li><a href="{{url('admin/dashboard')}}"> <i class="icon-home"></i>Home </a></li>


                <li><a href="{{url('view_category')}}"> <i class="icon-grid"></i>Category </a></li>
                
                <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> 
                  <i class="icon-windows"></i>Product</a>
                  <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                    <li><a href="{{url('add_product')}}">Add Product</a></li>
                    <li><a href="{{url('view_product')}}">View Product</a></li>
                    
                  </ul>
                </li>

                <li><a href="{{url('view_orders')}}"> <i class="icon-grid"></i>Orders</a></li>
                
        </ul>
      </nav>