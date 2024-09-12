@extends('web.layouts.base')

@section('content')
    <!--breadcrumbs area start-->
    <div class="breadcrumbs_area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <ul>
                            <li><a href="{{ route('home') }}">home</a></li>
                            <li>Contact Us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs area end-->


    <div class="contact_page_bg">
        <div class="container">
            <!--contact area start-->
            <div class="contact_area">
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                       <div class="contact_message content">
                            <h3>contact us</h3>
                            <ul>
                                <li><i class="fa fa-fax"></i>  Address : {{ $sharedData['web']->address1 }}</li>
                                <li><i class="fa fa-phone"></i> <a href="#">{{ $sharedData['web']->mobile1 }}</a></li>
                                <li><i class="fa fa-envelope-o"></i> <a href="#">{{ $sharedData['web']->email1 }}</a></li>
                            </ul>             
                        </div> 
                    </div>
                    <div class="col-lg-6 col-md-12">
                       <div class="contact_message form">
                            <h3>Tell us your project</h3>   
                            <form id="contact-form" method="POST"  action="https://htmldemo.net/mazlay/mazlay/assets/mail.php">
                                <p>  
                                   <label> Your Name (required)</label>
                                    <input name="name" placeholder="Name *" type="text"> 
                                </p>
                                <p>       
                                   <label>  Your Email (required)</label>
                                    <input name="email" placeholder="Email *" type="email">
                                </p>
                                <p>          
                                   <label>  Subject</label>
                                    <input name="subject" placeholder="Subject *" type="text">
                                </p>    
                                <div class="contact_textarea">
                                    <label>  Your Message</label>
                                    <textarea placeholder="Message *" name="message"  class="form-control2" ></textarea>     
                                </div>   
                                <button type="submit"> Send</button>  
                                <p class="form-messege"></p>
                            </form> 

                        </div> 
                    </div>
                </div>   
            </div>
            <!--contact area end-->
        </div>
    </div>
@endsection