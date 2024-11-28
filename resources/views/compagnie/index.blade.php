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
                                @if (auth()->user()->hasRole('admin'))
                                    {{-- <a href="{{ route('vactivite.index') }}" class="btn btn-danger"><i class="fas fa-angle-double-left"></i> Statistique</a> --}}
                                    <a href="{{ route('compagnie.create') }}" class="btn btn-primary"><i class="far fa-save"></i> Cree une compagnie</a>
                                @endif
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="card">
                                <div class="card-body">
                                    <table class="table table-hover ">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col" >denomination</th>
                                                <th scope="col" >Email</th>
                                                <th scope="col" >Tél</th>
                                                <th scope="col" >Période</th>
                                                <th scope="col" >Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($compagnie as $compagnie)
                                            <tr>
                                                <th scope="row">{{ $loop->iteration }}</th>
                                                <td>{{ $compagnie->denomination }}</td>
                                                <td>{{ $compagnie->email }}</td>
                                                <td>{{ $compagnie->tel }}</td>
                                                <td>{{ $compagnie->periode }}</td>
                                                <td>
                                                    <form action="{{ route('compagnie.destroy', $compagnie->id) }}" method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                        {{-- //la condition --}}
                                                            <a href="{{ route('compagnie.show', $compagnie->id) }}" class="btn btn-warning btn-sm"><i class="fa fa-eye"></i> Show</a>
                                                        
                                                        <a href="{{ route('compagnie.edit', $compagnie->id) }}" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i> Edit</a>

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
                                    {{-- {{ $compagnie->links() }} --}}
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
