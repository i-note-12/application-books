<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RegisterBook;

class RegisterBookController extends Controller
{
    // 一覧表示
    public function index(Request $request)
    {

        return view('book/index');
    }

    // 新規作成
    public function create(Request $request)
    {

        return view('book/create');
    }

    // 新規登録
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'category_id' => 'required',
            'author' => 'required',
            'summary' => 'required',
            'recommend_point' => 'string',
            'recommend_level' => 'integer',
            'image_cover' => 'required|image',
            'image_2' => 'image',
            'image_3' => 'image',
            'publish_year' => 'required|integer',
        ]);

        $title = Null;
        if (isset($request->title))
        {
            $title = $request->title;
        }

        $category_id = Null;
        if (isset($request->category_id))
        {
            $category_id = $request->category_id;
        }

        $author = Null;
        if (isset($request->author))
        {
            $author = $request->author;
        }

        $summary = Null;
        if (isset($request->summary))
        {
            $summary = $request->summary;
        }

        $recommend_point = Null;
        if (isset($request->recommend_point))
        {
            $recommend_point = $recommend_point;
        }

        $recommend_level = Null;
        if (isset($request->recommend_level))
        {
            $recommend_level = $request->recommend_level;
        }

        $image_cover = Null;
        if (isset($request->image_cover))
        {
            $image_cover = $request->image_cover;
        }

        $image_2 = Null;
        if (isset($request->image_2))
        {
            $image_2 = $request->image_2;
        }

        $image_3 = Null;
        if (isset($request->image_3))
        {
            $image_3 = $request->image_3;
        }

        $publish_year = Null;
        if (isset($request->publish_year))
        {
            $publish_year = $request->publish_year;
        }

        RegisterBook::create([
            'title' => $title,
            'category_id' => $category_id,
            'author' => $author,
            'summary' => $summary,
            'recommend_point' => $recommend_point,
            'recommend_level' => $recommend_level,
            'image_cover' => $image_cover,
            'image_2' => $image_2,
            'image_3' => $image_3,
            'publish_year' => $publish_year,
        ]);

        return view('book/thank-you');
    }

    // 編集
    public function edit(Request $request, $id){

        return view('book/edit');
    }

    // 詳細
    public function show(Request $request, $id){
        return view('book/show');
    }

    // 削除
    public function delete(Request $request, $id){

        return view('book/delete');
    }
}
