@extends('layouts.app')
@section('contenus')

<div class="container">
    <div class="page-inner">
        <div class="shadow-lg p-3 mb-5 bg-body rounded">
            <div class="text-center">
            <p class="fs-3">EMPLOIS</p>
            </div>
        </div>
        <form action="{{ route('formulaire.store') }}" class="row g-3 needs-validation" method="post" novalidate>
            @csrf
            <div class="col-12 grid-margin">
                <div class="card">
                    <div class="card-body">
                            <div class="text-center mt-4">
                                <button type="submit" class="btn btn-primary"><i class="far fa-save"></i> Enregistrer</button>
                                <a href="{{ route('formulaire.create') }}" class="btn btn-danger"><i class="fas fa-angle-double-left"></i> Retour</a>
                            </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection
