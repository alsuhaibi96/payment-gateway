<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wasel pay</title>
    <!--bootstrap link-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <!--font icon-->

   <!--custom css file link-->
       <!--walper slider library-->
       <link rel="stylesheet"href="{{url('assets/web/css/swiper-bundle.min.css')}}"/>
       <!--normalize library-->
       <link rel="stylesheet" href="{{url('assets/web/css/normalize.css')}}">
       <!--google font library-->
       <link rel="preconnect" href="https://fonts.googleapis.com">
       <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
       <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;700&display=swap" 
       rel="stylesheet">
       <!--font icon-->
       <link rel="stylesheet" href="{{url('assets/web/css/all.min.css')}}"/>
       <link rel="stylesheet" href="{{url('assets/web/path/to/font-awesome/css/font-awesome.min.css')}}">
   
    <link rel="stylesheet" href="{{url('assets/web/css/doc.css')}}">
    {{-- <link rel="stylesheet" href="{{url('assets/web/css/style.css')}}"> --}}
   
  </head>
  <body>
    <div class="layout has-sidebar fixed-sidebar fixed-header">
      <aside id="sidebar" class="sidebar break-point-lg ">
       
        <div class="sidebar-layout">
          <div class="sidebar-header">
            <span
              style="
                text-transform: uppercase;
                font-size: 15px;
                letter-spacing: 3px;
                font-weight: bold;
              "
              >Wasl Payment</span
            >
           
          </div>
          <span> <a href="{{ route('docs') }}" style="color: #999; margin:20px;">back to docs main</a></span>
         
          <div class="sidebar-content">
            <nav class=" text-dark">
              <ul>
                
                <li class="text-dark text-decoration-none">
                  <a href="/document">
                    <span class="menu-icon text-dark">
                      <i class="ri-vip-diamond-fill"></i>
                    </span>
                    <span class="menu-title text-dark">APIs</span>
                  
                  </a>
                  <div class="">
                    <ul>
                      <li class="menu-item">
                         <a href="#">
                          <span class="menu-title text-dark">Tutorial</span>
                        </a> 
                      </li>
                     
                      <li class="menu-item">
                        <a href="{{ route('test_card') }}">
                          <span class="menu-title text-dark">Wasel test card</span>
                        </a>
                      </li>
                     
                       
                        
                              
                                   
                <li class="menu-item sub-menu">
                  <a href="/checkout">
                   
                    <span class="menu-title text-dark">Checkout</span>
                  </a>
                  <div class="sub-menu-list">
                    <ul>
                      <li class="menu-item">
                        <a href="{{ route('checkout') }}">
                          <span class="menu-title text-dark">Create session</span>
                        </a>
                      </li>
                      {{-- <li class="menu-item">
                        <a href="#">
                          <span class="menu-title text-dark">List session</span>
                        </a>
                      </li>
                      <li class="menu-item">
                        <a href="#">
                          <span class="menu-title text-dark">Retrieve session</span>
                        </a>
                      </li>
                      <li class="menu-item">
                        <a href="#">
                          <span class="menu-title text-dark">Checkout_Model</span>
                        </a>
                      </li>
                    </ul>
                  </div>
                </li>
                <li class="menu-item sub-menu">
                  <a href="#">
                    <span class="menu-icon">
                    </span>
                    <span class="menu-title text-dark">Payment method</span>
                  </a>
                  <div class="sub-menu-list">
                    <ul>
                      <li class="menu-item">
                        <a href="#">
                          <span class="menu-title text-dark">Delete payment method</span>
                        </a>
                      </li>
                      <li class="menu-item">
                        <a href="#">
                          <span class="menu-title text-dark">Payment method model</span>
                        </a>
                      </li>
                      <li class="menu-item">
                        <a href="#">
                          <span class="menu-title text-dark">List a Customer's Payment Method</span>
                        </a>
                      </li>
                    </ul>
                  </div>
                </li>
                <li class="menu-item sub-menu">
                  <a href="#">
                    <span class="menu-icon">
                    </span>
                    <span class="menu-title text-dark">Payments</span>
                  </a>
                  <div class="sub-menu-list">
                    <ul>
                      <li class="menu-item">
                        <a href="#">
                          <span class="menu-title text-dark">List Payments</span>
                        </a>
                      </li>
                      <li class="menu-item">
                        <a href="#">
                          <span class="menu-title text-dark">Retrieve Payment</span>
                        </a>
                      </li>
                      <li class="menu-item">
                        <a href="#">
                          <span class="menu-title text-dark">Payment_Model</span>
                        </a>
                      </li>
                    </ul>
                  </div>
                </li>
                <li class="menu-item sub-menu">
                  <a href="#">
                    <span class="menu-icon">
                    </span>
                    <span class="menu-title text-dark">Invoice</span>
                  </a>
                  <div class="sub-menu-list">
                    <ul>
                      <li class="menu-item">
                        <a href="#">
                          <span class="menu-title text-dark">Invoice_Model</span>
                        </a>
                      </li>
                     
                    </ul>
                  </div>
                </li>
                <li class="menu-item sub-menu">
                  <a href="#">
                    <span class="menu-icon">
                    </span>
                    <span class="menu-title text-dark">Customers</span>
                  </a>
                  <div class="sub-menu-list">
                    <ul>
                      <li class="menu-item">
                        <a href="#">
                          <span class="menu-title text-dark">List customers</span>
                        </a>
                      </li>
                      <li class="menu-item">
                        <a href="#">
                          <span class="menu-title text-dark">Create Customer</span>
                        </a>
                      </li>
                      <li class="menu-item">
                        <a href="#">
                          <span class="menu-title text-dark">Retrieve customer</span>
                        </a>
                      </li>
                      <li class="menu-item">
                        <a href="#">
                          <span class="menu-title text-dark">Delete customer</span>
                        </a>
                      </li>
                      <li class="menu-item">
                        <a href="#">
                          <span class="menu-title text-dark">Customer_Model</span>
                        </a>
                      </li>
                     
                    </ul>
                  </div>
                </li>
                <li class="menu-item sub-menu">
                  <a href="#">
                    <span class="menu-icon">
                    </span>
                    <span class="menu-title text-dark">Refunds</span>
                  </a>
                  <div class="sub-menu-list">
                    <ul>
                      <li class="menu-item">
                        <a href="#">
                          <span class="menu-title text-dark">List Refunds</span>
                        </a>
                      </li>
                      <li class="menu-item">
                        <a href="#">
                          <span class="menu-title text-dark">create refunds</span>
                        </a>
                      </li>
                      <li class="menu-item">
                        <a href="#">
                          <span class="menu-title text-dark">Retrieve refunds</span>
                        </a>
                      </li>
                     
                      <li class="menu-item">
                        <a href="#">
                          <span class="menu-title text-dark">Refunds_Model</span>
                        </a>
                      </li>
                     
                    </ul>
                  </div>
                </li> --}}
               
               
              </ul>
            </nav>
          </div>
          <div class="sidebar-footer"><span>Powered by Wasel team</span></div>
        </div>
      </aside>
      <div id="overlay" class="overlay"></div>
      <div class="layout">
      
        {{-- <header class="header">
         
          <nav class="navbar" id="menu">
 
           
          </nav>
          <div class="icon">
              <i class="fas fa-bars toogle" id="btn-collapse"></i>
              <i class="fas fa-search" id="search-icon"></i>
              
          </div>
      </header> --}}
      <form action="#" id="search-form">
        <input type="search" placeholder="search ...." name="" id="search-box">
        <label for="search-box" class="fas fa-search"></label>
        <i class="fas fa-times" id="close"></i>
    </form>

@yield('content')
<!--bootstrap js link-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="assets/web/js/doc.js"></script>
<script src="assets/web/js/swiper-bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<!--custom js file link-->
<script src="assets/web/js/main.js"></script>
</body>


</html>
