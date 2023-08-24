<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserFormRequest;
use App\Http\Requests\UserUpdateFormRequest;
use App\Models\Member;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

use Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('read-users');
        $users = User::all();
        return view('users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('create-users');
        $roles = Role::all();
        return view('users.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserFormRequest $request)
    {
        $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => bcrypt($request->password)
        ]);
        $user->roles()->sync($request->input('roles'));

        return redirect()->route('admin.users.index')->with('success', 'User Added');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        $this->authorize('read-users');

        return view('users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $this->authorize('update-users');

        // dd($user);

        $roles = Role::all()->pluck('name', 'id');

        $user->load('roles');

        return view('users.edit', compact('roles','user'));
    }

    public function profile()
    {
        return view('users.profile');
    }

    public function changepasswordForm()
    {
        return view('users.password');
    }

    public function changepassword(Request $request)
    {
        if(!Hash::check($request->current, auth()->user()->password)){

            return back()->with('error', 'Wrong Current Password');
            
        }else{
           
           if ($request->new == $request->cnew) {

            $user = User::find(auth()->user()->id);
            $user->password = bcrypt($request->new);

            User::where('id', auth()->user()->id)->update(array('password' => $user->password));

            return redirect()->route('admin.profile')->with('success', 'Password Changed');
               
           }else{
            return redirect()->route('admin.profile')->with('error', 'Confirm Password Mismatch');
           }
        }
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserUpdateFormRequest $request, User $user)
    {
       $this->authorize('update-users');

        $user->update($request->all());
        $user->roles()->sync($request->input('roles', []));

        return redirect()->route('admin.users.index')->with('User Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $this->authorize('delete-users');

        $user->delete();

        return back()->with('success', 'User Deleted');
    }
}
