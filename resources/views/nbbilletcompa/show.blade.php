@extends('layouts.app')
@section('contenus')
    <div class="container">
        <div class="page-inner">
            <div class="row justify-content-center mt-3">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="float-start">
                                <h4><strong>Information sur les billet emis par les compagnies</strong></h4>
                            </div>
                            <div class="float-end">
                                <a href="{{ route('nbbilletcompa.index') }}" class="btn btn-danger"><i class="fas fa-angle-double-left"></i> Retour</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Nombre de billet emis par compagnie</h5>

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
                                                <th scope="row">Air Burkina</th>
                                                <td>{{ $nbbilletcompa->bil_bf_m1 }}</td>
                                                <td>{{ $nbbilletcompa->bil_bf_m2 }}</td>
                                                <td>{{ $nbbilletcompa->bil_bf_m3 }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Air France</th>
                                                <td>{{ $nbbilletcompa->bil_fr_m1 }}</td>
                                                <td>{{ $nbbilletcompa->bil_fr_m2 }}</td>
                                                <td>{{ $nbbilletcompa->bil_fr_m3 }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Air Sarada</th>
                                                <td>{{ $nbbilletcompa->bil_sar_m1 }}</td>
                                                <td>{{ $nbbilletcompa->bil_sar_m2 }}</td>
                                                <td>{{ $nbbilletcompa->bil_sar_m3 }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Air  Ivoire</th>
                                                <td>{{ $nbbilletcompa->bil_ivr_m1 }}</td>
                                                <td>{{ $nbbilletcompa->bil_ivr_m2 }}</td>
                                                <td>{{ $nbbilletcompa->bil_ivr_m3 }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Tunis air</th>
                                                <td>{{ $nbbilletcompa->bil_tun_m1 }}</td>
                                                <td>{{ $nbbilletcompa->bil_tun_m2 }}</td>
                                                <td>{{ $nbbilletcompa->bil_tun_m3 }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Colomb Airlines</th>
                                                <td>{{ $nbbilletcompa->bil_col_m1 }}</td>
                                                <td>{{ $nbbilletcompa->bil_col_m2 }}</td>
                                                <td>{{ $nbbilletcompa->bil_col_m3 }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Royal Air Maroc</th>
                                                <td>{{ $nbbilletcompa->bil_roy_m1 }}</td>
                                                <td>{{ $nbbilletcompa->bil_roy_m2 }}</td>
                                                <td>{{ $nbbilletcompa->bil_roy_m3 }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Ethiopan Airlines</th>
                                                <td>{{ $nbbilletcompa->bil_etio_m1 }}</td>
                                                <td>{{ $nbbilletcompa->bil_etio_m2 }}</td>
                                                <td>{{ $nbbilletcompa->bil_etio_m3 }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Air Alger</th>
                                                <td>{{ $nbbilletcompa->bil_alg_m1 }}</td>
                                                <td>{{ $nbbilletcompa->bil_alg_m2 }}</td>
                                                <td>{{ $nbbilletcompa->bil_alg_m3 }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Turkish Airlines</th>
                                                <td>{{ $nbbilletcompa->bil_tur_m1 }}</td>
                                                <td>{{ $nbbilletcompa->bil_tur_m2 }}</td>
                                                <td>{{ $nbbilletcompa->bil_tur_m3 }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Asky</th>
                                                <td>{{ $nbbilletcompa->bil_ask_m1 }}</td>
                                                <td>{{ $nbbilletcompa->bil_ask_m2 }}</td>
                                                <td>{{ $nbbilletcompa->bil_ask_m3 }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Brussels Airlines</th>
                                                <td>{{ $nbbilletcompa->bil_bru_m1 }}</td>
                                                <td>{{ $nbbilletcompa->bil_bru_m2 }}</td>
                                                <td>{{ $nbbilletcompa->bil_bru_m3 }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Autres compagnies</th>
                                                <td>{{ $nbbilletcompa->bil_autr_m1 }}</td>
                                                <td>{{ $nbbilletcompa->bil_autr_m2 }}</td>
                                                <td>{{ $nbbilletcompa->bil_autr_m3 }}</td>
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
