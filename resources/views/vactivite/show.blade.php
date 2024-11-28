@extends('layouts.app')
@section('contenus')
    <div class="container">
        <div class="page-inner">
            <div class="row justify-content-center mt-3">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="float-start">
                                <h4><strong>Information sur le volume de l activite</strong></h4>
                            </div>
                            <div class="float-end">
                                <a href="{{ route('vactivite.index') }}" class="btn btn-danger"><i class="fas fa-angle-double-left"></i> Retour</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="card">
                                <div class="card-body">

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
                                                <th scope="row">Nombre de circuits inter-Etats</th>
                                                <td>{{ $vactivite->nbcir_etat_m1 }}</td>
                                                <td>{{ $vactivite->nbcir_etat_m2 }}</td>
                                                <td>{{ $vactivite->nbcir_etat_m3 }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Nombre de touristes inter-Etats</th>
                                                <td>{{ $vactivite->nbtour_etat_m1 }}</td>
                                                <td>{{ $vactivite->nbtour_etat_m2 }}</td>
                                                <td>{{ $vactivite->nbtour_etat_m3 }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Nombre de circuits internes</th>
                                                <td>{{ $vactivite->nbcir_intr_m1 }}</td>
                                                <td>{{ $vactivite->nbcir_intr_m2 }}</td>
                                                <td>{{ $vactivite->nbcir_intr_m3 }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Nombre de touristes internes</th>
                                                <td>{{ $vactivite->nbtour_intr_m1 }}</td>
                                                <td>{{ $vactivite->nbtour_intr_m2 }}</td>
                                                <td>{{ $vactivite->nbtour_intr_m3 }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Nombre d''excursions</th>
                                                <td>{{ $vactivite->nbexcs_exc_m1 }}</td>
                                                <td>{{ $vactivite->nbexcs_exc_m2 }}</td>
                                                <td>{{ $vactivite->nbexcs_exc_m3 }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Nombre d''excursionnistes</th>
                                                <td>{{ $vactivite->nbexcst_exc_m1 }}</td>
                                                <td>{{ $vactivite->nbexcst_exc_m2 }}</td>
                                                <td>{{ $vactivite->nbexcst_exc_m3 }}</td>
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
