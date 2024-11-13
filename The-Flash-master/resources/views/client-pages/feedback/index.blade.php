@extends('layouts.client.client-layout')


@section('content')
 <!--Main Slider Start-->
 <div class="inner-banner-header wf100">
    <h1 data-generated="Contact">Feedback</h1>
    <div class="gt-breadcrumbs">
       <ul>
          <li> <a href="#" class="active"> <i class="fas fa-home"></i> Home </a> </li>
          <li> <a href="#"> Contact </a> </li>
       </ul>
    </div>
 </div>
 <!--Main Slider Start-->
 <!--Main Content Start-->
 <div class="main-content p80 innerpagebg wf100">
    <!--Contact Page Start-->
    <div class="contact">
       <div class="container">
          <div class="row">
             <!--Form Start-->
             <div class="col-md-6 " style="margin-left: 296px; display:block " >
                <div class="contact-form">
                   <form action="/feedback/submit" method="POST">
                     @csrf
                     <div class="h21"><h2 >Feedback</h2></div>
                     <ul class="form-row">
                        <li class="half-col">
                           <input name="email" type="text" class="form-control" placeholder="Email">
                        </li>
                        <li class="half-col">
                           <input name="subject" type="text" class="form-control" placeholder="Subject">
                        </li>

                        <li class="full-col">
                           <textarea name="content" class="form-control" placeholder="Content"></textarea>
                        </li>
                        <li class="full-col">
                           <button>Feedback now</button>
                        </li>
                   </form>
                   </ul>
                </div>
             </div>
             <!--Form End-->
             <!--Map Start-->

             <!--Map End-->
          </div>

             <!--End-->
          </div>
       </div>
    </div>
    <!--Contact Page End-->
 </div>
 <!--Main Content End-->
 @endsection
