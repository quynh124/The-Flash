@extends('layouts.client.client-layout')


@section('content')
<!--Main Slider Start-->
<div class="inner-banner-header wf100">
    <h1 data-generated="Contact Us">Contact Us</h1>
    <div class="gt-breadcrumbs">
       <ul>
          <li> <a href="#" class="active"> <i class="fas fa-home"></i> Home </a> </li>
          <li> <a href="#"> Contact Us </a> </li>
       </ul>
    </div>
 </div>
 <!--Main Slider Start-->
 <!--Main Content Start-->
 <div class="main-content p80 innerpagebg wf100">
    <!--Contact Page Start-->
    <div class="contact-two">
       <div class="container">
          <div class="row mb-80">
             <!--Start-->
             <div class="col-md-4">
                <div class="contact-box">
                   <img src="images/loc-icon.png" alt="">
                   <h5>Address:</h5>
                   <p> 1 D. Ly Tu Trong, An Phu, Ninh Kieu, Can Tho
                   </p>
                </div>
             </div>
             <!--End-->
             <!--Start-->
             <div class="col-md-4">
                <div class="contact-box" style="padding-bottom: 75px">
                   <img src="images/phone-icon.png" alt="">
                   <h5>Contact:</h5>
                   <p><strong>Phone:</strong>  0292 3731 072</p>

                </div>
             </div>
             <!--End-->
             <!--Start-->
             <div class="col-md-4">
                <div class="contact-box">
                   <img src="images/mail-icon.png" alt="">
                   <h5>For More Information:</h5>
                   <p> <strong>Email:</strong>nnbthia22082@cusc.ctu.edu.vn</p>
                   <p>contact@soccerverse.com</p>
                </div>
             </div>
             <!--End-->
          </div>
       </div>
    </div>
    <!--Contact Page End-->
    <div class="google-map">
        <div class="google-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3928.7965155840207!2d105.77957149999999!3d10.033643699999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31a0881f9a732075%3A0xfa43fbeb2b00ca73!2sCUSC%20-%20Cantho%20University%20Software%20Center!5e0!3m2!1svi!2s!4v1691820584439!5m2!1svi!2s" "></iframe></iframe>
         </div>

    </div>
    <div class="contact-two wf100 p80-0">
       <div class="container">
          <div class="row">
             <div class="col-lg-1"></div>
             <!--Form Start-->
             <div class="col-lg-10">
                <div class="contact-form">
                   <form action="/contact/submit" method="POST">
                     @csrf
                     <h2> Contact us</h2>
                     <ul class="form-row">

                        <li class="half-col">
                           <input name="email" type="text" class="form-control" placeholder="Email">
                        </li>
                        <li class="half-col">
                           <input name="phone" type="text" class="form-control" placeholder="Phone">
                        </li>

                        <li class="half-col">
                           <input name="subject" type="text" class="form-control1" placeholder="Subject" >
                        </li>
                        <li class="full-col">
                           <textarea name="content" class="form-control" placeholder="Content"></textarea>
                        </li>
                        <li class="full-col">
                           <button>Contact us Now</button>
                        </li>
                     </ul>
                   </form>
                </div>
             </div>
             <!--Form End-->
          </div>
       </div>
    </div>
 </div>
 <!--Main Content End-->
 @endsection
