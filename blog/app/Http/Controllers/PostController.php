<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;



class PostController extends Controller
{
    /**
 * Post一覧を表示する
 * 
 * @param Post Postモデル
 * @return array Postモデルリスト
 */
public function index(Post $post)
//public function index()
  {
    //return $post->get();
    //return view('index')->with(['posts' => $post->get()]);
              //Indexに対して、Postsという変数名でPostテーブルのデータを渡す、の意味
    return view('index')->with(['posts' => $post->getPaginateByLimit()]);
//  return view('index');
  }
  
/**
 * 特定IDのpostを表示する
 *
 * @params Object Post // 引数の$postはid=1のPostインスタンス
 * @return Reposnse post view
 */
public function show(Post $post)
{
    return view('show')->with(['post' => $post]);
}
}

?>