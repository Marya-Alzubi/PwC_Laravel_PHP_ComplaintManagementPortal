<?php

namespace App\Http\Controllers;

use App\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    // admin auth middlewarw
    public function __construct(){
        $this->middleware('auth:admin');
    }
    // show the admins table
    public function index()
    {
        $admins = Admin::orderByDesc('id')->get();
        return view('admin.admins_read', compact('admins'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    // show the admins table after storing a record into database
    public function create()
    {
        return redirect('/admins');
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    // fetch the spacified admin rerord from database
    public function edit(Admin $admin)
    {
        return view('admin.admin_update' , compact('admin'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Admin  $admin
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    // update the spacified admin rerord in database
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'Required|min:3',
            'email' => 'Required|email',
            'password' => 'Required|min:6',
        ]);
        db::table('admins')->where('id', $id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request['password']),
        ]);
        return redirect("/admins" )->with('status_update', 'The data has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    // delete the spacified admin rerord from database
    public function destroy($id)
    {
        db::table('admins')->where('id', $id)->delete();
        return redirect('/admins')->with('status_destroy', 'The data has been deleted successfully');
    }
}
