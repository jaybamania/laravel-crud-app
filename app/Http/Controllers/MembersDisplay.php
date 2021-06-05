<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MembersDisplay extends Controller
{
    //
    function showData(){
        $data = DB::table('members')->get();
        
        return view("admin")->with('members',$data);
    }

   
}
