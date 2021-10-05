<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Users;
use Carbon\Carbon;


class dataController
{
  
    public function dataInsertion(Request $request){
        $query=Users::create([
            'user_name' => $request->user_name,
            'email' => $request->user_email,
            'user_mobile_number' => $request->mobile,
            'password' => Hash::make($request->password)
        ]);
        $query=Users::all();
        return array('Status'=>200,'Message'=>'user details succesfully inserted');
    }
    public function dataRetreval(Request $request){
        $limit=Carbon::today()->subDays(7);
        $query=Users::where('created_at','>=',$limit)->get();
        return array('Status'=>200,'users'=>$query);


    }

}