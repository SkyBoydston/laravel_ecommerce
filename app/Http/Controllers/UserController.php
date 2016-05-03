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
use Illuminate\Support\Facades\Redirect;

class UserController extends Controller
{
    
    /**
     * Show the form to create an agent.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        $company_id = Input::get('id');

        return view('user/create', compact('company_id'));

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
                'company_id' => $request->company_id,
                'email' => $request->email,
                'role' => $request->role,
                'approved_denied_at' => Carbon\Carbon::now(),
                'access_code' => $access_code

            ]);
        // ini_set('max_execution_time', 600);

        Mail::send('emails.new_agent_account', ['request' => $request, 'url' => $url], function ($m) use ($request) {
            // $m->from(env('MAIL_FROM'), env('MAIL_FROM_NAME'));
            // $m->replyTo(env('MAIL_NO_REPLY_ADDRESS'), env('MAIL_NO_REPLY_NAME'));
            $m->to($request->email, ucfirst($request->first_name) . ' ' . ucfirst($request->last_name))->subject('You have a new agent account');
        });

        return redirect('company/'. $request->company_id);
    }

    /**
     * Set a new agent's password.
     *
     * @return \Illuminate\Http\Response
     */
    public function setPasswordCreate(Request $request) {
        // This still needs validation


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

        $user = User::where('access_code', $request->access_code)->first();
        if(!$user) {
            return 'There was a problem. Please contact the system administrator.';
        }
        $user->update(['password' => bcrypt($request->password), 'access_code' => '']);

        return redirect('/login');

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

        return redirect('/company');

    }
    /**
     * Soft delete an agent.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $company_id = $user->company->id;
        $user->delete();


        return redirect('company/' . $company_id . '?tab=5');
    }
    
    /**
     * Restore a soft deleted agent.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function reactivate($id)
    {
        $user = User::withTrashed()->findOrFail($id);
        $company_id = $user->company->id;
        $user->restore();


        return redirect('company/' . $company_id . '?tab=5');
    }
}
