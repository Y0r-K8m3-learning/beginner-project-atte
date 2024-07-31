<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegisterUserRequest;

class AuthController extends Controller
{
    public function index()
    {
        return view('attendance');
    }

    public function admin()
    {
        return view('admin');
    }

    public function store(RegisterUserRequest $request)
    {
        return redirect('/');
    }
}
