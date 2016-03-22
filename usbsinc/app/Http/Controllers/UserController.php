<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use Auth;
use App\Http\Requests\UserRequest;
use Carbon;
use Mail;
use Illuminate\Support\Facades\Input;

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

        $access_code = str_random(36);

        $url = url('user/set_password') . '?access_code=' . $access_code;

        User::create([
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'company_id' => Auth::user()->company->id,
                'email' => $request->email,
                'role' => $request->role,
                'approved_denied_at' => Carbon\Carbon::now(),
                'access_code' => $access_code

            ]);


        Mail::send('emails.new_agent_account', ['request' => $request, 'url' => $url], function ($m) use ($request) {
            // $m->from(env('MAIL_FROM'), env('MAIL_FROM_NAME'));
            // $m->replyTo(env('MAIL_NO_REPLY_ADDRESS'), env('MAIL_NO_REPLY_NAME'));
            $m->to($request->email, ucfirst($request->first_name) . ' ' . ucfirst($request->last_name))->subject('You have a new agent account');
        });

        return redirect('company/'. Auth::user()->company->id);
    }

    /**
     * Set a new agent's password.
     *
     * @return \Illuminate\Http\Response
     */
    public function setPasswordCreate(Request $request) {
        // This still needs validation

        // This should only be accessible to users with access_codes. otherwise they should redirect.

        $access_code = Input::get('access_code');

        return view('set_password.set_password', compact('access_code'));
    }

    /**
     * Set a new agent's password.
     *
     * @return \Illuminate\Http\Response
     */
    public function setPasswordStore(Request $request) {
        // This still needs validation

        //check to make sure its the right access code

        //remove the access code from the db on save
        $user = User::where('access_code', $request->access_code)->first();
        // dd($user);
        $user->update(['password' => bcrypt($request->password), 'access_code' => '']);

        return redirect('/login');

        // redirect to login
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
