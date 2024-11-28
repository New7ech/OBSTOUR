@extends('layouts.app')
@section('contenus')


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">  

    <style>  
        body {  
            /(*) Uncomment the background image if necessary (*)/  
            /(*) background-image: url('{{ asset('assets/img/fleuve.jpg')}}'); (*)/  
            background-size: cover;  
            background-position: center;  
            color: #fff;  
        }  
        button{
            border: none;
            background-color: #ffffff00
        }
        .dashboard {  
            padding: 20px;  
            backdrop-filter: blur(10px);  
        }  
        .card {  
            box-shadow: 0 4px 8px rgba(0,0,0,0.5);  
            transition: transform 0.3s ease, box-shadow 0.3s ease;  
            border-radius: 15px;  
            overflow: hidden;  
        }  
        .card:hover {  
            transform: translateY(-5px);  
            box-shadow: 0 12px 24px rgba(0,0,0,0.8);  
        }  
          
        .card-body {  
            background: rgba(0, 0, 0, 0.5);  
            border-radius: 0 0 15px 15px;  
            padding: 15px;  
        }  
        .btn-custom {  
            font-weight: bold;  
            border-radius: 25px;  
            padding: 10px 20px;  
            transition: background-color 0.3s;  
        }  
        .btn-custom:hover {  
            background-color: rgba(255, 255, 255, 0.2); /(*) Lightening effect (*)/  
        }  
        h2 {  
            font-size: 1.5rem;  
            margin-top: 15px;  
        }  
        .modal-header {  
            background-color: #fdfdfd2e;  
            color: #ff0000;  
            border-top-left-radius: 15px;  
            border-top-right-radius: 15px;  
        }  
    </style> 
    <div class="container dashboard">
        
        <div class="row">
            <div class="col-md-3">
                {{-- {{ $mensuel->vactivite}} --}}
                <button data-bs-toggle="modal" data-bs-target="#vactivite">
                    <div class="card animate__animated animate__fadeInUp">
                        <img class="card-img-top" src="{{ asset('assets/img/vactivite.jpg')}}" alt="vactivite">
                        <div class="card-body">
                            <h5 class="card-title">Volume de l'activité</h5>
                        </div>
                    </div>
                </button>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>  
    
@endsection
