<?php

namespace App\Http\Controllers\Front;


use App\Models\Contact;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        return view("front.contact");
       }


       public function sendMessage(Request $request)
       {

        $data = $request->validate([
        'name' => 'required|string|min:3',
        'email' => 'required|email|max:50',
        'phone' => 'required|numeric',
        'message' => 'required|string|min:10|max:755',
        ]);


            Contact::create($data);
            return back()->With('success','data deleted successfully');
       }
}


