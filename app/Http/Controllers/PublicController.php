<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Announcement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PublicController extends Controller
{
   
   
    public function __construct()
    {
        $this->middleware('auth');
        
    }

    public function index()
    {
        $announcements = Announcement::orderBy('created_at','desc')->take(5)->get();
        return view('home',compact('announcements'));
    }

    public function newAnnouncement()
    {
        return view('announcement.new');
    }

    public function createAnnouncement(Request $request)
    {
        $a = new Announcement();
        $a->title = $request->input('title');
        $a->body = $request->input('body');
        $a->category_id = $request->input('category');
        $a->price = $request->input('price');
        $a->user_id = Auth::id();
        $a->save();
        return redirect()->route('thankyou');

    }

    public function thankyou()
    {
        return view('thankyou');
    }

    public function announcementsByCategory($name, $category_id)
    {
        $category = Category::find($category_id);
        $announcements = $category->announcements()->orderBy('created_at','desc')->paginate(5);
        return view('announcement.category', compact('category', 'announcements'));
    }
}
