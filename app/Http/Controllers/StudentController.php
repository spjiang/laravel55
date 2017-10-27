<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    //
    public function upload()
    {
        return 'upload';
    }
    
    public function test()
    {
        $data = array('name' => 'dj');
        $id = DB::table('student')->insertGetId($data);
        echo $id;
    }
    
    public function session1(Request $request)
    {
        $request->session()->put('key1', 'value1');
    }
    
    public function session2(Request $request)
    {
        echo $request->session()->get('key1');
    }
}
