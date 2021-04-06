<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    // admin auth middleware
    public function __construct(){
        $this->middleware('auth:admin');
    }
    // showing all users in admin dashboard
    public function index()
    {
        $users = User::orderByDesc('id')->get();
        return view('admin.users_read', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    // the redirection after storing a new record
    public function create()
    {
        return view('admin.user_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    // storing a new user record into data base
    public function store(Request $request)
    {
        // validation
        $request->validate([
            'name' => 'Required|min:3',
            'email' => 'Required|email',
            'password' => 'Required|min:6',
        ]);
        // storing intodatabase with a status_store session which works with sweet alert 
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            // hash the password in database to make it more secure
            'password' => Hash::make($request['password']),
        ]);
        return redirect("/users" )->with('status_update', 'The data has been added successfully');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    // fetch the spacified record to show it 
    public function edit(User $user)
    {
        return view('admin.user_update' , compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Admin  $admin
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    // update the spacified record in database with a status_update session which works with sweet alert 
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'Required|min:3',
            'email' => 'Required|email',
            'password' => 'Required|min:6',
        ]);
        db::table('users')->where('id', $id)->update([
            'name' => $request->name,
            'email' => $request->email,
            // hash the password in database to make it more secure
            'password' => Hash::make($request['password']),
        ]);
        return redirect("/users" )->with('status_update', 'The data has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    // delete a spacified user record from database with a status_destroy session which works with sweet alert 
    public function destroy($id)
    {
        db::table('users')->where('id', $id)->delete();
        return redirect('/users')->with('status_destroy', 'The data has been added successfully');
    }
}
