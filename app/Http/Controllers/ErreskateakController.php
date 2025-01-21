<?php

namespace App\Http\Controllers;

use App\Http\Requests\ErreskateakRequest;
use App\Models\Erreskateak;
use Illuminate\Http\Request;

class ErreskateakController extends Controller
{

    //Erreskate guztiak bistaratzeko
    public function index(){
        $erreskateak = Erreskateak::all();
        return view('erreskateak.index', compact('erreskateak'));
    }

    //Erreskatea sortzeko galdetegia bistaratu
    public function create() {
        return view('erreskateak.create');
    }

    //Erreskate berria sortu
    public function store(ErreskateakRequest $request) {

        Erreskateak::create($request->all());

        return redirect()->route('erreskateak.index')->with('success', 'Erreskatea sortu da!');
    }

     //Erreskateak ikusi
     public function show($id) {
        $erreskatea = Erreskateak::findOrFail($id);  // Si no encuentra el registro, devuelve un error 404
        return view('erreskateak.show', compact('erreskatea'));
    }

    //Erreskateak editatzeko galdetegia bistaratu
    public function edit($id) {
        $erreskatea = Erreskateak::findOrFail($id);
        return view('erreskateak.edit', compact('erreskatea'));
    }

    //Erreskateak aldatzeko
    public function update(ErreskateakRequest $request, $id) {

        $erreskatea = Erreskateak::findOrFail($id);

        $erreskatea->izena = $request->input('izena');
        $erreskatea->deskribapena = $request->input('deskribapena');
        $erreskatea->data = $request->input('data');

        $erreskatea->save();

        return redirect()->route('erreskateak.index')->with('success', 'Erreskatea eguneratu da!');
    }

    //Erreskateak ezabatzeko
    public function destroy($id) {
        $bidaia = Erreskateak::findOrFail($id);
        $bidaia->delete();
        return redirect()->route('erreskateak.index')->with('success', 'Ondo ezabatu da erreskatea!');
    }


}//Klasearen amaiera
