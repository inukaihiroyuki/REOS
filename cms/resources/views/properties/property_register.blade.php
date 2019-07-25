@extends('layouts.layout')
@section('content')

    <!-- Bootstrapの定形コード… -->
    <div class="card-body">
        <div class="card-title">
            物件登録
        </div>
        
        <!-- バリデーションエラーの表示に使用-->
    	@include('common.errors')
        <!-- バリデーションエラーの表示に使用-->

        <!-- 希望物件登録フォーム -->
        <form action="{{ url('property_register') }}" method="POST" class="form-horizontal">
            {{ csrf_field() }}

            <div class="form-group">
                <div class="col-sm-6">
                    物件名<input type="text" name="property_name" class="form-control">
                    最寄り駅1<input type="text" name="property_station1" class="form-control">駅
                    徒歩1<input type="text" name="property_walk1" class="form-control">分
                    最寄り駅2<input type="text" name="property_station2" class="form-control">駅
                    徒歩2<input type="text" name="property_walk2" class="form-control">分
                    最寄り駅3<input type="text" name="property_station3" class="form-control">駅
                    徒歩3<input type="text" name="property_walk3" class="form-control">分
                    価格<input type="text" name="property_plice" class="form-control">万円
                    間取り
                    <select name="property_madori" class="form-control">
                      
                        <option value="1">1LDK</option>
                        <option value="2">2LDK</option>
                        <option value="3" selected="selected">3LDK</option>
                        <option value="4">4LDK以上</option>
                        
                    </select>
                    広さ(㎡)<input type="text" name="property_width" class="form-control">㎡
                    郵便番号<input type="text" name="property_postcode" class="form-control">
                    住所1<input type="text" name="property_address" class="form-control">
                    住所2<input type="text" name="property_address2" class="form-control">
                    入居日<input type="date" name="property_start" class="form-control">
                    竣工日<input type="date" name="property_build" class="form-control">
                    戸数<input type="text" name="property_number" class="form-control">
                    新築or中古
                      <select name="property_secondhand" class="form-control">
                        <option value="2" selected="selected">新築</option>
                        <option value="3">中古</option>
                    </select>
                    マンションor戸建て
                    <select name="property_mansion" class="form-control">
                        <option value="2">マンション</option>
                        <option value="3">戸建て</option>
                    </select>
                    備考<input type="text" name="property_comment" class="form-control">
                
                    
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