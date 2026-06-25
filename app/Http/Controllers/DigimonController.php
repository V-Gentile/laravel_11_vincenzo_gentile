<?php

namespace App\Http\Controllers;

use App\Models\Digimon;
use App\Http\Requests\DigimonRequest;
use App\Http\Requests\DigimonEditRequest; 

class DigimonController extends Controller
{
    public function digidex()
    {
        $digidex = Digimon::all();
        return view('digimon.digidex', compact('digidex'));
    }

    public function create()
    {
        return view('digimon.digimon-crea');
    }

    public function store(DigimonRequest $request)
    {
        $digimon = Digimon::create([
            'name' => $request->name,
            'level' => $request->level,
            'type' => $request->type,
            'img' => $request->file('img')->store('images', 'public')
        ]);
        return redirect()->route('home')->with('successMessage', 'Digimon inserito con successo!');
    }

    public function show(Digimon $digimon)
    {
        return view('digimon.digidettagli', compact('digimon'));
    }

    public function edit(Digimon $digimon)
    {
        return view('digimon.edit', compact('digimon'));
    }

    public function update(DigimonEditRequest $request, Digimon $digimon)
    {
        $digimon->update([
            $digimon->name = $request->name,
            $digimon->level = $request->level,
            $digimon->type = $request->type
        ]);
        if($request->img){
            $request->validate(['img' => 'image']);
            $digimon->update([
                $digimon->img = $request->file('img')->store('images', 'public')
            ]);
        }
        return redirect()->route('home')->with('successMessage', 'hai modificato il digimon');
    }
    public function destroy(Digimon $digimon)
    {
        $digimon->delete();
        return redirect()->route('home')->with('successMessage', 'Hai eliminato il Digimon');
    }

}
