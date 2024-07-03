<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class FishEncyclopediaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();
        return view('fish-encyclopedia.registration',compact('categories'));
        // return view('fish-encyclopedia.registration');
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
