<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class UserController extends Controller
{
    public function index()
    {
        return 'All users';
    }
    public function show($id = null)
    {
        return 'User ' . $id;
    }
}
