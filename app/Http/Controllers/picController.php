<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pic;

class picController extends Controller
{
    public function index(){
        $pics = Pic::all();
        return view('pic.index', compact('pics'));
    }

    public function create(){
        return view('pic.create');
    }

    public function store(Request $request){
        $pic = new Pic;
        $pic->name = $request->input('name');
        $pic->genre = $request->input('genre');
        if($request->hasFile('img')){
            $file = $request->file("img");
            $extention = $file->getClientOriginalExtension();
            $filename = time().".".$extention;
            $file->move('uploads/pics/', $filename);
            $pic->img = $filename;
        }
        $pic->save();
        return redirect()->back()->with('status', "Good Job");
    }
}
