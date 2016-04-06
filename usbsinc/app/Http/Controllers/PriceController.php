<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Price;

class PriceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $price = Price::findOrFail($id);

        

        // Different forms have been set up so that field visibility doesn't have to be figured out with view logic.
        if ($price->company_id >= 1) {  
            return view('price.company_edit', compact('price'));
        } elseif (($price->user_id >= 1) && (!$price->sale_document_id >= 1) && ($price->brand != '')) {
            return view('price.user_brand_edit', compact('price'));
        } elseif (($price->user_id >= 1) && (!$price->sale_document_id >= 1) && ($price->category != '')) {
            return view('price.user_category_edit', compact('price'));
        } elseif (($price->user_id >= 1) && ($price->sale_document_id >= 1)) {
            return view('price.sale_document_edit', compact('price'));
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $price = Price::findOrFail($id);

        $price->update($request->all());

        return \Redirect::to('/company' . '/' . $price->company_id . '?tab=3');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
