@extends('layouts.app')
@section('contenus')

<div class="container">
    <div class="page-inner">
        <div class="shadow-lg p-3 mb-5 bg-body rounded">
            <div class="text-center">
            <p class="fs-3">EMPLOIS</p>
            </div>
        </div>
        <form action="{{ route('emploies.update',$emploie->id) }}" class="row g-3 needs-validation" method="post">
            @csrf
            @method('PUT')
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
                                                  <input value="{{ $emploie->cadrsup_nat_hom }}" id="cadrsup_nat_hom" name="cadrsup_nat_hom" type="text" class="form-control" />
                                              </div>
                                          </div>
                                          <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Femme</label>
                                            <div class="col-sm-6">
                                                <input value="{{ $emploie->cadrsup_nat_fem }}" id="cadrsup_nat_fem" name="cadrsup_nat_fem" type="text" class="form-control" />
                                            </div>
                                        </div>
                                      </div>
                                <div class="col-sm-3">
                                    <h5 class="card-title">Autres nationalités</h5>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Homme</label>
                                        <div class="col-sm-6">
                                            <input value="{{ $emploie->cadrsup_otrnat_hom }}" id="cadrsup_otrnat_hom" name="cadrsup_otrnat_hom" type="text" class="form-control" />
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Femme</label>

                                        <div class="col-sm-6">
                                            <input value="{{ $emploie->cadrsup_otrnat_fem }}" id="cadrsup_otrnat_fem" name="cadrsup_otrnat_fem" type="text" class="form-control" />
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
                                              <input value="{{ $emploie->cadrmoy_nat_hom }}" id="cadrmoy_nat_hom" name="cadrmoy_nat_hom" type="text" class="form-control" />
                                          </div>
                                      </div>
                                      <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Femme</label>
                                        <div class="col-sm-6">
                                            <input value="{{ $emploie->cadrmoy_nat_fem }}" id="cadrmoy_nat_fem" name="cadrmoy_nat_fem" type="text" class="form-control" />
                                        </div>
                                    </div>
                                  </div>
                                <div class="col-sm-3">
                                    <h5 class="card-title">Autres nationalités</h5>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Homme</label>
                                        <div class="col-sm-6">
                                            <input value="{{ $emploie->cadrmoy_otrnat_hom }}" id="cadrmoy_otrnat_hom" name="cadrmoy_otrnat_hom" type="text" class="form-control" />
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Femme</label>

                                        <div class="col-sm-6">
                                            <input value="{{ $emploie->cadrmoy_otrnat_fem }}" id="cadrmoy_otrnat_fem" name="cadrmoy_otrnat_fem" type="text" class="form-control" />
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
                                            <input value="{{ $emploie->emp_nat_hom }}" id="emp_nat_hom" name="emp_nat_hom" type="text" class="form-control" />
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Femme</label>
                                        <div class="col-sm-6">
                                            <input value="{{ $emploie->emp_nat_fem }}" id="emp_nat_fem" name="emp_nat_fem" type="text" class="form-control" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <h5 class="card-title">Autres nationalités</h5>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Homme</label>
                                        <div class="col-sm-6">
                                            <input value="{{ $emploie->emp_otrnat_hom }}" id="emp_otrnat_hom" name="emp_otrnat_hom" type="text" class="form-control" />
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Femme</label>

                                        <div class="col-sm-6">
                                            <input value="{{ $emploie->emp_otrnat_fem }}" id="emp_otrnat_fem" name="emp_otrnat_fem" type="text" class="form-control" />
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
                                            <input value="{{ $emploie->man_nat_hom }}" id="man_nat_hom" name="man_nat_hom" type="text" class="form-control" />
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Femme</label>
                                            <div class="col-sm-6">
                                                <input value="{{ $emploie->man_nat_fem }}" id="man_nat_fem" name="man_nat_fem" type="text" class="form-control" />
                                            </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <h5 class="card-title">Autres nationalités</h5>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Homme</label>
                                        <div class="col-sm-6">
                                            <input value="{{ $emploie->man_otrnat_hom }}" id="man_otrnat_hom" name="man_otrnat_hom" type="text" class="form-control" />
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Femme</label>

                                        <div class="col-sm-6">
                                            <input value="{{ $emploie->man_otrnat_fem }}" id="man_otrnat_fem" name="man_otrnat_fem" type="text" class="form-control" />
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
                                            <input value="{{ $emploie->tem_nat_hom }}" id="tem_nat_hom" name="tem_nat_hom" type="text" class="form-control" />
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Femme</label>
                                            <div class="col-sm-6">
                                                <input value="{{ $emploie->tem_nat_fem }}" id="tem_nat_fem" name="tem_nat_fem" type="text" class="form-control" />
                                            </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <h5 class="card-title">Autres nationalités</h5>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Homme</label>
                                        <div class="col-sm-6">
                                            <input value="{{ $emploie->tem_otrnat_hom }}" id="tem_otrnat_hom" name="tem_otrnat_hom" type="text" class="form-control" />
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Femme</label>

                                        <div class="col-sm-6">
                                            <input value="{{ $emploie->tem_otrnat_fem }}" id="tem_otrnat_fem" name="tem_otrnat_fem" type="text" class="form-control" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center mt-4">
                                <button type="submit" class="btn btn-primary"><i class="far fa-save"></i> Enregistrer</button>
                                <a href="{{ route('emploies.index') }}" class="btn btn-danger"><i class="fas fa-angle-double-left"></i> Retour</a>
                            </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection
