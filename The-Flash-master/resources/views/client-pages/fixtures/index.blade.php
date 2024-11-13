@extends('layouts.client.client-layout')


@section('content')
<<<<<<< HEAD
<!--Main Slider Start-->
<div class="inner-banner-header wf100">
=======
  <!--Main Slider Start-->
  <div class="inner-banner-header wf100">
>>>>>>> 9c2644c03ab423f6b882e7c3b3a8bb2cf7e181f9
    <h1 data-generated="Fixtures">Fixtures</h1>
    <div class="gt-breadcrumbs">
       <ul>
          <li> <a href="#" class="active"> <i class="fas fa-home"></i> Home </a> </li>
          <li> <a href="#"> Fixtures </a> </li>
       </ul>
    </div>
<<<<<<< HEAD
 </div>
=======
<<<<<<< HEAD
 </div>
 <style>
 .match-left .mtl-left img {
        width: 73px;
        height: 50px;
    }
    .match-right .mtl-right img {
        width: 73px;
        height: 50px;
    }
</style>
>>>>>>> 9c2644c03ab423f6b882e7c3b3a8bb2cf7e181f9
 <!--Main Slider Start-->
 <!--Main Content Start-->
 <div class="main-content innerpagebg wf100">
    <!--team Page Start-->
    <div class="team wf100 p80">
       <!--Start-->
       <div class="player-squad">
          <div class="container">
             <div class="row">
<<<<<<< HEAD
=======

>>>>>>> 9c2644c03ab423f6b882e7c3b3a8bb2cf7e181f9
                <!--Fixture Start-->
                <div class="col-lg-8">
                   <!--Last Match Result Start-->
                   <div class="last-match-result-full mb-60">
<<<<<<< HEAD
                      <h6>Last Match Result</h6>
                      <div class="p30">
                         <div class="row">
                            <div class="col-sm-4">
                               <div class="match-left">
                                  <div class="mtl-left"> <img src="images/nmf-logo1.png" alt=""> <strong>North Carolina</strong> </div>
                                  <div class="mscore"> <strong>2</strong> loss </div>
                                  <ul>
                                     <li>Charlie Darren <span>(1 goal)</span></li>
                                     <li>kevin Jamie <span>(1 goal)</span></li>
                                  </ul>
                               </div>
                            </div>
                            <div class="col-sm-4">
=======

                      <h6>Last Match Result</h6>

                      <div class="p30">
                         <div class="row">


@foreach ($matches as $match)
                            <div class="col-sm-4">

                                  <?php
                            $teamAResult;
                            $teamBResult;
                            if ($match['Score'] > $match['Type']) {
                                $teamAResult = 'win';
                                $teamBResult = 'loss';
                            } elseif ($match['Score'] == $match['Type']) {
                                $teamAResult = 'tie';
                                $teamBResult = 'tie';
                            } else {
                                $teamAResult = 'loss';
                                $teamBResult = 'win';
                            }
                            ?>
                               <div class="match-left">

                                  <div class="mtl-left"> <img
                                    src="/images/{{ \App\Models\Club::find($match['TeamAID'])['Logo'] }}"
                                    alt=""> <strong>{{ \App\Models\Club::find($match['TeamAID'])['ClubName'] }}</strong> </div>
                                    <div class="mscore"> <strong>{{ $match['Score'] }}</strong>
                                        {{ $teamAResult }} </div>

                               </div>
                            </div>

                            <div class="col-sm-4">

>>>>>>> 9c2644c03ab423f6b882e7c3b3a8bb2cf7e181f9
                               <div class="lmr-info">
                                  <strong>Super Euro League</strong>
                                  <p>Indy Eleven Qualified for Semi Final</p>
                                  <img src="images/sp.png" alt="">
