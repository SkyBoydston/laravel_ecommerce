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
        return view('quote.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (!$request->client_reference == '') {
            $this->validate($request, [
               'client_reference' => 'sometimes|unique:sale_documents',  // The db doesn't require that this is unique because then it would disallow empties (since all empties are the same)
           ]);
        }

        $number = 'Q-' . time(); // Assign a unique quote number
        $request->merge(['number' => $number]);

        SaleDocument::create($request->all());

        $id = SaleDocument::orderBy('id', 'desc')->first()->id;

        return redirect('quote/'.$id);
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
        $quote = SaleDocument::findOrFail($id);

        return view('quote.edit', compact('quote'));
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
        if (!$request->client_reference == '') {
            $this->validate($request, [
               'client_reference' => 'sometimes|unique:sale_documents',  // The db doesn't require that this is unique because then it would disallow empties (since all empties are the same)
           ]);
        }

        $quote = SaleDocument::findOrFail($id);
        $quote->notes = $request->notes;
        $quote->client_reference = $request->client_reference;

        $quote->update();
        // return redirect('/company');
        return redirect(url('/quote', ['quote_id' => $id]));
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
