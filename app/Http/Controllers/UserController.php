<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index()
    {
        $data = [
            'name' => 'Elon',
            'email' => 'elon@test.com',
            'password' => 'password',
        ];

      //  User::create($data);
        $user = User::all();

        return view('home');
    }
}
