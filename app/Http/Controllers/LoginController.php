<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('client.auth.login');
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
        # validate
        $request->validate([
            "email" => "required|string",
            "password" => "required|string"
        ], $this->messages);

        # get user
        $user = User::where('email', $request->email)->first();

        #check user
        if (!$user) {
            return back()->withInput()->withErrors(['email' => 'User tidak ditemukan.']);;
        }

        # check password
        if (!Hash::check($request->password, $user->password)) {
            return back()->withInput()->withErrors(['password' => 'Password salah!']);;
        }

        # add session
        Auth::login($user, $request->remember);

        #return
        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        dd(1);
        if ($id != 'admin') {
            return abort(404);
        }
        return view('admin.auth.login');
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
        # validate
        $request->validate([
            "email" => "required|string",
            "password" => "required|string"
        ], $this->messages);

        # get user
        $user = User::where('email', $request->email)->first();

        #check user
        if (!$user) {
            return back()->withInput()->withErrors(['email' => 'User tidak ditemukan.']);;
        }

        # check password
        if (!Hash::check($request->password, $user->password)) {
            return back()->withInput()->withErrors(['password' => 'Password salah!']);;
        }

        # add session
        Auth::login($user, $request->remember);

        #return
        return redirect()->route('home');
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

    public function logout()
    {
        $role = Auth::user()->role ?? null;
        Session::flush();
        Auth::logout();

        if ($role == 'Admin') {
            return redirect()->route('login.index');
        } else {
            return redirect()->route('login.show', 'admin');
        }
    }
}
