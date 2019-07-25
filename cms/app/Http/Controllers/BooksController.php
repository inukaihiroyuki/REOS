<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Book;
use Validator;
use Auth;
use App\User;

class BooksController extends Controller
{
    //コンストラクタ（このクラスが呼ばれたら最初に処理をする）
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    
    public function getLogout(){
        Auth::logout();
        // return redirect()->route('login');
        return redirect('/');
    }
        
    public function index()
    {
        // $books = Book::where('user_id',Auth::user()->id)->find($user_id);
        return view('layouts.home');

    }

    //本ダッシュボード表示
    public function buyer_list()
    {
        $books = Book::orderBy('created_at', 'asc')->paginate(15);
        return view('admins.buyer_list', [
        'books' => $books
        ]);
        
     
    }
    
    //管理者権限でのバイヤー更新画面
    public function edit(Book $books)
    {
        return view('admins.buyer_edit', [
        'books' => $books
        ]);
    }

    // 一致の更新画面
    public function edit_buyer($user_id)
    {
        $buyer = Book::where('user_id',Auth::user()->id)->find($user_id);
        return view('buyers.buyer_register_edit', [
        'buyers' => $buyer
        ]);
    }
    
    
    //更新
    public function buyer_update(Request $request)
    {
    //バリデーション
    $validator = Validator::make($request->all(), [
        'id' => 'required',
        'buyer_name' => 'required|min:3|max:255',
        'buyer_age' => 'required|min:2|max:2',
        'buyer_email' => 'required|max:255',
        'buyer_postcode' => 'required|max:7',
        'buyer_address' => 'required|max:255',
        'buyer_address2' => 'required|max:255',
        
    ]);

    //バリデーション:エラー 
    if ($validator->fails()) {
        return redirect('/')
            ->withInput()
            ->withErrors($validator);
    }
    //以下に登録処理を記述（Eloquentモデル）

        // Eloquent モデル
        $books = Book::find($request->id);
        // $books = Book::where('user_id',Auth::user()->id)->find($request->id);
        $books->buyer_name = $request->buyer_name;
        $books->buyer_age = $request->buyer_age;
        $books->buyer_email = $request->buyer_email;
        $books->buyer_postcode = $request->buyer_postcode;
        $books->buyer_address = $request->buyer_address;
        $books->buyer_address2 = $request->buyer_address2;
        $books->save(); 
        return redirect('/');

    }
    
    //登録
    public function store(Request $request)
    {
    
    //
        //バリデーション
    $validator = Validator::make($request->all(), [
        'buyer_name' => 'required|min:3|max:255',
        'buyer_age' => 'required|min:2|max:2',
        'buyer_email' => 'required|max:255',
        'buyer_postcode' => 'required|max:7',
        'buyer_address' => 'required|max:255',
        'buyer_address2' => 'required|max:255',
        
    ]);
    
    

    //バリデーション:エラー 
    if ($validator->fails()) {
        return redirect('/')
            ->withInput()
            ->withErrors($validator);
    }
    //以下に登録処理を記述（Eloquentモデル）

        // Eloquent モデル
        $books = new Book;
        $books->user_id = Auth::user()->id;
        $books->buyer_name = $request->buyer_name;
        $books->buyer_age = $request->buyer_age;
        $books->buyer_email = $request->buyer_email;
        $books->buyer_postcode = $request->buyer_postcode;
        $books->buyer_address = $request->buyer_address;
        $books->buyer_address2 = $request->buyer_address2;
        $books->save(); 
        return redirect('/');
    
    }

    //削除処理
        public function destroy(Book $book)
        {
            $book->delete();
            return redirect('/');
        }    
        
        public function buyer_register()
        {
        return view('admins.buyer_register');        
        }
  
  
        //バイヤー登録画面呼び出し   
        public function buyer_regiview()
        {
        
        // $books = User::where('id',Auth::user()->id)->find($book_id);
        //{books}id 値を取得 => Book $books id 値の１レコード取得
        return view('buyers.buyer_register2');
        
        
        }
     

     
        //バイヤー登録
        public function buyer_regist(Request $request)
        {
        //バリデーション
        $validator = Validator::make($request->all(), [
            'id' => 'required',
            'buyer_name' => 'required|min:3|max:255',
            'buyer_age' => 'required|min:2|max:2',
            'buyer_email' => 'required|max:255',
            'buyer_postcode' => 'required|max:7',
            'buyer_address' => 'required|max:255',
            'buyer_address2' => 'required|max:255',
            
        ]);
    
        //バリデーション:エラー 
        if ($validator->fails()) {
            return redirect('/')
                ->withInput()
                ->withErrors($validator);
        }
        //以下に登録処理を記述（Eloquentモデル）
    
            // Eloquent モデル
            $books = Book::where('user_id',Auth::user()->id)->find($request->id);
            $books->buyer_name = $request->buyer_name;
            $books->buyer_age = $request->buyer_age;
            $books->buyer_email = $request->buyer_email;
            $books->buyer_postcode = $request->buyer_postcode;
            $books->buyer_address = $request->buyer_address;
            $books->buyer_address2 = $request->buyer_address2;
            $books->save(); 
            return redirect('/');
    
        }
    
}
