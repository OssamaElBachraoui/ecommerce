<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <title>Laravel</title>
  {{-- STYLE CSS --}}
  <link rel="stylesheet" href="style.css">
  
  {{-- Bootsrap cdn --}}
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  
  {{-- Fonts --}}
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap" rel="stylesheet">
  
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400;0,500;0,600;1,400;1,500;1,600&display=swap" rel="stylesheet">
  
  {{-- Fonts --}}
  
  {{-- cdn animate.style --}}
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
  
  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.bunny.net">
  <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
  
  <!-- Styles -->
  
</head>
<body class="mx-0 px-0">
  
  {{-- Navbar --}}
  <nav class="navbar navbar-expand-lg sticky-top bg-white p-3">
    <div class="container-fluid ">
      <a class="navbar-brand" href="#"><img src="https://library.elementor.com/urban-shop/wp-content/uploads/sites/112/2020/10/Streetsmart-Logo.svg" class="attachment-full size-full" alt="" loading="lazy"></a>
      <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      
      <div class=" collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav ">
          <li class="nav-item">
            <a class="nav-link mx-2 " aria-current="page" href="{{route('homepage')}}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link mx-2" href="{{route('clothing')}}">Clothing</a>
          </li>
          <li class="nav-item">
            <a class="nav-link mx-2" href="{{route('accessories')}}">Accessories</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link mx-2 dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Company
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="{{route('about')}}">About Us</a></li>
              <li><a class="dropdown-item" href="{{route('contact')}}">Contact us</a></li>
              <li><a class="dropdown-item" href="{{route('customer')}}">Customer Support</a></li>
              <li><a class="dropdown-item" href="{{route('privacy')}}">Privacy & Condition</a></li>
              <li><a class="dropdown-item" href="{{route('terms')}}">Terms & Condition</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  

  
  <div class="container">
    <div class="row ">
        <div class="col-12 text-center">
            <span class="tit_1">Legal &</span><span class="tit_2">Privacy</span>
        </div>
        <div class="col-12 text-center my-5">
            <h2>Privacy Policy</h2>
        </div>
        <div class="col-12 justify-content-center d-flex flex-column align-items-center ">
            <p class="cust_width">Lorem ipsum dolor sit amet, consectet adipiscing elit,sed do eiusm por incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea sint occaecat cupidatat non proident, sunt in culpa qui officia mollit natoque consequat massa quis enim. Donec pede justo, fringilla vitae, eleifend acer sem neque sed ipsum. Nam quam nunc, blandit vel.</p>
            <p class="cust_width">Lorem ipsum dolor sit amet, consectet adipiscing elit,sed do eiusm por incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea sint occaecat cupidatat non proident, sunt in culpa qui officia mollit</p>
            <p class="cust_width">Lorem ipsum dolor sit amet, consectet adipiscing elit,sed do eiusm por incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea sint occaecat cupidatat non proident, sunt in</p>
        </div>

        <div class="col-12 text-center my-5">
            <h2>Terms & Conditions</h2>
        </div>
        <div class="col-12 justify-content-center d-flex flex-column align-items-center ">
            <p class="cust_width">Lorem ipsum dolor sit amet, consectet adipiscing elit,sed do eiusm por incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea sint occaecat cupidatat non proident, sunt in culpa qui officia mollit natoque consequat massa quis enim. Donec pede justo, fringilla vitae, eleifend acer sem neque sed ipsum. Nam quam nunc, blandit vel.</p>
            <p class="cust_width">Lorem ipsum dolor sit amet, consectet adipiscing elit,sed do eiusm por incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea sint occaecat cupidatat non proident, sunt in culpa qui officia mollit</p>
        </div>


    </div>
</div>
  

  
  {{-- section email --}}
  <div class="container-fluid">
    <div class="row div_email mt-5 d-flex align-items-center justify-content-center">
      
      <div class="col-12 col-md-3  my-5  ">
        <h2 class=" text-white  text-center">Be The First To Know</h2>
      </div>

      <div class="col-12 col-md-3  text-center">
        <p class=" text-white ">Join our mailing list and be the first to know about the latest arrivals, exclusive offers, and more.</p>
      </div>

      <div class="col-12 col-md-2 input_email mx-5 px-2 text-center">
        <div class="input-group flex-nowrap">
          <span class="input-group-text " id="addon-wrapping">@</span>
          <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="addon-wrapping">
        </div>
      </div>
      
      <div class="col-12 col-md-3 my-3 text-center">
        <button class="cust_buttun_email mx-4 px-5 ">SUBMIT<img src="https://img.icons8.com/ios/25/020774/long-arrow-right--v1.png" class="ps-2"/></button>
      </div>
      
    </div>
  </div>
  
  {{-- footer --}}
  <div class="container-fluid">
    <div class="row my-5 d-flex justify-content-center align-items-center">
      <div class="col-12 col-md-3 ms-5">
        <img src="https://library.elementor.com/urban-shop/wp-content/uploads/sites/112/2020/10/Streetsmart-Logo.svg" class="attachment-full size-full pb-5" alt="" loading="lazy">
        <p class="par_footer">Aenean massa. luculvinar, ids lorem. Maecenas nec odio et tincidunt tempus. Donec vitae</p>
      </div>
      <div class="col-12 col-md-2 text-center mt-4">
        <h3 class="pb-3">Shop</h3>
        <a class="nav-link mx-2" href="{{route('clothing')}}">Clothing</a>
        <a class="nav-link mx-2" href="{{route('accessories')}}">Accessories</a>
      </div>
      <div class="col-12 col-md-2 text-center mt-4">
        <h3 class="pb-3">Customer Service</h3>
        <a class="dropdown-item" href="{{route('about')}}">About Us</a>
        <a class="dropdown-item" href="{{route('contact')}}">Contact us</a>
        <a class="dropdown-item" href="{{route('customer')}}">Customer Support</a>
        <a class="dropdown-item" href="{{route('privacy')}}">Privacy & Condition</a>
        <a class="dropdown-item" href="{{route('terms')}}">Terms & Condition</a>
      </div>
      <div class="col-12 col-md-2 text-center mt-4">
        <h3 class="pb-3">Social Links</h3>
        <a class="nav-link mx-2" href="">Facebook</a>
        <a class="nav-link mx-2" href="">Instagram</a>
        <a class="nav-link mx-2" href="">Twitter</a>
        <a class="nav-link mx-2" href="">Youtube</a>
      </div>
      <div class="col-12 col-md-2 text-center mt-4">
        <h3 class="pb-3">Contact Info</h3>
        <p>1234-5678-912</p>
        <p>Info@Streetsmart.Com</p>
      </div>
    </div>
  </div>
  
  
  
  
  {{-- script bootsrap --}}
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  {{-- SCRIPT FONTAWESOME --}}
  <script src="https://kit.fontawesome.com/06c0ec223e.js" crossorigin="anonymous"></script>
  {{-- script js --}}
  <script src="main.js"></script>
  
</body>
</html>








