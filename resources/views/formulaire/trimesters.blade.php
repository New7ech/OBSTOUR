@extends('layouts.app')  
@section('contenus')  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>  
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">  
    <style>  
        button{  
            border: none;  
            background-color: #ffffff00  
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
    </style>   

    @if(session('success'))  
        <script>  
            swal("{{ session('success') }}", "Clic moi !!!!!", {  
                icon: "success",  
                buttons: {  
                    confirm: {  
                        className: "btn btn-success",  
                    },  
                },  
            });  
        </script>  
    @endif  

    <form action="{{ route('mensuel.store') }}" method="post" novalidate>  
        @csrf  
        <div class="container dashboard">  
            <div class="row">  
                <div class="col-md-3">  
                    <button id="alert_demo_3_3">  
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
    </form>  
    
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>  
@endsection