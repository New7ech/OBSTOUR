@extends('layouts.app')
@section('contenus')

<div class="container">
    <div class="page-inner">
        <div class="shadow-lg p-3 mb-5 bg-body rounded">
            <div class="text-center">
            <p class="fs-3">VOLUME DE ACTIVITE</p>
            </div>
        </div>
        @if ($errors->any())  
        <div class="alert alert-danger">  
            <ul>  
                @foreach ($errors->all() as $error)  
                    <li>{{ $error }}</li>  
                @endforeach  
            </ul>  
        </div>  
    @endif 
        <form class="modal-form row g-3 needs-validation" action="{{ route('vactivite.store') }}" method="post" novalidate>  
            @csrf  
            <div class="col-12 grid-margin">  
                <div class="card">  
                    <div class="card-body">  
                        <div class="row">  
                            <h2>Circuit inter-Etat</h2>  
                            <div class="col-md-6 col-lg-6">  
                                <div class="mb-3">  
                                    <input type="number" class="form-control @error('nbcir_int_etat') is-invalid @enderror"   
                                           id="nbcir_int_etat"   
                                           name="nbcir_int_etat"   
                                           placeholder="Nombre de circuits"   
                                           required>  
                                    @error('nbcir_int_etat')  
                                        <div class="invalid-feedback">{{ $message }}</div>  
                                    @enderror  
                                </div>  
                            </div>  
                            <div class="col-md-6 col-lg-6">  
                                <div class="mb-3">  
                                    <input type="number" class="form-control @error('nbtour_int_etat') is-invalid @enderror"   
                                           id="nbtour_int_etat"   
                                           name="nbtour_int_etat"   
                                           placeholder="Nombre de Touristes"   
                                           required>  
                                    @error('nbtour_int_etat')  
                                        <div class="invalid-feedback">{{ $message }}</div>  
                                    @enderror  
                                </div>  
                            </div>  
                        </div>  
                        <div class="row">  
                            <h2>Circuit internes</h2>  
                            <div class="col-md-6 col-lg-6">  
                                <div class="mb-3">  
                                    <input type="number" class="form-control @error('nbcir_intrn') is-invalid @enderror"   
                                           id="nbcir_intrn"   
                                           name="nbcir_intrn"   
                                           placeholder="Nombre de circuits"   
                                           required>  
                                    @error('nbcir_intrn')  
                                        <div class="invalid-feedback">{{ $message }}</div>  
                                    @enderror  
                                </div>  
                            </div>  
                            <div class="col-md-6 col-lg-6">  
                                <div class="mb-3">  
                                    <input type="number" class="form-control @error('nbtour_intrn') is-invalid @enderror"   
                                           id="nbtour_intrn"   
                                           name="nbtour_intrn"   
                                           placeholder="Nombre de Touristes"   
                                           required>  
                                    @error('nbtour_intrn')  
                                        <div class="invalid-feedback">{{ $message }}</div>  
                                    @enderror  
                                </div>  
                            </div>  
                        </div>  
                        <div class="row">  
                            <h2>Excursions</h2>  
                            <div class="col-md-6 col-lg-6">  
                                <div class="mb-3">  
                                    <input type="number" class="form-control @error('nbexcs_exc') is-invalid @enderror"   
                                           id="nbexcs_exc"   
                                           name="nbexcs_exc"   
                                           placeholder="Nombre d'excursions"   
                                           required>  
                                    @error('nbexcs_exc')  
                                        <div class="invalid-feedback">{{ $message }}</div>  
                                    @enderror  
                                </div>  
                            </div>  
                            <div class="col-md-6 col-lg-6">  
                                <div class="mb-3">  
                                    <input type="number" class="form-control @error('nbexcst_exc') is-invalid @enderror"   
                                           id="nbexcst_exc"   
                                           name="nbexcst_exc"   
                                           placeholder="Nombre d'excursionnistes"   
                                           required>  
                                    @error('nbexcst_exc')  
                                        <div class="invalid-feedback">{{ $message }}</div>  
                                    @enderror  
                                </div>  
                            </div>  
                        </div>  
                        <div class="col-xs-12 col-sm-12 col-md-12 text-center">  
                            <button type="submit" class="btn btn-primary"><i class="far fa-save"></i> Enregistrer</button>  
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fermer</button>  
                        </div>  
    
                        <!-- Mes messages d'erreur ou de succès -->  
                        @if (session('success'))  
                            <div class="alert alert-success mt-3">  
                                {{ session('success') }}  
                            </div>  
                        @elseif (session('error'))  
                            <div class="alert alert-danger mt-3">  
                                {{ session('error') }}  
                            </div>  
                        @endif  
                    </div>  
                </div>  
            </div>  
        </form>  
    </div>
</div>


@endsection
