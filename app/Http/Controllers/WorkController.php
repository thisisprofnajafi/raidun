<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Work;
use Illuminate\Database\Eloquent\Casts\Json;
use Illuminate\Http\Request;

class WorkController extends Controller
{

    public function create(Request $request)
    {

        $request->validate(
            [
                'title' => 'required',
                'title_ar' => 'required',
                'category' => 'required',
                'seoKey' => 'required',
                'seo_desc' => 'required',
                'type' => 'required',
                'date' => 'required',
                'url' => 'required',
                'content' => 'required',
                'tech' => 'required',
                'content_ar' => 'required',
            ]
        );
        $seoK = '';
        foreach (Json::decode($request->seoKey) as $value) {
            if ($seoK != '')
                $seoK .= ', ';
            $seoK .= $value['value'];
        }

        $type = '';
        foreach (Json::decode($request->type) as $value) {
            if ($type != '')
                $type .= ', ';
            $type .= $value['value'];
        }

        $tech = '';
        foreach (Json::decode($request->tech) as $value) {
            if ($tech != '')
                $tech .= ', ';
            $tech .= $value['value'];
        }


        $work = new Work();
        $work->thumb_path = 'empty';


        $file = request()->file('thumb');

        if ($file) {
            $fileName = time() . '_' . $file->getClientOriginalName();
            $filePath = $file->storeAs('uploads', $fileName, 'public');
            $file_path = '/storage/' . $filePath;
            $work->thumb_path = $file_path;
        }

        $work->title = $request->title;
        $work->title_ar = $request->title_ar;
        $work->seo_keyword = $seoK;
        $work->seo_description = $request->seo_desc;
        $work->type = $type;
        $work->date = $request->date;
        $work->url = $request->url;
        $work->content = $request->content;
        $work->tech = $tech;
        $work->content_ar = $request->content_ar;
        $cat = Category::find($request->category);
        $cat->works()->save($work);

        return back();
    }

    public function delete($id)
    {
        $work = Work::query()->where('id', $id)->first();

        $work->delete();

        return back();
    }


    public function edit(Request $request, $id)
    {

        return $request;
       $request->validate(
            [
                'title' => 'required',
                'title_ar' => 'required',
                'category' => 'required',
                'seoKey' => 'required',
                'seo_desc' => 'required',
                'type' => 'required',
                'date' => 'required',
                'url' => 'required',
                'content' => 'required',
                'tech' => 'required',
                'content_ar' => 'required',
            ]
        );
        return $request;


        $work = Work::query()->where($id)->first();

        $file = request()->file('thumb');

        if ($file) {
            $fileName = time() . '_' . $file->getClientOriginalName();
            $filePath = $file->storeAs('uploads', $fileName, 'public');
            $file_path = '/storage/' . $filePath;
            $work->thumb_path = $file_path;
        }
        $work->title = $request->title;
        $work->title_ar = $request->title_ar;
        $work->seo_keyword = $request->seoKey;
        $work->seo_description = $request->seo_desc;
        $work->type = $request->type;
        $work->date = $request->date;
        $work->url = $request->url;
        $work->content = $request->content;
        $work->tech = $request->tech;
        $work->content_ar = $request->content_ar;
        $work->thumb_path = 'empty';
        $work->category_id = $request->category;

        $work->save();

    }
}
