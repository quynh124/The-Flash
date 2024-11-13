@extends('layouts.client.client-layout')


@section('content')     
    <!--Main Slider Start-->
    <div class="inner-banner-header wf100">
        <h1 data-generated="Players Squad">Players Squad</h1>
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

        <!--Product Page Start-->
        <div class="team wf100 p80">



            <!--Banners Start-->
            <div class="player-squad">
                <div class="container">
                    <div class="row">
                        @foreach ($players as $player)
                            <!--Player Box Start-->
                            <div class="col-md-6">
                                <div class="player-box">

                                    <div class="player-thumb">
                                        <a href="/player-details/{{ $player->id }}">
                                            <!-- Điều hướng dựa trên ID của cầu thủ -->
                                            <img src="images/{{ \App\Models\Player::find($player['id'])['Avatar'] }}"
                                                alt="" width="240px" height="280px">
                                        </a>
                                    </div>
                                    <div class="player-txt"> <span class="star-tag"><i class="fas fa-star"></i></span>
                                        <h3>{{ \App\Models\Player::find($player['id'])['Name'] }}</h3>
                                        <strong
                                            class="player-desi">{{ \App\Models\Player::find($player['id'])['Position'] }}</strong>
                                        <p> Hi, I am {{ \App\Models\Player::find($player['id'])['Name'] }} the team captain
                                            of the soccer club.</p>
                                        <ul>
                                            <li>{{ \Carbon\Carbon::parse($player->Birthdate)->age }} <span>Age</span></li>
                                            <li>87 <span>matches</span></li>
                                            <li>113 <span>Goals</span></li>
                                            <li>87 <span>matches</span></li>
                                        </ul>
                                        <a class="playerbio" href="#"> <i
                                                class="far fa-arrow-alt-circle-right"></i></a>
                                        <a href="#" class="follow">Follow</a>
                                    </div>

                                </div>
                            </div>

                            <!--Player Box End-->
                        @endforeach
                    </div>
                </div>
                <div class="row">
                    <div class="gt-pagination">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination justify-content-center">
                                <li class="page-item"> <a class="page-link" href="#"
                                        tabindex="-1" aria-disabled="true"><i
                                            class="fas fa-angle-left"></i></a> </li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item active"><a class="page-link" href="#">2</a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"> <a class="page-link" href="#"><i
                                            class="fas fa-angle-right"></i></a> </li>
                            </ul>
                        </nav>
                    </div>
                </div>


                        </div>
                        <!--Products Filter End-->

                    </div>
                    <!--Product Page End-->

                </div>
                <!--Main Content End-->
            @endsection
