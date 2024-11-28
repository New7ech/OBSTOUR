@extends('layouts.app')

@section('contenus')
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Formulaire de creation d'un Utilisateur</h1>

        <form action="{{ route('users.store') }}" method="POST">
            @csrf

            <div class="form-group mb-3">
                <input type="text" placeholder="Nom" id="name" class="form-control" name="name" required autofocus>
                @if ($errors->has('name'))
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                @endif
            </div>
            <div class="form-group mb-3">
                <input type="email" placeholder="Email" id="email_address" class="form-control" name="email" required>
                @if ($errors->has('email'))
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                @endif
            </div>

            <div class="form-group mb-3">
                <input type="password" placeholder="Mot de passe" id="password" class="form-control" name="password" required>
                @if ($errors->has('password'))
                    <span class="text-danger">{{ $errors->first('password') }}</span>
                @endif
            </div>

            <div class="form-group">
                <input type="password" placeholder="Confirmation de mot de passe" name="password_confirmation" id="password_confirmation" class="form-control" required>
            </div>

            <div class="form-group mb-3">
                <label for="compagnie_id">Compagnie</label>
                <select class="form-control" name="compagnie_id" >
                    <option value="">Sélectionnez une compagnie</option>
                    @foreach($compagnies as $compagnie)
                        <option value="{{ $compagnie->id }}">{{ $compagnie->denomination }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label>Roles</label>
                @foreach ($roles as $role)
                    <div class="form-check">
                        <input type="checkbox" name="roles[]" value="{{ $role->name }}" id="role-{{ $role->name }}" class="form-check-input">
                        <label for="role-{{ $role->name }}" class="form-check-label">{{ $role->name }}</label>
                    </div>
                @endforeach
            </div>

            <div class="d-grid gap-2 mt-4">
                <button type="submit" class="btn btn-primary btn-lg">Créer un compte</button>
            </div>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
@endsection
