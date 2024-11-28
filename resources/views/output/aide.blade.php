@extends('layouts.app')  

@section('contenus')  
<style>  
    .pagination-arrow {  
        font-size: 1.2em; /* Ajustez la taille des flèches ici */  
        margin: 0 10px;   /* Espacement autour des flèches */  
    }  

    .disabled {  
        color: #dd1515; /* Couleur des flèches désactivées */  
        pointer-events: none; /* Désactiver les événements de clic */  
    }  
</style>  

<div class="container">  
    <h2 class="text-center">Enregistrements de <strong>{{ $user->name }}</strong> de la compagnie <strong> {{ $user->compagnie->denomination }}</strong></h2>  
    <div class="card-body">  
        @if ($cacircuits->count() > 0)  
            <div class="card">  
                <div class="card-body">  
                    <h4><strong>Chiffre d'affaires des circuits réalisés</strong></h4>  
                    <table class="table table-hover">  
                        <thead>  
                            <tr>  
                                <th scope="col">#</th>  
                                <th scope="col">Circuits inter-états</th>  
                                <th scope="col">Circuits internes</th>  
                                <th scope="col">Excursions</th>  
                                <th scope="col">Total</th>  
                            </tr>  
                        </thead>  
                        <tbody>  
                            @foreach($cacircuits as $cacircuit)  
                            <tr>  
                                <th scope="row">{{ $cacircuit->mois }}</th>  
                                <td>{{ $cacircuit->ca_cur_int_etat }}</td>  
                                <td>{{ $cacircuit->ca_cur_int }}</td>  
                                <td>{{ $cacircuit->ca_cur_excu }}</td>  
                                <td>{{ ($cacircuit->ca_cur_int_etat + $cacircuit->ca_cur_int + $cacircuit->ca_cur_excu) }}</td>  
                            </tr>  
                            @endforeach  
                        </tbody>  
                    </table>  
                    <div class="d-flex justify-content-between">  
                        <div>  
                            @if ($cacircuits->onFirstPage())  
                                <span class="disabled pagination-arrow">&#10094;</span>  
                            @else  
                                <a href="{{ $cacircuits->previousPageUrl() }}" class="text-dark pagination-arrow">&#10094;</a>  
                            @endif  
                            <span>{{ $cacircuits->currentPage() }} / {{ $cacircuits->lastPage() }}</span>  
                            @if ($cacircuits->hasMorePages())  
                                <a href="{{ $cacircuits->nextPageUrl() }}" class="text-dark pagination-arrow">&#10095;</a>  
                            @else  
                                <span class="disabled pagination-arrow">&#10095;</span>  
                            @endif  
                        </div>  
                    </div>  
                </div>  
            </div>  
        @else  
            <p class="text-danger text-center">Aucun enregistrement de Cacircuits trouvé.</p>  
        @endif  

        @if ($cabilletteries->count() > 0)  
            <div class="card">  
                <div class="card-body">  
                    <h4><strong>Chiffre d'affaires billetterie</strong></h4>  
                    <table class="table table-hover">  
                        <thead>  
                            <tr>  
                                <th scope="col">#</th>  
                                <th scope="col">Billet IATA</th>  
                                <th scope="col">Autre billets</th>  
                                <th scope="col">Total</th>  
                                <th scope="col">Recette</th>  
                            </tr>  
                        </thead>  
                        <tbody>  
                            @foreach($cabilletteries as $cabillettery)  
                            <tr>  
                                <th scope="row">{{ $cabillettery->mois }}</th>  
                                <td>{{ $cabillettery->ca_bil_iata }}</td>  
                                <td>{{ $cabillettery->ca_bil_otr }}</td>  
                                <td>{{ ($cabillettery->ca_bil_iata + $cabillettery->ca_bil_otr) }}</td>  
                            </tr>  
                            @endforeach  
                        </tbody>  
                    </table>  
                    <div class="d-flex justify-content-between">  
                        <div>  
                            @if ($cabilletteries->onFirstPage())  
                                <span class="disabled pagination-arrow">&#10094;</span>  
                            @else  
                                <a href="{{ $cabilletteries->previousPageUrl() }}" class="text-dark pagination-arrow">&#10094;</a>  
                            @endif  
                            <span>{{ $cabilletteries->currentPage() }} / {{ $cabilletteries->lastPage() }}</span>  
                            @if ($cabilletteries->hasMorePages())  
                                <a href="{{ $cabilletteries->nextPageUrl() }}" class="text-dark pagination-arrow">&#10095;</a>  
                            @else  
                                <span class="disabled pagination-arrow">&#10095;</span>  
                            @endif  
                        </div>  
                    </div>  
                </div>  
            </div>  
        @else  
            <p class="text-danger text-center">Aucun enregistrement de Cabilletteries trouvé.</p>  
        @endif  
        @if ($nbbilletcompa->count() > 0) 
        {{-- {{ dd($nbbilletcompa) }}  --}}
            <div class="card">  
                <div class="card-body">  
                    <h4><strong>Nombre de billet émis par compagnie aérienne</strong></h4>  
                    <table class="table table-hover">  
                        <thead>  
                            <tr>  
                                <th scope="col">Compagnie aérienne</th>  
                                <th scope="col">Mois 1</th>  
                                <th scope="col">Total</th>  
                            </tr>  
                        </thead>  
                        <tbody>  
                            @foreach($nbbilletcompa as $nbbilletcompa)  
                            <tr>  
                                <th scope="row">Air Burkina</th>  
                                <td>{{ $nbbilletcompa->bil_bf_m1 }}</td>  
                                <td>{{ ($nbbilletcompa->bil_bf_m1 + $nbbilletcompa->bil_bf_m2 + $nbbilletcompa->bil_bf_m3) }}</td>  
                            </tr>  
                            <tr>  
                                <th scope="row">Air France</th>  
                                <td>{{ $nbbilletcompa->bil_fr_m1 }}</td>  
                                <td>{{ ($nbbilletcompa->bil_fr_m1 + $nbbilletcompa->bil_fr_m2 + $nbbilletcompa->bil_fr_m3) }}</td> 
                            </tr>  
                            <tr>  
                                <th scope="row">Air Sarada</th>  
                                <td>{{ $nbbilletcompa->bil_sar_m1 }}</td>  
                                <td>{{ ($nbbilletcompa->bil_sar_m1 + $nbbilletcompa->bil_sar_m2 + $nbbilletcompa->bil_sar_m3) }}</td>  
                            </tr>  
                            <tr>  
                                <th scope="row">Air Ivoire</th>  
                                <td>{{ $nbbilletcompa->bil_ivr_m1 }}</td>  
                                <td>{{ ($nbbilletcompa->bil_ivr_m1 + $nbbilletcompa->bil_ivr_m2 + $nbbilletcompa->bil_ivr_m3) }}</td> 
                            </tr> 
                            <tr>  
                                <th scope="row">Tunis air</th>  
                                <td>{{ $nbbilletcompa->bil_tun_m1 }}</td>  
                                <td>{{ ($nbbilletcompa->bil_tun_m1 + $nbbilletcompa->bil_tun_m2 + $nbbilletcompa->bil_tun_m3) }}</td> 
                            </tr> 
                            <tr>  
                                <th scope="row">Colomb Airlines</th>  
                                <td>{{ $nbbilletcompa->bil_col_m1 }}</td>  
                                <td>{{ ($nbbilletcompa->bil_col_m1 + $nbbilletcompa->bil_col_m2 + $nbbilletcompa->bil_col_m3) }}</td>  
                            </tr> 
                            <tr>  
                                <th scope="row">Royal Air Maroc</th>  
                                <td>{{ $nbbilletcompa->bil_roy_m1 }}</td>  
                                <td>{{ ($nbbilletcompa->bil_roy_m1 +  $nbbilletcompa->bil_roy_m3) }}</td> 
                            </tr> 
                            <tr>  
                                <th scope="row">Ethiopan Airlinesa</th>  
                                <td>{{ $nbbilletcompa->bil_etio_m1 }}</td>  
                                <td>{{ ($nbbilletcompa->bil_etio_m1 + $nbbilletcompa->bil_etio_m2 + $nbbilletcompa->bil_etio_m3) }}</td>  
                            </tr> 
                            <tr>  
                                <th scope="row">Air Alger</th>  
                                <td>{{ $nbbilletcompa->bil_alg_m1 }}</td>  
                                <td>{{ ($nbbilletcompa->bil_alg_m1 + $nbbilletcompa->bil_alg_m2 + $nbbilletcompa->bil_alg_m3) }}</td>
                            </tr> 
                            <tr>  
                                <th scope="row">Turkish Airlines</th>  
                                <td>{{ $nbbilletcompa->bil_tur_m1 }}</td>  
                                <td>{{ ($nbbilletcompa->bil_tur_m1 + $nbbilletcompa->bil_tur_m2 + $nbbilletcompa->bil_tur_m3) }}</td> 
                            </tr> 
                            <tr>  
                                <th scope="row">Asky</th>  
                                <td>{{ $nbbilletcompa->bil_ask_m1 }}</td>  
                                <td>{{ ($nbbilletcompa->bil_ask_m1 + $nbbilletcompa->bil_ask_m2 + $nbbilletcompa->bil_ask_m3) }}</td> 
                            </tr> 
                            <tr>  
                                <th scope="row">Brussels Airlines</th>  
                                <td>{{ $nbbilletcompa->bil_bru_m1 }}</td>  
                                <td>{{ ($nbbilletcompa->bil_bru_m1 + $nbbilletcompa->bil_bru_m1 + $nbbilletcompa->bil_bru_m1) }}</td>
                            </tr> 
                            <tr>  
                                <th scope="row">Autres nbbilletcompas</th>  
                                <td>{{ $nbbilletcompa->bil_autr_m1 }}</td>  
                                <td>{{ ($nbbilletcompa->bil_autr_m1 + $nbbilletcompa->bil_autr_m2 + $nbbilletcompa->bil_autr_m3) }}</td>
                            </tr> 
                            <tr>  
                                <th scope="row">Total</th>  
                                <td>{{ $nbbilletcompa->bil_bf_m1 + $nbbilletcompa->bil_fr_m1 + $nbbilletcompa->bil_sar_m1
                                + $nbbilletcompa->bil_ivr_m1 + $nbbilletcompa->bil_tun_m1 + $nbbilletcompa->bil_col_m1 +
                                $nbbilletcompa->bil_roy_m1 + $nbbilletcompa->bil_etio_m1 + $nbbilletcompa->bil_alg_m1 +
                                $nbbilletcompa->bil_tur_m1 + $nbbilletcompa->bil_ask_m1 + $nbbilletcompa->bil_bru_m1 + $nbbilletcompa->bil_autr_m1
                                }}</td>  
                                 
                                <td>{{ $nbbilletcompa->bil_bf_m1 + $nbbilletcompa->bil_fr_m1 + $nbbilletcompa->bil_sar_m1
                                    + $nbbilletcompa->bil_ivr_m1 + $nbbilletcompa->bil_tun_m1 + $nbbilletcompa->bil_col_m1 +
                                    $nbbilletcompa->bil_roy_m1 + $nbbilletcompa->bil_etio_m1 + $nbbilletcompa->bil_alg_m1 +
                                    $nbbilletcompa->bil_tur_m1 + $nbbilletcompa->bil_ask_m1 + $nbbilletcompa->bil_bru_m1 + $nbbilletcompa->bil_autr_m1
                                     }}</td>
                            </tr> 
                            @endforeach  
                        </tbody>  
                    </table>  
                    
                </div>  
            </div>  
        @else  
            <p class="text-danger text-center">Aucun enregistrement de nbbilletcompa trouvé.</p>  
        @endif  
        
    </div>  
</div>  

@endsection