<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Ph;
use App\Models\Temp;
use App\Models\Food;
use App\Models\Difficulty;
use App\Models\FishEncyclopedia;
use App\Http\Requests\LoginFormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class FishEncyclopediaController extends Controller
{
    public function fresh()
    {
        $fish_encyclopedias = FishEncyclopedia::where('category_id', '1')->get();
        return view('fish-encyclopedia.list.fresh', compact('fish_encyclopedias'));
    }
    public function sea()
    {
        $fish_encyclopedias = FishEncyclopedia::where('category_id', '2')->get();
        return view('fish-encyclopedia.list.sea', compact('fish_encyclopedias'));
    }
    public function brackish()
    {
        $fish_encyclopedias = FishEncyclopedia::where('category_id', '3')->get();
        return view('fish-encyclopedia.list.brackish', compact('fish_encyclopedias'));
    }
    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories   = Category::all();
        $phs          = Ph::all();
        $temps        = Temp::all();
        $foods        = Food::all();
        $difficulties = Difficulty::all();
        return view('fish-encyclopedia.registration',compact('categories','phs','temps','foods','difficulties'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(string $id)
    {
        $fish_encyclopedia = FishEncyclopedia::find($id);
        return view('fish-encyclopedia.profile.pro_fresh',compact('fish_encyclopedia'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'            => 'required|string',
            'scientific_name' => 'required|alpha',            
            'category'        => 'required|integer', // 追加
            'description'     => 'required|string',
            'temp'            => 'required|integer', // 追加
            'ph'              => 'required|integer', // 追加
            'price'           => 'required|numeric',
            'image_path'      => 'required|file|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'food'            => 'required|integer',
            'difficulty'      => 'required|integer',
        ]);

            $file = $request->file('image_path');
            $path = $file->store('images','public');
      
        $result = FishEncyclopedia::create([
            'name'            => $request->name,
            'scientific_name' => $request->scientific_name,
            'category_id'     => $request->category,
            'temp_id'         => $request->temp,
            'ph_id'           => $request->ph,
            'description'     => $request->description,
            'image_path'      => $path,
            'price'           => $request->price,
            'food_id'         => $request->food,
            'difficulty_id'   => $request->difficulty,
        ]);

        if (!empty($result)){
            session()->flash('message','登録しました。');
        } else {
            session()->flash('error','登録出来ませんでした。');
        }       

        return redirect()->route('registration');
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
        //
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
