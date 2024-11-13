<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <style type="text/css">
        * {
            box-sizing: border-box;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }


        .menu {
            position: relative;
            width: 280px;
            height: 280px;
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 500 !important;
        }

        .menu .toggle {
            position: relative;
            height: 60px;
            width: 60px;
            background: #fff;
            border-radius: 50%;
            box-shadow: 0 3px 4px rgba(0, 0, 0, 0.15);
            display: flex;
            align-items: center;
            justify-content: center;
            color: #333;
            font-size: 2rem;
            cursor: pointer;
            transition: 1.25s;
            z-index: 5;
        }

        .menu.active .toggle {
            transform: rotate(360deg);
            box-shadow: 0 6px 8px rgba(0, 0, 0, 0.15),
                0 0 0 2px #333,
                0 0 0 8px #fff;
        }

        .menu li {
            position: absolute;
            left: 0;
            list-style: none;
            transition: 0.5s;
            transform: rotate(calc(360deg/8 * var(--i)));
            transform-origin: 140px;
            scale: 0;
            transition-delay: calc(0.05s * var(--i));
        }

        .menu.active li {
            scale: 1;
        }

        .menu li a {
            position: relative;
            display: flex;
            transform: rotate(calc(360deg/-8 * var(--i)));
            width: 60px;
            height: 60px;
            background-color: #FFF;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            font-size: 1.75rem;
            color: var(--clr);
            box-shadow: 0 3px 4px rgba(0, 0, 0, 0.15);
            transition: 0.5s;
        }

        .menu li:hover a {
            font-size: 2.5rem;
            box-shadow: 0 0 0 2px var(--clr),
                0 0 0 6px #fff;
        }

        .velocity-animating {
            transition: none !important;
        }

        body {
            background-image: -webkit-radial-gradient(ellipse, #2a437c 0, #10203b 100%);
            font-family: 'Open Sans', helvetica, arial, sans-serif;
        }



        @media only screen and (max-width: 400px) {
            main {
                transform: scale(0.5);
            }

            #titiledob {
                font-size: 20px;
                margin-top: -15px !important;
            }

            #contentdob {
                margin-top: -2px;
                font-size: 15px;
            }

            #titielHeight {
                font-size: 20px;
                margin-top: -15px !important;
            }

            #contentHeight {
                margin-top: -2px;
                font-size: 15px;
            }

            #tiltileOrigin {
                font-size: 20px;
                margin-top: -15px !important;
            }

            #contentOrigin {
                margin-top: -2px;
                font-size: 15px;
            }

            #tileName {
                font-size: 20px;
            }

            main {
                margin-top: -200px;
            }

            .menu {
                top: 390px;
                left: 50px;
                transform: scale(0.9);
            }

        }

        .static {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            color: #fff;
            text-align: center;
            padding: 0;
            z-index: 3;
        }

        .static h1 {
            margin: 50px 0 15px;
            font-size: 50px;
            font-weight: 800;
            text-transform: uppercase;
            line-height: 42px;
            letter-spacing: -3px;
            font-family: montserrat;
        }

        .static p {
            font-weight: 300;
            opacity: 0.4;
            margin: 0 0 20px;
            font-size: 16px;
            color: #7f98d3;
        }

        .loading {
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            margin: auto;
            height: 16px;
            line-height: 16px;
            color: #fff;
            font-family: 'montserrat';
            font-size: 24px;
            font-weight: 900;
            letter-spacing: -1px;
            text-align: center;
            opacity: 0;
        }

        .team-list {
            position: absolute;
            left: 40px;
            top: 100px;
            list-style: none;
            display: none;
        }

        .team-list li:first-child {
            color: #fff;
            font-weight: bold;
        }

        .team-list li {
            font-size: 1.4rem;
            margin: 0 0 10px;
            color: #7f98d3;
        }

        .stage {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            perspective-origin: 50% -200px;
            perspective: 1100px;
            z-index: 1;
            backface-visibility: hidden;
        }

        .world {
            position: absolute;
            top: 130px;
            left: 50%;
            margin-left: -336px;
            width: 672px;
            height: 840px;
            transform: translateZ(-210px);
            transform-style: preserve-3d;
            z-index: 1;
            backface-visibility: hidden;
        }

        .world.flipped {
            transform: translateZ(-210px) rotateY(180deg);
        }

        .world.switched {
            transform: translateZ(250px) rotateY(30deg) translateX(60px) translateY(-200px);
        }

        .switch-btn {
            display: inline-block;
            padding: 6px 15px;
            border: solid 1px #7f98d3;
            border-radius: 5px;
            text-align: center;
            color: #7f98d3;
            text-decoration: none;
            opacity: 1;
            font-size: 12px;
            transition: all 0.15s;
        }

        .switch-btn.disabled {
            background: #7f98d3;
            color: #2a437c;
            cursor: default;
        }

        .switch-btn.disabled:hover {
            color: #2a437c;
        }

        .switch-btn:hover {
            color: #fff;
        }

        .switch-btn:first-child {
            border-radius: 10px 0 0 10px;
            border-right: none;
        }

        .switch-btn:last-child {
            border-radius: 0 10px 10px 0;
        }

        .team {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            transform-style: preserve-3d;
        }

        .terrain {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            transform-style: inherit;
        }

        .field {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: #eee;
            z-index: 2;
            transform: rotateX(90deg) translateZ(0);
            transform-origin: 50% 50%;
            box-sizing: content-box;
            backface-visibility: hidden;
        }

        .field--alt {
            display: block;
            width: 80%;
            left: 10%;
            transform: rotateX(90deg) translateZ(-10px);
            background: #000;
            opacity: 0.3;
            box-shadow: 0 0 40px 30px #000;
        }

        .field__texture {
            width: 100%;
            height: 100%;
            position: absolute;
            z-index: 3;
        }

        .field__texture.field__texture--gradient {
            background-image: linear-gradient(to top, rgba(0, 0, 0, 0.2), transparent);
            z-index: 4;
        }

        .flipped .field__texture.field__texture--gradient {
            opacity: 0;
        }

        .field__texture.field__texture--gradient-b {
            opacity: 0;
            background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.2), transparent);
            z-index: 4;
        }

        .flipped .field__texture.field__texture--gradient-b {
            opacity: 1;
        }

        .texture .field__texture.field__texture--grass {
            background-image: url("https://s3-us-west-2.amazonaws.com/s.cdpn.io/215059/grass2.png");
            background-repeat: repeat;
            background-size: 75px 75px;
            background-position: -20px -20px;
        }

        .field__side {
            position: absolute;
            top: 420px;
            left: 0;
            width: 100%;
            height: 8px;
            transform: rotateX(180deg) translateZ(-420px);
            transform-origin: 50% 50%;
            background-color: #f7f7f7;
            z-index: 9;
        }

        .texture .field__side {
            background-color: #000;
        }

        .texture .field__side:after {
            content: "";
            top: 0;
            left: 0;
            bottom: 0;
            right: 0;
            position: absolute;
            opacity: 0.55;
            background-image: url("https://s3-us-west-2.amazonaws.com/s.cdpn.io/215059/mud.png");
            background-repeat: repeat;
            background-size: 75px 75px;
            background-position: -20px -20px;
        }

        .field__side.field__side--left,
        .field__side.field__side--right {
            top: 0;
            left: -8px;
            height: 100%;
            width: 8px;
            transform-origin: 100% 50%;
            transform: rotateX(90deg) rotateY(-90deg) translateZ(0);
        }

        .field__side.field__side--right {
            left: auto;
            right: 0;
        }

        .field__side.field__side--back {
            transform: rotateX(180deg) translateZ(420px);
        }

        .field__line {
            position: absolute;
            width: 100%;
            height: 3px;
            z-index: 4;
        }

        .field__line--goal {
            width: 16%;
            height: 6%;
            border: solid 3px rgba(255, 255, 255, 0.5);
            border-bottom: none;
            left: 0;
            right: 0;
            margin: auto;
            bottom: 4%;
        }

        .field__line--goal--far {
            top: 4%;
            bottom: auto;
            border: solid 3px rgba(255, 255, 255, 0.5);
            border-top: none;
        }

        .field__line--penalty-arc {
            width: 20%;
            height: 20%;
            overflow: hidden;
            bottom: 20%;
            left: 0;
            right: 0;
            margin: auto;
        }

        .field__line--penalty-arc:after {
            position: absolute;
            top: 75%;
            width: 100%;
            height: 100%;
            left: 0;
            content: ' ';
            display: block;
            border-radius: 50% 50% 0 0;
            border: solid 3px rgba(255, 255, 255, 0.5);
            border-bottom: none;
            box-sizing: border-box;
        }

        .field__line--penalty-arc--far {
            bottom: auto;
            top: 20%;
        }

        .field__line--penalty-arc--far:after {
            bottom: 75%;
            top: auto;
            border: solid 3px rgba(255, 255, 255, 0.5);
            border-top: none;
            border-radius: 0 0 50% 50%;
        }

        .field__line--penalty {
            width: 44%;
            height: 16%;
            border: solid 3px rgba(255, 255, 255, 0.5);
            border-bottom: none;
            left: 0;
            right: 0;
            margin: auto;
            bottom: 4%;
        }

        .field__line--penalty--far {
            top: 4%;
            bottom: auto;
            border: solid 3px rgba(255, 255, 255, 0.5);
            border-top: none;
        }

        .field__line--outline {
            width: 92%;
            height: 92%;
            top: 4%;
            left: 4%;
            border: solid 3px rgba(255, 255, 255, 0.5);
        }

        .field__line--mid {
            top: 50%;
            width: 92%;
            left: 4%;
            background-color: rgba(255, 255, 255, 0.5);
        }

        .field__line--circle {
            width: 20%;
            height: 20%;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            margin: auto;
            border: solid 3px rgba(255, 255, 255, 0.5);
            border-radius: 50%;
        }

        .debug-btn {
            position: absolute;
            right: 40px;
            top: 40px;
            border: solid 1px #fff;
            border-radius: 10px;
            height: 20px;
            padding: 0 10px;
            color: #fff;
            text-decoration: none;
            line-height: 20px;
        }

        .debug-btn:hover {
            opacity: 1;
            background-color: rgba(255, 255, 255, 0.1);
        }

        .debug-btn.debug-btn--load {
            top: 80px;
        }

        .player {
            position: absolute;
            height: 88px;
            width: 65px;
            padding-bottom: 23px;
            z-index: 9;
            left: 50%;
            margin-left: -32.5px;
            bottom: 50%;
            transform-style: preserve-3d;
            backface-visibility: hidden;
            transition: all 0.2s;
            cursor: pointer;
        }

        .player .player__placeholder {
            position: absolute;
            opacity: 0;
            transform: rotateX(90deg);
            height: 30px;
            width: 30px;
            bottom: -10px;
            left: 0;
            right: 0;
            margin: auto;
            border-radius: 50%;
            background-color: rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        .player.active .player__placeholder {
            opacity: 1;
        }

        .player .player__card {
            position: absolute;
            bottom: 26px;
            left: -82.5px;
            height: 260px;
            background-color: #f7f7f7;
            opacity: 0;
            width: 230px;
            padding: 0;
            font-size: 18px;
            color: #333;
            border-radius: 4px;
            z-index: 2;
        }

        .player .player__card:after {
            position: absolute;
            display: block;
            content: '';
            height: 1px;
            width: 1px;
            border: solid 10px transparent;
            border-top: solid 10px #eee;
            bottom: -21px;
            left: 0;
            right: 0;
            margin: auto;
            top: auto;
            z-index: 3;
        }

        .player .player__card i {
            position: absolute;
            top: 0px;
            right: 0px;
            padding: 10px 15px;
            font-size: 24px;
            line-height: 20px;
            color: #fff;
            opacity: 0.3;
            cursor: pointer;
            transition: all 0.15s;
        }

        .player .player__card i:hover {
            opacity: 0.6;
        }

        .player .player__card h3 {
            text-align: center;
            font-weight: normal;
            text-transform: uppercase;
            font-family: montserrat;
            font-size: 15px;
            line-height: 27px;
            color: #333;
            color: #fff;
            padding: 15px 30px 40px;
            margin: 0 0 30px;
            background-color: #eee;
            border-radius: 4px 4px 0 0;
            background-color: #192642;
        }

        .player .player__card h3 span:first-child {
            display: inline-block;
            height: 27px;
            width: 27px;
            border-radius: 50%;
            border: solid 1px #fff;
            line-height: 27px;
            opacity: 0.4;
            font-size: 18px;
        }

        .player .player__card h3 span:last-child {
            font-size: 14px;
            opacity: 0.4;
        }

        .player .player__card p {
            color: #777;
            font-style: italic;
            text-align: center;
        }

        .player .player__card .player__card__list {
            padding: 10px 0;
            font-size: 14px;
            color: #777;
            overflow: auto;
            text-align: center;
        }

        .player .player__card .player__card__list li {
            display: inline-block;
            white-space: nowrap;
            text-overflow: ellipsis;
            text-align: center;
            font-size: 15px;
            padding-left: 20px;
            color: #333;
        }

        .player .player__card .player__card__list li span {
            font-size: 12px;
            text-transform: uppercase;
            color: #aaa;
        }

        .player .player__card .player__card__list li:first-child {
            padding-left: 0;
            border-left: none;
        }

        .player .player__card .player__card__list--last {
            position: absolute;
            width: 100%;
            bottom: 0;
            background-color: #eee;
            margin: 0;
            padding: 0;
            border-top: solid 1px #ddd;
            border-radius: 0 0 6px 6px;
            overflow: hidden;
        }

        .player .player__card .player__card__list--last li {
            width: 50%;
            padding: 10px 0 20px 0;
            color: #a40028;
            font-size: 28px;
            line-height: 22px;
        }

        .player .player__card .player__card__list--last li:last-child {
            border-left: solid 1px #ddd;
        }

        .player * {
            pointer-events: none;
        }

        .player .player__img {
            position: absolute;
            top: 0;
            left: 0;
            width: 65px;
            height: 65px;
            z-index: 4;
            overflow: hidden;
            border-radius: 32.5px;
            background-color: #000;
            border: solid 1px #fff;
            backface-visibility: hidden;
            transition: all 0.2s;
        }

        .player .player__img img {
            width: 100%;
            transition: all 0.2s;
            display: block;
        }

        .player .player__label {
            position: absolute;
            height: 20px;
            display: inline-block;
            width: auto;
            overflow: visible;
            white-space: nowrap;
            left: -100%;
            right: -100%;
            margin: auto;
            padding: 0 10px;
            line-height: 20px;
            text-align: center;
            border-radius: 10px;
            bottom: 0;
            opacity: 0;
            text-transform: upppercase;
            transition: opacity 0.2s;
            z-index: 2;
            pointer-events: none;
        }

        .player .player__label span {
            background-color: rgba(16, 20, 30, 0.9);
            color: #fff;
            font-size: 11px;
            padding: 3px 10px 2px 10px;
            border-radius: 10px;
            text-transform: upppercase;
        }

        .player:hover .player__img {
            opacity: 1;
        }

        .player:hover .player__label {
            opacity: 1;
        }

        .texture .player {
            background-size: 100% auto;
        }
    </style>
</head>

<body>
    <div class="menu" id="menupopup">
        <div class="toggle" s>
            <ion-icon style="font-size: 1.8em;" name="football"></ion-icon>
        </div>

        <li style="--i:0;--clr:#1877f2">
            <a href="#"><ion-icon name="home"></ion-icon></a>
        </li>
        <li style="--i:1;--clr:#25d366">
            <a href="#"><ion-icon name="logo-whatsapp"></ion-icon></a>
        </li>
        <li style="--i:2;--clr:#1da1f2">
            <a href="#"><ion-icon name="logo-twitter"></ion-icon></a>
        </li>
        <li style="--i:3;--clr:#ea4c89">
            <a href="#"><ion-icon name="logo-dribbble"></ion-icon></a>
        </li>
        <li style="--i:4;--clr:#0a66c2">
            <a href="#"><ion-icon name="logo-linkedin"></ion-icon></a>
        </li>
        <li style="--i:5;--clr:#c32aa3">
            <a href="#"><ion-icon name="logo-instagram"></ion-icon></a>
        </li>
        <li style="--i:6;--clr:#bd081c">
            <a href="#"><ion-icon name="logo-pinterest"></ion-icon></a>
        </li>
        <li style="--i:7;--clr:#ff0000">
            <a href="#"><ion-icon name="logo-youtube"></ion-icon></a>
        </li>
    </div>
    <main>
        <div class="static">
            <h1 class="js-heading">SOCCER VERSE</h1>
            <p class="js-subheading">Line-ups of the two teams before going to the field</p>
            <div class="js-switcher switcher">
                <a href="#" class="js-switch disabled switch-btn">HOME</a><a href="#"
                    class="js-switch switch-btn">AWAY</a>
            </div>
        </div>
        <div class="js-stage stage texture">
            <div class="js-world world">
                <div class="team js-team">
                    <!-- Team cards / icons goes here -->
                </div>
                <div class="terrain js-terrain">
                    <div class="field field--alt"></div>
                    <div class="field ground">
                        <div class="field__texture field__texture--gradient"></div>
                        <div class="field__texture field__texture--gradient-b"></div>
                        <div class="field__texture field__texture--grass"></div>
                        <div class="field__line field__line--goal"></div>
                        <div class="field__line field__line--goal field__line--goal--far"></div>
                        <div class="field__line field__line--outline"></div>
                        <div class="field__line field__line--penalty"></div>
                        <div class="field__line field__line--penalty-arc"></div>
                        <div class="field__line field__line--penalty-arc field__line--penalty-arc--far"></div>
                        <div class="field__line field__line--mid"></div>
                        <div class="field__line field__line--circle"></div>
                        <div class="field__line field__line--penalty field__line--penalty--far"></div>
                    </div>
                    <div class="field__side field__side--front"></div>
                    <div class="field__side field__side--left"></div>
                    <div class="field__side field__side--right"></div>
                    <div class="field__side field__side--back"></div>
                </div>
            </div>
            <div class="loading js-loading">PLEASE WAIT...</div>
        </div>
    </main>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/velocity/1.2.2/velocity.min.js"></script>

    <script>
        (function () {
            var $closeBtn, $heading, $loadBtn, $loading, $players, $playersAway, $playersHome, $stage, $subHeading, $switchBtn, $switcher, $team, $teamListHome, $terrain, $world, ASSET_URL, anim, data, dom, events, init, pos, scenes, state;

            ASSET_URL = 'https://s3-us-west-2.amazonaws.com/s.cdpn.io/215059/';

            $stage = null;

            $world = null;

            $terrain = null;

            $team = null;

            $teamListHome = null;

            $players = null;

            $playersHome = null;

            $playersAway = null;

            $switchBtn = null;

            $loadBtn = null;

            $closeBtn = null;

            $heading = null;

            $subHeading = null;

            $loading = null;

            $switcher = null;
            const formations = [
                {
                    formation: 'away',
                    players: [
                        { x: 180, y: -230 },
                        { x: 0, y: -230 },
                        { x: -180, y: -230 },
                        { x: 180, y: 50 },
                        { x: 0, y: 50 },
                        { x: -180, y: 50 },
                        { x: 250, y: 250 },
                        { x: 80, y: 250 },
                        { x: -80, y: 250 },
                        { x: -250, y: 250 },
                        { x: 0, y: 410 }
                    ]

                },
                {
                    formation: '3-4-3',
                    players: [
                        { x: 150, y: -190 },
                        { x: 0, y: -190 },
                        { x: -150, y: -190 },
                        { x: 250, y: 50 },
                        { x: 90, y: 50 },
                        { x: -90, y: 50 },
                        { x: -250, y: 50 },
                        { x: 150, y: 250 },
                        { x: 0, y: 250 },
                        { x: -150, y: 250 },
                        { x: 0, y: 410 }
                    ]
                },
                {
                    formation: '4231',
                    players: [
                        { x: 0, y: -250 },
                        { x: 190, y: -70 },
                        { x: 0, y: -70 },
                        { x: -190, y: -70 },
                        { x: 70, y: 70 },
                        { x: -70, y: 70 },
                        { x: 250, y: 250 },
                        { x: 80, y: 250 },
                        { x: -80, y: 250 },
                        { x: -250, y: 250 },
                        { x: 0, y: 410 }
                    ]
                },
                {
                    formation: '4-2-4',
                    players: [
                        { x: 250, y: -190 },
                        { x: 80, y: -190 },
                        { x: -80, y: -190 },
                        { x: -250, y: - 190 },
                        { x: 90, y: 20 },
                        { x: -90, y: 20 },
                        { x: 250, y: 250 },
                        { x: 80, y: 250 },
                        { x: -80, y: 250 },
                        { x: -250, y: 250 },
                        { x: 0, y: 410 }
                    ]
                },
                {
                    formation: '3-1-4-2',
                    players: [
                        { x: 75, y: -200 },
                        { x: -75, y: -200 },
                        { x: 250, y: 0 },
                        { x: 110, y: 0 },
                        { x: 0, y: 130 },
                        { x: -110, y: 0 },
                        { x: -250, y: 0 },
                        { x: 150, y: 270 },
                        { x: 0, y: 270 },
                        { x: -150, y: 270 },
                        { x: 0, y: 410 }
                    ]
                },
                {
                    formation: '4-3-3',
                    players: [
                        { x: 180, y: -230 },
                        { x: 0, y: -230 },
                        { x: -180, y: -230 },
                        { x: 180, y: 50 },
                        { x: 0, y: 50 },
                        { x: -180, y: 50 },
                        { x: 250, y: 250 },
                        { x: 80, y: 250 },
                        { x: -80, y: 250 },
                        { x: -250, y: 250 },
                        { x: 0, y: 410 }
                    ]

                },
                {
                    formation: '4-4-2',
                    players: [
                        { x: 80, y: -190 },
                        { x: -80, y: -190 },
                        { x: 250, y: 50 },
                        { x: 80, y: 50 },
                        { x: -80, y: 50 },
                        { x: -250, y: 50 },
                        { x: 250, y: 250 },
                        { x: 80, y: 250 },
                        { x: -80, y: 250 }, { x: -250, y: 250 },
                        { x: 0, y: 410 }
                    ]
                },
                {
                    formation: '3-5-2',
                    players: [
                        { x: 75, y: -200 },
                        { x: -75, y: -200 },
                        { x: 250, y: -70 },
                        { x: 130, y: 50 },
                        { x: 0, y: 130 },
                        { x: -130, y: 50 },
                        { x: -250, y: -70 },
                        { x: 150, y: 270 },
                        { x: 0, y: 290 },
                        { x: -150, y: 270 },
                        { x: 0, y: 410 }
                    ]
                },
                {
                    formation: '5-4-1',
                    players: [
                        { x: 0, y: -200 },
                        { x: 200, y: -50 },
                        { x: 75, y: 50 },
                        { x: -75, y: 50 },
                        { x: -200, y: -50 },
                        { x: 250, y: 200 },
                        { x: 130, y: 300 },
                        { x: 0, y: 300 },
                        { x: -130, y: 300 },
                        { x: -250, y: 200 },
                        { x: 0, y: 410 }
                    ]
                },
                {
                    formation: '3-5-1-1',
                    players: [
                        { x: 0, y: -190 },
                        { x: 0, y: -10 },
                        { x: 225, y: -10 },
                        { x: 125, y: 80 },
                        { x: 0, y: 145 },
                        { x: -125, y: 80 },
                        { x: -225, y: -10 },
                        { x: 150, y: 240 },
                        { x: 0, y: 280 },
                        { x: -150, y: 240 },
                        { x: 0, y: 410 }
                    ]
                },
                {
                    formation: '4-4-2-D',
                    players: [
                        { x: 130, y: -160 },
                        { x: 0, y: -155 },
                        { x: -130, y: -160 },
                        { x: 225, y: 30 },
                        { x: 0, y: 15 },
                        { x: 0, y: 165 },
                        { x: -225, y: 30 },
                        { x: 225, y: 297 },
                        { x: 0, y: 297 },
                        { x: -225, y: 297 },
                        { x: 0, y: 410 }
                    ]
                },
                {
                    formation: '5-3-2',
                    players: [
                        { x: 75, y: -190 },
                        { x: -75, y: -190 },
                        { x: 200, y: 50 },
                        { x: 0, y: 140 },
                        { x: 0, y: -10 },
                        { x: -200, y: 50 },
                        { x: 235, y: 280 },
                        { x: 75, y: 300 },
                        { x: -75, y: 300 },
                        { x: -235, y: 280 },
                        { x: 0, y: 410 }
                    ]
                },
                {
                    formation: '4-1-2-1-2',
                    players: [
                        { x: -100, y: 250 },
                        { x: 100, y: 250 },
                        { x: 250, y: 250 },
                        { x: -250, y: 250 },
                        { x: -150, y: 50 },
                        { x: 0, y: 150 },
                        { x: 150, y: 50 },
                        { x: 0, y: 0 },
                        { x: -110, y: -190 },
                        { x: 110, y: -190 },
                        { x: 0, y: 410 }
                    ]
                }]
            var homex = [];
            var homey = [];
            const compareFormations = (selectedFormation, playFormat) => {
                playFormat.forEach(formation => {
                    if (selectedFormation === formation.formation) {
                        formation.players.forEach(player => {
                            const { x, y } = player;
                            homex.push(x);
                            homey.push(y);
                        });
                    }
                });
            };

            var awayx = [];
            var awayy = [];
            const compareFormationsB = (selectedFormation, playFormat) => {
                playFormat.forEach(formation => {
                    if (selectedFormation === formation.formation) {
                        formation.players.forEach(player => {
                            const { x, y } = player;
                            awayx.push(x);
                            awayy.push(y);
                        });
                    }
                });
            };
            compareFormations("4-1-2-1-2", formations);

            compareFormationsB("4-3-3", formations);

            data = {
                players: {
                    home: [
                        {

                            //Forward
                            name: 'tiền đạo 2',
                            asset: 'bm-pizarro.jpg',
                            origin: 'Peru',
                            height: '1.84m',
                            shirt: '14',
                            pos: 'Forward',
                            dob: '36',
                            goals: 1,
                            games: 16,
                            x: homex[0],
                            y: homey[0]
                        },
                        {
                            //Forward
                            name: 'tiền đạo 1',
                            asset: 'bm-pizarro.jpg',
                            origin: 'Peru',
                            height: '1.84m',
                            shirt: '14',
                            pos: 'Forward',
                            dob: '36',
                            goals: 1,
                            games: 16,
                            x: homex[1],
                            y: homey[1]
                        }, {
                            name: 'tiền vệ 4',
                            asset: 'bm-robben.png',
                            origin: 'Holland',
                            height: '1.80m',
                            shirt: '10',
                            pos: 'Forward',
                            dob: '32',
                            goals: 19,
                            games: 30,
                            x: homex[2],
                            y: homey[2]
                        }, {
                            name: 'tiền vệ 3',
                            asset: 'bm-rilbery.jpg',
                            origin: 'France',
                            height: '1.70m',
                            shirt: '7',
                            pos: 'Midfield',
                            dob: '32',
                            goals: 9,
                            games: 22,
                            x: homex[3],
                            y: homey[3]
                        }, {
                            name: 'tiền vệ 2',
                            asset: 'bm-schweinsteiger.jpg',
                            origin: 'Germany',
                            height: '1.87m',
                            shirt: '24',
                            pos: 'Forward',
                            dob: '31',
                            goals: 21,
                            games: 3,
                            x: homex[4],
                            y: homey[4]
                        }, {
                            name: 'tiền vệ 1',
                            asset: 'bm-martinez.jpg',
                            origin: 'Spain',
                            height: '1.90m',
                            shirt: '8',
                            pos: 'Midfield',
                            dob: '28',
                            goals: 0,
                            games: 2,
                            x: homex[5],
                            y: homey[5]
                        }, {
                            name: 'hậu vệ 4',
                            asset: 'bm-alaba.jpg',
                            origin: 'Austria',
                            height: '1.80m',
                            shirt: '27',
                            pos: 'Defence',
                            dob: '24',
                            goals: 5,
                            games: 27,
                            x: homex[6],
                            y: homey[6]
                        }, {
                            name: 'hậu vệ 3',
                            asset: 'bm-lahm.jpg',
                            origin: 'Germany',
                            height: '1.70',
                            shirt: '21',
                            pos: 'Defence',
                            dob: '32',
                            goals: 2,
                            games: 25,
                            x: homex[7],
                            y: homey[7]
                        }, {
                            name: 'hậu vệ 2',
                            asset: 'bm-benatia.jpg',
                            origin: 'France',
                            height: '1.87m',
                            shirt: '5',
                            pos: 'Defence',
                            dob: '31',
                            goals: 21,
                            games: 1,
                            x: homex[8],
                            y: homey[8]
                        }, {
                            name: 'Hậu vệ 1',
                            asset: 'bm-dante.jpg',
                            origin: 'Brazil',
                            height: '1.87m',
                            shirt: '4',
                            pos: 'Defence',
                            dob: '32',
                            goals: 0,
                            games: 34,
                            x: homex[9],
                            y: homey[9]
                        }, {
                            name: 'thủ môn',
                            asset: 'bm-neuer.jpg',
                            origin: 'Germany',
                            height: '1.93m',
                            shirt: '1',
                            pos: 'Goalie',
                            dob: '29',
                            goals: 0,
                            games: 48,
                            x: homex[10],
                            y: homey[10]
                        }
                    ],
                    away: [
                        {  //Forward
                            name: 'tiền đạo 2',
                            asset: 'bm-pizarro.jpg',
                            origin: 'Peru',
                            height: '1.84m',
                            shirt: '14',
                            pos: 'Forward',
                            dob: '36',
                            goals: 1,
                            games: 16,
                            x: awayx[0],
                            y: awayy[0]
                        },
                        {  //Forward
                            name: 'tiền đạo 1',
                            asset: 'bm-pizarro.jpg',
                            origin: 'Peru',
                            height: '1.84m',
                            shirt: '14',
                            pos: 'Forward',
                            dob: '36',
                            goals: 1,
                            games: 16,
                            x: awayx[1],
                            y: awayy[1]
                        }, {
                            name: 'tiền vệ 4',
                            asset: 'bm-robben.png',
                            origin: 'Holland',
                            height: '1.80m',
                            shirt: '10',
                            pos: 'Forward',
                            dob: '32',
                            goals: 19,
                            games: 30,
                            x: awayx[2],
                            y: awayy[2]
                        }, {
                            name: 'tiền vệ 3',
                            asset: 'bm-rilbery.jpg',
                            origin: 'France',
                            height: '1.70m',
                            shirt: '7',
                            pos: 'Midfield',
                            dob: '32',
                            goals: 9,
                            games: 22,
                            x: awayx[3],
                            y: awayy[3]
                        }, {
                            name: 'tiền vệ 2',
                            asset: 'bm-schweinsteiger.jpg',
                            origin: 'Germany',
                            height: '1.87m',
                            shirt: '24',
                            pos: 'Forward',
                            dob: '31',
                            goals: 21,
                            games: 3,
                            x: awayx[4],
                            y: awayy[4]
                        }, {
                            name: 'tiền vệ 1',
                            asset: 'bm-martinez.jpg',
                            origin: 'Spain',
                            height: '1.90m',
                            shirt: '8',
                            pos: 'Midfield',
                            dob: '28',
                            goals: 0,
                            games: 2,
                            x: awayx[5],
                            y: awayy[5]
                        }, {
                            name: 'hậu vệ 4',
                            asset: 'bm-alaba.jpg',
                            origin: 'Austria',
                            height: '1.80m',
                            shirt: '27',
                            pos: 'Defence',
                            dob: '24',
                            goals: 5,
                            games: 27,
                            x: awayx[6],
                            y: awayy[6]
                        }, {
                            name: 'hậu vệ 3',
                            asset: 'bm-lahm.jpg',
                            origin: 'Germany',
                            height: '1.70',
                            shirt: '21',
                            pos: 'Defence',
                            dob: '32',
                            goals: 2,
                            games: 25,
                            x: awayx[7],
                            y: awayy[7]
                        }, {
                            name: 'hậu vệ 2',
                            asset: 'bm-benatia.jpg',
                            origin: 'France',
                            height: '1.87m',
                            shirt: '5',
                            pos: 'Defence',
                            dob: '31',
                            goals: 21,
                            games: 1,
                            x: awayx[8],
                            y: awayy[8]
                        }, {
                            name: 'Hậu vệ 1',
                            asset: 'bm-dante.jpg',
                            origin: 'Brazil',
                            height: '1.87m',
                            shirt: '4',
                            pos: 'Defence',
                            dob: '32',
                            goals: 0,
                            games: 34,
                            x: awayx[9],
                            y: awayy[9]
                        }, {
                            name: 'thủ môn',
                            asset: 'bm-neuer.jpg',
                            origin: 'Germany',
                            height: '1.93m',
                            shirt: '1',
                            pos: 'Goalie',
                            dob: '29',
                            goals: 0,
                            games: 48,
                            x: awayx[10],
                            y: awayy[10]

                        }
                    ]
                }
            };

            state = {
                home: true,
                disabHover: false,
                swapSides: function () {
                    if (this.home) {
                        return this.home = false;
                    } else {
                        return this.home = true;
                    }
                },
                curSide: function () {
                    if (this.home) {
                        return 'home';
                    } else {
                        return 'away';
                    }
                }
            };

            pos = {
                world: {
                    baseX: 0,
                    baseY: 0,
                    baseZ: -200
                },
                def: {
                    goalie: [0, -50]
                }
            };

            dom = {
                addPlayers: function (side) {
                    var $el, key, ref, val;
                    ref = data.players[side];
                    for (key in ref) {
                        val = ref[key];
                        val.side = side;
                        $el = this.addPlayer(val);
                        $team.append($el);
                    }
                    $players = $('.js-player');
                    $playersHome = $('.js-player[data-side="home"]');
                    return $playersAway = $('.js-player[data-side="away"]');
                },
                addPlayer: function (data) {
                    var $el;
                    $el = $('<div class="js-player player" data-name="' + data.name + '" data-side="' + data.side + '" data-x="' + data.x + '" data-y="' + data.y + '"></div>');
                    $el.append('<div class="player__label"><span>' + data.name + '</span></div>');
                    $el.append('<div class="player__img"><img src= ' + ASSET_URL + data.asset + '></div>');
                    $el.prepend('<div class="player__card"> </div>');
                    $el.prepend('<div class="player__placeholder"></div>');
                    this.populateCard($el.find('.player__card'), data);
                    return $el;
                },
                preloadImages: function (preload) {
                    var i, promises;
                    promises = [];
                    i = 0;
                    while (i < preload.length) {
                        (function (url, promise) {
                            var img;
                            img = new Image;
                            img.onload = function () {
                                return promise.resolve();
                            };
                            return img.src = url;
                        })(preload[i], promises[i] = $.Deferred());
                        i++;
                    }
                    return $.when.apply($, promises).done(function () {
                        scenes.endLoading();
                        return scenes.loadIn(1600);
                    });
                },
                populateCard: function ($el, data) {




                    return $el.append('<h3 id="tileName">' + data.name + '</h3>' + '<ul class="player__card__list"><li><span id="titiledob">DOB</span><br/><p id="contentdob">' + data.dob + ' yr</p></li><li><span id="titielHeight">Height</span><br/><p id="contentHeight"> ' + data.height + '</p></li><li><span id="tiltileOrigin">Origin</span><br/><p id="contentOrigin">' + data.origin + '</p></li></ul>' + '<ul class="player__card__list player__card__list--last"><li><span>Games</span><br/>' + data.games + '</li><li><span>Goals</span><br/>' + data.goals + '</li></ul>');

                },
                displayNone: function ($el) {
                    return $el.css('display', 'none');
                }
            };

            events = {
                attachAll: function () {
                    $switchBtn.on('click', function (e) {
                        var $el;
                        e.preventDefault();
                        $el = $(this);
                        if ($el.hasClass('disabled')) {
                            return;
                        }
                        scenes.switchSides();
                        $switchBtn.removeClass('disabled');
                        return $el.addClass('disabled');
                    });
                    $loadBtn.on('click', function (e) {
                        e.preventDefault();
                        return scenes.loadIn();
                    });
                    return $players.on('click', function (e) {
                        var $el;
                        e.preventDefault();
                        $el = $(this);
                        if ($('.active').length) {
                            return false;
                        }
                        $el.addClass('active');
                        scenes.focusPlayer($el);
                        return setTimeout((function () {
                            return events.attachClose();
                        }), 1);
                    });
                },
                attachClose: function () {
                    return $stage.one('click', function (e) {
                        e.preventDefault();
                        return scenes.unfocusPlayer();
                    });
                }
            };

            scenes = {
                preLoad: function () {
                    $teamListHome.velocity({
                        opacity: 0
                    }, 0);
                    $players.velocity({
                        opacity: 0
                    }, 0);
                    $loadBtn.velocity({
                        opacity: 0
                    }, 0);
                    $switcher.velocity({
                        opacity: 0
                    }, 0);
                    $heading.velocity({
                        opacity: 0
                    }, 0);
                    $subHeading.velocity({
                        opacity: 0
                    }, 0);
                    $playersAway.css('display', 'none');
                    $world.velocity({
                        opacity: 0,
                        translateZ: -200,
                        translateY: -60
                    }, 0);
                    return $('main').velocity({
                        opacity: 1
                    }, 0);
                },
                loadIn: function (delay) {
                    var delayInc;
                    if (delay == null) {
                        delay = 0;
                    }
                    $world.velocity({
                        opacity: 1,
                        translateY: 0,
                        translateZ: -200
                    }, {
                        duration: 1000,
                        delay: delay,
                        easing: 'spring'
                    });
                    anim.fadeInDir($heading, 300, delay + 600, 0, 30);
                    anim.fadeInDir($subHeading, 300, delay + 800, 0, 30);
                    anim.fadeInDir($teamListHome, 300, delay + 800, 0, 30);
                    anim.fadeInDir($switcher, 300, delay + 900, 0, 30);
                    delay += 1200;
                    delayInc = 30;
                    return anim.dropPlayers($playersHome, delay, delayInc);
                },
                startLoading: function () {
                    var images, key, ref, val;
                    anim.fadeInDir($loading, 300, 0, 0, -20);
                    images = [];
                    ref = data.players.home && data.players.away;
                    for (key in ref) {
                        val = ref[key];
                        images.push(ASSET_URL + val.asset);
                    }
                    return dom.preloadImages(images);
                },
                endLoading: function () {
                    return anim.fadeOutDir($loading, 300, 1000, 0, -20);
                },
                arrangePlayers: function () {
                    return $players.each(function () {
                        var $el;
                        $el = $(this);
                        return $el.velocity({
                            translateX: parseInt($el.attr('data-x')),
                            translateZ: parseInt($el.attr('data-y'))
                        });
                    });
                },
                focusPlayer: function ($el) {
                    var shiftY;
                    data = $el.data();
                    shiftY = data.y;
                    if (shiftY > 0) {
                        shiftY = data.y / 2;
                    }
                    $('.js-player[data-side="' + state.curSide() + '"]').not('.active').each(function () {
                        var $unfocus;
                        $unfocus = $(this);
                        return anim.fadeOutDir($unfocus, 300, 0, 0, 0, 0, null, 0.2);
                    });
                    $world.velocity({
                        translateX: pos.world.baseX - data.x,
                        translateY: pos.world.baseY,
                        translateZ: pos.world.baseZ - shiftY
                    }, 600);
                    $terrain.velocity({
                        opacity: 1
                    }, 600);
                    return this.showPlayerCard($el, 600, 600);
                },
                unfocusPlayer: function () {
                    var $el;
                    $el = $('.js-player.active');
                    data = $el.data();
                    anim.fadeInDir($('.js-player[data-side="' + state.curSide() + '"]').not('.active'), 300, 300, 0, 0, 0, null, 0.2);
                    $el.removeClass('active');
                    $world.velocity({
                        translateX: pos.world.baseX,
                        translateY: pos.world.baseY,
                        translateZ: pos.world.baseZ
                    }, 600);
                    $terrain.velocity({
                        opacity: 1
                    }, 600);
                    return this.hidePlayerCard($el, 600, 600);
                },
                hidePlayerCard: function ($el, dur, delay) {
                    var $card, $image;
                    $card = $el.find('.player__card');
                    $image = $el.find('.player__img');
                    $image.velocity({
                        translateY: 0
                    }, 300);
                    anim.fadeInDir($el.find('.player__label', 200, delay));
                    return anim.fadeOutDir($card, 300, 0, 0, -100);
                },
                showPlayerCard: function ($el, dur, delay) {
                    var $card, $image;
                    $card = $el.find('.player__card');
                    $image = $el.find('.player__img');
                    $image.velocity({
                        translateY: '-=150px'
                    }, 300);
                    anim.fadeOutDir($el.find('.player__label', 200, delay));
                    return anim.fadeInDir($card, 300, 200, 0, 100);
                },
                switchSides: function () {
                    var $new, $old, delay, delayInc;
                    delay = 0;
                    delayInc = 20;
                    $old = $playersHome;
                    $new = $playersAway;
                    if (!state.home) {
                        $old = $playersAway;
                        $new = $playersHome;
                    }
                    state.swapSides();
                    $old.each(function () {
                        var $el;
                        $el = $(this);
                        anim.fadeOutDir($el, 200, delay, 0, -60, 0);
                        anim.fadeOutDir($el.find('.player__label'), 200, delay + 700);
                        return delay += delayInc;
                    });
                    $terrain.velocity({
                        rotateY: '+=180deg'
                    }, {
                        delay: 150,
                        duration: 1200
                    });
                    return anim.dropPlayers($new, 1500, 30);
                }
            };

            anim = {
                fadeInDir: function ($el, dur, delay, deltaX, deltaY, deltaZ, easing, opacity) {
                    if (deltaX == null) {
                        deltaX = 0;
                    }
                    if (deltaY == null) {
                        deltaY = 0;
                    }
                    if (deltaZ == null) {
                        deltaZ = 0;
                    }
                    if (easing == null) {
                        easing = null;
                    }
                    if (opacity == null) {
                        opacity = 0;
                    }
                    $el.css('display', 'block');
                    $el.velocity({
                        translateX: '-=' + deltaX,
                        translateY: '-=' + deltaY,
                        translateZ: '-=' + deltaZ
                    }, 0);
                    return $el.velocity({
                        opacity: 1,
                        translateX: '+=' + deltaX,
                        translateY: '+=' + deltaY,
                        translateZ: '+=' + deltaZ
                    }, {
                        easing: easing,
                        delay: delay,
                        duration: dur
                    });
                },
                fadeOutDir: function ($el, dur, delay, deltaX, deltaY, deltaZ, easing, opacity) {
                    var display;
                    if (deltaX == null) {
                        deltaX = 0;
                    }
                    if (deltaY == null) {
                        deltaY = 0;
                    }
                    if (deltaZ == null) {
                        deltaZ = 0;
                    }
                    if (easing == null) {
                        easing = null;
                    }
                    if (opacity == null) {
                        opacity = 0;
                    }
                    if (!opacity) {
                        display = 'none';
                    } else {
                        display = 'block';
                    }
                    return $el.velocity({
                        opacity: opacity,
                        translateX: '+=' + deltaX,
                        translateY: '+=' + deltaY,
                        translateZ: '+=' + deltaZ
                    }, {
                        easing: easing,
                        delay: delay,
                        duration: dur
                    }).velocity({
                        opacity: opacity,
                        translateX: '-=' + deltaX,
                        translateY: '-=' + deltaY,
                        translateZ: '-=' + deltaZ
                    }, {
                        duration: 0,
                        display: display
                    });
                },
                dropPlayers: function ($els, delay, delayInc) {
                    return $els.each(function () {
                        var $el;
                        $el = $(this);
                        $el.css({
                            display: 'block',
                            opacity: 0
                        });
                        anim.fadeInDir($el, 800, delay, 0, 50, 0, 'spring');
                        anim.fadeInDir($el.find('.player__label'), 200, delay + 250);
                        return delay += delayInc;
                    });
                }
            };

            init = function () {
                $stage = $('.js-stage');
                $world = $('.js-world');
                $switchBtn = $('.js-switch');
                $loadBtn = $('.js-load');
                $heading = $('.js-heading');
                $switcher = $('.js-switcher');
                $closeBtn = $('.js-close');
                $subHeading = $('.js-subheading');
                $terrain = $('.js-terrain');
                $team = $('.js-team');
                $teamListHome = $('.js-team-home');
                $loading = $('.js-loading');
                dom.addPlayers('home');
                dom.addPlayers('away');
                scenes.preLoad();
                scenes.arrangePlayers();
                events.attachAll();
                return scenes.startLoading();
            };

            $(document).ready(function () {
                return init();
            });

        }).call(this);
        const menu = document.querySelector(".menu");
        const toggle = document.querySelector(".toggle");

        toggle.addEventListener("click", () => {
            menu.classList.toggle("active");
        })
        const draggableDiv = document.getElementById('menupopup');

        let isDragging = false;
        let offset = { x: 0, y: 0 };

        draggableDiv.addEventListener('mousedown', (e) => {
            isDragging = true;

            // Tính toán khoảng cách từ điểm chuột đến góc trên bên trái của div
            offset.x = e.clientX - draggableDiv.getBoundingClientRect().left;
            offset.y = e.clientY - draggableDiv.getBoundingClientRect().top;

            // Ngăn chặn việc chọn văn bản trong trình duyệt
            e.preventDefault();
        });

        document.addEventListener('mousemove', (e) => {
            if (!isDragging) return;

            // Tính toán vị trí mới của div
            const left = e.clientX - offset.x;
            const top = e.clientY - offset.y;

            // Cập nhật vị trí mới cho div
            draggableDiv.style.left = left + 'px';
            draggableDiv.style.top = top + 'px';
        });

        document.addEventListener('mouseup', () => {
            isDragging = false;
        });


    </script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>


</html>