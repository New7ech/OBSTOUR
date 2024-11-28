@extends('layouts.app')
@section('contenus')

<div class="container">
    <div class="page-inner">
        <div class="shadow-lg p-3 mb-5 bg-body rounded">
            <div class="text-center">
            <p class="fs-3">ZONE DE PROVENANCE</p>
            </div>
        </div>
        <form action="{{ route('zone.update', $zone->id) }}" class="row g-3 needs-validation" method="post" novalidate>
            @csrf
            @method('PUT')

            <div class="col-12 grid-margin">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">CIRCUITS INTER-ETATS</h3>
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
                                                <h5 class="card-title">Résident</h5>
                                                <div class="form-group row">
                                                    <label class="col-sm-6 col-form-label">Nationaux</label>
                                                    <div class="col-sm-6">
                                                        <input id="cur_etat_resi_nat_m1" name="cur_etat_resi_nat_m1" type="number" class="form-control" value="{{ $zone->cur_etat_resi_nat_m1 }}"/>
                                                    </div>
                                                </div>
                                                    <div class="form-group row">
                                                            <label class="col-sm-6 col-form-label">Expatriées</label>
                                                        <div class="col-sm-6">
                                                            <input id="cur_etat_resi_exp_m1" name="cur_etat_resi_exp_m1" type="number" class="form-control" value="{{ $zone->cur_etat_resi_exp_m1 }}"/>
                                                        </div>
                                                    </div>
                                            </div>
                                        </div>
                                    </div>
                                        <div class="col-sm-8">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h5 class="card-title">Non-résident</h5>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group row">
                                                                <label class="col-sm-3 col-form-label">Burkinabé</label>
                                                                <div class="col-sm-9">
                                                                    <input id="cur_etat_nonresi_bf_m1" name="cur_etat_nonresi_bf_m1" type="number" class="form-control" value="{{ $zone->cur_etat_nonresi_bf_m1 }}"/>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group row">
                                                                <label class="col-sm-3 col-form-label">Afrique</label>
                                                                <div class="col-sm-9">
                                                                    <input id="cur_etat_nonresi_afr_m1" name="cur_etat_nonresi_afr_m1" type="number" class="form-control" value="{{ $zone->cur_etat_nonresi_afr_m1 }}"/>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group row">
                                                                <label class="col-sm-3 col-form-label">Amérique</label>
                                                                <div class="col-sm-9">
                                                                    <input id="cur_etat_nonresi_amrq_m1" name="cur_etat_nonresi_amrq_m1" type="number" class="form-control" value="{{ $zone->cur_etat_nonresi_amrq_m1 }}"/>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group row">
                                                                <label class="col-sm-3 col-form-label">Asie-passifique</label>
                                                                <div class="col-sm-9">
                                                                    <input id="cur_etat_nonresi_asi_m1" name="cur_etat_nonresi_asi_m1" type="number" class="form-control" value="{{ $zone->cur_etat_nonresi_asi_m1 }}"/>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group row">
                                                            <label class="col-sm-3 col-form-label">Europe</label>
                                                            <div class="col-sm-9">
                                                                <input id="cur_etat_nonresi_erop_m1" name="cur_etat_nonresi_erop_m1" type="number" class="form-control" value="{{ $zone->cur_etat_nonresi_erop_m1 }}"/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                            </div>
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
                                                <h5 class="card-title">Résident</h5>
                                                <div class="form-group row">
                                                    <label class="col-sm-6 col-form-label">Nationaux</label>
                                                    <div class="col-sm-6">
                                                        <input id="cur_etat_resi_nat_m2" name="cur_etat_resi_nat_m2" type="number" class="form-control" value="{{ $zone->cur_etat_resi_nat_m2 }}"/>
                                                    </div>
                                                </div>
                                                    <div class="form-group row">
                                                            <label class="col-sm-6 col-form-label">Expatriées</label>
                                                        <div class="col-sm-6">
                                                            <input id="cur_etat_resi_exp_m2" name="cur_etat_resi_exp_m2" type="number" class="form-control" value="{{ $zone->cur_etat_resi_exp_m2 }}"/>
                                                        </div>
                                                    </div>
                                            </div>
                                        </div>
                                    </div>
                                        <div class="col-sm-8">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h5 class="card-title">Non-résident</h5>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group row">
                                                                <label class="col-sm-3 col-form-label">Burkinabé</label>
                                                                <div class="col-sm-9">
                                                                    <input id="cur_etat_nonresi_bf_m2" name="cur_etat_nonresi_bf_m2" type="number" class="form-control" value="{{ $zone->cur_etat_nonresi_bf_m2 }}"/>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group row">
                                                                <label class="col-sm-3 col-form-label">Afrique</label>
                                                                <div class="col-sm-9">
                                                                    <input id="cur_etat_nonresi_afr_m2" name="cur_etat_nonresi_afr_m2" type="number" class="form-control" value="{{ $zone->cur_etat_nonresi_afr_m2 }}"/>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group row">
                                                                <label class="col-sm-3 col-form-label">Amérique</label>
                                                                <div class="col-sm-9">
                                                                    <input id="cur_etat_nonresi_amrq_m2" name="cur_etat_nonresi_amrq_m2" type="number" class="form-control" value="{{ $zone->cur_etat_nonresi_amrq_m2 }}"/>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group row">
                                                                <label class="col-sm-3 col-form-label">Asie-passifique</label>
                                                                <div class="col-sm-9">
                                                                    <input id="cur_etat_nonresi_asi_m2" name="cur_etat_nonresi_asi_m2" type="number" class="form-control" value="{{ $zone->cur_etat_nonresi_asi_m2 }}"/>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group row">
                                                            <label class="col-sm-3 col-form-label">Europe</label>
                                                            <div class="col-sm-9">
                                                                <input id="cur_etat_nonresi_erop_m2" name="cur_etat_nonresi_erop_m2" type="number" class="form-control" value="{{ $zone->cur_etat_nonresi_erop_m2 }}"/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                            </div>
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
                                                <h5 class="card-title">Résident</h5>
                                                <div class="form-group row">
                                                    <label class="col-sm-6 col-form-label">Nationaux</label>
                                                    <div class="col-sm-6">
                                                        <input id="cur_etat_resi_nat_m3" name="cur_etat_resi_nat_m3" type="number" class="form-control" value="{{ $zone->cur_etat_resi_nat_m3 }}"/>
                                                    </div>
                                                </div>
                                                    <div class="form-group row">
                                                            <label class="col-sm-6 col-form-label">Expatriées</label>
                                                        <div class="col-sm-6">
                                                            <input id="cur_etat_resi_exp_m3" name="cur_etat_resi_exp_m3" type="number" class="form-control" value="{{ $zone->cur_etat_resi_exp_m3 }}"/>
                                                        </div>
                                                    </div>
                                            </div>
                                        </div>
                                    </div>
                                        <div class="col-sm-8">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h5 class="card-title">Non-résident</h5>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group row">
                                                                <label class="col-sm-3 col-form-label">Burkinabé</label>
                                                                <div class="col-sm-9">
                                                                    <input id="cur_etat_nonresi_bf_m3" name="cur_etat_nonresi_bf_m3" type="number" class="form-control" value="{{ $zone->cur_etat_nonresi_bf_m3 }}"/>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group row">
                                                                <label class="col-sm-3 col-form-label">Afrique</label>
                                                                <div class="col-sm-9">
                                                                    <input id="cur_etat_nonresi_afr_m3" name="cur_etat_nonresi_afr_m3" type="number" class="form-control" value="{{ $zone->cur_etat_nonresi_afr_m3 }}"/>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group row">
                                                                <label class="col-sm-3 col-form-label">Amérique</label>
                                                                <div class="col-sm-9">
                                                                    <input id="cur_etat_nonresi_amrq_m3" name="cur_etat_nonresi_amrq_m3" type="number" class="form-control" value="{{ $zone->cur_etat_nonresi_amrq_m3 }}"/>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group row">
                                                                <label class="col-sm-3 col-form-label">Asie-passifique</label>
                                                                <div class="col-sm-9">
                                                                    <input id="cur_etat_nonresi_asi_m3" name="cur_etat_nonresi_asi_m3" type="number" class="form-control" value="{{ $zone->cur_etat_nonresi_asi_m3 }}"/>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group row">
                                                            <label class="col-sm-3 col-form-label">Europe</label>
                                                            <div class="col-sm-9">
                                                                <input id="cur_etat_nonresi_erop_m3" name="cur_etat_nonresi_erop_m3" type="number" class="form-control" value="{{ $zone->cur_etat_nonresi_erop_m3 }}"/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                            </div>
                        <h3 class="card-title">CIRCUITS INTERNES</h3>
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
                                                <h5 class="card-title">Résident</h5>
                                                <div class="form-group row">
                                                    <label class="col-sm-6 col-form-label">Nationaux</label>
                                                    <div class="col-sm-6">
                                                        <input id="cur_intr_resi_nat_m1" name="cur_intr_resi_nat_m1" type="number" class="form-control" value="{{ $zone->cur_intr_resi_nat_m1 }}"/>
                                                    </div>
                                                </div>
                                                    <div class="form-group row">
                                                            <label class="col-sm-6 col-form-label">Expatriées</label>
                                                        <div class="col-sm-6">
                                                            <input id="cur_intr_resi_exp_m1" name="cur_intr_resi_exp_m1" type="number" class="form-control" value="{{ $zone->cur_intr_resi_exp_m1 }}"/>
                                                        </div>
                                                    </div>
                                            </div>
                                        </div>
                                    </div>
                                        <div class="col-sm-8">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h5 class="card-title">Non-résident</h5>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group row">
                                                                <label class="col-sm-3 col-form-label">Burkinabé</label>
                                                                <div class="col-sm-9">
                                                                    <input id="cur_intr_nonresi_bf_m1" name="cur_intr_nonresi_bf_m1" type="number" class="form-control" value="{{ $zone->cur_intr_nonresi_bf_m1 }}"/>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group row">
                                                                <label class="col-sm-3 col-form-label">Afrique</label>
                                                                <div class="col-sm-9">
                                                                    <input id="cur_intr_nonresi_afr_m1" name="cur_intr_nonresi_afr_m1" type="number" class="form-control" value="{{ $zone->cur_intr_nonresi_afr_m1 }}"/>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group row">
                                                                <label class="col-sm-3 col-form-label">Amérique</label>
                                                                <div class="col-sm-9">
                                                                    <input id="cur_intr_nonresi_amrq_m1" name="cur_intr_nonresi_amrq_m1" type="number" class="form-control" value="{{ $zone->cur_intr_nonresi_amrq_m1 }}"/>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group row">
                                                                <label class="col-sm-3 col-form-label">Asie-passifique</label>
                                                                <div class="col-sm-9">
                                                                    <input id="cur_intr_nonresi_asi_m1" name="cur_intr_nonresi_asi_m1" type="number" class="form-control" value="{{ $zone->cur_intr_nonresi_asi_m1 }}"/>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group row">
                                                            <label class="col-sm-3 col-form-label">Europe</label>
                                                            <div class="col-sm-9">
                                                                <input id="cur_intr_nonresi_erop_m1" name="cur_intr_nonresi_erop_m1" type="number" class="form-control" value="{{ $zone->cur_intr_nonresi_erop_m1 }}"/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                            </div>
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
                                                <h5 class="card-title">Résident</h5>
                                                <div class="form-group row">
                                                    <label class="col-sm-6 col-form-label">Nationaux</label>
                                                    <div class="col-sm-6">
                                                        <input id="cur_intr_resi_nat_m2" name="cur_intr_resi_nat_m2" type="number" class="form-control" value="{{ $zone->cur_intr_resi_nat_m2 }}"/>
                                                    </div>
                                                </div>
                                                    <div class="form-group row">
                                                            <label class="col-sm-6 col-form-label">Expatriées</label>
                                                        <div class="col-sm-6">
                                                            <input id="cur_intr_resi_exp_m2" name="cur_intr_resi_exp_m2" type="number" class="form-control" value="{{ $zone->cur_intr_resi_exp_m2 }}"/>
                                                        </div>
                                                    </div>
                                            </div>
                                        </div>
                                    </div>
                                        <div class="col-sm-8">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h5 class="card-title">Non-résident</h5>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group row">
                                                                <label class="col-sm-3 col-form-label">Burkinabé</label>
                                                                <div class="col-sm-9">
                                                                    <input id="cur_intr_nonresi_bf_m2" name="cur_intr_nonresi_bf_m2" type="number" class="form-control" value="{{ $zone->cur_intr_nonresi_bf_m2 }}"/>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group row">
                                                                <label class="col-sm-3 col-form-label">Afrique</label>
                                                                <div class="col-sm-9">
                                                                    <input id="cur_intr_nonresi_afr_m2" name="cur_intr_nonresi_afr_m2" type="number" class="form-control" value="{{ $zone->cur_intr_nonresi_afr_m2 }}"/>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group row">
                                                                <label class="col-sm-3 col-form-label">Amérique</label>
                                                                <div class="col-sm-9">
                                                                    <input id="cur_intr_nonresi_amrq_m2" name="cur_intr_nonresi_amrq_m2" type="number" class="form-control" value="{{ $zone->cur_intr_nonresi_amrq_m2 }}"/>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group row">
                                                                <label class="col-sm-3 col-form-label">Asie-passifique</label>
                                                                <div class="col-sm-9">
                                                                    <input id="cur_intr_nonresi_asi_m2" name="cur_intr_nonresi_asi_m2" type="number" class="form-control" value="{{ $zone->cur_intr_nonresi_asi_m2 }}"/>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group row">
                                                            <label class="col-sm-3 col-form-label">Europe</label>
                                                            <div class="col-sm-9">
                                                                <input id="cur_intr_nonresi_erop_m2" name="cur_intr_nonresi_erop_m2" type="number" class="form-control" value="{{ $zone->cur_intr_nonresi_erop_m2 }}"/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                            </div>
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
                                                <h5 class="card-title">Résident</h5>
                                                <div class="form-group row">
                                                    <label class="col-sm-6 col-form-label">Nationaux</label>
                                                    <div class="col-sm-6">
                                                        <input id="cur_intr_resi_nat_m3" name="cur_intr_resi_nat_m3" type="number" class="form-control" value="{{ $zone->cur_intr_resi_nat_m3 }}"/>
                                                    </div>
                                                </div>
                                                    <div class="form-group row">
                                                            <label class="col-sm-6 col-form-label">Expatriées</label>
                                                        <div class="col-sm-6">
                                                            <input id="cur_intr_resi_exp_m3" name="cur_intr_resi_exp_m3" type="number" class="form-control" value="{{ $zone->cur_intr_resi_exp_m3 }}"/>
                                                        </div>
                                                    </div>
                                            </div>
                                        </div>
                                    </div>
                                        <div class="col-sm-8">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h5 class="card-title">Non-résident</h5>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group row">
                                                                <label class="col-sm-3 col-form-label">Burkinabé</label>
                                                                <div class="col-sm-9">
                                                                    <input id="cur_intr_nonresi_bf_m3" name="cur_intr_nonresi_bf_m3" type="number" class="form-control" value="{{ $zone->cur_intr_nonresi_bf_m3 }}"/>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group row">
                                                                <label class="col-sm-3 col-form-label">Afrique</label>
                                                                <div class="col-sm-9">
                                                                    <input id="cur_intr_nonresi_afr_m3" name="cur_intr_nonresi_afr_m3" type="number" class="form-control" value="{{ $zone->cur_intr_nonresi_afr_m3 }}"/>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group row">
                                                                <label class="col-sm-3 col-form-label">Amérique</label>
                                                                <div class="col-sm-9">
                                                                    <input id="cur_intr_nonresi_amrq_m3" name="cur_intr_nonresi_amrq_m3" type="number" class="form-control" value="{{ $zone->cur_intr_nonresi_amrq_m3 }}"/>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group row">
                                                                <label class="col-sm-3 col-form-label">Asie-passifique</label>
                                                                <div class="col-sm-9">
                                                                    <input id="cur_intr_nonresi_asi_m3" name="cur_intr_nonresi_asi_m3" type="number" class="form-control" value="{{ $zone->cur_intr_nonresi_asi_m3 }}"/>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group row">
                                                            <label class="col-sm-3 col-form-label">Europe</label>
                                                            <div class="col-sm-9">
                                                                <input id="cur_intr_nonresi_erop_m3" name="cur_intr_nonresi_erop_m3" type="number" class="form-control" value="{{ $zone->cur_intr_nonresi_erop_m3 }}"/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                            </div>
                        <h3 class="card-title">EXCURSIONS</h3>
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
                                                <h5 class="card-title">Résident</h5>
                                                <div class="form-group row">
                                                    <label class="col-sm-6 col-form-label">Nationaux</label>
                                                    <div class="col-sm-6">
                                                        <input id="cur_exct_resi_nat_m1" name="cur_exct_resi_nat_m1" type="number" class="form-control" value="{{ $zone->cur_exct_resi_nat_m1 }}"/>
                                                    </div>
                                                </div>
                                                    <div class="form-group row">
                                                            <label class="col-sm-6 col-form-label">Expatriées</label>
                                                        <div class="col-sm-6">
                                                            <input id="cur_exct_resi_exp_m1" name="cur_exct_resi_exp_m1" type="number" class="form-control" value="{{ $zone->cur_exct_resi_exp_m1 }}"/>
                                                        </div>
                                                    </div>
                                            </div>
                                        </div>
                                    </div>
                                        <div class="col-sm-8">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h5 class="card-title">Non-résident</h5>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group row">
                                                                <label class="col-sm-3 col-form-label">Burkinabé</label>
                                                                <div class="col-sm-9">
                                                                    <input id="cur_exct_nonresi_bf_m1" name="cur_exct_nonresi_bf_m1" type="number" class="form-control" value="{{ $zone->cur_exct_nonresi_bf_m1 }}"/>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group row">
                                                                <label class="col-sm-3 col-form-label">Afrique</label>
                                                                <div class="col-sm-9">
                                                                    <input id="cur_exct_nonresi_afr_m1" name="cur_exct_nonresi_afr_m1" type="number" class="form-control" value="{{ $zone->cur_exct_nonresi_afr_m1 }}"/>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group row">
                                                                <label class="col-sm-3 col-form-label">Amérique</label>
                                                                <div class="col-sm-9">
                                                                    <input id="cur_exct_nonresi_amrq_m1" name="cur_exct_nonresi_amrq_m1" type="number" class="form-control" value="{{ $zone->cur_exct_nonresi_amrq_m1 }}"/>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group row">
                                                                <label class="col-sm-3 col-form-label">Asie-passifique</label>
                                                                <div class="col-sm-9">
                                                                    <input id="cur_exct_nonresi_asi_m1" name="cur_exct_nonresi_asi_m1" type="number" class="form-control" value="{{ $zone->cur_exct_nonresi_asi_m1 }}"/>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group row">
                                                            <label class="col-sm-3 col-form-label">Europe</label>
                                                            <div class="col-sm-9">
                                                                <input id="cur_exct_nonresi_erop_m1" name="cur_exct_nonresi_erop_m1" type="number" class="form-control" value="{{ $zone->cur_exct_nonresi_erop_m1 }}"/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                            </div>
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
                                                <h5 class="card-title">Résident</h5>
                                                <div class="form-group row">
                                                    <label class="col-sm-6 col-form-label">Nationaux</label>
                                                    <div class="col-sm-6">
                                                        <input id="cur_exct_resi_nat_m2" name="cur_exct_resi_nat_m2" type="number" class="form-control" value="{{ $zone->cur_exct_resi_nat_m2 }}"/>
                                                    </div>
                                                </div>
                                                    <div class="form-group row">
                                                            <label class="col-sm-6 col-form-label">Expatriées</label>
                                                        <div class="col-sm-6">
                                                            <input id="cur_exct_resi_exp_m2" name="cur_exct_resi_exp_m2" type="number" class="form-control" value="{{ $zone->cur_exct_resi_exp_m2 }}"/>
                                                        </div>
                                                    </div>
                                            </div>
                                        </div>
                                    </div>
                                        <div class="col-sm-8">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h5 class="card-title">Non-résident</h5>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group row">
                                                                <label class="col-sm-3 col-form-label">Burkinabé</label>
                                                                <div class="col-sm-9">
                                                                    <input id="cur_exct_nonresi_bf_m2" name="cur_exct_nonresi_bf_m2" type="number" class="form-control" value="{{ $zone->cur_exct_nonresi_bf_m2 }}"/>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group row">
                                                                <label class="col-sm-3 col-form-label">Afrique</label>
                                                                <div class="col-sm-9">
                                                                    <input id="cur_exct_nonresi_afr_m2" name="cur_exct_nonresi_afr_m2" type="number" class="form-control" value="{{ $zone->cur_exct_nonresi_afr_m2 }}"/>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group row">
                                                                <label class="col-sm-3 col-form-label">Amérique</label>
                                                                <div class="col-sm-9">
                                                                    <input id="cur_exct_nonresi_amrq_m2" name="cur_exct_nonresi_amrq_m2" type="number" class="form-control" value="{{ $zone->cur_exct_nonresi_amrq_m2 }}"/>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group row">
                                                                <label class="col-sm-3 col-form-label">Asie-passifique</label>
                                                                <div class="col-sm-9">
                                                                    <input id="cur_exct_nonresi_asi_m2" name="cur_exct_nonresi_asi_m2" type="number" class="form-control" value="{{ $zone->cur_exct_nonresi_asi_m2 }}"/>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group row">
                                                            <label class="col-sm-3 col-form-label">Europe</label>
                                                            <div class="col-sm-9">
                                                                <input id="cur_exct_nonresi_erop_m2" name="cur_exct_nonresi_erop_m2" type="number" class="form-control" value="{{ $zone->cur_exct_nonresi_erop_m2 }}"/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                            </div>
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
                                                <h5 class="card-title">Résident</h5>
                                                <div class="form-group row">
                                                    <label class="col-sm-6 col-form-label">Nationaux</label>
                                                    <div class="col-sm-6">
                                                        <input id="cur_exct_resi_nat_m3" name="cur_exct_resi_nat_m3" type="number" class="form-control" value="{{ $zone->cur_exct_resi_nat_m3 }}"/>
                                                    </div>
                                                </div>
                                                    <div class="form-group row">
                                                            <label class="col-sm-6 col-form-label">Expatriées</label>
                                                        <div class="col-sm-6">
                                                            <input id="cur_exct_resi_exp_m3" name="cur_exct_resi_exp_m3" type="number" class="form-control" value="{{ $zone->cur_exct_resi_exp_m3 }}"/>
                                                        </div>
                                                    </div>
                                            </div>
                                        </div>
                                    </div>
                                        <div class="col-sm-8">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h5 class="card-title">Non-résident</h5>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group row">
                                                                <label class="col-sm-3 col-form-label">Burkinabé</label>
                                                                <div class="col-sm-9">
                                                                    <input id="cur_exct_nonresi_bf_m3" name="cur_exct_nonresi_bf_m3" type="number" class="form-control" value="{{ $zone->cur_exct_nonresi_bf_m3 }}"/>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group row">
                                                                <label class="col-sm-3 col-form-label">Afrique</label>
                                                                <div class="col-sm-9">
                                                                    <input id="cur_exct_nonresi_afr_m3" name="cur_exct_nonresi_afr_m3" type="number" class="form-control" value="{{ $zone->cur_exct_nonresi_afr_m3 }}"/>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group row">
                                                                <label class="col-sm-3 col-form-label">Amérique</label>
                                                                <div class="col-sm-9">
                                                                    <input id="cur_exct_nonresi_amrq_m3" name="cur_exct_nonresi_amrq_m3" type="number" class="form-control" value="{{ $zone->cur_exct_nonresi_amrq_m3 }}"/>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group row">
                                                                <label class="col-sm-3 col-form-label">Asie-passifique</label>
                                                                <div class="col-sm-9">
                                                                    <input id="cur_exct_nonresi_asi_m3" name="cur_exct_nonresi_asi_m3" type="number" class="form-control" value="{{ $zone->cur_exct_nonresi_asi_m3 }}"/>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group row">
                                                            <label class="col-sm-3 col-form-label">Europe</label>
                                                            <div class="col-sm-9">
                                                                <input id="cur_exct_nonresi_erop_m3" name="cur_exct_nonresi_erop_m3" type="number" class="form-control" value="{{ $zone->cur_exct_nonresi_erop_m3 }}"/>
                                                            </div>
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
                            <a href="{{ route('zone.index') }}" class="btn btn-danger"><i class="fas fa-angle-double-left"></i> Retour</a>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection
