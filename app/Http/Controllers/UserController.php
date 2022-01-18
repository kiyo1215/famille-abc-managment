<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function cast()
    {
        $users = User::Paginate(10);
        return view('famille.cast', compact('users'));
    }
    public function bill()
    {
        return view('famille.bill');
    }
    public function atte()
    {
        return view('famille.atte');
    }
    public function parsonal()
    {
        return view('famille.parsonal');
    }
}
