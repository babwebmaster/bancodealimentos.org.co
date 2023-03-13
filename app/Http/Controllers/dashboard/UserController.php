<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;
use RealRashid\SweetAlert\Facades\Alert;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::paginate(10);
        return view('dashboard.users.index-user', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = new User();
        return view('dashboard.users.create-user', compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|min:3|max:50|string',
            'email' => 'required|string|email',
            'password' => 'required|string|min:8',
            'password_confirm' => 'required|same:password'
        ]);
        $password =Hash::make($request->password);
        $data = array_merge($request->all(),['terms'=>'accepted','password' => $password]);
        User::create($data);
        session()->flash('flash.banner', 'Usuario Creado Correctamente!');
        session()->flash('flash.bannerStyle', 'success');
        // Alert::alert('Exito', 'Usuario Creado Correctamente!', 'success');
        // Alert::toast('Usuario Creado Correctamente!', 'success');
        return to_route('user.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('dashboard.users.show-user', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('dashboard.users.edit-user', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $validated = $request->validate([
            'name' => 'required|min:3|max:50|string',
            'email' => 'required|string|email',
        ]);
        $user->update($validated);
        // session()->flash('flash.banner', 'Usuario Editado Correctamente!');
        // session()->flash('flash.bannerStyle', 'success');
        Alert::alert('Exito', 'Usuario Editado Correctamente!', 'success');
        // Alert::toast('Usuario Editado Correctamente!', 'success');
        return to_route('user.index');
    }
}
