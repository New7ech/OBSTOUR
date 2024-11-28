@extends('layouts.app')
@section('contenus')

<div class="container">
    <div class="page-inner">
        <div class="shadow-lg p-3 mb-5 bg-body rounded">
            <div class="text-center">
            <p class="fs-3">CHIFRE AFFAIRE DES CIRCUITS REALISER</p>
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
        <form class="modal-form" action="{{ route('cacircuits.store') }}" class="row g-3 needs-validation" method="post" novalidate>  
            @csrf  
            <div class="col-12 grid-margin">  
                <div class="card">  
                    <div class="card-body">  
                        <div class="row">  
                            <h2>Circuit inter-Etat</h2>  
                            <div class="mb-3">  
                                <input type="number" class="form-control @error('ca_cur_int_etat') is-invalid @enderror"   
                                       id="ca_cur_int_etat"   
                                       name="ca_cur_int_etat"   
                                       placeholder="chiffre d'affaire des circuits inter-Etat"   
                                       required>  
                                @error('ca_cur_int_etat')  
                                    <div class="invalid-feedback">{{ $message }}</div>  
                                @enderror  
                            </div>   
                        </div>  
                        <div class="row">  
                            <h2>Circuit internes</h2>  
                            <div class="mb-3">  
                                <input type="number" class="form-control @error('ca_cur_int') is-invalid @enderror"   
                                       id="ca_cur_int"   
                                       name="ca_cur_int"   
                                       placeholder="chiffre d'affaire des circuits interne"   
                                       required>  
                                @error('ca_cur_int')  
                                    <div class="invalid-feedback">{{ $message }}</div>  
                                @enderror  
                            </div>  
                        </div>  
                        <div class="row">  
                            <h2>Excursions</h2>  
                            <div class="mb-3">  
                                <input type="number" class="form-control @error('ca_cur_excu') is-invalid @enderror"   
                                       id="ca_cur_excu"   
                                       name="ca_cur_excu"   
                                       placeholder="chiffre d'affaire des excursionnistes"   
                                       required>  
                                @error('ca_cur_excu')  
                                    <div class="invalid-feedback">{{ $message }}</div>  
                                @enderror  
                            </div>  
                        </div>  
                        <div class="col-xs-12 col-sm-12 col-md-12 text-center">  
                            <button type="submit" class="btn btn-primary"><i class="far fa-save"></i> Enregistrer</button>  
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fermer</button>  
                        </div>  

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
