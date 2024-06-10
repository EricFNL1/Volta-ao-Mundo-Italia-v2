<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        // Verifica se o usuário existe
        $user = User::where('email', $request->email)->first();

        if ($user) {
            // Tenta fazer o login
            if (Auth::attempt($credentials)) {
                return redirect()->route('index'); // Redireciona para a página index
            }

            return redirect()->back()->withErrors(['password' => 'Credenciais inválidas.']);
        } else {
            // Redireciona para a página de registro com o e-mail preenchido
            return redirect()->route('register')->withInput(['email' => $request->email]);
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/login');
    }
}
