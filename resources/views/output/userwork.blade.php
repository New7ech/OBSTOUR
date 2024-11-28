@extends('layouts.app')

@section('contenus')
<div class="container">
    <h1>Enregistrements des Utilisateurs</h1>

    @if ($users->isEmpty())
        <p>Aucun utilisateur n'a d'enregistrements dans les Cacircuits ou Cabilletteries.</p>
    @else
        <h2>Utilisateurs</h2>
        <ul>
            @foreach ($users as $user)
                <li>{{ $user->name }} (ID: {{ $user->id }})</li>
            @endforeach
        </ul>

        <h2>Enregistrements Cacircuits</h2>
        @if ($cacircuits->isEmpty())
            <p>Aucun enregistrement trouvé dans Cacircuits pour l'utilisateur sélectionné.</p>
        @else
            <ul>
                @foreach ($cacircuits as $cacircuits)
                    <li>{{ $cacircuits->cur_etat_m1 }}</li>  <!-- Remplacez 'some_attribute' par l'attribut réel que vous voulez afficher -->
                @endforeach
            </ul>
        @endif

        <h2>Enregistrements Cabilletteries</h2>
        @if ($cabilletteries->isEmpty())
            <p>Aucun enregistrement trouvé dans Cabilletteries pour l'utilisateur sélectionné.</p>
        @else
            <ul>
                @foreach ($cabilletteries as $cabilletteries)
                    <li>{{ $cabilletteries->bil_iata_m2 }}</li>  <!-- Remplacez 'some_attribute' par l'attribut réel que vous voulez afficher -->
                @endforeach
            </ul>
        @endif
    @endif
</div>
@endsection
