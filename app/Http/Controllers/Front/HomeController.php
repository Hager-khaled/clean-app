<?php

namespace App\Http\Controllers\Front;

use App\Models\Home;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view("front.home");
    }






    public function sendMessagee(Request $request)
    {

     $data = $request->validate([
     'service' => 'required|min:3',
     'indicate' => 'required|min:3',
     'facility' => 'required',
     'facilityName' => 'required',
     'room' => 'required',
     'hallway' => 'required',
     'staircase' => 'required',
     'radioGroup' => 'required',

     ]);


         Home::create($data);
         return back()->With('success','data deleted successfully');
    }
}
