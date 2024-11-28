@extends('layouts.app')

@section('contenus')
    <div class="container">
        <h1>Liste des Cabilletteries</h1>

        @if ($cabillettery->isEmpty())
            <p>Aucun enregistrement trouvé.</p>
        @else
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nom</th>
                        <th>Description</th>
                        <th>Trimestre</th>
                        <th>Créé à</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($cabillettery as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->nom }}</td>
                            <td>{{ $item->description }}</td>
                            <td>{{ $item->trimestre }}</td>
                            <td>{{ $item->created_at->format('d/m/Y') }}</td>
                            <td>
                                <a href="{{ route('cabilletteries.show', $item) }}" class="btn btn-info">Voir</a>
                                <a href="{{ route('cabilletteries.edit', $item) }}" class="btn btn-warning">Modifier</a>
                                <form action="{{ route('cabilletteries.destroy', $item) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet enregistrement ?')">Supprimer</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $cabillettery->links() }}
        @endif
    </div>
@endsection
