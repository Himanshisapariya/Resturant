
@include('admin.message')
<x-app-layout>

</x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Corona Admin</title>
    <!-- plugins:css -->
   @include('admin.admincss')
  </head>
  <body>

    <div class="container-scroller">

  
@include('admin.navbar')

<div class="conatiner center p-5" align="center">
    <div class="section-heading mb-5" align="center">
        <h2> View Orders</h2>
        <hr width="700px" color="red">
        <h6 class="p-3">All Orders Of Customers</h6>
    </div>
<div class="table-responsive">
    <table class="table table-bordered bg-dark">
      <thead>
        <tr class="text-white">
          <th>Name</th>
          <th>Mobile</th>
          <th>City</th>
          <th>Address</th>
          <th>Food</th>
          <th>Image</th>
          <th>Total Price</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($order as $order)
            

        <tr>
          <td>{{ $order->name }}</td>
          <td>{{ $order->mobile}}</td>
          <td>{{ $order->city }}</td>
          <td>{{ $order->address }}</td>
          <td>{{ $order->productName }}</td>
          <td><img src="/foodimage/{{ $order->productImage }}" alt="Food Image" width="100"></td>
          <td>{{ $order->productPrice*$order->productQuantity }}</td>
        </tr>

        @endforeach
        <!-- Add more rows as needed -->
      </tbody>
    </table>
  </div>
</div>
    </div>
@include('admin.adminjs')

  </body>
</html>