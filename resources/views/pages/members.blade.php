@extends('layout.layout')
@section('content')

    <section class="py-5" style="background: #69ACC7;">
      <div class="container">
        <div class="row text-center">
          <div class="col-12">
            <h1 class="text-white fw-bold" style="font-size: 4rem;">MEMBERS</h1>
          </div>
        </div>
      </div>
    </section>

    <section class="py-5">
      <div class="container">
        <div class="row pt-3">
          <p class="fs-2" style="color: #8E9CA5;">Faculty</p>
        </div>
        <div class="row text-center">
            @foreach ($advisorProfessor as $advisorProfessor)
              <div class="col-xl-3 p-3">
                <img src="{{ asset('images/'.$advisorProfessor->image) }}" alt="" style="width: 200px; height: 200px; border-radius: 100%;">
                <p class="pt-4" style="color: #8E9CA5;">{{ $advisorProfessor->name }}</p>
                <p style="color: #8E9CA5;">{{ $advisorProfessor->category }}</p>
                <a href="{{ url('/memberShowSingle',$advisorProfessor->id) }}" class=""><i class="bi bi-house-fill socialArman"></i></a>
                <a href="" class=""><i class="bi bi-envelope-fill socialArman"></i></a>
              </div>
            @endforeach
        </div>
      </div>
    </section>

    <section class="py-5" style="background: #EDF2F4;">
      <div class="container">
        <div class="row pt-3">
          <p class="fs-2" style="color: #8E9CA5;">PHD Students</p>
        </div>
        <div class="row text-center">
            @foreach ($studentPHD as $studentPHD)
              <div class="col-xl-3 p-3">
                <img src="{{ asset('images/'.$studentPHD->image) }}" alt="" style="width: 200px; height: 200px; border-radius: 100%;">
                <p class="pt-4" style="color: #8E9CA5;">{{ $studentPHD->name }}</p>
                <p style="color: #8E9CA5;">{{ $studentPHD->category }}</p>
                <p style="color: #8E9CA5;">{{ $studentPHD->research }}</p>
                <a href="{{ url('/memberShowSingle',$studentPHD->id) }}" class=""><i class="bi bi-house-fill socialArman"></i></a>
                <a href="" class=""><i class="bi bi-linkedin socialArman"></i></a>
              </div>
            @endforeach
        </div>
      </div>
    </section>
    
    <section class="py-5">
      <div class="container">
        <div class="row pt-3">
          <p class="fs-2" style="color: #8E9CA5;">MS Students</p>
        </div>
        <div class="row text-center">
            @foreach ($studentMS as $studentMS)
              <div class="col-xl-3 p-3">
                <img src="{{ asset('images/'.$studentMS->image) }}" alt="" style="width: 200px; height: 200px; border-radius: 100%;">
                <p class="pt-4" style="color: #8E9CA5;">{{ $studentMS->name }}</p>
                <p style="color: #8E9CA5;">{{ $studentMS->category }}</p>
                <p style="color: #8E9CA5;">{{ $studentMS->research }}</p>
                <a href="{{ url('/memberShowSingle',$studentMS->id) }}" class=""><i class="bi bi-house-fill socialArman"></i></a>
                <a href="" class=""><i class="bi bi-linkedin socialArman"></i></a>
              </div>
            @endforeach
        </div>
      </div>
    </section>
    
    <section class="py-5" style="background: #EDF2F4;">
      <div class="container">
        <div class="row pt-3">
          <p class="fs-2" style="color: #8E9CA5;">BS Students</p>
        </div>
        <div class="row text-center">
            @foreach ($studentBS as $studentBS)
              <div class="col-xl-3 p-3">
                <img src="{{ asset('images/'.$studentBS->image) }}" alt="" style="width: 200px; height: 200px; border-radius: 100%;">
                <p class="pt-4" style="color: #8E9CA5;">{{ $studentMS->name }}</p>
                <p style="color: #8E9CA5;">{{ $studentBS->category }}</p>
                <p style="color: #8E9CA5;">{{ $studentBS->research }}</p>
                <a href="{{ url('/memberShowSingle',$studentBS->id) }}" class=""><i class="bi bi-house-fill socialArman"></i></a>
                <a href="" class=""><i class="bi bi-linkedin socialArman"></i></a>
              </div>
            @endforeach
        </div>
      </div>
    </section>
    
    <section class="py-5">
      <div class="container">
        <div class="row pt-3">
          <p class="fs-2" style="color: #8E9CA5;">Staff</p>
        </div>
        <div class="row text-center">
            @foreach ($studentStaff as $studentStaff)
              <div class="col-xl-3 p-3">
                <img src="{{ asset('images/'.$studentStaff->image) }}" alt="" style="width: 200px; height: 200px; border-radius: 100%;">
                <p class="pt-4" style="color: #8E9CA5;">{{ $studentStaff->name }}</p>
                <p style="color: #8E9CA5;">{{ $studentStaff->category }}</p>
                <p style="color: #8E9CA5;">{{ $studentStaff->research }}</p>
                <a href="{{ url('/memberShowSingle',$studentStaff->id) }}" class=""><i class="bi bi-house-fill socialArman"></i></a>
                <a href="" class=""><i class="bi bi-linkedin socialArman"></i></a>
              </div>
            @endforeach
        </div>
      </div>
    </section>

    <section class="py-5" style="background: #EDF2F4;">
      <div class="container">
        <div class="row pt-3">
          <p class="fs-2" style="color: #8E9CA5;">Members</p>
        </div>
        <div class="row text-center p-5">
            <img src="assets/img/profile/members.jpg" alt="" class="img-fluid">
        </div>
      </div>
    </section>

    <!--<section class="py-5">-->
    <!--  <div class="container">-->
    <!--    <div class="row pt-3">-->
    <!--      <p class="fs-2" style="color: #8E9CA5;">Alumni</p>-->
    <!--    </div>-->
    <!--    <div class="row text-center p-2">-->
    <!--      <div class="col-xl-3 p-2">-->
    <!--        <div style="border: 1px solid rgb(214, 214, 214);border-radius: .5rem; padding: 3rem;">-->
    <!--          <div class="row">-->
    <!--            <div class="col-12">-->
    <!--              ABC-->
    <!--            </div>-->
    <!--          </div>-->
    <!--        </div>-->
    <!--      </div>-->
    <!--      <div class="col-xl-3 p-2">-->
    <!--        <div style="border: 1px solid rgb(214, 214, 214);border-radius: .5rem; padding: 3rem;">-->
    <!--          <div class="row">-->
    <!--            <div class="col-12">-->
    <!--              ABC-->
    <!--            </div>-->
    <!--          </div>-->
    <!--        </div>-->
    <!--      </div>-->
    <!--      <div class="col-xl-3 p-2">-->
    <!--        <div style="border: 1px solid rgb(214, 214, 214);border-radius: .5rem; padding: 3rem;">-->
    <!--          <div class="row">-->
    <!--            <div class="col-12">-->
    <!--              ABC-->
    <!--            </div>-->
    <!--          </div>-->
    <!--        </div>-->
    <!--      </div>-->
    <!--      <div class="col-xl-3 p-2">-->
    <!--        <div style="border: 1px solid rgb(214, 214, 214);border-radius: .5rem; padding: 3rem;">-->
    <!--          <div class="row">-->
    <!--            <div class="col-12">-->
    <!--              ABC-->
    <!--            </div>-->
    <!--          </div>-->
    <!--        </div>-->
    <!--      </div>-->
    <!--      <div class="col-xl-3 p-2">-->
    <!--        <div style="border: 1px solid rgb(214, 214, 214);border-radius: .5rem; padding: 3rem;">-->
    <!--          <div class="row">-->
    <!--            <div class="col-12">-->
    <!--              ABC-->
    <!--            </div>-->
    <!--          </div>-->
    <!--        </div>-->
    <!--      </div>-->
    <!--      <div class="col-xl-3 p-2">-->
    <!--        <div style="border: 1px solid rgb(214, 214, 214);border-radius: .5rem; padding: 3rem;">-->
    <!--          <div class="row">-->
    <!--            <div class="col-12">-->
    <!--              ABC-->
    <!--            </div>-->
    <!--          </div>-->
    <!--        </div>-->
    <!--      </div>-->
    <!--      <div class="col-xl-3 p-2">-->
    <!--        <div style="border: 1px solid rgb(214, 214, 214);border-radius: .5rem; padding: 3rem;">-->
    <!--          <div class="row">-->
    <!--            <div class="col-12">-->
    <!--              ABC-->
    <!--            </div>-->
    <!--          </div>-->
    <!--        </div>-->
    <!--      </div>-->
    <!--      <div class="col-xl-3 p-2">-->
    <!--        <div style="border: 1px solid rgb(214, 214, 214);border-radius: .5rem; padding: 3rem;">-->
    <!--          <div class="row">-->
    <!--            <div class="col-12">-->
    <!--              ABC-->
    <!--            </div>-->
    <!--          </div>-->
    <!--        </div>-->
    <!--      </div>-->
    <!--    </div>-->
    <!--  </div>-->
    <!--</section>-->
    <section class="py-5">
      <div class="container">
        <div class="row pt-3">
          <p class="fs-2" style="color: #8E9CA5;">Alumini</p>
        </div>
        <div class="row text-center">
            @foreach ($studentAlumini as $studentAlumini)
              <div class="col-xl-3 p-3">
                <img src="{{ asset('images/'.$studentAlumini->image) }}" alt="" style="width: 200px; height: 200px; border-radius: 100%;">
                <p class="pt-4" style="color: #8E9CA5;">{{ $studentAlumini->name }}</p>
                <p style="color: #8E9CA5;">{{ $studentAlumini->category }}</p>
                <p style="color: #8E9CA5;">{{ $studentAlumini->research }}</p>
                <a href="{{ url('/memberShowSingle',$studentAlumini->id) }}" class=""><i class="bi bi-house-fill socialArman"></i></a>
                <a href="" class=""><i class="bi bi-linkedin socialArman"></i></a>
              </div>
            @endforeach
        </div>
      </div>
    </section>

@endsection