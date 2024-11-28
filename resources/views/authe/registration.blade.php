@extends('layouts.app')

@section('contenus')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <div class="card shadow-sm">
                <div class="card-body p-5">
                    <h4 class="card-title text-center">Création de Compte Utilisateur</h4>
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
                        <div class="form-group mb-3">
                            <label for="compagnie_id">Compagnie</label>
                            <select class="form-control" name="compagnie_id" required>
                                <option value="">Sélectionnez une compagnie</option>
                                @foreach($compagnies as $compagnie)
                                    <option value="{{ $compagnie->id }}">{{ $compagnie->denomination }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group mb-3">
                            <label for="roles_id">Rôle</label>
                            <select class="form-control" name="roles_id" required>
                                <option value="">Sélectionnez un rôle</option>
                                @foreach($roles as $role)
                                    <option value="{{ $role->name }}">{{ $role->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group mb-3">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" name="remember" id="remember">
                                <label class="form-check-label" for="remember">Se souvenir de moi</label>
                            </div>
                        </div>
                        <div class="d-grid gap-2 mt-4">
                            <button type="submit" class="btn btn-primary btn-lg">Créer un compte</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
