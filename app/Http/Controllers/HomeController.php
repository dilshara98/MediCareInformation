<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {   
        return view('home');
    }

    public function regdetails(){
        $regdetails=User::all();
        return view('regdetails')->with('registerdetails',$regdetails);
    }

     public function update($id){
        $updatereg=User::find($id);
        return view('updatereg')->with('updateregdetails',$updatereg);
    }

    public function updatereg(Request $request){
        $id=$request->id;
        $name=$request->name;
        $email=$request->email;
        $phone=$request->phone;
        $updateregister=User::find($id);
        $updateregister->name=$name;
        $updateregister->email=$email;
        $updateregister->phone=$phone;
        $updateregister->save();

        $updateregdetails=User::all();
        return view('regdetails')->with('registerdetails',$updateregdetails);
    }

    public function delete($id){
        $regdetails=User::find($id);
        $regdetails->delete();
        return redirect()->back();
    }

    
}
