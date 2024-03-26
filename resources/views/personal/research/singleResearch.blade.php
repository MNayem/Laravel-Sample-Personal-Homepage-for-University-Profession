@extends('layout.layout')
@section('content')

<section class="py-5">
      <div class="container">
        <div class="row pt-3">
          <p class="fs-2" style="color: #8E9CA5;">RESEARCH</p>
        </div>
        <div class="row text-center p-2">
          <div class="col-xl-12 p-2">
            <div style="border: 1px solid rgb(214, 214, 214);border-radius: .5rem; padding: 3rem;">
              <div class="row">
                    <div class="col">
                      <h3 class="pt-4" style="color: #8E9CA5;">{{ $data->title }}</h3>
                      <img src="{{ asset('images/'. $data->title_image) }}" width="600px" height="300px;">
                      <p class="py-4" style="color: #8E9CA5;">{{ $data->sub_title }}.</p>
                      <img src="{{ asset('images/'. $data->	sub_title_image) }}" width="600px" height="300px;">
                      <p class="py-4" style="color: #8E9CA5;">{{ $data->description }}.</p>
                    </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

@endsection