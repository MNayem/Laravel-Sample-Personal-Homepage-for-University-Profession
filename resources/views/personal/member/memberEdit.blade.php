<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

@extends('layout.adminLayout')

@section('content')

@if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif

<style>
     @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');

 * {
     margin: 0;
     padding: 0;
     box-sizing: border-box;
     font-family: 'Poppins', sans-serif
 }

 body::-webkit-scrollbar {
     display: none
 }

 .wrapper {
     max-width: 700px;
     margin: 2rem auto;
     padding: 30px 45px;
     box-shadow: 0px 0px 10px black;
 }

 .wrapper label {
     display: block;
     padding-bottom: 0.2rem
 }

 .wrapper .form .row {
     padding: 0.6rem 0
 }

 .wrapper .form .row .form-control {
     box-shadow: none
 }

 .wrapper .form .option {
     position: relative;
     padding-left: 20px;
     cursor: pointer
 }

 .wrapper .form .option input {
     opacity: 0
 }

 .wrapper .form .checkmark {
     position: absolute;
     top: 1px;
     left: 0;
     height: 20px;
     width: 20px;
     border: 1px solid #bbb;
     border-radius: 50%
 }

 .wrapper .form .option input:checked~.checkmark:after {
     display: block
 }

 .wrapper .form .option:hover .checkmark {
     background: #f3f3f3
 }

 .wrapper .form .option .checkmark:after {
     content: "";
     width: 10px;
     height: 10px;
     display: block;
     background: linear-gradient(45deg, #ce1e53, #8f00c7);
     position: absolute;
     top: 50%;
     left: 50%;
     border-radius: 50%;
     transform: translate(-50%, -50%) scale(0);
     transition: 300ms ease-in-out 0s
 }

 .wrapper .form .option input[type="radio"]:checked~.checkmark {
     background: #fff;
     transition: 300ms ease-in-out 0s
 }

 .wrapper .form .option input[type="radio"]:checked~.checkmark:after {
     transform: translate(-50%, -50%) scale(1)
 }

 #sub {
     display: block;
     width: 100%;
     border: 1px solid #ddd;
     padding: 10px;
     border-radius: 5px;
     color: #333
 }

 #sub:focus {
     outline: none
 }

 @media(max-width: 768.5px) {
     .wrapper {
         margin: 30px
     }

     .wrapper .form .row {
         padding: 0
     }
 }

 @media(max-width: 400px) {
     .wrapper {
         padding: 25px;
         margin: 20px
     }
 }
 .h3{
     text-align: center;
 }
</style>
<div class="wrapper rounded bg-white">
    <div class="h3">Member Edit</div><hr>
        <div class="form">
            <form method="post" action="{{ url('/membereditprocess',$data->id) }}" enctype="multipart/form-data" class="form-control">
                @csrf
                <div class="row">
                    <div class="col-md-6 mt-md-0 mt-3"><label>Name</label>
                        <input type="text" name="name" placeholder="Enter Name" class="form-control" 
                            value="{{ $data->name }}" >
                    </div>
                    <div class="col-md-6 mt-md-0 mt-3"><label>Category</label> 
                        <select id="sub" name="category" >
                            <option value="{{ $data->category }}" selected hidden>{{ $data->category }}</option>
                            <option value="Professor/Advisor">Professor/Advisor</option>
                            <option value="PHD Student">PHD Student</option>
                            <option value="MS Student">MS Student</option>
                            <option value="BS Student">BS Student</option>
                            <option value="Staff">Staff</option>
                            <option value="Alumini">Alumini</option>
                        </select> 
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mt-md-0 mt-3"><label>Email</label>
                        <input type="text" name="email" placeholder="Enter Email" class="form-control"
                            value="{{ $data->email }}" >
                    </div>
                    <div class="col-md-6 mt-md-0 mt-3"><label>Phone</label>
                        <input type="text" name="phone" placeholder="Enter Phone" class="form-control" 
                            value="{{ $data->phone }}" >
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mt-md-0 mt-3"><label>Image</label> 
                        <input type="file" name="image" class="form-control" >
                        <img src="{{ asset('images/'.$data->image) }}"  style="width:100px;height:100px;" >
                    </div>
                    <div class="col-md-6 mt-md-0 mt-3"> <label>Research</label> 
                        <select id="sub" name="researchTitle" >
                            <option value="{{ $data->research }}" selected hidden>{{ $data->research }}</option>
                             @foreach ($title as $title)
                              <option value="{{ $title->title }}">{{ $title->title }}</option>
                             @endforeach
                        </select> 
                    </div>
                </div>
                <div class="row">
                    <div class="my-md-2 my-3"> <label>Address</label> 
                        <input type="text" name="address" class="form-control" value="{{ $data->address }}">
                    </div>
                </div>
                <div class="row">
                   <div class="my-md-2 my-3"><label>Educational Background</label> 
                        <textarea rows="5" cols="60" type="text" name="educationional_background">{{ $data->educationional_background }}</textarea>
                   </div>
                </div>
                <div class="row">
                   <div class="my-md-2 my-3"><label>Professional Background</label> 
                        <textarea rows="5" cols="60" type="text" name="professional_background">{{ $data->professional_background }}</textarea>
                   </div>
                </div>
                <div class="row">
                    <div class="my-md-2 my-3"><label>Description</label> 
                        <textarea rows="5" cols="60" type="text" name="description">{{ $data->description }}</textarea>
                    </div>
                </div>
                <div class="text-right">
                    <button class="btn btn-success mt-3" type="submit" name="submit">Update Member</button>
                </div>
            </form>
    </div>
</div>



@endsection
