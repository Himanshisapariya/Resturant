@include('admin.message')
 <!-- ***** Menu Area Starts ***** -->
 <section class="section" id="menu">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="section-heading">
                    <h6>Our Menu</h6>
                    <h2>Our selection of Foods with quality taste</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="menu-item-carousel">
        <div class="col-lg-12">
            <div class="owl-menu-item owl-carousel">

                @foreach ($data as $food)
                    
        <form action="{{ url('/addcart',$food->id) }}" class="form" method="post">
            @csrf
               
                <div class="item">
                    <div class='card' style="background-image: url('/foodimage/{{ $food->image }}')">
                        <div class="price"><h6>Rs.{{ $food->price }}</h6></div>
                        <div class='info'>
                          <h1 class='title'>{{ $food->title }}</h1>
                          <p class='description'>{{ $food->description }}</p>
                          <div class="main-text-button">
                              <div class="scroll-to-section"><a href="#reservation">Make Reservation <i class="fa fa-angle-down"></i></a></div>
                              
                          </div>
                        </div>
                        
                    </div>

<div class="price" align="center">
    <input type="number" class="form-control text-danger" style="border:red" name="quantity" min="1" required style="width:180px;" placeholder="Enter Quantity">
    <input type="submit" class="form-control btn-danger" value="Add Cart">
</div>

                </div>
            </form>

                @endforeach
                
            </div>
        </div>
    </div>
</section>
<!-- ***** Menu Area Ends ***** -->