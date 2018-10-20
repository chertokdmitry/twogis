<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use DB;
use App\User;
use App\Country;
use App\Role;
use App\Article;


class Core extends Controller
{

//    public function show($id)
//    {
//        
//        
//        $articles = DB::select("SELECT * FROM articles WHERE id = ?", [$id]);
//        dump($articles); //dd
//
//        
//        $view = view('welcome')->withLink('Hello Dimasss')->render();
//        
//        return (new Response($view));
//    }
        public function set()
    {
        echo 'adddd';
    }
    
    public function show($id = 1) 
    {
//        $articles = DB::table('articles')->get();
//        dump($articles);
//        $articles = Article::where('id', '>', 3)->get();
//        
//        foreach($articles as $article) {
//            echo $article->text;
//            echo '<br>';
//        }
        
//        Article::create(
//                [
//                    'name' => 'Hello world',
//                    'text' => 'some super text'
//                ]
//                );
//        
//        $user = User::find($id);
        
//        $country = Country::find($id);
        
        
//        $article = new Article([
//           'name' => 'supreme',
//            'text' => 'about sup'
//        ]);
//        
//        $user->articles()->save($article);
//     
        $articles = Article::all();
        dump($articles);
        
    }
    
}
