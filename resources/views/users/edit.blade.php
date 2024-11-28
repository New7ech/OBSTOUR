@extends('layouts/app')
@section('contenus')


    <style>
        body {
            background-color: #f8f9fa;
        }
    </style>

    <div class="container mt-5">
        <h1 class="mb-4">Metre à jour l utilisateur</h1>

        <form action="{{ route('users.update', $user) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ $user->name }}" required>
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control" value="{{ $user->email }}" required>
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" class="form-control">
            </div>

            <div class="form-group">
                <label for="password_confirmation">Confirm Password</label>
                <input type="password" name="password_confirmation" id="password_confirmation" class="form-control">
            </div>
            @if (auth()->user()->hasRole('admin'))
                <div class="form-group">
                    <label for="compagnie_id">Compagnie:</label>
                    <select id="compagnie_id" name="compagnie_id" class="form-control">
                        <option value="">-- Aucune --</option> <!-- Option pour aucune compagnie -->
                        @foreach ($compagnies as $compagnie)
                            <option value="{{ $compagnie->id }}"
                                {{ (old('compagnie_id', $user->compagnie_id) == $compagnie->id) ? 'selected' : '' }}>
                                {{ $compagnie->denomination }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label>Assign Roles</label>
                    @foreach ($roles as $role)
                        <div class="form-check">
                            <input type="checkbox" name="roles[]" value="{{ $role->name }}" id="role-{{ $role->name }}" class="form-check-input" {{ $user->hasRole($role) ? 'checked' : '' }}>
                            <label for="role-{{ $role->id }}" class="form-check-label">{{ $role->name }}</label>
                        </div>
                    @endforeach
                </div>

                <div class="form-group">
                    <label>Supprmier le Role</label>
                    @foreach ($user->getRoleNames() as $role)
                        <div class="form-check">
                            <input type="checkbox" name="remove_roles[]" value="{{ $role }}" id="remove-role-{{ $role }}" class="form-check-input">
                            <label for="remove-role-{{ $role }}" class="form-check-label">{{ $role }}</label>
                        </div>
                    @endforeach
                </div>
            @endif

            <button type="submit" class="btn btn-primary">Enregistre</button>
        </form>

        {{-- <a href="{{ route('users.index') }}" class="btn btn-secondary mt-3">Back to Users</a> --}}
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>

@endsection
