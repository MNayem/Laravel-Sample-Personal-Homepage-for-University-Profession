<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Md Nayem's Homepage</title>
    <link rel="icon"  href="../assets/img/logo/p2cITlogo.png">

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <!-- font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <style>
.navbar-toggler {
    color: white !important;
    background-color: white !important;
}
        #cartDisplay1{display:none;}
        #cartDisplay2{display:block;}
        
        .nav-link{
            font-size: 1rem !important;
            font-weight: bold !important;
            text-transform: uppercase !important;
            color: white !important;
        }
        .active, .nav-link:hover{
            color: #E7272D !important;
        }
        .btn-custom{
            width: 190px;
            height: 55px;
            background-color: #E7272D;
            color: white;
            border: none;
            font-weight: bold;
        }
        .btn-custom1{
            width: 110px;
            height: 35px;
            background-color: #E7272D;
            color: white;
            border: none;
            font-weight: bold;
            font-size: .8rem;
        }
        .btn-custom:hover, .btn-custom1:hover{
            background-color: #212121;
        }
        .nav-pills .nav-link.active, .nav-pills .show>.nav-link {
            background-color: #E7272D !important;
        }
        .hover1:hover{
            background-color: #E7272D !important;
        }
        .bottomToTop{
            width: 50px;
            height: 50px;
            background-color: #E7272D;
            color: white;
            position: fixed;
            bottom: 1rem;
            right: 1rem;
            border-radius: 100%;
            scroll-behavior: smooth;
        }
        .notification{
            width: 20px;
            height: 20px;
            border-radius: 100%;
            background-color: #E7272D;
            color: white;
            margin-left: -15px;
        }
        .rotImage{
            /* transform: translate(-50%,-50%); */
            animation: myfirst 30s infinite linear;
            width: 85%;
        }
        @keyframes myfirst{
            0%{
                transform: rotate(0deg);
            }
            90%{
                transform: rotate(360deg);
            }
        }
        
        @media screen and (max-width: 400px) {
            .hover1{
                /* display: none; */
                padding: 0 !important;
                text-align: center !important;
            }
            .p1{
                font-size: 1.5rem !important;
                letter-spacing: -.1rem !important;
                display: inline !important;
            }
            .hover1{
                padding: 0;
                margin: 0;
            }            
            .hover1 img{
                width:50%;
                height:50%;
            }            
            .hover1 h6{
                font-size: .7rem;
            }
            .nav-link {
                 padding: .5rem .25rem; 
            }
        }
        @media screen and (max-width: 991px) {
            #cartDisplay1{
                display: block;
                margin-top: 30px;
            }
            #cartDisplay2{display: none;}
            .notification {
                    margin-left: 13px !important;
                    margin-top: -55px !important;
            }
        }
    </style>

  </head>
  <body>


