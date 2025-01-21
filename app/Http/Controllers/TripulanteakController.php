<?php

namespace App\Http\Controllers;

use App\Http\Requests\Tripulanteak as RequestsTripulanteak;
use App\Models\Bidaiariak;
use Illuminate\Http\Request;
use App\Models\Tripulanteak;



class TripulanteakController extends Controller
{
    //Tripulante guztiak bistaratu
    public function index() {
        $tripulanteak = Tripulanteak::all();
        return view('tripulanteak.index', compact('tripulanteak'));
    }

    //Tripulanteak sortzeko galdetegia bistaratu
    public function create() {
        $bidaiak = Bidaiariak::all();
        return view('tripulanteak.create', compact('bidaiak'));
    }


    //Tripulanteak sortzeko
    public function store(RequestsTripulanteak $request) {

        $tripulantea = Tripulanteak::create($request->only(['izena', 'abizena', 'eginkizuna', 'sartze_data', 'baja_data']));

        if ($request->filled('bidaiak')) {
            $tripulantea->bidaiak()->sync(
                collect($request->bidaiak)->mapWithKeys(function ($bidaiaId) use ($request) {
                    return [
                        $bidaiaId => ['eginkizuna' => $request->eginkizuna]
                    ];
                })
            );
        }

        return redirect()->route('tripulanteak.index')->with('success', 'Tripulantea sortu da!');
    }

    //Tripulanteak editatzeko galdetegia bistaratu
    public function edit($id) {
        $tripulantea = Tripulanteak::findOrFail($id);
        $bidaiak = Bidaiariak::all();
        return view('tripulanteak.edit', compact('tripulantea', 'bidaiak'));
    }

    public function update(RequestsTripulanteak $request, $id) {

        $tripulantea = Tripulanteak::findOrFail($id);

        // Actualizar datos básicos del tripulante
        $tripulantea->update([
            'izena' => $request['izena'],
            'abizena' => $request['abizena'],
            'eginkizuna' => $request['eginkizuna'],
            'sartze_data' => $request['sartze_data'],
            'baja_data' => $request['baja_data'] ?? null,
        ]);

        if ($request->has('bidaiak')) {
            $bidaiak = [];
            foreach ($request->bidaiak as $bidaiaId) {
                $bidaiak[$bidaiaId] = ['eginkizuna' => $request['eginkizuna']];
            }
            $tripulantea->bidaiak()->sync($bidaiak);
        }
        return redirect()->route('tripulanteak.index')->with('success', 'Tripulantea ondo eguneratu da!');
    }

    //Tripulante bat ikusteko
    public function show($id) {
        $tripulantea = Tripulanteak::findOrFail($id);
        return view('tripulanteak.show', compact('tripulantea'));
    }



    // Eliminar un tripulante
    public function destroy($id) {
        $tripulantea = Tripulanteak::findOrFail($id);
        $tripulantea->delete();

        return redirect()->route('tripulanteak.index')->with('success', 'Tripulantea ondo ezabatu da!');
    }

}
