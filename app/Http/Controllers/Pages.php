<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class Pages extends Controller
{
    public function form(){
    	return view('form');
    }
}
