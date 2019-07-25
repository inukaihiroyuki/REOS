<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Supplier;
use Validator;
use Auth;
use App\User;

class SupplierController extends Controller
{
            
    public function index()
    {
        $suppliers = Supplier::all();
        return view('suppliers.supplier_list', [
        'suppliers' => $suppliers,
        ]);
    }
    
    public function supplier_regiview()
    {
        return view('suppliers.supplier_register');

    }
    
    
    //管理者権限でのサプライヤー更新画面
    public function edit(Supplier $suppliers)
    {
        return view('admins.supplier_edit', [
        'suppliers' => $suppliers
        ]);
    }



    //サプライヤー登録
    public function supplier_register(Request $request)
    {
    
    //
        //バリデーション
    $validator = Validator::make($request->all(), [
        'supplier_name' => 'required',
        'supplier_email' => 'required',
        'supplier_tel' => 'required|max:11',
        'supplier_postcode' => 'required',
        'supplier_address' => 'required|max:7',
        'supplier_address2' => 'required',
        'supplier_license' => 'required',
        
        
    ]);
    
    

    //バリデーション:エラー 
    if ($validator->fails()) {
        return redirect('/')
            ->withInput()
            ->withErrors($validator);
    }
    //以下に登録処理を記述（Eloquentモデル）


        // Eloquent モデル
        $suppliers = new Supplier;
        $suppliers->user_id = Auth::user()->id;
        $suppliers->supplier_name = $request->supplier_name;
        $suppliers->supplier_branch = $request->supplier_branch;
        $suppliers->supplier_email = $request->supplier_email;
        $suppliers->supplier_tel = $request->supplier_tel;
        $suppliers->supplier_postcode = $request->supplier_postcode;
        $suppliers->supplier_address = $request->supplier_address;
        $suppliers->supplier_address2 = $request->supplier_address2;
        $suppliers->supplier_license = $request->supplier_license;
        $suppliers->supplier_rep = $request->supplier_rep;

        $suppliers->save(); 
        return redirect('/');
    
    }
    
    //サプライヤー更新
    public function update(Request $request)
    {
    
    //
        //バリデーション
    $validator = Validator::make($request->all(), [
        'id' => 'required',
        'supplier_name' => 'required',
        'supplier_email' => 'required',
        'supplier_tel' => 'required|max:11',
        'supplier_postcode' => 'required',
        'supplier_address' => 'required|max:7',
        'supplier_address2' => 'required',
        'supplier_license' => 'required',
    
    ]);
    
    //バリデーション:エラー 
    if ($validator->fails()) {
        return redirect('/')
            ->withInput()
            ->withErrors($validator);
    }
    //以下に登録処理を記述（Eloquentモデル）


        // Eloquent モデル
        $suppliers = Supplier::find($request->id);
        // $suppliers->user_id = Auth::user()->id;
        $suppliers->supplier_name = $request->supplier_name;
        $suppliers->supplier_branch = $request->supplier_branch;
        $suppliers->supplier_email = $request->supplier_email;
        $suppliers->supplier_tel = $request->supplier_tel;
        $suppliers->supplier_postcode = $request->supplier_postcode;
        $suppliers->supplier_address = $request->supplier_address;
        $suppliers->supplier_address2 = $request->supplier_address2;
        $suppliers->supplier_license = $request->supplier_license;
        $suppliers->supplier_rep = $request->supplier_rep;
        $suppliers->save(); 
        return redirect('/');
        }
    
    //削除処理
        public function destroy(Supplier $supplier)
        {
            $supplier->delete();
            return redirect('/');
        }    
        
         
}
