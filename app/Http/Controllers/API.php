<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Location;
use App\Student;
use App\Http\Controllers\Controller;

class API extends Controller
{
    public function get_location($a,$b){
    	if(pow($a-10.75928,2)+pow($b-78.81465,2)-pow(0.00031,2) < 0)
    		return "eee_audi";
    	elseif(pow($a-10.761028,2)+pow($b-78.813878,2)-pow(0.0005,2) < 0)
    		return "lhc";
		elseif(pow($a-10.759340,2)+pow($b-78.813216,2)-pow(0.00024,2) < 0)
    		return "barn";
    	elseif(pow($a-10.758977,2)+pow($b-78.813602,2)-pow(0.00008,2) < 0)
    		return "a13";
    	elseif(pow($a-10.759006,2)+pow($b-78.813237,2)-pow(0.000457010,2) < 0)
    		return "iotlab";
    	else 
    		return "nowhere";

    }

    public function add(Request $request){
    	$student = Student::where('rollno',$request->rollno)->get();
    	//return $student;
    	if(!$student->isEmpty()){
    		
    	$location = $this->get_location($request->lat,$request->long);
    	$update = Student::where('rollno',$request->rollno)
    					  ->update([
    					  	'lat' => $request->lat,
    					  	'long' => $request->long,
    					  	'location' => $location]);	
    	
    	return 1;
    	}
    	else{
    		$student = new Student;
    		$student->rollno = $request->rollno;
    		$student->lat = $request->lat;
    		$student->long = $request->long;
    		$student->location = $this->get_location($request->lat,$request->long);
    		$student->save();
    		return 2;
    	}
    	return 0;
    } 

    public function map(Request $request){
    	$current_time = date('Y-m-d H:i:s');
    	$students = Student::where
    }
}
