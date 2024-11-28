@extends('layouts.app')
@section('contenus')

<div class="container">
    <div class="page-inner">
        <div class="shadow-lg p-3 mb-5 bg-body rounded">
            <div class="text-center">
            <p class="fs-3">VOLUME DE L'ACTIVITE</p>
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
        <form class="modal-form row g-3 needs-validation" action="{{ route('nbbilletdests.store') }}" method="post" novalidate>  
            @csrf  
            <div class="col-12 grid-margin">  
                <div class="card">  
                    <div class="card-body">  
                        <div class="card">  
                            <h5 class="card-title">Billets émis à partir de agrément IATA</h5>  
                            <table class="table table-hover">  
                                <thead>  
                                    <tr>  
                                        <th scope="col">Europe</th>  
                                        <th scope="col">Asie</th>  
                                    </tr>  
                                </thead>  
                                <tbody>  
                                    <tr>  
                                        <td>  
                                            <input id="iata_erop" name="iata_erop" type="text" class="form-control @error('iata_erop') is-invalid @enderror" placeholder="Europe" required />  
                                            @error('iata_erop')  
                                                <div class="invalid-feedback">{{ $message }}</div>  
                                            @enderror  
                                        </td>  
                                        <td>  
                                            <input id="iata_asi" name="iata_asi" type="text" class="form-control @error('iata_asi') is-invalid @enderror" placeholder="Asie-Pacifique" required />  
                                            @error('iata_asi')  
                                                <div class="invalid-feedback">{{ $message }}</div>  
                                            @enderror  
                                        </td>  
                                    </tr>  
                                </tbody>  
                                <thead>  
                                    <tr>  
                                        <th scope="col">Afrique</th>  
                                        <th scope="col">Amérique</th>  
                                    </tr>  
                                </thead>  
                                <tbody>  
                                    <tr>  
                                        <td>  
                                            <input id="iata_afr" name="iata_afr" type="text" class="form-control @error('iata_afr') is-invalid @enderror" placeholder="Afrique" required />  
                                            @error('iata_afr')  
                                                <div class="invalid-feedback">{{ $message }}</div>  
                                            @enderror  
                                        </td>  
                                        <td>  
                                            <input id="iata_amrq" name="iata_amrq" type="text" class="form-control @error('iata_amrq') is-invalid @enderror" placeholder="Amérique" required />  
                                            @error('iata_amrq')  
                                                <div class="invalid-feedback">{{ $message }}</div>  
                                            @enderror  
                                        </td>  
                                    </tr>  
                                </tbody>  
                            </table>  
                        </div>  
                        <div class="card mt-4">  
                            <h5 class="card-title">Billets émis auprès des compagnies</h5>  
                            <table class="table table-hover">  
                                <thead>  
                                    <tr>  
                                        <th scope="col">Europe</th>  
                                        <th scope="col">Asie</th>  
                                    </tr>  
                                </thead>  
                                <tbody>  
                                    <tr>  
                                        <td>  
                                            <input id="autr_erop" name="autr_erop" type="text" class="form-control @error('autr_erop') is-invalid @enderror" placeholder="Europe" required />  
                                            @error('autr_erop')  
                                                <div class="invalid-feedback">{{ $message }}</div>  
                                            @enderror  
                                        </td>  
                                        <td>  
                                            <input id="autr_asi" name="autr_asi" type="text" class="form-control @error('autr_asi') is-invalid @enderror" placeholder="Asie-Pacifique" required />  
                                            @error('autr_asi')  
                                                <div class="invalid-feedback">{{ $message }}</div>  
                                            @enderror  
                                        </td>  
                                    </tr>  
                                </tbody>  
                                <thead>  
                                    <tr>  
                                        <th scope="col">Afrique</th>  
                                        <th scope="col">Amérique</th>  
                                    </tr>  
                                </thead>  
                                <tbody>  
                                    <tr>  
                                        <td>  
                                            <input id="autr_afr" name="autr_afr" type="text" class="form-control @error('autr_afr') is-invalid @enderror" placeholder="Afrique" required />  
                                            @error('autr_afr')  
                                                <div class="invalid-feedback">{{ $message }}</div>  
                                            @enderror  
                                        </td>  
                                        <td>  
                                            <input id="autr_amrq" name="autr_amrq" type="text" class="form-control @error('autr_amrq') is-invalid @enderror" placeholder="Amérique" required />  
                                            @error('autr_amrq')  
                                                <div class="invalid-feedback">{{ $message }}</div>  
                                            @enderror  
                                        </td>  
                                    </tr>  
                                </tbody>  
                            </table>  
                        </div>  
                        <div class="col-xs-12 col-sm-12 col-md-12 text-center">  
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
