{{-- heritage  --}}
@extends('layouts.app')

@section('content')
<div class="container-fluid p-0">

    <div class="mb-3">
        <h1 class="h3 d-inline align-middle">New produit</h1><a class="badge bg-primary ms-2" href="pricing/index.htm" target="_blank">Pro Component <i class="fas fa-fw fa-external-link-alt"></i></a>
    </div>

    <div class="row">
        <div class="col-12 col-xl-6">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">produit</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('produits.update', $produit->id) }}" method="POST">
                        {{-- pour la securite des input de form --}}
                        @csrf
                        {{-- sous forme d'instruiction  de post pas comme methode simple mais pour methode de laravel --}}
                        @method('PATCH')

                        <div class="mb-3">
                            <label class="form-label">Designation</label>
                            <input type="text"  class="form-control" placeholder="Designation" name="designation_produit" value="{{ $produit->designation_produit }}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Descrignation</label>
                            <input type="text"  class="form-control" placeholder="Designation" name="description_produit" value="{{ $produit->description_produit }}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Prix</label>
                            <input type="number"  class="form-control" placeholder="prix" name="prix" value="{{ $produit->prix }}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Image</label>
                            <input type="file"  class="form-control" placeholder="image" name="image" accept="image/*" required value="{{ $produit->image }}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">disponible</label>
                            <select class="form-select form-select-lg" name="disponible" id="">
                                <option selected desabled>--Selectionner--</option>

                                    <option value="1" {!! $produit->disponible ? 'selected' : '' !!}>Disponible</option>
                                    <option value="0" {!! !$produit->disponible ? 'selected' : '' !!}>Non disponible</option>

                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Catégorie</label>

                            <select class="form-select form-select-lg" name="categorie_id" id="">
                                <option selected >--Selectionner--</option>
                                {{-- nous voulons appel tous nos id de categorie --}}
                                @foreach ($categorie as $categorie)
                                 {{-- chargement de --}}
                                        <option value="{{ $categorie->id }}" {!! $produit->categorie_id == $produit->categorie_id ? 'selected = "selected"' : '' !!}>{{ $categorie->designation_categorie }}</option>

                                @endforeach
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Enregistrer</button>
                        <button type="reset" class="btn btn-primary shadow-primary px-5"><i class="icon-lock"></i>
                            Reinitialiser</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection

