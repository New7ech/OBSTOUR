<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Obstour</title>
    <!-- Inclusion de Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/all.min.css') }}">
    <style>
        .login-card {
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);
        }
        .logo {
            max-width: 150px;
        }
        .login-card-img {
            object-fit: cover;
            height: 100%;
            border-radius: 0;
        }
        .form-control {
            max-width: 80%;
            margin: 0 auto;
        }
        #login {
            max-width: 80%;
            margin: 20px auto;
            display: block;
        }
    </style>
</head>
<body>

<main class="d-flex align-items-center min-vh-100 py-3">
    <div class="container">
        <div class="card login-card">
            <div class="row no-gutters">
                <div class="col-md-5">
                    <img src="{{ asset('assets/img/bg-404.jpeg') }}" alt="login" class="login-card-img img-fluid">
                </div>
                <div class="col-md-7">
                    <div class="card-body">
                        <div class="brand-wrapper text-center mb-4">
                            <img src="{{ asset('assets/img/obstour.jpg') }}" alt="logo" class="logo">
                        </div>
                        <p class="login-card-description text-center">Connectez-vous à votre compte</p>

                        <!-- Affichage des messages erreur -->
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form action="{{ route('login.custom') }}" method="POST">
                            @csrf
                            <div class="form-group mb-3">
                                <label for="email" class="sr-only">Email</label>
                                <input type="email" name="email" id="email" class="form-control" placeholder="Adresse email" required autofocus>
                            </div>
                            <div class="form-group mb-3">
                                <label for="password" class="sr-only">Mot de passe</label>
                                <input type="password" name="password" id="password" class="form-control" placeholder="***********" required>
                            </div>
                            <button type="submit" id="login" class="btn btn-primary mb-4">Connexion</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<!-- Inclusion de jQuery et Bootstrap JS -->
<script src="{{ asset('assets/bootstrap/js/jquery-3.6.0.min.js') }}"></script>
<script src="{{ asset('assets/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