<<<<<<< HEAD
                                  <p>17 October, 2020</p>
                                  <p>New Expo Stadium, NYK</p>
                                  <a href="#" class="mh">Match Highlights</a>
                               </div>
                            </div>
                            <div class="col-sm-4">
                               <div class="match-right">
                                  <div class="mscore"> <strong>2</strong> loss </div>
                                  <div class="mtl-right"> <img src="images/nmf-logo2.png" alt=""> <strong>Indy Eleven</strong> </div>
                                  <ul>
                                     <li> Jon Taylor <span>(1 goal)</span></li>
                                     <li> Steven Dean <span>(1 goal)</span></li>
                                     <li> Smith Ross <span>(1 goal)</span></li>
                                  </ul>
                               </div>
                            </div>
                         </div>
                      </div>
                   </div>
=======
                                  <p>{{ $match['DateTimeEnd'] }}</p>
                                  <p>{{ $match['Stadium'] }}</p>
                                  <a href="#" class="mh">Match squad</a>
                               </div>
                            </div>


                            <div class="col-sm-4">

                               <div class="match-right">
                                <div class="mscore"> <strong> {{ $match['Type'] }}</strong>
                                    {{ $teamBResult }} </div>
                                    <div class="mtl-right"> <img
                                        src="/images/{{ \App\Models\Club::find($match['TeamBID'])['Logo'] }}"
                                        alt="">
                                    <strong>{{ \App\Models\Club::find($match['TeamBID'])['ClubName'] }}</strong>

                               </div>
                            </div>
                         </div>
                         @endforeach
                      </div>
                      </div>
                   </div>

>>>>>>> 9c2644c03ab423f6b882e7c3b3a8bb2cf7e181f9
                   <!--Last Match Result End-->
                   <!--Next Matches Schedule Start-->
                   <div class="next-matches-schedule wf100">
                      <h2 class="stitle">Next Matches Schedule</h2>
                      <!--Box Start-->
<<<<<<< HEAD
                      <div class="nms-box">
                         <div class="row">
                            <div class="col-sm-4">
                               <div class="team-logo-left"> <strong>Chirston Battery</strong> <img src="images/mlogo1.png" alt=""> </div>
=======

                      <div class="nms-box">
                         <div class="row">
                            <div class="col-sm-4">
                               <div class="team-logo-left"> <img
                                src="/images/{{ \App\Models\Club::find($match['TeamAID'])['Logo'] }}"
                                alt=""><strong>{{ \App\Models\Club::find($match['TeamAID'])['ClubName'] }}</strong>  </div>
>>>>>>> 9c2644c03ab423f6b882e7c3b3a8bb2cf7e181f9
                            </div>
                            <div class="col-sm-4">
                               <div class="nms-info">
                                  <strong class="vs">VS</strong>
                                  <p> <strong>Super Euro League</strong></p>
<<<<<<< HEAD
                                  <p>20 December, 2018   |   04:00 PM GMT+</p>
                                  {{-- <li class="match-info"> <strong>{{$match['Stadium']}}</strong> <span>{{$match['DateTimeStart']}}<em>|</em> {{$match['DateTimeEnd']}}</span> <a href="/squad">Squad </a></li> --}}
                                  <p><span>New Expo Stadium, NYK</span></p>
                                  <a href="#">Buy Your Ticket</a>
                               </div>
                            </div>
                            <div class="col-sm-4">
                               <div class="team-logo-right"><img src="images/mlogo2.png" alt=""> <strong>Charlotte</strong> </div>
=======
                                  <p>{{ $match['DateTimeEnd'] }}</p>
                                  <p>{{ $match['Stadium'] }}</p>

                               </div>
                            </div>
                            <div class="col-sm-4">
                               <div class="team-logo-right"><img src="/images/{{ \App\Models\Club::find($match['TeamBID'])['Logo'] }}" alt=""> <strong>{{ \App\Models\Club::find($match['TeamBID'])['ClubName'] }}</strong> </div>
>>>>>>> 9c2644c03ab423f6b882e7c3b3a8bb2cf7e181f9
                            </div>
                         </div>
                      </div>
                      <!--Box End-->
                      <!--Box Start-->
