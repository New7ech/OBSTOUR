@extends('layouts.app')

@section('contenus')
    <form class="modal-form row g-3 needs-validation" action="{{ route('nbbilletcompa.store') }}" method="post" novalidate>  
        @csrf  
        <div class="col-12 grid-margin">  
            <div class="card">  
                <div class="card-body">  
                    <div class="card">  
                         
                        <div class="row">  
                            <div class="col-md-4">  
                                <div class="form-group">  
                                    <label>Votre établissement a-t-il fonctionné ce mois ?<span class="text-danger">(*)</span></label>  
                                    <select class="form-control">  
                                        <option value="" disabled selected hidden>Sélectionnez</option>
                                        <option value="Non">Non</option>  
                                        <option value="Oui">Oui</option>  
                                    </select>  
                                    @error('bil_alg')  
                                        <div class="invalid-feedback">{{ $message }}</div>  
                                    @enderror  
                                </div>  
                            </div>  
                            <div class="col-md-4">  
                                <div class="form-group">  
                                    <label>Avez vous accueillie des clients pandant ce moi ?<span class="text-danger">(*)</span></label>  
                                    <select class="form-control">  
                                        <option value="" disabled selected hidden>Sélectionnez</option>
                                        <option value="Non">Non</option>  
                                        <option value="Oui">Oui</option>  
                                      </select> 
                                    @error('bil_tur')  
                                        <div class="invalid-feedback">{{ $message }}</div>  
                                    @enderror  
                                </div>  
                            </div>  
                            <div class="col-md-4">  
                                <div class="form-group">  
                                    <label for="fonctionne">La capaciter d'accuiel a ete modifier ce mois ? <span class="text-danger">(*)</span></label>  
                                    <select class="form-control" id="fonctionne" onchange="this.dataset.showInput = this.value === 'Oui'">  
                                        <option value="" disabled selected hidden>Sélectionnez</option>
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
                            </div>  
                        </div>  
                        
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                        <button type="submit" class="btn btn-primary"><i class="far fa-save"></i> Enregistrer</button>
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fermer</button>  
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection