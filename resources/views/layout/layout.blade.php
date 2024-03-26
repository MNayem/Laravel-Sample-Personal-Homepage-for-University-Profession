<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Md Nayem's Homepage</title>
    <link rel="shortcut icon" href="../assets/img/icons/p2cit.png" type="image/x-icon">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <style>
      .nav-link {
          display: block;
          padding: 1rem var(--bs-nav-link-padding-x);
          font-size: 1rem;
          font-weight: 400;
          color: #8e9ca5;
          text-decoration: none;
          transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out;
          text-transform: uppercase;
      }
      .navbar-nav .nav-link.active, .navbar-nav .show>.nav-link {
        color: #69acc7;
        border-bottom: 2px solid #69acc7;
      }
      .nav-link:hover{
        color: #69acc7;
        border-bottom: 2px solid #69acc7;
        transition: .1s;
      }
      /* .container, .container-fluid, .container-lg, .container-md, .container-sm, .container-xl, .container-xxl {
          --bs-gutter-x: 0;
      } */
      .carousel-indicators [data-bs-target] {
          width: 15px;
          height: 15px;
          border-radius: 100%;
          border: 5px solid white;
          background: #4696b6;
      }
      .carousel-indicators [data-bs-target] {
          opacity: .2;
      }
      .carousel-indicators .active {
          opacity: 1;

      }
      .carousel-caption {
          position: absolute;
          right: 15%;
          bottom: 5rem;
          left: 15%;
          padding-top: 1.25rem;
          padding-bottom: 1.25rem;
          color: #fff;
          text-align: center;
      }
      .btn-arman{
        text-decoration: none;
        font-size: 1.5rem;
        background: #EDF2F4;
        color: grey;
        cursor: pointer;
      }
      .btn-arman:hover{
        background: #96C4D6 !important;
        color: black;
      }
      .socialArman{
        background: white;
        color: #69ACC7;
        border-radius: 100%;
        padding: .4rem .7rem;
        font-size: 1.5rem;
        box-shadow: 0px 1px 1px gray;
      }
      .socialArman:hover{
        background: #69ACC7;
        color: white;
      }
    </style>
  </head>
  <body>

    
    <section class="bg-white sticky-top">
      <div class="container">
        <nav class="navbar navbar-expand-lg">
          <div class="container-fluid">
            <a class="navbar-brand" href="/">
              <span class="fs-4 fw-bold" style="color: #69ACC7;">Personal Homepage of MD NAYEM</span> <br>
              <span class="fs-6" style="color: #69ACC7;">Wuhan University of Technology</span> 
              
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item"><a class="nav-link {{'/'==request()->path()?'active':''}}" aria-current="page" href="/">Home</a></li>
                <li class="nav-item"><a class="nav-link {{'members'==request()->path()?'active':''}}" href="/members">Members</a></li>
                <li class="nav-item"><a class="nav-link {{'research'==request()->path()?'active':''}}" href="/research">Research</a></li>
                <li class="nav-item"><a class="nav-link {{'publications'==request()->path()?'active':''}}" href="/publications">Publications</a></li>
                <li class="nav-item"><a class="nav-link {{'projects'==request()->path()?'active':''}}" href="/projects">Projects</a></li>
                <li class="nav-item"><a class="nav-link {{'contact'==request()->path()?'active':''}}" href="/contact">Contact</a></li>
                <li class="nav-item"><a class="nav-link {{'contact'==request()->path()?'active':''}}" href="/login">Login</a></li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </section>

    @yield('content')

    <section class="py-5" style="background: #EDF2F4;">
      <div class="container">
        <div class="row px-4">
          <div class="col-12">
            <p style="color: #8E9CA5; font-weight: bold;">Personal Homepage of MD NAYEM</p> <br>
            <p class="" style="color: #8E9CA5;">Road 32, Room 423 (4th floor of NLI Tower-Easy Show Room), Ibrahim Mia Road, Shib-bari, Khulna, Bangladesh</p> <br>
            <p style="color: #8E9CA5;">copyright 2021 P2C IT. Designed and Developed by 
            <span style="color: #69ACC7; font-weight: bold;">Md. Nayem
            </span> All rights reserved</p>
          </div>
        </div>
      </div>
    </section>

    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>
