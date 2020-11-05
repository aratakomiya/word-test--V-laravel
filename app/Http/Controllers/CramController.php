<?php

namespace App\Http\Controllers;

use Dotenv\Validator as DotenvValidator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class CramController extends Controller
{
    public function top(Request $request)
    {
        return view('top');
    }
    public function search(Request $request)
    {
        $tableName = $request->tableName;
        return view('layouts.search', ['tableName' => $tableName]);
    }

    public function problem(Request $request)
    {
        $tableName = $request->tableName;
        if ($request->flg === 'flg') {
            $params = unserialize(base64_decode($request->params));
            $words = unserialize(base64_decode($request->words));
        } else {
            $rules = [
                'start' => 'integer|required',
                'end' => 'integer|required',
                'length' => 'integer|required',
            ];
            $messages = [
                'start.integer' => '半角整数で入力してください。',
                'end.integer' => '半角整数で入力してください。',
                'length.integer' => '半角整数で入力してください。',
                'start.required' => '必ず入力してください。',
                'end.required' => '必ず入力してください。',
                'length.required' => '必ず入力してください。'
            ];
            $validator = Validator::make($request->all(), $rules, $messages);
            if ($validator->fails()) {
                return redirect("search?tableName=$tableName")
                    ->withErrors($validator);
            }
            $params = [
                'start' => $request->start,
                'end' => $request->end,
                'length' => $request->length,
            ];
            $words = DB::table("$tableName")
                ->whereRaw(
                    'number >= ? and number <= ?',
                    [$params['start'], $params['end']]
                )
                ->inRandomOrder()
                ->take($params['length'])
                ->get();
        }
        return view("$tableName.problem", ['words' => $words, 'params' => $params, 'tableName' => $tableName]);
    }

    public function answer(Request $request)
    {
        $tableName = $request->tableName;
        $params = unserialize(base64_decode($request->params));
        $words = unserialize(base64_decode($request->words));

        return view("$tableName.answer", ['words' => $words, 'params' => $params, 'tableName' => $tableName]);
    }

    public function juniorSelect(Request $request)
    {
        return view('junior_en.juniorSelect');
    }
}
