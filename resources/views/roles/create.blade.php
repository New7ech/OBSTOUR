@extends('layouts/app')
@section('contenus')


    <div class="container mt-5">
        <h1>Create Role</h1>

        <form action="{{ route('roles.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control" required>
            </div>

            <div class="form-group">
                <label>Permissions</label>
                @foreach ($permissions as $permission)
                    <div class="form-check">
                        <input type="checkbox" name="permissions[]" value="{{ $permission->id }}" id="permission-{{ $permission->id }}" class="form-check-input">
                        <label for="permission-{{ $permission->id }}" class="form-check-label">{{ $permission->name }}</label>
                    </div>
                @endforeach
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>

@endsection
