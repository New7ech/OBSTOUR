@extends('layouts.app')  

@section('contenus')  
<div class="container">  
    <h2>Activités connexes</h2>  
    <table class="table table-bordered">  
        <thead>  
            <tr>  
                <th>Activités</th>  
                <th>Volume Mois 1</th>  
                <th>Volume Mois 2</th>  
                <th>Volume Mois 3</th>  
                <th>Chiffre d'affaires Mois 1</th>  
                <th>Chiffre d'affaires Mois 2</th>  
                <th>Chiffre d'affaires Mois 3</th>  
            </tr>  
        </thead>  
        <tbody>  
            <tr>  
                <td>Conférence, de congrès et autres événements</td>  
                <td>{{ $activite->volume_conference_m1 }}</td>  
                <td>{{ $activite->volume_conference_m2 }}</td>  
                <td>{{ $activite->volume_conference_m3 }}</td>  
                <td>{{ $activite->chiffre_conference_m1 }}</td>  
                <td>{{ $activite->chiffre_conference_m2 }}</td>  
                <td>{{ $activite->chiffre_conference_m3 }}</td>  
            </tr>  
            <tr>  
                <td>Réservation de chambres hôtels</td>  
                <td>{{ $activite->volume_reservation_m1 }}</td>  
                <td>{{ $activite->volume_reservation_m2 }}</td>  
                <td>{{ $activite->volume_reservation_m3 }}</td>  
                <td>{{ $activite->chiffre_reservation_m1 }}</td>  
                <td>{{ $activite->chiffre_reservation_m2 }}</td>  
                <td>{{ $activite->chiffre_reservation_m3 }}</td>  
            </tr>  
            <tr>  
                <td>Location de véhicules (nombre de jours de location)</td>  
                <td>{{ $activite->volume_location_m1 }}</td>  
                <td>{{ $activite->volume_location_m2 }}</td>  
                <td>{{ $activite->volume_location_m3 }}</td>  
                <td>{{ $activite->chiffre_location_m1 }}</td>  
                <td>{{ $activite->chiffre_location_m2 }}</td>  
                <td>{{ $activite->chiffre_location_m3 }}</td>  
            </tr>  
            <tr>  
                <td>Pèlerinage (nombre de pèlerins)</td>  
                <td>{{ $activite->volume_pelerinage_m1 }}</td>  
                <td>{{ $activite->volume_pelerinage_m2 }}</td>  
                <td>{{ $activite->volume_pelerinage_m3 }}</td>  
                <td>{{ $activite->chiffre_pelerinage_m1 }}</td>  
                <td>{{ $activite->chiffre_pelerinage_m2 }}</td>  
                <td>{{ $activite->chiffre_pelerinage_m3 }}</td>  
            </tr>  
            <tr>  
                <td>Colonie de Vacances (nombre de colonies)</td>  
                <td>{{ $activite->volume_colonie_m1 }}</td>  
                <td>{{ $activite->volume_colonie_m2 }}</td>  
                <td>{{ $activite->volume_colonie_m3 }}</td>  
                <td>{{ $activite->chiffre_colonie_m1 }}</td>  
                <td>{{ $activite->chiffre_colonie_m2 }}</td>  
                <td>{{ $activite->chiffre_colonie_m3 }}</td>  
            </tr>  
            <tr>  
                <td>Billetterie avec d'autres modes de transport</td>  
                <td>{{ $activite->volume_billetterie_m1 }}</td>  
                <td>{{ $activite->volume_billetterie_m2 }}</td>  
                <td>{{ $activite->volume_billetterie_m3 }}</td>  
                <td>{{ $activite->chiffre_billetterie_m1 }}</td>  
                <td>{{ $activite->chiffre_billetterie_m2 }}</td>  
                <td>{{ $activite->chiffre_billetterie_m3 }}</td>  
            </tr>  
            <tr>  
                <td>Autres</td>  
                <td>{{ $activite->volume_autres_m1 }}</td>  
                <td>{{ $activite->volume_autres_m2 }}</td>  
                <td>{{ $activite->volume_autres_m3 }}</td>  
                <td>{{ $activite->chiffre_autres_m1 }}</td>  
                <td>{{ $activite->chiffre_autres_m2 }}</td>  
                <td>{{ $activite->chiffre_autres_m3 }}</td>  
            </tr>  
            {{-- <a href="{{ route('activite.index') }}" class="btn btn-primary">Retour à la liste</a>   --}}

        </tbody>  
    </table>  
</div>  
@endsection