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
        .card-img-top {  
            height: 200px;  
            object-fit: cover;  
            border-top-left-radius: 15px;  
            border-top-right-radius: 15px;  
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
        {{ $mensuel->vactivite}}
        <div class="row">
            <div class="col-md-3">
                <button data-bs-toggle="modal" data-bs-target="#vactivite">
                    <div class="card animate__animated animate__fadeInUp">
                        <img class="card-img-top" src="{{ asset('assets/img/vactivite.jpg')}}" alt="vactivite">
                        <div class="status-icon">  
                            <i class="fas {{ $mensuel->vactivite != null ? 'fa-check-circle' : 'fa-times-circle' }}" style="color: {{ $mensuel->vactivite != null ? 'green' : 'red' }}; font-size: 24px;"></i>  
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Volume de l'activité</h5>
                        </div>
                    </div>
                </button>
            </div>
            <div class="col-md-3">
                <button data-bs-toggle="modal" data-bs-target="#cacircuit">
                <div class="card animate__animated animate__fadeInUp">
                    <img class="card-img-top" src="{{ asset('assets/img/cacircuit.jpg')}}" alt="cacircuit">
                    <div class="card-body">
                        <h5 class="card-title">Chiffre d'affaires des circuits réalisés</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <button data-bs-toggle="modal" data-bs-target="#zone">
                    <div class="card animate__animated animate__fadeInUp">
                        <img class="card-img-top" src="{{ asset('assets/img/zone.jpg')}}" alt="zone">
                        <div class="card-body">
                            <h5 class="card-title">Zone de provenance des touristes</h5>
                        </div>
                    </div>
                </button>
            </div>
            <div class="col-md-3">
                <button data-bs-toggle="modal" data-bs-target="#nbbilletdests">
                <div class="card animate__animated animate__fadeInUp">
                    <img class="card-img-top" src="{{ asset('assets/img/nbbilletdess.jpg')}}" alt="nbbilletdests">
                    <div class="card-body">
                        <h5 class="card-title">Nombre de billets émis à destination des continents</h5>
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <button data-bs-toggle="modal" data-bs-target="#nbbilletcompa">
                <div class="card animate__animated animate__fadeInUp">
                    <img class="card-img-top" src="{{ asset('assets/img/nbbilletcompa.jpg')}}" alt="nbbilletcompa">
                    <div class="card-body">
                        <h5 class="card-title">Nombre de billets émis par compagnies aériennes</h5>
                        
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <button data-bs-toggle="modal" data-bs-target="#cabilletteries">

                <div class="card animate__animated animate__fadeInUp">
                    <img class="card-img-top" src="{{ asset('assets/img/cabilletteries.jpg')}}" alt="cabilletteries">
                    <div class="card-body">
                        <h5 class="card-title">Chiffre d'affaires billetterie</h5>
                    </div>
                </div>
                </button>
            </div>
            <div class="col-md-3">
                <button data-bs-toggle="modal" data-bs-target="#activite">
                    <div class="card animate__animated animate__fadeInUp">
                        <img class="card-img-top" src="{{ asset('assets/img/activite.jpg')}}" alt="emploies">
                        <div class="card-body">
                            <h5 class="card-title">Activités connexes</h5>
                        </div>
                    </div>
                </button>
            </div>
            <div class="col-md-3">
                <button data-bs-toggle="modal" data-bs-target="#emploies">
                    <div class="card animate__animated animate__fadeInUp">
                        <img class="card-img-top" src="{{ asset('assets/img/emploie.jpg')}}" alt="emploies">
                        <div class="card-body">
                            <h5 class="card-title">Emplois</h5>
                        </div>
                    </div>
                </button>
            </div>
            
        </div>
    </div>

    <div class="modal fade" id="vactivite" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">  
        <div class="modal-dialog modal-lg" role="document">  
            <div class="modal-content">  
                <div class="modal-header">  
                    <h5 class="modal-title">Ajouter un Nouveau Circuit</h5>  
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">  
                        <span aria-hidden="true">&times;</span>  
                    </button>  
                </div>  
                <div class="modal-body">  
                    <form class="modal-form row g-3 needs-validation" action="{{ route('vactivite.store') }}" method="post" novalidate>  
                        @csrf  
                       <input type="hidden" name="mensuels_id" value="{{ $mensuel->id }}">
                        <div class="col-12 grid-margin">  
                            <div class="card">  
                                <div class="card-body">  
                                    <div class="card"> 
                                        <div class="row">  
                                            <h2>Circuit inter-Etats <span style="color: red;">(*)</span></h2>  
                                            <div class="col-md-6 col-lg-6">  
                                                <div class="mb-3">  
                                                    <input type="number" class="form-control @error('nbcir_int_etat') is-invalid @enderror"   
                                                        id="nbcir_int_etat"   
                                                        name="nbcir_int_etat"   
                                                        value="{{ $mensuel->vactivite?->nbcir_int_etat }}"   
                                                        placeholder="Nombre de circuits"  
                                                        required>  
                                                    @error('nbcir_int_etat')  
                                                        <div class="invalid-feedback">{{ $message }}</div>  
                                                    @enderror  
                                                </div>  
                                            </div>  
                                            <div class="col-md-6 col-lg-6">  
                                                <div class="mb-3">  
                                                    <input type="number" class="form-control @error('nbtour_int_etat') is-invalid @enderror"   
                                                        id="nbtour_int_etat"   
                                                        name="nbtour_int_etat"   
                                                        value="{{ $mensuel->vactivite?->nbtour_int_etat }}"   
                                                        placeholder="Nombre de Touristes"   
                                                        required>  
                                                    @error('nbtour_int_etat')  
                                                        <div class="invalid-feedback">{{ $message }}</div>  
                                                    @enderror  
                                                </div>  
                                            </div>  
                                        </div>  
                                        <div class="row">  
                                            <h2>Circuit internes <span style="color: red;">(*)</span></h2>  
                                            <div class="col-md-6 col-lg-6">  
                                                <div class="mb-3">  
                                                    <input type="number" class="form-control @error('nbcir_intrn') is-invalid @enderror"   
                                                        id="nbcir_intrn"   
                                                        name="nbcir_intrn"
                                                        value="{{ $mensuel->vactivite?->nbcir_intrn }}"   
                                                        placeholder="Nombre de circuits"   
                                                        required>  
                                                    @error('nbcir_intrn')  
                                                        <div class="invalid-feedback">{{ $message }}</div>  
                                                    @enderror  
                                                </div>  
                                            </div>  
                                            <div class="col-md-6 col-lg-6">  
                                                <div class="mb-3">  
                                                    <input type="number" class="form-control @error('nbtour_intrn') is-invalid @enderror"   
                                                        id="nbtour_intrn"   
                                                        name="nbtour_intrn"   
                                                        value="{{ $mensuel->vactivite?->nbtour_intrn }}"   
                                                        placeholder="Nombre de Touristes"   
                                                        required>  
                                                    @error('nbtour_intrn')  
                                                        <div class="invalid-feedback">{{ $message }}</div>  
                                                    @enderror  
                                                </div>  
                                            </div>  
                                        </div>  
                                        <div class="row">  
                                            <h2>Excursions <span style="color: red;">(*)</span></h2>  
                                            <div class="col-md-6 col-lg-6">  
                                                <div class="mb-3">  
                                                    <input type="number" class="form-control @error('nbexcs_exc') is-invalid @enderror"   
                                                        id="nbexcs_exc"   
                                                        name="nbexcs_exc"  
                                                        value="{{ $mensuel->vactivite?->nbexcs_exc }}"   
                                                        placeholder="Nombre d'excursions"   
                                                        required>  
                                                    @error('nbexcs_exc')  
                                                        <div class="invalid-feedback">{{ $message }}</div>  
                                                    @enderror  
                                                </div>  
                                            </div>  
                                            <div class="col-md-6 col-lg-6">  
                                                <div class="mb-3">  
                                                    <input type="number" class="form-control @error('nbexcst_exc') is-invalid @enderror"   
                                                        id="nbexcst_exc"   
                                                        name="nbexcst_exc"   
                                                        value="{{ $mensuel->vactivite?->nbexcst_exc }}"   
                                                        placeholder="Nombre d'excursionnistes"   
                                                        required>  
                                                    @error('nbexcst_exc')  
                                                        <div class="invalid-feedback">{{ $message }}</div>  
                                                    @enderror  
                                                </div>  
                                            </div>  
                                        </div> 
                                    </div> 
                                    <div class="col-xs-12 col-sm-12 col-md-12 text-center">  
                                        <button type="submit" class="btn btn-primary"><i class="far fa-save"></i> Enregistrer</button>  
                                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fermer</button>  
                                    </div>  
                                </div>  
                            </div>  
                        </div>  
                    </form>  
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="cacircuit" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">  
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">  
            <div class="modal-content">  
                <div class="modal-header">  
                    <h5 class="modal-title">Ajouter chiffre d'affaire des ciruits</h5>  
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">  
                        <span aria-hidden="true">&times;</span>  
                    </button>  
                </div>  
                <div class="modal-body">  
                    <form class="modal-form" action="{{ route('cacircuits.store') }}" class="row g-3 needs-validation" method="post" novalidate>  
                        @csrf  
                        <div class="col-12 grid-margin">  
                            <div class="card">  
                                <div class="card-body">  
                                    <div class="card">   
                                        <div class="row">  
                                            <h2>Circuit inter-Etat <span style="color: red;">(*)</span></h2>  
                                            <div class="mb-3">  
                                                <input type="number" class="form-control @error('ca_cur_int_etat') is-invalid @enderror"   
                                                    id="ca_cur_int_etat"   
                                                    name="ca_cur_int_etat"   
                                                    placeholder="chiffre d'affaire des circuits inter-Etat"   
                                                    required>  
                                                @error('ca_cur_int_etat')  
                                                    <div class="invalid-feedback">{{ $message }}</div>  
                                                @enderror  
                                            </div>   
                                        </div>  
                                        <div class="row">  
                                            <h2>Circuit internes <span style="color: red;">(*)</span></h2>  
                                            <div class="mb-3">  
                                                <input type="number" class="form-control @error('ca_cur_int') is-invalid @enderror"   
                                                    id="ca_cur_int"   
                                                    name="ca_cur_int"   
                                                    placeholder="chiffre d'affaire des circuits interne"   
                                                    required>  
                                                @error('ca_cur_int')  
                                                    <div class="invalid-feedback">{{ $message }}</div>  
                                                @enderror  
                                            </div>  
                                        </div>  
                                        <div class="row">  
                                            <h2>Excursions <span style="color: red;">(*)</span></h2>  
                                            <div class="mb-3">  
                                                <input type="number" class="form-control @error('ca_cur_excu') is-invalid @enderror"   
                                                    id="ca_cur_excu"   
                                                    name="ca_cur_excu"   
                                                    placeholder="chiffre d'affaire des excursionnistes"   
                                                    required>  
                                                @error('ca_cur_excu')  
                                                    <div class="invalid-feedback">{{ $message }}</div>  
                                                @enderror  
                                            </div>  
                                        </div> 
                                    </div> 
                                    <div class="col-xs-12 col-sm-12 col-md-12 text-center">  
                                        <button type="submit" class="btn btn-primary"><i class="far fa-save"></i> Enregistrer</button>  
                                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fermer</button>  
                                    </div>  
    
                                     
                                </div>  
                            </div>  
                        </div>  
                    </form>  
                </div>
            </div>  
        </div>  
    </div>  

    <div class="modal fade" id="nbbilletdests" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">  
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">  
            <div class="modal-content">  
                <div class="modal-header">  
                    <h5 class="modal-title">Ajouter le nombre de billets émis à destination des continents</h5>  
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">  
                        <span aria-hidden="true">&times;</span>  
                    </button>  
                </div>  
                <div class="modal-body">  
                    <form class="modal-form row g-3 needs-validation" action="{{ route('nbbilletdests.store') }}" method="post" novalidate>  
                        @csrf  
                        <div class="col-12 grid-margin">  
                            <div class="card">  
                                <div class="card-body">  
                                    <div class="card">  
                                        <h5 class="card-title">Billets émis à partir de agrément IATA</h5>  
                                        <table class="table table-hover">  
                                            <thead>  
                                                <tr>  
                                                    <th scope="col">Europe<span class="text-danger">(*)</span></th>  
                                                    <th scope="col">Asie<span class="text-danger">(*)</span></th>  
                                                </tr>  
                                            </thead>  
                                            <tbody>  
                                                <tr>  
                                                    <td>  
                                                        <input id="iata_erop" name="iata_erop" type="text" class="form-control @error('iata_erop') is-invalid @enderror" placeholder="Europe" required />  
                                                        @error('iata_erop')  
                                                            <div class="invalid-feedback">{{ $message }}</div>  
                                                        @enderror  
                                                    </td>  
                                                    <td>  
                                                        <input id="iata_asi" name="iata_asi" type="text" class="form-control @error('iata_asi') is-invalid @enderror" placeholder="Asie-Pacifique"  required />  
                                                        @error('iata_asi')  
                                                            <div class="invalid-feedback">{{ $message }}</div>  
                                                        @enderror  
                                                    </td>  
                                                </tr>  
                                            </tbody>  
                                            <thead>  
                                                <tr>  
                                                    <th scope="col">Afrique<span class="text-danger">(*)</span></th>  
                                                    <th scope="col">Amérique<span class="text-danger">(*)</span></th>  
                                                </tr>  
                                            </thead>  
                                            <tbody>  
                                                <tr>  
                                                    <td>  
                                                        <input id="iata_afr" name="iata_afr" type="text" class="form-control @error('iata_afr') is-invalid @enderror" placeholder="Afrique" required />  
                                                        @error('iata_afr')  
                                                            <div class="invalid-feedback">{{ $message }}</div>  
                                                        @enderror  
                                                    </td>  
                                                    <td>  
                                                        <input id="iata_amrq" name="iata_amrq" type="text" class="form-control @error('iata_amrq') is-invalid @enderror" placeholder="Amérique" required />  
                                                        @error('iata_amrq')  
                                                            <div class="invalid-feedback">{{ $message }}</div>  
                                                        @enderror  
                                                    </td>  
                                                </tr>  
                                            </tbody>  
                                        </table>  
                                    </div>  
                                    <div class="card mt-4">  
                                        <h5 class="card-title">Billets émis auprès des compagnies</h5>  
                                        <table class="table table-hover">  
                                            <thead>  
                                                <tr>  
                                                    <th scope="col">Europe<span class="text-danger">(*)</span></th>  
                                                    <th scope="col">Asie<span class="text-danger">(*)</span></th>  
                                                </tr>  
                                            </thead>  
                                            <tbody>  
                                                <tr>  
                                                    <td>  
                                                        <input id="autr_erop" name="autr_erop" type="text" class="form-control @error('autr_erop') is-invalid @enderror" placeholder="Europe" required />  
                                                        @error('autr_erop')  
                                                            <div class="invalid-feedback">{{ $message }}</div>  
                                                        @enderror  
                                                    </td>  
                                                    <td>  
                                                        <input id="autr_asi" name="autr_asi" type="text" class="form-control @error('autr_asi') is-invalid @enderror" placeholder="Asie-Pacifique" required />  
                                                        @error('autr_asi')  
                                                            <div class="invalid-feedback">{{ $message }}</div>  
                                                        @enderror  
                                                    </td>  
                                                </tr>  
                                            </tbody>  
                                            <thead>  
                                                <tr>  
                                                    <th scope="col">Afrique<span class="text-danger">(*)</span></th>  
                                                    <th scope="col">Amérique<span class="text-danger">(*)</span></th>  
                                                </tr>  
                                            </thead>  
                                            <tbody>  
                                                <tr>  
                                                    <td>  
                                                        <input id="autr_afr" name="autr_afr" type="text" class="form-control @error('autr_afr') is-invalid @enderror" placeholder="Afrique" required />  
                                                        @error('autr_afr')  
                                                            <div class="invalid-feedback">{{ $message }}</div>  
                                                        @enderror  
                                                    </td>  
                                                    <td>  
                                                        <input id="autr_amrq" name="autr_amrq" type="text" class="form-control @error('autr_amrq') is-invalid @enderror" placeholder="Amérique" required />  
                                                        @error('autr_amrq')  
                                                            <div class="invalid-feedback">{{ $message }}</div>  
                                                        @enderror  
                                                    </td>  
                                                </tr>  
                                            </tbody>  
                                        </table>  
                                    </div>  
                                    <div class="col-xs-12 col-sm-12 col-md-12 text-center">  
                                        <button type="submit" class="btn btn-primary"><i class="far fa-save"></i> Enregistrer</button>  
                                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fermer</button>  
                                    </div>  
                
                                      
                                </div>  
                            </div>  
                        </div>  
                    </form>  
                </div>
            </div>  
        </div>  
    </div>  

    <div class="modal fade" id="nbbilletcompa" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">  
        <div class="modal-dialog modal-lg" role="document">  
            <div class="modal-content">  
                <div class="modal-header">  
                    <h5 class="modal-title">Ajouter le nombre de billets émis par compagnie aériennes</h5>  
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">  
                        <span aria-hidden="true">&times;</span>  
                    </button>  
                </div>  
                <div class="modal-body">  
                    <form class="modal-form row g-3 needs-validation" action="{{ route('nbbilletcompa.store') }}" method="post" novalidate>  
                        @csrf  
                        <div class="col-12 grid-margin">  
                            <div class="card">  
                                <div class="card-body">  
                                    <div class="card">  
                                        <div class="row">  
                                            <div class="col-md-3">  
                                                <div class="form-group">  
                                                    <label>Air Burkina<span class="text-danger">(*)</span></label>  
                                                    <input  
                                                        id="bil_bf"  
                                                        name="bil_bf"  
                                                        type="number"  
                                                        class="form-control @error('bil_bf') is-invalid @enderror"  
                                                        placeholder="Nombre de billet"  
                                                        required  
                                                    />  
                                                    @error('bil_bf')  
                                                        <div class="invalid-feedback">{{ $message }}</div>  
                                                    @enderror  
                                                </div>  
                                            </div>  
                                            <div class="col-md-3">  
                                                <div class="form-group">  
                                                    <label>Air France<span class="text-danger">(*)</span></label>  
                                                    <input  
                                                        id="bil_fr"  
                                                        name="bil_fr"  
                                                        type="number"  
                                                        class="form-control @error('bil_fr') is-invalid @enderror"  
                                                        placeholder="Nombre de billet"  
                                                        required  
                                                    />  
                                                    @error('bil_fr')  
                                                        <div class="invalid-feedback">{{ $message }}</div>  
                                                    @enderror  
                                                </div>  
                                            </div>  
                                            <div class="col-md-3">  
                                                <div class="form-group">  
                                                    <label>Air Sarada<span class="text-danger">(*)</span></label>  
                                                    <input  
                                                        id="bil_sar"  
                                                        name="bil_sar"  
                                                        type="number"  
                                                        class="form-control @error('bil_sar') is-invalid @enderror"  
                                                        placeholder="Nombre de billet"  
                                                        required  
                                                    />  
                                                    @error('bil_sar')  
                                                        <div class="invalid-feedback">{{ $message }}</div>  
                                                    @enderror  
                                                </div>  
                                            </div>  
                                            <div class="col-md-3">  
                                                <div class="form-group">  
                                                    <label>Air Ivoire<span class="text-danger">(*)</span></label>  
                                                    <input  
                                                        id="bil_ivr"  
                                                        name="bil_ivr"  
                                                        type="number"  
                                                        class="form-control @error('bil_ivr') is-invalid @enderror"  
                                                        placeholder="Nombre de billet"  
                                                        required  
                                                    />  
                                                    @error('bil_ivr')  
                                                        <div class="invalid-feedback">{{ $message }}</div>  
                                                    @enderror  
                                                </div>  
                                            </div>  
                                        </div>  
                                        <div class="row">  
                                            <div class="col-md-3">  
                                                <div class="form-group">  
                                                    <label>Tunis air<span class="text-danger">(*)</span></label>  
                                                    <input  
                                                        id="bil_tun"  
                                                        name="bil_tun"  
                                                        type="number"  
                                                        class="form-control @error('bil_tun') is-invalid @enderror"  
                                                        placeholder="Nombre de billet"  
                                                        required  
                                                    />  
                                                    @error('bil_tun')  
                                                        <div class="invalid-feedback">{{ $message }}</div>  
                                                    @enderror  
                                                </div>  
                                            </div>  
                                            <div class="col-md-3">  
                                                <div class="form-group">  
                                                    <label>Colomb Airlines<span class="text-danger">(*)</span></label>  
                                                    <input  
                                                        id="bil_colm"  
                                                        name="bil_colm"  
                                                        type="number"  
                                                        class="form-control @error('bil_colm') is-invalid @enderror"  
                                                        placeholder="Nombre de billet"  
                                                        required  
                                                    />  
                                                    @error('bil_colm')  
                                                        <div class="invalid-feedback">{{ $message }}</div>  
                                                    @enderror  
                                                </div>  
                                            </div>  
                                            <div class="col-md-3">  
                                                <div class="form-group">  
                                                    <label>Royal Air Maroc<span class="text-danger">(*)</span></label>  
                                                    <input  
                                                        id="bil_roy"  
                                                        name="bil_roy"  
                                                        type="number"  
                                                        class="form-control @error('bil_roy') is-invalid @enderror"  
                                                        placeholder="Nombre de billet"  
                                                        required  
                                                    />  
                                                    @error('bil_roy')  
                                                        <div class="invalid-feedback">{{ $message }}</div>  
                                                    @enderror  
                                                </div>  
                                            </div>  
                                            <div class="col-md-3">  
                                                <div class="form-group">  
                                                    <label>Ethiopian Airlines<span class="text-danger">(*)</span></label>  
                                                    <input  
                                                        id="bil_etio"  
                                                        name="bil_etio"  
                                                        type="number"  
                                                        class="form-control @error('bil_etio') is-invalid @enderror"  
                                                        placeholder="Nombre de billet"  
                                                        required  
                                                    />  
                                                    @error('bil_etio')  
                                                        <div class="invalid-feedback">{{ $message }}</div>  
                                                    @enderror  
                                                </div>  
                                            </div>  
                                        </div>  
                                        <div class="row">  
                                            <div class="col-md-4">  
                                                <div class="form-group">  
                                                    <label>Air Alger<span class="text-danger">(*)</span></label>  
                                                    <input  
                                                        id="bil_alg"  
                                                        name="bil_alg"  
                                                        type="number"  
                                                        class="form-control @error('bil_alg') is-invalid @enderror"  
                                                        placeholder="Nombre de billet"  
                                                        required  
                                                    />  
                                                    @error('bil_alg')  
                                                        <div class="invalid-feedback">{{ $message }}</div>  
                                                    @enderror  
                                                </div>  
                                            </div>  
                                            <div class="col-md-4">  
                                                <div class="form-group">  
                                                    <label>Turkish Airlines<span class="text-danger">(*)</span></label>  
                                                    <input  
                                                        id="bil_tur"  
                                                        name="bil_tur"  
                                                        type="number"  
                                                        class="form-control @error('bil_tur') is-invalid @enderror"  
                                                        placeholder="Nombre de billet"  
                                                        required  
                                                    />  
                                                    @error('bil_tur')  
                                                        <div class="invalid-feedback">{{ $message }}</div>  
                                                    @enderror  
                                                </div>  
                                            </div>  
                                            <div class="col-md-4">  
                                                <div class="form-group">  
                                                    <label>Asky<span class="text-danger">(*)</span></label>  
                                                    <input  
                                                        id="bil_ask"  
                                                        name="bil_ask"  
                                                        type="number"  
                                                        class="form-control @error('bil_ask') is-invalid @enderror"  
                                                        placeholder="Nombre de billet"  
                                                        required  
                                                    />  
                                                    @error('bil_ask')  
                                                        <div class="invalid-feedback">{{ $message }}</div>  
                                                    @enderror  
                                                </div>  
                                            </div>  
                                        </div>  
                                        <div class="row">  
                                            <div class="col-md-6">  
                                                <div class="form-group">  
                                                    <label>Brussels Airlines<span class="text-danger">(*)</span></label>  
                                                    <input  
                                                        id="bil_bru"  
                                                        name="bil_bru"  
                                                        type="number"  
                                                        class="form-control @error('bil_bru') is-invalid @enderror"  
                                                        placeholder="Nombre de billet"  
                                                        required  
                                                    />  
                                                    @error('bil_bru')  
                                                        <div class="invalid-feedback">{{ $message }}</div>  
                                                    @enderror  
                                                </div>  
                                            </div>  
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Autres nbbilletcompas <span class="text-danger">(*)</span></label>
                                                    <input
                                                    id="bil_autr"
                                                    name="bil_autr"
                                                    type="number"
                                                    class="form-control"
                                                    placeholder="Nombre de billet"
                                                    required
                                                    />
                                                    @error('bil_autr')  
                                                        <div class="invalid-feedback">{{ $message }}</div>  
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                        <button type="submit" class="btn btn-primary"><i class="far fa-save"></i> Enregistrer</button>
                                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fermer</button>  
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>  
        </div>  
    </div>  

    <div class="modal fade" id="cabilletteries" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Ajouter chiffre d'affaire billetteries</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="modal-form" action="{{ route('cabilletteries.store') }}" method="post" class="row g-3 needs-validation" novalidate>
                        @csrf
                        <div class="col-12 grid-margin">  
                            <div class="card">  
                                <div class="card-body">  
                                    <div class="card"> 
                                        <div class="row">
                                            <h2>BILLETS IATA <span class="text-danger">(*)</span></h2>
                                            <div class="input-group">
                                                <span class="input-group-text">Fcfa</span>
                                                <input id="ca_bil_iata" name="ca_bil_iata" type="text" class="form-control @error('ca_bil_iata') is-invalid @enderror" value="{{ old('ca_bil_iata') }}" aria-label="Montant Mois 1" required>
                                                @error('ca_bil_iata')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="row">
                                            <h2>AUTRES BILLETS<span class="text-danger">(*)</span></h2>
                                            <div class="input-group">
                                                <span class="input-group-text">Fcfa</span>
                                                <input id="ca_bil_otr" name="ca_bil_otr" type="text" class="form-control @error('ca_bil_otr') is-invalid @enderror" value="{{ old('ca_bil_otr') }}" aria-label="Montant Mois 1" required>
                                                @error('ca_bil_otr')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-center mt-3">
                                        <button type="submit" class="btn btn-primary"><i class="far fa-save"></i> Enregistrer</button>
                                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fermer</button>  
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="activite" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">  
        <div class="modal-dialog modal-lg" role="document">  
            <div class="modal-content">  
                <div class="modal-header">  
                    <h5 class="modal-title">Ajouter de l'activités connexes</h5>  
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">  
                        <span aria-hidden="true">&times;</span>  
                    </button>  
                </div>  
                <div class="modal-body">  
                    <form class="modal-form" action="{{ route('activite.store') }}" method="post" class="row g-3 needs-validation" novalidate>  
                        @csrf  
                        <div class="col-12 grid-margin">  
                            <div class="card">  
                                <div class="card-body">  
                                    <div class="card"> 
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Activités</th>
                                                    <th scope="col">Volume</th>
                                                    <th scope="col">Chiffre d'affaires</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">Conférence, de congrès et autres événements<span class="text-danger">(*)</span></th>
                                                    <td>
                                                        <div class="input-group">
                                                            <span class="input-group-text">Nbr</span>
                                                            <input id="volume_conference" name="volume_conference" type="text" class="form-control @error('volume_conference') is-invalid @enderror" value="{{ old('volume_conference') }}" aria-label="Volume de la conférence" required>
                                                            @error('volume_conference')
                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="input-group">
                                                            <span class="input-group-text">Fcfa</span>
                                                            <input id="chiffre_conference" name="chiffre_conference" type="text" class="form-control @error('chiffre_conference') is-invalid @enderror" value="{{ old('chiffre_conference') }}" aria-label="Montant de la conférence" required>
                                                            @error('chiffre_conference')
                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </td>
                                                
                                                </tr>
                                                <tr>
                                                    <th scope="row">Réservation de chambres hôtels<span class="text-danger">(*)</span></th>
                                                    <td>
                                                        <div class="input-group">
                                                            <span class="input-group-text">Nbr</span>
                                                            <input id="volume_reservation" name="volume_reservation" type="text" class="form-control @error('volume_reservation') is-invalid @enderror" value="{{ old('volume_reservation') }}" aria-label="Nombre de réservation" required>
                                                            @error('volume_reservation')
                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="input-group">
                                                            <span class="input-group-text">Fcfa</span>
                                                            <input id="chiffre_reservation" name="chiffre_reservation" type="text" class="form-control @error('chiffre_reservation') is-invalid @enderror" value="{{ old('chiffre_reservation') }}" aria-label="Montant de réservation" required>
                                                            @error('chiffre_reservation')
                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Location de véhicules<span class="text-danger">(*)</span></th>
                                                    <td>
                                                        <div class="input-group">
                                                            <span class="input-group-text">Nbr</span>
                                                            <input id="volume_location" name="volume_location" type="text" class="form-control @error('volume_location') is-invalid @enderror" value="{{ old('volume_location') }}" aria-label="Volume de Location" required>
                                                            @error('volume_location')
                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="input-group">
                                                            <span class="input-group-text">Fcfa</span>
                                                            <input id="chiffre_location" name="chiffre_location" type="text" class="form-control @error('chiffre_location') is-invalid @enderror" value="{{ old('chiffre_location') }}" aria-label="Montant de Location" required>
                                                            @error('chiffre_location')
                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </td>
                                                
                                                </tr>
                                                <tr>
                                                    <th scope="row">Pèlerinage (nombre de pèlerins)<span class="text-danger">(*)</span></th>
                                                    <td>
                                                        <div class="input-group">
                                                            <span class="input-group-text">Nbr</span>
                                                            <input id="volume_pelerinage" name="volume_pelerinage" type="text" class="form-control @error('volume_pelerinage') is-invalid @enderror" value="{{ old('volume_pelerinage') }}" aria-label="Nombre de pèlerins" required>
                                                            @error('volume_pelerinage')
                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="input-group">
                                                            <span class="input-group-text">Fcfa</span>
                                                            <input id="chiffre_pelerinage" name="chiffre_pelerinage" type="text" class="form-control @error('chiffre_pelerinage') is-invalid @enderror" value="{{ old('chiffre_pelerinage') }}" aria-label="Montant du Pèlerinage" required>
                                                            @error('chiffre_pelerinage')
                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Colonie de Vacances (nombre de colonies)<span class="text-danger">(*)</span></th>
                                                    <td>
                                                        <div class="input-group">
                                                            <span class="input-group-text">Nbr</span>
                                                            <input id="volume_colonie" name="volume_colonie" type="text" class="form-control @error('volume_colonie') is-invalid @enderror" value="{{ old('volume_colonie') }}" aria-label="Nombre de colonies" required>
                                                            @error('volume_colonie')
                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="input-group">
                                                            <span class="input-group-text">Fcfa</span>
                                                            <input id="chiffre_colonie" name="chiffre_colonie" type="text" class="form-control @error('chiffre_colonie') is-invalid @enderror" value="{{ old('chiffre_colonie') }}" aria-label="Montant de la colonie" required>
                                                            @error('chiffre_colonie')
                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </td>
                                                
                                                </tr>
                                                <tr>
                                                    <th scope="row">Billetterie avec d'autres modes de transport<span class="text-danger">(*)</span></th>
                                                    <td>
                                                        <div class="input-group">
                                                            <span class="input-group-text">Nbr</span>
                                                            <input id="volume_billetterie" name="volume_billetterie" type="text" class="form-control @error('volume_billetterie') is-invalid @enderror" value="{{ old('volume_billetterie') }}" aria-label="Nombre de billet" required>
                                                            @error('volume_billetterie')
                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="input-group">
                                                            <span class="input-group-text">Fcfa</span>
                                                            <input id="chiffre_billetterie" name="chiffre_billetterie" type="text" class="form-control @error('chiffre_billetterie') is-invalid @enderror" value="{{ old('chiffre_billetterie') }}" aria-label="Montant Billetterie" required>
                                                            @error('chiffre_billetterie')
                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Autres<span class="text-danger">(*)</span></th>
                                                    <td>
                                                        <div class="input-group">
                                                            <span class="input-group-text">Nbr</span>
                                                            <input id="volume_autres" name="volume_autres" type="text" class="form-control @error('volume_autres') is-invalid @enderror" value="{{ old('volume_autres') }}" aria-label="Volume pour autres" required>
                                                            @error('volume_autres')
                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="input-group">
                                                            <span class="input-group-text">Nbr</span>
                                                            <input id="chiffre_autres" name="chiffre_autres" type="text" class="form-control @error('chiffre_autres') is-invalid @enderror" value="{{ old('chiffre_autres') }}" aria-label="Montant pour autres" required>
                                                            @error('chiffre_autres')
                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </td>
                                                
                                                </tr>
                                            </tbody>
                                        </table> 
                                    </div>
                                    <div class="text-center mt-3">  
                                        <button type="submit" class="btn btn-primary"><i class="far fa-save"></i> Enregistrer</button>  
                                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fermer</button>  
                                    </div>  
                                    
                                </div>  
                            </div>  
                        </div>  
                    </form> 
                </div>
            </div>  
        </div>  
    </div>

    <div class="modal fade" id="emploies" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">  
        <div class="modal-dialog modal-lg" role="document">  
            <div class="modal-content">  
                <div class="modal-header">  
                    <h5 class="modal-title">Ajouter d'emplois</h5>  
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">  
                        <span aria-hidden="true">&times;</span>  
                    </button>  
                </div>  
                <div class="modal-body">  
                    <form class="modal-form" action="{{ route('emploies.store') }}" class="row g-3 needs-validation" method="post" novalidate>
                        @csrf
                        <div class="col-12 grid-margin">  
                            <div class="card">  
                                <div class="card-body">  
                                    <div class="card"> 
                                        <div class="row">
                                            <table class="table table-hover ">
                                                <thead>
                                                    <tr>
                                                        <th scope="col"></th>
                                                        <th scope="col" colspan="2" class="text-center">Nationaux</th>
                                                        <th scope="col" colspan="2" class="text-center">Autres nationalités</th>
                                                    </tr>
                                                    <tr>
                                                        <th scope="col">Catégorie</th>
                                                        <th scope="col">Homme</th>
                                                        <th scope="col">Femme</th>
                                                        <th scope="col">Homme</th>
                                                        <th scope="col">femme</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th scope="row">Cadre supérieur, Ingénieur et assimilé<span class="text-danger">(*)</span></th>
                                                        <td>
                                                            <input value="{{ old('cadrsup_nat_hom') }}" class="form-control @error('cadrsup_nat_hom') is-invalid @enderror" id="cadrsup_nat_hom" name="cadrsup_nat_hom" type="number" class="form-control"required>
                                                            @error('chiffre_autres')
                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                            @enderror
                                                        </td>
                                                        <td>
                                                            <input value="{{ old('cadrsup_nat_fem') }}" class="form-control @error('cadrsup_nat_fem') is-invalid @enderror" id="cadrsup_nat_fem" name="cadrsup_nat_fem" type="number" class="form-control"required>
                                                            @error('chiffre_autres')
                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                            @enderror
                                                        </td>
                                                        <td>
                                                            <input value="{{ old('cadrsup_otrnat_hom') }}" class="form-control @error('cadrsup_otrnat_hom') is-invalid @enderror" id="cadrsup_otrnat_hom" name="cadrsup_otrnat_hom" type="number" class="form-control"required>
                                                            @error('chiffre_autres')
                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                            @enderror
                                                        </td>
                                                        <td>
                                                            <input value="{{ old('cadrsup_otrnat_fem') }}" class="form-control @error('cadrsup_otrnat_fem') is-invalid @enderror" id="cadrsup_otrnat_fem" name="cadrsup_otrnat_fem" type="number" class="form-control"required>
                                                            @error('chiffre_autres')
                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                            @enderror
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Cadre moyenne, Agent de maîtrise<span class="text-danger">(*)</span></th>
                                                        <td>
                                                            <input value="{{ old('cadrmoy_nat_hom') }}" class="form-control @error('cadrmoy_nat_hom') is-invalid @enderror" id="cadrmoy_nat_hom" name="cadrmoy_nat_hom" type="number" class="form-control"required>
                                                            @error('chiffre_autres')
                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                            @enderror
                                                        </td>
                                                        <td>
                                                            <input value="{{ old('cadrmoy_nat_fem') }}" class="form-control @error('cadrmoy_nat_fem') is-invalid @enderror" id="cadrmoy_nat_fem" name="cadrmoy_nat_fem" type="number" class="form-control"required>
                                                            @error('chiffre_autres')
                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                            @enderror
                                                        </td>
                                                        <td>
                                                            <input value="{{ old('cadrmoy_otrnat_hom') }}" class="form-control @error('cadrmoy_otrnat_hom') is-invalid @enderror" id="cadrmoy_otrnat_hom" name="cadrmoy_otrnat_hom" type="number" class="form-control"required>
                                                            @error('chiffre_autres')
                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                            @enderror
                                                        </td>
                                                        <td>
                                                            <input value="{{ old('cadrmoy_otrnat_fem') }}" class="form-control @error('cadrmoy_otrnat_fem') is-invalid @enderror" id="cadrmoy_otrnat_fem" name="cadrmoy_otrnat_fem" type="number" class="form-control"required>
                                                            @error('chiffre_autres')
                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                            @enderror
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Employés/ouvriers<span class="text-danger">(*)</span></th>
                                                        <td>
                                                            <input value="{{ old('emp_nat_hom') }}" class="form-control @error('emp_nat_hom') is-invalid @enderror" id="emp_nat_hom" name="emp_nat_hom" type="number" class="form-control"required>
                                                            @error('chiffre_autres')
                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                            @enderror
                                                        </td>
                                                        <td>
                                                            <input value="{{ old('emp_nat_fem') }}" class="form-control @error('emp_nat_fem') is-invalid @enderror" id="emp_nat_fem" name="emp_nat_fem" type="number" class="form-control"required>
                                                            @error('chiffre_autres')
                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                            @enderror
                                                        </td>
                                                        <td>
                                                            <input value="{{ old('emp_otrnat_hom') }}" class="form-control @error('emp_otrnat_hom') is-invalid @enderror" id="emp_otrnat_hom" name="emp_otrnat_hom" type="number" class="form-control"required>
                                                            @error('chiffre_autres')
                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                            @enderror
                                                        </td>
                                                        <td>
                                                            <input value="{{ old('emp_otrnat_fem') }}" class="form-control @error('emp_otrnat_fem') is-invalid @enderror" id="emp_otrnat_fem" name="emp_otrnat_fem" type="number" class="form-control"required>
                                                            @error('chiffre_autres')
                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                            @enderror
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Manoeuvre<span class="text-danger">(*)</span></th>
                                                        <td>
                                                            <input value="{{ old('man_nat_hom') }}" class="form-control @error('man_nat_hom') is-invalid @enderror" id="man_nat_hom" name="man_nat_hom" type="number" class="form-control"required>
                                                            @error('chiffre_autres')
                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                            @enderror
                                                        </td>
                                                        <td>
                                                            <input value="{{ old('man_nat_fem') }}" class="form-control @error('man_nat_fem') is-invalid @enderror" id="man_nat_fem" name="man_nat_fem" type="number" class="form-control"required>
                                                            @error('chiffre_autres')
                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                            @enderror
                                                        </td>
                                                        <td>
                                                            <input value="{{ old('man_otrnat_hom') }}" class="form-control @error('man_otrnat_hom') is-invalid @enderror" id="man_otrnat_hom" name="man_otrnat_hom" type="number" class="form-control"required>
                                                            @error('chiffre_autres')
                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                            @enderror
                                                        </td>
                                                        <td>
                                                            <input value="{{ old('man_otrnat_fem') }}" class="form-control @error('man_otrnat_fem') is-invalid @enderror" id="man_otrnat_fem" name="man_otrnat_fem" type="number" class="form-control"required>
                                                            @error('chiffre_autres')
                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                            @enderror
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Temporaires/saisonniers<span class="text-danger">(*)</span></th>
                                                        <td>
                                                            <input value="{{ old('tem_nat_hom') }}" class="form-control @error('tem_nat_hom') is-invalid @enderror" id="tem_nat_hom" name="tem_nat_hom" type="number" class="form-control"required>
                                                            @error('chiffre_autres')
                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                            @enderror
                                                        </td>
                                                        <td>
                                                            <input value="{{ old('tem_nat_fem') }}" class="form-control @error('tem_nat_fem') is-invalid @enderror" id="tem_nat_fem" name="tem_nat_fem" type="number" class="form-control"required>
                                                            @error('chiffre_autres')
                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                            @enderror
                                                        </td>
                                                        <td>
                                                            <input value="{{ old('tem_otrnat_hom') }}" class="form-control @error('tem_otrnat_hom') is-invalid @enderror" id="tem_otrnat_hom" name="tem_otrnat_hom" type="number" class="form-control"required>
                                                            @error('chiffre_autres')
                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                            @enderror
                                                        </td>
                                                        <td>
                                                            <input value="{{ old('tem_otrnat_fem') }}" class="form-control @error('tem_otrnat_fem') is-invalid @enderror" id="tem_otrnat_fem" name="tem_otrnat_fem" type="number" class="form-control"required>
                                                            @error('chiffre_autres')
                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                            @enderror
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="text-center mt-4">
                                        <button type="submit" class="btn btn-primary"><i class="far fa-save"></i> Enregistrer</button>
                                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fermer</button>  
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>  
        </div>  
    </div>

    <div class="modal fade" id="zone" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">  
        <div class="modal-dialog modal-lg" role="document">  
            <div class="modal-content">  
                <div class="modal-header">  
                    <h5 class="modal-title">Ajouter un Nouveau Zone de provenance</h5>  
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">  
                        <span aria-hidden="true">&times;</span>  
                    </button>  
                </div>  
                <div class="modal-body">  
                    <form class="modal-form row g-3 needs-validation" action="{{ route('zone.store') }}" method="post" novalidate>  
                        @csrf  
                        <div class="col-12 grid-margin">  
                            <div class="card">  
                                <div class="card-body">  
                                    <div class="card">
                                        <h3 class="card-title">CIRCUITS INTER-ETATS</h3>  
                                        <div class="form-sample">  
                                            <div class="row">  
                                                <h2>Circuit inter-Etat<span class="text-danger">(*)</span></h2>  
                                                <div class="col-md-3 col-lg-3">  
                                                    <div class="mb-3">  
                                                        <input type="number" class="form-control @error('cur_intr_etat_resi_nat') is-invalid @enderror" id="cur_intr_etat_resi_nat" name="cur_intr_etat_resi_nat" placeholder="Résident nationaux" required>  
                                                        @error('cur_intr_etat_resi_nat')  
                                                            <div class="invalid-feedback">{{ $message }}</div>  
                                                        @enderror  
                                                    </div>  
                                                </div>  
                                                <div class="col-md-3 col-lg-3">  
                                                    <div class="mb-3">  
                                                        <input type="number" class="form-control @error('cur_intr_etat_resi_exp') is-invalid @enderror" id="cur_intr_etat_resi_exp" name="cur_intr_etat_resi_exp" placeholder="Résidents expatriées" required>  
                                                        @error('cur_intr_etat_resi_exp')  
                                                            <div class="invalid-feedback">{{ $message }}</div>  
                                                        @enderror  
                                                    </div>  
                                                </div>  
                                                <div class="col-md-3 col-lg-3">  
                                                    <div class="mb-3">  
                                                        <input type="number" class="form-control @error('cur_intr_etat_nonresi_bf') is-invalid @enderror" id="cur_intr_etat_nonresi_bf" name="cur_intr_etat_nonresi_bf" placeholder="Burkinabé" required>  
                                                        @error('cur_intr_etat_nonresi_bf')  
                                                            <div class="invalid-feedback">{{ $message }}</div>  
                                                        @enderror  
                                                    </div>  
                                                </div>  
                                                <div class="col-md-3 col-lg-3">  
                                                    <div class="mb-3">  
                                                        <input type="number" class="form-control @error('cur_intr_etat_nonresi_afr') is-invalid @enderror" id="cur_intr_etat_nonresi_afr" name="cur_intr_etat_nonresi_afr" placeholder="Afrique" required>  
                                                        @error('cur_intr_etat_nonresi_afr')  
                                                            <div class="invalid-feedback">{{ $message }}</div>  
                                                        @enderror  
                                                    </div>  
                                                </div>  
                                                <div class="col-md-3 col-lg-3">  
                                                    <div class="mb-3">  
                                                        <input type="number" class="form-control @error('cur_intr_etat_nonresi_amrq') is-invalid @enderror" id="cur_intr_etat_nonresi_amrq" name="cur_intr_etat_nonresi_amrq" placeholder="Amérique" required>  
                                                        @error('cur_intr_etat_nonresi_amrq')  
                                                            <div class="invalid-feedback">{{ $message }}</div>  
                                                        @enderror  
                                                    </div>  
                                                </div>  
                                                <div class="col-md-3 col-lg-3">  
                                                    <div class="mb-3">  
                                                        <input type="number" class="form-control @error('cur_intr_etat_nonresi_asi') is-invalid @enderror" id="cur_intr_etat_nonresi_asi" name="cur_intr_etat_nonresi_asi" placeholder="Asie-pacifique" required>  
                                                        @error('cur_intr_etat_nonresi_asi')  
                                                            <div class="invalid-feedback">{{ $message }}</div>  
                                                        @enderror  
                                                    </div>  
                                                </div>  
                                                <div class="col-md-3 col-lg-3">  
                                                    <div class="mb-3">  
                                                        <input type="number" class="form-control @error('cur_intr_etat_nonresi_erop') is-invalid @enderror" id="cur_intr_etat_nonresi_erop" name="cur_intr_etat_nonresi_erop" placeholder="Europe" required>  
                                                        @error('cur_intr_etat_nonresi_asi')  
                                                            <div class="invalid-feedback">{{ $message }}</div>  
                                                        @enderror 
                                                    </div>  
                                                </div>  
                                                <div class="col-md-3 col-lg-3">  
                                                    <div class="mb-3">  
                                                        <input type="number" class="form-control @error('cur_intr_etat_otr') is-invalid @enderror" id="cur_intr_etat_otr" name="cur_intr_etat_otr" placeholder="Autres">  
                                                        @error('cur_intr_etat_otr')  
                                                            <div class="invalid-feedback">{{ $message }}</div>  
                                                        @enderror 
                                                    </div>  
                                                </div>  
                                                
                                            </div>   
                                            <hr>  
                                            <div class="row">  
                                                <h2>Circuit interne<span class="text-danger">(*)</span></h2>  
                                                <div class="col-md-3 col-lg-3">  
                                                    <div class="mb-3">  
                                                        <input type="number" class="form-control @error('cur_intr_resi_nat') is-invalid @enderror" id="cur_intr_resi_nat" name="cur_intr_resi_nat" placeholder="Résident nationaux" required>  
                                                        @error('cur_intr_resi_nat')  
                                                            <div class="invalid-feedback">{{ $message }}</div>  
                                                        @enderror  
                                                    </div>  
                                                </div>  
                                                <div class="col-md-3 col-lg-3">  
                                                    <div class="mb-3">  
                                                        <input type="number" class="form-control @error('cur_intr_resi_exp') is-invalid @enderror" id="cur_intr_resi_exp" name="cur_intr_resi_exp" placeholder="Résidents expatriées" required>  
                                                        @error('cur_intr_resi_exp')  
                                                            <div class="invalid-feedback">{{ $message }}</div>  
                                                        @enderror  
                                                    </div>  
                                                </div>  
                                                <div class="col-md-3 col-lg-3">  
                                                    <div class="mb-3">  
                                                        <input type="number" class="form-control @error('cur_intr_nonresi_bf') is-invalid @enderror" id="cur_intr_nonresi_bf" name="cur_intr_nonresi_bf" placeholder="Burkinabé" required>  
                                                        @error('cur_intr_nonresi_bf')  
                                                            <div class="invalid-feedback">{{ $message }}</div>  
                                                        @enderror  
                                                    </div>  
                                                </div>  
                                                <div class="col-md-3 col-lg-3">  
                                                    <div class="mb-3">  
                                                        <input type="number" class="form-control @error('cur_intr_nonresi_afr') is-invalid @enderror" id="cur_intr_nonresi_afr" name="cur_intr_nonresi_afr" placeholder="Afrique" required>  
                                                        @error('cur_intr_nonresi_afr')  
                                                            <div class="invalid-feedback">{{ $message }}</div>  
                                                        @enderror  
                                                    </div>  
                                                </div>  
                                                <div class="col-md-3 col-lg-3">  
                                                    <div class="mb-3">  
                                                        <input type="number" class="form-control @error('cur_intr_nonresi_amrq') is-invalid @enderror" id="cur_intr_nonresi_amrq" name="cur_intr_nonresi_amrq" placeholder="Amérique" required>  
                                                        @error('cur_intr_nonresi_amrq')  
                                                            <div class="invalid-feedback">{{ $message }}</div>  
                                                        @enderror  
                                                    </div>  
                                                </div>  
                                                <div class="col-md-3 col-lg-3">  
                                                    <div class="mb-3">  
                                                        <input type="number" class="form-control @error('cur_intr_nonresi_asi') is-invalid @enderror" id="cur_intr_nonresi_asi" name="cur_intr_nonresi_asi" placeholder="Asie-pacifique" required>  
                                                        @error('cur_intr_nonresi_asi')  
                                                            <div class="invalid-feedback">{{ $message }}</div>  
                                                        @enderror  
                                                    </div>  
                                                </div>  
                                                <div class="col-md-3 col-lg-3">  
                                                    <div class="mb-3">  
                                                        <input type="number" class="form-control @error('cur_intr_nonresi_erop') is-invalid @enderror" id="cur_intr_nonresi_erop" name="cur_intr_nonresi_erop" placeholder="Europe" required>  
                                                        @error('cur_intr_nonresi_asi')  
                                                            <div class="invalid-feedback">{{ $message }}</div>  
                                                        @enderror 
                                                    </div>  
                                                </div>  
                                                <div class="col-md-3 col-lg-3">  
                                                    <div class="mb-3">  
                                                        <input type="number" class="form-control @error('cur_intr_otr') is-invalid @enderror" id="cur_intr_otr" name="cur_intr_otr" placeholder="Autres">  
                                                        @error('cur_intr_otr')  
                                                            <div class="invalid-feedback">{{ $message }}</div>  
                                                        @enderror 
                                                    </div>  
                                                </div>  
                                                
                                            </div>   
                                            <hr> 
                                            <div class="row">  
                                                <h2>Excursions<span class="text-danger">(*)</span></h2>  
                                                <div class="col-md-3 col-lg-3">  
                                                    <div class="mb-3">  
                                                        <input type="number" class="form-control @error('cur_exct_resi_nat') is-invalid @enderror" id="cur_exct_resi_nat" name="cur_exct_resi_nat" placeholder="Résidents nationaux" required>  
                                                        @error('cur_exct_resi_nat')  
                                                            <div class="invalid-feedback">{{ $message }}</div>  
                                                        @enderror  
                                                    </div>  
                                                </div>  
                                                <div class="col-md-3 col-lg-3">  
                                                    <div class="mb-3">  
                                                        <input type="number" class="form-control @error('cur_exct_resi_exp') is-invalid @enderror" id="cur_exct_resi_exp" name="cur_exct_resi_exp" placeholder="Résidents expatriées" required>  
                                                        @error('cur_exct_resi_exp')  
                                                            <div class="invalid-feedback">{{ $message }}</div>  
                                                        @enderror  
                                                    </div>  
                                                </div>  
                                                <div class="col-md-3 col-lg-3">  
                                                    <div class="mb-3">  
                                                        <input type="number" class="form-control @error('cur_exct_nonresi_bf') is-invalid @enderror" id="cur_exct_nonresi_bf" name="cur_exct_nonresi_bf" placeholder="Burkinabé" required>  
                                                        @error('cur_exct_nonresi_bf')  
                                                            <div class="invalid-feedback">{{ $message }}</div>  
                                                        @enderror  
                                                    </div>  
                                                </div>  
                                                <div class="col-md-3 col-lg-3">  
                                                    <div class="mb-3">  
                                                        <input type="number" class="form-control @error('cur_exct_nonresi_afr') is-invalid @enderror" id="cur_exct_nonresi_afr" name="cur_exct_nonresi_afr" placeholder="Afrique" required>  
                                                        @error('cur_exct_nonresi_afr')  
                                                            <div class="invalid-feedback">{{ $message }}</div>  
                                                        @enderror  
                                                    </div>  
                                                </div>  
                                                <div class="col-md-3 col-lg-3">  
                                                    <div class="mb-3">  
                                                        <input type="number" class="form-control @error('cur_exct_nonresi_amrq') is-invalid @enderror" id="cur_exct_nonresi_amrq" name="cur_exct_nonresi_amrq" placeholder="Amérique" required>  
                                                        @error('cur_exct_nonresi_amrq')  
                                                            <div class="invalid-feedback">{{ $message }}</div>  
                                                        @enderror  
                                                    </div>  
                                                </div>  
                                                <div class="col-md-3 col-lg-3">  
                                                    <div class="mb-3">  
                                                        <input type="number" class="form-control @error('cur_exct_nonresi_asi') is-invalid @enderror" id="cur_exct_nonresi_asi" name="cur_exct_nonresi_asi" placeholder="Asie-pacifique" required>  
                                                        @error('cur_exct_nonresi_asi')  
                                                            <div class="invalid-feedback">{{ $message }}</div>  
                                                        @enderror  
                                                    </div>  
                                                </div>  
                                                <div class="col-md-3 col-lg-3">  
                                                    <div class="mb-3">  
                                                        <input type="number" class="form-control @error('cur_exct_nonresi_erop') is-invalid @enderror" id="cur_exct_nonresi_erop" name="cur_exct_nonresi_erop" placeholder="Europe" required>  
                                                        @error('cur_exct_nonresi_erop')  
                                                            <div class="invalid-feedback">{{ $message }}</div>  
                                                        @enderror  
                                                    </div>  
                                                </div>  
                                                <div class="col-md-3 col-lg-3">  
                                                    <div class="mb-3">  
                                                        <input type="number" class="form-control @error('cur_exct_otr') is-invalid @enderror" id="cur_exct_otr" name="cur_exct_otr" placeholder="Autres">  
                                                        @error('cur_exct_otr')  
                                                            <div class="invalid-feedback">{{ $message }}</div>  
                                                        @enderror  
                                                    </div>  
                                                </div>  
                                            </div>   
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12 text-center">  
                                        <button type="submit" class="btn btn-primary"><i class="far fa-save"></i> Enregistrer</button>  
                                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fermer</button>  
                                    </div>  
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>  
        </div>  
    </div> 
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>  
    <script>
        document.addEventListener("DOMContentLoaded", function() {  
            // Sélectionnez tous les formulaires dans les modales  
            const forms = document.querySelectorAll(".modal-form");  
        
            forms.forEach(form => {  
                const modalElementId = form.closest('.modal').id;  
                const modal = new bootstrap.Modal(document.getElementById(modalElementId));  
        
                form.addEventListener('submit', function(event) {  
                    // Effacez toutes les erreurs de validation affichées  
                    const inputs = form.querySelectorAll('input, textarea, select');  
                    let hasErrors = false;  
        
                    inputs.forEach(input => {  
                        // Vérifiez si l'input est requis et si le champ est vide  
                        if (input.required && !input.value) {  
                            input.classList.add('is-invalid'); // Ajoute la classe d'erreur  
                            hasErrors = true;  
                        } else {  
                            input.classList.remove('is-invalid'); // Enlève la classe d'erreur si valide  
                        }  
                    });  
        
                    // Si des erreurs sont présentes, empêchez la soumission du formulaire  
                    if (hasErrors) {  
                        event.preventDefault();  
                        modal.show(); // Montre la modale si elle a des erreurs  
                        alert("Veuillez corriger les erreurs avant de soumettre le formulaire."); // Message d'alerte  
                        return false;  
                    }  
                });  
            });  
        });
    </script> 
@endsection