<<<<<<< HEAD
                      <div class="nms-box">
                         <div class="row">
                            <div class="col-sm-4">
                               <div class="team-logo-left"> <strong>FC Cincinnati</strong> <img src="images/mlogo1.png" alt=""> </div>
                            </div>
                            <div class="col-sm-4">
                               <div class="nms-info">
                                  <strong class="vs">VS</strong>
                                  <p> <strong>Super Euro League</strong></p>
                                  <p>20 December, 2018   |   04:00 PM GMT+</p>
                                  <p><span>New Expo Stadium, NYK</span></p>
                                  <a href="#">Buy Your Ticket</a>
                               </div>
                            </div>
                            <div class="col-sm-4">
                               <div class="team-logo-right"><img src="images/mlogo2.png" alt=""> <strong>Indy Eleven</strong> </div>
                            </div>
                         </div>
                      </div>
                      <!--Box End-->
                      <!--Box Start-->
                      <div class="nms-box">
                         <div class="row">
                            <div class="col-sm-4">
                               <div class="team-logo-left"> <strong>FC Champs</strong> <img src="images/mlogo1.png" alt=""> </div>
                            </div>
                            <div class="col-sm-4">
                               <div class="nms-info">
                                  <strong class="vs">VS</strong>
                                  <p> <strong>Super Euro League</strong></p>
                                  <p>20 December, 2018   |   04:00 PM GMT+</p>
                                  <p><span>New Expo Stadium, NYK</span></p>
                                  <a href="#">Buy Your Ticket</a>
                               </div>
                            </div>
                            <div class="col-sm-4">
                               <div class="team-logo-right"><img src="images/mlogo2.png" alt=""> <strong>Nashville SC</strong> </div>
                            </div>
                         </div>
                      </div>
                      <!--Box End-->
                      <!--Box Start-->
                      <div class="nms-box">
                         <div class="row">
                            <div class="col-sm-4">
                               <div class="team-logo-left"> <strong>Ottawa Fury</strong> <img src="images/mlogo1.png" alt=""> </div>
                            </div>
                            <div class="col-sm-4">
                               <div class="nms-info">
                                  <strong class="vs">VS</strong>
                                  <p> <strong>Super Euro League</strong></p>
                                  <p>20 December, 2018   |   04:00 PM GMT+</p>
                                  <p><span>New Expo Stadium, NYK</span></p>
                                  <a href="#">Buy Your Ticket</a>
                               </div>
                            </div>
                            <div class="col-sm-4">
                               <div class="team-logo-right"><img src="images/mlogo2.png" alt=""> <strong>Indy Eleven</strong> </div>
                            </div>
                         </div>
                      </div>
                      <!--Box End-->
                      <!--Box Start-->
                      <div class="nms-box">
                         <div class="row">
                            <div class="col-sm-4">
                               <div class="team-logo-left"> <strong>FC Champs</strong> <img src="images/mlogo1.png" alt=""> </div>
                            </div>
                            <div class="col-sm-4">
                               <div class="nms-info">
                                  <strong class="vs">VS</strong>
                                  <p> <strong>Super Euro League</strong></p>
                                  <p>20 December, 2018   |   04:00 PM GMT+</p>
                                  <p><span>New Expo Stadium, NYK</span></p>
                                  <a href="#">Buy Your Ticket</a>
                               </div>
                            </div>
                            <div class="col-sm-4">
                               <div class="team-logo-right"><img src="images/mlogo2.png" alt=""> <strong>Ottawa Fury</strong> </div>
                            </div>
                         </div>
                      </div>
                      <!--Box End-->
                      <!--Box Start-->
                      <div class="nms-box">
                         <div class="row">
                            <div class="col-sm-4">
                               <div class="team-logo-left"> <strong>FC Champs</strong> <img src="images/mlogo1.png" alt=""> </div>
                            </div>
                            <div class="col-sm-4">
                               <div class="nms-info">
                                  <strong class="vs">VS</strong>
                                  <p> <strong>Super Euro League</strong></p>
                                  <p>20 December, 2018   |   04:00 PM GMT+</p>
                                  <p><span>New Expo Stadium, NYK</span></p>
                                  <a href="#">Buy Your Ticket</a>
                               </div>
                            </div>
                            <div class="col-sm-4">
                               <div class="team-logo-right"><img src="images/mlogo2.png" alt=""> <strong>North Carolina</strong> </div>
                            </div>
                         </div>
                      </div>
                      <!--Box End-->
