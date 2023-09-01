@extends('layouts.app');

@section('content')
    <div class="container-fluid p-0">
        <div class="mb-3">
            <h1 class="h3 d-inline align-middle">Form Layouts</h1>
            <a class="badge bg-primary ms-2" href="pricing/index.htm" target="_blank">Pro Component <i
                    class="fas fa-fw fa-external-link-alt"></i></a>
        </div>

        <div class="row">
            <div class="col-12 col-xl-6">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Basic form</h5>
                        <h6 class="card-subtitle text-muted">
                            Default Bootstrap form layout.
                        </h6>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('produits.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('POST')
                            <div class="mb-3">
                                <label class="form-label">Designation</label>
                                <input type="text" class="form-control" placeholder="Designation"
                                    name="designation_produit" required />
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Catégorie</label>
                                <select class="form-select form-select-lg" name="categorie_id" id="">
                                    <option selected>--Selectionner--</option>
                                    @foreach ($categorie as $categorie)
                                        <option value="{{ $categorie->id }}">{{ $categorie->designation_categorie }}</option>
                                    @endforeach
                                </select>
                            </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Description</label>
                        <textarea name="description_produit" class="form-control" id="" cols="30" rows="10"></textarea>

                    </div>
                    <div class="mb-3">
                        <label class="form-label">Prix</label>
                        <input type="number" class="form-control" placeholder="Prix" name="prix" required />
                    </div>
                    <div class="mb-3">
                        <label class="form-label w-100">Image</label>
                        <input type="file" name="image" />
                        <small class="form-text text-muted">Example block-level help text here.</small>
                    </div>
                    <div class="mb-3">
                        <label class="form-label w-100">Disponible</label>
                        <input type="checkbox" class="form-check-input" name="disponible" value="1" checked />
                        <span class="form-check-label">Check me out</span>

                    </div>
                    <button type="submit" class="btn btn-primary">
                        Enregistrer
                    </button>
                    </form>
                </div>
            </div>
        </div>

    </div>
    </div>
@endsection()
