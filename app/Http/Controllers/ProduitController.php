<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use App\Models\Categorie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ProduitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //charger les categories
        $categorie = Categorie::all();

        // charger les produits
        $produit = DB::table('produits')
                        ->join('categories', 'produits.categorie_id', '=', 'categories.id')
                        ->select('categories.*', 'produits.*')
                        ->get();

        return view('produits.index', compact('categorie', 'produit'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        /* Charger les categories */
        $categorie = Categorie::all();

        //pour creer appeler un nouveau formulaire
        return view('produits.create', compact('categorie'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

    /* Traitement et enregidtrement de l'image */
    $imagePath = $request->file('image')->store('uploads', 'public');

        //creation nouveau produit
        $categorie = Categorie::all();
        $produit = new Produit;

        /* Recuperation */
        $produit->designation_produit = $request->designation_produit;
        $produit->description_produit = $request->description_produit;
        $produit->prix = $request->prix;
        $produit->image = $request->image;
        $produit->disponible = $request->disponible;
        $produit->categorie_id= $request->categorie_id;



        /*enregistrement  */
        $produit->save();

        return redirect("produits");

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //selectionnez par id
        $produit = Produit::find($id);


        /* affichage du formulaire */
        return view('produits.edit', compact('produit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
