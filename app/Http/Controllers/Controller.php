<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\User;
use App\Models\Work;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    private $users = [
        ['mehdi', 'me.hosseini74@gmail.com', '123456'],
        ['abolfazl', 'thisisprofnajafi@gmail.com', '123456'],
    ];

    public function get_login()
    {
        return view('content.authentications.auth-login-basic');
    }

    public function login(Request $request)
    {

        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);


        $user = User::query()->where('email', $request->email)->first();
        if ($user) {
            if (Hash::check($request->password, $user->password)) {
                Auth::login($user);
                return redirect(route('dashboard'));
            }
            return redirect(route('admin login page'));
        }
        return redirect(route('admin login page'));

    }

    public function setup()
    {

        foreach ($this->users as $user) {

            $temp = new User();
            $temp->name = $user[0];
            $temp->email = $user[1];
            $temp->password = Hash::make($user[2]);

            $temp->save();
        }
        return redirect(route('front-landing'));
    }

    public function dashboard()
    {

        $categories = Category::all();
        $works = Work::with(['images', 'category'])->get();


        return view('content.pages.pages-page2')->with(
            [
                'categories' => $categories,
                'works' => $works,
            ]
        );
    }


    public function landingPage()
    {

        if (!session()->get('locale')){
            App::setLocale('en');
            session()->put('locale', 'en');
        }


        $categories = Category::with(['works'])->get();
        $works = Work::all();

        return view('front.landing')->with([
            'categories' => $categories,
            'works' => $works,
        ]);
    }


    public function workPage($id)
    {
        if (!session()->get('locale')){
            App::setLocale('en');
            session()->put('locale', 'en');
        }
        $project = Work::query()->where('id',$id)->first();
        $works = Work::all()->where('id','!=',$id)->where('category_id',$project->category_id);

        return view('front.project')->with([
            'project' => $project,
            'works' => $works,
        ]);
    }


    public function lang_change(Request $request)
    {


        if (session()->get('locale')){
            if (session()->get('locale') == 'en'){
                App::setLocale('ar');
                session()->put('locale', 'ar');
            }
            if (session()->get('locale') == 'ar'){
                App::setLocale('en');
                session()->put('locale', 'ar');
            }

            return back();
        }else{
                App::setLocale('ar');
                session()->put('locale', 'ar');
            return redirect(route('front-landing'));

        }
    }
}