=======



                        <!--Box Start-->
                        <div class="nms-box">
                           <div class="row">
                              <div class="col-sm-4">
                                 <div class="team-logo-left"> <img
                                  src="/images/{{ \App\Models\Club::find($match['TeamAID'])['Logo'] }}"
                                  alt=""><strong>{{ \App\Models\Club::find($match['TeamAID'])['ClubName'] }}</strong>  </div>
                              </div>
                              <div class="col-sm-4">
                                 <div class="nms-info">
                                    <strong class="vs">VS</strong>
                                    <p> <strong>Super Euro League</strong></p>
                                    <p>{{ $match['DateTimeEnd'] }}</p>
                                    <p>{{ $match['Stadium'] }}</p>

                                 </div>
                              </div>
                              <div class="col-sm-4">
                                 <div class="team-logo-right"><img src="/images/{{ \App\Models\Club::find($match['TeamBID'])['Logo'] }}" alt=""> <strong>{{ \App\Models\Club::find($match['TeamBID'])['ClubName'] }}</strong> </div>
                              </div>
                           </div>
                        </div>

                        <div class="nms-box">
                            <div class="row">
                               <div class="col-sm-4">
                                  <div class="team-logo-left"> <img
                                   src="/images/{{ \App\Models\Club::find($match['TeamAID'])['Logo'] }}"
                                   alt=""><strong>{{ \App\Models\Club::find($match['TeamAID'])['ClubName'] }}</strong>  </div>
                               </div>
                               <div class="col-sm-4">
                                  <div class="nms-info">
                                     <strong class="vs">VS</strong>
                                     <p> <strong>Super Euro League</strong></p>
                                     <p>{{ $match['DateTimeEnd'] }}</p>
                                     <p>{{ $match['Stadium'] }}</p>

                                  </div>
                               </div>
                               <div class="col-sm-4">
                                  <div class="team-logo-right"><img src="/images/{{ \App\Models\Club::find($match['TeamBID'])['Logo'] }}" alt=""> <strong>{{ \App\Models\Club::find($match['TeamBID'])['ClubName'] }}</strong> </div>
                               </div>
                            </div>
                         </div>
                      <!--Box End-->

>>>>>>> 9c2644c03ab423f6b882e7c3b3a8bb2cf7e181f9
                   </div>
                   <!--Next Matches Schedule End-->
                </div>
                <!--Fixture End-->
                <!--Sidebar Start-->
                <div class="col-lg-4">
                   <div class="sidebar">
<<<<<<< HEAD
                      <!--widget start-->

                      <!--widget start-->
=======
                      <!--widget start-->
=======
    <style>
        .row img {
            width: 73px;
            height: 50px;
        }
    </style>
    <!--Main Slider Start-->
    <!--Main Content Start-->
    <div class="main-content innerpagebg wf100">
        <!--team Page Start-->
        <div class="team wf100 p80">
            <!--Start-->
            <div class="player-squad">
                <div class="container">
                    <div class="row">
                        <!--Fixture Start-->
                        <div class="col-lg-8">
                            <!--Last Match Result Start-->
                            <div class="last-match-result-full mb-60">
>>>>>>> f4252965222b7bedbd30c7bc394bd72b2ae3c8d6

                      <!--widget start-->
