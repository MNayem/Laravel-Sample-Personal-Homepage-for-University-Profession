@extends('layout.layout')
@section('content')

    <section class="py-5" style="background: #69ACC7;">
      <div class="container">
        <div class="row text-center">
          <div class="col-12">
            <h1 class="text-white fw-bold" style="font-size: 4rem;">RESEARCH</h1>
          </div>
        </div>
      </div>
    </section>

    <section class="py-5">
      <div class="container">
        <div class="row p-2">
            @foreach ($researchShowAll as $researchShowAll)
              <div class="col-xl-12 p-2">
                <div style="border: 1px solid rgb(214, 214, 214);border-radius: .5rem; padding: 3rem;">
                  <div class="row pt-3">
                    <p class="fs-2 fw-bold" style="color: #8E9CA5; text-align: center;">{{ $researchShowAll->title }}</p>
                    <center><img src="{{ asset('images/'. $researchShowAll->title_image) }}" style="width:800px; height:350px;"></center>
                  </div>
                  <div class="row">
                    <div class="col-12">
                      <p class="py-4" style="color: #8E9CA5; text-align: center;">{{ $researchShowAll->sub_title }}</p>
                      <center><img src="{{ asset('images/'. $researchShowAll->sub_title_image) }}" style="width:800px; height:350px;"></center>
                    </div>
                    <div class="col-12">
                      <p class="py-4" style="color: #8E9CA5; text-align: center;">{{ $researchShowAll->description }}</p>
                    </div>
                  </div>
                </div>
              </div>
            @endforeach
        </div>
      </div>
    </section>

@endsection