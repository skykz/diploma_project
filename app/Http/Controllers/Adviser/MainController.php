<?php

namespace App\Http\Controllers\Adviser;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }
    public function index() {
        return view('adviser.dashboard');
    }
}
