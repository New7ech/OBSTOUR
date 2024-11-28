@extends('layouts.app')
@section('contenus')
    <div class="container">
        <div class="page-inner">
            <div class="row justify-content-center mt-3">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="float-start">
                                <h4><strong>Information sur le chiffre d affaire biletterie</strong></h4>
                            </div>
                            <div class="float-end">
                                <a href="{{ route('cabilletteries.index') }}" class="btn btn-danger"><i class="fas fa-angle-double-left"></i> Retour</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <label for="mois1" class="col-md-7 col-form-label text-md-end text-start"><strong>Mois 1:</strong></label>
                                            <div class="col-md-5" style="line-height: 35px;">
                                                {{ $cabillettery->mois1 }}
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label for="bil_iata_m1" class="col-md-7 col-form-label text-md-end text-start"><strong>BILLETS IATA:</strong></label>
                                            <div class="col-md-5" style="line-height: 35px;">
                                                {{ $cabillettery->bil_iata_m1 }}
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label for="bil_otr_m1" class="col-md-7 col-form-label text-md-end text-start"><strong>AUTRE BILLETS:</strong></label>
                                            <div class="col-md-5" style="line-height: 35px;">
                                                {{ $cabillettery->bil_otr_m1 }}
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <label for="mois2" class="col-md-7 col-form-label text-md-end text-start"><strong>Mois 2:</strong></label>
                                            <div class="col-md-5" style="line-height: 35px;">
                                                {{ $cabillettery->mois2 }}
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label for="bil_iata_m2" class="col-md-7 col-form-label text-md-end text-start"><strong>BILLETS IATA:</strong></label>
                                            <div class="col-md-5" style="line-height: 35px;">
                                                {{ $cabillettery->bil_iata_m2 }}
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label for="bil_otr_m2" class="col-md-7 col-form-label text-md-end text-start"><strong>AUTRE BILLETS:</strong></label>
                                            <div class="col-md-5" style="line-height: 35px;">
                                                {{ $cabillettery->bil_otr_m2 }}
                                            </div>
                                        </div>

                                    </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <label for="mois3" class="col-md-7 col-form-label text-md-end text-start"><strong>Mois 3:</strong></label>
                                            <div class="col-md-5" style="line-height: 35px;">
                                                {{ $cabillettery->mois3 }}
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label for="bil_iata_m3" class="col-md-7 col-form-label text-md-end text-start"><strong>BILLETS IATA:</strong></label>
                                            <div class="col-md-5" style="line-height: 35px;">
                                                {{ $cabillettery->bil_iata_m3 }}
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label for="bil_otr_m3" class="col-md-7 col-form-label text-md-end text-start"><strong>AUTRE BILLETS:</strong></label>
                                            <div class="col-md-5" style="line-height: 35px;">
                                                {{ $cabillettery->bil_otr_m3 }}
                                            </div>
                                        </div>


                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
