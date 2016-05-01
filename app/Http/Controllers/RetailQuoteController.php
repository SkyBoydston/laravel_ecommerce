<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\SaleDocument;
use Auth;
use App\Company;

class RetailQuoteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::user()->hasRole('company')) {
            $company_id = Auth::user()->company->id;

            // $retail_quotes = Company::with('user.sale_documents')->toArray()->IsRetailQuote()->findOrFail($company_id); // This is necessary because of a lack of functionality in the ORM to access this information like this:
            // Company::findOrFail($company_id)->user()->sale_documents()->IsRetailQuote()->get();

            // $company=Company::findOrFail($company_id)->user;
            // dd($company);
            // $retail_quotes = Company::with('user.sale_documents')->findOrFail($company_id);
            // dd($users);
            // $docs = $users;
            $retail_quotes = SaleDocument::BelongsToCompany($company_id)->IsRetailQuote()->get();

            // dd($retail_quotes);

        } elseif (Auth::user()->hasRole('agent')) {
            $retail_quotes = Auth::user()->sale_documents()->IsRetailQuote()->get();
        }

        return view('retail_quote.index', compact('retail_quotes'));
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
        $retail_quote = SaleDocument::with('items')->findOrFail($id);

        return view('retail_quote.show', compact('retail_quote'));
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
