<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\WeightRequest;
use App\Models\User;
use App\Models\Weights;
use App\Models\Weight_logs_;

class WeightController extends Controller
{
    public function index(){
        $weights = Weight_logs_::all();
        $weights = Weight_logs_::Paginate(8);
        return view('index', compact('weights'));
    }

    public function store(){
        return view('create');
    }

    public function goal(){
        return view('goal');
    }

    public function detail(Request $request){
        return view('detail');
    }

    public function create(WeightRequest $request){
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
