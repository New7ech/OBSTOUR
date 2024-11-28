@extends('layouts.app')  

@section('contenus')  
<div class="container">  
    <div class="page-inner">  
        <div class="shadow-lg p-3 mb-5 bg-body rounded">  
            <div class="text-center">  
                <p class="fs-3">ACTIVITÉS CONNEXES</p>  
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
        <form class="modal-form" action="{{ route('activite.store') }}" method="post" class="row g-3 needs-validation" novalidate>  
            @csrf  
            <div class="col-12 grid-margin">  
                <div class="card">  
                    <div class="card-body">  
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">Activités</th>
                                    <th scope="col">Volume</th>
                                    <th scope="col">Chiffre d'affaires</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">Conférence, de congrès et autres événements</th>
                                    <td>
                                        <div class="input-group">
                                            <span class="input-group-text">Nbr</span>
                                            <input id="volume_conference" name="volume_conference" type="text" class="form-control @error('volume_conference') is-invalid @enderror" value="{{ old('volume_conference') }}" aria-label="Volume de la conférence" required>
                                            @error('volume_conference')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </td>
                                    <td>
                                        <div class="input-group">
                                            <span class="input-group-text">Fcfa</span>
                                            <input id="chiffre_conference" name="chiffre_conference" type="text" class="form-control @error('chiffre_conference') is-invalid @enderror" value="{{ old('chiffre_conference') }}" aria-label="Montant de la conférence" required>
                                            @error('chiffre_conference')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </td>
                                
                                </tr>
                                <tr>
                                    <th scope="row">Réservation de chambres hôtels</th>
                                    <td>
                                        <div class="input-group">
                                            <span class="input-group-text">Nbr</span>
                                            <input id="volume_reservation" name="volume_reservation" type="text" class="form-control @error('volume_reservation') is-invalid @enderror" value="{{ old('volume_reservation') }}" aria-label="Nombre de réservation" required>
                                            @error('volume_reservation')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </td>
                                    <td>
                                        <div class="input-group">
                                            <span class="input-group-text">Fcfa</span>
                                            <input id="chiffre_reservation" name="chiffre_reservation" type="text" class="form-control @error('chiffre_reservation') is-invalid @enderror" value="{{ old('chiffre_reservation') }}" aria-label="Montant de réservation" required>
                                            @error('chiffre_reservation')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">Location de véhicules</th>
                                    <td>
                                        <div class="input-group">
                                            <span class="input-group-text">Nbr</span>
                                            <input id="volume_location" name="volume_location" type="text" class="form-control @error('volume_location') is-invalid @enderror" value="{{ old('volume_location') }}" aria-label="Volume de Location" required>
                                            @error('volume_location')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </td>
                                    <td>
                                        <div class="input-group">
                                            <span class="input-group-text">Fcfa</span>
                                            <input id="chiffre_location" name="chiffre_location" type="text" class="form-control @error('chiffre_location') is-invalid @enderror" value="{{ old('chiffre_location') }}" aria-label="Montant de Location" required>
                                            @error('chiffre_location')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </td>
                                
                                </tr>
                                <tr>
                                    <th scope="row">Pèlerinage (nombre de pèlerins)</th>
                                    <td>
                                        <div class="input-group">
                                            <span class="input-group-text">Nbr</span>
                                            <input id="volume_pelerinage" name="volume_pelerinage" type="text" class="form-control @error('volume_pelerinage') is-invalid @enderror" value="{{ old('volume_pelerinage') }}" aria-label="Nombre de pèlerins" required>
                                            @error('volume_pelerinage')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </td>
                                    <td>
                                        <div class="input-group">
                                            <span class="input-group-text">Fcfa</span>
                                            <input id="chiffre_pelerinage" name="chiffre_pelerinage" type="text" class="form-control @error('chiffre_pelerinage') is-invalid @enderror" value="{{ old('chiffre_pelerinage') }}" aria-label="Montant du Pèlerinage" required>
                                            @error('chiffre_pelerinage')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">Colonie de Vacances (nombre de colonies)</th>
                                    <td>
                                        <div class="input-group">
                                            <span class="input-group-text">Nbr</span>
                                            <input id="volume_colonie" name="volume_colonie" type="text" class="form-control @error('volume_colonie') is-invalid @enderror" value="{{ old('volume_colonie') }}" aria-label="Nombre de colonies" required>
                                            @error('volume_colonie')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </td>
                                    <td>
                                        <div class="input-group">
                                            <span class="input-group-text">Fcfa</span>
                                            <input id="chiffre_colonie" name="chiffre_colonie" type="text" class="form-control @error('chiffre_colonie') is-invalid @enderror" value="{{ old('chiffre_colonie') }}" aria-label="Montant de la colonie" required>
                                            @error('chiffre_colonie')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </td>
                                
                                </tr>
                                <tr>
                                    <th scope="row">Billetterie avec d'autres modes de transport</th>
                                    <td>
                                        <div class="input-group">
                                            <span class="input-group-text">Nbr</span>
                                            <input id="volume_billetterie" name="volume_billetterie" type="text" class="form-control @error('volume_billetterie') is-invalid @enderror" value="{{ old('volume_billetterie') }}" aria-label="Nombre de billet" required>
                                            @error('volume_billetterie')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </td>
                                    <td>
                                        <div class="input-group">
                                            <span class="input-group-text">Fcfa</span>
                                            <input id="chiffre_billetterie" name="chiffre_billetterie" type="text" class="form-control @error('chiffre_billetterie') is-invalid @enderror" value="{{ old('chiffre_billetterie') }}" aria-label="Montant Billetterie" required>
                                            @error('chiffre_billetterie')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">Autres</th>
                                    <td>
                                        <div class="input-group">
                                            <span class="input-group-text">Nbr</span>
                                            <input id="volume_autres" name="volume_autres" type="text" class="form-control @error('volume_autres') is-invalid @enderror" value="{{ old('volume_autres') }}" aria-label="Volume pour autres" required>
                                            @error('volume_autres')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </td>
                                    <td>
                                        <div class="input-group">
                                            <span class="input-group-text">Nbr</span>
                                            <input id="chiffre_autres" name="chiffre_autres" type="text" class="form-control @error('chiffre_autres') is-invalid @enderror" value="{{ old('chiffre_autres') }}" aria-label="Montant pour autres" required>
                                            @error('chiffre_autres')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </td>
                                
                                </tr>
                            </tbody>
                        </table> 
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