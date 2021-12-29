@extends('layout.app')

@section('content')

    <section id="hero-register" class="d-flex align-items-center">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
                    <h1>Faire vivre l'esprit Troyen, maintenir et entretenir le lien !</h1>
                    <h2>Autant de raison pour y adhérée</h2>
                    <div class="d-flex justify-content-center justify-content-lg-start">
                        <a href="#about" class="btn-get-started scrollto">Nos Objectifs</a>
                        <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="glightbox btn-watch-video"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
                    <img src="assets/images/team_01.jpg" class="img-fluid animated" alt="">
                </div>
            </div>
        </div>

    </section><!-- End Hero -->
    @include('visitor.form-register')

    <style>
        #hero-register {
        width: 100%;
        height: 80vh;
        background: #009970;
        margin: 7em 0 2em 0;
        }

        #hero-register .container {
        padding-top: 72px;
        }

        #hero-register h1 {
        margin: 0 0 10px 0;
        font-size: 48px;
        font-weight: 700;
        line-height: 56px;
        color: #fff;
        }

        #hero-register h2 {
        color: rgba(255, 255, 255, 0.6);
        margin-bottom: 50px;
        font-size: 24px;
        }

        #hero-register .btn-get-started {
        font-family: "Jost", sans-serif;
        font-weight: 500;
        font-size: 16px;
        letter-spacing: 1px;
        display: inline-block;
        padding: 10px 28px 11px 28px;
        border-radius: 50px;
        transition: 0.5s;
        margin: 10px 0 0 0;
        color: #fff;
        background: #47b2e4;
        }

        #hero-register .btn-get-started:hover {
        background: #209dd8;
        }

        #hero-register .btn-watch-video {
        font-size: 16px;
        display: flex;
        align-items: center;
        transition: 0.5s;
        margin: 10px 0 0 25px;
        color: #fff;
        line-height: 1;
        }

        #hero-register .btn-watch-video i {
        line-height: 0;
        color: #fff;
        font-size: 32px;
        transition: 0.3s;
        margin-right: 8px;
        }

        #hero-register .btn-watch-video:hover i {
        color: #47b2e4;
        }

        #hero-register .animated {
        animation: up-down 2s ease-in-out infinite alternate-reverse both;
        }

        @media (max-width: 991px) {
        #hero-register {
            height: 100vh;
            text-align: center;
        }
        #hero-register .animated {
            -webkit-animation: none;
            animation: none;
        }
        #hero-register .hero-img {
            text-align: center;
        }
        #hero-register .hero-img img {
            width: 50%;
        }
        }

        @media (max-width: 768px) {
        #hero-register h1 {
            font-size: 28px;
            line-height: 36px;
        }
        #hero-register h2 {
            font-size: 18px;
            line-height: 24px;
            margin-bottom: 30px;
        }
        #hero-register .hero-img img {
            width: 70%;
        }
        }

        @media (max-width: 575px) {
        #hero-register .hero-img img {
            width: 80%;
        }
        #hero-register .btn-get-started {
            font-size: 16px;
            padding: 10px 24px 11px 24px;
        }
        }

        @-webkit-keyframes up-down {
        0% {
            transform: translateY(10px);
        }
        100% {
            transform: translateY(-10px);
        }
        }

        @keyframes up-down {
        0% {
            transform: translateY(10px);
        }
        100% {
            transform: translateY(-10px);
        }
        }

    </style>
@endsection
