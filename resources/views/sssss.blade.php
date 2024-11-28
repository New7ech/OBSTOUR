<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tourism Dashboard</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Animate.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <!-- Custom CSS -->
    <style>
        body {
            background-image: url('https://example.com/your-background-image.jpg'); /* Change this to your background image */
            background-size: cover;
            background-position: center;
            color: #fff;
        }
        .dashboard {
            padding: 40px;
            backdrop-filter: blur(5px);
        }
        .card {
            box-shadow: 0 4px 8px rgba(0,0,0,0.5);
            transition: 0.3s;
            border-radius: 10px;
        }
        .card:hover {
            box-shadow: 0 8px 16px rgba(0,0,0,0.8);
        }
        .card-img-top {
            height: 200px;
            object-fit: cover;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }
        .card-body {
            background: rgba(0, 0, 0, 0.5);
            border-radius: 0 0 10px 10px;
        }
    </style>
</head>
<body>
    <div class="container dashboard">
        <h1 class="text-center mb-4 animate__animated animate__fadeInDown">Bienvenue sur notre Tableau de Bord Touristique</h1>
        <div class="row">
            <div class="col-md-4">
                <div class="card animate__animated animate__fadeInLeft">
                    <img class="card-img-top" src="./assets/img/destination1.jpg" alt="Destination 1">
                    <div class="card-body">
                        <h5 class="card-title">Destination 1</h5>
                        <p class="card-text">Découvrez la beauté de notre première destination, un endroit idéal pour vos vacances.</p>
                        <a href="#" class="btn btn-light">Explorer</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card animate__animated animate__fadeInUp">
                    <img class="card-img-top" src="./assets/img/destination2.jpg" alt="Destination 2">
                    <div class="card-body">
                        <h5 class="card-title">Destination 2</h5>
                        <p class="card-text">Venez explorer cette destination incroyable aux paysages à couper le souffle.</p>
                        <a href="#" class="btn btn-light">Explorer</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card animate__animated animate__fadeInRight">
                    <img class="card-img-top" src="./assets/img/destination3.jpg" alt="Destination 3">
                    <div class="card-body">
                        <h5 class="card-title">Destination 3</h5>
                        <p class="card-text">Une destination riche en culture et en aventure, parfaite pour les explorateurs.</p>
                        <a href="#" class="btn btn-light">Explorer</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap JS and Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoJtKh7z7lGz7fuP4F8nfdFvAOA6Gg/z6Y5J6XqqyGXYM2ntX5" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>
