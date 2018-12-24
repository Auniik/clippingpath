@extends('layouts.front_layout')
@section('title', 'Contact')
@section('content')

    <div class="main-body">
        <div class="contact-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="we-are">
                            <span class="left-shadow"></span>
                            <h3 class="we-are-head">Contact Us</h3>
                            <span class="right-shadow"></span>
                        </div>
                        <div class="c-contact">
                            <div class="row">
                                <div class="col-md-6 form-area">

                                    <h3>Send us a mail</h3>
                                    <form action="{{route('message.send')}}" method="post">
                                        @csrf
                                        <ul class="contact-form">
                                            <li class="name">
                                                <span></span>
                                                <input type="text" @if($errors->has('name')) class="invalid-block"  @endif name="name" placeholder="Your Name" />
                                                @if($errors->has('name'))  <p class="text-danger">{{$errors->first('name')}}</p>  @endif
                                            </li>
                                            <li class="email">
                                                <span></span>
                                                <input type="email" @if($errors->has('email')) class="invalid-block"  @endif name="email" placeholder="Your E-mail" />
                                                @if($errors->has('name'))  <p class="text-danger">{{$errors->first('email')}}</p>  @endif
                                            </li>
                                            <li class="phone">
                                                <span><i class="fa fa-phone" aria-hidden="true"></i></span>
                                                <input type="text" @if($errors->has('phone')) class="invalid-block"  @endif name="phone" placeholder="Your Phone" />
                                                @if($errors->has('name'))  <p class="text-danger">{{$errors->first('phone')}}</p>  @endif
                                            </li>
                                            <li class="country">
                                                <span><i class="fa fa-globe" aria-hidden="true"></i></span>
                                                <input type="text" @if($errors->has('country')) class="invalid-block"  @endif name="country" placeholder="Your Country" />
                                                @if($errors->has('name'))  <p class="text-danger">{{$errors->first('country')}}</p>  @endif
                                            </li>
                                            <li class="subject">
                                                <span></span>
                                                <input type="text" @if($errors->has('subject')) class="invalid-block"  @endif name="subject" placeholder="Subject" />
                                                @if($errors->has('name'))  <p class="text-danger">{{$errors->first('subject')}}</p>  @endif
                                            </li>
                                            <li class="text-area">
                                                <span></span>
                                                <textarea name="message" @if($errors->has('message')) class="invalid-block"  @endif placeholder="Your message........."></textarea>
                                                @if($errors->has('name'))  <p class="text-danger">{{$errors->first('message')}}</p>  @endif
                                            </li>
                                            <li class="send-button">
                                                <input type="submit" value="Send" />
                                            </li>
                                        </ul>
                                    </form>
                                </div>
                                <div class="col-md-6 address-area">
                                    <h3>Office Locations</h3>
                                    <ul class="location-list row">
                                        <li class="col-md-2">
                                            <p class="location-name">{{$contactInfo==null ? 'Location name here.' : $contactInfo->location_one}}</p>
                                            <p>{{$contactInfo==null ? 'Address here' : $contactInfo->address_one}}</p>
                                        </li>
                                        <li class="col-md-2">
                                            <p class="location-name">{{$contactInfo==null ? 'Location 2 name here.' : $contactInfo->location_two}}</p>
                                            <p>{{$contactInfo==null ? 'Address here' : $contactInfo->address_two}}</p>
                                        </li>
                                        <li class="col-md-2">
                                            <p class="location-name">{{$contactInfo==null ? 'Location 3 name here.' : $contactInfo->location_three}}</p>
                                            <p>{{$contactInfo==null ? 'Address here' : $contactInfo->address_three}}</p>
                                        </li>
                                    </ul>
                                    <ul class="contact-list">
                                        <li class="mobile-number">
                                            <p><a href="callto:{{$config->website_phone}}">{{$config->website_phone}}</a></p>
                                        </li>
                                        <li class="email-address">
                                            <a href="mailto:{{$config->website_email}}">{{$config->website_email}}</a>
                                        </li>
                                    </ul>
                                    <div class="map">
                                        <iframe width="420" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src=" {{$contactInfo==null ? 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d27804084.12672812!2d120.26698394364534!3d31.714440679464374!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x34674e0fd77f192f%3A0xf54275d47c665244!2z4Kac4Ka-4Kaq4Ka-4Kao!5e0!3m2!1sbn!2sbd!4v1545118969451' : $contactInfo->google_maps}}"></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection