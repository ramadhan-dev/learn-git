<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\User;

class AdminController extends Controller
{
	public function __construct()
    {
        $this->middleware('admin');
    }


    public function index(){
    	$data = User::all();
    	return view('layouts.admin.dashboard', compact('data'));
    }
}
