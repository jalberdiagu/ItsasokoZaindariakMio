<?php

namespace App\Http\Controllers;

use App\Http\Requests\BidaiakRequest;
use App\Models\Bidaiariak;
use Illuminate\Http\Request;

class bidaiakController extends Controller
{
    public function index() {
    $bidaiak = Bidaiariak::all();
    return view('bidaiak.index', compact('bidaiak'));
    }

    public function create() {
        return view('bidaiak.create');
    }

    public function store(BidaiakRequest $request) {
        $request->validate([
            'helmuga' => 'required',
            'abiapuntua' => 'required',
            'data' => 'required|date',
        ]);

        Bidaiariak::create($request->all());
        return redirect()->route('bidaiak.index')->with('success', 'ondo sortu da bidaia!');
    }

    public function show($id) {
        $bidaia = Bidaiariak::findOrFail($id);
        return view('bidaiak.show', compact('bidaia'));
    }


    public function edit($id) {
        $bidaia = Bidaiariak::findOrFail($id);
        return view('bidaiak.edit', compact('bidaia'));
    }

    public function update(BidaiakRequest $request, $id) {

        $bidaia = Bidaiariak::findOrFail($id);

        $bidaia->helmuga = $request->helmuga;
        $bidaia->abiapuntua = $request->abiapuntua;
        $bidaia->data = $request->data;

        $bidaia->save();

        return redirect()->route('bidaiak.show', $bidaia->id)->with('success', 'ondo aldatu da bidaiaren informazioa!');
    }


    public function destroy($id) {
        $bidaia = Bidaiariak::findOrFail($id);
        $bidaia->delete();
        return redirect()->route('bidaiak.index')->with('success', 'Ondo ezabatu da bidaia!');
    }


}
