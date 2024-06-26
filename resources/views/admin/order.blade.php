<!DOCTYPE html>
<html>
  <head> 
    @include('admin.css')
    
    <style type="text/css">

        table
        {
            border: 2px solid skyblue;
            text-align: center;
        }

        th
        {
            background-color: skyblue;
            padding: 10px;
            font-size: 18px;
            font-weight: bold;
            text-align: center;
            color: white;
        }

        td
        {
            color: black;
            padding: 10px;
            border: 1px solid skyblue;
        }

        .table_center
        {
            display: flex;
            justify-content: center;
            align-items: center;
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

          <div class="table_center">

          <table>
            <tr>
                <th>Customer Name</th>
                <th>Address</th>
                <th>Phone</th>
                <th>Product Title</th>
                <th>Price</th>
                <th>Image</th>
                <th>Status</th>
                <th>Change Status</th>
            </tr>
            @foreach($data as $data)

            <tr>
                <td>{{$data->name}}</td>
                <td>{{$data->rec_address}}</td>
                <td>{{$data->phone}}</td>
                <td>{{$data->product->title}}</td>
                <td>{{$data->product->price}}</td>
                <td>

                <img width="150" src="products/{{$data->product->image}}">

                </td>

                <td>
                  @if($data->status == 'in progress')

                  <span style="color:red">{{$data->status}}</span>


                  @elseif($data->status == 'Sending')
                  <span style="color:blue">{{$data->status}}</span>

                  @else
                  <span style="color:green">{{$data->status}}</span>

                  @endif

                  

                  


                </td>

                <td>
                    <a class="btn btn-primary" href="{{url('on_the_way',$data->id)}}">Sending</a>

                    <a class="btn btn-success" href="{{url('delivered',$data->id)}}">Delivered</a>
                </td>

            </tr>
            @endforeach

            
          </table>

          </div>

          

          </div>
            
        
      </div>
    </div>
    <!-- JavaScript files-->
    </script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>



<script src="{{asset('admincss/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('admincss/vendor/popper.js/umd/popper.min.js')}}"> </script>
<script src="{{asset('admincss/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('admincss/vendor/jquery.cookie/jquery.cookie.js')}}"> </script>
<script src="{{asset('admincss/vendor/chart.js/Chart.min.js')}}"></script>
<script src="{{asset('admincss/vendor/jquery-validation/jquery.validate.min.js')}}"></script>
<script src="{{asset('admincss/js/charts-home.js')}}"></script>
<script src="{{asset('admincss/js/front.js')}}"></script>
  </body>
</html>