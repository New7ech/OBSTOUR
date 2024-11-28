@extends('layouts.app')
@section('contenus')
<div class="container">
    <div class="page-inner">
        <div class="row justify-content-center mt-3">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <div class="float-start">
                            <h4><strong>Informations sur l agence de voyage</strong></h4>
                        </div>
                        <div class="float-end">
                            <a href="{{ route('compagnie.index') }}" class="btn btn-danger"><i class="fas fa-angle-double-left"></i> Retour</a>
                        </div>
                    </div>
                    <div class="card-body">
                            <div class="row">
                                <label for="denomination" class="col-md-4 col-form-label text-md-end text-start"><strong>Dénomination:</strong></label>
                                <div class="col-md-6" style="line-height: 35px;">
                                    {{ $compagnie->denomination }}
                                </div>
                            </div>
                            <div class="row">
                                <label for="tel" class="col-md-4 col-form-label text-md-end text-start"><strong>Tel:</strong></label>
                                <div class="col-md-6" style="line-height: 35px;">
                                    {{ $compagnie->tel }}
                                </div>
                            </div>
                            <div class="row">
                                <label for="categorie" class="col-md-4 col-form-label text-md-end text-start"><strong>Categorie:</strong></label>
                                <div class="col-md-6" style="line-height: 35px;">
                                    {{ $compagnie->categorie }}
                                </div>
                            </div>
                            <div class="row">
                                <label for="site" class="col-md-4 col-form-label text-md-end text-start"><strong>Site:</strong></label>
                                <div class="col-md-6" style="line-height: 35px;">
                                    {{ $compagnie->site }}
                                </div>
                            </div>
                            <div class="row">
                                <label for="addr" class="col-md-4 col-form-label text-md-end text-start"><strong>Adresse:</strong></label>
                                <div class="col-md-6" style="line-height: 35px;">
                                    {{ $compagnie->addr }}
                                </div>
                            </div>
                            <div class="row">
                                <label for="email" class="col-md-4 col-form-label text-md-end text-start"><strong>Email:</strong></label>
                                <div class="col-md-6" style="line-height: 35px;">
                                    {{ $compagnie->email }}
                                </div>
                            </div>
                            <div class="row">
                                <label for="periode" class="col-md-4 col-form-label text-md-end text-start"><strong>Période:</strong></label>
                                <div class="col-md-6" style="line-height: 35px;">
                                    {{ $compagnie->periode }}
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
