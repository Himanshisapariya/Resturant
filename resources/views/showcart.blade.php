@include('admin.message')
<head>


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">

    <title>Klassy Cafe - Restaurant HTML Template</title>

    <base href="/public">
<!--
    
TemplateMo 558 Klassy Cafe

https://templatemo.com/tm-558-klassy-cafe

-->
    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/templatemo-klassy-cafe.css">

    <link rel="stylesheet" href="assets/css/owl-carousel.css">

    <link rel="stylesheet" href="assets/css/lightbox.css">

    </head>
    
    <body>
    
    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->
    
    
    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="{{ url('/') }}" class="logo">
                            <img src="assets/images/klassy-logo.png" align="klassy cafe html template">
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="/#top" class="active">Home</a></li>
                            <li class="scroll-to-section"><a href="/#about">About</a></li>
                           	
                        <!-- 
                            <li class="submenu">
                                <a href="javascript:;">Drop Down</a>
                                <ul>
                                    <li><a href="#">Drop Down Page 1</a></li>
                                    <li><a href="#">Drop Down Page 2</a></li>
                                    <li><a href="#">Drop Down Page 3</a></li>
                                </ul>
                            </li>
                        -->
                            <li class="scroll-to-section"><a href="/#menu">Menu</a></li>
                            <li class="scroll-to-section"><a href="/#chefs">Chefs</a></li> 
                            



                            
                            <!-- <li class=""><a rel="sponsored" href="https://templatemo.com" target="_blank">External URL</a></li> -->
                            <li class="scroll-to-section"><a href="/#reservation">Contact Us</a></li>

                        

                            <li class="scroll-to-section">
                                
                                @auth
                            <a href="{{ url('/showcart',Auth::user()->id) }}">
                                Cart</a>
                          
                                @endauth

                                @guest
                                    Cart
                                @endguest
                            </li>
                     
                            
                <li>
                            @if (Route::has('login'))
                            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                                @auth
                                  <li>  

                                    <x-app-layout>
   
                                    </x-app-layout>

                                  </li>
                                @else
                                 <li> <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a></li>
            
                                    @if (Route::has('register'))
                                     <li>   <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                                     </li>
                                    @endif
                                @endauth
                            </div>
                        @endif

                    </li>

                        </ul>        
                        <a class='menu-trigger'>
                            
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>


{{-- {{  dd($cart)}} --}}

<div id="top">


    <div class="container">
        <div class="section-heading mb-5" align="center">
            <h2>Shopping Cart</h2>
            <hr width="700px" color="red">
            <h6 class="p-3">We Leave A Delicious Memory For You</h6>
        </div>
        @isset($cart[0])

        <table class="table">
          <thead>
            <tr>
              <th>Food Image</th>
              <th>Food Name</th>
              <th>Food Price</th>
              <th>Quantity</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>

            @foreach ($cart as $cart)

            <tr>
              <td><img src="/foodimage/{{ $cart->getFood[0]->image }}" alt="Food 2" width="50" height="50"></td>
              <td>{{ $cart->getFood[0]->title }}</td>
              <td>{{ $cart->getFood[0]->price }}</td>
              <td>{{ $cart->quantity }}</td>
              <td>
                <a href="{{ url('deletecart',$cart->id) }}"><button class="btn btn-danger">Remove</button></a></td>
            </tr>

                            
            @endforeach
            <!-- Add more rows as needed -->
          </tbody>
        </table>


      </div>


      <div class="container p-5" align="center">
        <a href="{{ url('/checkout') }}">
            <button class="btn btn-success btn-lg center" >Order Now</button>
        </a>
      </div>
      @else

      <div class="section-heading mb-5" align="center">
          <h2 class="text-danger">Your Cart IS Empty</h2>
          <a href="/#menu">
         <button class="btn btn-success">Order Something</button>
      </a>
      </div>

      @endisset



</div>


    <!-- jQuery -->
    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/accordions.js"></script>
    <script src="assets/js/datepicker.js"></script>
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script> 
    <script src="assets/js/slick.js"></script> 
    <script src="assets/js/lightbox.js"></script> 
    <script src="assets/js/isotope.js"></script> 
    
    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>
    <script>

        $(function() {
            var selectedClass = "";
            $("p").click(function(){
            selectedClass = $(this).attr("data-rel");
            $("#portfolio").fadeTo(50, 0.1);
                $("#portfolio div").not("."+selectedClass).fadeOut();
            setTimeout(function() {
              $("."+selectedClass).fadeIn();
              $("#portfolio").fadeTo(50, 1);
            }, 500);
                
            });
        });

    </script>
  </body>
</html>