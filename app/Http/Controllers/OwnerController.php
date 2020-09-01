<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Role;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Events\Registered;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Storage;
use DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Crypt;

class OwnerController extends Controller
{

    public function index()
    {
        $users = User::all();
        $page_title = 'Datatables';
        return view('admin.owner.datatables', compact('page_title')) -> with('users', $users);
    }

    public function addowner()
    {
        $roles = Role::all();
        $page_title = 'Owner Registration';
        return view('admin.owner.create', compact('page_title'))->with([
            'roles' => $roles,
        ]);
    }

    public function addtenant()
    {
        $roles = Role::all();
        $user = User::all();
        $page_title = 'Tenant Registration';
        return view('admin.tenant.create', compact('page_title'))->with([
            'roles' => $roles,
            'user' => $user,
        ]);
    }

    public function store(Request $request)
    {  
        $users = new User;
        $users->name = $request->name;
        $users->ltname = $request->ltname;
        $users->dob = $request->dob;
        $users->email = $request->email;
        $users->phone = $request->phone;
        $users->district = $request->district;
        $users->country = $request->country;
        $users->state = $request->state;
        $users->city = $request->city;
        $users->add = $request->add;
        $users->ownership = $request->ownership;
        $users->flat_no = $request->flat_no;
        $users->pincode = $request->pincode;
        $users->password = Hash::make('admin');
        $users->type = 'Residents';
        $role = 3;
        $users->save();
        $users->roles()->attach($role);
        $users->save();
        return view('home');
    }

    public function storetenant(Request $request)
    {  
        $update = DB::table('users')
        ->where('flat_no', '=', $request->flat_no)
        ->update(['is_vacant' => 0]);
        $owner = DB::table('users')
        ->where('flat_no', '=', $request->flat_no)->first();
        $users = new User;
        $users->name = $request->name;
        $users->ltname = $request->ltname;
        $users->dob = $request->dob;
        $users->email = $request->email;
        $users->owner = $owner->name . ' '. $owner->ltname;
        $users->phone = $request->phone;
        $users->district = $request->district;
        $users->country = $request->country;
        $users->state = $request->state;
        $users->city = $request->city;
        $users->add = $request->add;
        $users->ownership = $request->ownership;
        $users->flat_no = $request->flat_no;
        $users->pincode = $request->pincode;
        $users->password = Hash::make('admin');
        $users->type = 'Residents';
        $role = 4;
        $users->save();
        $users->roles()->attach($role);
        $users->save();
        return view('home');
    }

}
