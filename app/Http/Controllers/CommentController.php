<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    //
    public function showAllComments(){ /** ne pas oublier de decommenter la ligne 26 de bootstrap $app->withEloquent(); */
        return response()->json(Comment::all());
    }
    public function showOnComment($id){
        return response()->json(Comment::find($id));
    }
    public function create(Request $request){
        $this->validate($request,[
            'content'=>'required'
        ]);
        $comment=Comment::create($request->all());
        return response()->json($comment,201);
    }
    public function update(Request $request,$id){
        $comment=Comment::findOrFail($id);
        $comment->update($request->all());
        return response()->json($comment,200);
    }
    public function delete($_id){
        Comment::findOrFail($_id)->delete();
        return response('Deleted successfully');
    }
}
