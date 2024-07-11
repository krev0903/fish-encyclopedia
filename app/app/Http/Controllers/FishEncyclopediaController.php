<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\models\Ph;
use App\models\Temp;
use App\Models\FishEncyclopedia;

class FishEncyclopediaController extends Controller
{
    public function fresh()
    {
        $fish_encyclopedias = FishEncyclopedia::with('category')->get();
        $fish_encyclopedias = FishEncyclopedia::with('ph')->get();
        $fish_encyclopedias = FishEncyclopedia::with('temp')->get();
        return view('fish-encyclopedia.list-fresh',compact('fish_encyclopedias'));
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // return view('fish-encyclopedia.list-fresh');

        $categories = Category::all();
        $phs = Ph::all();
        $temps = Temp::all();
        // $fish_encyclopedias = FishEncyclopedia::with('category')->get();
        return view('fish-encyclopedia.registration',compact('categories','phs','temps'));
        
        // $fish_encyclopedias = FishEncyclopedia::with('category')->get();
        // return view('fish-encyclopedia.list-fresh',compact('fish_encyclopedias'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(string $id)
    {
        $fish_encyclopedia = FishEncyclopedia::find($id);
        return view('fish-encyclopedia.fprofile',compact('fish_encyclopedia'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'            => 'required|string',
            'scientific_name' => 'required|alpha',            
            'category'     => 'required|integer', // 追加
            'description'     => 'required|string',
            'temp'         => 'required|integer', // 追加
            'ph'           => 'required|integer', // 追加
            'price'           => 'required|numeric',
        ]);
              
        $result = FishEncyclopedia::create([
            'name'            => $request->name,
            'scientific_name' => $request->scientific_name,
            'category_id'     => $request->category,
            'temp_id'         => $request->temp,
            'ph_id'           => $request->ph,
            'description'     => $request->description,
            // 'image_path'      => $request->image_path,
            'price'           => $request->price,
        ]);

        if (!empty($result)){
            session()->flash('flash_message','登録しました。');
        } else {
            session()->flash('flash_error_message','登録出来ませんでした。');
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
