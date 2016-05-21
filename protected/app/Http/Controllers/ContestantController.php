<?php

namespace App\Http\Controllers;

use App\Contestant;
use Illuminate\Http\Request;

use App\Http\Requests;

class ContestantController extends Controller
{
    //
    public function show($id)
    {
        $contestant=Contestant::find($id);
        $contestant->hints = ($contestant->hints +1);
        $contestant->save();
        return view('contestants.show',compact('contestant'));
    }
}
