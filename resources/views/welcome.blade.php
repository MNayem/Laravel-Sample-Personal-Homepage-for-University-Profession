@extends('layout.layout')
@section('content')

    <section>
      <div class="container-fluid px-0">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="assets/img/slider/slider-1.jpg" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h5 class="p-3 mb-0" style="font-size: 3rem; text-transform: uppercase; font-weight: bolder;background: rgba(0, 0, 0, 0.5);">WELCOME !</h5>
                <p class="p-3" style="font-size: 1.6rem; background: rgba(255, 255, 255, 0.3);">Welcome to the homepage of Md. Nayem, School of Computer and Artificial Intelligence, Wuhan University of Technology.</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="assets/img/slider/slider-2.jpg" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h5 class="p-3 mb-0" style="font-size: 3rem; text-transform: uppercase; font-weight: bolder;background: rgba(0, 0, 0, 0.5);">RESEARCH</h5>
                <div class="p-3" style="background: rgba(255, 255, 255, 0.1);">
                  <p class="p-3" style="font-size: 1.6rem;">Our current research includes Machine learning, deep learning, data mining and big data analysis</p>
                  <a href="" class="btn btn-arman">See details</a>
                </div>

              </div>
            </div>
            <div class="carousel-item">
              <img src="assets/img/slider/slider-3.jpg" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h5 class="p-3 mb-0" style="font-size: 3rem; text-transform: uppercase; font-weight: bolder;background: rgba(0, 0, 0, 0.5);">FOR MORE INFORMATION</h5>
                <div class="p-3" style="background: rgba(255, 255, 255, 0.1);">
                  <p class="p-3" style="font-size: 1.6rem;">If you are interested in working with us, please click the following button.</p>
                  <a href="" class="btn btn-arman" style="border-bottom: 1px solid gray;">See details</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="py-5">
      <div class="container">
        <div class="row pt-3">
          <p class="fs-2" style="color: #8E9CA5;">RESEARCH</p>
        </div>
        <div class="row text-center p-2">
         @foreach ($researchShowFront as $researchShowFront)
          <div class="col-xl-6 p-2">
            <div style="border: 1px solid rgb(214, 214, 214);border-radius: .5rem; padding: 3rem;">
              <div class="row">
                    <div class="col-12">
                      <img src="assets/img/icons/icon-blockchain.png" alt="">
                      <h3 class="pt-4" style="color: #8E9CA5;">{{ $researchShowFront->title }}</h3>
                      <p class="py-4" style="color: #8E9CA5;">{{ $researchShowFront->sub_title }}.</p>
                      <a href="{{ url('/researchDetails',$researchShowFront->id) }}" class="btn btn-arman" style="border-bottom: 1px solid gray;">See details</a>
                    </div>
              </div>
            </div>
          </div>
          @endforeach
          <!--<div class="col-xl-6 p-2">-->
          <!--  <div style="border: 1px solid rgb(214, 214, 214);border-radius: .5rem; padding: 3rem;">-->
          <!--    <div class="row">-->
          <!--      <div class="col-12">-->
          <!--        <img src="assets/img/icons/icon-blockchain.png" alt="">-->
          <!--        <h3 class="pt-4" style="color: #8E9CA5;">Security System</h3>-->
          <!--        <p class="py-4" style="color: #8E9CA5;">Leveraging TPM for security. <br><br></p>-->
          <!--        <a href="" class="btn btn-arman" style="border-bottom: 1px solid gray;">See details</a>-->
          <!--      </div>-->
          <!--    </div>-->
          <!--  </div>-->
          <!--</div>-->
          <!--<div class="col-xl-6 p-2">-->
          <!--  <div style="border: 1px solid rgb(214, 214, 214);border-radius: .5rem; padding: 3rem;">-->
          <!--    <div class="row">-->
          <!--      <div class="col-12">-->
          <!--        <img src="assets/img/icons/icon-blockchain.png" alt="">-->
          <!--        <h3 class="pt-4" style="color: #8E9CA5;">Storage System</h3>-->
          <!--        <p class="py-4" style="color: #8E9CA5;">Ensuring reliability of flash memory and specific performance levels for applications that use the storage.</p>-->
          <!--        <a href="" class="btn btn-arman" style="border-bottom: 1px solid gray;">See details</a>-->
          <!--      </div>-->
          <!--    </div>-->
          <!--  </div>-->
          <!--</div>-->
          <!--<div class="col-xl-6 p-2">-->
          <!--  <div style="border: 1px solid rgb(214, 214, 214);border-radius: .5rem; padding: 3rem;">-->
          <!--    <div class="row">-->
          <!--      <div class="col-12">-->
          <!--        <img src="assets/img/icons/icon-blockchain.png" alt="">-->
          <!--        <h3 class="pt-4" style="color: #8E9CA5;">Virtualization</h3>-->
          <!--        <p class="py-4" style="color: #8E9CA5;">Supporting Dual Operating Systems, Real-Time Operating System and Linux with (GP)GPU sharing.</p>-->
          <!--        <a href="" class="btn btn-arman" style="border-bottom: 1px solid gray;">See details</a>-->
          <!--      </div>-->
          <!--    </div>-->
          <!--  </div>-->
          <!--</div>-->
        </div>
      </div>
    </section>

@endsection



