<?php

namespace App\Http\Controllers;

use App\Models\User;
class UserController extends Controller
{
    //

    public function index()
    {
        return view('welcome');
    }
    public function fetch()
    {
        $query = User::select('id', 'name', 'email', 'location', 'phone', 'role', 'experience');
       return datatables($query)->make(true);
    } 
}
