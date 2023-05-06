<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\entertainment;
use App\Models\User;
use Illuminate\Support\Facades\DB;


class administration extends Controller
{
    public function list(){
        $post = entertainment::all();
        return view('admin.list', compact('post'));
    }

    public function edit($id){
        $data = DB::table('entertainments')->where('id', $id)->first();
        return view("admin.edit", compact('data'));
    }

    public function update(Request $request, $id){
        $entertainment = entertainment::find($id);
        if(!$entertainment){
            return redirect()->back()->with('status', "entertainment not found");
        }
    
        $entertainment->name = $request->input('name');
        $entertainment->genre = strtolower($request->input('genre'));
        if($request->hasFile('img')){
            $file = $request->file("img");
            $extention = $file->getClientOriginalExtension();
            $filename = time().".".$extention;
            $file->move('uploads/entertainments/', $filename);
            $entertainment->img = $filename;
        }
    
        $entertainment->save();
        return redirect()->back()->with('status', "entertainment updated successfully");
    }
    
    public function check($id){
        $id = $id;
        return view('admin.delete', compact('id'));
    }

    public function delete($id)
    {
        $entertainment = entertainment::find($id);
        if (!$entertainment) {
            return redirect()->back()->with('error', 'entertainment not found');
        }
        $entertainment->delete();
        return redirect()->route("list");
    }

    public function filter(Request $request)
    {
        $genre = $request->input('genre');
        $post = entertainment::when($genre, function ($query, $genre) {
            return $query->where('genre', $genre);
        })->get();

        return view('admin.list', compact('post'));
    }

    public function search(Request $request)
    {
        $search = $request->input('search');
        $post = entertainment::where('name', 'LIKE', '%'.$search.'%')->get();
        return view('admin.list', compact('post'));
    }

    public function user(){
        $user = User::all();
        return view('admin.user', compact("user"));
    }

    public function chekck_user($id){
        $id = $id;
        return view('admin.confirmUser', compact('id'));
    }

    public function delete_user($id)
    {
        $entertainment = User::find($id);
        if (!$entertainment) {
            return redirect()->back()->with('error', 'User not found');
        }
        $entertainment->delete();
        return redirect()->route("admin.user");
    }

}
