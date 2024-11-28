
@extends('layouts.app')

@section('contenus')
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Éditer Utilisateur</title>
    <!-- Inclusion de Bootstrap CSS via CDN -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-4">
        <h1 class="mb-4">Éditer Utilisateur</h1>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('auth.update', $user->id) }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Nom:</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $user->name) }}" required>
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $user->email) }}" required>
            </div>

            <div class="form-group">
                <label for="compagnie_id">Compagnie:</label>
                <select id="compagnie_id" name="compagnie_id" class="form-control">
                    <option value="">-- Aucune --</option> <!-- Option pour aucune compagnie -->
                    @foreach ($compagnies as $compagnie)
                        <option value="{{ $compagnie->id }}"
                            {{ (old('compagnie_id', $user->compagnie_id) == $compagnie->id) ? 'selected' : '' }}>
                            {{ $compagnie->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Mettre à jour</button>
        </form>

        <a href="{{ route('auth.list') }}" class="btn btn-secondary mt-3">Retour à la liste des utilisateurs</a>
    </div>

    <!-- Inclusion de Bootstrap JS via CDN -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
@endsection
