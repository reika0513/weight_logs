<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Weight;
use App\Models\Weight_logs;

class WeightController extends Controller
{
    public function index(){
        return view('index');
    }
}
