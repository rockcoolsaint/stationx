@extends('auth.app')

@section('content')
    <video id="Video1" class="bgvid back" autoplay="false" muted="muted" preload="auto" loop>
        <source src="{{ asset('images/1005475.mp4') }}" type="video/mp4">
        <!--<source src="assets/27495025.mp4" type="video/mp4">
        <source src="assets/3057346.mp4" type="video/mp4">
        <source src="assets/40191.mp4" type="video/mp4">
        <source src="assets/5060411.mp4" type="video/mp4">
            <source src="assets/1005475.mp4" type="video/mp4">-->
    </video>
    <div class="demo">
        <div class="login">
            <div class="login__check">
                <img src="{{ asset('images/logo_white_no_background.png') }}" alt="" width="348px" height="95px" style="margin-left:-15rem" />
            </div>
            <form id="login-form" class="form-horizontal" method="POST" action="{{ route('login.custom') }}">
                    {{ csrf_field() }}
                <div class="login__form">
                    <div class="login__row">
                        <svg class="login__icon name svg-icon" viewBox="0 0 20 20">
                            <path d="M0,20 a10,8 0 0,1 20,0z M10,0 a4,4 0 0,1 0,8 a4,4 0 0,1 0,-8" />
                        </svg>
                        <!--USERNAME TEXT FIELD-->
                        <input type="text" class="login__input name" name="email" value="{{ old('email') }}" placeholder="Username" required autofocus/>
                    </div>
                    <div class="login__row">
                        <svg class="login__icon pass svg-icon" viewBox="0 0 20 20">
                            <path d="M0,20 20,20 20,8 0,8z M10,13 10,16z M4,8 a6,8 0 0,1 12,0" />
                        </svg>
                        <!--PASSWORD TEXT FIELD-->
                        <input type="password" class="login__input pass" name="password" placeholder="Password" required/>
                    </div>
                    <button type="button" class="login__submit" onclick="event.preventDefault();
                            document.getElementById('login-form').submit();">Sign in</button>
                    <!--<p class="login__signup">Don't have an account? &nbsp;<a>Sign up</a></p>-->
                </div>
            </form>
        </div>
        <!--<div class="app">
            <div class="app__top">
                <div class="app__menu-btn">
                    <span></span>
                </div>
                <svg class="app__icon search svg-icon" viewBox="0 0 20 20">
                    <path d="M20,20 15.36,15.36 a9,9 0 0,1 -12.72,-12.72 a 9,9 0 0,1 12.72,12.72" />
                </svg>
                <p class="app__hello">Good Morning!</p>
                <div class="app__user">
                    <img src="//s3-us-west-2.amazonaws.com/s.cdpn.io/142996/profile/profile-512_5.jpg" alt="" class="app__user-photo" />
                    <span class="app__user-notif">3</span>
                </div>
                <div class="app__month">
                    <span class="app__month-btn left"></span>
                    <p class="app__month-name">March</p>
                    <span class="app__month-btn right"></span>
                </div>
            </div>
            <div class="app__bot">
                <div class="app__days">
                    <div class="app__day weekday">Sun</div>
                    <div class="app__day weekday">Mon</div>
                    <div class="app__day weekday">Tue</div>
                    <div class="app__day weekday">Wed</div>
                    <div class="app__day weekday">Thu</div>
                    <div class="app__day weekday">Fri</div>
                    <div class="app__day weekday">Sad</div>
                    <div class="app__day date">8</div>
                    <div class="app__day date">9</div>
                    <div class="app__day date">10</div>
                    <div class="app__day date">11</div>
                    <div class="app__day date">12</div>
                    <div class="app__day date">13</div>
                    <div class="app__day date">14</div>
                </div>
                <div class="app__meetings">
                    <div class="app__meeting">
                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/142996/profile/profile-80_5.jpg" alt="" class="app__meeting-photo" />
                        <p class="app__meeting-name">Feed the cat</p>
                        <p class="app__meeting-info">
                            <span class="app__meeting-time">8 - 10am</span>
                            <span class="app__meeting-place">Real-life</span>
                        </p>
                    </div>
                    <div class="app__meeting">
                        <img src="//s3-us-west-2.amazonaws.com/s.cdpn.io/142996/profile/profile-512_5.jpg" alt="" class="app__meeting-photo" />
                        <p class="app__meeting-name">Feed the cat!</p>
                        <p class="app__meeting-info">
                            <span class="app__meeting-time">1 - 3pm</span>
                            <span class="app__meeting-place">Real-life</span>
                        </p>
                    </div>
                    <div class="app__meeting">
                        <img src="//s3-us-west-2.amazonaws.com/s.cdpn.io/142996/profile/profile-512_5.jpg" alt="" class="app__meeting-photo" />
                        <p class="app__meeting-name">FEED THIS CAT ALREADY!!!</p>
                        <p class="app__meeting-info">
                            <span class="app__meeting-time">This button is just for demo ></span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="app__logout">
                <svg class="app__logout-icon svg-icon" viewBox="0 0 20 20">
                    <path d="M6,3 a8,8 0 1,0 8,0 M10,0 10,12" />
                </svg>
            </div>
        </div>-->
    </div>
@endsection