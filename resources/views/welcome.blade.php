@extends('layouts.app')
@section('contenus')


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

    <style>
        body {
            {{-- background-image: url('{{ asset('assets/img/fleuve.jpg')}}'); /* Change this to your background image */ --}}
            background-size: cover;
            background-position: center;
            color: #fff;
        }
        .dashboard {
            padding: 5px;
            backdrop-filter: blur(5px);
        }
        .card {
            box-shadow: 0 4px 8px rgba(0,0,0,0.5);
            transition: 0.3s;
            border-radius: 10px;
        }
        .card:hover {
            box-shadow: 0 8px 16px rgba(0,0,0,0.8);
        }
        .card-img-top {
            height: 200px;
            object-fit: cover;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }
        .card-body {
            background: rgba(0, 0, 0, 0.5);
            border-radius: 0 0 10px 10px;
        }
        .video-container {
            position: relative;
            margin-bottom: 40px;
        }
        .video-text {
            position: absolute;
            top: 290px;
            left: 240px;
            background: rgba(248, 242, 242, 0);
            padding: 10px;
            border-radius: 5px;
        }
        video {
            width: 100%;
            border-radius: 10px;
        }
    </style>

    <div class="container dashboard">
        <div class="page-header min-vh-75 relative">
            <video autoplay muted loop class="absolute top-0 left-0 w-full h-full object-cover">
              <source src="{{ asset('assets/img/dasboard.mp4')}}" type="video/mp4">
            </video>
            <div class="container">
              <div class="row">
                <div class="col-lg-7 text-center mx-auto">
                  <div class="video-text">
                    <h1 class="text-white pt-3 mt-n5" style="text-shadow: 3px 3px 3px rgba(0, 0, 0, 0.7);">Découvrez de Nouveaux Horizons</h1>
                  <p class="lead text-white mt-3" style="text-shadow: 2px 2px 3px rgba(0, 0, 0, 0.7);">Explorez les destinations les plus belles du monde avec nos circuits conçus par des experts. <br /> Rejoignez-nous et créez des souvenirs inoubliables.</p>
                </div>
                </div>
              </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="card animate__animated animate__fadeInUp">
                    <img class="card-img-top" src="{{ asset('assets/img/fleuve.jpg')}}" alt="Destination 2">
                    <div class="card-body">
                        <h5 class="card-title">Destination 1</h5>
                        <p class="card-text">Venez explorer cette destination incroyable aux paysages à couper le souffle.</p>
                        <a href="#" class="btn btn-light">Explorer</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card animate__animated animate__fadeInUp">
                    <img class="card-img-top" src="{{ asset('assets/img/hotel.jpg')}}" alt="Destination 2">
                    <div class="card-body">
                        <h5 class="card-title">Destination 2</h5>
                        <p class="card-text">Venez explorer cette destination incroyable aux paysages à couper le souffle.</p>
                        <a href="#" class="btn btn-light">Explorer</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card animate__animated animate__fadeInRight">
                    <img class="card-img-top" src="{{ asset('assets/img/moniment.jpg')}}" alt="Destination 3">
                    <div class="card-body">
                        <h5 class="card-title">Destination 3</h5>
                        <p class="card-text">Une destination riche en culture et en aventure, parfaite pour les explorateurs.</p>
                        <a href="#" class="btn btn-light">Explorer</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
