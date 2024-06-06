<!DOCTYPE html>
<html>
  <head> 
    @include('admin.css')

    <style type="text/css">

        input[type='text']
        {
            width: 400px;
            height: 50px;
        }

        .div_design
        {
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 30px;
        }

        .table_design
        {
          text-align: center;
          margin: auto;
          border: 1px solid darkcyan;
          margin-top: 50px;
          width: 600px;
        }

        th
        {
          background-color: #7779f5;
          padding: 15px;
          font-size: 20px;
          font-weight: bold;
          color:  black;
        }
        
        td
        {
          color: black;
          padding: 10px;
          border: 1px  solid darkcyan;
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

          <h1 style="color: white;">Add Category</h1>
          
          <div class="div_design">

          

          <form action="{{url('add_category')}}" method="post">

          @csrf

            <div>

            <input type="text" name="category">

            <input class="btn btn-primary" type="submit" value="Add Category">

            </div>



          </form>

          </div>
          <div>

          <table class="table_design">


            <tr>
              <th>Category Name</th>

              <th>Edit</th>

              <th>delete</th>

            
            </tr>
            @foreach($data as $data)

            <tr>
              <td>{{$data->category_name}}</td>

              <td>
                <a class="btn btn-success" href="{{url('edit_category',$data->id)}}">Edit</a>
              </td>
              <td>
                <a class="btn btn-danger" onclick="confirmation(event)" href="{{url('delete_category' ,$data->id)}}">Delete</a>
              </td>


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