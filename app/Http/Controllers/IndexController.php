<?php

// namespace App\Http\Controllers;

// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Auth;

// class IndexController extends Controller
// {
//     public function index()
//     {
//         // Проверяем, является ли текущий пользователь клиентом
//         if (Auth::check() && Auth::user()->role === 'customer') {
//             // Ваша логика для клиентов
//             return view('index');
//         } else {
//             // Логика для других ролей или невошедших в систему пользователей
//             return redirect()->route('home');
//         }
//     }
// }

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{
    public function index()
    {
        return view('index');
    }
}

