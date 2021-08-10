<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class ArticleController extends Controller
{
    public function index() {
        return view('form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        // dd($request->all());
        // echo "Anda sudah masuk";
        // $request->validate([
        //     'name' => 'required | max:255',
        //     'title' => 'required | max:255',
        //     'content' => 'required | max:255'
        // ]);

        $article = new Article();
        $article->name = $request->name;
        $article->title = $request->title;
        $article->content = $request->content;

        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $extension = $file->extension();
            $filename = time() . '.' . $extension;
            $file->move('upload/photo/', $filename);
            $article->image = $filename;
        } 
        else {
            return $request;
            $article->image = '';
        }

        $article->save();

        // dd($article->image);

        return redirect(url('/form-article'));
    }

    public function show() {
        $articles = Article::all();
        return view('article', compact('articles'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function detail($id) {
        $viewArticle = Article::find($id);
        return view('detail', compact('viewArticle'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function edit($id) {
        $article = Article::find($id);
        return view('edit', compact('article'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, $id) {
        $article = Article::find($id);
        $article->name = $request->name;
        $article->title = $request->title;
        $article->content = $request->content;

        $article->save();

        return redirect(url('/form-article'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function delete($id) {
        $article = Article::find($id);
        $article->delete();
        return back();
    }
}
