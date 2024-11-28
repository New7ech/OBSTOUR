@extends('layouts/app')
@section('contenus')


    <div class="container mt-5">
        <h1>Edit Permission</h1>

        <form action="{{ route('permissions.update', $permission) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ $permission->name }}" required>
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>

@endsection
