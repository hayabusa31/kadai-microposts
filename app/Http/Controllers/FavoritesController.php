<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FavoritesController extends Controller
{
    /**
     * Micropostsをお気に入り追加するアクション。
     * 
     * @param $id 相手ユーザのid
     * @return \Illuminate\Http\Response
     */
     public function store($id)
     {
         //認証済みユーザ（閲覧者）が、idのMicropostsをお気に入り追加する
         \Auth::user()->favorite($id);
         //前のURLへリダイレクトさせる
         return back();
     }
     
     /**
      * Micropostsをお気に入り解除するアクション。
      * @param $id 相手のユーザのid
      * @return \Illuminate\Http\Response
      */
      public function destroy($id)
      {
          //認証済みユーザ（閲覧者）が、idのMicropostsをお気に入り解除する
          \Auth::user()->unfavorite($id);
          //前のURLへリダイレクトさせる
          return back();
      }
}
