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
                                <a href="{{ route('cacircuits.index') }}" class="btn btn-danger"><i class="fas fa-angle-double-left"></i> Retour</a>
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
                                                <th scope="row">CIRCUITS INTER-ETATS	</th>
                                                <td>{{ $cacircuit->cur_etat_m1 }}</td>
                                                <td>{{ $cacircuit->cur_etat_m2 }}</td>
                                                <td>{{ $cacircuit->cur_etat_m3 }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">CIRCUITS INTERNES</th>
                                                <td>{{ $cacircuit->cur_int_m1 }}</td>
                                                <td>{{ $cacircuit->cur_int_m2 }}</td>
                                                <td>{{ $cacircuit->cur_int_m3 }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">EXCURSIONS</th>
                                                <td>{{ $cacircuit->cur_excu_m1 }}</td>
                                                <td>{{ $cacircuit->cur_excu_m2 }}</td>
                                                <td>{{ $cacircuit->cur_excu_m3 }}</td>
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
