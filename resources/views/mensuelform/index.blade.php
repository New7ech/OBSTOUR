<!doctype html>  
<html lang="en">  
<head>  
    <!-- Required meta tags -->  
    <meta charset="utf-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1">  
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bs-stepper/dist/css/bs-stepper.min.css">  
    
    <!-- Bootstrap CSS -->  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">  
    
    <title>Formulaire avec Étapes</title>  
</head>  
<body>  
    <div class="bs-stepper">  
        <div class="bs-stepper-header" role="tablist">  
            <div class="step" data-target="#logins-part">  
                <button type="button" class="step-trigger" role="tab" aria-controls="logins-part" id="logins-part-trigger">  
                    <span class="bs-stepper-circle">1</span>  
                    <span class="bs-stepper-label">Logins</span>  
                </button>  
            </div>  
            <div class="line"></div>  
            <div class="step" data-target="#information-part">  
                <button type="button" class="step-trigger" role="tab" aria-controls="information-part" id="information-part-trigger">  
                    <span class="bs-stepper-circle">2</span>  
                    <span class="bs-stepper-label">Informations Diverses</span>  
                </button>  
            </div>  
            <div class="line"></div>  
            <div class="step" data-target="#login-part">  
                <button type="button" class="step-trigger" role="tab" aria-controls="login-part" id="login-part-trigger">  
                    <span class="bs-stepper-circle">3</span>  
                    <span class="bs-stepper-label">Confirmation</span>  
                </button>  
            </div>  
        </div>  

        <div class="bs-stepper-content">  
            <div id="logins-part" class="content" role="tabpanel" aria-labelledby="logins-part-trigger">  
                <h5>Logins</h5>  
                <p>Veuillez entrer vos informations de connexion.</p>  
                <input type="text" class="form-control" placeholder="Votre nom d'utilisateur" id="username">  
                <input type="password" class="form-control" placeholder="Votre mot de passe" id="password">  
            </div>  s
            <div id="information-part" class="content" role="tabpanel" aria-labelledby="information-part-trigger">  
                <h5>Informations Diverses</h5>  
                <p>Veuillez fournir des informations supplémentaires.</p>  
                <input type="text" class="form-control" placeholder="Votre adresse email" id="email">  
                <input type="text" class="form-control" placeholder="Votre numéro de téléphone" id="phone">  
            </div>  
            <div id="login-part" class="content" role="tabpanel" aria-labelledby="login-part-trigger">  
                <h5>Confirmation</h5>  
                <p>Veuillez confirmer vos informations de connexion.</p>  
                <p>Nom d'utilisateur : <span id="confirmUsername"></span></p>  
                <p>Email : <span id="confirmEmail"></span></p>  
                <p>Téléphone : <span id="confirmPhone"></span></p>  
                <input type="text" class="form-control" placeholder="Votre confirmation" id="confirmation">  
            </div>  
        </div>  
    </div>  

    <button class="btn btn-secondary" id="prevBtn" style="display: none;">Précédent</button>  
    <button class="btn btn-primary" id="nextBtn">Suivant</button>  
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>  
    <script src="https://cdn.jsdelivr.net/npm/bs-stepper/dist/js/bs-stepper.min.js"></script>  

    <script>  
        const stepper = new Stepper(document.querySelector('.bs-stepper'));  

        document.getElementById('nextBtn').addEventListener('click', function () {  
            if (validateStep(stepper._currentIndex)) {  
                // Store data in local storage for later use  
                storeStepData(stepper._currentIndex);  
                stepper.next();  
                updateConfirmation();  
                updateButtonVisibility();  
            } else {  
                alert("Veuillez remplir tous les champs requis.");  
            }  
        });  

        document.getElementById('prevBtn').addEventListener('click', function () {  
            stepper.previous();  
            updateButtonVisibility();  
        });  

        function updateConfirmation() {  
            if (stepper._currentIndex === 2) {  
                document.getElementById('confirmUsername').innerText = localStorage.getItem('username') || '';  
                document.getElementById('confirmEmail').innerText = localStorage.getItem('email') || '';  
                document.getElementById('confirmPhone').innerText = localStorage.getItem('phone') || '';  
            }  
        }  

        function validateStep(index) {  
            switch (index) {  
                case 0:  
                    return document.getElementById('username').value && document.getElementById('password').value;  
                case 1:  
                    return document.getElementById('email').value && document.getElementById('phone').value;  
                case 2:  
                    return document.getElementById('confirmation').value; // Vérification de la confirmation  
                default:  
                    return false;  
            }  
        }  

        function storeStepData(index) {  
            switch (index) {  
                case 0:  
                    localStorage.setItem('username', document.getElementById('username').value);  
                    localStorage.setItem('password', document.getElementById('password').value);  
                    break;  
                case 1:  
                    localStorage.setItem('email', document.getElementById('email').value);  
                    localStorage.setItem('phone', document.getElementById('phone').value);  
                    break;  
            }  
        }  

        // Update the visibility of the buttons  
        function updateButtonVisibility() {  
            const currentStepIndex = stepper._currentIndex; // Indice de l'étape actuelle  
            document.getElementById('prevBtn').style.display = currentStepIndex === 0 ? 'none' : 'inline-block';  
            document.getElementById('nextBtn').style.display = currentStepIndex === stepper._steps.length - 1 ? 'none' : 'inline-block';  
        }  

        // Initialiser la visibilité des boutons  
        updateButtonVisibility();  
    </script>  
</body>  
</html>