<?php

namespace App\Http\Controllers;
// use App\User;
use App\Comment;
Use \Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        //
    }

    public function create()
    {
        // $date = Carbon::now()->format('Y-m-d');
        // $time = Carbon::now()->format('H:i');
        $comment = Comment::where('user_id',Auth::user()->id)->get()->sortByDesc('created_at');
        return view('comment.show', compact('comment'));
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
