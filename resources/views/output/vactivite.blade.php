@extends('layouts.app')
@section('contenus')
    <div class="container">
        <div class="page-inner">
            <div class="row justify-content-center mt-3">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="float-start">
                                <h4><strong>Information sur les enregistrements</strong></h4>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="card">
                                <div class="card-body">
                                    <h4><strong>Information sur les enregistrements du volume d activiter</strong></h4>
                                    <table class="table table-bordered table-bordered-bd-warning mt-4">  
                                        <thead>  
                                            <tr>  
                                                <th scope="col">Mois</th>  
                                                <th scope="col" colspan="2">Circuits inter-états</th>  
                                                <th scope="col" colspan="2">Circuits internes</th>  
                                                <th scope="col" colspan="2">Excursions</th>  
                                                <th scope="col" colspan="2">Date</th>  
                                            </tr>  
                                            <tr>  
                                                <th scope="col">#</th>  
                                                <th scope="col">Nombre de circuts</th>  
                                                <th scope="col">Nombre de touristes</th>  
                                                <th scope="col">Nombre de circuts</th>  
                                                <th scope="col">Nombre de touristes</th>  
                                                <th scope="col">Nombre d'Excursions</th>  
                                                <th scope="col">Nombre d'Excursionniste</th>  
                                                <th scope="col">#</th>  
                                            </tr>
                                        </thead>  
                                        <tbody>  
                                            @foreach($vactivite as $vactivite)  
                                            <tr>  
                                                <th scope="row">{{ $vactivite->mois }}</th>  
                                                <td>{{ $vactivite->nbcir_int_etat }}</td>  
                                                <td>{{ $vactivite->nbtour_int_etat }}</td>  
                                                <td>{{ $vactivite->nbcir_intrn }}</td>  
                                                <td>{{ $vactivite->nbtour_intrn }}</td>  
                                                <td>{{ $vactivite->nbexcs_exc }}</td>  
                                                <td>{{ $vactivite->nbexcst_exc }}</td>  
                                                <td>
                                                    {{ \Carbon\Carbon::parse($vactivite->created_at)->format('d/m/Y') }}
                                                </td>
                                            </tr>  
                                            @endforeach  
                                        </tbody>  
                                    </table> 
                                    {{-- {{ $vactivite->links() }} --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
