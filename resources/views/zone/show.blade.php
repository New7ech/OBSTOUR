@extends('layouts.app')
@section('contenus')
    <div class="container">
        <div class="page-inner">
            <div class="row justify-content-center mt-3">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="float-start">
                                <h4><strong>Information sur les billets emis a destination</strong></h4>
                            </div>
                            <div class="float-end">
                                <a href="{{ route('zone.index') }}" class="btn btn-danger"><i class="fas fa-angle-double-left"></i> Retour</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">CIRCUITS INTER-ETATS</h5>
                                    <table class="table table-hover ">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Mois 1</th>
                                                <th scope="col">Mois 2</th>
                                                <th scope="col">Mois 3</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">Nationaux</th>
                                                <td>{{ $zone->cur_etat_resi_nat_m1 }}</td>
                                                <td>{{ $zone->cur_etat_resi_nat_m2 }}</td>
                                                <td>{{ $zone->cur_etat_resi_nat_m3 }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Expatriées</th>
                                                <td>{{ $zone->cur_etat_resi_exp_m1 }}</td>
                                                <td>{{ $zone->cur_etat_resi_exp_m2 }}</td>
                                                <td>{{ $zone->cur_etat_resi_exp_m3 }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Burkinabé</th>
                                                <td>{{ $zone->cur_etat_nonresi_bf_m1 }}</td>
                                                <td>{{ $zone->cur_etat_nonresi_bf_m2 }}</td>
                                                <td>{{ $zone->cur_etat_nonresi_bf_m3 }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Afrique</th>
                                                <td>{{ $zone->cur_etat_nonresi_afr_m1 }}</td>
                                                <td>{{ $zone->cur_etat_nonresi_afr_m2 }}</td>
                                                <td>{{ $zone->cur_etat_nonresi_afr_m3 }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Amérique</th>
                                                <td>{{ $zone->cur_etat_nonresi_amrq_m1 }}</td>
                                                <td>{{ $zone->cur_etat_nonresi_amrq_m2 }}</td>
                                                <td>{{ $zone->cur_etat_nonresi_amrq_m3 }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Asie-pacifique</th>
                                                <td>{{ $zone->cur_etat_nonresi_asi_m1 }}</td>
                                                <td>{{ $zone->cur_etat_nonresi_asi_m2 }}</td>
                                                <td>{{ $zone->cur_etat_nonresi_asi_m3 }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Europe</th>
                                                <td>{{ $zone->cur_etat_nonresi_erop_m1 }}</td>
                                                <td>{{ $zone->cur_etat_nonresi_erop_m2 }}</td>
                                                <td>{{ $zone->cur_etat_nonresi_erop_m3 }}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">CIRCUITS INTERNES</h5>
                                    <table class="table table-hover ">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Mois 1</th>
                                                <th scope="col">Mois 2</th>
                                                <th scope="col">Mois 3</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">Nationaux</th>
                                                <td>{{ $zone->cur_intr_resi_nat_m1 }}</td>
                                                <td>{{ $zone->cur_intr_resi_nat_m2 }}</td>
                                                <td>{{ $zone->cur_intr_resi_nat_m3 }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Expatriées</th>
                                                <td>{{ $zone->cur_intr_resi_exp_m1 }}</td>
                                                <td>{{ $zone->cur_intr_resi_exp_m2 }}</td>
                                                <td>{{ $zone->cur_intr_resi_exp_m3 }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Burkinabé</th>
                                                <td>{{ $zone->cur_intr_nonresi_bf_m1 }}</td>
                                                <td>{{ $zone->cur_intr_nonresi_bf_m2 }}</td>
                                                <td>{{ $zone->cur_intr_nonresi_bf_m3 }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Afrique</th>
                                                <td>{{ $zone->cur_intr_nonresi_afr_m1 }}</td>
                                                <td>{{ $zone->cur_intr_nonresi_afr_m2 }}</td>
                                                <td>{{ $zone->cur_intr_nonresi_afr_m3 }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Amérique</th>
                                                <td>{{ $zone->cur_intr_nonresi_amrq_m1 }}</td>
                                                <td>{{ $zone->cur_intr_nonresi_amrq_m2 }}</td>
                                                <td>{{ $zone->cur_intr_nonresi_amrq_m3 }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Asie-pacifique</th>
                                                <td>{{ $zone->cur_intr_nonresi_asi_m1 }}</td>
                                                <td>{{ $zone->cur_intr_nonresi_asi_m2 }}</td>
                                                <td>{{ $zone->cur_intr_nonresi_asi_m3 }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Europe</th>
                                                <td>{{ $zone->cur_intr_nonresi_erop_m1 }}</td>
                                                <td>{{ $zone->cur_intr_nonresi_erop_m2 }}</td>
                                                <td>{{ $zone->cur_intr_nonresi_erop_m3 }}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">EXCURSIONS</h5>

                                    <table class="table table-hover ">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Mois 1</th>
                                                <th scope="col">Mois 2</th>
                                                <th scope="col">Mois 3</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">Nationaux</th>
                                                <td>{{ $zone->cur_exct_resi_nat_m1 }}</td>
                                                <td>{{ $zone->cur_exct_resi_nat_m2 }}</td>
                                                <td>{{ $zone->cur_exct_resi_nat_m3 }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Expatriées</th>
                                                <td>{{ $zone->cur_exct_resi_exp_m1 }}</td>
                                                <td>{{ $zone->cur_exct_resi_exp_m2 }}</td>
                                                <td>{{ $zone->cur_exct_resi_exp_m3 }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Burkinabé</th>
                                                <td>{{ $zone->cur_exct_nonresi_bf_m1 }}</td>
                                                <td>{{ $zone->cur_exct_nonresi_bf_m2 }}</td>
                                                <td>{{ $zone->cur_exct_nonresi_bf_m3 }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Afrique</th>
                                                <td>{{ $zone->cur_exct_nonresi_afr_m1 }}</td>
                                                <td>{{ $zone->cur_exct_nonresi_afr_m2 }}</td>
                                                <td>{{ $zone->cur_exct_nonresi_afr_m3 }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Amérique</th>
                                                <td>{{ $zone->cur_exct_nonresi_amrq_m1 }}</td>
                                                <td>{{ $zone->cur_exct_nonresi_amrq_m2 }}</td>
                                                <td>{{ $zone->cur_exct_nonresi_amrq_m3 }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Asie-pacifique</th>
                                                <td>{{ $zone->cur_exct_nonresi_asi_m1 }}</td>
                                                <td>{{ $zone->cur_exct_nonresi_asi_m2 }}</td>
                                                <td>{{ $zone->cur_exct_nonresi_asi_m3 }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Europe</th>
                                                <td>{{ $zone->cur_exct_nonresi_erop_m1 }}</td>
                                                <td>{{ $zone->cur_exct_nonresi_erop_m2 }}</td>
                                                <td>{{ $zone->cur_exct_nonresi_erop_m3 }}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
