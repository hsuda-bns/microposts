<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FavouritesController extends Controller
{
    // 投稿をお気に入りにするアクション
     public function store($id)
     {
         //認証済みのユーザ（閲覧者）が、idの投稿をお気に入りにする
         \Auth::user()->favourite($id);
         //前のURLへリダイレクトさせる
         return back();
     }
     public function destroy($id)
     {
         //認証済みユーザ（閲覧者）が、、idの投稿をお気に入りから外す
         \Auth::user()->unfavourite($id);
         //前のURLへリダイレクトさせる
         return back();
     }
}
