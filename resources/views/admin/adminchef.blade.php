
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



<div class="container m-5" style="position:relative; top:60px; right:-10px">



    <form action="{{ url('/addchef') }}" class="form mb-5" name="chef" method="post" enctype="multipart/form-data">
        @csrf 
        <div class="form-row">
          <div class="form-group col-md-12">
            <label for="name">Chef's Name</label>
            <input type="text" class="form-control text-white" name="name" placeholder="Enter Name">
          </div>
          <div class="form-group col-md-12">
            <label for="phone">Chef's Speciality</label>
            <input type="text" class="form-control text-white" name="speciality" placeholder="Enter Chef Speciality">
          </div>
        </div>
        <div class="form-row">
           <div class="form-group col-md-12">
            <label for="">Chef's Image</label>
            <input type="file" class="form-control text-white" style="color:blue" name="image" required>
          </div> 

          <div class="form-group col-md-12" align="center">
            <button class="btn btn-success btn-lg center" type="submit">Add Chef</button>
          </div>


        </div>
       
      </form>


    <div class="section-heading mb-5" align="center">
        <h2> Resturant Chefs</h2>
        <hr width="900px" color="red">
        <h6 class="p-3">All Chefs Of Resturant</h6>
    </div>

<div class="container table-responsive">

    <table border="1px" class="table table-bordered bg-dark mb-5">
        <thead>
        <tr class="center text-white" align="center">
            <th class="p-5">Name</th>
            <th class="p-5">Speciallity</th>
            <th class="p-5">Photo</th>
            <th class="p-5">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $data)
            
        <tr align="center" class="text-white">
            <td>{{ $data->name }}</td>
            <td>{{ $data->speciality}}</td>
            <td><img src="/foodimage/{{ $data->image }}" height="150px" width="150px" alt=""></td>
            <td><a href="{{ url('/deletechef',$data->id )}}">
                <button class="btn btn-danger">Delete</button> 
                <a href="{{ url('/editchef',$data->id )}}">
                    <button class="btn btn-primary
                    ">Edit</button>    
            </a></td>
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