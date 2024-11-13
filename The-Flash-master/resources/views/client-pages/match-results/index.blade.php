@extends('layouts.client.client-layout')


@section('content')
 <!--Main Slider Start-->
 <div class="inner-banner-header wf100">
    <h1 data-generated="Match Result">Match Result</h1>
    <div class="gt-breadcrumbs">
       <ul>
          <li> <a href="#" class="active"> <i class="fas fa-home"></i> Home </a> </li>
          <li> <a href="#"> Match Result </a> </li>
       </ul>
    </div>
 </div>
 <!--Main Slider Start-->
 <!--Main Content Start-->
 <div class="main-content innerpagebg wf100">

    <!--Match Result Start-->
    <div class="match-results wf100 p80">
       <div class="container">
          <div class="row">
             <div class="col-lg-8">
                <div class="match-results-list wf100">
                   <!--title start-->
                   <div class="nms-title">
                     <a href="/match-results-details" ><h4>24 May, 2020 | <span>Super Euro League</span></h4></a>
                   </div>
                   <!--title end-->

                  <style>
                      .last-match img{
                          width: 72px;
                          height: 50px;
                      }
                      </style>

                   @foreach ($matchList as $match)
                    <ul class="last-match">
                        <?php
                        $teamAResult;
                        $teamBResult;
                            if ($match['Score'] > $match['Type']) {
                                $teamAResult = "win";
                                $teamBResult = "loss";
                            } else if ($match['Score'] == $match['Type']) {

                                $teamAResult = "tie";
                                $teamBResult = "tie";

                                $teamAResult = "draw";
                                $teamBResult = "draw";

                            } else {
                                $teamAResult = "loss";
                                $teamBResult = "win";
                            }
                        ?>
                            <li class="team-name"> <img src="images/{{ \App\Models\Club::find($match['TeamAID'])['Logo'] }}" alt=""> <strong>{{ \App\Models\Club::find($match['TeamAID'])['ClubName'] }}</strong> </li>
                            <li class="mscore"> <span>{{ $match['Score'] }}</span> {{$teamAResult}} </li>
                            <li class="match-info"> <strong>{{$match['Stadium']}}</strong> <span>{{$match['DateTimeStart']}}<em>|</em> {{$match['DateTimeEnd']}}</span> <a href="/squad">Squad </a></li>
                            <li class="mscore"> <span>{{$match['TeamBID']}}</span> {{$teamBResult}} </li>
                            <li class="team-name"> <img src="images/{{ \App\Models\Club::find($match['TeamBID'])['Logo'] }}" alt=""> <strong>{{ \App\Models\Club::find($match['TeamBID'])['ClubName'] }}</strong> </li>
                        </ul>
                   @endforeach

                   <!--box start-->
                   @foreach ($matchList as $match)
                    <ul class="last-match">
                        <?php
                        $teamAResult;
                        $teamBResult;
                            if ($match['Score'] > $match['Type']) {
                                $teamAResult = "win";
                                $teamBResult = "loss";
                            } else if ($match['Score'] == $match['Type']) {
                                $teamAResult = "draw";
                                $teamBResult = "draw";
                            } else {
                                $teamAResult = "loss";
                                $teamBResult = "win";
                            }
                        ?>
                            <li class="team-name"> <img src="images/{{ \App\Models\Club::find($match['TeamAID'])['Logo'] }}" alt=""> <strong>{{ \App\Models\Club::find($match['TeamAID'])['ClubName'] }}</strong> </li>
                            <li class="mscore"> <span>{{ $match['Score'] }}</span> {{$teamAResult}} </li>
                            <li class="match-info"> <strong>{{$match['Stadium']}}</strong> <span>{{$match['DateTimeStart']}}<em>|</em> {{$match['DateTimeEnd']}}</span> <a href="/squad">Squad </a></li>
                            <li class="mscore"> <span>{{$match['TeamBID']}}</span> {{$teamBResult}} </li>
                            <li class="team-name"> <img src="images/{{ \App\Models\Club::find($match['TeamBID'])['Logo'] }}" alt=""> <strong>{{ \App\Models\Club::find($match['TeamBID'])['ClubName'] }}</strong> </li>
                        </ul>
                   @endforeach
                   <!--box end-->
                   <!--box start-->
                   <@foreach ($matchList as $match)
                   <ul class="last-match">
                       <?php
                       $teamAResult;
                       $teamBResult;
                           if ($match['Score'] > $match['Type']) {
                               $teamAResult = "win";
                               $teamBResult = "loss";
                           } else if ($match['Score'] == $match['Type']) {
                               $teamAResult = "draw";
                               $teamBResult = "draw";
                           } else {
                               $teamAResult = "loss";
                               $teamBResult = "win";
                           }
                       ?>
                           <li class="team-name"> <img src="images/{{ \App\Models\Club::find($match['TeamAID'])['Logo'] }}" alt=""> <strong>{{ \App\Models\Club::find($match['TeamAID'])['ClubName'] }}</strong> </li>
                           <li class="mscore"> <span>{{ $match['Score'] }}</span> {{$teamAResult}} </li>
                           <li class="match-info"> <strong>{{$match['Stadium']}}</strong> <span>{{$match['DateTimeStart']}}<em>|</em> {{$match['DateTimeEnd']}}</span> <a href="/squad">Squad </a></li>
                           <li class="mscore"> <span>{{$match['TeamBID']}}</span> {{$teamBResult}} </li>
                           <li class="team-name"> <img src="images/{{ \App\Models\Club::find($match['TeamBID'])['Logo'] }}" alt=""> <strong>{{ \App\Models\Club::find($match['TeamBID'])['ClubName'] }}</strong> </li>
                       </ul>
                  @endforeach
                   <!--box end-->
                   <!--box start-->
                   @foreach ($matchList as $match)
                    <ul class="last-match">
                        <?php
                        $teamAResult;
                        $teamBResult;
                            if ($match['Score'] > $match['Type']) {
                                $teamAResult = "win";
                                $teamBResult = "loss";
                            } else if ($match['Score'] == $match['Type']) {
                                $teamAResult = "draw";
                                $teamBResult = "draw";
                            } else {
                                $teamAResult = "loss";
                                $teamBResult = "win";
                            }
                        ?>
                            <li class="team-name"> <img src="images/{{ \App\Models\Club::find($match['TeamAID'])['Logo'] }}" alt=""> <strong>{{ \App\Models\Club::find($match['TeamAID'])['ClubName'] }}</strong> </li>
                            <li class="mscore"> <span>{{ $match['Score'] }}</span> {{$teamAResult}} </li>
                            <li class="match-info"> <strong>{{$match['Stadium']}}</strong> <span>{{$match['DateTimeStart']}}<em>|</em> {{$match['DateTimeEnd']}}</span> <a href="/squad">Squad </a></li>
                            <li class="mscore"> <span>{{$match['TeamBID']}}</span> {{$teamBResult}} </li>
                            <li class="team-name"> <img src="images/{{ \App\Models\Club::find($match['TeamBID'])['Logo'] }}" alt=""> <strong>{{ \App\Models\Club::find($match['TeamBID'])['ClubName'] }}</strong> </li>
                        </ul>
                   @endforeach
                   <!--box end-->
                </div>
                <div class="match-results-list wf100">
                   <!--title start-->
                   <div class="nms-title">
                      <h4>17 June, 2020 | <span>Super Euro League</span></h4>
                   </div>
                   <!--title end-->
                   <!--box start-->
                   @foreach ($matchList as $match)
                    <ul class="last-match">
                        <?php
                        $teamAResult;
                        $teamBResult;
                            if ($match['Score'] > $match['Type']) {
                                $teamAResult = "win";
                                $teamBResult = "loss";
                            } else if ($match['Score'] == $match['Type']) {
                                $teamAResult = "draw";
                                $teamBResult = "draw";
                            } else {
                                $teamAResult = "loss";
                                $teamBResult = "win";
                            }
                        ?>
                            <li class="team-name"> <img src="images/{{ \App\Models\Club::find($match['TeamAID'])['Logo'] }}" alt=""> <strong>{{ \App\Models\Club::find($match['TeamAID'])['ClubName'] }}</strong> </li>
                            <li class="mscore"> <span>{{ $match['Score'] }}</span> {{$teamAResult}} </li>
                            <li class="match-info"> <strong>{{$match['Stadium']}}</strong> <span>{{$match['DateTimeStart']}}<em>|</em> {{$match['DateTimeEnd']}}</span> <a href="/squad">Squad </a></li>
                            <li class="mscore"> <span>{{$match['TeamBID']}}</span> {{$teamBResult}} </li>
                            <li class="team-name"> <img src="images/{{ \App\Models\Club::find($match['TeamBID'])['Logo'] }}" alt=""> <strong>{{ \App\Models\Club::find($match['TeamBID'])['ClubName'] }}</strong> </li>
                        </ul>
                   @endforeach
                   <!--box end-->
                   <!--box start-->
                   @foreach ($matchList as $match)
                    <ul class="last-match">
                        <?php
                        $teamAResult;
                        $teamBResult;
                            if ($match['Score'] > $match['Type']) {
                                $teamAResult = "win";
                                $teamBResult = "loss";
                            } else if ($match['Score'] == $match['Type']) {
                                $teamAResult = "draw";
                                $teamBResult = "draw";
                            } else {
                                $teamAResult = "loss";
                                $teamBResult = "win";
                            }
                        ?>
                            <li class="team-name"> <img src="images/{{ \App\Models\Club::find($match['TeamAID'])['Logo'] }}" alt=""> <strong>{{ \App\Models\Club::find($match['TeamAID'])['ClubName'] }}</strong> </li>
                            <li class="mscore"> <span>{{ $match['Score'] }}</span> {{$teamAResult}} </li>
                            <li class="match-info"> <strong>{{$match['Stadium']}}</strong> <span>{{$match['DateTimeStart']}}<em>|</em> {{$match['DateTimeEnd']}}</span> <a href="/squad">Squad </a></li>
                            <li class="mscore"> <span>{{$match['TeamBID']}}</span> {{$teamBResult}} </li>
                            <li class="team-name"> <img src="images/{{ \App\Models\Club::find($match['TeamBID'])['Logo'] }}" alt=""> <strong>{{ \App\Models\Club::find($match['TeamBID'])['ClubName'] }}</strong> </li>
                        </ul>
                   @endforeach
                   <!--box end-->
                </div>
                <div class="match-results-list wf100">
                   <!--title start-->
                   <div class="nms-title"><h4> 09 July, 2020 | <span>Super Euro League</span></h4>
                   </div>
                   <!--title end-->
                   <!--box start-->
                   @foreach ($matchList as $match)
                    <ul class="last-match">
                        <?php
                        $teamAResult;
                        $teamBResult;
                            if ($match['Score'] > $match['Type']) {
                                $teamAResult = "win";
                                $teamBResult = "loss";
                            } else if ($match['Score'] == $match['Type']) {
                                $teamAResult = "draw";
                                $teamBResult = "draw";
                            } else {
                                $teamAResult = "loss";
                                $teamBResult = "win";
                            }
                        ?>
                            <li class="team-name"> <img src="images/{{ \App\Models\Club::find($match['TeamAID'])['Logo'] }}" alt=""> <strong>{{ \App\Models\Club::find($match['TeamAID'])['ClubName'] }}</strong> </li>
                            <li class="mscore"> <span>{{ $match['Score'] }}</span> {{$teamAResult}} </li>
                            <li class="match-info"> <strong>{{$match['Stadium']}}</strong> <span>{{$match['DateTimeStart']}}<em>|</em> {{$match['DateTimeEnd']}}</span> <a href="/squad">Squad </a></li>
                            <li class="mscore"> <span>{{$match['TeamBID']}}</span> {{$teamBResult}} </li>
                            <li class="team-name"> <img src="images/{{ \App\Models\Club::find($match['TeamBID'])['Logo'] }}" alt=""> <strong>{{ \App\Models\Club::find($match['TeamBID'])['ClubName'] }}</strong> </li>
                        </ul>
                   @endforeach
                   <!--box end-->
                   <!--box start-->
                   @foreach ($matchList as $match)
                    <ul class="last-match">
                        <?php
                        $teamAResult;
                        $teamBResult;
                            if ($match['Score'] > $match['Type']) {
                                $teamAResult = "win";
                                $teamBResult = "loss";
                            } else if ($match['Score'] == $match['Type']) {

                                $teamAResult = "tie";
                                $teamBResult = "tie";

                                $teamAResult = "draw";
                                $teamBResult = "draw";

                            } else {
                                $teamAResult = "loss";
                                $teamBResult = "win";
                            }
                        ?>

                            <li class="team-name"> <img src="/images/{{ \App\Models\Club::find($match['TeamAID'])['Logo'] }}" alt=""> <strong>{{ \App\Models\Club::find($match['TeamAID'])['ClubName'] }}</strong> </li>
                            <li class="mscore"> <span>{{ $match['Score'] }}</span> {{$teamAResult}} </li><li class="match-info"> <strong>{{$match['Stadium']}}</strong> <span>{{$match['DateTimeStart']}}<em>|</em> {{$match['DateTimeEnd']}}</span> <a href="/squad">Squad </a></li>
                            <li class="mscore"> <span>{{$match['Type']}}</span> {{$teamBResult}} </li>
                            <li class="team-name"> <img src="/images/{{ \App\Models\Club::find($match['TeamBID'])['Logo'] }}" alt=""> <strong>{{ \App\Models\Club::find($match['TeamBID'])['ClubName'] }}</strong> </li>

                            <li class="team-name"> <img src="images/{{ \App\Models\Club::find($match['TeamAID'])['Logo'] }}" alt=""> <strong>{{ \App\Models\Club::find($match['TeamAID'])['ClubName'] }}</strong> </li>
                            <li class="mscore"> <span>{{ $match['Score'] }}</span> {{$teamAResult}} </li>
                            <li class="match-info"> <strong>{{$match['Stadium']}}</strong> <span>{{$match['DateTimeStart']}}<em>|</em> {{$match['DateTimeEnd']}}</span> <a href="/squad">Squad </a></li>
                            <li class="mscore"> <span>{{$match['TeamBID']}}</span> {{$teamBResult}} </li>
                            <li class="team-name"> <img src="images/{{ \App\Models\Club::find($match['TeamBID'])['Logo'] }}" alt=""> <strong>{{ \App\Models\Club::find($match['TeamBID'])['ClubName'] }}</strong> </li>

                        </ul>
                   @endforeach
                   <!--box end-->
                </div>
             </div>
             <div class="col-lg-4">
                <div class="sidebar">
                   <!--widget start-->

                   <div class="widget sidebar-ad"> <img src="/images/sideadbanner1.png" alt=""> </div>

                   <div class="widget sidebar-ad"> <img src="images/sideadbanner1.jpg" alt=""> </div>

                   <!--widget end-->
                   <!--widget start-->
                   <div class="widget">
                      <h4>Featured Videos</h4>
                      <div class="featured-video-widget">
                         <div class="fvideo-box mb15">
                            <div class="fvid-cap">
                               <a class="vicon" href="#"><img src="/images/play.png" alt=""></a>
                               <div class="fvid-right">
                                  <h5><a href="#">Success is a Result of Hard Work </a></h5>
                                  <span><i class="far fa-clock"></i> 4:32</span> <span><i class="far fa-eye"></i> 174</span>
                               </div>
                            </div>
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
                            <img src="/images/fvid2.jpg" alt="">
                         </div>
                      </div>
                   </div>
                   <!--widget end-->
                   <!--widget start-->
                   <div class="widget">
                    <h4>Top Stories</h4>
                    <div class="top-stories-widget">
                      <div id="top-stories" class="owl-carousel owl-theme">
                        <!--Slide 1 Start-->
                        <div class="item">
                          <ul class="top-stories">
                            <!--Story Start-->
                            <li class="story-row"><div class="ts-thumb"><img src="images/tsimg1.jpg" alt=""> </div>
                              <div class="ts-txt">
                                <h5> <a href="#">Success is not Accident it’s a Result of Hard Work </a>
                                </h5>
                                <ul class="tsw-meta">
                                  <li><a href="#">NFL League</a></li>
                                  <li>12 Mar, 2020</li>
                                </ul>
                              </div>
                            </li>
                            <!--Story End-->
                            <!--Story Start-->
                            <li class="story-row">
                              <div class="ts-thumb"><img src="images/tsimg1.jpg" alt=""> </div>
                              <div class="ts-txt">
                                <h5> <a href="#">Toon stage injury-time come back at Everton </a>
                                </h5>
                                <ul class="tsw-meta">
                                  <li><a href="#">NFL League</a></li>
                                  <li>12 Mar, 2020</li>
                                </ul>
                              </div>
                            </li>
                            <!--Story End-->
                            <!--Story Start-->
                            <li class="story-row">
                              <div class="ts-thumb"><img src="images/tsimg1.jpg" alt=""> </div>
                              <div class="ts-txt">
                                <h5> <a href="#">League continues support for Rainbow Laces </a>
                                </h5>
                                <ul class="tsw-meta">
                                  <li><a href="#">NFL League</a></li>
                                  <li>12 Mar, 2020</li>
                                </ul>
                              </div>
                            </li>
                            <!--Story End-->
                            <!--Story Start-->
                            <li class="story-row">
                              <div class="ts-thumb"><img src="images/tsimg1.jpg" alt=""> </div>
                              <div class="ts-txt">
                                <h5> <a href="#">Tigers would’ve ‘loved’ to play for Tigers </a>
                                </h5>
                                <ul class="tsw-meta">
                                  <li><a href="#">NFL League</a></li>
                                  <li>12 Mar, 2020</li>
                                </ul>
                              </div>
                            </li>
                            <!--Story End-->
                          </ul>
                        </div>
                        <!--Slide 1 End-->
                        <!--Slide 2 Start-->
                        <div class="item">
                          <ul class="top-stories"><!--Story Start-->
                            <li class="story-row">
                              <div class="ts-thumb"><img src="images/tsimg1.jpg" alt=""> </div>
                              <div class="ts-txt">
                                <h5> <a href="#">FC Champs will learn from Tigers mistake </a>
                                </h5>
                                <ul class="tsw-meta">
                                  <li><a href="#">NFL League</a></li>
                                  <li>12 Mar, 2020</li>
                                </ul>
                              </div>
                            </li>
                            <!--Story End-->
                            <!--Story Start-->
                            <li class="story-row">
                              <div class="ts-thumb"><img src="images/tsimg1.jpg" alt=""> </div>
                              <div class="ts-txt">
                                <h5> <a href="#">Toon stage injury-time come back at Everton </a>
                                </h5>
                                <ul class="tsw-meta">
                                  <li><a href="#">NFL League</a></li>
                                  <li>12 Mar, 2020</li>
                                </ul>
                              </div>
                            </li>
                            <!--Story End-->
                            <!--Story Start-->
                            <li class="story-row">
                              <div class="ts-thumb"><img src="images/tsimg1.jpg" alt=""> </div>
                              <div class="ts-txt">
                                <h5> <a href="#">Tigers would’ve ‘loved’ to play for Tigers </a>
                                </h5>
                                <ul class="tsw-meta">
                                  <li><a href="#">NFL League</a></li>
                                  <li>12 Mar, 2020</li>
                                </ul>
                              </div>
                            </li>
                            <!--Story End-->
                            <!--Story Start-->
                            <li class="story-row">
                              <div class="ts-thumb"><img src="images/tsimg1.jpg" alt=""> </div>
                              <div class="ts-txt">
                                <h5> <a href="#">Success is not Accident
                                  it’s a Result of Hard Work </a>
                                </h5>
                                <ul class="tsw-meta">
                                  <li><a href="#">NFL League</a></li>
                                  <li>12 Mar, 2020</li>
                                </ul>
                              </div>
                            </li>
                            <!--Story End-->
                          </ul>
                        </div>
                        <!--Slide 2 End--><!--Slide 3 Start-->
                        <div class="item">
                          <ul class="top-stories">
                            <!--Story Start-->
                            <li class="story-row">
                              <div class="ts-thumb"><img src="images/tsimg1.jpg" alt=""> </div>
                              <div class="ts-txt">
                                <h5> <a href="#">Success is not Accident
                                  it’s a Result of Hard Work </a>
                                </h5>
                                <ul class="tsw-meta">
                                  <li><a href="#">NFL League</a></li>
                                  <li>12 Mar, 2020</li>
                                </ul>
                              </div>
                            </li>
                            <!--Story End-->
                            <!--Story Start-->
                            <li class="story-row">
                              <div class="ts-thumb"><img src="images/tsimg1.jpg" alt=""> </div>
                              <div class="ts-txt">
                                <h5> <a href="#">Success is not Accident
                                  it’s a Result of Hard Work </a>
                                </h5>
                                <ul class="tsw-meta">
                                  <li><a href="#">NFL League</a></li>
                                  <li>12 Mar, 2020</li>
                                </ul>
                              </div>
                            </li>
                            <!--Story End-->
                            <!--Story Start-->
                            <li class="story-row">
                              <div class="ts-thumb"><img src="images/tsimg1.jpg" alt=""> </div>
                              <div class="ts-txt">
                                <h5> <a href="#">Success is not Accident
                                  it’s a Result of Hard Work </a>
                                </h5>
                                <ul class="tsw-meta">
                                  <li><a href="#">NFL League</a></li>
                                  <li>12 Mar, 2020</li>
                                </ul>
                              </div>
                            </li>
                            <!--Story End-->
                            <!--Story Start-->
                            <li class="story-row">
                              <div class="ts-thumb"><img src="images/tsimg1.jpg" alt=""> </div>
                              <div class="ts-txt">
                                <h5> <a href="#">Success is not Accident
                                  it’s a Result of Hard Work </a>
                                </h5>
                                <ul class="tsw-meta">
                                  <li><a href="#">NFL League</a></li>
                                  <li>12 Mar, 2020</li></ul>
                              </div>
                            </li>
                            <!--Story End-->
                          </ul>
                        </div>
                        <!--Slide 3 End-->
                      </div>
                    </div>
                  </div>
                   <!--widget end-->
                </div>
             </div>
          </div>
       </div>
    </div>
    <!--Match Result End-->
 </div>
 <!--Main Content End-->
@endsection
