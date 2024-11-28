@extends('layouts/app')
@section('contenus')


    <div class="container mt-5">
        <h1>Permissions</h1>

        <a href="{{ route('permissions.create') }}" class="btn btn-primary mb-3">Create Permission</a>

        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($permissions as $permission)
                    <tr>
                        <td>{{ $permission->name }}</td>
                        <td>
                            <a href="{{ route('permissions.edit', $permission) }}" class="btn btn-sm btn-primary">Edit</a>
                            <form action="{{ route('permissions.destroy', $permission) }}" method="POST" style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this permission?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>

@endsection
