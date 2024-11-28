@extends('layouts.app')

@section('contenus')
<div class="container">
    <div class="page-inner">
        <div class="shadow-lg p-3 mb-5 bg-body rounded">
            <div class="text-center">
                <p class="fs-3">Baromètre trimestriel du tourisme</p>
            </div>
        </div>
        <form action="{{ route('barometres.store') }}" class="row g-3 needs-validation" method="post">
            @csrf
            <div class="col-12 grid-margin">
                <div class="card">
                    <div class="card-header">
                        <div class="float-start">
                            <h2>RESULTAT D’EXPLOITATION</h2>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-3">
                                <br/>
                                <h4 class="text-center">Billetterie <span class="text-danger">(*)</span></h4>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group row">
                                    <div class="form-group form-group-default">
                                        <label>Nombre</label>
                                        <input id="billetterie_nombre" name="billetterie_nombre" type="text" class="form-control" placeholder="Nombre" value="{{ old('billetterie_nombre') }}" required />
                                        <div class="invalid-feedback">{{ $errors->first('billetterie_nombre') }}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group row">
                                    <div class="form-group form-group-default">
                                        <label>Chiffre d'affaires</label>
                                        <input id="billetterie_ca" name="billetterie_ca" type="text" class="form-control" placeholder="Chiffre d'affaires" value="{{ old('billetterie_ca') }}" required />
                                        <div class="invalid-feedback">{{ $errors->first('billetterie_ca') }}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <br/>
                                <h4 class="text-center">Circuits <span class="text-danger">(*)</span></h4>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group row">
                                    <div class="form-group form-group-default">
                                        <label>Nombre</label>
                                        <input id="circuit_nombre" name="circuit_nombre" type="text" class="form-control" placeholder="Nombre" value="{{ old('circuit_nombre') }}" required />
                                        <div class="invalid-feedback">{{ $errors->first('circuit_nombre') }}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group row">
                                    <div class="form-group form-group-default">
                                        <label>Chiffre d'affaires</label>
                                        <input id="circuit_ca" name="circuit_ca" type="text" class="form-control" placeholder="Chiffre d'affaires" value="{{ old('circuit_ca') }}" required />
                                        <div class="invalid-feedback">{{ $errors->first('circuit_ca') }}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <br/>
                                <h4 class="text-center">Activités connexes <span class="text-danger">(*)</span></h4>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <div class="form-group form-group-default">
                                        <label>Chiffre d'affaires</label>
                                        <input id="activites_connexes_ca" name="activites_connexes_ca" type="text" class="form-control" placeholder="Chiffre d'affaires" value="{{ old('activites_connexes_ca') }}" required />
                                        <div class="invalid-feedback">{{ $errors->first('activites_connexes_ca') }}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-6 grid-margin stretch-card">
                                <h4 class="card-title">PREVISIONS POUR LE 1er TRIMESTRE SUIVANTE</h4>
                                <div class="row">
                                    <label class="col-sm-5 col-form-label">Le climat des affaires <span class="text-danger">(*)</span></label>
                                    <div class="col-sm-7">
                                        <select
                                        name="prevision_climat_affaires"
                                        id="prevision_climat_affaires"
                                        class="form-select" required>
                                            <option value="" disabled selected hidden>Sélectionnez</option>
                                            <option value="Amélioration" {{ old('prevision_climat_affaires') == 'Amélioration' ? 'selected' : '' }}>Amélioration</option>
                                            <option value="Stabilité" {{ old('prevision_climat_affaires') == 'Stabilité' ? 'selected' : '' }}>Stabilité</option>
                                            <option value="Dégradation" {{ old('prevision_climat_affaires') == 'Dégradation' ? 'selected' : '' }}>Dégradation</option>
                                        </select>
                                        <div class="invalid-feedback">{{ $errors->first('prevision_climat_affaires') }}</div>
                                    </div>
                                    <label class="col-sm-5 col-form-label">Le chiffre d’affaires global <span class="text-danger">(*)</span></label>
                                    <div class="col-sm-7">
                                        <select
                                        name="prevision_ca_global"
                                        id="prevision_ca_global"
                                        class="form-select" required>
                                            <option value="" disabled selected hidden>Sélectionnez</option>
                                            <option value="Hausse" {{ old('prevision_ca_global') == 'Hausse' ? 'selected' : '' }}>Hausse</option>
                                            <option value="Stable" {{ old('prevision_ca_global') == 'Stable' ? 'selected' : '' }}>Stable</option>
                                            <option value="Baisse" {{ old('prevision_ca_global') == 'Baisse' ? 'selected' : '' }}>Baisse</option>
                                        </select>
                                        <div class="invalid-feedback">{{ $errors->first('prevision_ca_global') }}</div>
                                    </div>
                                    <label class="col-sm-5 col-form-label">Le nombre des emplois <span class="text-danger">(*)</span></label>
                                    <div class="col-sm-7">
                                        <select
                                        name="prevision_emplois"
                                        id="prevision_emplois"
                                        class="form-select" required>
                                            <option value="" disabled selected hidden>Sélectionnez</option>
                                            <option value="Hausse" {{ old('prevision_emplois') == 'Hausse' ? 'selected' : '' }}>Hausse</option>
                                            <option value="Stable" {{ old('prevision_emplois') == 'Stable' ? 'selected' : '' }}>Stable</option>
                                            <option value="Baisse" {{ old('prevision_emplois') == 'Baisse' ? 'selected' : '' }}>Baisse</option>
                                        </select>
                                        <div class="invalid-feedback">{{ $errors->first('prevision_emplois') }}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 grid-margin stretch-card">
                                <h4 class="card-title">SONDAGE D’OPINIONS SUR LE RESULTAT </h4>
                                <div class="row">
                                    <label class="col-sm-5 col-form-label">Climat des affaires <span class="text-danger">(*)</span></label>
                                    <div class="col-sm-7">
                                        <select
                                        name="sondage_climat_affaires"
                                        id="sondage_climat_affaires"
                                        class="form-select" required>
                                            <option value="" disabled selected hidden>Sélectionnez</option>
                                            <option value="Très bon" {{ old('sondage_climat_affaires') == 'Très bon' ? 'selected' : '' }}>Très bon</option>
                                            <option value="Bon" {{ old('sondage_climat_affaires') == 'Bon' ? 'selected' : '' }}>Bon</option>
                                            <option value="Passable" {{ old('sondage_climat_affaires') == 'Passable' ? 'selected' : '' }}>Passable</option>
                                            <option value="Mauvais" {{ old('sondage_climat_affaires') == 'Mauvais' ? 'selected' : '' }}>Mauvais</option>
                                            <option value="Très mauvais" {{ old('sondage_climat_affaires') == 'Très mauvais' ? 'selected' : '' }}>Très mauvais</option>
                                        </select>
                                        <div class="invalid-feedback">{{ $errors->first('sondage_climat_affaires') }}</div>
                                    </div>
                                    <label class="col-sm-5 col-form-label">Nombre de billets vendus <span class="text-danger">(*)</span></label>
                                    <div class="col-sm-7">
                                        <select
                                        name="sondage_nombre_billets"
                                        id="sondage_nombre_billets"
                                        class="form-select" required>
                                            <option value="" disabled selected hidden>Sélectionnez</option>
                                            <option value="Hausse" {{ old('sondage_nombre_billets') == 'Hausse' ? 'selected' : '' }}>Hausse</option>
                                            <option value="Stable" {{ old('sondage_nombre_billets') == 'Stable' ? 'selected' : '' }}>Stable</option>
                                            <option value="Baisse" {{ old('sondage_nombre_billets') == 'Baisse' ? 'selected' : '' }}>Baisse</option>
                                        </select>
                                        <div class="invalid-feedback">{{ $errors->first('sondage_nombre_billets') }}</div>
                                    </div>
                                    <label class="col-sm-5 col-form-label">Chiffre d’aff billetterie <span class="text-danger">(*)</span></label>
                                    <div class="col-sm-7">
                                        <select
                                        name="sondage_ca_billetterie"
                                        id="sondage_ca_billetterie"
                                        class="form-select" required>
                                            <option value="" disabled selected hidden>Sélectionnez</option>
                                            <option value="Hausse" {{ old('sondage_ca_billetterie') == 'Hausse' ? 'selected' : '' }}>Hausse</option>
                                            <option value="Stable" {{ old('sondage_ca_billetterie') == 'Stable' ? 'selected' : '' }}>Stable</option>
                                            <option value="Baisse" {{ old('sondage_ca_billetterie') == 'Baisse' ? 'selected' : '' }}>Baisse</option>
                                        </select>
                                        <div class="invalid-feedback">{{ $errors->first('sondage_ca_billetterie') }}</div>
                                    </div>

                                    <label class="col-sm-5 col-form-label">Nombre de circuits réalisés <span class="text-danger">(*)</span></label>
                                    <div class="col-sm-7">
                                        <select
                                            name="sondage_nombre_circuits"
                                            id="sondage_nombre_circuits"
                                            class="form-select" required>
                                            <option value="" disabled selected hidden>Sélectionnez</option>
                                            <option value="Hausse" {{ old('sondage_nombre_circuits') == 'Hausse' ? 'selected' : '' }}>Hausse</option>
                                            <option value="Stable" {{ old('sondage_nombre_circuits') == 'Stable' ? 'selected' : '' }}>Stable</option>
                                            <option value="Baisse" {{ old('sondage_nombre_circuits') == 'Baisse' ? 'selected' : '' }}>Baisse</option>
                                        </select>
                                        <div class="invalid-feedback">{{ $errors->first('sondage_nombre_circuits') }}</div>
                                    </div>

                                    <label class="col-sm-5 col-form-label">Chiffres d’aff des circuits <span class="text-danger">(*)</span></label>
                                    <div class="col-sm-7">
                                        <select
                                            name="sondage_ca_circuits"
                                            id="sondage_ca_circuits"
                                            class="form-select" required>
                                            <option value="" disabled selected hidden>Sélectionnez</option>
                                            <option value="Hausse" {{ old('sondage_ca_circuits') == 'Hausse' ? 'selected' : '' }}>Hausse</option>
                                            <option value="Stable" {{ old('sondage_ca_circuits') == 'Stable' ? 'selected' : '' }}>Stable</option>
                                            <option value="Baisse" {{ old('sondage_ca_circuits') == 'Baisse' ? 'selected' : '' }}>Baisse</option>
                                        </select>
                                        <div class="invalid-feedback">{{ $errors->first('sondage_ca_circuits') }}</div>
                                    </div>

                                    <label class="col-sm-5 col-form-label">Nombre d’emplois <span class="text-danger">(*)</span></label>
                                    <div class="col-sm-7">
                                        <select
                                            name="sondage_nombre_emplois"
                                            id="sondage_nombre_emplois"
                                            class="form-select" required>
                                            <option value="" disabled selected hidden>Sélectionnez</option>
                                            <option value="Hausse" {{ old('sondage_nombre_emplois') == 'Hausse' ? 'selected' : '' }}>Hausse</option>
                                            <option value="Stable" {{ old('sondage_nombre_emplois') == 'Stable' ? 'selected' : '' }}>Stable</option>
                                            <option value="Baisse" {{ old('sondage_nombre_emplois') == 'Baisse' ? 'selected' : '' }}>Baisse</option>
                                        </select>
                                        <div class="invalid-feedback">{{ $errors->first('sondage_nombre_emplois') }}</div>
                                    </div>
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
                                                <label for="facteurs_positifs">Quels sont les éléments qui ont influencés positivement le marché <span class="text-danger">(*)</span></label>
                                                <input
                                                    type="text"
                                                    class="form-control form-control-lg"
                                                    id="facteurs_positifs"
                                                    name="facteurs_positifs"
                                                    value="{{ old('facteurs_positifs') }}"
                                                    placeholder="influencés positivement"
                                                    required
                                                />
                                                <div class="invalid-feedback">{{ $errors->first('facteurs_positifs') }}</div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <label for="facteurs_negatifs">Quels sont les éléments qui ont influencés négativement le marché <span class="text-danger">(*)</span></label>
                                                <input
                                                    type="text"
                                                    class="form-control form-control-lg"
                                                    id="facteurs_negatifs"
                                                    name="facteurs_negatifs"
                                                    value="{{ old('facteurs_negatifs') }}"
                                                    placeholder="influencés négativement"
                                                    required
                                                />
                                                <div class="invalid-feedback">{{ $errors->first('facteurs_negatifs') }}</div>
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
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
