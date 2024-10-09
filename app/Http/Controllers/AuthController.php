<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        if (Auth::check()) {
            return redirect('/'); // jika sudah login, maka redirect ke halaman home
        }
        return view('auth.login');
    }

    public function postLogin(Request $request)
    {
        if ($request->ajax() || $request->wantsJson()) {
            $credentials = $request->only('username', 'password');

            if (Auth::attempt($credentials)) {
                return response()->json([
                    'status' => true,
                    'message' => 'Login berhasil',
                    'redirect' => url('/')
                ]);
            }

            return response()->json([
                'status' => false,
                'message' => 'Login gagal'
            ]);
        }
        return redirect('login');
    }

    public function register() {
        return view('auth.register');
    }

    public function postRegister(Request $request)
    {
        if ($request->ajax() || $request->wantsJson()) {
            try {
                $request->validate([
                    'username' => 'required|string|min:3|unique:m_user,username',
                    'nama' => 'required|string|max:100',
                    'password' => 'required|min:5',
                ]);

                UserModel::create([
                    'username' => $request->username,
                    'nama' => $request->nama,
                    'password' => bcrypt($request->password),
                    'level_id' => 3
                ]);

                return response()->json([
                    'status' => true,
                    'message' => 'Register Berhasil',
                    'redirect' => url('/login')
                ]);

            } catch (\Exception $e) {
                return response()->json([
                    'status' => false,
                    'message' => 'Register Gagal: ' . $e->getMessage(),
                ], 500);
            }
        }
        return redirect('register');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('login');
    }
}
