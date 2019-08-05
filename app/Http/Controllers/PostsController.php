<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

use App\Post;

class PostsController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }

   public function index(){
        return view('posts.index');
   }

   public function create(){
        return view('posts.create');
   }

   public function store(Request $request){
       if($request){
       $data = $request->validate([
        'caption'=>'required',
        'image'=>'required|image'
       ]);
       $data['user_id'] = auth()->user()->id;
       $imagepath = request('image')->store('uploads','public');

       $image = Image::make(public_path("storage/{$imagepath}"))->fit(800,800);
       $image->save();

       Post::create([
           'caption' => $data['caption'],
           'image' => $imagepath,
           'user_id' => $data['user_id']
       ]);
       
       //auth()->user()->posts()->create($data); //can use this single query instead of above two queries.

        return redirect('/profile/'.auth()->user()->id);
       }
   }

}
