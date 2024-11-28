@extends('layouts.app')

@section('contenus')

<div class="container my-5">
    <div class="page-inner">
        <div class="shadow-lg p-3 mb-5 bg-body rounded">
            <div class="text-center">
                <h2 class="fs-3">Formulaire de creation d un agence de voyage (AVT)</h2>
            </div>
        </div>
        <form action="{{ route('compagnie.store') }}" class="row g-3 needs-validation" method="post">
            @csrf
            <div class="col-12 grid-margin">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">INFORMATION GENERALES</h3>
                        <p class="card-description"> Veuillez remplir les informations de votre agence de voyage </p>
                        <div class="row">
                            <div class="col-md-6 col-lg-4">
                                <div class="form-group mb-3">
                                    <label for="denomination" class="form-label">Dénomination<span class="text-danger">*</span></label>
                                    <input
                                        value="{{ old('denomination') }}"
                                        class="form-control @error('denomination') is-invalid @enderror"
                                        id="denomination"
                                        name="denomination"
                                        type="text"
                                        required
                                    />
                                    @error('denomination')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group mb-3">
                                    <label for="tel" class="form-label">Téléphone<span class="text-danger">*</span></label>
                                    <input
                                        value="{{ old('tel') }}"
                                        class="form-control @error('tel') is-invalid @enderror"
                                        id="tel"
                                        name="tel"
                                        type="text"
                                        required
                                    />
                                    @error('tel')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="form-group mb-3">
                                    <label for="categorie" class="form-label">Catégorie<span class="text-danger">*</span></label>
                                    <select
                                        name="categorie"
                                        id="categorie"
                                        class="form-select form-control @error('categorie') is-invalid @enderror"
                                        required
                                    >
                                        <option value="" disabled selected hidden>Sélectionnez</option>
                                        <option value="A">A</option>
                                        <option value="B">B</option>
                                        <option value="C">C</option>
                                    </select>
                                    @error('categorie')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group mb-3">
                                    <label for="periode" class="form-label">Période exercice<span class="text-danger">*</span></label>
                                    <input
                                        value="{{ old('periode') }}"
                                        class="form-control @error('periode') is-invalid @enderror"
                                        id="periode"
                                        name="periode"
                                        type="text"
                                        required
                                    />
                                    @error('periode')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="form-group mb-3">
                                    <label for="addr" class="form-label">Adresse postale<span class="text-danger">*</span></label>
                                    <input
                                        value="{{ old('addr') }}"
                                        class="form-control @error('addr') is-invalid @enderror"
                                        id="addr"
                                        name="addr"
                                        type="text"
                                        required
                                    />
                                    @error('addr')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group mb-3">
                                    <label for="email" class="form-label">Email<span class="text-danger">*</span></label>
                                    <input
                                        value="{{ old('email') }}"
                                        class="form-control @error('email') is-invalid @enderror"
                                        id="email"
                                        name="email"
                                        type="email"
                                        required
                                    />
                                    @error('email')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-8 col-lg-6">
                                <div class="form-group mb-3">
                                    <label for="site" class="form-label">Site Internet</label>
                                    <div class="input-group">
                                        <span class="input-group-text">https://</span>
                                        <input
                                            value="{{ old('site') }}"
                                            class="form-control @error('site') is-invalid @enderror"
                                            id="site"
                                            name="site"
                                            type="url"
                                        />
                                        @error('site')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center mt-4">
                            <button type="submit" class="btn btn-primary"><i class="far fa-save"></i> Enregistrer</button>
                            {{-- <a href="{{ route('compagnie.index') }}" class="btn btn-danger"><i class="fas fa-angle-double-left"></i> Retour</a> --}}
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection
