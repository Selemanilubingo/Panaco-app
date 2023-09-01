<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // charger les categories

        $categorie = Categorie::all();

        return view('categories.index', compact('categorie'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //pour appeler le nouveau formulaire

        return view("categories.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validation
        

        /* Creation nouvelle categorie */
        $categorie = new Categorie;

        /* récurer les elements du formulaire et les affecter à la nouvelle categorie */
        $categorie->designation_categorie = $request->designation_categorie;

        /* enregistrement */
        $categorie->save();

        /* retourner à la page index */
        return redirect("categories");


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
        $categorie = Categorie::find($id);

        /* affichage du formulaire */
        return view('categories.edit', compact('categorie'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //validation

        //identifier l'element à mettre à jour par rapport à son id
        $categorie = Categorie::find($id);

        //recuperer l'element du formulaire et l'affecter dans categorie
        $categorie->designation_categorie = $request->get('designation_categorie');

        //Enregistrement
        $categorie->save();

        //retourner vers index comme variable categorie
        return redirect('categories');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //Identifier l'element à supperimer
        $categorie = Categorie::find($id);

        //supprimer
        $categorie->delete();

        //Rediriger à la page accueil
        return redirect('categories');

    }
}
