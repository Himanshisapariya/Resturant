<x-app-layout>

</x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>

    <base href="/public">
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


<div style="position:relative; top:60px; right:-150px">
    <form action="{{ url('/updatefood',$data->id) }}" class="form" method="post" enctype="multipart/form-data">
        @csrf
        <div>
            <label for="">Title</label>
            <input type="text" class="form-group" value="{{ $data->title }}" style="color:blue" name="title" required placeholder="Write A title">
        </div>

        <div>
            <label for="">Price</label>
            <input type="text" class="form-group" value="{{ $data->price }}" style="color:blue" name="price" required placeholder="Write A Price">
        </div>

        <div>
            <label for="">Your Old Image</label>
           <img src="/foodimage/{{ $data->image }}" class="img p-1" height="300px" width="300px" alt="">

        </div>

        <div>
            <label for="">NEW Image</label>
            <input type="file" class="form-group" value="{{ $data->image }}" style="color:blue" name="image" required>
        </div>


        <div>
            <label for="">Description</label>
            <input type="text" class="form-group" value="{{ $data->description }}" style="color:blue" name="description" required placeholder="Write A Description">
        </div>

        <div>
            <input type="submit" class="form-group btn btn-dark" value="Update">
        </div>
    </form>



</div>


    </div>
@include('admin.adminjs')

  </body>
</html>