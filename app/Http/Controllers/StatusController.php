<?php

namespace App\Http\Controllers;

use App\Models\Status;
use Illuminate\Http\Request;

class StatusController extends Controller
{
    public function index()
    {
        $statuses = Status::with('statuses')->get();
//        dd($statuses[0]->statuses());
//        foreach ($status->statuses as $pstatus) {
//            echo $status->name.'='.$pstatus->name.'>'. $pstatus->pivot->access.'</br>';
//        }
        return view('statuses.index')->with(['statuses'=>$statuses ]);
    }
}
