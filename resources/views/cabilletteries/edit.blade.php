@extends('layouts.app')

@section('contenus')
<div class="container">
    <div class="page-inner">
        <div class="shadow-lg p-3 mb-5 bg-body rounded">
            <div class="text-center">
                <p class="fs-3">CHIFFRE AFFAIRE BILLETTERIE</p>
            </div>
        </div>
        <form action="{{ route('cabilletteries.update', $cabillettery->id) }}" method="post" class="row g-3 needs-validation" novalidate>
            @csrf
            @method('PUT')
            <div class="col-12 grid-margin">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Billets émis à partir de agrément IATA</h5>
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">Trimestre</th>
                                    <th scope="col">Mois 1</th>
                                    <th scope="col">Mois 2</th>
                                    <th scope="col">Mois 3</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">BILLETS IATA</th>
                                    <td>
                                        <div class="input-group">
                                            <span class="input-group-text">Fcfa</span>
                                            <input value="{{ old('bil_iata_m1', $cabillettery->bil_iata_m1) }}" id="bil_iata_m1" name="bil_iata_m1" type="text" class="form-control @error('bil_iata_m1') is-invalid @enderror" aria-label="Montant Mois 1" required>
                                            @error('bil_iata_m1')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </td>
                                    <td>
                                        <div class="input-group">
                                            <span class="input-group-text">Fcfa</span>
                                            <input value="{{ old('bil_iata_m2', $cabillettery->bil_iata_m2) }}" id="bil_iata_m2" name="bil_iata_m2" type="text" class="form-control @error('bil_iata_m2') is-invalid @enderror" aria-label="Montant Mois 2" required>
                                            @error('bil_iata_m2')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </td>
                                    <td>
                                        <div class="input-group">
                                            <span class="input-group-text">Fcfa</span>
                                            <input value="{{ old('bil_iata_m3', $cabillettery->bil_iata_m3) }}" id="bil_iata_m3" name="bil_iata_m3" type="text" class="form-control @error('bil_iata_m3') is-invalid @enderror" aria-label="Montant Mois 3" required>
                                            @error('bil_iata_m3')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">AUTRES BILLETS</th>
                                    <td>
                                        <div class="input-group">
                                            <span class="input-group-text">Fcfa</span>
                                            <input value="{{ old('bil_otr_m1', $cabillettery->bil_otr_m1) }}" id="bil_otr_m1" name="bil_otr_m1" type="text" class="form-control @error('bil_otr_m1') is-invalid @enderror" aria-label="Montant Mois 1" required>
                                            @error('bil_otr_m1')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </td>
                                    <td>
                                        <div class="input-group">
                                            <span class="input-group-text">Fcfa</span>
                                            <input value="{{ old('bil_otr_m2', $cabillettery->bil_otr_m2) }}" id="bil_otr_m2" name="bil_otr_m2" type="text" class="form-control @error('bil_otr_m2') is-invalid @enderror" aria-label="Montant Mois 2" required>
                                            @error('bil_otr_m2')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </td>
                                    <td>
                                        <div class="input-group">
                                            <span class="input-group-text">Fcfa</span>
                                            <input value="{{ old('bil_otr_m3', $cabillettery->bil_otr_m3) }}" id="bil_otr_m3" name="bil_otr_m3" type="text" class="form-control @error('bil_otr_m3') is-invalid @enderror" aria-label="Montant Mois 3" required>
                                            @error('bil_otr_m3')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="text-center mt-3">
                            <button type="submit" class="btn btn-primary"><i class="far fa-save"></i> Enregistrer</button>
                            <a href="{{ route('cabilletteries.index') }}" class="btn btn-danger"><i class="fas fa-angle-double-left"></i> Retour</a>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
