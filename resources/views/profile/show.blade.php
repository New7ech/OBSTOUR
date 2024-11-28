@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h4>Profil de {{ Auth::user()->name }}</h4>
                </div>

                <div class="card-body">
                    <div class="text-center mb-3">
                        <img src="{{ Auth::user()->avatar ?? asset('assets/img/default-avatar.png') }}" alt="Profile Picture" class="img-fluid rounded-circle" style="width: 150px; height: 150px;">
                    </div>
                    <div class="mb-3">
                        <strong>Nom:</strong> {{ Auth::user()->name }}
                    </div>
                    <div class="mb-3">
                        <strong>Adresse e-mail:</strong> {{ Auth::user()->email }}
                    </div>
                    <div class="mb-3">
                        <strong>Date de création du compte:</strong> {{ Auth::user()->created_at->format('d/m/Y') }}
                    </div>

                    <hr>

                    <h5 class="mb-3">Modifier votre profil</h5>
                    <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label for="name" class="form-label">Nom</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{ Auth::user()->name }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Adresse e-mail</label>
                            <input type="email" class="form-control" id="email" name="email" value="{{ Auth::user()->email }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="avatar" class="form-label">Changer l'avatar</label>
                            <input type="file" class="form-control" id="avatar" name="avatar" accept="image/*">
                        </div>

                        <button type="submit" class="btn btn-primary">Mettre à jour</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
