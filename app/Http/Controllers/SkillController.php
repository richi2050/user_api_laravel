<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Skill;
use Illuminate\Support\Facades\Validator;

class SkillController extends Controller
{
    public function store(Request $request)
    {
        $data= $request->all();
        $validator = Validator::make($data, [
            'name' => 'required|string|max:255',
        ]);
        if ($validator->fails()) {
            return response()->json([
                'errors' => $validator->errors()
            ]);
        }else{
            $dataSkill= Skill::create([
                'name' => $data['name']
            ]);
            return response()->json([
                'skill' => $dataSkill
            ]);
        }
    }

    public function index(){
        $skill = Skill::all();
        return response()->json([
            'skills' => $skill
        ]);
    }
}
