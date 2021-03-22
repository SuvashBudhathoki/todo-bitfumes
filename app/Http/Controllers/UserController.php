<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function uploadAvatar(Request $request) {
        if ($request->hasFile('image')) {
            User::uploadAvatar($request->image);
            return redirect()->back()->with('message', 'Image Uploaded');
        }
        return redirect()->back()->with('error', 'Image not Uploaded');
    }

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
