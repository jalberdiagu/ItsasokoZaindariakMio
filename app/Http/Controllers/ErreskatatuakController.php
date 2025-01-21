<?php

namespace App\Http\Controllers;

use App\Http\Requests\ErreskatatuakRequest;
use App\Models\Erreskatatuak;
use App\Models\Erreskateak;
use Illuminate\Http\Request;

class ErreskatatuakController extends Controller
{
    //Erreskatatuak bistaratu
    public function index() {
        $erreskatatuak = Erreskatatuak::all();
        return view('erreskatatuak.index', compact('erreskatatuak'));
    }

    //Erreskatatuak sortzeko galdetegia bistaratu
    public function create() {
        $erreskateak = Erreskateak::all();
        return view('erreskatatuak.create', compact('erreskateak'));
    }

    //Erreskatatuak sortzeko
    public function store(ErreskatatuakRequest $request) {
        Erreskatatuak::create([
            'izena' => $request->izena,
            'abizena' => $request->abizena,
            'adina' => $request->adina,
            'erreskateak_id' => $request->erreskateak_id,
        ]);

        return redirect()->route('erreskatatuak.index')->with('success', 'Erreskatatuak creado exitosamente');
    }

    //Erreskatatuak editatzeko galdetegia bistaratu
    public function edit($id) {
        $erreskatatuak = Erreskatatuak::findOrFail($id);
        $erreskateak = Erreskateak::all();
        return view('erreskatatuak.edit', compact('erreskatatuak', 'erreskateak'));
    }

    //Erreskatatuaren informazioa aldatu
    public function update(ErreskatatuakRequest $request, $id) {

        $erreskatatuak = Erreskatatuak::findOrFail($id);

        $erreskatatuak->update([
            'izena' => $request->izena,
            'abizena' => $request->abizena,
            'adina' => $request->adina,
            'erreskateak_id' => $request->erreskateak_id,
        ]);

        return redirect()->route('erreskatatuak.index')->with('success', 'Ondo aldatu da erreskatatuaren informazioa');
    }

    //Erreskatatu baten informazioa ikusi  eta asoziatutako Erreskatearena ere
    public function show($id) {
        $erreskatatuak = Erreskatatuak::findOrFail($id);
        return view('erreskatatuak.show', compact('erreskatatuak'));
    }

    //Ezabatu erreskatatuak
    public function destroy($id) {
        $erreskatatuak = Erreskatatuak::findOrFail($id);
        $erreskatatuak->delete();
        return redirect()->route('erreskatatuak.index')->with('success', 'Erreskatatuak eliminado correctamente');
    }


}//Klasearen amaiera
