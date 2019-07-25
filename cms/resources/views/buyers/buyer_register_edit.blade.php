<!--バイヤーが自身の個人情報を登録・更新する画面-->

@extends('layouts.layout')
@section('content')

    <!-- Bootstrapの定形コード… -->
    <div class="card-body">
        <div class="card-title">
            登録情報の変更
        </div>
        
        <!-- バリデーションエラーの表示に使用-->
    	@include('common.errors')
        <!-- バリデーションエラーの表示に使用-->

        <!-- 本登録フォーム -->
        <form action="{{ url('books') }}" method="POST" class="form-horizontal">
            {{ csrf_field() }}

            <!-- 本のタイトル -->
            <div class="form-group">
                <div class="col-sm-6">
                    郵便番号<input type="text" name="buyer_postcode" class="form-control">
                    市区町村<input type="text" name="buyer_address" class="form-control">
                    以降の住所<input type="text" name="buyer_address2" class="form-control">
                    氏名<input type="text" name="buyer_name" class="form-control">
                    年齢<input type="text" name="buyer_age" class="form-control">
                    Email<input type="text" name="buyer_email" class="form-control">

                    
                </div>
            </div>

            <!-- 本 登録ボタン -->
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-primary">
                        Save
                    </button>
                </div>
            </div>
        </form>
    </div>
    <!-- Book: 既に登録されてる本のリスト -->

@endsection