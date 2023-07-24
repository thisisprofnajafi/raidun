<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function create(Request $request){


        $request->validate(
            [
                'cat_title'=>'required',
                'cat_title_ar'=>'required',
            ]
        );


        $category = new Category();
        $category->title = $request->cat_title;
        $category->title_ar = $request->cat_title_ar;

        $category->save();

        return back();

    }

    public function delete($id){
        $cat = Category::query()->where('id',$id)->first();

        $cat->delete();

        return back();

    }

    public function edit(Request $request,$id){
        $request->validate(
            [
                'cat_title'=>'required',
                'cat_title_ar'=>'required',
            ]
        );

        $cat = Category::query()->where('id',$id)->first();

        $cat->title = $request->cat_title;
        $cat->title_ar = $request->cat_title_ar;

        $cat->save();
        return back();


    }
}
