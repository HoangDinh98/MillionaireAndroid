<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

use App\User;

date_default_timezone_set("Asia/Ho_Chi_Minh");

class UserController extends Controller {
    public function index()
    {
        return User::all();
    }
}
