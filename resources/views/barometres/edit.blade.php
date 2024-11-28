@extends('layouts.app')
@section('contenus')
<div class="container">
    <div class="page-inner">
        <div class="shadow-lg p-3 mb-5 bg-body rounded">
            <div class="text-center">
                <p class="fs-3">Baromètre trimestriel du tourisme</p>
            </div>
        </div>
        <form action="{{ route('barometres.update', $barometre->id) }}" class="row g-3 needs-validation" method="post">
            @csrf
            @method('PUT')
            <div class="col-12 grid-margin">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-header">RESULTAT D’EXPLOITATION</h2>
                        <div class="row">
                            <div class="col-md-3">
                                <br/>
                                <h4 class="text-center">Billetterie</h4>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group row">
                                    <div class="form-group form-group-default">
                                        <label>Nombre</label>
                                        <input id="billetterie_nombre" name="billetterie_nombre" type="text" class="form-control" value="{{ $barometre->billetterie_nombre }}" placeholder="Nombre" />
                                        <div class="invalid-feedback">Please provide a valid city.</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group row">
                                    <div class="form-group form-group-default">
                                        <label>Chiffre affaires</label>
                                        <input id="billetterie_ca" name="billetterie_ca" type="text" class="form-control" value="{{ $barometre->billetterie_ca }}" placeholder="Chiffre affaires" />
                                        <div class="invalid-feedback">Please provide a valid city.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <br/>
                                <div class="invalid-feedback">Please provide a valid city.</div>
                                <h4 class="text-center">Circuits</h4>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group row">
                                    <div class="form-group form-group-default">
                                        <label>Nombre</label>
                                        <input id="circuit_nombre" name="circuit_nombre" type="text" class="form-control" value="{{ $barometre->circuit_nombre }}" placeholder="Nombre" />
                                        <div class="invalid-feedback">Please provide a valid city.</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group row">
                                    <div class="form-group form-group-default">
                                        <label>Chiffre affaires</label>
                                        <input id="circuit_ca" name="circuit_ca" type="text" class="form-control" value="{{ $barometre->circuit_ca }}" placeholder="Chiffre affaires" />
                                        <div class="invalid-feedback">Please provide a valid city.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <br/>
                                <div class="invalid-feedback">Please provide a valid city.</div>
                                <h4 class="text-center">Activités connexes</h4>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <div class="form-group form-group-default">
                                        <label>Chiffre affaires</label>
                                        <input id="activites_connexes_ca" name="activites_connexes_ca" type="text" class="form-control" value="{{ $barometre->activites_connexes_ca }}" placeholder="Chiffre affaires" />
                                        <div class="invalid-feedback">Please provide a valid city.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                    <div class="row">
                        <div class="col-md-6 grid-margin stretch-card">
                            <h4 class="card-title">PREVISIONS POUR LE 1er TRIMESTRE SUIVANTE</h4>
                            <div class="row">
                                <label class="col-sm-5 col-form-label">Le climat des affaires</label>
                                <div class="col-sm-7">
                                    <select
                                    name="prevision_climat_affaires"
                                    id="prevision_climat_affaires"
                                    class="form-select">
                                        <option>{{ $barometre->prevision_climat_affaires }}</option>
                                        <option value="Amélioration">Amélioration</option>
                                        <option value="Stabilité">Stabilité</option>
                                        <option value="Dégradation">Dégradation</option>
                                    </select>
                                    <div class="invalid-feedback">Please provide a valid city.</div>
                                </div>
                                <label class="col-sm-5 col-form-label">Le chiffre d’affaires global</label>
                                <div class="col-sm-7">
                                    <select
                                    name="prevision_ca_global"
                                    id="prevision_ca_global"
                                    class="form-select">
                                        <option>{{ $barometre->prevision_ca_global }}</option>
                                        <option value="Hausse ">Hausse</option>
                                        <option value="Stable">Stable</option>
                                        <option value="Baisse">Baisse</option>
                                    </select>
                                    <div class="invalid-feedback">Please provide a valid city.</div>
                                </div>
                                <label class="col-sm-5 col-form-label">Le nombre des emplois</label>
                                <div class="col-sm-7">
                                    <select
                                    name="prevision_emplois"
                                    id="prevision_emplois"
                                    class="form-select">
                                        <option>{{ $barometre->prevision_emplois }}</option>
                                        <option value="Hausse">Hausse</option>
                                        <option value="Stable">Stable</option>
                                        <option value="Baisse">Baisse</option>
                                    </select>
                                    <div class="invalid-feedback">Please provide a valid city.</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 grid-margin stretch-card">
                            <h4 class="card-title">SONDAGE D’OPINIONS SUR LE RESULTAT </h4>
                            <div class="row">
                                    <label class="col-sm-5 col-form-label">Climat des affaires</label>
                                <div class="col-sm-7">
                                    <select
                                    name="sondage_climat_affaires"
                                    id="sondage_climat_affaires"
                                    class="form-select">
                                        <option>{{ $barometre->sondage_climat_affaires }}</option>
                                        <option value="Très bon">Très bon</option>
                                        <option value="Bon ">Bon</option>
                                        <option value="Passable">Passable</option>
                                        <option value="Mauvais">Mauvais</option>
                                        <option value="Très mauvais">Très mauvais</option>
                                    </select>
                                    <div class="invalid-feedback">Please provide a valid city.</div>
                                </div>
                                    <label class="col-sm-5 col-form-label">Nombre de billets vendus</label>
                                <div class="col-sm-7">
                                    <select
                                    name="sondage_nombre_billets"
                                    id="sondage_nombre_billets"
                                    class="form-select">
                                        <option>{{ $barometre->sondage_nombre_billets }}</option>
                                        <option value="Hausse">Hausse</option>
                                        <option value="Stable">Stable</option>
                                        <option value="Baisse">Baisse</option>
                                    </select>
                                    <div class="invalid-feedback">Please provide a valid city.</div>
                                </div>
                                    <label class="col-sm-5 col-form-label">Chiffre d’affaires de la billetterie</label>
                                <div class="col-sm-7">
                                    <select
                                    name="sondage_ca_billetterie"
                                    id="sondage_ca_billetterie"
                                    class="form-select">
                                        <option>{{ $barometre->sondage_ca_billetterie }}</option>
                                        <option value="Hausse">Hausse</option>
                                        <option value="Stable">Stable</option>
                                        <option value="Baisse">Baisse</option>
                                    </select>
                                    <div class="invalid-feedback">Please provide a valid city.</div>
                                </div>
                                    <label class="col-sm-5 col-form-label">Nombre de circuits réalisés</label>
                                <div class="col-sm-7">
                                    <select
                                    name="sondage_nombre_circuits"
                                    id="sondage_nombre_circuits"
                                    class="form-select">
                                        <option>{{ $barometre->sondage_nombre_circuits }}</option>
                                        <option value="Hausse">Hausse</option>
                                        <option value="Stable">Stable</option>
                                        <option value="Baisse">Baisse</option>
                                    </select>
                                    <div class="invalid-feedback">Please provide a valid city.</div>
                                </div>
                                    <label class="col-sm-5 col-form-label">Chiffres d’affaires des circuits</label>
                                <div class="col-sm-7">
                                    <select
                                    name="sondage_ca_circuits"
                                    id="sondage_ca_circuits"
                                    class="form-select">
                                        <option>{{ $barometre->sondage_ca_circuits }}</option>
                                        <option value="Hausse">Hausse</option>
                                        <option value="Stable">Stable</option>
                                        <option value="Baisse">Baisse</option>
                                    </select>
                                    <div class="invalid-feedback">Please provide a valid city.</div>
                                </div>
                                    <label class="col-sm-5 col-form-label">Nombre d’emplois</label>
                                <div class="col-sm-7">
                                    <select
                                    name="sondage_nombre_emplois"
                                    id="sondage_nombre_emplois"
                                    class="form-select">
                                        <option>{{ $barometre->sondage_ca_circuits }}</option>
                                        <option value="Hausse">Hausse</option>
                                        <option value="Stable">Stable</option>
                                        <option value="Baisse">Baisse</option>
                                    </select>
                                    <div class="invalid-feedback">Please provide a valid city.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                            <div class="card-title">FACTEURS DETERMINANTS DU MARCHE</div>
                            </div>
                            <div class="card-body">
                            <div class="row">
                                <div class="col-md-6 col-lg-6">
                                <div class="form-group">
                                    <label for="facteurs_positifs">Quels sont les éléments qui ont influencés positivement le marché</label>
                                    <input
                                    type="text"
                                    class="form-control form-control-lg"
                                    id="facteurs_positifs"
                                    name="facteurs_positifs"
                                    value="{{ $barometre->facteurs_positifs }}"
                                    placeholder="influencés positivement"
                                    />
                                    <div class="invalid-feedback">Please provide a valid city.</div>
                                </div>
                                </div>
                                <div class="col-md-6 col-lg-6">
                                <div class="form-group">
                                    <label for="facteurs_negatifs">Quels sont les éléments qui ont influencés négativement le marché</label>
                                    <input
                                    type="text"
                                    class="form-control form-control-lg"
                                    id="facteurs_negatifs"
                                    name="facteurs_negatifs"
                                    value="{{ $barometre->facteurs_negatifs }}"
                                    placeholder="influencés négativement"
                                    />
                                    <div class="invalid-feedback">Please provide a valid city.</div>
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                        <button type="submit" class="btn btn-primary"><i class="far fa-save"></i> Enregistrer</button>
                        <a href="{{ route('barometres.index') }}" class="btn btn-danger"><i class="fas fa-angle-double-left"></i> Retour</a>
                    </div>
@endsection
