<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function messageSent(Request $request){
        $validate=$request->validate([
            'email'=>'required',
            'name'=>'required',
            'message'=>'required'

        ]);
        
        Contact::create([

            'email'=>$request->email,
            'name'=>$request->name,
            'message'=>$request->message
            

        ]);
        notify()->success('Message Sent Successfully!');
        return redirect('/');
    }
    public function getMessage(){
        $messages=Contact::latest()->get();
        return view('admin.getMessage',compact('messages'));
    }
    public function destroyMessage($id){
        $message=Contact::find($id);
        $message->delete();
        notify()->success('Message Deleted Successfully!');
        return redirect('/messageGet');
    }
}
