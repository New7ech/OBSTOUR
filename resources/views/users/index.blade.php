@extends('layouts/app')
@section('contenus')

    <style>
        body {
            background-color: #f8f9fa;
        }
    </style>

    <div class="container mt-5">
        <h1 class="mb-4">Utilisateur</h1>

        <a href="{{ route('users.create') }}" class="btn btn-primary mb-3">Cree un utilisateur</a>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Email</th>
                    <th>Roles</th>
                    <th>Compagnie</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->roles->pluck('name')->implode(', ') }}</td>
                        <td>{{ $user->compagnie->denomination ?? 'Aucune' }}</td>
                        <td>
                            <a href="{{ route('users.edit', $user->id) }}" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i>Éditer</a>
                            <a href="{{ route('users.show', $user->id) }}" class="btn btn-info btn-sm"><i class="fa fa-eye"></i>Voir</a>
                            <form action="{{ route('users.destroy', $user->id) }}" method="POST" style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this user?')"><i class="fas fa-trash-alt"></i>Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>


@endsection
