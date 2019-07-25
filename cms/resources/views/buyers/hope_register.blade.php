@extends('layouts.layout')
@section('content')

    <!-- Bootstrapの定形コード… -->
    <div class="card-body">
        <div class="card-title">
            希望条件登録
        </div>
        
        <!-- バリデーションエラーの表示に使用-->
    	@include('common.errors')
        <!-- バリデーションエラーの表示に使用-->

        <!-- 希望物件登録フォーム -->
        <form action="{{ url('hoperegister') }}" method="POST" class="form-horizontal">
            {{ csrf_field() }}

            <div class="form-group">
                <div class="col-sm-6">
                    職場最寄り駅<input type="text" name="hope_workstation" class="form-control">駅
                    通勤時間<input type="text" name="hope_comute" class="form-control">分
                    予算(物件価格)<input type="text" name="hope_budjet" class="form-control">万円
                    予算(月払)<input type="text" name="hope_payment" class="form-control">万円
                    間取り
                    <select name="hope_madori" class="form-control">
                      
                        <option value="1">1LDK</option>
                        <option value="2">2LDK</option>
                        <option value="3" selected="selected">3LDK</option>
                        <option value="4">4LDK以上</option>
                        
                    </select>
                    広さ(㎡)<input type="text" name="hope_width" class="form-control">㎡
                    新築or中古
                      <select name="hope_secondhand" class="form-control">
                        <option value="1" selected="selected">新築/中古 どちらでも</option>
                        <option value="2">新築希望</option>
                        <option value="3">中古希望</option>
                    </select>
                    マンションor戸建て
                    <select name="hope_mansion" class="form-control">
                        <option value="1"  selected="selected" >マンション/戸建 どちらでも</option>
                        <option value="2">マンション希望</option>
                        <option value="3">戸建て希望</option>
                    </select>

                    
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