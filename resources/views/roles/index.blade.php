@extends('layouts/app')
@section('contenus')


    <div class="container mt-5">
        <h1>Roles</h1>

        <a href="{{ route('roles.create') }}" class="btn btn-primary mb-3">Create Role</a>

        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Permissions</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($roles as $role)
                    <tr>
                        <td>{{ $role->name }}</td>
                        <td>{{ $role->permissions->pluck('name')->implode(', ') }}</td>
                        <td>
                            <a href="{{ route('roles.edit', $role) }}" class="btn btn-sm btn-primary">Edit</a>
                            <form action="{{ route('roles.destroy', $role) }}" method="POST" style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this role?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>

@endsection
