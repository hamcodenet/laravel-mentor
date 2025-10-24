<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function dashboard () {
        $user = Auth::user();
        $data['user'] = $user;
        return view('user.dashboard', $data);
    }
}
