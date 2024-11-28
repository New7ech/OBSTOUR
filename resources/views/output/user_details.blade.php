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
        @if ($vactivite->count() > 0)  
            <div class="card">  
                <div class="card-body">  
                    <h4><strong>Volume de l'activité</strong></h4>  
                    <table class="table table-bordered table-bordered-bd-warning mt-4">  
                        <thead>  
                            <tr>  
                                <th scope="col">Mois</th>  
                                <th scope="col" colspan="2">Circuits inter-états</th>  
                                <th scope="col" colspan="2">Circuits internes</th>  
                                <th scope="col" colspan="2">Excursions</th>  
                            </tr>  
                            <tr>  
                                <th scope="col">#</th>  
                                <th scope="col">Nombre de circuts</th>  
                                <th scope="col">Nombre de touristes</th>  
                                <th scope="col">Nombre de circuts</th>  
                                <th scope="col">Nombre de touristes</th>  
                                <th scope="col">Nombre d'Excursions</th>  
                                <th scope="col">Nombre d'Excursion</th>  
                            </tr>
                        </thead>  
                        <tbody>  
                            @foreach($vactivite as $vactivite)  
                            <tr>  
                                <th scope="row">{{ $vactivite->mois }}</th>  
                                <td>{{ $vactivite->nbcir_int_etat }}</td>  
                                <td>{{ $vactivite->nbtour_int_etat }}</td>  
                                <td>{{ $vactivite->nbcir_intrn }}</td>  
                                <td>{{ $vactivite->nbtour_intrn }}</td>  
                                <td>{{ $vactivite->nbexcs_exc }}</td>  
                                <td>{{ $vactivite->nbexcst_exc }}</td>  
                            </tr>  
                            @endforeach  
                        </tbody>  
                    </table>  
                </div>  
            </div>  
        @else  
            <p class="text-danger text-center">Aucun enregistrement du volume d'activité trouvé.</p>  
        @endif 

        @if ($cacircuits->count() > 0)  
            <div class="card">  
                <div class="card-body">  
                    <h4><strong>Chiffre d'affaires des circuits réalisés</strong></h4>  
                    <table class="table table-bordered table-bordered-bd-warning mt-4">  
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
                    <table class="table table-bordered table-bordered-bd-warning mt-4">  
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
                    <table class="table table-bordered table-bordered-bd-warning mt-4">  
                        <thead>  
                            
                            <tr>  
                                <th scope="col">Compagnie aérienne</th>  
                                @foreach($nbbilletcompa as $nbbillet)
                                <th scope="col">{{ $nbbillet->mois }}</th>  
                                @endforeach
                                <th scope="col">Total</th>  
                            </tr>  
                            
                        </thead>  
                        <tbody>  
                            <tr>  
                                <th scope="row">Air Burkina</th>  
                                @php   
                                    $totalAirFrance = 0;   
                                @endphp  
                                @foreach($nbbilletcompa as $nbbilletcompa)  
                                    <td>{{ $nbbilletcompa->bil_bf }}</td>  
                                    @php   
                                        $totalAirFrance += $nbbilletcompa->bil_bf;   
                                    @endphp  
                                @endforeach  
                                <td>{{ $totalAirFrance }}</td>  
                            </tr>
                            <tr>  
                                <th scope="row">Air France</th>  
                                <td>{{ $nbbilletcompa->bil_fr }}</td>  
                                <td>{{ ($nbbilletcompa->bil_fr + $nbbilletcompa->bil_fr_m2 + $nbbilletcompa->bil_fr_m3) }}</td> 
                            </tr>
                            <tr>  
                                <th scope="row">Air Sarada</th>  
                                <td>{{ $nbbilletcompa->bil_sar }}</td>  
                                {{-- <td>{{ ($nbbilletcompa->bil_sar + $nbbilletcompa->bil_sar_m2 + $nbbilletcompa->bil_sar_m3) }}</td>   --}}
                            </tr>  
                            <tr>  
                                <th scope="row">Air Ivoire</th>  
                                <td>{{ $nbbilletcompa->bil_ivr }}</td>  
                                {{-- <td>{{ ($nbbilletcompa->bil_ivr + $nbbilletcompa->bil_ivr_m2 + $nbbilletcompa->bil_ivr_m3) }}</td>  --}}
                            </tr> 
                            <tr>  
                                <th scope="row">Tunis air</th>  
                                <td>{{ $nbbilletcompa->bil_tun }}</td>  
                                {{-- <td>{{ ($nbbilletcompa->bil_tun + $nbbilletcompa->bil_tun_m2 + $nbbilletcompa->bil_tun_m3) }}</td>  --}}
                            </tr> 
                            <tr>  
                                <th scope="row">Colomb Airlines</th>  
                                <td>{{ $nbbilletcompa->bil_colm }}</td>  
                                {{-- <td>{{ ($nbbilletcompa->bil_col + $nbbilletcompa->bil_col_m2 + $nbbilletcompa->bil_col_m3) }}</td>   --}}
                            </tr> 
                            <tr>  
                                <th scope="row">Royal Air Maroc</th>  
                                <td>{{ $nbbilletcompa->bil_roy }}</td>  
                                {{-- <td>{{ ($nbbilletcompa->bil_roy +  $nbbilletcompa->bil_roy_m3) }}</td>  --}}
                            </tr> 
                            <tr>  
                                <th scope="row">Ethiopan Airlinesa</th>  
                                <td>{{ $nbbilletcompa->bil_etio }}</td>  
                                {{-- <td>{{ ($nbbilletcompa->bil_etio + $nbbilletcompa->bil_etio_m2 + $nbbilletcompa->bil_etio_m3) }}</td>   --}}
                            </tr> 
                            <tr>  
                                <th scope="row">Air Alger</th>  
                                <td>{{ $nbbilletcompa->bil_alg }}</td>  
                                {{-- <td>{{ ($nbbilletcompa->bil_alg + $nbbilletcompa->bil_alg_m2 + $nbbilletcompa->bil_alg_m3) }}</td> --}}
                            </tr> 
                            <tr>  
                                <th scope="row">Turkish Airlines</th>  
                                <td>{{ $nbbilletcompa->bil_tur }}</td>  
                                {{-- <td>{{ ($nbbilletcompa->bil_tur + $nbbilletcompa->bil_tur_m2 + $nbbilletcompa->bil_tur_m3) }}</td>  --}}
                            </tr> 
                            <tr>  
                                <th scope="row">Asky</th>  
                                <td>{{ $nbbilletcompa->bil_ask }}</td>  
                                {{-- <td>{{ ($nbbilletcompa->bil_ask + $nbbilletcompa->bil_ask_m2 + $nbbilletcompa->bil_ask_m3) }}</td>  --}}
                            </tr> 
                            <tr>  
                                <th scope="row">Brussels Airlines</th>  
                                <td>{{ $nbbilletcompa->bil_bru }}</td>  
                                {{-- <td>{{ ($nbbilletcompa->bil_bru + $nbbilletcompa->bil_bru + $nbbilletcompa->bil_bru) }}</td> --}}
                            </tr> 
                            <tr>  
                                <th scope="row">Autres nbbilletcompas</th>  
                                <td>{{ $nbbilletcompa->bil_autr }}</td>  
                                {{-- <td>{{ ($nbbilletcompa->bil_autr + $nbbilletcompa->bil_autr_m2 + $nbbilletcompa->bil_autr_m3) }}</td> --}}
                            </tr> 
                            <tr>  
                                <th scope="row">Total</th>  
                                <td>{{ $nbbilletcompa->bil_bf + $nbbilletcompa->bil_fr + $nbbilletcompa->bil_sar
                                {{-- + $nbbilletcompa->bil_ivr + $nbbilletcompa->bil_tun + $nbbilletcompa->bil_col +
                                $nbbilletcompa->bil_roy + $nbbilletcompa->bil_etio + $nbbilletcompa->bil_alg +
                                $nbbilletcompa->bil_tur + $nbbilletcompa->bil_ask + $nbbilletcompa->bil_bru + $nbbilletcompa->bil_autr --}}
                                }}</td>  
                                 
                                <td>{{ $nbbilletcompa->bil_bf + $nbbilletcompa->bil_fr + $nbbilletcompa->bil_sar
                                    {{-- + $nbbilletcompa->bil_ivr + $nbbilletcompa->bil_tun + $nbbilletcompa->bil_col +
                                    $nbbilletcompa->bil_roy + $nbbilletcompa->bil_etio + $nbbilletcompa->bil_alg +
                                    $nbbilletcompa->bil_tur + $nbbilletcompa->bil_ask + $nbbilletcompa->bil_bru + $nbbilletcompa->bil_autr --}}
                                     }}</td>
                            </tr> 
                            {{-- @endforeach   --}}
                        </tbody>  
                    </table>  
                </div>  
            </div>  
        @else  
            <p class="text-danger text-center">Aucun enregistrement de nbbilletcompa trouvé.</p>  
        @endif  

        @if ($emploi->count() > 0) 
        {{-- {{ dd($nbbilletcompa) }}  --}}
            <div class="card">  
                <div class="card-body">  
                    <h4><strong>Emploie</strong></h4>
                    <table class="table table-bordered table-bordered-bd-warning mt-4">  
                        <thead>  
                            <tr>  
                                <th>Catégorie socio-professionnelle</th>  
                                <th colspan="3">Nationaux</th>  
                                <th colspan="3">Autres nationalités</th>  
                            </tr>  
                            <tr>  
                                <th></th>  
                                <th>Homme</th>  
                                <th>Femme</th>  
                                <th>Ensemble</th>  
                                <th>Homme</th>  
                                <th>Femme</th>  
                                <th>Ensemble</th>  
                            </tr>  
                        </thead>  
                        <tbody>  
                            @foreach($emploi as $emploi)  
                                <tr>  
                                    <td>Cadre supérieur, Ingénieur et assimilé</td>  
                                    <td>{{ $emploi->cadrsup_nat_hom }}</td>  
                                    <td>{{ $emploi->cadrsup_nat_fem }}</td>  
                                    <td>{{ $emploi->cadrsup_nat_hom + $emploi->cadrsup_nat_fem }}</td>  
                                    <td>{{ $emploi->cadrsup_otrnat_hom }}</td>  
                                    <td>{{ $emploi->cadrsup_otrnat_fem }}</td>  
                                    <td>{{ $emploi->cadrsup_otrnat_hom + $emploi->cadrsup_otrnat_fem }}</td>  
                                </tr>  
                                <tr>  
                                    <td>Cadre moyen, Agent de maîtrise</td>  
                                    <td>{{ $emploi->cadrmoy_nat_hom }}</td>  
                                    <td>{{ $emploi->cadrmoy_nat_fem }}</td>  
                                    <td>{{ $emploi->cadrmoy_nat_hom + $emploi->cadrmoy_nat_fem }}</td>  
                                    <td>{{ $emploi->cadrmoy_otrnat_hom }}</td>  
                                    <td>{{ $emploi->cadrmoy_otrnat_fem }}</td>  
                                    <td>{{ $emploi->cadrmoy_otrnat_hom + $emploi->cadrmoy_otrnat_fem }}</td>  
                                </tr>  
                                <tr>  
                                    <td>Employés/ouvriers</td>  
                                    <td>{{ $emploi->emp_nat_hom }}</td>  
                                    <td>{{ $emploi->emp_nat_fem }}</td>  
                                    <td>{{ $emploi->emp_nat_hom + $emploi->emp_nat_fem }}</td>  
                                    <td>{{ $emploi->emp_otrnat_hom }}</td>  
                                    <td>{{ $emploi->emp_otrnat_fem }}</td>  
                                    <td>{{ $emploi->emp_otrnat_hom + $emploi->emp_otrnat_fem }}</td>  
                                </tr>  
                                <tr>  
                                    <td>Manœuvre</td>  
                                    <td>{{ $emploi->man_nat_hom }}</td>  
                                    <td>{{ $emploi->man_nat_fem }}</td>  
                                    <td>{{ $emploi->man_nat_hom + $emploi->man_nat_fem }}</td>  
                                    <td>{{ $emploi->man_otrnat_hom }}</td>  
                                    <td>{{ $emploi->man_otrnat_fem }}</td>  
                                    <td>{{ $emploi->man_otrnat_hom + $emploi->man_otrnat_fem }}</td>  
                                </tr>  
                                <tr>  
                                    <td>Temporaires/saisonniers</td>  
                                    <td>{{ $emploi->tem_nat_hom }}</td>  
                                    <td>{{ $emploi->tem_nat_fem }}</td>  
                                    <td>{{ $emploi->tem_nat_hom + $emploi->tem_nat_fem }}</td>  
                                    <td>{{ $emploi->tem_otrnat_hom }}</td>  
                                    <td>{{ $emploi->tem_otrnat_fem }}</td>  
                                    <td>{{ $emploi->tem_otrnat_hom + $emploi->tem_otrnat_fem }}</td>  
                                </tr>  
                            @endforeach  
                            <tr>  
                                <td><strong>Ensemble</strong></td>  
                                <td>{{ $emploi->cadrsup_nat_hom + $emploi->cadrmoy_nat_hom + $emploi->emp_nat_hom + $emploi->man_nat_hom +$emploi->tem_nat_hom }}</td>  
                                <td>{{ $emploi->cadrsup_nat_fem + $emploi->cadrmoy_nat_fem + $emploi->emp_nat_fem + $emploi->man_nat_fem +$emploi->tem_nat_fem }}</td>  
                                <td>{{ $emploi->cadrsup_nat_hom + $emploi->cadrmoy_nat_hom + $emploi->emp_nat_hom + $emploi->man_nat_hom +$emploi->tem_nat_hom
                                        + $emploi->cadrsup_nat_fem + $emploi->cadrmoy_nat_fem + $emploi->emp_nat_fem + $emploi->man_nat_fem +$emploi->tem_nat_fem }}</td>  
                                <td>{{ $emploi->cadrsup_otrnat_hom + $emploi->cadrmoy_otrnat_hom + $emploi->emp_otrnat_hom + $emploi->man_otrnat_hom +$emploi->tem_otrnat_hom }}</td>  
                                <td>{{ $emploi->cadrsup_otrnat_fem + $emploi->cadrmoy_otrnat_fem + $emploi->emp_otrnat_fem + $emploi->man_otrnat_fem +$emploi->tem_otrnat_fem }}</td>  
                                  
                                <td>{{ $emploi->cadrsup_otrnat_hom + $emploi->cadrmoy_otrnat_hom + $emploi->emp_otrnat_hom + $emploi->man_otrnat_hom +$emploi->tem_otrnat_hom
                                        + $emploi->cadrsup_otrnat_fem + $emploi->cadrmoy_otrnat_fem + $emploi->emp_otrnat_fem + $emploi->man_otrnat_fem +$emploi->tem_otrnat_fem }}</td>  
                            </tr>  
                        </tbody>  
                    </table>  
                </div>  
            </div>  
        @else  
            <p class="text-danger text-center">Aucun enregistrement des emploiés trouvé.</p>  
        @endif
        
    </div>  
</div>  

@endsection