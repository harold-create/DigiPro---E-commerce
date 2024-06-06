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

        h1
        {
          color: black;  
        }

        label
        {
            display: inline-block;
            width: 200px;
            font-size: 18px!important;
            color: black !important;
        }

        input[type='text']
        {
            width: 350px;
            height: 50;
        }

        texttarea
        {
            width: 450;
            height: 80px;
        }

        .input_design
        {
          padding: 15px;  
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

          <h1>Add Product</h1>

          <div class="div_design">


          <form action="{{url('upload_product')}}" method="post" enctype="multipart/form-data">

          @csrf

          <div class="input_design">
            <label>Product Title</label>
            <input type="text" name="title" required>
          </div>
          
          <div class="input_design">
          <label>Description</label>
          <textarea name="description" required></textarea>
          </div>

          <div class="input_design">
            <label>Price</label>
            <input type="text" name="price" required>
          </div>

          <div class="input_design">
            <label>Quantity</label>
            <input type="number" name="quantiy" required>
          </div>

          <div class="input_design">
            <label>Product Category</label>


            <select name="category" required>
                <option>Select a Option</option>
                @foreach($category as $category)

                <option value="{{$category->category_name}}">{{$category->category_name}}</option>
                
                @endforeach

                

            </select>
          </div>

          <div class="input_design">
            <label>Product Image</label>
            <input type="file" name="image">
          </div>

          <div class="input_design">
            
            <input class="btn btn-success" type="submit" value="Add product">
          </div>

          
          </form>
          </div>

       

          </div>
            
       
      </div>
    </div>
    <!-- JavaScript files-->
    <script src="{{asset('admincss/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('admincss/vendor/popper.js/umd/popper.min.js')}}"> </script>
    <script src="{{asset('admincss/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('admincss/vendor/jquery.cookie/jquery.cookie.js')}}"> </script>
    <script src="{{asset('admincss/vendor/chart.js/Chart.min.js')}}"></script>
    <script src="{{asset('admincss/vendor/jquery-validation/jquery.validate.min.js')}}"></script>
    <script src="{{asset('admincss/js/charts-home.js')}}"></script{{asset('')}}>
    <script src="{{asset('admincss/js/front.js')}}"></script>
  </body>
</html>