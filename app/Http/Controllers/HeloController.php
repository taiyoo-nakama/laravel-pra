<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\MyTable;

class HeloController extends Controller
{
    public function getIndex(Request $request)
    {
        $id = $request->id;
        $data = MyTble::where('id',$id)->get();
        return view ('helo',['message' => 'MyTable List','data' => $data]);
    }
    public function postIndex(Request $request)
    {
        $res = "you typed: " . $request -> input('str');
        return view('helo',['message' => $res]);
    }
}
