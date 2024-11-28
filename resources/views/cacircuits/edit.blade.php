@extends('layouts.app')
@section('contenus')
<div class="container">
    <div class="page-inner">
        <div class="shadow-lg p-3 mb-5 bg-body rounded">
            <div class="text-center">
            <p class="fs-3">CHIFRE AFFAIRE DES CIRCUITS REALISER</p>
            </div>
        </div>
        <form action="{{ route('cacircuits.update',$cacircuit->id) }}" class="row g-3 needs-validation" method="post">
            @csrf
            @method('PUT')
            <div class="col-12 grid-margin">
                <div class="card">
                    <div class="card-body">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Billets émis à partir de agrément IATA</h5>
                                <table class="table table-hover ">
                                    <thead>
                                        <tr>
                                            <th scope="col">Trimestre</th>
                                            <th scope="col">Mois 1</th>
                                            <th scope="col">Mois 2</th>
                                            <th scope="col">Mois 3</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">CIRCUITS INTER-ETATS</th>
                                            <td><input value="{{ $cacircuit->cur_etat_m1 }}" id="cur_etat_m1" name="cur_etat_m1" type="text" class="form-control" /><div class="invalid-feedback">Please provide a valid city.</div></td>
                                            <td><input value="{{ $cacircuit->cur_etat_m2 }}" id="cur_etat_m2" name="cur_etat_m2" type="text" class="form-control" /><div class="invalid-feedback">Please provide a valid city.</div></td>
                                            <td><input value="{{ $cacircuit->cur_etat_m3 }}" id="cur_etat_m3" name="cur_etat_m3" type="text" class="form-control" /><div class="invalid-feedback">Please provide a valid city.</div></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">CIRCUITS INTERNES</th>
                                            <td><input value="{{ $cacircuit->cur_int_m1 }}" id="cur_int_m1" name="cur_int_m1" type="text" class="form-control" /><div class="invalid-feedback">Please provide a valid city.</div></td>
                                            <td><input value="{{ $cacircuit->cur_int_m2 }}" id="cur_int_m2" name="cur_int_m2" type="text" class="form-control" /><div class="invalid-feedback">Please provide a valid city.</div></td>
                                            <td><input value="{{ $cacircuit->cur_int_m3 }}" id="cur_int_m3" name="cur_int_m3" type="text" class="form-control" /><div class="invalid-feedback">Please provide a valid city.</div></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">EXCURSIONS</th>
                                            <td><input value="{{ $cacircuit->cur_excu_m1 }}" id="cur_excu_m1" name="cur_excu_m1" type="text" class="form-control" /><div class="invalid-feedback">Please provide a valid city.</div></td>
                                            <td><input value="{{ $cacircuit->cur_excu_m2 }}" id="cur_excu_m2" name="cur_excu_m2" type="text" class="form-control" /><div class="invalid-feedback">Please provide a valid city.</div></td>
                                            <td><input value="{{ $cacircuit->cur_excu_m3 }}" id="cur_excu_m3" name="cur_excu_m3" type="text" class="form-control" /><div class="invalid-feedback">Please provide a valid city.</div></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                            <button type="submit" class="btn btn-primary"><i class="far fa-save"></i> Enregistrer</button>
                            <a href="{{ route('cacircuits.index') }}" class="btn btn-danger"><i class="fas fa-angle-double-left"></i> Retour</a>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection
