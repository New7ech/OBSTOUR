@extends('layouts.app')
@section('contenus')

<div class="container">
    <div class="page-inner">
        <div class="shadow-lg p-3 mb-5 bg-body rounded">
            <div class="text-center">
            <p class="fs-3">VOLUME DE L ACTIVITE</p>
            </div>
        </div>
        <form action="{{ route('nbbilletdests.update', $nbbilletdest->id) }}" class="row g-3 needs-validation" method="post" novalidate>
            @csrf
            @method('PUT')
            <div class="col-12 grid-margin">
                <div class="card">
                    <div class="card-body">
                        <form class="form-sample">
                            <div class="card">
                                <h5 class="card-title">Billets émis à partir de agrément IATA</h5>
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Afrique</th>
                                            <th scope="col">Amérique</th>
                                            <th scope="col">Europe</th>
                                            <th scope="col">Asie</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">Mois 1</th>
                                            <td><input value="{{ $nbbilletdest->iata_afr_m1 }}" id="iata_afr_m1" name="iata_afr_m1" type="text" class="form-control" placeholder="Afrique" /></td>
                                            <td><input value="{{ $nbbilletdest->iata_amrq_m1 }}" id="iata_amrq_m1" name="iata_amrq_m1" type="text" class="form-control" placeholder="Amérique"/></td>
                                            <td><input value="{{ $nbbilletdest->iata_erop_m1 }}" id="iata_erop_m1" name="iata_erop_m1" type="text" class="form-control" placeholder="Europe" /></td>
                                            <td><input value="{{ $nbbilletdest->iata_asi_m1 }}" id="iata_asi_m1" name="iata_asi_m1" type="text" class="form-control" placeholder="Asie-Pacifique"/></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Mois 2</th>
                                            <td><input value="{{ $nbbilletdest->iata_afr_m2 }}" id="iata_afr_m2" name="iata_afr_m2" type="text" class="form-control" placeholder="Afrique" /></td>
                                            <td><input value="{{ $nbbilletdest->iata_amrq_m2 }}" id="iata_amrq_m2" name="iata_amrq_m2" type="text" class="form-control" placeholder="Amérique"/></td>
                                            <td><input value="{{ $nbbilletdest->iata_erop_m2 }}" id="iata_erop_m2" name="iata_erop_m2" type="text" class="form-control" placeholder="Europe" /></td>
                                            <td><input value="{{ $nbbilletdest->iata_asi_m2 }}" id="iata_asi_m2" name="iata_asi_m2" type="text" class="form-control" placeholder="Asie-Pacifique"/></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Mois 3</th>
                                            <td><input value="{{ $nbbilletdest->iata_afr_m3 }}" id="iata_afr_m3" name="iata_afr_m3" type="text" class="form-control" placeholder="Afrique" /></td>
                                            <td><input value="{{ $nbbilletdest->iata_amrq_m3 }}" id="iata_amrq_m3" name="iata_amrq_m3" type="text" class="form-control" placeholder="Amérique"/></td>
                                            <td><input value="{{ $nbbilletdest->iata_erop_m3 }}" id="iata_erop_m3" name="iata_erop_m3" type="text" class="form-control" placeholder="Europe" /></td>
                                            <td><input value="{{ $nbbilletdest->iata_asi_m3 }}" id="iata_asi_m3" name="iata_asi_m3" type="text" class="form-control" placeholder="Asie-Pacifique"/></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="card mt-4">
                                <h5 class="card-title">Billets émis auprès des compagnies</h5>
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Afrique</th>
                                            <th scope="col">Amérique</th>
                                            <th scope="col">Europe</th>
                                            <th scope="col">Asie</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">Mois 1</th>
                                            <td><input value="{{ $nbbilletdest->autr_afr_m1 }}" id="autr_afr_m1" name="autr_afr_m1" type="text" class="form-control" placeholder="Afrique" /></td>
                                            <td><input value="{{ $nbbilletdest->autr_amrq_m1 }}" id="autr_amrq_m1" name="autr_amrq_m1" type="text" class="form-control" placeholder="Amérique"/></td>
                                            <td><input value="{{ $nbbilletdest->autr_erop_m1 }}" id="autr_erop_m1" name="autr_erop_m1" type="text" class="form-control" placeholder="Europe" /></td>
                                            <td><input value="{{ $nbbilletdest->autr_asi_m1 }}" id="autr_asi_m1" name="autr_asi_m1" type="text" class="form-control" placeholder="Asie-Pacifique"/></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Mois 2</th>
                                            <td><input value="{{ $nbbilletdest->autr_afr_m2 }}" id="autr_afr_m2" name="autr_afr_m2" type="text" class="form-control" placeholder="Afrique" /></td>
                                            <td><input value="{{ $nbbilletdest->autr_amrq_m2 }}" id="autr_amrq_m2" name="autr_amrq_m2" type="text" class="form-control" placeholder="Amérique"/></td>
                                            <td><input value="{{ $nbbilletdest->autr_erop_m2 }}" id="autr_erop_m2" name="autr_erop_m2" type="text" class="form-control" placeholder="Europe" /></td>
                                            <td><input value="{{ $nbbilletdest->autr_asi_m2 }}" id="autr_asi_m2" name="autr_asi_m2" type="text" class="form-control" placeholder="Asie-Pacifique"/></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Mois 3</th>
                                            <td><input value="{{ $nbbilletdest->autr_afr_m3 }}" id="autr_afr_m3" name="autr_afr_m3" type="text" class="form-control" placeholder="Afrique" /></td>
                                            <td><input value="{{ $nbbilletdest->autr_amrq_m3 }}" id="autr_amrq_m3" name="autr_amrq_m3" type="text" class="form-control" placeholder="Amérique"/></td>
                                            <td><input value="{{ $nbbilletdest->autr_erop_m3 }}" id="autr_erop_m3" name="autr_erop_m3" type="text" class="form-control" placeholder="Europe" /></td>
                                            <td><input value="{{ $nbbilletdest->autr_asi_m3 }}" id="autr_asi_m3" name="autr_asi_m3" type="text" class="form-control" placeholder="Asie-Pacifique"/></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary" type="submit">Enregistre</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>


@endsection
