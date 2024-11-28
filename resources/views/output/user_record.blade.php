@extends('layouts.app')

@section('contenus')
    <div class="container mt-4">
        <div class="page-inner">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="float-start">
                                <h4><strong>Sélectionner un Utilisateur</strong></h4>
                            </div>
                            <div class="float-end">
                                <form action="{{ route('user.record') }}" method="POST" class="mb-4 d-flex align-items-center">
                                    @csrf
                                    {{-- <label for="user_id" class="form-label"><h5> Choisissez un utilisateur :</h5></label> --}}
                                    <div class="form-group">
                                        <select name="user_id" id="user_id" class="form-control">
                                            @foreach($users as $user)
                                                <option value="{{ $user->id }}">{{ $user->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Voir les Enregistrements</button>
                                </form>
                            </div>
                        </div>
                        <div class="card-body">
                            @if (count($cacircuits) > 0 || count($cabilletteries) > 0)
                                <h2 class="text-center">Enregistrements pour l'utilisateur </h2>
                                @if (count($cacircuits) > 0)
                                <div class="card">
                                    <div class="card-body">
                                        <table class="table table-hover">
                                            <h4><strong>Chiffre d'affaires des circuites réalisés</strong></h4>
                                            <thead>
                                                <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">Circuits inter-états</th>
                                                    <th scope="col">Circuits internes</th>
                                                    <th scope="col">Excursions</th>
                                                    <th scope="col">Total</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($cacircuits as $cacircuit)
                                                <tr>
                                                    <th scope="row">Mois 1</th>
                                                    <td>{{ $cacircuit->ca_cur_int_etat }}</td>
                                                    <td>{{ $cacircuit->ca_cur_int }}</td>
                                                    <td>{{ $cacircuit->ca_cur_excu }}</td>
                                                    <td>{{ ($cacircuit->ca_cur_int_etat + $cacircuit->ca_cur_int + $cacircuit->ca_cur_excu) }}</td>
                                                </tr>
                                                
                                                @endforeach
                                            </tbody>
                                        </table>
                                        @else
                                            <p class="text-danger text-center">Aucun enregistrement de Cacircuits trouvé.</p>
                                        @endif
                                    </div>
                                </div>
                                @if (count($cabilletteries) > 0)
                                <div class="card">
                                    <div class="card-body">
                                        <table class="table table-hover">
                                        <h4><strong>Chiffre d'affaires billetteri</strong></h4>
                                            <thead>
                                                <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">Billet IATA</th>
                                                    <th scope="col">Autre billets</th>
                                                    <th scope="col">Total</th>
                                                    <th scope="col">Recette</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($cabilletteries as $cabilletteries)
                                                <tr>
                                                    <th scope="row">Mois 1</th>
                                                    <td>{{ $cabilletteries->bil_iata_m1 }}</td>
                                                    <td>{{ $cabilletteries->bil_otr_m1 }}</td>
                                                    <td>{{ ($cabilletteries->bil_otr_m1 + $cabilletteries->bil_otr_m1) }}</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Mois 2</th>
                                                    <td>{{ $cabilletteries->bil_iata_m2 }}</td>
                                                    <td>{{ $cabilletteries->bil_otr_m2 }}</td>
                                                    <td>{{ ($cabilletteries->bil_otr_m2 + $cabilletteries->bil_iata_m2) }}</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Mois 3</th>
                                                    <td>{{ $cabilletteries->bil_iata_m3 }}</td>
                                                    <td>{{ $cabilletteries->bil_otr_m3 }}</td>
                                                    <td>{{ ($cabilletteries->bil_otr_m3 + $cabilletteries->bil_iata_m3) }}</td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                        @else
                                            <p class="text-danger text-center">Aucun enregistrement de Cabilletteries trouvé.</p>
                                        @endif
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
