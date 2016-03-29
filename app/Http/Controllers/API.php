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

    public function get_dept($rollno){
        $roll = strrev(strrev($rollno)%1000);
        //return $roll;
        switch ($roll) {
          case '101':
            return "arch";
          case '102':
            return "chem";
          case '103':
            return "civ";
          case '106':
            return "cse";
          case '108':
            return "ece";
          case '107':
            return "eee";
          case '110':
            return "ice";
          case '111':
            return "mech";
          case '112':
            return "meta";
          case '114':
            return "prod";
    default:
        return "doms";
}
    }

    public function add(Request $request){
    	$student = Student::where('rollno',$request->rollno)->get();
    	if( !($student->isEmpty()) ){	
    	$location = $this->get_location($request->lat,$request->long);
        $dept = $this->get_dept($request->rollno);
    	$update = Student::where('rollno',$request->rollno)
    					  ->update([
    					  	'lat' => $request->lat,
    					  	'long' => $request->long,
                            'dept' => $dept,
    					  	'location' => $location,
                            'updated' => time()
                            ]);	
    	
    	return 1;
    	}
    	else{
    		$student = new Student;
    		$student->rollno = $request->rollno;
    		$student->lat = $request->lat;
    		$student->long = $request->long;
    		$student->location = $this->get_location($request->lat,$request->long);
    		$student->dept = $this->get_dept($request->rollno);
            $student->updated = time();
            $student->save();
    	return 2;
    	}
    	return 0;
    } 

    public function map(){
        $data = [];
        $students = Student::all();
        $locations = ['lhc','a2','a13','barn','eeeaudi'];
        $departments = ['archi','cse','ece','mech','eee','ice','chem','civil','prod','meta'];
        //return $locations;
        foreach ($departments as $department) {
            foreach ($locations as $location) {
                $count = 0;
                foreach ($students as $student) {
                        if(time()-$student->updated <= 600
                            && $student->location == $location 
                            && $student->dept== $department)
                            $count++;
                            //print 
                            //print time()-$student->updated.'<br/>';
                    }    
                    $data[$department][$location] = $count;
            }
        }
       return json_encode($data);
    }
}
