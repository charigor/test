<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Debugbar;
use App\Models\Movie;
use App\Models\Book;
use App\Models\Like;
use Illuminate\Support\Facades\Notification;
use  App\Notifications\InvoicePaid;
use Illuminate\Support\Facades\Cache;
use App\Jobs\UserJobs;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function search()
    {
        return User::where('name','Like','%'.request('query').'%')->get();
    }
    public function index()
    {
        $users = Cache::remember('users', now()->addMinutes(1), function() {
          return  User::paginate(100);

        });

        Notification::send(User::get(), new InvoicePaid('invoice'));
        $movies = Movie::get();
        $books = Book::get();
//        Cache::forget('index.user');
        return view('home',compact('users','movies','books'));
    }
    public function delete()
    {
        User::find(request('user_id'))->delete();
        UserJobs::dispatch();

//        Cache::forget('index.user');
    }
    public function like($id)
    {

        $users = User::paginate(100);
        $movies = Movie::get();
        $books = Book::get();
        return view('home',compact('users','movies','books'));
    }
}
