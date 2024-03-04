<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        if (auth()->attempt($credentials)) {
            // Авторизация успешна

            // Проверяем роль пользователя
            $user = Auth::user();
            if ($user->role === 'customer') {
                return redirect()->route('index'); // Перенаправление для клиента
            } elseif ($user->role === 'admin') {
                return redirect()->route('home'); // Перенаправление для админа
            }
            // Добавьте другие проверки для других ролей

        } else {
            // Авторизация неуспешна
            return redirect()->back()->withErrors(['email' => 'Invalid credentials']);
        }
    }
}
