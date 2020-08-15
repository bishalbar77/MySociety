<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use App\Role;
use Gate;
class UsersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        $page_title = 'Datatables';
        return view('admin.users.datatables', compact('page_title')) -> with('users', $users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function managercreate()
    {
        $roles = Role::all();
        $page_title = 'Society Manager Registration';
        return view('admin.users.create', compact('page_title'))->with([
            'roles' => $roles,
        ]);
    }

    public function ownercreate()
    {
        $roles = Role::all();
        $page_title = 'Owner Registration';
        return view('admin.owner.create', compact('page_title'))->with([
            'roles' => $roles,
        ]);
    }

    public function securitycreate()
    {
        $roles = Role::all();
        $page_title = 'Security Registration';
        return view('admin.staff.create', compact('page_title'))->with([
            'roles' => $roles,
        ]);
    }

    public function staff()
    {
        $users = User::all();
        $page_title = 'Datatables';
        return view('admin.staff.datatables', compact('page_title')) -> with('users', $users);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        $roles = Role::all();
        return view('admin.users.show')->with([
            'user' => $user,
            'roles' => $roles
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        if(Gate::denies('manage-users'))
        {
            return redirect(route('admin.users.index'));
        }
        $roles = Role::all();

        return view('admin.users.edit')->with([
            'user' => $user,
            'roles' => $roles
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $user->roles()->sync($request->roles);
        return redirect() -> route('admin.users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->roles()->detach();
        $user->delete();

        return redirect() -> route('admin.users.index');
    }

    public function changestatus($id)
    {
        $user = User::find($id);
        $user->is_active=!$user->is_active;
        
        if($user->save())
        {
  
            return redirect()->back();
        }
        else {
           
            return redirect(route('admin.users.changestatus'));
            
        }
    }
}
