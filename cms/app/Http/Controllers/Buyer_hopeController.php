<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Buyer_hope;
use Validator;
use Auth;

class Buyer_hopeController extends Controller
{
    
    // 登録希望内容表示
  
    public function hope_list()
    {
        // $buyer_hopes = Buyer_hope::all();
        $buyer_hopes = Buyer_hope::where('user_id', Auth::user()->id)->get();
        return view('layouts.home', [
        'buyer_hopes' => $buyer_hopes,
    ]);
    
    }
    
      
    public function hope_list_all()
    {
        $buyer_hopes = Buyer_hope::all();
        return view('buyers.hope_list', [
        'buyer_hopes' => $buyer_hopes,
    ]);
    
    }
    
    
        // 一致の更新画面
    public function buyer_hope_edit($user_id)
    {
        $buyer_hopes = Buyer_hope::where('user_id', Auth::user()->id)->first();
        return view('buyers.hope_edit', [
        'buyer_hopes' => $buyer_hopes
        ]);
    }
    
    
        
    //希望物件登録
    public function hoperegister(Request $request)
    {
    
    //
        //バリデーション
    $validator = Validator::make($request->all(), [
        'hope_workstation' => 'required|max:22',
        'hope_comute' => 'required|max:2',
        'hope_budjet' => 'max:5',
        'hope_payment' => 'max:2',
        
    ]);
    
    

    //バリデーション:エラー 
    if ($validator->fails()) {
        return redirect('/')
            ->withInput()
            ->withErrors($validator);
    }
    //以下に登録処理を記述（Eloquentモデル）


        // Eloquent モデル
        $buyer_hopes = new Buyer_hope;
        $buyer_hopes->user_id = Auth::user()->id;
        $buyer_hopes->hope_workstation = $request->hope_workstation;
        $buyer_hopes->hope_comute = $request->hope_comute;
        $buyer_hopes->hope_budjet = $request->hope_budjet;
        $buyer_hopes->hope_payment = $request->hope_payment;
        $buyer_hopes->hope_madori = $request->hope_madori;
        $buyer_hopes->hope_width = $request->hope_width;
        $buyer_hopes->hope_secondhand = $request->hope_secondhand;
        $buyer_hopes->hope_mansion = $request->hope_mansion;
        
        $buyer_hopes->save(); 
        return redirect('/');
    
    }
    
        
    //希望物件更新登録
    public function update(Request $request)
    {
    
    //
        //バリデーション
    $validator = Validator::make($request->all(), [
        'hope_workstation' => 'required|max:22',
        'hope_comute' => 'required|max:2',
        'hope_budjet' => 'max:5',
        'hope_payment' => 'max:2',
        
    ]);
    
    

    //バリデーション:エラー 
    if ($validator->fails()) {
        return redirect('/')
            ->withInput()
            ->withErrors($validator);
    }
    //以下に登録処理を記述（Eloquentモデル）


        // Eloquent モデル
        $buyer_hopes = Buyer_hope::where('user_id',Auth::user()->id)->find($request->id);
        $buyer_hopes->hope_workstation = $request->hope_workstation;
        $buyer_hopes->hope_comute = $request->hope_comute;
        $buyer_hopes->hope_budjet = $request->hope_budjet;
        $buyer_hopes->hope_payment = $request->hope_payment;
        $buyer_hopes->hope_madori = $request->hope_madori;
        $buyer_hopes->hope_width = $request->hope_width;
        $buyer_hopes->hope_secondhand = $request->hope_secondhand;
        $buyer_hopes->hope_mansion = $request->hope_mansion;
        
        $buyer_hopes->save(); 
        return redirect('/');
    
    }
    
    
            public function hope()
    {
        return view('buyers.hope_register');

    }
               

}
