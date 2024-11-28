@extends('layouts.app')
@section('contenus')
    <div class="container">
        <div class="page-inner">
            <div class="row justify-content-center mt-3">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="float-start">
                                <h4><strong>Information sur les enregistrements</strong></h4>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="card">
                                <div class="card-body">
                                    <h4><strong> Barometre trimestriel</strong></h4>
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col" colspan="2">Billetterie</th>
                                                <th scope="col" colspan="2">Circuits</th>
                                                <th scope="col">Activités</th>
                                                <th scope="col" colspan="2">PREVISIONS</th>
                                                <th scope="col" colspan="2">OPINIONS</th>
                                                <th scope="col">Date</th>
                                            </tr>

                                        </thead>
                                        <tbody>
                                            @forelse ($barometre as $barometre)
                                            <tr>
                                                <th scope="row">{{ $loop->iteration }}</th>
                                                <td>{{ $barometre->billetterie_nombre }}</td>
                                                <td>{{ $barometre->billetterie_ca }}</td>
                                                <td>{{ $barometre->circuit_nombre }}</td>
                                                <td>{{ $barometre->circuit_ca }}</td>
                                                <td>{{ $barometre->activites_connexes_ca }}</td>
                                                <td>{{ $barometre->prevision_ca_global }}</td>
                                                <td>{{ $barometre->prevision_emplois }}</td>
                                                <td>{{ $barometre->sondage_climat_affaires }}</td>
                                                <td>{{ $barometre->sondage_nombre_billets }}</td>
                                                <td>
                                                    {{ \Carbon\Carbon::parse($barometre->created_at)->format('d/m/Y') }}
                                                </td>
                                            </tr>
                                            @empty
                                            <tr>
                                                <td colspan="5">
                                                    <span class="text-danger">
                                                        <strong>Le volume du baromètre n existe pas!</strong>
                                                    </span>
                                                </td>
                                            </tr>
                                            @endforelse
                                        </tbody>
                                    </table>
                                    {{-- {{ $barometre->links() }} --}}
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <h4><strong>Volume de l'activite</strong></h4>
                                    <table class="table table-bordered table-bordered-bd-warning mt-4">  
                                        <thead>  
                                            <tr>  
                                                <th scope="col">Mois</th>  
                                                <th scope="col" colspan="2">Circuits inter-états</th>  
                                                <th scope="col" colspan="2">Circuits internes</th>  
                                                <th scope="col" colspan="2">Excursions</th>  
                                                <th scope="col">Date</th>  
                                            </tr>  
                                            <tr>  
                                                <th scope="col">#</th>  
                                                <th scope="col">Nombre de circuts</th>  
                                                <th scope="col">Nombre de touristes</th>  
                                                <th scope="col">Nombre de circuts</th>  
                                                <th scope="col">Nombre de touristes</th>  
                                                <th scope="col">Nombre d'Excursions</th>  
                                                <th scope="col">Nombre d'Excursionniste</th>  
                                                <th scope="col">#</th>  
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
                                                <td>
                                                    {{ \Carbon\Carbon::parse($vactivite->created_at)->format('d/m/Y') }}
                                                </td>  
                                            </tr>  
                                            @endforeach  
                                        </tbody>  
                                    </table> 
                                    {{-- {{ $vactivite->links() }} --}}
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <h4><strong>Chiffre d'affaires des circuites réalisés</strong></h4>
                                    <table class="table table-bordered table-bordered-bd-warning mt-4">  
                                        <thead>  
                                            <tr>  
                                                <th scope="col">#</th>  
                                                <th scope="col">Circuits inter-états</th>  
                                                <th scope="col">Circuits internes</th>  
                                                <th scope="col">Excursions</th>  
                                                <th scope="col">Total</th>  
                                                <th scope="col">Date</th>  
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
                                                <td>
                                                    {{ \Carbon\Carbon::parse($cacircuit->created_at)->format('d/m/Y') }}
                                                </td>
                                            </tr>  
                                            @endforeach  
                                        </tbody>  
                                    </table>
                                    {{-- {{ $cacircuits->links() }} --}}
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <h4><strong>Zones de provenance des touristes ayant participé à vos circuits</strong></h4>
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col"colspan="3">Circuits inter-Etats</th>
                                                <th scope="col"colspan="3">Circuits internes</th>
                                                <th scope="col"colspan="3">Excursions</th>
                                                <th scope="col"colspan="3">Date</th>
                                            </tr>

                                        </thead>
                                        <tbody>
                                            @forelse ($zone as $zone)
                                            <tr>
                                                <th scope="row">{{ $loop->iteration }}</th>
                                                <td>{{ $zone->cur_etat_resi_nat_m1 }}</td>
                                                <td>{{ $zone->cur_etat_resi_nat_m2 }}</td>
                                                <td>{{ $zone->cur_etat_resi_nat_m3 }}</td>
                                                <td>{{ $zone->cur_etat_nonresi_bf_m1 }}</td>
                                                <td>{{ $zone->cur_etat_nonresi_bf_m2 }}</td>
                                                <td>{{ $zone->cur_etat_nonresi_bf_m3 }}</td>
                                                <td>{{ $zone->cur_etat_nonresi_afr_m1 }}</td>
                                                <td>{{ $zone->cur_etat_nonresi_afr_m2 }}</td>
                                                <td>{{ $zone->cur_etat_nonresi_afr_m3 }}</td>
                                                <td>
                                                    {{ \Carbon\Carbon::parse($zone->created_at)->format('d/m/Y') }}
                                                </td>
                                            </tr>
                                            @empty
                                            <tr>
                                                <td colspan="5">
                                                    <span class="text-danger">
                                                        <strong>Le volume du baromètre n existe pas!</strong>
                                                    </span>
                                                </td>
                                            </tr>
                                            @endforelse
                                        </tbody>
                                    </table>
                                    {{-- {{ $zone->links() }} --}}
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <h4><strong>Nombre de billets emis à destination des continents</strong></h4>
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col" colspan="4">Billet agrément IATA</th>
                                                <th scope="col" colspan="4">Billets émis auprès</th>
                                                <th scope="col">Date</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($nbbilletdests as $nbbilletdests)
                                            <tr>
                                                <th scope="row">{{ $loop->iteration }}</th>
                                                <td>{{ $nbbilletdests->iata_erop_m1 }}</td>
                                                <td>{{ $nbbilletdests->iata_afr_m1 }}</td>
                                                <td>{{ $nbbilletdests->iata_amrq_m1 }}</td>
                                                <td>{{ $nbbilletdests->iata_asi_m1 }}</td>
                                                <td>{{ $nbbilletdests->autr_erop_m1 }}</td>
                                                <td>{{ $nbbilletdests->autr_afr_m1 }}</td>
                                                <td>{{ $nbbilletdests->autr_amrq_m1 }}</td>
                                                <td>{{ $nbbilletdests->autr_asi_m1 }}</td>
                                                <td>
                                                    {{ \Carbon\Carbon::parse($nbbilletdests->created_at)->format('d/m/Y') }}
                                                </td>
                                            </tr>
                                            @empty
                                            <tr>
                                                <td colspan="5">
                                                    <span class="text-danger">
                                                        <strong>Le volume du baromètre n existe pas!</strong>
                                                    </span>
                                                </td>
                                            </tr>
                                            @endforelse
                                        </tbody>
                                    </table>
                                    {{-- {{ $nbbilletdests->links() }} --}}
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <h4><strong>Nombre de Billets émis par compagnies aeriennes</strong></h4>
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col"colspan="3">Air Burkina</th>
                                                <th scope="col"colspan="3">Air France</th>
                                                <th scope="col"colspan="3">Air Ivoire</th>
                                                <th scope="col">Date</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($billetsaerienne as $billetsaerienne)
                                            <tr>
                                                <th scope="row">{{ $loop->iteration }}</th>
                                                <td>{{ $billetsaerienne->bil_bf_m1 }}</td>
                                                <td>{{ $billetsaerienne->bil_bf_m2 }}</td>
                                                <td>{{ $billetsaerienne->bil_bf_m3 }}</td>
                                                <td>{{ $billetsaerienne->bil_fr_m1 }}</td>
                                                <td>{{ $billetsaerienne->bil_fr_m2 }}</td>
                                                <td>{{ $billetsaerienne->bil_fr_m3 }}</td>
                                                <td>{{ $billetsaerienne->bil_ivr_m1 }}</td>
                                                <td>{{ $billetsaerienne->bil_ivr_m2 }}</td>
                                                <td>{{ $billetsaerienne->bil_ivr_m3 }}</td>
                                                <td>
                                                    {{ \Carbon\Carbon::parse($billetsaerienne->created_at)->format('d/m/Y') }}
                                                </td>
                                            </tr>
                                            @empty
                                            <tr>
                                                <td colspan="5">
                                                    <span class="text-danger">
                                                        <strong>Le volume du baromètre n existe pas!</strong>
                                                    </span>
                                                </td>
                                            </tr>
                                            @endforelse
                                        </tbody>
                                    </table>
                                    {{-- {{ $billetsaerienne->links() }} --}}
                                </div>
                            </div>
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
                                                <th scope="col">Date</th>  
                                            </tr>  
                                        </thead>  
                                        <tbody>  
                                            @foreach($cabilletteries as $cabillettery)  
                                            <tr>  
                                                <th scope="row">{{ $cabillettery->mois }}</th>  
                                                <td>{{ $cabillettery->ca_bil_iata }}</td>  
                                                <td>{{ $cabillettery->ca_bil_otr }}</td>  
                                                <td>{{ ($cabillettery->ca_bil_iata + $cabillettery->ca_bil_otr) }}</td> 
                                                <td>formule ?</td>
                                                <td>
                                                    {{ \Carbon\Carbon::parse($cabillettery->created_at)->format('d/m/Y') }}
                                                </td>
                                            </tr>  
                                            @endforeach  
                                        </tbody>  
                                    </table>
                                    {{-- {{ $cabilletteries->links() }} --}}
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <h4><strong>Activités connexe</strong></h4>
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col"colspan="3">Circuits inter-Etats</th>
                                                <th scope="col"colspan="3">Circuits internes</th>
                                                <th scope="col"colspan="3">Excursions</th>
                                                <th scope="col">Date</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($activite as $activite)
                                            <tr>
                                                <th scope="row">{{ $loop->iteration }}</th>
                                                <td>{{ $activite->nb_circuits_etat_m1 }}</td>
                                                <td>{{ $activite->nb_circuits_etat_m2 }}</td>
                                                <td>{{ $activite->nb_circuits_etat_m3 }}</td>
                                                <td>{{ $activite->nb_touriste_inter_m1 }}</td>
                                                <td>{{ $activite->nb_touriste_inter_m2 }}</td>
                                                <td>{{ $activite->nb_touriste_inter_m3 }}</td>
                                                <td>{{ $activite->nb_excursion_excu_m1 }}</td>
                                                <td>{{ $activite->nb_excursion_excu_m2 }}</td>
                                                <td>{{ $activite->nb_excursion_excu_m3 }}</td>
                                                <td>
                                                    {{ \Carbon\Carbon::parse($activite->created_at)->format('d/m/Y') }}
                                                </td>
                                            </tr>
                                            @empty
                                            <tr>
                                                <td colspan="5">
                                                    <span class="text-danger">
                                                        <strong>Le volume du baromètre n existe pas!</strong>
                                                    </span>
                                                </td>
                                            </tr>
                                            @endforelse
                                        </tbody>
                                    </table>
                                    {{-- {{ $activite->links() }} --}}
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <h4><strong>Emploi</strong></h4>
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
                                    {{-- {{ $activite->links() }} --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
