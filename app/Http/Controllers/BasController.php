<?php

namespace App\Http\Controllers;

use App\Services\DateCheck;
use Illuminate\Http\Request;
use  DateService;

class BasController extends Controller
{
    public function index()
    {
        dd(DateService::isValid('12/12/1025'),DateService::bas());
     }
}
