<?php

namespace App\Http\Controllers;

use App\Models\productDetail;
use Illuminate\Http\Request;

class ProductDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("productDetail.index");
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(productDetail $productDetail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(productDetail $productDetail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, productDetail $productDetail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(productDetail $productDetail)
    {
        //
    }
}
