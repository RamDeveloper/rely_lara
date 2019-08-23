<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Cache;

class ProfilesController extends Controller
{
    public function index($user)
    {
        $follows = (auth()->user()) ? auth()->user()->following->contains($user) : false;
        // dd($follows);
        $user = User::findOrFail($user);
        // $postsCount = Cache::remember(
        //     'count.post.'.$user->id, 
        //     now()->addSeconds(30) ,
        //     function() use ($user){
        //       $user->posts->count();
        // });
        $postsCount = $user->posts->count();
        $followersCount = $user->profile->followers->count();
        $followingsCount = $user->following->count();
        
        return view('profiles.index',compact('user','follows','postsCount','followersCount','followingsCount'));
    }

    public function edit(User $user)
    {
        $this->authorize('update',$user->profile);
        return view('profiles.edit',compact('user'));
    }
    
    public function update(User $user)
    {
        $this->authorize('update',$user->profile);
        $data = request()->validate([
            'title'=>'required',
            'description'=>'required',
            'url'=>'url',
            'image'=>''
           ]);

        if(request('image')){
            $imagepath = request('image')->store('uploads','public');
            $image = Image::make(public_path("storage/{$imagepath}"))->fit(600,600);
            $image->save();
            auth()->user()->profile->update(array_merge(
                $data,
                ['image' => $imagepath]
            ));
        }else{
            auth()->user()->profile->update($data);
        }
        return redirect("/profile/{$user->id}");
    }

}
