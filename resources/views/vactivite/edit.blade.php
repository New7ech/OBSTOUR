@extends('layouts.app')
@section('contenus')

<div class="container">
    <div class="page-inner">
        <div class="shadow-lg p-3 mb-5 bg-body rounded">
            <div class="text-center">
            <p class="fs-3">VOLUME DE ACTIVITE</p>
            </div>
        </div>
        <form action="{{ route('vactivite.update', $vactivite->id) }}" class="row g-3 needs-validation" method="post" novalidate>
            @csrf
            @method('PUT')
            <div class="col-12 grid-margin">
                <div class="card">
                    <div class="card-body">
                        <form class="form-sample">
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="form-group row">
                                        <div class="col-sm-9">
                                            <h3 class="card-title">Mois 1</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="card">
                                          <div class="card-body">
                                            <h5 class="card-title">Circuits inter-Etats</h5>
                                            <div class="form-group row">
                                                <label class="col-sm-6 col-form-label">Nombre de circuits</label>
                                              <div class="col-sm-6">
                                                  <input value="{{ $vactivite->nbcir_etat_m1 }}"  value="{{ old('nbcir_etat_m1') }}" class="form-control @error('nbcir_etat_m1') is-invalid @enderror" id="nbcir_etat_m1" name="nbcir_etat_m1" type="number" class="form-control" /><div class="invalid-feedback">Please provide a valid city.</div>
                                              </div>
                                          </div>
                                          <div class="form-group row">
                                                <label class="col-sm-6 col-form-label">Nombre de touristes</label>
                                            <div class="col-sm-6">
                                                <input value="{{ $vactivite->nbtour_etat_m1 }}"  value="{{ old('nbtour_etat_m1') }}" class="form-control @error('nbtour_etat_m1') is-invalid @enderror" id="nbtour_etat_m1" name="nbtour_etat_m1" type="number" class="form-control" /><div class="invalid-feedback">Please provide a valid city.</div>
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
                                                  <input value="{{ $vactivite->nbcir_intr_m1 }}"  value="{{ old('nbcir_intr_m1') }}" class="form-control @error('nbcir_intr_m1') is-invalid @enderror" id="nbcir_intr_m1" name="nbcir_intr_m1" type="number" class="form-control" /><div class="invalid-feedback">Please provide a valid city.</div>
                                              </div>
                                          </div>
                                          <div class="form-group row">
                                                <label class="col-sm-6 col-form-label">Nombre de touristes</label>
                                            <div class="col-sm-6">
                                                <input value="{{ $vactivite->nbtour_intr_m1 }}"  value="{{ old('nbtour_intr_m1') }}" class="form-control @error('nbtour_intr_m1') is-invalid @enderror" id="nbtour_intr_m1" name="nbtour_intr_m1" type="number" class="form-control" /><div class="invalid-feedback">Please provide a valid city.</div>
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
                                                  <input value="{{ $vactivite->nbexcs_exc_m1 }}"  value="{{ old('nbexcs_exc_m1') }}" class="form-control @error('nbexcs_exc_m1') is-invalid @enderror" id="nbexcs_exc_m1" name="nbexcs_exc_m1" type="number" class="form-control" /><div class="invalid-feedback">Please provide a valid city.</div>
                                              </div>
                                          </div>
                                          <div class="form-group row">
                                                <label class="col-sm-6 col-form-label">Nombre d''excursionnistes</label>
                                            <div class="col-sm-6">
                                                <input value="{{ $vactivite->nbexcst_exc_m1 }}"  value="{{ old('nbexcst_exc_m1') }}" class="form-control @error('nbexcst_exc_m1') is-invalid @enderror" id="nbexcst_exc_m1" name="nbexcst_exc_m1" type="number" class="form-control" /><div class="invalid-feedback">Please provide a valid city.</div>
                                            </div>
                                        </div>
                                          </div>
                                        </div>
                                      </div>

                                  </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="form-group row">
                                        <div class="col-sm-9">
                                            <h3 class="card-title">Mois 2</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="card">
                                          <div class="card-body">
                                            <h5 class="card-title">Circuits inter-Etats</h5>
                                            <div class="form-group row">
                                                <label class="col-sm-6 col-form-label">Nombre de circuits</label>
                                              <div class="col-sm-6">
                                                  <input value="{{ $vactivite->nbcir_etat_m2 }}"  value="{{ old('nbcir_etat_m2') }}" class="form-control @error('nbcir_etat_m2') is-invalid @enderror" id="nbcir_etat_m2" name="nbcir_etat_m2" type="number" class="form-control" /><div class="invalid-feedback">Please provide a valid city.</div>
                                              </div>
                                          </div>
                                          <div class="form-group row">
                                                <label class="col-sm-6 col-form-label">Nombre de touristes</label>
                                            <div class="col-sm-6">
                                                <input value="{{ $vactivite->nbtour_etat_m2 }}"  value="{{ old('nbtour_etat_m2') }}" class="form-control @error('nbtour_etat_m2') is-invalid @enderror" id="nbtour_etat_m2" name="nbtour_etat_m2" type="number" class="form-control" /><div class="invalid-feedback">Please provide a valid city.</div>
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
                                                  <input value="{{ $vactivite->nbcir_intr_m2 }}"  value="{{ old('nbcir_intr_m2') }}" class="form-control @error('nbcir_intr_m2') is-invalid @enderror" id="nbcir_intr_m2" name="nbcir_intr_m2" type="number" class="form-control" /><div class="invalid-feedback">Please provide a valid city.</div>
                                              </div>
                                          </div>
                                          <div class="form-group row">
                                                <label class="col-sm-6 col-form-label">Nombre de touristes</label>
                                            <div class="col-sm-6">
                                                <input value="{{ $vactivite->nbtour_intr_m2 }}"  value="{{ old('nbtour_intr_m2') }}" class="form-control @error('nbtour_intr_m2') is-invalid @enderror" id="nbtour_intr_m2" name="nbtour_intr_m2" type="number" class="form-control" /><div class="invalid-feedback">Please provide a valid city.</div>
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
                                                  <input value="{{ $vactivite->nbexcs_exc_m2 }}"  value="{{ old('nbexcs_exc_m2') }}" class="form-control @error('nbexcs_exc_m2') is-invalid @enderror" id="nbexcs_exc_m2" name="nbexcs_exc_m2" type="number" class="form-control" /><div class="invalid-feedback">Please provide a valid city.</div>
                                              </div>
                                          </div>
                                          <div class="form-group row">
                                                <label class="col-sm-6 col-form-label">Nombre d''excursionnistes</label>
                                            <div class="col-sm-6">
                                                <input value="{{ $vactivite->nbexcst_exc_m2 }}"  value="{{ old('nbexcst_exc_m2') }}" class="form-control @error('nbexcst_exc_m2') is-invalid @enderror" id="nbexcst_exc_m2" name="nbexcst_exc_m2" type="number" class="form-control" /><div class="invalid-feedback">Please provide a valid city.</div>
                                            </div>
                                        </div>
                                          </div>
                                        </div>
                                      </div>
                                  </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="form-group row">
                                        <div class="col-sm-9">
                                            <h3 class="card-title">Mois 3</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="card">
                                          <div class="card-body">
                                            <h5 class="card-title">Circuits inter-Etats</h5>
                                            <div class="form-group row">
                                                <label class="col-sm-6 col-form-label">Nombre de circuits</label>
                                              <div class="col-sm-6">
                                                  <input value="{{ $vactivite->nbcir_etat_m3 }}"  value="{{ old('nbcir_etat_m3') }}" class="form-control @error('nbcir_etat_m3') is-invalid @enderror" id="nbcir_etat_m3" name="nbcir_etat_m3" type="number" class="form-control" /><div class="invalid-feedback">Please provide a valid city.</div>
                                              </div>
                                          </div>
                                          <div class="form-group row">
                                                <label class="col-sm-6 col-form-label">Nombre de touristes</label>
                                            <div class="col-sm-6">
                                                <input value="{{ $vactivite->nbtour_etat_m3 }}"  value="{{ old('nbtour_etat_m3') }}" class="form-control @error('nbtour_etat_m3') is-invalid @enderror" id="nbtour_etat_m3" name="nbtour_etat_m3" type="number" class="form-control" /><div class="invalid-feedback">Please provide a valid city.</div>
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
                                                  <input value="{{ $vactivite->nbcir_intr_m3 }}"  value="{{ old('nbcir_intr_m3') }}" class="form-control @error('nbcir_intr_m3') is-invalid @enderror" id="nbcir_intr_m3" name="nbcir_intr_m3" type="number" class="form-control" /><div class="invalid-feedback">Please provide a valid city.</div>
                                              </div>
                                          </div>
                                          <div class="form-group row">
                                                <label class="col-sm-6 col-form-label">Nombre de touristes</label>
                                            <div class="col-sm-6">
                                                <input value="{{ $vactivite->nbtour_intr_m3 }}"  value="{{ old('nbtour_intr_m3') }}" class="form-control @error('nbtour_intr_m3') is-invalid @enderror" id="nbtour_intr_m3" name="nbtour_intr_m3" type="number" class="form-control" /><div class="invalid-feedback">Please provide a valid city.</div>
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
                                                  <input value="{{ $vactivite->nbexcs_exc_m3 }}"  value="{{ old('nbexcs_exc_m3') }}" class="form-control @error('nbexcs_exc_m3') is-invalid @enderror" id="nbexcs_exc_m3" name="nbexcs_exc_m3" type="number" class="form-control" /><div class="invalid-feedback">Please provide a valid city.</div>
                                              </div>
                                          </div>
                                          <div class="form-group row">
                                                <label class="col-sm-6 col-form-label">Nombre d''excursionnistes</label>
                                            <div class="col-sm-6">
                                                <input value="{{ $vactivite->nbexcst_exc_m3 }}"  value="{{ old('nbexcst_exc_m3') }}" class="form-control @error('nbexcst_exc_m3') is-invalid @enderror" id="nbexcst_exc_m3" name="nbexcst_exc_m3" type="number" class="form-control" /><div class="invalid-feedback">Please provide a valid city.</div>
                                            </div>
                                        </div>
                                          </div>
                                        </div>
                                      </div>
                                  </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                <button type="submit" class="btn btn-primary"><i class="far fa-save"></i> Enregistrer</button>
                                <a href="{{ route('vactivite.index') }}" class="btn btn-danger"><i class="fas fa-angle-double-left"></i> Retour</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>


@endsection
