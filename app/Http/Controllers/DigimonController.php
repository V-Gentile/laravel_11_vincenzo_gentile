<?php

namespace App\Http\Controllers;

use App\Models\Digimon;
use App\Http\Requests\DigimonRequest;
use App\Http\Requests\DigimonEditRequest;
use Illuminate\Support\Facades\Storage;

class DigimonController extends Controller
{
    public function digidex() {
        $digidex = Digimon::all();
        return view('digimon.digidex', ['digidex' => $digidex]);
    }

    public function crea() {
        return view('digimon.digimon-crea');
    }

    public function store(DigimonRequest $request) {
    
        $imagePath = null;

        if ($request->hasFile('img')) {
            $imagePath = $request->file('img')->store('images', 'public');
        }

        $digimon = Digimon::create([
            'user_id' => auth()->id(),
            'name' => $request->name,
            'level' => $request->level,
            'type' => $request->type,
            'img' => $imagePath 
        ]);

        return redirect()->route('home')->with('success', 'Digimon inserito con successo!');
    }

    public function mondettagli(Digimon $mon) {
        return view('digimon.digimon-dettagli', compact('mon'));
    }

    public function edit(Digimon $mon) {
        return view('digimon.edit', compact('mon'));
    }

    public function update(DigimonEditRequest $request, Digimon $mon) {
    
    if ($mon->user_id === auth()->id()) {
        $mon->name = $request->name;
        $mon->level = $request->level;
        $mon->type = $request->type;

        if ($request->hasFile('img')) {
            $request->validate(['img' => 'image']);
            $mon->img = $request->file('img')->store('images', 'public');
        }

        $mon->save();

        return redirect()->route('digimon.list')->with('success', 'Digimon modificato con successo!');
    } else {
        return redirect()->route('digimon.list')->with('error', 'Non sei autorizzato a modificare questo Digimon!');
    }
}

    public function destroy(Digimon $mon) {
    
        if ($mon->user_id === auth()->id()) {
        
        if ($mon->img) {
            Storage::disk('public')->delete($mon->img);
        }

        $mon->delete();

        return redirect()->route('digimon.list')->with('success', 'Digimon eliminato dal DigiDex!');
    }

        return redirect()->route('digimon.list')->with('error', 'Non sei autorizzato a eliminare questo Digimon!');
    }
}
