@extends('layouts.app')  

@section('contenus')  
<div class="container">  
    <div class="page-inner">  
        <div class="shadow-lg p-3 mb-5 bg-body rounded">  
            <div class="text-center">  
                <p class="fs-3">ÉDITER LES ACTIVITÉS CONNEXES</p>  
            </div>  
        </div>  
        <form action="{{ route('activite.update', $activite->id) }}" method="post" class="row g-3 needs-validation" novalidate>  
            @csrf  
            @method('PUT')  
            <div class="col-12 grid-margin">  
                <div class="card">  
                    <div class="card-body">  
                        <h5 class="card-title">Modifier les données des activités</h5>  
                        <table class="table table-hover">  
                            <thead>  
                                <tr>  
                                    <th scope="col">Activités</th>  
                                    <th scope="col">Volume Mois 1</th>  
                                    <th scope="col">Volume Mois 2</th>  
                                    <th scope="col">Volume Mois 3</th>  
                                    <th scope="col">Chiffre d'affaires Mois 1</th>  
                                    <th scope="col">Chiffre d'affaires Mois 2</th>  
                                    <th scope="col">Chiffre d'affaires Mois 3</th>  
                                </tr>  
                            </thead>  
                            <tbody>  
                                <tr>  
                                    <td>Conférence, de congrès et autres événements</td>  
                                    <td>  
                                        <input name="volume_conference_m1" type="text" class="form-control @error('volume_conference_m1') is-invalid @enderror" value="{{ old('volume_conference_m1', $activite->volume_conference_m1) }}" required>  
                                        @error('volume_conference_m1')  
                                            <div class="invalid-feedback">{{ $message }}</div>  
                                        @enderror  
                                    </td>  
                                    <td>  
                                        <input name="volume_conference_m2" type="text" class="form-control @error('volume_conference_m2') is-invalid @enderror" value="{{ old('volume_conference_m2', $activite->volume_conference_m2) }}" required>  
                                        @error('volume_conference_m2')  
                                            <div class="invalid-feedback">{{ $message }}</div>  
                                        @enderror  
                                    </td>  
                                    <td>  
                                        <input name="volume_conference_m3" type="text" class="form-control @error('volume_conference_m3') is-invalid @enderror" value="{{ old('volume_conference_m3', $activite->volume_conference_m3) }}" required>  
                                        @error('volume_conference_m3')  
                                            <div class="invalid-feedback">{{ $message }}</div>  
                                        @enderror  
                                    </td>  
                                    <td>  
                                        <input name="chiffre_conference_m1" type="text" class="form-control @error('chiffre_conference_m1') is-invalid @enderror" value="{{ old('chiffre_conference_m1', $activite->chiffre_conference_m1) }}" required>  
                                        @error('chiffre_conference_m1')  
                                            <div class="invalid-feedback">{{ $message }}</div>  
                                        @enderror  
                                    </td>  
                                    <td>  
                                        <input name="chiffre_conference_m2" type="text" class="form-control @error('chiffre_conference_m2') is-invalid @enderror" value="{{ old('chiffre_conference_m2', $activite->chiffre_conference_m2) }}" required>  
                                        @error('chiffre_conference_m2')  
                                            <div class="invalid-feedback">{{ $message }}</div>  
                                        @enderror  
                                    </td>  
                                    <td>  
                                        <input name="chiffre_conference_m3" type="text" class="form-control @error('chiffre_conference_m3') is-invalid @enderror" value="{{ old('chiffre_conference_m3', $activite->chiffre_conference_m3) }}" required>  
                                        @error('chiffre_conference_m3')  
                                            <div class="invalid-feedback">{{ $message }}</div>  
                                        @enderror  
                                    </td>  
                                </tr>  
                                <tr>  
                                    <td>Réservation de chambres hôtels</td>  
                                    <td>  
                                        <input name="volume_reservation_m1" type="text" class="form-control @error('volume_reservation_m1') is-invalid @enderror" value="{{ old('volume_reservation_m1', $activite->volume_reservation_m1) }}" required>  
                                        @error('volume_reservation_m1')  
                                            <div class="invalid-feedback">{{ $message }}</div>  
                                        @enderror  
                                    </td>  
                                    <td>  
                                        <input name="volume_reservation_m2" type="text" class="form-control @error('volume_reservation_m2') is-invalid @enderror" value="{{ old('volume_reservation_m2', $activite->volume_reservation_m2) }}" required>  
                                        @error('volume_reservation_m2')  
                                            <div class="invalid-feedback">{{ $message }}</div>  
                                        @enderror  
                                    </td>  
                                    <td>  
                                        <input name="volume_reservation_m3" type="text" class="form-control @error('volume_reservation_m3') is-invalid @enderror" value="{{ old('volume_reservation_m3', $activite->volume_reservation_m3) }}" required>  
                                        @error('volume_reservation_m3')  
                                            <div class="invalid-feedback">{{ $message }}</div>  
                                        @enderror  
                                    </td>  
                                    <td>  
                                        <input name="chiffre_reservation_m1" type="text" class="form-control @error('chiffre_reservation_m1') is-invalid @enderror" value="{{ old('chiffre_reservation_m1', $activite->chiffre_reservation_m1) }}" required>  
                                        @error('chiffre_reservation_m1')  
                                            <div class="invalid-feedback">{{ $message }}</div>  
                                        @enderror  
                                    </td>  
                                    <td>  
                                        <input name="chiffre_reservation_m2" type="text" class="form-control @error('chiffre_reservation_m2') is-invalid @enderror" value="{{ old('chiffre_reservation_m2', $activite->chiffre_reservation_m2) }}" required>  
                                        @error('chiffre_reservation_m2')  
                                            <div class="invalid-feedback">{{ $message }}</div>  
                                        @enderror  
                                    </td>  
                                    <td>  
                                        <input name="chiffre_reservation_m3" type="text" class="form-control @error('chiffre_reservation_m3') is-invalid @enderror" value="{{ old('chiffre_reservation_m3', $activite->chiffre_reservation_m3) }}" required>  
                                        @error('chiffre_reservation_m3')  
                                            <div class="invalid-feedback">{{ $message }}</div>  
                                        @enderror  
                                    </td>  
                                </tr>  
                                <tr>  
                                    <td>Location de véhicules (nombre de jours de location)</td>  
                                    <td>  
                                        <input name="volume_location_m1" type="text" class="form-control @error('volume_location_m1') is-invalid @enderror" value="{{ old('volume_location_m1', $activite->volume_location_m1) }}" required>  
                                        @error('volume_location_m1')  
                                            <div class="invalid-feedback">{{ $message }}</div>  
                                        @enderror  
                                    </td>  
                                    <td>  
                                        <input name="volume_location_m2" type="text" class="form-control @error('volume_location_m2') is-invalid @enderror" value="{{ old('volume_location_m2', $activite->volume_location_m2) }}" required>  
                                        @error('volume_location_m2')  
                                            <div class="invalid-feedback">{{ $message }}</div>  
                                        @enderror  
                                    </td>  
                                    <td>  
                                        <input name="volume_location_m3" type="text" class="form-control @error('volume_location_m3') is-invalid @enderror" value="{{ old('volume_location_m3', $activite->volume_location_m3) }}" required>  
                                        @error('volume_location_m3')  
                                            <div class="invalid-feedback">{{ $message }}</div>  
                                        @enderror  
                                    </td>  
                                    <td>  
                                        <input name="chiffre_location_m1" type="text" class="form-control @error('chiffre_location_m1') is-invalid @enderror" value="{{ old('chiffre_location_m1', $activite->chiffre_location_m1) }}" required>  
                                        @error('chiffre_location_m1')  
                                            <div class="invalid-feedback">{{ $message }}</div>  
                                        @enderror  
                                    </td>  
                                    <td>  
                                        <input name="chiffre_location_m2" type="text" class="form-control @error('chiffre_location_m2') is-invalid @enderror" value="{{ old('chiffre_location_m2', $activite->chiffre_location_m2) }}" required>  
                                        @error('chiffre_location_m2')  
                                            <div class="invalid-feedback">{{ $message }}</div>  
                                        @enderror  
                                    </td>  
                                    <td>  
                                        <input name="chiffre_location_m3" type="text" class="form-control @error('chiffre_location_m3') is-invalid @enderror" value="{{ old('chiffre_location_m3', $activite->chiffre_location_m3) }}" required>  
                                        @error('chiffre_location_m3')  
                                            <div class="invalid-feedback">{{ $message }}</div>  
                                        @enderror  
                                    </td>  
                                </tr>  
                                <tr>  
                                    <td>Pèlerinage (nombre de pèlerins)</td>  
                                    <td>  
                                        <input name="volume_pelerinage_m1" type="text" class="form-control @error('volume_pelerinage_m1') is-invalid @enderror" value="{{ old('volume_pelerinage_m1', $activite->volume_pelerinage_m1) }}" required>  
                                        @error('volume_pelerinage_m1')  
                                            <div class="invalid-feedback">{{ $message }}</div>  
                                        @enderror  
                                    </td>  
                                    <td>  
                                        <input name="volume_pelerinage_m2" type="text" class="form-control @error('volume_pelerinage_m2') is-invalid @enderror" value="{{ old('volume_pelerinage_m2', $activite->volume_pelerinage_m2) }}" required>  
                                        @error('volume_pelerinage_m2')  
                                            <div class="invalid-feedback">{{ $message }}</div>  
                                        @enderror  
                                    </td>  
                                    <td>  
                                        <input name="volume_pelerinage_m3" type="text" class="form-control @error('volume_pelerinage_m3') is-invalid @enderror" value="{{ old('volume_pelerinage_m3', $activite->volume_pelerinage_m3) }}" required>  
                                        @error('volume_pelerinage_m3')  
                                            <div class="invalid-feedback">{{ $message }}</div>  
                                        @enderror  
                                    </td>  
                                    <td>  
                                        <input name="chiffre_pelerinage_m1" type="text" class="form-control @error('chiffre_pelerinage_m1') is-invalid @enderror" value="{{ old('chiffre_pelerinage_m1', $activite->chiffre_pelerinage_m1) }}" required>  
                                        @error('chiffre_pelerinage_m1')  
                                            <div class="invalid-feedback">{{ $message }}</div>  
                                        @enderror  
                                    </td>  
                                    <td>  
                                        <input name="chiffre_pelerinage_m2" type="text" class="form-control @error('chiffre_pelerinage_m2') is-invalid @enderror" value="{{ old('chiffre_pelerinage_m2', $activite->chiffre_pelerinage_m2) }}" required>  
                                        @error('chiffre_pelerinage_m2')  
                                            <div class="invalid-feedback">{{ $message }}</div>  
                                        @enderror  
                                    </td>  
                                    <td>  
                                        <input name="chiffre_pelerinage_m3" type="text" class="form-control @error('chiffre_pelerinage_m3') is-invalid @enderror" value="{{ old('chiffre_pelerinage_m3', $activite->chiffre_pelerinage_m3) }}" required>  
                                        @error('chiffre_pelerinage_m3')  
                                            <div class="invalid-feedback">{{ $message }}</div>  
                                        @enderror  
                                    </td>  
                                </tr>  
                                <tr>  
                                    <td>Colonie de Vacances (nombre de colonies)</td>  
                                    <td>  
                                        <input name="volume_colonie_m1" type="text" class="form-control @error('volume_colonie_m1') is-invalid @enderror" value="{{ old('volume_colonie_m1', $activite->volume_colonie_m1) }}" required>  
                                        @error('volume_colonie_m1')  
                                            <div class="invalid-feedback">{{ $message }}</div>  
                                        @enderror  
                                    </td>  
                                    <td>  
                                        <input name="volume_colonie_m2" type="text" class="form-control @error('volume_colonie_m2') is-invalid @enderror" value="{{ old('volume_colonie_m2', $activite->volume_colonie_m2) }}" required>  
                                        @error('volume_colonie_m2')  
                                            <div class="invalid-feedback">{{ $message }}</div>  
                                        @enderror  
                                    </td>  
                                    <td>  
                                        <input name="volume_colonie_m3" type="text" class="form-control @error('volume_colonie_m3') is-invalid @enderror" value="{{ old('volume_colonie_m3', $activite->volume_colonie_m3) }}" required>  
                                        @error('volume_colonie_m3')  
                                            <div class="invalid-feedback">{{ $message }}</div>  
                                        @enderror  
                                    </td>  
                                    <td>  
                                        <input name="chiffre_colonie_m1" type="text" class="form-control @error('chiffre_colonie_m1') is-invalid @enderror" value="{{ old('chiffre_colonie_m1', $activite->chiffre_colonie_m1) }}" required>  
                                        @error('chiffre_colonie_m1')  
                                            <div class="invalid-feedback">{{ $message }}</div>  
                                        @enderror  
                                    </td>  
                                    <td>  
                                        <input name="chiffre_colonie_m2" type="text" class="form-control @error('chiffre_colonie_m2') is-invalid @enderror" value="{{ old('chiffre_colonie_m2', $activite->chiffre_colonie_m2) }}" required>  
                                        @error('chiffre_colonie_m2')  
                                            <div class="invalid-feedback">{{ $message }}</div>  
                                        @enderror  
                                    </td>  
                                    <td>  
                                        <input name="chiffre_colonie_m3" type="text" class="form-control @error('chiffre_colonie_m3') is-invalid @enderror" value="{{ old('chiffre_colonie_m3', $activite->chiffre_colonie_m3) }}" required>  
                                        @error('chiffre_colonie_m3')  
                                            <div class="invalid-feedback">{{ $message }}</div>  
                                        @enderror  
                                    </td>  
                                </tr>  
                                <tr>  
                                    <td>Billetterie avec d'autres modes de transport</td>  
                                    <td>  
                                        <input name="volume_billetterie_m1" type="text" class="form-control @error('volume_billetterie_m1') is-invalid @enderror" value="{{ old('volume_billetterie_m1', $activite->volume_billetterie_m1) }}" required>  
                                        @error('volume_billetterie_m1')  
                                            <div class="invalid-feedback">{{ $message }}</div>  
                                        @enderror  
                                    </td>  
                                    <td>  
                                        <input name="volume_billetterie_m2" type="text" class="form-control @error('volume_billetterie_m2') is-invalid @enderror" value="{{ old('volume_billetterie_m2', $activite->volume_billetterie_m2) }}" required>  
                                        @error('volume_billetterie_m2')  
                                            <div class="invalid-feedback">{{ $message }}</div>  
                                        @enderror  
                                    </td>  
                                    <td>  
                                        <input name="volume_billetterie_m3" type="text" class="form-control @error('volume_billetterie_m3') is-invalid @enderror" value="{{ old('volume_billetterie_m3', $activite->volume_billetterie_m3) }}" required>  
                                        @error('volume_billetterie_m3')  
                                            <div class="invalid-feedback">{{ $message }}</div>  
                                        @enderror  
                                    </td>  
                                    <td>  
                                        <input name="chiffre_billetterie_m1" type="text" class="form-control @error('chiffre_billetterie_m1') is-invalid @enderror" value="{{ old('chiffre_billetterie_m1', $activite->chiffre_billetterie_m1) }}" required>  
                                        @error('chiffre_billetterie_m1')  
                                            <div class="invalid-feedback">{{ $message }}</div>  
                                        @enderror  
                                    </td>  
                                    <td>  
                                        <input name="chiffre_billetterie_m2" type="text" class="form-control @error('chiffre_billetterie_m2') is-invalid @enderror" value="{{ old('chiffre_billetterie_m2', $activite->chiffre_billetterie_m2) }}" required>  
                                        @error('chiffre_billetterie_m2')  
                                            <div class="invalid-feedback">{{ $message }}</div>  
                                        @enderror  
                                    </td>  
                                    <td>  
                                        <input name="chiffre_billetterie_m3" type="text" class="form-control @error('chiffre_billetterie_m3') is-invalid @enderror" value="{{ old('chiffre_billetterie_m3', $activite->chiffre_billetterie_m3) }}" required>  
                                        @error('chiffre_billetterie_m3')  
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </td>
                                </tr>
                                <tr>  
                                  <td>Autres</td>  
                                  <td>  
                                      <input name="volume_autres_m1" type="text" class="form-control @error('volume_autres_m1') is-invalid @enderror" value="{{ old('volume_autres_m1', $activite->volume_autres_m1) }}" required>  
                                      @error('volume_autres_m1')  
                                          <div class="invalid-feedback">{{ $message }}</div>  
                                      @enderror  
                                  </td>  
                                  <td>  
                                      <input name="volume_autres_m2" type="text" class="form-control @error('volume_autres_m2') is-invalid @enderror" value="{{ old('volume_autres_m2', $activite->volume_autres_m2) }}" required>  
                                      @error('volume_autres_m2')  
                                          <div class="invalid-feedback">{{ $message }}</div>  
                                      @enderror  
                                  </td>  
                                  <td>  
                                      <input name="volume_autres_m3" type="text" class="form-control @error('volume_autres_m3') is-invalid @enderror" value="{{ old('volume_autres_m3', $activite->volume_autres_m3) }}" required>  
                                      @error('volume_autres_m3')  
                                          <div class="invalid-feedback">{{ $message }}</div>  
                                      @enderror  
                                  </td>  
                                  <td>  
                                      <input name="chiffre_autres_m1" type="text" class="form-control @error('chiffre_autres_m1') is-invalid @enderror" value="{{ old('chiffre_autres_m1', $activite->chiffre_autres_m1) }}" required>  
                                      @error('chiffre_autres_m1')  
                                          <div class="invalid-feedback">{{ $message }}</div>  
                                      @enderror  
                                  </td>  
                                  <td>  
                                      <input name="chiffre_autres_m2" type="text" class="form-control @error('chiffre_autres_m2') is-invalid @enderror" value="{{ old('chiffre_autres_m2', $activite->chiffre_autres_m2) }}" required>  
                                      @error('chiffre_autres_m2')  
                                          <div class="invalid-feedback">{{ $message }}</div>  
                                      @enderror  
                                  </td>  
                                  <td>  
                                      <input name="chiffre_autres_m3" type="text" class="form-control @error('chiffre_autres_m3') is-invalid @enderror" value="{{ old('chiffre_autres_m3', $activite->chiffre_autres_m3) }}" required>  
                                      @error('chiffre_autres_m3')  
                                          <div class="invalid-feedback">{{ $message }}</div>  
                                      @enderror  
                                  </td>  
                                </tr>  
                            </tbody>
                        </table>
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


                                  
