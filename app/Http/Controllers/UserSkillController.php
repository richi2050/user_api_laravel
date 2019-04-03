<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserSkill;
use Illuminate\Support\Facades\Validator;

class UserSkillController extends Controller
{
    public function show($id)
    {
        $user = UserSkill::where('user_id', $id)
        ->join('skill','skill.id','=','user_skill.skill_id')->get();
        return response()->json([
            'user' => $user
        ]);
    }

    public function store(Request $request)
    {
        $data= $request->all();
        $validator = Validator::make($data, [
            'user_id' => 'required|integer|exists:users,id',
            'skill_id' => 'required|integer|exists:skill,id',
            'qualification' => 'required|integer',
        ]);
        if ($validator->fails()) {
            return response()->json([
                'errors' => $validator->errors()
            ]);
        }else{
            $dataSkill= UserSkill::create([
                'user_id' => $data['user_id'],
                'skill_id' => $data['skill_id'],
                'qualification' => $data['qualification']
            ]);
            return response()->json([
                'skill' => $dataSkill
            ]);
        }
    }
}
