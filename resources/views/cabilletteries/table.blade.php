@extends('layouts.app')
@section('contenus')
<div class="container">
    <h1>Table des Cabilletteries</h1>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Trimestre</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($cabillettery as $cabillettery)
                <tr>
                    <td>{{ $cabillettery->id }}</td>
                    <td>{{ $cabillettery->nom }}</td>
                    <td>{{ $cabillettery->trimestre }}</td>
                    <td>
                        <a href="{{ route('cabilletteries.show', $cabillettery) }}" class="btn btn-info">Voir</a>
                        <a href="{{ route('cabilletteries.edit', $cabillettery) }}" class="btn btn-warning">Modifier</a>
                        <form action="{{ route('cabilletteries.destroy', $cabillettery) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Supprimer</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
