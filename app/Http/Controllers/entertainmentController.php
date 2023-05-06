<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\entertainment;
use Illuminate\Support\Facades\DB;
use App\Models\Rating;
use App\Models\comments;

class entertainmentController extends Controller
{
    public function index(){
        $entertainments = entertainment::all();
        return view('home', compact('entertainments'));
    }

    public function create(){
        return view('entertainment.create');
    }

    public function store(Request $request){
        $entertainment = new entertainment;
        $entertainment->name = $request->input('name');
        $entertainment->genre = strtolower($request->input('genre'));
        $entertainment->category = strtolower($request->input('category'));
        if($request->hasFile('img')){
            $file = $request->file("img");
            $extention = $file->getClientOriginalExtension();
            $filename = time().".".$extention;
            $file->move('uploads/entertainments/', $filename);
            $entertainment->img = $filename;
        }
        $entertainment->save();
        return redirect()->back()->with('status', "Good Job");
    }

    public function tvshows(){
        $show = entertainment::where('category', 'tvshow')->get();
        return view('pages.tvshows', compact('show'));
    }
    public function anime(){
        $show = entertainment::where('category', 'anime')->get();
        return view('pages.anime', compact('show'));
    }
    public function movie(){
        $show = entertainment::where('category', 'movie')->get();
        return view('pages.movie', compact('show'));
    }
    public function games(){
        $show = entertainment::where('category', 'games')->get();
        return view('pages.games', compact('show'));
    }

    public function info($id){
        $info = entertainment::find($id);
        $averageRating = Rating::where('entertainment_id', $id)->avg('rate');
        $averageRating = number_format($averageRating, 1);
        $users = Rating::where('entertainment_id', $id)->distinct('user_id')->count('user_id');
        $comments = comments::where('entertainment_id', $id)->orderByDesc('id')->get();
        return view('pages.info', compact('info', 'averageRating', 'users', 'comments'));

    }

    public function rating(Request $request)
    {
        $entertainment_id = $request->input('entertainment_id');
        $user_id = $request->input('user_id');
        $existingRating = Rating::where('entertainment_id', $entertainment_id)
            ->where('user_id', $user_id)
            ->first();
        if ($existingRating) {
            return redirect()->back();
        } else {
            $rating = new Rating;
            $rating->entertainment_id = $entertainment_id;
            $rating->user_id = $user_id;
            $rating->rate = $request->input('rate');
            $rating->save();
            return redirect()->back();
        }
    }

    public function comments(Request $request){
        $comments = new comments;
        $comments->entertainment_id = $request->input('entertainment_id');
        $comments->user_id = $request->input('user_id');
        $comments->user_name = $request->input('user_name');
        $comments->comment = $request->input('comment');
        $comments->save();
        return redirect()->back();
    }

    public function remove_commnent($id){
        $comment = comments::find($id);
        if (!$comment) {
            return redirect()->back()->with('error', 'comment not found');
        }
        $comment->delete();
        return redirect()->back();
    }

    public function search(Request $request)
    {
        $search = $request->input('search');
        $entertainments = entertainment::where('name', 'LIKE', '%' . $search . '%')->get();
        return view('home', compact('entertainments'));
    }
}
