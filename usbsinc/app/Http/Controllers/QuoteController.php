<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\SaleDocument;
use Auth;

class QuoteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() // This needs to be altered to make it an inbox rather than showing them all.
    {
        if (Auth::user()->hasRole('admin')) {

            $quotes = SaleDocument::IsQuote()->submitted()->get();

        } elseif (Auth::user()->hasRole('company')) {

            $company_id = Auth::user()->company->id;  

            $quotes = SaleDocument::BelongsToCompany($company_id)->IsQuote()->get();

        } elseif (Auth::user()->hasRole('agent')) {

            $quotes = Auth::user()->sale_documents()->IsQuote()->get();
        
        }

        

        return view('quote.index', compact('quotes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        SaleDocument::create([
                'user_id' => Auth::user()->id,
                'number' => 'quote number gen needs to be done still',
                'converted_to_order' => '0000-00-00 00:00:00', // For some reason the field is autofilling with the current time, even adjusted for timezone.

            ]);

        $id = SaleDocument::orderBy('id', 'desc')->first()->id;

        return redirect('quote/'.$id);
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
        $quote = SaleDocument::with('items', 'user')->findOrFail($id);

        return view('quote.show', compact('quote'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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