>>>>>>> 9c2644c03ab423f6b882e7c3b3a8bb2cf7e181f9
                      <!--widget start-->
                      <div class="widget">
                         <h4>Match Sponsors</h4>
                         <ul class="match-sponsors">
<<<<<<< HEAD
                            <li> <a href="#"><img src="images/sitelogos1.png" alt=""></a> </li>
                            <li> <a href="#"><img src="images/sitelogos2.png" alt=""></a> </li>
                            <li> <a href="#"><img src="images/sitelogos3.png" alt=""></a> </li>
                            <li> <a href="#"><img src="images/sitelogos4.png" alt=""></a> </li>
=======
                            <li> <a href="#"><img src="/images/sitelogos1.png" alt=""></a> </li>
                            <li> <a href="#"><img src="/images/sitelogos2.png" alt=""></a> </li>
                            <li> <a href="#"><img src="/images/sitelogos3.png" alt=""></a> </li>
                            <li> <a href="#"><img src="/images/sitelogos4.png" alt=""></a> </li>
>>>>>>> 9c2644c03ab423f6b882e7c3b3a8bb2cf7e181f9
                         </ul>
                      </div>
                      <!--widget start-->
                      <!--widget start-->
<<<<<<< HEAD
                      <div class="widget">
                         <h4>Team Player</h4>
                         <div class="team-squad-box">
                            <span class="star-tag"><i class="fas fa-star"></i></span> <a href="#" class="follow">Follow</a>
                            <div class="ts-cap">
                               <h4>Ramsy Geordion</h4>
                               <p>League Captain</p>
                               <ul>
                                  <li>29 <span>Age</span></li>
                                  <li>87 <span>matches</span></li>
                                  <li>113 <span>Goals</span></li>
                                  <li>87 <span>matches</span></li>
                               </ul>
                            </div>
                            <img src="images/tplayer5.jpg" alt="">
                         </div>
                      </div>
                      <!--widget start-->
                      <!--widget start-->
                      <div class="widget">
                         <h4>Featured Videos</h4>
                         <div class="featured-video-widget">
                            <div class="fvideo-box mb15">
                               <div class="fvid-cap">
                                  <a class="vicon" href="#"><img src="images/play.png" alt=""></a>
                                  <div class="fvid-right">
                                     <h5><a href="#">Success is a Result of Hard Work </a></h5>
                                     <span><i class="far fa-clock"></i> 4:32</span> <span><i class="far fa-eye"></i> 174</span>
                                  </div>
                               </div>
                               <img src="images/fvid1.jpg" alt="">
                            </div>
                            <div class="fvideo-box">
=======
                      <div class="highlights-gallery gallery">
                        <h2>Highlights & Gallery</h2>
                        <div class="container-fluid">
                          <div class="row">
                            <div class="col-md-8 p-05">
                              <div class="hlg-thumb">
                                <img src="/images/hlgall1.jpg" alt="">
                                <p><a href="/images/hlgall1.jpg" data-rel="prettyPhoto[gallery1]"><i class="far fa-image"></i> Goals are like Storm</a></p>
                              </div>
                            </div>
                            <div class="col-md-4 p-05">
                              <div class="hlg-thumb">
                                <img src="/images/hlgall2.jpg" alt="">
                                <p><a href="https://vimeo.com/17242531" data-rel="prettyPhoto[gallery1]"><i class="fas fa-play-circle"></i> Goals are like Storm</a></p>
                              </div>
                               <div class="hlg-thumb">
                                <img src="/images/hlgall6.jpg" alt="">
                                <p><a href="https://vimeo.com/17242531" data-rel="prettyPhoto[gallery1]"><i class="fas fa-play-circle"></i> Goals are like Storm</a></p>
                              </div>
                            </div>
                            <div class="col-md-4 p-05">
                              <div class="hlg-thumb">
                                <img src="/images/hlgall3.jpg" alt="">
                                <p><a href="images/hlgall3.jpg" data-rel="prettyPhoto[gallery1]"><i class="far fa-image"></i> Goals are like Storm</a></p>
                              </div>
                            </div>
                             <div class="col-md-4 p-05">
                              <div class="hlg-thumb">
                                <img src="/images/hlgall4.jpg" alt="">
                                <p><a href="https://vimeo.com/17242531" data-rel="prettyPhoto[gallery1]"><i class="fas fa-play-circle"></i> Goals are like Storm</a></p>
                              </div>
                            </div>
                            <div class="col-md-4 p-05">
                              <div class="hlg-thumb">
                                <img src="/images/hlgall5.jpg" alt="">
                                <p><a href="/images/hlgall5.jpg" data-rel="prettyPhoto[gallery1]"><i class="far fa-image"></i> Goals are like Storm</a></p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!--widget start-->
                      <!--widget start-->
                      <div class="widget">
                         <h4>Featured Videos</h4>
                         <div class="featured-video-widget">
                            <div class="fvideo-box mb15">
