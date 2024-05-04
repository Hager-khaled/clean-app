<?php

namespace App\Http\Controllers\Front;


use App\Models\Team;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TeamController extends Controller
{


    public function index(){
        return view("front.team");
    }

    public function applyy(Request $request)
    {

     $data = $request->validate([
     'name' => 'required|string|min:3',
     'email' => 'required|email|max:50',
     'phone' => 'required|numeric',
     'message' => 'required|string|min:10|max:1000',
     'file' => 'required',
     ]);



         Team::create($data);
         return back()->With('success','data deleted successfully');
    }
}
