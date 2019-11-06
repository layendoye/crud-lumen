<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    //
    public function showAllArticles(){ /** ne pas oublier de decommenter la ligne 26 de bootstrap $app->withEloquent(); */
        return response()->json(Article::all());
    }
    public function showOnArticle($id){
        return response()->json(Article::find($id));
    }
    public function create(Request $request){
        $this->validate($request,[
            'title'=>'required',
            'description'=>'required'
        ]);
        $article=Article::create($request->all());
        return response()->json($article,201);
    }
    public function update(Request $request,$id){
        $article=Article::findOrFail($id);
        $article->update($request->all());
        return response()->json($article,200);
    }
    public function delete($id){
        Article::findOrFail($id)->delete();
        return response('Deleted successfully');
    }
}
