<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sidebar 3</title>
    <link rel="shortcut icon" href="logo.png" type="image/x-icon">

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <!-- bootstrap icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <style>
      #side_nav{
          min-width: 250px;
          max-width: 250px;
          max-height: 100vh;
          overflow: auto;
          transition: all .3s;
      }
      .mainContent{
          min-height: 100vh;
          width: 100%;
      }
      @media (max-width: 800px) {
          #side_nav{
              margin-left: -250px;
              position: fixed;
              min-height: 100vh;
              z-index: 1;
          }
          #side_nav.active{
              margin-left: 0px;
          }
      }
      .armanSidebarMenuText{
                text-decoration: none;
                color: white;
                font-weight: bold;
                font-size: 1.2rem;
                cursor: pointer;
                text-transform: uppercase;
                padding: 0 1rem;
      }
      .armanSidebarMenuText:hover{
                color: red;
                font-weight: bold;
                /* transition: .1s; */
      }
      .armanSidebarMenuText.active{
                color: red;
                /* transition: .1s; */
      }
      .container, .container-fluid, .container-lg, .container-md, .container-sm, .container-xl, .container-xxl {
          --bs-gutter-x: 1.5rem;
          --bs-gutter-y: 0;
          width: 100%;
          padding-right: 0;
          padding-left: 0;
          margin-right: auto;
          margin-left: auto;
      }
      .row {
          --bs-gutter-x: 0rem;
          --bs-gutter-y: 0;
          display: flex;
          flex-wrap: wrap;
          margin-top: calc(-1 * var(--bs-gutter-y));
          margin-right: calc(-.5 * var(--bs-gutter-x));
          margin-left: calc(-.5 * var(--bs-gutter-x));
      }
    </style>
  </head>

  <body>
    <section>
      <div class="container-fluid d-flex">
        <div class="sidebar bg-dark" id="side_nav">
            <div class="header-box d-flex justify-content-center px-xl-4 p-2">
                <a href=""><img src="logo.png" alt="" style="width: 90px; height: 90px;"></a>
                <!-- <button class="btn close-btn d-lg-none d-block text-white fs-1"> -->
                  <i class="bi bi-x-lg"></i>
                </button>
            </div>
            <ul class="list-unstyled px-xl-4 py-3">
                <li><a href="createForm.html" class="armanSidebarMenuText">Create</a></li>
                <li><a href="indexTable.html" class="armanSidebarMenuText">Index</a></li>
                <li><a href="showDetails.html" class="armanSidebarMenuText">Show</a></li>
                <li><a href="editForm.html" class="armanSidebarMenuText active">Edit</a></li>
            </ul>
        </div>
        <div class="mainContent" style="max-height: 100vh; overflow: auto;">
            <div class="munu sticky-top">
                <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                    <div class="container-fluid">
                        <div class="d-lg-none d-block px-2 m-auto">
                            <button class="btn open-btn text-white fs-1" type="button"><i class="bi bi-list"></i></button>
                            <a href="" class="px-5"><img src="logo.png" alt="" style="width: 90px; height: 90px;"></a>
                            <button class="btn text-white fs-1" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i class="bi bi-list"></i></button>
                        </div>
                      <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 p-4">
                          <li class="nav-item"><a class="armanSidebarMenuText" aria-current="page" href="">Admin</a></li>
                          <li class="nav-item"><a class="armanSidebarMenuText" href="">Logout</a></li>
                        </ul>
                      </div>
                    </div>
                </nav>
            </div>

<!-----------------------content for other page------------------->
            <div class="row justify-content-center py-3">
                <div class="col-11 px-3" style="box-shadow: 0px 0px 5px gray;border-radius: .5rem;">
                    <div class="row justify-content-center pt-3">
                        <div class="col-12">
                        <h3>Edit Form</h3><hr>
                        </div>
                    </div> 
                    <form action="{{ url('/edit') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row justify-content-center">

                            <!-- text type -->
                            <div class="col-12 mb-3 px-2">
                                <input type="text/email/password" name="name" value="{{$data->name}}" class="form-control" required>
                            </div>

                            <!-- textarea type -->
                            <div class="col-12 mb-3 px-2">
                                <textarea name="description"  class="form-control" cols="30" rows="3" value="{{$data->description}}" required>{{$data->description}}</textarea>
                            </div>

                            <!-- select type -->
                            <div class="col-12 mb-3 px-2">
                                <select name="category" class="form-select" required>
                                    <option value="{{$data->Arman}}" selected hidden>{{$data->Arman}}</option>
                                    <option value="Farhan">Farhan</option>
                                    <option value="Nayem">Nayem</option>
                                </select>
                            </div>

                            <!-- checkbox type -->
                            <div class="col-12 mb-3 px-2">
                                <div class="row">
                                    <div class="col-xl-3 col-md-6">
                                        <input class="form-check-input" type="checkbox" name="hobby[]" value="Cricket" id="one">
                                        <label class="form-check-label" for="one">
                                            Cricket
                                        </label>
                                    </div>
                                    <div class="col-xl-3 col-md-6">
                                        <input class="form-check-input" type="checkbox" name="hobby[]" value="Football" id="two">
                                        <label class="form-check-label" for="two">
                                            Football
                                        </label>
                                    </div>
                                    <div class="col-xl-3 col-md-6">
                                        <input class="form-check-input" type="checkbox" name="hobby[]" value="Badminton" id="three">
                                        <label class="form-check-label" for="three">
                                            Badminton
                                        </label>
                                    </div>
                                    <div class="col-xl-3 col-md-6">
                                        <input class="form-check-input" type="checkbox" name="hobby[]" value="Volleyball" id="four">
                                        <label class="form-check-label" for="four">
                                            Volleyball
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <!-- radio type -->
                            <div class="col-12 mb-3 px-2">
                                <div class="row">
                                    <div class="col-xl-3 col-md-6">
                                        <input class="form-check-input" type="radio" name="gender" id="a" value="male">
                                        <label class="form-check-label" for="a">
                                            Male
                                        </label>
                                    </div>
                                    <div class="col-xl-3 col-md-6">
                                        <input class="form-check-input" type="radio" name="gender" id="b" value="female">
                                        <label class="form-check-label" for="b">
                                          Female
                                        </label>
                                    </div>
                                    <div class="col-xl-3 col-md-6">
                                        <input class="form-check-input" type="radio" name="gender" id="c" value="common">
                                        <label class="form-check-label" for="c">
                                          Common
                                        </label>
                                    </div>
                                    <div class="col-xl-3 col-md-6">
                                        <input class="form-check-input" type="radio" name="gender" id="d" value="others">
                                        <label class="form-check-label" for="d">
                                          Others
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <!-- file type -->
                            <div class="col-12 mb-3 px-2">
                              <img src="{{ asset($data->image) }}" style="width:100px;height:100px;"  class="form-control p-0">
                              <input type="file" name="image" value="1" class="form-control" required>
                            </div>




                            <!-- submit type -->
                            <div class="col-12 mb-3 px-2 d-flex justify-content-center">
                                <input type="submit" value="Done" class="btn btn-success fw-bold" name="submit">
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
      </div>
    </section>
      

    <!-- jquery -->
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>

    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

    <script>
      $('.open-btn').on('click', function(){
          $('.sidebar').toggleClass('active');
      });
      $('.close-btn').on('click', function(){
          $('.sidebar').removeClass('active');
      });
    </script>

  </body>
</html>