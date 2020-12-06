<?php

namespace App\Http\Controllers;
use App\Pharmacist;
use Illuminate\Http\Request;
use \Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class PharmacistController extends Controller
{
    public function pharmacist(Request $request){
        $pharmacist = new Pharmacist;
        $pharmacist->phname = $request->phname;
        $pharmacist->phemail = $request->phemail;
        $pharmacist->phphone = $request->phphone;
        $pharmacist->save();
        return redirect()->back();
    }

    public function pharmadetails(){
        $pharmadetails=Pharmacist::all();
        return view('viewpharma')->with('pharmacistdetails',$pharmadetails);
    }

    public function delete($id){
        $pharmadetails=Pharmacist::find($id);
        $pharmadetails->delete();
        return redirect()->back();
    }

    public function updatepharma($id){
        $updatepharma=Pharmacist::find($id);
        return view('updatepharma')->with('updatepharmadetails',$updatepharma);
    }

    public function updatepharmacist(Request $request){
        $id=$request->id;
        $phname=$request->phname;
        $phemail=$request->phemail;
        $phphone=$request->phphone;
        $updatepharmacist=Pharmacist::find($id);
        $updatepharmacist->phname=$phname;
        $updatepharmacist->phemail=$phemail;
        $updatepharmacist->phphone=$phphone;
        $updatepharmacist->save();

        $updatepharmacistdetails=Pharmacist::all();
        return view('viewpharma')->with('pharmacistdetails',$updatepharmacistdetails);
    }
    
    
}