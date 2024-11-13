@extends('layouts.client.client-layout')


@section('content')

<!--Main Slider Start-->
<div class="inner-banner-header wf100">
    <h1 data-generated="Players Detail">Players Detail</h1>
    <div class="gt-breadcrumbs">
      <ul>
        <li> <a href="#" class="active"> <i class="fas fa-home"></i> Home </a> </li>
        <li> <a href="#"> Team </a> </li>
        <li> <a href="#"> Team Grid </a> </li>
      </ul>
    </div>
  </div>
  <!--Main Slider Start-->
  <!--Main Content Start-->
  <div class="main-content innerpagebg wf100">
    <!--team Page Start-->
    <div class="team wf100 p80">
      <!--Start-->
      <div class="player-squad">
        <div class="container">
          <div class="row">
            <!--Squad Start-->
            <div class="col-lg-8">
              <!--Player Box Start-->
              <div class="player-card">
                <style>
                   .player-card .pimg img{
                    width: 350px;
                    height: 350px;
                   }
                    </style>
                <div class="pimg"><img src="/images/{{ \App\Models\Player::find($player['id'])['Avatar']}}"   alt="" ></div>
                <div class="player-details">
                  <h2></h2>
                  <strong class="desi">{{ $player['Name'] }}</strong> <span class="follow"><a href="#">Follow</a></span>
                  <ul>
                    {{-- <li>Height <strong>5’ 11”</strong></li>
                    <li> Weight <strong>67 kg</strong></li> --}}
                    <li> Age <strong>{{ \Carbon\Carbon::parse($player->Birthdate)->age }}</strong></li>
                    <li> Nationality <strong>{{ $player['Nationality'] }}</strong></li>
                    <li> Total Goals <strong>117</strong></li>
                    <li>Position <strong>{{ $player['Position'] }}</strong></li>
                    <li> JerseyNumber <strong>{{ $player['JerseyNumber'] }}</strong></li>

                  </ul>
                </div>
              </div>
              <!--Player Box End-->
              <!--Player Biography Start-->
              <div class="player-bio">
                <h4>{{ $player['Name'] }} Biography</h4>
                <div class="txt">
                  <p>{{ $player['Story'] }}</p>
                </div>
              </div>
              <!--Player Biography End-->
              <!--Career Facts Start-->

              <!--Highlights & Gallery Start-->
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
              <!--Highlights & Gallery End-->
              <div class="player-social-media">
                <h4>Kevin’s Social Network</h4>
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
                </ul>
              </div>
            </div>
            <!--Squad End-->
            <!--Sidebar Start-->
            <div class="col-lg-4">
              <div class="sidebar">
                <!--widget start-->

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
                          <li class="story-row">
                            <div class="ts-thumb"><img src="/images/tsimg1.jpg" alt=""> </div>
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
                            <div class="ts-thumb"><img src="/images/tsimg1.jpg" alt=""> </div>
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
                            <div class="ts-thumb"><img src="/images/tsimg1.jpg" alt=""> </div>
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
                            <div class="ts-thumb"><img src="/images/tsimg1.jpg" alt=""> </div>
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
                      <!--Slide 1 End-->
                      <!--Slide 2 Start-->
                      <div class="item">
                        <ul class="top-stories">
                          <!--Story Start-->
                          <li class="story-row">
                            <div class="ts-thumb"><img src="/images/tsimg1.jpg" alt=""> </div>
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
                            <div class="ts-thumb"><img src="/images/tsimg1.jpg" alt=""> </div>
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
                            <div class="ts-thumb"><img src="/images/tsimg1.jpg" alt=""> </div>
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
                            <div class="ts-thumb"><img src="/images/tsimg1.jpg" alt=""> </div>
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
                      <!--Slide 2 End-->
                      <!--Slide 3 Start-->
                      <div class="item">
                        <ul class="top-stories">
                          <!--Story Start-->
                          <li class="story-row">
                            <div class="ts-thumb"><img src="/images/tsimg1.jpg" alt=""> </div>
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
                            <div class="ts-thumb"><img src="/images/tsimg1.jpg" alt=""> </div>
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
                            <div class="ts-thumb"><img src="/images/tsimg1.jpg" alt=""> </div>
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
                            <div class="ts-thumb"><img src="/images/tsimg1.jpg" alt=""> </div>
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
                      <!--Slide 3 End-->
                    </div>
                  </div>
                </div>
                <!--widget end-->
                <!--widget start-->
                <div class="widget">
                 <a href="/player"> <h4>Team Player</h4></a>
                  <div class="team-squad-box">
                    <span class="star-tag"><i class="fas fa-star"></i></span> <a href="#" class="follow">Follow</a>
                    <div class="ts-cap">
                      <h4>{{ \App\Models\Player::find($player['id'])['Name'] }}</h4>

                      <ul>
                        <li>{{ \Carbon\Carbon::parse($player->Birthdate)->age }} <span>Age</span></li>
                        <li>87 <span>matches</span></li>
                        <li>113 <span>Goals</span></li>
                        <li>87 <span>matches</span></li>
                      </ul>
                    </div>
                    <img src="/images/{{ \App\Models\Player::find($player['id'])['Avatar'] }}"  width="255px" height="350px" alt="">
                  </div>

                </div>
                </div>
                <!--widget start-->
                <!--widget start-->
                <div class="widget">
                  <h4>Match Sponsors</h4>
                  <ul class="match-sponsors">
                    <li> <a href="#"><img src="/images/sitelogos1.png" alt=""></a> </li>
                    <li> <a href="#"><img src="/images/sitelogos2.png" alt=""></a> </li>
                    <li> <a href="#"><img src="/images/sitelogos3.png" alt=""></a> </li>
                    <li> <a href="#"><img src="/images/sitelogos4.png" alt=""></a> </li>
                    <li> <a href="#"><img src="/images/sitelogos5.png" alt=""></a> </li>
                    <li> <a href="#"><img src="/images/sitelogos6.png" alt=""></a> </li>
                  </ul>
                </div>
                <!--widget start-->
              </div>
            </div>
            <!--Sidebar End-->
          </div>
        </div>
      </div>
      <!--End-->
    </div>
    <!--team Page End-->
  </div>
  <!--Main Content End-->
@endsection
