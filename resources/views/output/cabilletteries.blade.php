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
                                    <table class="table table-bordered table-bordered-bd-warning mt-4">  
                                        <thead>  
                                            <tr>  
                                                <th scope="col">#</th>  
                                                <th scope="col">Billet IATA</th>  
                                                <th scope="col">Autre billets</th>  
                                                <th scope="col">Total</th>  
                                                <th scope="col">Recette</th>  
                                                <th scope="col">Date</th>  
                                            </tr>  
                                        </thead>  
                                        <tbody>  
                                            @foreach($cabilletteries as $cabillettery)  
                                            <tr>  
                                                <th scope="row">{{ $cabillettery->mois }}</th>  
                                                <td>{{ $cabillettery->ca_bil_iata }}</td>  
                                                <td>{{ $cabillettery->ca_bil_otr }}</td>  
                                                <td>{{ ($cabillettery->ca_bil_iata + $cabillettery->ca_bil_otr) }}</td> 
                                                <td>formule ?</td>
                                                <td>
                                                    {{ \Carbon\Carbon::parse($cabillettery->created_at)->format('d/m/Y') }}
                                                </td>
                                            </tr>  
                                            @endforeach  
                                        </tbody>  
                                    </table>
                                    {{-- {{ $cabilletteries->links() }} --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
