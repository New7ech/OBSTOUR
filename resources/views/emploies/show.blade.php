@extends('layouts.app')

@section('contenus')
<div class="container my-5">
    <div class="page-inner">
        <div class="shadow-lg p-3 mb-5 bg-body rounded">
            <div class="text-center">
                <p class="fs-3">EMPLOIS</p>
            </div>
        </div>
        <div class="row g-3">
            <div class="col-12 grid-margin">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <br/>
                                <br/>
                                <br/>
                                <h3 class="text-center">Cadre supérieur, Ingénieur et assimilé</h3>
                            </div>
                            <div class="col-sm-3">
                                <h5 class="card-title">Nationaux</h5>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Homme</label>
                                    <div class="col-sm-6">
                                        <input id="cadrsup_nat_hom" name="cadrsup_nat_hom" type="text" class="form-control" value="{{ $emploie->cadrsup_nat_hom }}" readonly />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Femme</label>
                                    <div class="col-sm-6">
                                        <input id="cadrsup_nat_fem" name="cadrsup_nat_fem" type="text" class="form-control" value="{{ $emploie->cadrsup_nat_fem }}" readonly />
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <h5 class="card-title">Autres nationalités</h5>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Homme</label>
                                    <div class="col-sm-6">
                                        <input id="cadrsup_otrnat_hom" name="cadrsup_otrnat_hom" type="text" class="form-control" value="{{ $emploie->cadrsup_otrnat_hom }}" readonly />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Femme</label>
                                    <div class="col-sm-6">
                                        <input id="cadrsup_otrnat_fem" name="cadrsup_otrnat_fem" type="text" class="form-control" value="{{ $emploie->cadrsup_otrnat_fem }}" readonly />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-6">
                                <br/>
                                <br/>
                                <br/>
                                <h3 class="text-center">Cadre moyenne, Agent de maîtrise</h3>
                            </div>
                            <div class="col-sm-3">
                                <h5 class="card-title">Nationaux</h5>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Homme</label>
                                    <div class="col-sm-6">
                                        <input id="cadrmoy_nat_hom" name="cadrmoy_nat_hom" type="text" class="form-control" value="{{ $emploie->cadrmoy_nat_hom }}" readonly />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Femme</label>
                                    <div class="col-sm-6">
                                        <input id="cadrmoy_nat_fem" name="cadrmoy_nat_fem" type="text" class="form-control" value="{{ $emploie->cadrmoy_nat_fem }}" readonly />
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <h5 class="card-title">Autres nationalités</h5>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Homme</label>
                                    <div class="col-sm-6">
                                        <input id="cadrmoy_otrnat_hom" name="cadrmoy_otrnat_hom" type="text" class="form-control" value="{{ $emploie->cadrmoy_otrnat_hom }}" readonly />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Femme</label>
                                    <div class="col-sm-6">
                                        <input id="cadrmoy_otrnat_fem" name="cadrmoy_otrnat_fem" type="text" class="form-control" value="{{ $emploie->cadrmoy_otrnat_fem }}" readonly />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-6">
                                <br/>
                                <br/>
                                <br/>
                                <h3 class="text-center">Employés/ouvriers</h3>
                            </div>
                            <div class="col-sm-3">
                                <h5 class="card-title">Nationaux</h5>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Homme</label>
                                    <div class="col-sm-6">
                                        <input id="emp_nat_hom" name="emp_nat_hom" type="text" class="form-control" value="{{ $emploie->emp_nat_hom }}" readonly />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Femme</label>
                                    <div class="col-sm-6">
                                        <input id="emp_nat_fem" name="emp_nat_fem" type="text" class="form-control" value="{{ $emploie->emp_nat_fem }}" readonly />
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <h5 class="card-title">Autres nationalités</h5>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Homme</label>
                                    <div class="col-sm-6">
                                        <input id="emp_otrnat_hom" name="emp_otrnat_hom" type="text" class="form-control" value="{{ $emploie->emp_otrnat_hom }}" readonly />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Femme</label>
                                    <div class="col-sm-6">
                                        <input id="emp_otrnat_fem" name="emp_otrnat_fem" type="text" class="form-control" value="{{ $emploie->emp_otrnat_fem }}" readonly />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-6">
                                <br/>
                                <br/>
                                <br/>
                                <h3 class="text-center">Manoeuvre</h3>
                            </div>
                            <div class="col-sm-3">
                                <h5 class="card-title">Nationaux</h5>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Homme</label>
                                    <div class="col-sm-6">
                                        <input id="man_nat_hom" name="man_nat_hom" type="text" class="form-control" value="{{ $emploie->man_nat_hom }}" readonly />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Femme</label>
                                    <div class="col-sm-6">
                                        <input id="man_nat_fem" name="man_nat_fem" type="text" class="form-control" value="{{ $emploie->man_nat_fem }}" readonly />
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <h5 class="card-title">Autres nationalités</h5>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Homme</label>
                                    <div class="col-sm-6">
                                        <input id="man_otrnat_hom" name="man_otrnat_hom" type="text" class="form-control" value="{{ $emploie->man_otrnat_hom }}" readonly />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Femme</label>
                                    <div class="col-sm-6">
                                        <input id="man_otrnat_fem" name="man_otrnat_fem" type="text" class="form-control" value="{{ $emploie->man_otrnat_fem }}" readonly />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-6">
                                <br/>
                                <br/>
                                <br/>
                                <h3 class="text-center">Temporaires/saisonniers</h3>
                            </div>
                            <div class="col-sm-3">
                                <h5 class="card-title">Nationaux</h5>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Homme</label>
                                    <div class="col-sm-6">
                                        <input id="tem_nat_hom" name="tem_nat_hom" type="text" class="form-control" value="{{ $emploie->tem_nat_hom }}" readonly />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Femme</label>
                                    <div class="col-sm-6">
                                        <input id="tem_nat_fem" name="tem_nat_fem" type="text" class="form-control" value="{{ $emploie->tem_nat_fem }}" readonly />
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <h5 class="card-title">Autres nationalités</h5>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Homme</label>
                                    <div class="col-sm-6">
                                        <input id="tem_otrnat_hom" name="tem_otrnat_hom" type="text" class="form-control" value="{{ $emploie->tem_otrnat_hom }}" readonly />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Femme</label>
                                    <div class="col-sm-6">
                                        <input id="tem_otrnat_fem" name="tem_otrnat_fem" type="text" class="form-control" value="{{ $emploie->tem_otrnat_fem }}" readonly />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center mt-4">
                            <a href="{{ route('emploies.index') }}" class="btn btn-danger"><i class="fas fa-angle-double-left"></i> Retour</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
