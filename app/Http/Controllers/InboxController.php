<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Auth;
use App\Company;
use Illuminate\Support\Facades\Input;
use App\User;

class InboxController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::user()->hasRole('admin')) {
            $companies = Company::all();
            // $companies = $companies->pendingUser->get();
            // dd($companies);
            // $pendingUser = collect();
            $company_ids = array();
            foreach ($companies as $company) {
                if ($company->pendingUser != '[]') {
                    $pendingUser = $company->pendingUser->first();
                    // $pendingUser = $pendingUser->company_id;
                    // dd($pendingUser);
                    $company_ids[] .= $pendingUser->company_id;

                }    
            }
            $companies = Company::find($company_ids);
            // dd($companies);


            return view('inbox.index', compact('companies'));
        } else {
            App::abort(403);
        }
        
    }

    /**
     * Confirm the application.
     *
     * @return \Illuminate\Http\Response
     */
    public function confirm()
    {
        $id = Input::get('id');
        $company = Company::findOrFail($id);
        $user = $company->user->first();

        $user->role = 'company';
        $user->save();

        return redirect('inbox');

    }

    /**
     * Deny the application.
     *
     * @return \Illuminate\Http\Response
     */
    public function deny()
    {
        $id = Input::get('id');
        $company = Company::findOrFail($id);
        $user = $company->user->first();

        $user->role = 'denied';
        $user->save();

        return redirect('inbox');
    }

    /**
     * Show the application history.
     *
     * @return \Illuminate\Http\Response
     */
    public function history()
    {
        $applicants = User::applicant()->get();


        // dd($applicants);

        $approved_company_ids = array();
        $denied_company_ids = array();
        foreach ($applicants as $app) {
            if ($app->role == 'company') {
                $approved_company_ids[] .= $app->company_id;
            } elseif ($app->role == 'denied') {
                $denied_company_ids[] .= $app->company_id;
            }
        }

        // dd($company_ids);
        $approved_companies = Company::with('user')->find($approved_company_ids);
        $denied_companies = Company::with('user')->find($denied_company_ids);


        return view('inbox.history', compact(['approved_companies', 'denied_companies']));
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
