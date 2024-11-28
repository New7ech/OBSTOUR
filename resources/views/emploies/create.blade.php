@extends('layouts.app')
@section('contenus')

<div class="container">
    <div class="page-inner">
        <div class="shadow-lg p-3 mb-5 bg-body rounded">
            <div class="text-center">
            <p class="fs-3">EMPLOIS</p>
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
        <form class="modal-form" action="{{ route('emploies.store') }}" class="row g-3 needs-validation" method="post" novalidate>
            @csrf
            <div class="col-12 grid-margin">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <table class="table table-hover ">
                                <thead>
                                    <tr>
                                        <th scope="col"></th>
                                        <th scope="col" colspan="2" class="text-center">Nationaux</th>
                                        <th scope="col" colspan="2" class="text-center">Autres nationalités</th>
                                    </tr>
                                    <tr>
                                        <th scope="col">Catégorie</th>
                                        <th scope="col">Homme</th>
                                        <th scope="col">Femme</th>
                                        <th scope="col">Homme</th>
                                        <th scope="col">femme</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">Cadre supérieur, Ingénieur et assimilé</th>
                                        <td><input value="{{ old('cadrsup_nat_hom') }}" class="form-control @error('cadrsup_nat_hom') is-invalid @enderror" id="cadrsup_nat_hom" name="cadrsup_nat_hom" type="text" class="form-control" /><div class="invalid-feedback">Please provide a valid city.</div></td>
                                        <td><input value="{{ old('cadrsup_nat_fem') }}" class="form-control @error('cadrsup_nat_fem') is-invalid @enderror" id="cadrsup_nat_fem" name="cadrsup_nat_fem" type="text" class="form-control" /><div class="invalid-feedback">Please provide a valid city.</div></td>
                                        <td><input value="{{ old('cadrsup_otrnat_hom') }}" class="form-control @error('cadrsup_otrnat_hom') is-invalid @enderror" id="cadrsup_otrnat_hom" name="cadrsup_otrnat_hom" type="text" class="form-control" /><div class="invalid-feedback">Please provide a valid city.</div></td>
                                        <td><input value="{{ old('cadrsup_otrnat_fem') }}" class="form-control @error('cadrsup_otrnat_fem') is-invalid @enderror" id="cadrsup_otrnat_fem" name="cadrsup_otrnat_fem" type="text" class="form-control" /><div class="invalid-feedback">Please provide a valid city.</div></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Cadre moyenne, Agent de maîtrise</th>
                                        <td><input value="{{ old('cadrmoy_nat_hom') }}" class="form-control @error('cadrmoy_nat_hom') is-invalid @enderror" id="cadrmoy_nat_hom" name="cadrmoy_nat_hom" type="text" class="form-control" /><div class="invalid-feedback">Please provide a valid city.</div></td>
                                        <td><input value="{{ old('cadrmoy_nat_fem') }}" class="form-control @error('cadrmoy_nat_fem') is-invalid @enderror" id="cadrmoy_nat_fem" name="cadrmoy_nat_fem" type="text" class="form-control" /><div class="invalid-feedback">Please provide a valid city.</div></td>
                                        <td><input value="{{ old('cadrmoy_otrnat_hom') }}" class="form-control @error('cadrmoy_otrnat_hom') is-invalid @enderror" id="cadrmoy_otrnat_hom" name="cadrmoy_otrnat_hom" type="text" class="form-control" /><div class="invalid-feedback">Please provide a valid city.</div></td>
                                        <td><input value="{{ old('cadrmoy_otrnat_fem') }}" class="form-control @error('cadrmoy_otrnat_fem') is-invalid @enderror" id="cadrmoy_otrnat_fem" name="cadrmoy_otrnat_fem" type="text" class="form-control" /><div class="invalid-feedback">Please provide a valid city.</div></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Employés/ouvriers</th>
                                        <td><input value="{{ old('emp_nat_hom') }}" class="form-control @error('emp_nat_hom') is-invalid @enderror" id="emp_nat_hom" name="emp_nat_hom" type="text" class="form-control" /><div class="invalid-feedback">Please provide a valid city.</div></td>
                                        <td><input value="{{ old('emp_nat_fem') }}" class="form-control @error('emp_nat_fem') is-invalid @enderror" id="emp_nat_fem" name="emp_nat_fem" type="text" class="form-control" /><div class="invalid-feedback">Please provide a valid city.</div></td>
                                        <td><input value="{{ old('emp_otrnat_hom') }}" class="form-control @error('emp_otrnat_hom') is-invalid @enderror" id="emp_otrnat_hom" name="emp_otrnat_hom" type="text" class="form-control" /><div class="invalid-feedback">Please provide a valid city.</div></td>
                                        <td><input value="{{ old('emp_otrnat_fem') }}" class="form-control @error('emp_otrnat_fem') is-invalid @enderror" id="emp_otrnat_fem" name="emp_otrnat_fem" type="text" class="form-control" /><div class="invalid-feedback">Please provide a valid city.</div></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Manoeuvre</th>
                                        <td><input value="{{ old('man_nat_hom') }}" class="form-control @error('man_nat_hom') is-invalid @enderror" id="man_nat_hom" name="man_nat_hom" type="text" class="form-control" /><div class="invalid-feedback">Please provide a valid city.</div></td>
                                        <td><input value="{{ old('man_nat_fem') }}" class="form-control @error('man_nat_fem') is-invalid @enderror" id="man_nat_fem" name="man_nat_fem" type="text" class="form-control" /><div class="invalid-feedback">Please provide a valid city.</div></td>
                                        <td><input value="{{ old('man_otrnat_hom') }}" class="form-control @error('man_otrnat_hom') is-invalid @enderror" id="man_otrnat_hom" name="man_otrnat_hom" type="text" class="form-control" /><div class="invalid-feedback">Please provide a valid city.</div></td>
                                        <td><input value="{{ old('man_otrnat_fem') }}" class="form-control @error('man_otrnat_fem') is-invalid @enderror" id="man_otrnat_fem" name="man_otrnat_fem" type="text" class="form-control" /><div class="invalid-feedback">Please provide a valid city.</div></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Temporaires/saisonniers</th>
                                        <td><input value="{{ old('tem_nat_hom') }}" class="form-control @error('tem_nat_hom') is-invalid @enderror" id="tem_nat_hom" name="tem_nat_hom" type="text" class="form-control" /><div class="invalid-feedback">Please provide a valid city.</div></td>
                                        <td><input value="{{ old('tem_nat_fem') }}" class="form-control @error('tem_nat_fem') is-invalid @enderror" id="tem_nat_fem" name="tem_nat_fem" type="text" class="form-control" /><div class="invalid-feedback">Please provide a valid city.</div></td>
                                        <td><input value="{{ old('tem_otrnat_hom') }}" class="form-control @error('tem_otrnat_hom') is-invalid @enderror" id="tem_otrnat_hom" name="tem_otrnat_hom" type="text" class="form-control" /><div class="invalid-feedback">Please provide a valid city.</div></td>
                                        <td><input value="{{ old('tem_otrnat_fem') }}" class="form-control @error('tem_otrnat_fem') is-invalid @enderror" id="tem_otrnat_fem" name="tem_otrnat_fem" type="text" class="form-control" /><div class="invalid-feedback">Please provide a valid city.</div></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="text-center mt-4">
                            <button type="submit" class="btn btn-primary"><i class="far fa-save"></i> Enregistrer</button>
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fermer</button>  
                        </div>
                        
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection
