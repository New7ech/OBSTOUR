@extends('layouts.app')
@section('contenus')
<div class="container">
    <div class="page-inner">
        <div class="shadow-lg p-3 mb-5 bg-body rounded">
            <div class="text-center">
            <p class="fs-3">ZONE DE PROVENANCE</p>
            </div>
        </div>
        <form action="{{ route('activite.update', $activite->id) }}" class="row g-3 needs-validation" method="post" >
            @csrf
            @method("PUT")
            <div class="col-12 grid-margin">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">VOLUME ACTIVITE</h3>
                        <form class="form-sample">
                            <div class="row">
                                <h4>Mois 1</h4>
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="card">
                                          <div class="card-body">
                                            <h5 class="card-title">Circuits inter-Etats</h5>
                                            <div class="form-group row">
                                                <label class="col-sm-6 col-form-label">Nombre de circuits</label>
                                              <div class="col-sm-6">
                                                  <input id="nb_circuits_etat_m1" name="nb_circuits_etat_m1" type="text" class="form-control" value="{{ $activite->nb_circuits_etat_m1 }}"/>
                                              </div>
                                          </div>
                                          <div class="form-group row">
                                            <label class="col-sm-6 col-form-label">Nombre de touristes</label>
                                            <div class="col-sm-6">
                                                <input id="nb_touriste_etat_m1" name="nb_touriste_etat_m1" type="text" class="form-control" value="{{ $activite->nb_touriste_etat_m1 }}"/>
                                            </div>
                                        </div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col-sm-4">
                                        <div class="card">
                                          <div class="card-body">
                                            <h5 class="card-title">Circuits internes</h5>
                                            <div class="form-group row">
                                                <label class="col-sm-6 col-form-label">Nombre de circuits</label>
                                              <div class="col-sm-6">
                                                  <input id="nb_circuit_inter_m1" name="nb_circuit_inter_m1" type="text" class="form-control" value="{{ $activite->nb_circuit_inter_m1 }}"/>
                                              </div>
                                          </div>
                                          <div class="form-group row">
                                                <label class="col-sm-6 col-form-label">Nombre de touristes</label>
                                            <div class="col-sm-6">
                                                <input id="nb_touriste_inter_m1" name="nb_touriste_inter_m1" type="text" class="form-control" value="{{ $activite->nb_touriste_inter_m1 }}"/>
                                            </div>
                                        </div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col-sm-4">
                                        <div class="card">
                                          <div class="card-body">
                                            <h5 class="card-title">Excursions</h5>
                                            <div class="form-group row">
                                                <label class="col-sm-6 col-form-label">Nombre d''excursions</label>
                                              <div class="col-sm-6">
                                                  <input id="nb_excursion_excu_m1" name="nb_excursion_excu_m1" type="text" class="form-control" value="{{ $activite->nb_excursion_excu_m1 }}"/>
                                              </div>
                                          </div>
                                          <div class="form-group row">
                                            <label class="col-sm-6 col-form-label">Nombre d''excursionnistes</label>
                                            <div class="col-sm-6">
                                                <input id="nb_excurniste_m1" name="nb_excurniste_m1" type="text" class="form-control" value="{{ $activite->nb_excurniste_m1 }}"/>
                                            </div>
                                        </div>
                                          </div>
                                        </div>
                                      </div>
                                  </div>
                            </div>
                            <hr>
                            <div class="row">
                                <h4>Mois 2</h4>
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="card">
                                          <div class="card-body">
                                            <h5 class="card-title">Circuits inter-Etats</h5>
                                            <div class="form-group row">
                                                <label class="col-sm-6 col-form-label">Nombre de circuits</label>
                                              <div class="col-sm-6">
                                                  <input id="nb_circuits_etat_m2" name="nb_circuits_etat_m2" type="text" class="form-control" value="{{ $activite->nb_circuits_etat_m2 }}"/>
                                              </div>
                                          </div>
                                          <div class="form-group row">
                                            <label class="col-sm-6 col-form-label">Nombre de touristes</label>
                                            <div class="col-sm-6">
                                                <input id="nb_touriste_etat_m2" name="nb_touriste_etat_m2" type="text" class="form-control" value="{{ $activite->nb_touriste_etat_m2 }}"/>
                                            </div>
                                        </div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col-sm-4">
                                        <div class="card">
                                          <div class="card-body">
                                            <h5 class="card-title">Circuits internes</h5>
                                            <div class="form-group row">
                                                <label class="col-sm-6 col-form-label">Nombre de circuits</label>
                                              <div class="col-sm-6">
                                                  <input id="nb_circuit_inter_m2" name="nb_circuit_inter_m2" type="text" class="form-control" value="{{ $activite->nb_circuit_inter_m2 }}"/>
                                              </div>
                                          </div>
                                          <div class="form-group row">
                                                <label class="col-sm-6 col-form-label">Nombre de touristes</label>
                                            <div class="col-sm-6">
                                                <input id="nb_touriste_inter_m2" name="nb_touriste_inter_m2" type="text" class="form-control" value="{{ $activite->nb_touriste_inter_m2 }}"/>
                                            </div>
                                        </div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col-sm-4">
                                        <div class="card">
                                          <div class="card-body">
                                            <h5 class="card-title">Excursions</h5>
                                            <div class="form-group row">
                                                <label class="col-sm-6 col-form-label">Nombre d''excursions</label>
                                              <div class="col-sm-6">
                                                  <input id="nb_excursion_excu_m2" name="nb_excursion_excu_m2" type="text" class="form-control" value="{{ $activite->nb_excursion_excu_m2 }}"/>
                                              </div>
                                          </div>
                                          <div class="form-group row">
                                                <label class="col-sm-6 col-form-label">Nombre d''excursionnistes</label>
                                            <div class="col-sm-6">
                                                <input id="nb_excurniste_m2" name="nb_excurniste_m2" type="text" class="form-control" value="{{ $activite->nb_excurniste_m2 }}"/>
                                            </div>
                                        </div>
                                          </div>
                                        </div>
                                      </div>

                                  </div>

                            </div>
                            <hr>
                            <div class="row">
                                <h4>Mois 3</h4>
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="card">
                                          <div class="card-body">
                                            <h5 class="card-title">Circuits inter-Etats</h5>
                                            <div class="form-group row">
                                                <label class="col-sm-6 col-form-label">Nombre de circuits</label>
                                              <div class="col-sm-6">
                                                  <input id="nb_circuits_etat_m3" name="nb_circuits_etat_m3" type="text" class="form-control" value="{{ $activite->nb_circuits_etat_m3 }}"/>
                                              </div>
                                          </div>
                                          <div class="form-group row">
                                            <label class="col-sm-6 col-form-label">Nombre de touristes</label>
                                            <div class="col-sm-6">
                                                <input id="nb_touriste_etat_m3" name="nb_touriste_etat_m3" type="text" class="form-control" value="{{ $activite->nb_touriste_etat_m3 }}"/>
                                            </div>
                                        </div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col-sm-4">
                                        <div class="card">
                                          <div class="card-body">
                                            <h5 class="card-title">Circuits internes</h5>
                                            <div class="form-group row">
                                                <label class="col-sm-6 col-form-label">Nombre de circuits</label>
                                              <div class="col-sm-6">
                                                  <input id="nb_circuit_inter_m3" name="nb_circuit_inter_m3" type="text" class="form-control" value="{{ $activite->nb_circuit_inter_m3 }}"/>
                                              </div>
                                          </div>
                                          <div class="form-group row">
                                            <label class="col-sm-6 col-form-label">Nombre de touristes</label>
                                            <div class="col-sm-6">
                                                <input id="nb_touriste_inter_m3" name="nb_touriste_inter_m3" type="text" class="form-control" value="{{ $activite->nb_touriste_inter_m3 }}"/>
                                            </div>
                                        </div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col-sm-4">
                                        <div class="card">
                                          <div class="card-body">
                                            <h5 class="card-title">Excursions</h5>
                                            <div class="form-group row">
                                                <label class="col-sm-6 col-form-label">Nombre d''excursions</label>
                                              <div class="col-sm-6">
                                                  <input id="nb_excursion_excu_m3" name="nb_excursion_excu_m3" type="text" class="form-control" value="{{ $activite->nb_excursion_excu_m3 }}"/>
                                              </div>
                                          </div>
                                          <div class="form-group row">
                                                <label class="col-sm-6 col-form-label">Nombre d''excursionnistes</label>
                                            <div class="col-sm-6">
                                                <input id="nb_excurniste_m3" name="nb_excurniste_m3" type="text" class="form-control" value="{{ $activite->nb_excurniste_m3 }}"/>
                                            </div>
                                        </div>
                                          </div>
                                        </div>
                                      </div>
                                  </div>
                            </div>
                        </form>
                        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                            <button type="submit" class="btn btn-primary"><i class="far fa-save"></i> Enregistrer</button>
                            <a href="{{ route('activite.index') }}" class="btn btn-danger"><i class="fas fa-angle-double-left"></i> Retour</a>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
