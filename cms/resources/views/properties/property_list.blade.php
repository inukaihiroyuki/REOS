 @extends('layouts.layout')
@section('content')

 
  <div class="card-body">
            <div class="card-body">
                <table class="table table-striped task-table">
                    <!-- テーブルヘッダ -->
                    <thead>
                        <th>id</th>
                        <th>user_id</th>
                        <th>物件名</th>
                        <th>最寄り駅1</th>
                        <th>駅徒歩</th>
                        <th>最寄り駅2</th>
                        <th>駅徒歩</th>
                        <th>最寄り駅3</th>
                        <th>駅徒歩</th>
                        <th>物件価格</th>
                        <th>間取り</th>
                        <th>広さ</th>
                        <th>郵便番号</th>
                        <th>住所1</th>
                        <th>住所2</th>
                        <th>入居日</th>
                        <th>竣工日</th>
                        <th>戸数</th>
                        <th>新築/中古</th>
                        <th>マンション/戸建</th>
                        <th>備考</th>
                    </thead>
                    <!-- テーブル本体 -->
                    
                    
                    
                    <tbody>
                        @foreach ($property_list as $property)
                            <tr class="table-text">
                              
                                <!-- 本タイトル -->
                                <th>{{ $property->id }}</th>
                                <th>{{ $property->user_id }}</th>
                                <th>{{ $property->property_name }}</th>
                                <th>{{ $property->property_station1 }}</th>
                                <th>{{ $property->property_walk1 }}</th>
                                <th>{{ $property->property_station2 }}</th>
                                <th>{{ $property->property_walk2 }}</th>
                                <th>{{ $property->property_station3 }}</th>
                                <th>{{ $property->property_walk3 }}</th>
                                <th>{{ $property->property_plice }}</th>
                                <th>{{ $property->property_madori }}</th>
                                <th>{{ $property->property_width }}</th>
                                <th>{{ $property->property_postcode }}</th>
                                <th>{{ $property->property_address }}</th>
                                <th>{{ $property->property_address2 }}</th>
                                <th>{{ $property->property_start }}</th>
                                <th>{{ $property->property_build }}</th>
                                <th>{{ $property->property_number }}</th>
                                <th>{{ $property->property_secondhand }}</th>
                                <th>{{ $property->property_mansion }}</th>
                                <th>{{ $property->property_comment }}</th>
                                
                                        
                                
                                <!-- 本: 更新ボタン -->
                                <td>
                                    <form action="{{ url('property_edit/'.$property->id) }}" method="POST">
                                        {{ csrf_field() }}
                                        <button type="submit" class="btn btn-primary">
                                        更新
                                        </button>
                                    </form>
                                </td>

                                <!-- 本: 削除ボタン -->
                                <td>
                                
                                    <form action="{{ url('property/'.$property->id) }}" method="POST">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                        <button type="submit" class="btn btn-danger">削除</button>
                                     </form>


                                </td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
             
        </div>
@endsection