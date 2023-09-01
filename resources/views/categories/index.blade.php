@extends('layouts.app')

@section('content')
    <div class="container-fluid p-0">
        <div class="row mb-2 mb-xl-3">
            <div class="col-auto d-none d-sm-block">
                <h3><strong>Tableau</strong> Analytique</h3>
            </div>

            <div class="col-auto ms-auto text-end mt-n1">
                <a href="#" class="btn btn-light bg-white me-2">Nouveau categorie</a>
                <a href="{{ route('categories.create') }}" class="btn btn-primary">Ajouter</a>
            </div>
        </div>

        <div class="row">

        </div>
        <div class="card">

            <div class="card-body">
                <table id="datatables-buttons" class="table table-striped" style="width: 100%">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Designation</th>
                            <th>Option</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categorie as $categorie)
                            <tr>
                                <td>{{ $categorie->id }}</td>
                                <td>{{ $categorie->designation_categorie }}</td>
                                <td class="table-action">
                                    <a href="{{ route('categories.edit', $categorie->id) }}"><i
                                            class="aligne-middle text-info" data-feather="edit-2"></i></a>
                                    <form action="{{ route('categories.destroy', $categorie->id) }}" method="POST"
                                        class="">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            onclick="return confirm('Etes vous sur de vouloir supprimer cet lement')">
                                            <i class="align-middle text-danger" data-feather="trash-2"></i>
                                        </button>
                                    </form>
                                    <a href=""></a>
                                </td>

                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection()
