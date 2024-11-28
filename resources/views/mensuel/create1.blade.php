@extends('layouts.app')  

@section('contenus')  
<form action="{{ route('mensuel.store') }}" class="row g-3 needs-validation" method="post">
    @csrf
    <div class="row">
        <div class="col-md-6 col-lg-4">
            <div class="form-group mb-3">
                <label for="formulaire_id">Formulaire</label>
                <select class="form-control" name="formulaire_id" >
                    <option value="">Sélectionnez un formulaire</option>
                    @foreach($formulaire_id as $formulaire_id)
                        <option value="{{ $formulaire_id->id }}">{{ $formulaire_id->id }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col-md-6 col-lg-4">
            <div class="form-group mb-3">
                <label for="trimestre">trimestre</label>
                <select class="form-control" name="trimestre" >
                    <option value="">Sélectionnez le trimestre</option>
                    @foreach($formulaire as $formulaire)
                        <option value="{{ $formulaire->trimestre }}">{{ $formulaire->trimestre }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col-md-6 col-lg-4">
            <div class="form-group mb-3">
                <label for="compagnie_id">Compagnie</label>
            <select class="form-control" name="compagnie_id" >
                <option value="">Sélectionnez une compagnie</option>
                @foreach($compagnies as $compagnie)
                    <option value="{{ $compagnie->id }}">{{ $compagnie->denomination }}</option>
                @endforeach
            </select>
            </div>
        </div>
        <div class="text-center mt-4">
            <button type="submit" class="btn btn-primary"><i class="far fa-save"></i> Enregistrer</button>
            {{-- <a href="{{ route('compagnie.index') }}" class="btn btn-danger"><i class="fas fa-angle-double-left"></i> Retour</a> --}}
        </div>
    </div>
</form>
@endsection