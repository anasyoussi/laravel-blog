<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Setting; 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SettingController extends Controller
{
    public function update(Request $req, Setting $setting)
    {
        $data = [
            'image'     => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'facebook'  => 'nullable|string',
            'instagram' => 'nullable|string',
            'phone'     => 'nullable|numeric',
            'email'     => 'nullable|email',
        ];

        foreach(config('app.languages') as $key => $value)
        {
            $data[$key.'*.title']   = 'nullable|string';
            $data[$key.'*.content'] = 'nullable|string';
            $data[$key.'*.address'] = 'nullable|string';
        } 
        // dd($data) ;
        $validateData = $req->validate($data);   

        $setting->update($req->except('image', 'favicon'));

        if($req->hash('image')){
            $name = $req->file('image')->getClientOriginalName(); 
            $path = $req->file('image')->store('public/images');
            // $setting->update(['image'->$path.'/'.$name]);
        }

        dd($req->all()); 
        

        return redirect()->route('dashboard.settings'); 
        





        // Setting::create($req->all());
        // return response()->json($req->all());
    }
}
