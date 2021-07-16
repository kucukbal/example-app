<?php

namespace App\Http\Controllers;

use App\Models\User;
use Intervention\Image\Facades\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class ProfilesController extends Controller
{
    public function index(User $user)
    {
        // $user=User::findorFail($userid);
        $follows=(auth()->user()) ? auth()->user()->following->contains($user->id) : false;
        
        return view('profiles.index', compact('user', 'follows'));
    }
    public function edit(User $user)
    {
       $this->authorize('update',$user->profile);
        return view('profiles.edit', compact('user'));
    }
    public function update(User $user)
    {
        $this->authorize('update',$user->profile);
        $data=request()->validate(
            [
            'title'=> 'required',
            'discription'=> 'required',
            'url'=> 'url',
            'image'=>''
            ]
             );

        //dd($data);
        $imagepath='';
        if (request('image')){
            $imagepath=request('image')->store('profile','public');
            $image=Image::make(public_path("storage/{$imagepath}"))->fit(1000,1000);
            $image->save();
            $imageArray=['image'=>$imagepath];
        }
        auth()->user()->profile->update( array_merge(
            $data, $imageArray ?? []

        ));
        return redirect("/profile/{$user->id}");
    }
}