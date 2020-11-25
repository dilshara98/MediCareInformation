<?php


namespace App\Http\Controllers;
use App\Contact;
use Illuminate\Http\Request;
use \Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;


class ContactController extends Controller
{
   
    public function contact(Request $request){
        $contact = new Contact;
        $contact->cname = $request->cname;
        $contact->cemail = $request->cemail;
        $contact->cphone = $request->cphone;
        $contact->cmsg = $request->cmsg;
        $contact->save();
        return redirect()->back();
        
    }

    public function contactdetails(){
        $condetails=Contact::all();
        return view('contactdetails')->with('contactdetails',$condetails);
    }

    public function condelete($id){
        $condetails=Contact::find($id);
        $condetails->delete();
        return redirect()->back();
    }

    public function reply($id){
        $condetails=Contact::find($id);
        $condetails->isCompleted=1;
        $condetails->save();
        return redirect()->back();
    }

    public function notreply($id){
        $condetails=Contact::find($id);
        $condetails->isCompleted=0;
        $condetails->save();
        return redirect()->back();
    }


}


