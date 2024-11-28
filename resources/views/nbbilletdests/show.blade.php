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
                                <a href="{{ route('nbbilletdests.index') }}" class="btn btn-danger"><i class="fas fa-angle-double-left"></i> Retour</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Billets émis à partir de agrément IATA</h5>

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
                                                <th scope="row">Afrique</th>
                                                <td>{{ $nbbilletdest->iata_afr_m1 }}</td>
                                                <td>{{ $nbbilletdest->iata_afr_m2 }}</td>
                                                <td>{{ $nbbilletdest->iata_afr_m3 }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Europe</th>
                                                <td>{{ $nbbilletdest->iata_erop_m1 }}</td>
                                                <td>{{ $nbbilletdest->iata_erop_m2 }}</td>
                                                <td>{{ $nbbilletdest->iata_erop_m3 }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Amérique</th>
                                                <td>{{ $nbbilletdest->iata_amrq_m1 }}</td>
                                                <td>{{ $nbbilletdest->iata_amrq_m2 }}</td>
                                                <td>{{ $nbbilletdest->iata_amrq_m3 }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Asie-pacifique</th>
                                                <td>{{ $nbbilletdest->iata_asi_m1 }}</td>
                                                <td>{{ $nbbilletdest->iata_asi_m2 }}</td>
                                                <td>{{ $nbbilletdest->iata_asi_m3 }}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Billets émis auprès des nbbilletdests</h5>

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
                                                <th scope="row">Afrique</th>
                                                <td>{{ $nbbilletdest->autr_afr_m1 }}</td>
                                                <td>{{ $nbbilletdest->autr_afr_m2 }}</td>
                                                <td>{{ $nbbilletdest->autr_afr_m3 }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Europe</th>
                                                <td>{{ $nbbilletdest->autr_erop_m1 }}</td>
                                                <td>{{ $nbbilletdest->autr_erop_m2 }}</td>
                                                <td>{{ $nbbilletdest->autr_erop_m3 }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Amérique</th>
                                                <td>{{ $nbbilletdest->autr_amrq_m1 }}</td>
                                                <td>{{ $nbbilletdest->autr_amrq_m2 }}</td>
                                                <td>{{ $nbbilletdest->autr_amrq_m3 }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Asie-pacifique</th>
                                                <td>{{ $nbbilletdest->autr_asi_m1 }}</td>
                                                <td>{{ $nbbilletdest->autr_asi_m2 }}</td>
                                                <td>{{ $nbbilletdest->autr_asi_m3 }}</td>
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
