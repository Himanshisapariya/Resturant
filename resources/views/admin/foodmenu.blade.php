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

<div class="container m-5" style="position:relative; top:5px; right:-20px">
 {{-- <div style="position:relative; top:60px; right:-350px"> --}}



     <form action="{{ url('/uploadfood') }}" method="post" enctype="multipart/form-data">
        @csrf 
        <div class="form-row">
          <div class="form-group col-md-12">
            <label for="name">Title</label>
            <input type="text" class="form-control text-white" name="title" placeholder="Enter title">
          </div>
          <div class="form-group col-md-12">
            <label for="phone">Price</label>
            <input type="text" class="form-control text-white" name="price" placeholder="Enter price">
          </div>
        </div>
        <div class="form-row">
           <div class="form-group col-md-12">
            <label for="">Image</label>
            <input type="file" class="form-control text-white" style="color:blue" name="image" required>
          </div> 

          <div class="form-group col-md-12">
            <label for="address">Description</label>
            <input type="text" class="form-control text-white" name="description" placeholder="Enter Description">
          </div>

          <div class="form-group col-md-12">
            <label for="category">Category</label>
            <select name="category" value="Lunch" class="form-control text-white">
              <option name="breakfast">Breakfast</option>
              <option name="lunch">Lunch</option>
              <option name="dinner">Dinner</option>
            </select>
          </div>
          
          
          <div class="form-group col-md-12" align="center">
            <button class="btn btn-success btn-lg center" type="submit">Save</button>
          </div>


        </div>
       
      </form>


      <div class="section-heading mb-5" align="center">
        <h2> Resturant Chefs</h2>
        <hr width="900px" color="red">
        <h6 class="p-3">All Chefs Of Resturant</h6>
    </div>


<table class="table table-bordered">
    <thead>
      <tr>
        <th scope="col">Name</th>
        <th scope="col">Price</th>
        <th scope="col">Image</th>
        <th scope="col">Description</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        @foreach ($data as $data)
        <td>{{ $data->title }}</td>
        <td>{{ $data->price }}</td>
        <td><img src="/foodimage/{{ $data->image }}" alt="Food Item 1" class="img-fluid" height="500px" width="500px"></td>
        <td>{{ $data->description }}</td>
        <td>
         <a href="{{ url('/editfood',$data->id) }}"> <button type="button" class="btn btn-primary">Edit</button></a>
         <a href="{{ url('/deletefood',$data->id) }}"> <button type="button" class="btn btn-danger">Delete</button></a>
        </td>
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