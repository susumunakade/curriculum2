<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Post;
use App\Models\User;

use Illuminate\View\View;

class SNSController extends Controller
{
    //
    public function add()
  {
      return view('admin.sns.index');
  }

 
  public function index(Request $request)
  {

          // Varidationを行う
          $this->validate($request, Post::$rules);
          
          
          // User Modelからデータを取得する
        //   $users = User::find($request->id);

          $posts = new Post;
          $form = $request->all();
          $users =new User;
              
          // データベースに保存する
          $posts->fill($form);
          $posts->user_id = $users->id;
          $posts->save();

          $posts = Post::all();
          $users = User::all();
          
      // admin/sns/indexにリダイレクトする
      return redirect('admin/sns/index');

      return view('admin.sns.index', ['users' => $users]);
  }
  
}
