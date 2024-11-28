@extends('layouts.app')

@section('contenus')
<div class="container">
    <div class="page-inner">
        <div class="shadow-lg p-3 mb-5 bg-body rounded">
            <div class="text-center">
                <p class="fs-3">CHIFFRE AFFAIRE BILLETTERIE</p>
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
<form class="modal-form" action="{{ route('cabilletteries.store') }}" method="post" class="row g-3 needs-validation" novalidate>
    @csrf
    <div class="col-12 grid-margin">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <h2>BILLETS IATA</h2>
                    <div class="input-group">
                        <span class="input-group-text">Fcfa</span>
                        <input id="ca_bil_iata" name="ca_bil_iata" type="text" class="form-control @error('ca_bil_iata') is-invalid @enderror" value="{{ old('ca_bil_iata') }}" aria-label="Montant Mois 1" required>
                        @error('ca_bil_iata')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <h2>AUTRES BILLETS</h2>
                    <div class="input-group">
                        <span class="input-group-text">Fcfa</span>
                        <input id="ca_bil_otr" name="ca_bil_otr" type="text" class="form-control @error('ca_bil_otr') is-invalid @enderror" value="{{ old('ca_bil_otr') }}" aria-label="Montant Mois 1" required>
                        @error('ca_bil_otr')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="text-center mt-3">
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
