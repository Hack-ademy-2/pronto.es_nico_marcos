<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use Illuminate\Http\Request;

class PublicController extends Controller
{
   
   
    public function __construct()
    {
        $this->middleware('auth');
        
    }

    public function index()
    {
        return view('home');
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
        $a->save();
        return redirect()->route('home');

    }
}
