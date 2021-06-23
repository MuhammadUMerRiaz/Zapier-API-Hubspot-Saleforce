<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lead;
use DB;
class LeadController extends Controller
{
  
    public function store(Request $request)
    {
      echo $request->email;
      $lead=new Lead;
      $lead->leads=$request->Email; 
      $lead->save();
 
    $data = ['message' => 'No new orders!'];

    return response()->json($data, 204);
    }

}


