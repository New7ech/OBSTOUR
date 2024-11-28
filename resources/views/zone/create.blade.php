@extends('layouts.app')
@section('contenus')

<div class="container">
    <div class="page-inner">
        <div class="shadow-lg p-3 mb-5 bg-body rounded">
            <div class="text-center">
            <p class="fs-3">ZONE DE PROVENANCE</p>
            </div>
        </div>
        @if ($errors->any())  
        <div class="alert alert-danger">  
            <ul>  
                @foreach ($errors->all() as $error)  
                    <li>{{ $error }}</li>  
                @endforeach  
            </ul>  
        </div>  
    @endif 
        <form class="modal-form row g-3 needs-validation" action="{{ route('zone.store') }}" method="post" novalidate>  
            @csrf  
            <div class="col-12 grid-margin">  
                <div class="card">  
                    <div class="card-body">  
                        <h3 class="card-title">CIRCUITS INTER-ETATS</h3>  
                        <div class="form-sample">  
                            <div class="row">  
                                <h2>Circuit inter-Etat</h2>  
                                <div class="col-md-3 col-lg-3">  
                                    <div class="mb-3">  
                                        <input type="number" class="form-control @error('cur_intr_etat_resi_nat') is-invalid @enderror" id="cur_intr_etat_resi_nat" name="cur_intr_etat_resi_nat" placeholder="Résident nationaux" required>  
                                        @error('cur_intr_etat_resi_nat')  
                                            <div class="invalid-feedback">{{ $message }}</div>  
                                        @enderror  
                                    </div>  
                                </div>  
                                <div class="col-md-3 col-lg-3">  
                                    <div class="mb-3">  
                                        <input type="number" class="form-control @error('cur_intr_etat_resi_exp') is-invalid @enderror" id="cur_intr_etat_resi_exp" name="cur_intr_etat_resi_exp" placeholder="Résidents expatriées" required>  
                                        @error('cur_intr_etat_resi_exp')  
                                            <div class="invalid-feedback">{{ $message }}</div>  
                                        @enderror  
                                    </div>  
                                </div>  
                                <div class="col-md-3 col-lg-3">  
                                    <div class="mb-3">  
                                        <input type="number" class="form-control @error('cur_intr_etat_nonresi_bf') is-invalid @enderror" id="cur_intr_etat_nonresi_bf" name="cur_intr_etat_nonresi_bf" placeholder="Burkinabé" required>  
                                        @error('cur_intr_etat_nonresi_bf')  
                                            <div class="invalid-feedback">{{ $message }}</div>  
                                        @enderror  
                                    </div>  
                                </div>  
                                <div class="col-md-3 col-lg-3">  
                                    <div class="mb-3">  
                                        <input type="number" class="form-control @error('cur_intr_etat_nonresi_afr') is-invalid @enderror" id="cur_intr_etat_nonresi_afr" name="cur_intr_etat_nonresi_afr" placeholder="Afrique" required>  
                                        @error('cur_intr_etat_nonresi_afr')  
                                            <div class="invalid-feedback">{{ $message }}</div>  
                                        @enderror  
                                    </div>  
                                </div>  
                                <div class="col-md-3 col-lg-3">  
                                    <div class="mb-3">  
                                        <input type="number" class="form-control @error('cur_intr_etat_nonresi_amrq') is-invalid @enderror" id="cur_intr_etat_nonresi_amrq" name="cur_intr_etat_nonresi_amrq" placeholder="Amérique" required>  
                                        @error('cur_intr_etat_nonresi_amrq')  
                                            <div class="invalid-feedback">{{ $message }}</div>  
                                        @enderror  
                                    </div>  
                                </div>  
                                <div class="col-md-3 col-lg-3">  
                                    <div class="mb-3">  
                                        <input type="number" class="form-control @error('cur_intr_etat_nonresi_asi') is-invalid @enderror" id="cur_intr_etat_nonresi_asi" name="cur_intr_etat_nonresi_asi" placeholder="Asie-pacifique" required>  
                                        @error('cur_intr_etat_nonresi_asi')  
                                            <div class="invalid-feedback">{{ $message }}</div>  
                                        @enderror  
                                    </div>  
                                </div>  
                                <div class="col-md-3 col-lg-3">  
                                    <div class="mb-3">  
                                        <input type="number" class="form-control @error('cur_intr_etat_nonresi_erop') is-invalid @enderror" id="cur_intr_etat_nonresi_erop" name="cur_intr_etat_nonresi_erop" placeholder="Europe" required>  
                                        @error('cur_intr_etat_nonresi_asi')  
                                            <div class="invalid-feedback">{{ $message }}</div>  
                                        @enderror 
                                    </div>  
                                </div>  
                                <div class="col-md-3 col-lg-3">  
                                    <div class="mb-3">  
                                        <input type="number" class="form-control @error('cur_intr_etat_otr') is-invalid @enderror" id="cur_intr_etat_otr" name="cur_intr_etat_otr" placeholder="Autres">  
                                        @error('cur_intr_etat_otr')  
                                            <div class="invalid-feedback">{{ $message }}</div>  
                                        @enderror 
                                    </div>  
                                </div>  
                                
                            </div>   
                            <hr>  
                            <div class="row">  
                                <h2>Circuit interne</h2>  
                                <div class="col-md-3 col-lg-3">  
                                    <div class="mb-3">  
                                        <input type="number" class="form-control @error('cur_intr_resi_nat') is-invalid @enderror" id="cur_intr_resi_nat" name="cur_intr_resi_nat" placeholder="Résident nationaux" required>  
                                        @error('cur_intr_resi_nat')  
                                            <div class="invalid-feedback">{{ $message }}</div>  
                                        @enderror  
                                    </div>  
                                </div>  
                                <div class="col-md-3 col-lg-3">  
                                    <div class="mb-3">  
                                        <input type="number" class="form-control @error('cur_intr_resi_exp') is-invalid @enderror" id="cur_intr_resi_exp" name="cur_intr_resi_exp" placeholder="Résidents expatriées" required>  
                                        @error('cur_intr_resi_exp')  
                                            <div class="invalid-feedback">{{ $message }}</div>  
                                        @enderror  
                                    </div>  
                                </div>  
                                <div class="col-md-3 col-lg-3">  
                                    <div class="mb-3">  
                                        <input type="number" class="form-control @error('cur_intr_nonresi_bf') is-invalid @enderror" id="cur_intr_nonresi_bf" name="cur_intr_nonresi_bf" placeholder="Burkinabé" required>  
                                        @error('cur_intr_nonresi_bf')  
                                            <div class="invalid-feedback">{{ $message }}</div>  
                                        @enderror  
                                    </div>  
                                </div>  
                                <div class="col-md-3 col-lg-3">  
                                    <div class="mb-3">  
                                        <input type="number" class="form-control @error('cur_intr_nonresi_afr') is-invalid @enderror" id="cur_intr_nonresi_afr" name="cur_intr_nonresi_afr" placeholder="Afrique" required>  
                                        @error('cur_intr_nonresi_afr')  
                                            <div class="invalid-feedback">{{ $message }}</div>  
                                        @enderror  
                                    </div>  
                                </div>  
                                <div class="col-md-3 col-lg-3">  
                                    <div class="mb-3">  
                                        <input type="number" class="form-control @error('cur_intr_nonresi_amrq') is-invalid @enderror" id="cur_intr_nonresi_amrq" name="cur_intr_nonresi_amrq" placeholder="Amérique" required>  
                                        @error('cur_intr_nonresi_amrq')  
                                            <div class="invalid-feedback">{{ $message }}</div>  
                                        @enderror  
                                    </div>  
                                </div>  
                                <div class="col-md-3 col-lg-3">  
                                    <div class="mb-3">  
                                        <input type="number" class="form-control @error('cur_intr_nonresi_asi') is-invalid @enderror" id="cur_intr_nonresi_asi" name="cur_intr_nonresi_asi" placeholder="Asie-pacifique" required>  
                                        @error('cur_intr_nonresi_asi')  
                                            <div class="invalid-feedback">{{ $message }}</div>  
                                        @enderror  
                                    </div>  
                                </div>  
                                <div class="col-md-3 col-lg-3">  
                                    <div class="mb-3">  
                                        <input type="number" class="form-control @error('cur_intr_nonresi_erop') is-invalid @enderror" id="cur_intr_nonresi_erop" name="cur_intr_nonresi_erop" placeholder="Europe" required>  
                                        @error('cur_intr_nonresi_asi')  
                                            <div class="invalid-feedback">{{ $message }}</div>  
                                        @enderror 
                                    </div>  
                                </div>  
                                <div class="col-md-3 col-lg-3">  
                                    <div class="mb-3">  
                                        <input type="number" class="form-control @error('cur_intr_otr') is-invalid @enderror" id="cur_intr_otr" name="cur_intr_otr" placeholder="Autres">  
                                        @error('cur_intr_otr')  
                                            <div class="invalid-feedback">{{ $message }}</div>  
                                        @enderror 
                                    </div>  
                                </div>  
                                
                            </div>   
                            <hr> 
                            <div class="row">  
                                <h2>Excursions</h2>  
                                <div class="col-md-3 col-lg-3">  
                                    <div class="mb-3">  
                                        <input type="number" class="form-control @error('cur_exct_resi_nat') is-invalid @enderror" id="cur_exct_resi_nat" name="cur_exct_resi_nat" placeholder="Résidents nationaux" required>  
                                        @error('cur_exct_resi_nat')  
                                            <div class="invalid-feedback">{{ $message }}</div>  
                                        @enderror  
                                    </div>  
                                </div>  
                                <div class="col-md-3 col-lg-3">  
                                    <div class="mb-3">  
                                        <input type="number" class="form-control @error('cur_exct_resi_exp') is-invalid @enderror" id="cur_exct_resi_exp" name="cur_exct_resi_exp" placeholder="Résidents expatriées" required>  
                                        @error('cur_exct_resi_exp')  
                                            <div class="invalid-feedback">{{ $message }}</div>  
                                        @enderror  
                                    </div>  
                                </div>  
                                <div class="col-md-3 col-lg-3">  
                                    <div class="mb-3">  
                                        <input type="number" class="form-control @error('cur_exct_nonresi_bf') is-invalid @enderror" id="cur_exct_nonresi_bf" name="cur_exct_nonresi_bf" placeholder="Burkinabé" required>  
                                        @error('cur_exct_nonresi_bf')  
                                            <div class="invalid-feedback">{{ $message }}</div>  
                                        @enderror  
                                    </div>  
                                </div>  
                                <div class="col-md-3 col-lg-3">  
                                    <div class="mb-3">  
                                        <input type="number" class="form-control @error('cur_exct_nonresi_afr') is-invalid @enderror" id="cur_exct_nonresi_afr" name="cur_exct_nonresi_afr" placeholder="Afrique" required>  
                                        @error('cur_exct_nonresi_afr')  
                                            <div class="invalid-feedback">{{ $message }}</div>  
                                        @enderror  
                                    </div>  
                                </div>  
                                <div class="col-md-3 col-lg-3">  
                                    <div class="mb-3">  
                                        <input type="number" class="form-control @error('cur_exct_nonresi_amrq') is-invalid @enderror" id="cur_exct_nonresi_amrq" name="cur_exct_nonresi_amrq" placeholder="Amérique" required>  
                                        @error('cur_exct_nonresi_amrq')  
                                            <div class="invalid-feedback">{{ $message }}</div>  
                                        @enderror  
                                    </div>  
                                </div>  
                                <div class="col-md-3 col-lg-3">  
                                    <div class="mb-3">  
                                        <input type="number" class="form-control @error('cur_exct_nonresi_asi') is-invalid @enderror" id="cur_exct_nonresi_asi" name="cur_exct_nonresi_asi" placeholder="Asie-pacifique" required>  
                                        @error('cur_exct_nonresi_asi')  
                                            <div class="invalid-feedback">{{ $message }}</div>  
                                        @enderror  
                                    </div>  
                                </div>  
                                <div class="col-md-3 col-lg-3">  
                                    <div class="mb-3">  
                                        <input type="number" class="form-control @error('cur_exct_nonresi_erop') is-invalid @enderror" id="cur_exct_nonresi_erop" name="cur_exct_nonresi_erop" placeholder="Europe" required>  
                                        @error('cur_exct_nonresi_erop')  
                                            <div class="invalid-feedback">{{ $message }}</div>  
                                        @enderror  
                                    </div>  
                                </div>  
                                <div class="col-md-3 col-lg-3">  
                                    <div class="mb-3">  
                                        <input type="number" class="form-control @error('cur_exct_otr') is-invalid @enderror" id="cur_exct_otr" name="cur_exct_otr" placeholder="Autres">  
                                        @error('cur_exct_otr')  
                                            <div class="invalid-feedback">{{ $message }}</div>  
                                        @enderror  
                                    </div>  
                                </div>  
                            </div>   
                        </div>  
                    </div>  
                </div>  
            </div>  
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">  
                <button type="submit" class="btn btn-primary"><i class="far fa-save"></i> Enregistrer</button>  
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fermer</button>  
            </div>  
            
        </form>
    </div>
</div>

@endsection
