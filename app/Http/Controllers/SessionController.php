<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class SessionController extends Controller
{

    public function __construct()
    {
      $this->middleware('guest', ['except' => ['logout', 'destroy']]);

    }

    public function create()
    {
      return view('jos/login');
    }

    public function store()
    {
      if( Auth::guard('web')->attempt(request(['nama', 'password']))) {
        return redirect('absensi');
      }
      elseif ( Auth::guard('guru')->attempt(request(['nama', 'password']))) {
        return redirect('home');
      }
        dd('passwordsalah');

    }

    public function destroy()
    {
      auth()->logout();
      return redirect('/loginjos');
    }

}
