<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

class AuntetikasiController extends Controller
{

    public function login()
    {
        return view('login');
    }

    //fungsi login
    public function loginStore(Request $request)
    {
        $credential = $request->only('username','password');

        if(Auth::attempt($credential)){

            $request->session()->regenerate();
            return redirect()->route('admin.index');

        }else{
            dd('user tidak ditemukan');
        }

        
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');
    }

}
