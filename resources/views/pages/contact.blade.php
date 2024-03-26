@extends('layout.layout')
@section('content')

<style>
	.col-md-3{
		background: #ff9b00;
		padding: 4%;
		border-top-left-radius: 0.5rem;
		border-bottom-left-radius: 0.5rem;
	}
	.contact-info{
		margin-top:10%;
	}
	.contact-info img{
		margin-bottom: 15%;
	}
	.contact-info h2{
		margin-bottom: 10%;
	}
	.col-md-9{
		background: #fff;
		padding: 3%;
		border-top-right-radius: 0.5rem;
		border-bottom-right-radius: 0.5rem;
	}
	.contact-form label{
		font-weight:600;
	}
	.contact-form button{
		background: #25274d;
		color: #fff;
		font-weight: 600;
		width: 25%;
	}
	.contact-form button:focus{
		box-shadow:none;
	}
</style>
    <section class="py-5" style="background: #69ACC7;">
      <div class="container">
        <div class="row text-center">
          <div class="col-12">
            <h1 class="text-white fw-bold" style="font-size: 4rem;">CONTACT</h1>
          </div>
        </div>
      </div>
    </section>
    @if(session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
    @endif
    <section class="py-5">
      <div class="container-fluid">
        <div class="row">
          <div class="col-4">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3677.4709277337706!2d89.55290459999999!3d22.822060200000003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ff90089b8b1e03%3A0xbba517c23ae5f684!2sShib%20Bari%20More%20Cir%2C%20Khulna!5e0!3m2!1sen!2sbd!4v1664708195143!5m2!1sen!2sbd" 
                width="450" height="500" style="border:0;" 
                allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
          <div class="col-8">
            <div class="row">
                <div class="col-md-3">
                    <div class="contact-info">
        				<img src="https://image.ibb.co/kUASdV/contact-image.png" alt="image"/>
        				<h2>Contact Us</h2>
        				<h4>We would love to hear from you !</h4>
        			</div>
                </div>
                <div class="col-md-9">
                    <div class="contact-form">
        				<form class="form-control" action="/contactWithUs" method="post">
        				    @csrf
        				    <div class="form-group">
        				  <label class="control-label col-sm-2" for="name">Name:</label>
        				  <div class="col-sm-10">          
        					<input type="text" class="form-control" id="name" placeholder="Enter Name" name="name">
        				  </div>
        				</div>
        				<div class="form-group">
        				  <label class="control-label col-sm-2" for="email">Email:</label>
        				  <div class="col-sm-10">          
        					<input type="text" class="form-control" id="email" placeholder="Enter Email" name="email">
        				  </div>
        				</div>
        				<div class="form-group">
        				  <label class="control-label col-sm-2" for="phone">Phone:</label>
        				  <div class="col-sm-10">
        					<input type="text" class="form-control" id="phone" placeholder="Enter Phone" name="phone">
        				  </div>
        				</div>
        				<div class="form-group">
        				  <label class="control-label col-sm-2" for="subject">Subject:</label>
        				  <div class="col-sm-10">
        					<input type="text" class="form-control" id="subject" placeholder="Enter Subject" name="subject">
        				  </div>
        				</div>
        				<div class="form-group">
        				  <label class="control-label col-sm-2" for="message">Message:</label>
        				  <div class="col-sm-10">
        					<textarea class="form-control" rows="5" id="message" type="text" name="message"></textarea>
        				  </div>
        				</div><br>
        				<div class="form-group">        
        				  <div class="col-sm-offset-2 col-sm-10">
        					<button type="submit" class="btn btn-default" name="submit">Submit</button>
        				  </div>
        				</div>
        				</form>
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
          <p class="fs-2" style="color: #8E9CA5;">CONTACT</p>
        </div>
        <div class="row p-2">
          <div class="col-xl-6 p-2">
            <div style="border: 1px solid rgb(214, 214, 214);border-radius: .5rem; padding: 1rem;">
              <div class="row">
                <div class="col-12">
                  <h3 class="pt-4" style="color: #8E9CA5;">Address</h3>
                  <p class="py-4" style="color: #8E9CA5;">System Software Lab., Dept. of Computer Science and Engineering, POSTECH <br> <br> Room 423, PIAI, POSTECH, 77, Cheongam-ro, Nam-gu, Pohang-si, Gyeongsangbuk-do, Republic of Korea</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-6 p-2">
            <div style="border: 1px solid rgb(214, 214, 214);border-radius: .5rem; padding: 1rem;">
              <div class="row">
                <div class="col-12">
                  <h3 class="py-4" style="color: #8E9CA5;">Telephone</h3>
                  <p class="pt-4" style="color: #8E9CA5;">Tel: +82-54-279-5668</p>
                  <p class="pb-5" style="color: #8E9CA5;">Tel: +82-54-279-5668</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

@endsection