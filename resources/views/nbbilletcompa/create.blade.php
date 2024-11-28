@extends('layouts.app')
@section('contenus')

<div class="container">
    <div class="page-inner">
        <div class="shadow-lg p-3 mb-5 bg-body rounded">
            <div class="number-center">
            <p class="fs-3">BILLET EMIS PAR COMPAGNIE</p>
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
        <form class="modal-form row g-3 needs-validation" action="{{ route('nbbilletcompa.store') }}" method="post" novalidate>  
            @csrf  
            <div class="col-12 grid-margin">  
                <div class="card">  
                    <div class="card-body">  
                        <div class="row">  
                            <div class="col-md-3">  
                                <div class="form-group">  
                                    <label>Air Burkina</label>  
                                    <input  
                                        id="bil_bf"  
                                        name="bil_bf"  
                                        type="number"  
                                        class="form-control @error('bil_bf') is-invalid @enderror"  
                                        placeholder="Nombre de billet"  
                                        required  
                                    />  
                                    @error('bil_bf')  
                                        <div class="invalid-feedback">{{ $message }}</div>  
                                    @enderror  
                                </div>  
                            </div>  
                            <div class="col-md-3">  
                                <div class="form-group">  
                                    <label>Air France</label>  
                                    <input  
                                        id="bil_fr"  
                                        name="bil_fr"  
                                        type="number"  
                                        class="form-control @error('bil_fr') is-invalid @enderror"  
                                        placeholder="Nombre de billet"  
                                        required  
                                    />  
                                    @error('bil_fr')  
                                        <div class="invalid-feedback">{{ $message }}</div>  
                                    @enderror  
                                </div>  
                            </div>  
                            <div class="col-md-3">  
                                <div class="form-group">  
                                    <label>Air Sarada</label>  
                                    <input  
                                        id="bil_sar"  
                                        name="bil_sar"  
                                        type="number"  
                                        class="form-control @error('bil_sar') is-invalid @enderror"  
                                        placeholder="Nombre de billet"  
                                        required  
                                    />  
                                    @error('bil_sar')  
                                        <div class="invalid-feedback">{{ $message }}</div>  
                                    @enderror  
                                </div>  
                            </div>  
                            <div class="col-md-3">  
                                <div class="form-group">  
                                    <label>Air Ivoire</label>  
                                    <input  
                                        id="bil_ivr"  
                                        name="bil_ivr"  
                                        type="number"  
                                        class="form-control @error('bil_ivr') is-invalid @enderror"  
                                        placeholder="Nombre de billet"  
                                        required  
                                    />  
                                    @error('bil_ivr')  
                                        <div class="invalid-feedback">{{ $message }}</div>  
                                    @enderror  
                                </div>  
                            </div>  
                        </div>  
    
                        <div class="row">  
                            <div class="col-md-3">  
                                <div class="form-group">  
                                    <label>Tunis air</label>  
                                    <input  
                                        id="bil_tun"  
                                        name="bil_tun"  
                                        type="number"  
                                        class="form-control @error('bil_tun') is-invalid @enderror"  
                                        placeholder="Nombre de billet"  
                                        required  
                                    />  
                                    @error('bil_tun')  
                                        <div class="invalid-feedback">{{ $message }}</div>  
                                    @enderror  
                                </div>  
                            </div>  
                            <div class="col-md-3">  
                                <div class="form-group">  
                                    <label>Colomb Airlines</label>  
                                    <input  
                                        id="bil_colm"  
                                        name="bil_colm"  
                                        type="number"  
                                        class="form-control @error('bil_colm') is-invalid @enderror"  
                                        placeholder="Nombre de billet"  
                                        required  
                                    />  
                                    @error('bil_colm')  
                                        <div class="invalid-feedback">{{ $message }}</div>  
                                    @enderror  
                                </div>  
                            </div>  
                            <div class="col-md-3">  
                                <div class="form-group">  
                                    <label>Royal Air Maroc</label>  
                                    <input  
                                        id="bil_roy"  
                                        name="bil_roy"  
                                        type="number"  
                                        class="form-control @error('bil_roy') is-invalid @enderror"  
                                        placeholder="Nombre de billet"  
                                        required  
                                    />  
                                    @error('bil_roy')  
                                        <div class="invalid-feedback">{{ $message }}</div>  
                                    @enderror  
                                </div>  
                            </div>  
                            <div class="col-md-3">  
                                <div class="form-group">  
                                    <label>Ethiopian Airlines</label>  
                                    <input  
                                        id="bil_etio"  
                                        name="bil_etio"  
                                        type="number"  
                                        class="form-control @error('bil_etio') is-invalid @enderror"  
                                        placeholder="Nombre de billet"  
                                        required  
                                    />  
                                    @error('bil_etio')  
                                        <div class="invalid-feedback">{{ $message }}</div>  
                                    @enderror  
                                </div>  
                            </div>  
                        </div>  
    
                        <div class="row">  
                            <div class="col-md-4">  
                                <div class="form-group">  
                                    <label>Air Alger</label>  
                                    <input  
                                        id="bil_alg"  
                                        name="bil_alg"  
                                        type="number"  
                                        class="form-control @error('bil_alg') is-invalid @enderror"  
                                        placeholder="Nombre de billet"  
                                        required  
                                    />  
                                    @error('bil_alg')  
                                        <div class="invalid-feedback">{{ $message }}</div>  
                                    @enderror  
                                </div>  
                            </div>  
                            <div class="col-md-4">  
                                <div class="form-group">  
                                    <label>Turkish Airlines</label>  
                                    <input  
                                        id="bil_tur"  
                                        name="bil_tur"  
                                        type="number"  
                                        class="form-control @error('bil_tur') is-invalid @enderror"  
                                        placeholder="Nombre de billet"  
                                        required  
                                    />  
                                    @error('bil_tur')  
                                        <div class="invalid-feedback">{{ $message }}</div>  
                                    @enderror  
                                </div>  
                            </div>  
                            <div class="col-md-4">  
                                <div class="form-group">  
                                    <label>Asky</label>  
                                    <input  
                                        id="bil_ask"  
                                        name="bil_ask"  
                                        type="number"  
                                        class="form-control @error('bil_ask') is-invalid @enderror"  
                                        placeholder="Nombre de billet"  
                                        required  
                                    />  
                                    @error('bil_ask')  
                                        <div class="invalid-feedback">{{ $message }}</div>  
                                    @enderror  
                                </div>  
                            </div>  
                        </div>  
    
                        <div class="row">  
                            <div class="col-md-6">  
                                <div class="form-group">  
                                    <label>Brussels Airlines</label>  
                                    <input  
                                        id="bil_bru"  
                                        name="bil_bru"  
                                        type="number"  
                                        class="form-control @error('bil_bru') is-invalid @enderror"  
                                        placeholder="Nombre de billet"  
                                        required  
                                    />  
                                    @error('bil_bru')  
                                        <div class="invalid-feedback">{{ $message }}</div>  
                                    @enderror  
                                </div>  
                            </div>  
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <div class="form-group form-group-default">
                                        <label>Autres nbbilletcompas</label>
                                        <input
                                        id="bil_autr"
                                        name="bil_autr"
                                        type="number"
                                        class="form-control"
                                        placeholder="Nombre de billet"
                                        required
                                        />
                                        @error('bil_autr')  
                                            <div class="invalid-feedback">{{ $message }}</div>  
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                            <button type="submit" class="btn btn-primary"><i class="far fa-save"></i> Enregistrer</button>
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fermer</button>  
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>


@endsection
