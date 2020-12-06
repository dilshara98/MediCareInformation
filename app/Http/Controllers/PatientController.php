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

    public function patientsdetails(){
        $patientdetails=Patient::all();
        return view('viewpatient')->with('patientdetails',$patientdetails);
    }

    public function patientdetail($id){
        $patientdetail=Patient::find($id);
        return view('viewupdatedeletepatient')->with('item', $patientdetail);
    }


    public function updatepatient(Request $request){
        $id=$request->id;
        $pname = $request->pname;
        $pemail = $request->pemail;
        $pphone = $request->pphone;
        $paddress = $request->paddress;
        $pbday = $request->pbday;
        $poccupation = $request->poccupation;
        $pblood = $request->pblood;
        $palmedicine = $request->palmedicine;
        $pgender = $request->pgender;
        $pstatus = $request->pstatus;

        $updatepatient=Patient::find($id);
        $updatepatient->pname=$pname;
        $updatepatient->pemail=$pemail;
        $updatepatient->pphone=$pphone;
        $updatepatient->paddress=$paddress;
        $updatepatient->pbday=$pbday;
        $updatepatient->poccupation=$poccupation;
        $updatepatient->pblood=$pblood;
        $updatepatient->palmedicine=$palmedicine;
        $updatepatient->pgender=$pgender;
        $updatepatient->pstatus=$pstatus;
        $updatepatient->save();

        $updatepatientdetails=Patient::all();
        return view('viewpatient')->with('patientdetails',$updatepatientdetails);
    }

    public function delete($id){
        $item=Patient::find($id);
        $item->delete();
        return redirect()->back();
    }
}