<section class="sticky-top bg-dark">
          <style>
              .notification {
                    width: 30px;
                    height: 30px;
                    border-radius: 100%;
                    background-color: #E7272D;
                    color: white;
                    margin-left: -20px;
                    margin-top: -15px;
                }
                .navbar {
                     padding: 0; 
                }
                .navbar-brand {
                     padding-top: 0; 
                     padding-bottom: 0; 
                }
          </style>
        <div class="container">
            <nav class="navbar navbar-expand-lg bg-dark">
                <div class="container-fluid">


                  <a class="navbar-brand" href="/"><img src="../assets/img/logo/p2cITlogo.png" alt="" style="width:100px; height:100px;"></a>
                  
                <!-- offcanvas -->
                <button class="navbar-toggler me-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
                    <span class="navbar-toggler-icon" data-bs-target="#offcanvasExample"></span>
                </button>
                <!-- offcanvas -->
                  
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                      <li class="nav-item"><a class="nav-link {{'/'==request()->path()?'active':''}}" aria-current="page" href="/">Home</a></li>

                      <li class="nav-item"><a class="nav-link 
                      {{'admin/home'==request()->path()?'active':''}}
                      {{'productadd'==request()->path()?'active':''}}
                      {{'productshow'==request()->path()?'active':''}}
                      {{'foodadd'==request()->path()?'active':''}}
                      {{'foodshow'==request()->path()?'active':''}}
                      {{'stockadd'==request()->path()?'active':''}}
                      {{'stockshow'==request()->path()?'active':''}}
                      {{'ingredientsadd'==request()->path()?'active':''}}
                      {{'ingredientsShow'==request()->path()?'active':''}}
                      {{'dailysaleRestaurantadd'==request()->path()?'active':''}}
                      {{'dailysaleshowRestaurant'==request()->path()?'active':''}} 
                      {{'allOnlineOrder'==request()->path()?'active':''}}" href="/admin/home">Dashboard</a></li>
                      
                      <li class="nav-item"><a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> {{ __('Logout') }} </a></li>
                      
                      <button onclick="window.print()" style="border-radius:100%;width:40px;height:40px;"><i class="fa-solid fa-print" style=""></i></button>
                      
                    </ul>
                  </div>
                </div>
            </nav>
        </div>
    </section>
    
    <!-- offcanvas -->
    <style>
        .sidebar-nav{
            width: 270px !important;
        }
        .sidebar-link{
            display: flex !important;
            align-items: center !important;
        }
        .sidebar-link .right-icon{
            display: inline-flex !important;
            transition: all ease 0.25s;
        }
        .sidebar-link[aria-expanded="true"] .right-icon {
            transform: rotate(180deg) !important;
        }
        main{
            margin-left: 270px !important;
        }
        @media (min-width: 992px) {
            body{
                overflow: auto !important;
            }
            .offcanvas-backdrop::before{
                display: none !important;
            }
            .sidebar-nav{
                transform: none !important;
                visibility: visible !important;
                top: 100px !important;
                height: calc(100% - 56px) !important;
            }
        }
        @media (max-width: 400px) {
            main{
                margin-left: 0 !important;
            }
        }
    </style>

    <div class="offcanvas offcanvas-start bg-dark text-white sidebar-nav" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">

        <div class="offcanvas-body p-0">
            <div class="navbar-dark">
                <ul class="navbar-nav">
                    <li><a class="nav-link px-3 sidebar-link {{'admin/home'==request()->path()?'active':''}}" href="/admin/home" style="font-size: 1.3rem;"><span>Dashboard</span></a></li>
                    
                    <li><a class="nav-link px-3 sidebar-link {{'titleAndSubtitleadd'==request()->path()?'active':''}}" href="/titleAndSubtitleadd" style="font-size: 1.3rem;"><span>Research Title Add</span></a></li>
                    <li><a class="nav-link px-3 sidebar-link {{'titleAndSubtitleshow'==request()->path()?'active':''}}" href="/titleAndSubtitleshow" style="font-size: 1.3rem;"><span>Research Title Show</span></a></li>
                    
                    <li><a class="nav-link px-3 sidebar-link {{'researchadd'==request()->path()?'active':''}}" href="/researchadd" style="font-size: 1.3rem;"><span>Research Add</span></a></li>
                    <li><a class="nav-link px-3 sidebar-link {{'researchshow'==request()->path()?'active':''}}" href="/researchshow" style="font-size: 1.3rem;"><span>Research Show</span></a></li>
                    
                    <li><a class="nav-link px-3 sidebar-link {{'memberadd'==request()->path()?'active':''}}" href="/memberadd" style="font-size: 1.3rem;"><span>Member Add</span></a></li>
                    <li><a class="nav-link px-3 sidebar-link {{'membershow'==request()->path()?'active':''}}" href="/membershow" style="font-size: 1.3rem;"><span>Member Show</span></a></li>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
       @csrf
       
    </form>
                </ul>
            </div>
        </div>
    </div>
    <!-- offcanvas -->

    <!-- body -->
    <main class="">
        @yield('content')
    </main>
    <!-- body -->


    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>