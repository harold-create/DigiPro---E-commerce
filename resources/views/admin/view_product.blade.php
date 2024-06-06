<!DOCTYPE html>
<html>
  <head> 
    @include('admin.css')

    <style type="text/css">

        .div_design
        {
         display: flex;
         justify-content: center;
         align-items: center;
         margin-top: 60px;   
        }

        .table_design
        {
         border: 2px solid skyblue;   
        }

        th
        {
            background-color: lightblue;
            color: black;
            font-size: 19px;
            font-weight: bold;
            padding: 15px;
        }

        td
        { color: solid black;
            border: 1px solid skyblue;
            text-align: center;
           
        }

        input[type='search']
        {
          width: 500px;
          height: 60px;
          margin-left: 50px;
        }



    </style>
   
  </head>
  <body>
    @include('admin.header')

    @include('admin.sidebar')
    
    
      <!-- Sidebar Navigation end-->
      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">

          <form action="{{url('product_search')}}" method="get">
            @csrf

            <input type="search" name="search">
            <input type="submit" class="btn btn-secondary" value="search">
          </form>

          <div class="div_design">

          <table class="table_design">

          <tr>
            <th>Product Title</th>
            <th>Description</th>
            <th>Category</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Image</th>

            <th>edit</th>

            <th>Delete</th>

          </tr>

          @foreach($product as $products)


          <tr>
            <td>{{$products->title}}</td>
            <td>{!!Str::limit($products->description,50)!!}</td>
            <td>{{$products->category}}</td>
            <td>{{$products->price}}</td>
            <td>{{$products->quantity}}</td>
            <td>
                <img height="120" width="120" src="products/{{$products->image}}">
            </td>

            <td>
              <a class="btn btn-success" href="{{url('update_product',$products->id)}}">Edit</a>
            </td>

            <td>
              <a class="btn btn-danger" onclick="confirmation(event)" href="{{url('delete_product',$products)}}">Delete</a>
            </td>
          </tr>

          @endforeach

          

          </table>

          

          </div>

          <div class="div_design">

          {{$product->onEachSide(1)->links()}}
          
          </div>
          
         

          </div>
            

      </div>
    </div>
    <!-- JavaScript files-->
    @include('admin.js')
  </body>
</html>