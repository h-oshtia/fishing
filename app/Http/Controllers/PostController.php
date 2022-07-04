<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Http\Requests\PostRequest;

class PostController extends Controller
{
    public function show()
    {
        $posts = Post::latest()->get();
        return view('index', ['posts' => $posts]);
    }

    public function Topshow()
    {
        $posts = Post::latest()->get();
        return view('toppage', ['posts' => $posts]);

    }

    public function Toprankingshow()
    {
        $posts = Post::orderBy('size', 'desc')->take(3)->get();
        return view('topranking', ['posts' => $posts]);
    }

    public function indexrankingshow()
    {
        $posts = Post::orderBy('size', 'desc')->take(3)->get();
        return view('indexranking', ['posts' => $posts]);
    }


    public function showCreate()
    {
        return view('posts');
    }

    public function exeStore(Request $request)
    {
        $post = new Post();

        if($request->hasFile('image')) {
            $post->image = $request->file('image')->store('public/image');
            $post->image = $request->image->store('');
        } else {
            $post->image = null;
        }
        $post->place = $request->place;
        $post->comment = $request->comment;
        $post->size = $request->size;

        $post->save();

        return redirect('toppage');
    }

    public function Myshow()
    {
        $posts = Post::where('user_id', \Auth::user()->id)->latest()->get();

        return view('mypage', ['posts' => $posts]);
    }

    public function exeDelete($id)
    {

          if (empty($id)) {
            \Session::flash('err_msg', 'データがありません。');
            return redirect(route('mypage'));
        }

        try {
            // ブログを削除
            Post::destroy($id);
        } catch(\Throwable $e) {
            abort(500);
        }

        \Session::flash('err_msg', '削除しました。');
        return redirect(route('mypage'));
    }
    // public function showimg(Request $request,$id,Picture $picture)
    // {
        // $message='This is your picture.'.$id;
        // $picture=Picture::find($id);
        // Storage::disk('local')->exists('public/storage/'.$picture->image);
        // return view('toppage',['message'=>$message,'picture'=>$picture]);
    // }
}



