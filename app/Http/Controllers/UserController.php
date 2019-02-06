<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show(){
        $users = DB::table('users')->paginate(10);

        return view('users', ['users' => $users]);
    }
}
