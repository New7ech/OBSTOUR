@extends('layouts.app')

@section('contenus')


    <div class="container mt-4">
        <h1>Détails</h1>

        <div class="card mb-4">
            <div class="card-body">
                {{-- <p><strong>ID:</strong> {{ $user->id }}</p> --}}
                <p><strong>Nom:</strong> {{ $user->name }}</p>
                <p><strong>Email:</strong> {{ $user->email }}</p>
                <p><strong>Compagnie:</strong> {{ $user->compagnie->denomination ?? 'Aucune' }}</p>
                <a href="{{ route('users.edit', $user->id) }}" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i>Éditer</a>
            </div>
            
        </div>
    </div>

    <!-- Inclusion de Bootstrap JS via CDN -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>

@endsection
