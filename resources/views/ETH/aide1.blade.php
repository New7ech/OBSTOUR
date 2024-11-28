@extends('layouts.app')

@section('contenus')
<link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
<div class="row">
    <div class="col-md-6">
        <h1>ACTIVITE EXERCEE SUR LA PERIODE DE COLLECTE</h1>
        <form>  
            <div class="form-group">  
              <label for="fonctionne">Votre établissement a-t-il fonctionné au cours de ce mois ?</label>  
              <select class="form-control" id="fonctionne" onchange="this.dataset.showInput = this.value === 'Oui'">  
                <option value="Non">Non</option>  
                <option value="Oui">Oui</option>  
              </select>  
            </div>  
            
            <div class="form-group" style="display: none;" id="inputNombre">  
              <label for="nombre">Entrez le nombre :</label>  
              <input type="number" class="form-control" id="nombre" placeholder="Nombre">  
            </div>  
            
            <script>  
              document.getElementById("fonctionne").addEventListener("change", function() {  
                document.getElementById("inputNombre").style.display = this.value === "Oui" ? "block" : "none";  
              });  
            </script>  
          </form>
    </div>
</div>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
<!-- JQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
@endsection
