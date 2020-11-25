<?php

namespace App\Http\Controllers;
use App\Patient;
use Illuminate\Http\Request;
use \Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;


class PatientController extends Controller
{
    public function patient(Request $request){
        $patient = new Patient;
        $patient->pname = $request->pname;
        $patient->pemail = $request->pemail;
        $patient->pphone = $request->pphone;
        $patient->paddress = $request->paddress;
        $patient->pbday = $request->pbday;
        $patient->poccupation = $request->poccupation;
        $patient->pblood = $request->pblood;
        $patient->palmedicine = $request->palmedicine;
        $patient->pgender = $request->pgender;
        $patient->pstatus = $request->pstatus;
        
        $patient->save();
        return redirect()->back();
    }
}





