<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MyTable;

class HeloController extends Controller
{
    public function getIndex(Request $request)
    {
        $id = $request->id;
        $data = MyTable::where('id',$id)->get();
        return view ('helo',['message' => 'MyTable List','data' => $data]);
    }
    public function postIndex(Request $request)
    {
        $res = "you typed: " . $request -> input('str');
        return view('helo',['message' => $res]);
    }

    public function getNew(Request $request)
    {
        return view('new');
    }
    public function postNew(Request $request)
    {
        $name = $request->input('name');
        $mail = $request->input('mail');
        $age = $request->input('age');
        Mytable::create([
            'name' => $name,
            'mail' =>$mail,
            'age' => $age
        ]);
        return view('new');
    }
}
