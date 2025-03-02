<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Weight;
use App\Models\Weight_logs_;

class WeightController extends Controller
{
    public function index(){
        $weights = Weight_logs_::all();
        return view('index', compact('weights'));
    }

    public function store(){
        return view('create');
    }

    public function target(Request $request){
        return view('goal');
    }

    public function create(Request $request){
        $weight = $request->only(['id', 'user_id', 'date', 'weight', 'calories', 'exercise_time', 'exercise_content']);
        Weight_logs_::create($weight);
        return redirect('/weight_logs');
    }
}
