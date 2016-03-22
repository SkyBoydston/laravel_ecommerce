<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use Auth;
use App\Http\Requests\UserRequest;

class UserController extends Controller
{
    
    /**
     * Show the form to create an agent.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('user/create');

    }

    /**
     * Put a new agent in the database.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        User::create([$request->all()]);

        return view('company/', Auth::user()->company->id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $id = Auth::user()->id;   // Candidate for the daily wtf.
        $user = User::where('id', $id)->first();  

        return view('user/edit', compact('user', 'id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserRequest $request, $id)
    {
        $user = User::findOrFail($id);
        
        $user->update([
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'password' => bcrypt($request->password),

            ]);

        return redirect('/admin_panel');

    }

    
}
