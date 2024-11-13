@extends('layouts.client.client-layout')


@section('content')
    <!--Main Slider Start-->
    <div class="inner-banner-header wf100">
        <h1 data-generated="Contact Us">About Us</h1>
        <div class="gt-breadcrumbs">
            <ul>

                <li> <a href="#"class="active"> About Us </a> </li>
            </ul>
        </div>
    </div>
    <style>
        /* Thiết kế phần nội dung "content-aboutus" */
        .content-aboutus {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }


        .content-aboutus p {
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            font-size: 20px;
            line-height: 1.6;
            color: #271f1f;
            padding: 0 24px;
            margin-top: 335px !important;
            font-weight: 500;
        }

        /* Thiết kế dòng ngăn cách */
        hr {
            border: none;
            border-top: 1px solid #ddd;
            margin: 20px 0;
        }

        /* Thiết kế phần tiêu đề "WHO WE ARE" */
        .fonth1 {
            text-align: center;
            font-size: 24px;

            color: #333;
            margin-bottom: 15px;
        }

        /* Thiết kế link */
        a {
            color: #007bff;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
    <!--Main Slider Start-->
    <div class="content-aboutus">
        <p> <b> Soccer Verse</b> - An engaging and user-friendly website that plunges you into a world full of details about
            football. From upcoming fixtures to match results, everything is at your fingertips, keeping you up to date with
            fast and reliable information. The Match Results and Schedule feature helps you never get lost, with optimized
            squad information and statistics.

            Player profiles and image collections are unique to Soccer Verse. Learn about your favorite players'
            biographies, stats and memorable moments through detailed profiles. This allows you to see great images that
            showcase their skills and achievements.

            With Soccer Verse, you are not only a fan, but also a part of the emotions and excitement in the world of
            football.</p>
    </div>
    <hr>
    <div class="fonth1">

        <h1>WHO WE ARE</h1>
        <!--member-->
    </div>
    <!--Main Content Start-->
    <div class="main-content innerpagebg wf100 p80">
        <!--News Large Page Start-->
        <div class="match-teams">
            <div class="container">
                <div class="row">
                    <!--Team 1 Players List Start-->
                    <div class="col-lg-6 col-md-6">

                        <!--Box Start-->
                        <div class="player-box">
                            <div class="player-thumb"><img src="images/bt.jpg" width="240px" height="280px"></div>
                            <div class="player-txt">
                                <span class="star-tag"><i class="fas fa-star"></i></span>
                                <h3>Thi Nguyen Ngoc Bao</h3>
                                <strong class="player-desi">Leader</strong>
                                <p> Hi, I am Leader of team The Flash. </p>
                                <ul>
                                    <li><a href="" class="fb"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="" class="tw"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="" class="insta"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="" class="in"><i class="fab fa-linkedin-in"></i></a></li>

                                </ul>
                                <a class="playerbio" href="#">The Flash <i
                                        class="far fa-arrow-alt-circle-right"></i></a> <a href="#"
                                    class="follow">Leader</a>
                            </div>
                        </div>
                        <!--Box End-->
                        <!--Box Start-->
                        <div class="player-box">
                            <div class="player-thumb"><img src="images/nthanh.jpg"width="240px" height="280px" alt=""></div>
                            <div class="player-txt">
                                <span class="star-tag"><i class="fas fa-star"></i></span>
                                <h3>Thanh Nguyen Tan</h3>
                                <strong class="player-desi">Member</strong>
                                <p> Hi, I am Member of team The Flash. </p>
                                <ul>
                                    <li><a href="" class="fb"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="" class="tw"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="" class="insta"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="" class="in"><i class="fab fa-linkedin-in"></i></a></li>

                                </ul>
                                <a class="playerbio" href="#"> <i
                                        class="far fa-arrow-alt-circle-right"></i></a> <a href="#"
                                    class="follow">Member</a>
                            </div>
                        </div>
                        <!--Box End-->
                        <!--Box Start-->
                        <div class="player-box">
                            <div class="player-thumb"><img src="images/bthanh.jpg"width="240px" height="280px" alt=""></div>
                            <div class="player-txt">
                                <span class="star-tag"><i class="fas fa-star"></i></span>
                                <h3>Thanh Thai Bao</h3>
                                <strong class="player-desi">Member</strong>
                                <p> Hi, I am Member of team The Flash. </p>
                                <ul>
                                    <li><a href="" class="fb"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="" class="tw"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="" class="insta"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="" class="in"><i class="fab fa-linkedin-in"></i></a></li>

                                </ul>
                                <a class="playerbio" href="#">The Flash <i
                                        class="far fa-arrow-alt-circle-right"></i></a> <a href="#"
                                    class="follow">Member</a>
                            </div>
                        </div>
                        <!--Box End-->
                    </div>




                    <!--Team 1 Players List End-->
                    <div class="col-lg-6 col-md-6 team-two">

                        <!--Box Start-->
                        <div class="player-box">
                            <div class="player-thumb"><img src="images/quynh.jpg"width="240px" height="280px" alt=""></div>
                            <div class="player-txt">
                                <span class="star-tag"><i class="fas fa-star"></i></span>
                                <h3>Quynh Nguyen Duong Kieu Diem</h3>
                                <strong class="player-desi">Member</strong>
                                <p> Hi, I am Member of team The Flash. </p>
                                <ul>
                                    <li><a href="" class="fb"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="" class="tw"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="" class="insta"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="" class="in"><i class="fab fa-linkedin-in"></i></a></li>

                                </ul>
                                <a class="playerbio" href="#">The Flash <i
                                        class="far fa-arrow-alt-circle-right"></i></a> <a href="#"
                                    class="follow">Member</a>
                            </div>
                        </div>
                        <!--Box End-->
                        <!--Box Start-->
                        <div class="player-box">
                            <div class="player-thumb"><img src="images/hai.jpg"width="240px" height="280px" alt=""></div>
                            <div class="player-txt">
                                <span class="star-tag"><i class="fas fa-star"></i></span>
                                <h3>Hai Le Ngoc</h3>
                                <strong class="player-desi">Member</strong>
                                <p> Hi, I am Member of team The Flash. </p>
                                <ul>
                                    <li><a href="" class="fb"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="" class="tw"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="" class="insta"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="" class="in"><i class="fab fa-linkedin-in"></i></a></li>

                                </ul>
                                <a class="playerbio" href="#"> The Flash<i
                                        class="far fa-arrow-alt-circle-right"></i></a> <a href="#"
                                    class="follow">Member</a>
                            </div>
                        </div>
                        <!--Box End-->
                        <!--Box Start-->
                        <div class="player-box">
                            <div class="player-thumb"><img src="images/son.jpg" width="240px" height="280px"alt=""></div>
                            <div class="player-txt">
                                <span class="star-tag"><i class="fas fa-star"></i></span>
                                <h3>Son Nguyen Hong</h3>
                                <strong class="player-desi">Member</strong>
                                <p> Hi, I am Member of team The Flash. </p>
                                <ul>
                                    <li><a href="" class="fb"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="" class="tw"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="" class="insta"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="" class="in"><i class="fab fa-linkedin-in"></i></a></li>

                                </ul>
                                <a class="playerbio" href="#">The Flash <i
                                        class="far fa-arrow-alt-circle-right"></i></a> <a href="#"
                                    class="follow">Member</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            </div>
        @endsection
