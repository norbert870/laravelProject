<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pet;

class PetController extends Controller
{
    public function index(Request $request){
        $status = $request->get('status');

        if ($status) {
            $pets = Pet::where('status', $status)->get();
        } else {
            $pets = Pet::all();
        }

        return view('pet.index', [
            'pets' => $pets
        ]);
    }

    public function create(){
        return view('pet.create');
    }

    public function show(Pet $pet){
        return view('pet.show', ['pet'=>$pet]);
    }

    public function store(){
        request()->validate([
            'name' => ['required', 'min:3'],
            'category' => ['required'],
            'photoURL' => ['required','url', 'regex:/\.(jpg|jpeg|png)$/i'],
            'status' => ['required']
        ]);

        $pet = Pet::create([
            'name' => request('name'),
            'category' => request('category'),
            'photoURL' => request('photoURL'),
            'status' => request('status'),
        ]);

        return redirect('/pet');
    }

    public function edit(Pet $pet){
        return view('pet.edit', ['pet'=>$pet]);
    }

    public function update(Pet $pet){
        request()->validate([
            'name' => ['required', 'min:3'],
            'category' => ['required'],
            'photoURL' => ['required','url', 'regex:/\.(jpg|jpeg|png)$/i'],
            'status' => ['required']
        ]);

        $pet->update([
            'name' => request('name'),
            'category' => request('category'),
            'photoURL' => request('photoURL'),
            'status' => request('status')
        ]);

        return redirect('/pet');
    }

    public function destroy(Pet $pet){
        $pet->delete();
        return redirect('/pet');
    }
}
