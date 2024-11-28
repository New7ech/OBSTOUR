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
                                    <h4><strong>Information sur les enregistrements des chifre d affaire des circuites realiser</strong></h4>
                                    <table class="table table-bordered table-bordered-bd-warning mt-4">  
                                        <thead>  
                                            <tr>  
                                                <th scope="col">#</th>  
                                                <th scope="col">Circuits inter-états</th>  
                                                <th scope="col">Circuits internes</th>  
                                                <th scope="col">Excursions</th>  
                                                <th scope="col">Total</th>  
                                                <th scope="col">Date</th>  
                                            </tr>  
                                        </thead>  
                                        <tbody>  
                                            @foreach($cacircuits as $cacircuit)  
                                            <tr>  
                                                <th scope="row">{{ $cacircuit->mois }}</th>  
                                                <td>{{ $cacircuit->ca_cur_int_etat }}</td>  
                                                <td>{{ $cacircuit->ca_cur_int }}</td>  
                                                <td>{{ $cacircuit->ca_cur_excu }}</td>  
                                                <td>{{ ($cacircuit->ca_cur_int_etat + $cacircuit->ca_cur_int + $cacircuit->ca_cur_excu) }}</td>  
                                                <td>
                                                    {{ \Carbon\Carbon::parse($cacircuit->created_at)->format('d/m/Y') }}
                                                </td>
                                            </tr>  
                                            @endforeach  
                                        </tbody>  
                                    </table>
                                    {{-- {{ $cacircuits->links() }} --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
