<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Property;
use Validator;
use Auth;
use App\User;

class PropertyController extends Controller
{
    
        
    public function index()
    {
        $property_list = Property::all();
        return view('properties.property_list', [
        'property_list' => $property_list,
        ]);
    }
    
    public function property_regiview()
    {
        return view('properties.property_register');

    }
         


    //希望物件登録
    public function property_register(Request $request)
    {
    
    //
        //バリデーション
    $validator = Validator::make($request->all(), [
        'property_name' => 'required',
        'property_station1' => 'required|max:22',
        'property_walk1' => 'required|max:2',
        'property_plice' => 'required|max:5',
        'property_madori' => 'required',
        'property_width' => 'required|max:6',
        'property_secondhand' => 'required',
        'property_mansion' => 'required',
        
        
    ]);
    
    

    //バリデーション:エラー 
    if ($validator->fails()) {
        return redirect('/')
            ->withInput()
            ->withErrors($validator);
    }
    //以下に登録処理を記述（Eloquentモデル）


        // Eloquent モデル
        $properties = new Property;
        $properties->user_id = Auth::user()->id;
        $properties->property_name = $request->property_name;
        $properties->property_station1 = $request->property_station1;
        $properties->property_walk1 = $request->property_walk1;
        $properties->property_station2 = $request->property_station2;
        $properties->property_walk2 = $request->property_walk2;
        $properties->property_station3 = $request->property_station3;
        $properties->property_walk3 = $request->property_walk3;
        $properties->property_plice = $request->property_plice;
        $properties->property_madori = $request->property_madori;
        $properties->property_width = $request->property_width;
        $properties->property_postcode = $request->property_postcode;
        $properties->property_address = $request->property_address;
        $properties->property_address2 = $request->property_address2;
        $properties->property_start = $request->property_start;
        $properties->property_build = $request->property_build;
        $properties->property_number = $request->property_number;
        $properties->property_secondhand = $request->property_secondhand;
        $properties->property_mansion = $request->property_mansion;
        $properties->property_comment = $request->property_comment;

        $properties->save(); 
        return redirect('/');
    
    }
    
    
    
}
