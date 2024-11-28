@extends('layouts.app')
@section('contenus')

<div class="container">
    <div class="page-inner">
        <div class="shadow-lg p-3 mb-5 bg-body rounded">
            <div class="number-center">
            <p class="fs-3">BILLET EMIS PAR COMPAGNIE</p>
            </div>
        </div>
        <form action="{{ route('nbbilletcompa.update', $nbbilletcompa->id) }}" class="row g-3 needs-validation" method="post" novalidate>
            @csrf
            @method('PUT')
            <div class="col-12 grid-margin">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">Nombre de billet emis par nbbilletcompa</h3>
                        <form class="form-sample">
                            <div class="row">
                                <div class="col-md-3">
                                    <br/>
                                        <h4 class="number-center">Air Burkina</h4>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group row">
                                        <div class="form-group form-group-default">
                                            <label>Mois 1</label>
                                            <input
                                              id="bil_bf_m1"
                                              name="bil_bf_m1"
                                              type="number"
                                              value="{{ $nbbilletcompa->bil_bf_m1 }}"
                                              class="form-control"
                                              placeholder="Nombre de billet"
                                            />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group row">
                                        <div class="form-group form-group-default">
                                            <label>Mois 2</label>
                                            <input
                                              id="bil_bf_m2"
                                              name="bil_bf_m2"
                                              type="number"
                                              value="{{ $nbbilletcompa->bil_bf_m2 }}"
                                              class="form-control"
                                              placeholder="Nombre de billet"
                                            />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group row">
                                        <div class="form-group form-group-default">
                                            <label>Mois 3</label>
                                            <input
                                              id="bil_bf_m3"
                                              name="bil_bf_m3"
                                              type="number"
                                              value="{{ $nbbilletcompa->bil_bf_m3 }}"
                                              class="form-control"
                                              placeholder="Nombre de billet"
                                            />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <br/>
                                        <h4 class="number-center">Air France</h4>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group row">
                                        <div class="form-group form-group-default">
                                            <label>Mois 1</label>
                                            <input
                                              id="bil_fr_m1"
                                              name="bil_fr_m1"
                                              type="number"
                                              value="{{ $nbbilletcompa->bil_fr_m1 }}"
                                              class="form-control"
                                              placeholder="Nombre de billet"
                                            />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group row">
                                        <div class="form-group form-group-default">
                                            <label>Mois 2</label>
                                            <input
                                              id="bil_fr_m2"
                                              name="bil_fr_m2"
                                              type="number"
                                              value="{{ $nbbilletcompa->bil_fr_m2 }}"
                                              class="form-control"
                                              placeholder="Nombre de billet"
                                            />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group row">
                                        <div class="form-group form-group-default">
                                            <label>Mois 3</label>
                                            <input
                                              id="bil_fr_m3"
                                              name="bil_fr_m3"
                                              type="number"
                                              value="{{ $nbbilletcompa->bil_fr_m3 }}"
                                              class="form-control"
                                              placeholder="Nombre de billet"
                                            />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <br/>
                                        <h4 class="number-center">Air Sarada</h4>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group row">
                                        <div class="form-group form-group-default">
                                            <label>Mois 1</label>
                                            <input
                                              id="bil_sar_m1"
                                              name="bil_sar_m1"
                                              type="number"
                                              value="{{ $nbbilletcompa->bil_sar_m1 }}"
                                              class="form-control"
                                              placeholder="Nombre de billet"
                                            />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group row">
                                        <div class="form-group form-group-default">
                                            <label>Mois 2</label>
                                            <input
                                              id="bil_sar_m2"
                                              name="bil_sar_m2"
                                              type="number"
                                              value="{{ $nbbilletcompa->bil_sar_m2 }}"
                                              class="form-control"
                                              placeholder="Nombre de billet"
                                            />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group row">
                                        <div class="form-group form-group-default">
                                            <label>Mois 3</label>
                                            <input
                                              id="bil_sar_m3"
                                              name="bil_sar_m3"
                                              type="number"
                                              value="{{ $nbbilletcompa->bil_sar_m3 }}"
                                              class="form-control"
                                              placeholder="Nombre de billet"
                                            />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <br/>
                                        <h4 class="number-center">Air Ivoire</h4>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group row">
                                        <div class="form-group form-group-default">
                                            <label>Mois 1</label>
                                            <input
                                              id="bil_ivr_m1"
                                              name="bil_ivr_m1"
                                              type="number"
                                              value="{{ $nbbilletcompa->bil_ivr_m1 }}"
                                              class="form-control"
                                              placeholder="Nombre de billet"
                                            />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group row">
                                        <div class="form-group form-group-default">
                                            <label>Mois 2</label>
                                            <input
                                              id="bil_ivr_m2"
                                              name="bil_ivr_m2"
                                              type="number"
                                              value="{{ $nbbilletcompa->bil_ivr_m2 }}"
                                              class="form-control"
                                              placeholder="Nombre de billet"
                                            />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group row">
                                        <div class="form-group form-group-default">
                                            <label>Mois 3</label>
                                            <input
                                              id="bil_ivr_m3"
                                              name="bil_ivr_m3"
                                              type="number"
                                              value="{{ $nbbilletcompa->bil_ivr_m3 }}"
                                              class="form-control"
                                              placeholder="Nombre de billet"
                                            />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <br/>
                                        <h4 class="number-center">Tunis air</h4>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group row">
                                        <div class="form-group form-group-default">
                                            <label>Mois 1</label>
                                            <input
                                              id="bil_tun_m1"
                                              name="bil_tun_m1"
                                              type="number"
                                              value="{{ $nbbilletcompa->bil_tun_m1 }}"
                                              class="form-control"
                                              placeholder="Nombre de billet"
                                            />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group row">
                                        <div class="form-group form-group-default">
                                            <label>Mois 2</label>
                                            <input
                                              id="bil_tun_m2"
                                              name="bil_tun_m2"
                                              type="number"
                                              value="{{ $nbbilletcompa->bil_tun_m2 }}"
                                              class="form-control"
                                              placeholder="Nombre de billet"
                                            />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group row">
                                        <div class="form-group form-group-default">
                                            <label>Mois 3</label>
                                            <input
                                              id="bil_tun_m3"
                                              name="bil_tun_m3"
                                              type="number"
                                              value="{{ $nbbilletcompa->bil_tun_m3 }}"
                                              class="form-control"
                                              placeholder="Nombre de billet"
                                            />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <br/>
                                        <h4 class="number-center">Colomb Airlines</h4>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group row">
                                        <div class="form-group form-group-default">
                                            <label>Mois 1</label>
                                            <input
                                              id="bil_col_m1"
                                              name="bil_col_m1"
                                              type="number"
                                              value="{{ $nbbilletcompa->bil_col_m1 }}"
                                              class="form-control"
                                              placeholder="Nombre de billet"
                                            />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group row">
                                        <div class="form-group form-group-default">
                                            <label>Mois 2</label>
                                            <input
                                              id="bil_col_m2"
                                              name="bil_col_m2"
                                              type="number"
                                              value="{{ $nbbilletcompa->bil_col_m2 }}"
                                              class="form-control"
                                              placeholder="Nombre de billet"
                                            />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group row">
                                        <div class="form-group form-group-default">
                                            <label>Mois 3</label>
                                            <input
                                              id="bil_col_m3"
                                              name="bil_col_m3"
                                              type="number"
                                              value="{{ $nbbilletcompa->bil_col_m3 }}"
                                              class="form-control"
                                              placeholder="Nombre de billet"
                                            />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <br/>
                                        <h4 class="number-center">Royal Air Maroc</h4>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group row">
                                        <div class="form-group form-group-default">
                                            <label>Mois 1</label>
                                            <input
                                              id="bil_roy_m1"
                                              name="bil_roy_m1"
                                              type="number"
                                              value="{{ $nbbilletcompa->bil_roy_m1 }}"
                                              class="form-control"
                                              placeholder="Nombre de billet"
                                            />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group row">
                                        <div class="form-group form-group-default">
                                            <label>Mois 2</label>
                                            <input
                                              id="bil_roy_m2"
                                              name="bil_roy_m2"
                                              type="number"
                                              value="{{ $nbbilletcompa->bil_roy_m2 }}"
                                              class="form-control"
                                              placeholder="Nombre de billet"
                                            />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group row">
                                        <div class="form-group form-group-default">
                                            <label>Mois 3</label>
                                            <input
                                              id="bil_roy_m3"
                                              name="bil_roy_m3"
                                              type="number"
                                              value="{{ $nbbilletcompa->bil_roy_m3 }}"
                                              class="form-control"
                                              placeholder="Nombre de billet"
                                            />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <br/>
                                        <h4 class="number-center">Ethiopan Airlines</h4>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group row">
                                        <div class="form-group form-group-default">
                                            <label>Mois 1</label>
                                            <input
                                              id="bil_etio_m1"
                                              name="bil_etio_m1"
                                              type="number"
                                              value="{{ $nbbilletcompa->bil_etio_m1 }}"
                                              class="form-control"
                                              placeholder="Nombre de billet"
                                            />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group row">
                                        <div class="form-group form-group-default">
                                            <label>Mois 2</label>
                                            <input
                                              id="bil_etio_m2"
                                              name="bil_etio_m2"
                                              type="number"
                                              value="{{ $nbbilletcompa->bil_etio_m2 }}"
                                              class="form-control"
                                              placeholder="Nombre de billet"
                                            />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group row">
                                        <div class="form-group form-group-default">
                                            <label>Mois 3</label>
                                            <input
                                              id="bil_etio_m3"
                                              name="bil_etio_m3"
                                              type="number"
                                              value="{{ $nbbilletcompa->bil_etio_m3 }}"
                                              class="form-control"
                                              placeholder="Nombre de billet"
                                            />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <br/>
                                        <h4 class="number-center">Air Alger</h4>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group row">
                                        <div class="form-group form-group-default">
                                            <label>Mois 1</label>
                                            <input
                                              id="bil_alg_m1"
                                              name="bil_alg_m1"
                                              type="number"
                                              value="{{ $nbbilletcompa->bil_alg_m1 }}"
                                              class="form-control"
                                              placeholder="Nombre de billet"
                                            />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group row">
                                        <div class="form-group form-group-default">
                                            <label>Mois 2</label>
                                            <input
                                              id="bil_alg_m2"
                                              name="bil_alg_m2"
                                              type="number"
                                              value="{{ $nbbilletcompa->bil_alg_m2 }}"
                                              class="form-control"
                                              placeholder="Nombre de billet"
                                            />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group row">
                                        <div class="form-group form-group-default">
                                            <label>Mois 3</label>
                                            <input
                                              id="bil_alg_m3"
                                              name="bil_alg_m3"
                                              type="number"
                                              value="{{ $nbbilletcompa->bil_alg_m3 }}"
                                              class="form-control"
                                              placeholder="Nombre de billet"
                                            />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <br/>
                                        <h4 class="number-center">Turkish Airlines</h4>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group row">
                                        <div class="form-group form-group-default">
                                            <label>Mois 1</label>
                                            <input
                                              id="bil_tur_m1"
                                              name="bil_tur_m1"
                                              type="number"
                                              value="{{ $nbbilletcompa->bil_tur_m1 }}"
                                              class="form-control"
                                              placeholder="Nombre de billet"
                                            />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group row">
                                        <div class="form-group form-group-default">
                                            <label>Mois 2</label>
                                            <input
                                              id="bil_tur_m2"
                                              name="bil_tur_m2"
                                              type="number"
                                              value="{{ $nbbilletcompa->bil_tur_m2 }}"
                                              class="form-control"
                                              placeholder="Nombre de billet"
                                            />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group row">
                                        <div class="form-group form-group-default">
                                            <label>Mois 3</label>
                                            <input
                                              id="bil_tur_m3"
                                              name="bil_tur_m3"
                                              type="number"
                                              value="{{ $nbbilletcompa->bil_tur_m3 }}"
                                              class="form-control"
                                              placeholder="Nombre de billet"
                                            />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <br/>
                                        <h4 class="number-center">Asky</h4>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group row">
                                        <div class="form-group form-group-default">
                                            <label>Mois 1</label>
                                            <input
                                              id="bil_ask_m1"
                                              name="bil_ask_m1"
                                              type="number"
                                              value="{{ $nbbilletcompa->bil_ask_m1 }}"
                                              class="form-control"
                                              placeholder="Nombre de billet"
                                            />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group row">
                                        <div class="form-group form-group-default">
                                            <label>Mois 2</label>
                                            <input
                                              id="bil_ask_m2"
                                              name="bil_ask_m2"
                                              type="number"
                                              value="{{ $nbbilletcompa->bil_ask_m2 }}"
                                              class="form-control"
                                              placeholder="Nombre de billet"
                                            />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group row">
                                        <div class="form-group form-group-default">
                                            <label>Mois 3</label>
                                            <input
                                              id="bil_ask_m3"
                                              name="bil_ask_m3"
                                              type="number"
                                              value="{{ $nbbilletcompa->bil_ask_m3 }}"
                                              class="form-control"
                                              placeholder="Nombre de billet"
                                            />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <br/>
                                        <h4 class="number-center">Brussels Airlines</h4>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group row">
                                        <div class="form-group form-group-default">
                                            <label>Mois 1</label>
                                            <input
                                              id="bil_bru_m1"
                                              name="bil_bru_m1"
                                              type="number"
                                              value="{{ $nbbilletcompa->bil_bru_m1 }}"
                                              class="form-control"
                                              placeholder="Nombre de billet"
                                            />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group row">
                                        <div class="form-group form-group-default">
                                            <label>Mois 2</label>
                                            <input
                                              id="bil_bru_m2"
                                              name="bil_bru_m2"
                                              type="number"
                                              value="{{ $nbbilletcompa->bil_bru_m2 }}"
                                              class="form-control"
                                              placeholder="Nombre de billet"
                                            />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group row">
                                        <div class="form-group form-group-default">
                                            <label>Mois 3</label>
                                            <input
                                              id="bil_bru_m3"
                                              name="bil_bru_m3"
                                              type="number"
                                              value="{{ $nbbilletcompa->bil_bru_m3 }}"
                                              class="form-control"
                                              placeholder="Nombre de billet"
                                            />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <br/>
                                        <h4 class="number-center">Autres nbbilletcompas</h4>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group row">
                                        <div class="form-group form-group-default">
                                            <label>Mois 1</label>
                                            <input
                                              id="bil_autr_m1"
                                              name="bil_autr_m1"
                                              type="number"
                                              value="{{ $nbbilletcompa->bil_autr_m1 }}"
                                              class="form-control"
                                              placeholder="Nombre de billet"
                                            />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group row">
                                        <div class="form-group form-group-default">
                                            <label>Mois 2</label>
                                            <input
                                              id="bil_autr_m2"
                                              name="bil_autr_m2"
                                              type="number"
                                              value="{{ $nbbilletcompa->bil_autr_m2 }}"
                                              class="form-control"
                                              placeholder="Nombre de billet"
                                            />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group row">
                                        <div class="form-group form-group-default">
                                            <label>Mois 3</label>
                                            <input
                                              id="bil_autr_m3"
                                              name="bil_autr_m3"
                                              type="number"
                                              value="{{ $nbbilletcompa->bil_autr_m3 }}"
                                              class="form-control"
                                              placeholder="Nombre de billet"
                                            />
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </form>
                        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                            <button type="submit" class="btn btn-primary"><i class="far fa-save"></i> Enregistrer</button>
                            <a href="{{ route('nbbilletcompa.index') }}" class="btn btn-danger"><i class="fas fa-angle-double-left"></i> Retour</a>
                        </div>
                    </div>
                </div>
            </div>

    </form>
    </div>
</div>


@endsection
