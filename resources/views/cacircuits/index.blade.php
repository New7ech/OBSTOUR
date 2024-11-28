@extends('layouts.app')
@section('contenus')
    <div class="container">
        <div class="page-inner">
            <div class="row justify-content-center mt-3">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="float-start">
                                <h4><strong>Information sur le chiffre affaire des circuits realiser</strong></h4>
                            </div>
                            <div class="float-end">
                                {{-- <a href="{{ route('vactivite.index') }}" class="btn btn-danger"><i class="fas fa-angle-double-left"></i> Retour</a>
                                <a href="{{ route('zone.index') }}" class="btn btn-primary"><i class="fas fa-angle-double-right"></i> Suivante</a> --}}
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="card">
                                <div class="card-body">
                                    <table class="table table-hover ">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Mois 1</th>
                                                <th scope="col">Mois 2</th>
                                                <th scope="col">Mois 3</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($cacircuit as $cacircuit)
                                            <tr>
                                                <th scope="row">{{ $loop->iteration }}</th>
                                                <td>{{ $cacircuit->cur_etat_m1 }}</td>
                                                <td>{{ $cacircuit->cur_etat_m2 }}</td>
                                                <td>{{ $cacircuit->cur_etat_m3 }}</td>
                                                <td>
                                                    <form action="{{ route('cacircuits.destroy', $cacircuit->id) }}" method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                        <a href="{{ route('cacircuits.show', $cacircuit->id) }}" class="btn btn-warning btn-sm"><i class="fa fa-eye"></i> Show</a>
                                                        <a href="{{ route('cacircuits.edit', $cacircuit->id) }}" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i> Edit</a>
                                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Voulez-vous supprimer ce chiffre d affaire ?');"><i class="fas fa-trash-alt"></i> Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                            @empty
                                                <td colspan="6">
                                                    <span class="text-danger">
                                                        <strong>Aucun chiffre d affaire!</strong>
                                                    </span>
                                                </td>
                                            @endforelse
                                        </tbody>
                                    </table>
                                    {{-- {{ $cacircuit->links() }} --}}
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