>>>>>>> 9c2644c03ab423f6b882e7c3b3a8bb2cf7e181f9
                               <div class="fvid-cap">
                                  <a class="vicon" href="#"><img src="images/play.png" alt=""></a>
                                  <div class="fvid-right">
                                     <h5><a href="#">Success is a Result of Hard Work </a></h5>
                                     <span><i class="far fa-clock"></i> 4:32</span> <span><i class="far fa-eye"></i> 174</span>
                                  </div>
                               </div>
<<<<<<< HEAD
                               <img src="images/fvid2.jpg" alt="">
                            </div>
=======
                               <img src="/images/fvid1.jpg" alt="">
                            </div>
                            <div class="fvideo-box">
                               <div class="fvid-cap">
                                  <a class="vicon" href="#"><img src="/images/play.png" alt=""></a>
                                  <div class="fvid-right">
                                     <h5><a href="#">Success is a Result of Hard Work </a></h5>
                                     <span><i class="far fa-clock"></i> 4:32</span> <span><i class="far fa-eye"></i> 174</span>
                                  </div>
                               </div>
                               <img src="images/fvid2.jpg" alt="">
                            </div>
>>>>>>> 9c2644c03ab423f6b882e7c3b3a8bb2cf7e181f9
                         </div>
                      </div>
                      <!--widget end-->
                      <!--widget Start-->
                      <div class="widget">
                         <h4>Be Social</h4>
                         <ul class="social-media">
                            <li>
                               <div class="social fb"> <i class="fab fa-facebook-f"></i> <strong> 25,345</strong> <span>Likes</span> </div>
                            </li>
                            <li>
                               <div class="social tw"> <i class="fab fa-twitter"></i> <strong> 5,345 </strong> <span>Followers</span> </div>
                            </li>
                            <li>
                               <div class="social yt"> <i class="fab fa-youtube"></i> <strong> 31,072 </strong> <span>Subscribers</span> </div>
                            </li>
                            <li>
                               <div class="social gp"> <i class="fab fa-google-plus-g"></i> <strong>3,345 </strong> <span>Plus</span> </div>
                            </li>
                            <li>
                               <div class="social insta"> <i class="fab fa-instagram"></i> <strong> 25,345 </strong> <span>Followers</span> </div>
                            </li>
                            <li>
                               <div class="social rss"> <i class="fas fa-rss"></i> <strong> 24,793 </strong> <span>Likes</span> </div>
                            </li>
                         </ul>
                      </div>
                      <!--widget End-->
                   </div>
                </div>
                <!--Sidebar End-->
             </div>
          </div>
       </div>
       <!--End-->
    </div>
<<<<<<< HEAD
    <!--team Page End-->
 </div>
 <!--Main Content End-->
 @endsection
=======
    </div>
    <!--team Page End-->
 </div>
 <!--Main Content End-->
@endsection
>>>>>>> 9c2644c03ab423f6b882e7c3b3a8bb2cf7e181f9
