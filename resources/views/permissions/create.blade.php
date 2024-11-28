@extends('layouts/app')
@section('contenus')


    <div class="container mt-5">
        <h1>Create Permission</h1>

        <form action="{{ route('permissions.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>

@endsection
