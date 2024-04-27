
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


{{-- main section --}}


<div style="position: relative; top :60px; right : -150px">
  <div class="section-heading mb-5" align="center">
    <h2> View Users</h2>
    <hr width="700px" color="red">
    <h6 class="p-3">All User Details Of The Resturant</h6>
</div>
<div class="table-responsive">
    <table border = "3px" class="table table-bordered bg-dark">
      <thead>
        <tr class="text-white" align="center">
          <th>Name</th>
          <th>Email</th>
          <th>Actions</th>
        </tr>
      </thead>

<tbody>
        @foreach ($data as $data)
            

        <tr align="center">
            <td>{{ $data->name }}</td>
            <td>{{ $data->email }}</td>

            @if ($data->usertype == "0")   
            <td><a href="{{ url('/deleteuser',$data->id) }}"><button class="btn btn-lg btn-danger">Delete</button></a></td>
            @else
            <td>Not Allowed</td>
            @endif

        </tr>

        @endforeach
      </tbody>

    </table>
</div>
</div>



{{-- main sectionends --}}

</div>

@include('admin.adminjs')

  </body>
</html>