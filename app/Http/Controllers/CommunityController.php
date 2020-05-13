<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Community;

class CommunityController extends Controller
{
    //
    public function index(){
        return view('csp.index');
    }
    
    public function store(Request $request){
       // dd($request->all());
        $this->validate($request, [
            'guardian_name' => 'required',
            'phone' => 'required',
            'email' => 'required'
        ]);
        
        Community::create([
             'guardian_name' => $request->guardian_name,
             'phone' => $request->phone,
             'email' => $request->email,
             'child_name' => $request->child_name,
             'age' => $request->age,
             'learning_period' => $request->learning_period,
             'address' => $request->address,
         ]);


        return back()->with('message', 'Data posted Successsfully');
    }
}

            // 'guardian_name');
            // 'phone');
            // 'email');
            // 'child-name');
            // ('age')->nullable();
            // 'learning-period');
            // 'address');
