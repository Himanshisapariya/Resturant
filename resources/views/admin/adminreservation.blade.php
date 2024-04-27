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

<div class="container p-5">

    <div class="section-heading mb-5" align="center">
        <h2> View Orders</h2>
        <hr width="700px" color="red">
        <h6 class="p-3">All Orders Of Customers</h6>
    </div>


    <div class="table-responsive">
    <table class="table table-bordered bg-dark" border="1px">
        <thead>
        <tr class="center text-white">
            <th class="p-5">Name</th>
            <th class="p-5">Email</th>
            <th class="p-5">Phone</th>
            <th class="p-5">Date</th>
            <th class="p-5">Time</th>
            <th class="p-5">Message</th>
        </tr>
    </thead>

        <tbody>

        @foreach ($data as $data)

        <tr class="center p-3 text-white"> 
            <td>{{ $data->name }}</td>
            <td>{{ $data->email }}</td>
            <td>{{ $data->phone }}</td>
            <td>{{ $data->date }}</td>
            <td>{{ $data->time }}</td>
            <td>{{ $data->message }}</td>
        </tr>

        @endforeach
    </tbody>

    </table>
</div>


</div>
    </div>

@include('admin.adminjs')

  </body>
</html>