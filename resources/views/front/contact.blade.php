@extends('layouts.front.app')
@section('meta')
    <title>Contact | Bryan Venancio | Professional Wedding Photographer | Manila Philippines</title>
@endsection
@section('content')
	<section class="contact-area full_pad nav-space pt-0">
        <div class="contact-area-bg container-fluid">
            <div class="container pb-4">
		            
                <div class="row">
                    <div class="col-xl-12">
                    	<div class="sec-title">
			                <h2>We Look Forward To You</h2>
			                {{-- <p>Zabriceni, rn.Edinet, R.Moldova</p> --}}
			            </div>
                    </div>
                    <div class="col-md-5">
                        <div class="contact-img">
                            <ul class="list-group ">
                                <li class="list-group-item bg-transparent border-0">
                                    <h3>Connect with me</h3>
                                </li>
                                <li class="list-group-item bg-transparent border-0">
                                    <a href="mailto: Bryanvenancio@gmail.com" class="text-dark">
                                        <i class="fa fa-envelope pr-2"></i>
                                        Bryanvenancio@gmail.com
                                    </a>
                                </li>
                                <li class="list-group-item bg-transparent border-0">
                                    <a href="tel: 0917 625 8136" class="text-dark">
                                        <i class="fa fa-phone-alt pr-2"></i>
                                        0917 625 8136
                                    </a>
                                </li>
                            </ul>
                                    
                                    
                            {{-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d247138.77446589552!2d120.88055913428722!3d14.56808671650532!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397c8d26026386d%3A0x5fed23daac9278d0!2sMetro%20Manila!5e0!3m2!1sen!2sph!4v1610245186471!5m2!1sen!2sph" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0" class="contact-slider"></iframe> --}}
                            {{-- <div class="contact-slider owl-carousel">
                                <div class="item">
                                    <img src="{{ asset('images/blog-details/contact-slider.jpg') }}" alt="">
                                </div>
                                <div class="item">
                                    <img src="{{ asset('images/blog-details/contact-slider.jpg') }}" alt="">
                                </div>
                                <div class="item">
                                    <img src="{{ asset('images/blog-details/contact-slider.jpg') }}" alt="">
                                </div>
                            </div> --}}
                        </div>
                    </div>
                    <div class="col-md-7">
                        <form class="form_inner contact_form row m0 " action="{{ url('contact_comment') }}" method="POST">
                        	@csrf
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" placeholder="Name" required>
                            </div>
                            <div class="form-group col-md-6">
                                <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required placeholder="Email">
                            </div>
                            <div class="form-group col-md-12">
                                <textarea class="form-control" id="message" name="comment" placeholder="Your comment" rows="1" required>{{ old('comment') }}</textarea>
                            </div>
                            <div class="form-btn col-md-12">
                                <button type="submit" value="submit" class="btn submit_btn">SEND EMAIL</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @include('front.include.sidelink')        
    </section>
@stop