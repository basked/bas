<?php

namespace App\Http\Controllers;

use App\Models\Status;
use Illuminate\Http\Request;

class StatusController extends Controller
{
    public function index()
    {
        $statuses = Status::with('statuses')->get();
        return view('statuses.index')->with(['statuses'=>$statuses ]);
    }


}
