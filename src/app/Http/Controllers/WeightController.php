<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Weights;
use App\Models\Weight_logs_;

class WeightController extends Controller
{
    public function index(){
        $weights = Weight_logs_::all();
        $targets = Weights::all();
        return view('index', compact('weights', 'targets'));
    }

    public function store(){
        return view('create');
    }

    public function goal(){
        return view('goal');
    }

    public function detail(){
        $weights = Weight_logs_::all();
        return view('detail', compact('weights'));
    }

    public function create(Request $request){
        $weight = $request->only(['id', 'user_id', 'date', 'weight', 'calories', 'exercise_time', 'exercise_content']);
        Weight_logs_::create($weight);
        return redirect('/weight_logs');
    }

    public function target(Request $request){
        $target = $request->only(['id', 'user_id', 'target_weight']);
        Weights::create($target);
        return redirect('/weight_logs');
    }

    public function logout(){
        return view('auth.login');
    }

}
