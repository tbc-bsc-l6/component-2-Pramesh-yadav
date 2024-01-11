<!DOCTYPE html>
<html lang="en">
<style type="text/css">
        .div_center
        {
            text-align: center ;
            padding-top: 40px;
        }

        .h2_font
        {
            font-size: 40px;
            padding-bottom: 40px ;

        }

        .input_colour
        {
            color: black ;
        }

        .center
        {
            margin: auto;
            width: 50%;
            text-align: center;
            margin-top: 30px;
            border: 3px solid white;
        }

    </style>

  <head>
    <!-- Required meta tags -->
    @include('admin.css')
  </head>
  <body>
  <div class="main-panel">
          <div class="content-wrapper">

            @if(session()->has('message'))

            <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                {{session()->get('message')}}

            </div>
            @endif

            <div class="div_center">
                <h2 class="h2_font">Add Category</h2>

                <form action="{{url('/add_category') }}" method="POST">
                    @csrf

            <input class="input_colour" text="text" name="category" placeholder="Write catagory name">
                    <input type="submit" class="btn btn-primary" name=" submit" value="Add Catagory">
                </form>
            </div>

            <table class="center">
                <tr>
                    <td>Catagory Name</td>
                    <td>Action</td>

                </tr>
                @foreach($data as $data)
                <tr>
                    <td>{{$data->category_name}}</td>
                    <td>
                        <a onclick="return confirm ('Are you sure want to delete this category')" class="btn btn-danger" href="{{url('delete_category',$data->id)}}">Delete</a>
                    </td>
                </tr>
                @endforeach
            </table>
          </div>
      </div>
    @include('admin.script') 

   
  </body>
</html>