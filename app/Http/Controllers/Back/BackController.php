<?php

namespace App\Http\Controllers\Back;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class BackController extends Controller
{
	public function __construct()
    {
    }
    public function index () {
    	return view('layouts.back.dashboard');
    }
}
