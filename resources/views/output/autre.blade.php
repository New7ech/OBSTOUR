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
                                <form action="{{ route('user.records') }}" method="POST" class="mb-4 d-flex align-items-center">
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
                                <h2 class="text-center">Enregistrements pour l utilisateur sélectionné</h2>
                                @if (count($cacircuits) > 0)
                                <div class="card">
                                    <div class="card-body">
                                        <table class="table table-hover">
                                            <h4><strong>Information sur les enregistrements du cacircuit</strong></h4>
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
                                                    <td>{{ $cacircuit->cur_etat_m1 }}</td>
                                                    <td>{{ $cacircuit->cur_int_m1 }}</td>
                                                    <td>{{ $cacircuit->cur_excu_m1 }}</td>
                                                    <td>{{ ($cacircuit->cur_excu_m1 + $cacircuit->cur_int_m1 + $cacircuit->cur_etat_m1) }}</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Mois 2</th>
                                                    <td>{{ $cacircuit->cur_etat_m2 }}</td>
                                                    <td>{{ $cacircuit->cur_int_m2 }}</td>
                                                    <td>{{ $cacircuit->cur_excu_m2 }}</td>
                                                    <td>{{ ($cacircuit->cur_excu_m2 + $cacircuit->cur_int_m2 + $cacircuit->cur_etat_m2) }}</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Mois 3</th>
                                                    <td>{{ $cacircuit->cur_etat_m3 }}</td>
                                                    <td>{{ $cacircuit->cur_int_m3 }}</td>
                                                    <td>{{ $cacircuit->cur_excu_m3 }}</td>
                                                    <td>{{ ($cacircuit->cur_excu_m3 + $cacircuit->cur_int_m3 + $cacircuit->cur_etat_m3) }}</td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                        @else
                                            <p class="text-danger text-center">Aucun enregistrement de Cacircuits trouvé.</p>
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
