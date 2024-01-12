<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('admin.css')

    <style type="text/css">
    .title_deg
    {
        text-align: center;
        font-size: 25px;
        font-weight: bold;
        padding-bottom: 40px;
    }
    
    .th_deg
    {
        background-color: skyblue;
        padding: 10px;

    }

    .table_deg
    {
        border:2px solid white;
        width: 100%; 
        margin: auto;
        text-align: center;
    }

    .img_size
    {
        width: 200px;
        height: 100px;
    }


    </style>
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
    @include('admin.sidebar')
      <!-- partial -->
      @include('admin.header') 


      <div class="main-panel">
          <div class="content-wrapper">

          <h1 class="title_deg">All Orders</h1>

          <table class="table_deg">

            <tr class="th_deg">


                <th>Name</th>
                <th>Email</th>
                <th>Address</th>
                <th>Phone</th>
                <th>Product title</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Payment Status</th>
                <th>Delivery Status</th>
                <th>Image</th>
                <th>Delivered</th>
                <th>Print PDF</th> 
                <th>Send Email</th> 



            </tr>

            @foreach($order as $order) 

            <tr>
                <td>{{$order->name}}</td>
                <td>{{$order->email}}</td>
                <td>{{$order->address}}</td>
                <td>{{$order->phone}}</td>
                <td>{{$order->product_title}}</td>
                <td>{{$order->quantity}}</td>
                <td>{{$order->price}}</td>
                <td>{{$order->payment_status}}</td>
                <td>{{$order->delivery_status}}</td>
                <td>

                    <img class="img_size" src="/product/{{$order->image}}">
                </td>

                <td>
                    @if($order->delivery_status=='processing')
                    <a href="{{url('delivered',$order->id)}}" onclick="return confirm(' Are You SUre That Product Is Delivered ')" class="btn btn-primary">Delivered</a>


                    @else
                    <p style="color: greenyellow;">Delivered</p>

                    @endif
                </td>

                <td>
                    <a href="{{url('print_pdf',$order->id) }}" class="btn btn-secondary">Print PDF</a>
                </td>

                <td>
                    <a href="{{url('send_email',$order->id) }}" class="btn btn-secondary">Send Email</a>
                </td>



            </tr>

            @endforeach

          </table>

          </div>

      </div>

    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script') 

   
  </body>
</html>