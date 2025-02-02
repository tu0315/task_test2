<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Test;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    public function index()
    {
        // エロクアントで取得する
        $values = Test::all(); // 全件取得
        
        $count = Test::count(); // 件数取得

        $collection = DB::table('tests')->where('text', '=', 'aaa')->select('id', 'text')->get();
        $querybuilder = DB::table('tests')->where('text', '=', 'aaa')->select('id', 'text')->first();

        dd($values,$count,$collection,$querybuilder); 
        $hoge = "hogeee";
        
        return view('tests.test', compact('values', 'hoge'));
    } 
}
