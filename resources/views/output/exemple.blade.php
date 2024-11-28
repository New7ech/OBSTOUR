@extends('layouts.app')

@section('contenus')
<div class="container">
    <h1>Détails de l Utilisateur - {{ $user->name }}</h1>

    <h2>Enregistrements Cacircuits</h2>
    @if ($cacircuits->isEmpty())
        <p>Aucun enregistrement trouvé dans Cacircuits pour cet utilisateur.</p>
    @else
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Trimestre</th>
                    <th>Compagnie</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($cacircuits as $cacircuit)
                    <tr>
                        <td>{{ $cacircuit->id }}</td>
                        <td>{{ $cacircuit->trimestre }}</td>
                        <td>{{ $cacircuit->compagnie->denomination ?? 'Aucune' }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif

    <h2>Enregistrements Cabilletteries</h2>
    @if ($cabilletteries->isEmpty())
        <p>Aucun enregistrement trouvé dans Cabilletteries pour cet utilisateur.</p>
    @else
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Autre Attribut</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($cabilletteries as $cabilletteries)
                    <tr>
                        <td>{{ $cabilletteries->id }}</td>
                        <td>{{ $cabilletteries->bil_iata_m1 }}</td>  <!-- Remplacez some_attribute par attribut réel -->
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
@endsection
