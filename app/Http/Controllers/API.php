<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Location;
use App\Student;
use App\Coord;
use App\Http\Controllers\Controller;

class API extends Controller
{
    //Function to get the location based on coords given parameters lat,long of user
    public function get_location($a,$b){
    
$lati=($a-10.758)*1000-0.9;
$longi=2.2-($b-78.813)*1000;
if($lati<0.5 && $lati>=0 && $longi <1 && $longi>0)
return "eeeaudi";
else if($lati>0.3 && $lati<0.8 && $longi >1 && $longi<2)
return "informals";
else
return "nowhere";           


            }

    //Function to get the dept given rollno
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
          case '11':
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

    //Function to add a new entry or update a existing entry in the Student table
    public function add(Request $request){
    	$student = Student::where('rollno',$request->rollno)->get();
    	if( !($student->isEmpty()) ){	
    	$location = $this->get_location($request->lat,$request->long);
        //return $location;
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
//            return $student->location;
    		$student->dept = $this->get_dept($request->rollno);
 //           return $student->dept;
            $student->updated = time();
            $student->save();
    	return 2;
    	}
    	return 0;
    } 

    //Function to render map
    public function map(){
        $data = [];
        $students = Student::all();
        $locations = ['informals','eeeaudi'];
        $departments = ['archi','cse','ece','mech','eee','ice','chem','civil','prod','meta'];
        //return $locations;
        foreach ($departments as $department) {
            foreach ($locations as $location) {
                $count = 0;
                foreach ($students as $student) {
                        if(time()-$student->updated <=3600 && $student->location == $location 
                            && $student->dept== $department)
                            {$count++;
                            
                    }    
                    $data[$department][$location] = $count;
            }
        }
    }
       return json_encode($data);
    
}

    //Function to add a new coords-form or update an existing one 
    public function form(Request $request){
       //return $request;
        $coord = Coord::where('venue',$request->venue)->get();
        if(($coord->isEmpty()) ) {
        $coord = new Coord;
        $coord->lat = $request->lat;
        $coord->long = $request->long;
        $coord->radius = $request->radius;
        $coord->venue = $request->venue;
        $coord->save();
        }
        else
        {
            Coord::where('venue',$request->venue)
                 ->update([
                    'lat' => $request->lat,
                    'long' => $request->long,
                    'radius' => $request->radius
                    ]);
        }
    }
}
