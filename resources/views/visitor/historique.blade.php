@extends('layout.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="marge-top"></div>
            </div>
            <div class="col-12 bg-white p-5">
                <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="assets/images/1.jpg" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="assets/images/2.jpg" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="assets/images/3.jpg" class="d-block w-100" alt="...">
                      </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <div class="col-12 bg-white p-5 marge-bottom">
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Facilis quos fuga ex odit enim, iure hic doloribus amet sunt, alias esse adipisci iste. Facere dolore fugit ratione, mollitia iure eveniet.</p>
            </div>
        </div>
    </div>

    <style>
        body{
            background-color: #f1f1f1;
        }

        .marge-top{
            margin-top: 7em;
        }

        .marge-bottom{
            margin-bottom: 7em;
        }
    </style>
@endsection
