<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\FishEncyclopedia;

class FishEncyclopediaController extends Controller
{
    public function fresh()
    {
        $fish_encyclopedias = FishEncyclopedia::with('category')->get();
        return view('fish-encyclopedia.list-fresh',compact('fish_encyclopedias'));
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // return view('fish-encyclopedia.list-fresh');

        $categories = Category::all();
        // $fish_encyclopedias = FishEncyclopedia::with('category')->get();
        return view('fish-encyclopedia.registration',compact('categories'));
        
        // $fish_encyclopedias = FishEncyclopedia::with('category')->get();
        // return view('fish-encyclopedia.list-fresh',compact('fish_encyclopedias'));

        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string', // '文字のみ' は 'string' に修正
            'scientific_name' => 'required|alpha', // 'ローマ字のみ' は 'alpha' に修正
            'description' => 'required|string', // '文字のみ' は 'string' に修正
            'image_path' => 'required|alpha_dash', // 'ローマ字のみ' は 'alpha_dash' に修正
            'price' => 'required|numeric', // 'numeric' のままで正しい
        ]);
        
        $result = FishEncyclopedia::create([
            'category_id' => $request->category,
            'scientific_name' => $request->scientific_name,
            'description' => $request->description,
            'image_path' => $request->image_path,
            'price' => $request->price,
        ]);

        if (!empty($result)){
            session()->flash('flash_message','登録しました。');
        } else {
            session()->flash('flash_error_message','登録出来ませんでした。');
        }

        return redirect('/');
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
