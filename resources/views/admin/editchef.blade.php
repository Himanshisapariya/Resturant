<x-app-layout>

</x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <base href="/public">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Corona Admin</title>
    <!-- plugins:css -->
   @include('admin.admincss')
  </head>
  <body>

    <div class="container-scroller">
  
@include('admin.navbar')



<div class="container m-5" style="position:relative; top:60px; right:-120px">

    <form action="{{ url('/updatechef',$data->id) }}" class="form" name="chef" method="post" enctype="multipart/form-data">
        @csrf

        <div>
            <label for="">Chef's Name</label>
            <input type="text" class="form-group text-dark" name="name" value="{{ $data->name }}" id="" placeholder="chef's Name">
        </div>

        <div>
            <label for="">Chef's Speciality</label>
            <input type="text" class="form-group text-dark" name="speciality" value="{{ $data->speciality }}" id="" placeholder="chef's Speciality">
        </div>
        
        <div>
            <label for="">Your Old Image</label>
            <img src="/foodimage/{{ $data->image }}" class="img" alt="">
        </div>

        <div>
            <label for="">new Image</label>
            <input type="file" class="form- text-dark" name="image" value="{{ $data->image }}" id="" placeholder="chef's Image">
        </div>

     <div class="m-3">
        <button class="bg-primary btn btn-lg" type="submit">Update Chef</button>
     </div>

    </form>




</div>



    </div>

@include('admin.adminjs')

  </body>
</html>