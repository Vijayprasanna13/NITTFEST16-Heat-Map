<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Coord;
use App\Student;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class Pages extends Controller
{
    public function map(){
    	return view('nittfestapp');
    }
    public function form(){
    	return view('coordsform');
    }
    public function showcoords(){
    	$coords = Coord::all();
    	return view('coordspage',compact('coords'));
    }
    public function showstudents(){
    	$students = Student::latest()->get();
    	return view('studentspage',compact('students'));
    }
}
