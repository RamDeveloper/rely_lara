<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Intervention\Image\Facades\Image;

class ProfilesController extends Controller
{
    public function index($user)
    {
        $follows = (auth()->user()) ? auth()->user()->following->contains($user) : false;
        
        $user = User::findOrFail($user);
        return view('profiles.index',compact('user','follows'));
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
