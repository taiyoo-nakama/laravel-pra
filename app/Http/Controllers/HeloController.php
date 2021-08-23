<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\helo;

class HeloController extends Controller
{
    public function getIndex(Request $request)
    {
        $res = 'URL : ' . $request->url()
        . '<br>Long URL : ' . $request->fullUrl()
        . '<br>Path : ' . $request->path();
        return view ('helo',['message' => $res]);
    }
    public function postIndex(Request $request)
    {
        $res = "you typed: " . $request -> input('str');
        return view('helo',['message' => $res]);
    }
}
