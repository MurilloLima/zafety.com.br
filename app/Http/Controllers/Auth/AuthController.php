<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AuthController extends Controller
{
    public function auth(Request $request)
    {
        if (Auth::attempt(['email' => $request->get('email'), 'password_hash' => $request->get('password')])) {
            return view('panel.index');
        }
    }
}
