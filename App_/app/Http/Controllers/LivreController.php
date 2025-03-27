<?php

namespace App\Http\Controllers;

use App\Models\Livre;
use App\Http\Requests\StoreLivreRequest;
use App\Http\Requests\UpdateLivreRequest;
use Error;
use Pest\Support\View;
use Psy\Readline\Hoa\Console;

class LivreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $perPage = 10;
        $livres = Livre::latest()->paginate($perPage);
               
        return view('index', compact('livres'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreLivreRequest $request)
    {

        $validated = $request->validated();
        Livre::create($validated);
        return redirect()->route('index')->with('seccusse', 'livre created');

    }

    /**
     * Display the specified resource.
     */
    public function show(Livre $livre)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Livre $livre)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateLivreRequest $request, Livre $livre)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Livre $livre)
    {
        //
    }
}
