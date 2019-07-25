<!-- resources/views/hopes.blade.php -->
@extends('layouts.layout')
@section('homescreen')

    <!-- Bootstrapの定形コード… -->
    <div class="card-body">
        <div class="card-title">
        ログイン前のホーム画面だよ。
        </div>

@endsection

@section('content')

    <!-- Bootstrapの定形コード… -->
    <div class="card-body">
        <div class="card-title">

        </div>

@if (isset( $buyer_hopes ))

        <div class="card-body">
            <div class="card-body">
                <table class="table table-striped task-table">
                    <!-- テーブルヘッダ -->
                    <thead>
                        <th>User_id</th>
                        <th>職場最寄り駅</th>
                        <th>通勤時間</th>
                        <th>予算(物件価格)</th>
                        <th>予算(月払)</th>
                        <th>間取り</th>
                        <th>広さ</th>
                        <th>新築or中古</th>
                        <th>マンションor戸建て</th>
                    </thead>
                    <!-- テーブル本体 -->
                    
                    
                    
                    <tbody>
                        @foreach ($buyer_hopes as $hope)
                            <tr class="table-text">
                              
                                <!-- 本タイトル -->
                                <th>{{ $hope->user_id }}</th>
                                <td>{{ $hope->hope_workstation }}</td>
                                <td>{{ $hope->hope_comute }}</td>
                                <td>{{ $hope->hope_budjet }}</td>
                                <td>{{ $hope->hope_payment }}</td>
                                <td>{{ $hope->hope_madori }}</td>
                                <td>{{ $hope->hope_width }}</td>
                                <td>{{ $hope->hope_secondhand }}</td>
                                <td>{{ $hope->hope_mansion }}</td>
                                    
                                
                            
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
             
        </div>


@else


    <p>希望条件登録していないよ。</p>

@endif
@endsection
