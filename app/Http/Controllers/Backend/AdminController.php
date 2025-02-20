<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function login()
    {
        return view('pages.admin.auth.login');
    }
    public function index()
    {
        return view('pages.admin.dashboard');
    }

    public function customers()
    {
        $data['users'] = User::where('isAdmin', '=', 'user')->get();
        return view('pages.admin.customer.index', $data);
    }
}
