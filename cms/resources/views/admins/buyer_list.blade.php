
<!-- resources/views/books.blade.php -->
@extends('layouts.layout')
@section('content')

    <!-- Bootstrapの定形コード… -->
    <div class="card-body">
        <div class="card-title">
        </div>
        
        <!-- バリデーションエラーの表示に使用-->
    	@include('common.errors')
        <!-- バリデーションエラーの表示に使用-->


 <!-- 現在の本 -->
  @can('admin-higher')
  
  <div class="card-body">
        <div class="card-title">
            バイヤーリスト
        </div>
    
  
    @if (count($books) > 0)
        <div class="card-body">
            <div class="card-body">
                <table class="table table-striped task-table">
                    <!-- テーブルヘッダ -->
                    <thead>
                        <th>ID</th>
                        <th>氏名</th>
                        <th>年齢</th>
                        <th>Email</th>
                        <th>郵便番号</th>
                        <th>市区町村</th>
                        <th>以降の住所</th>
                    </thead>
                    <!-- テーブル本体 -->
                    <tbody>
                        @foreach ($books as $book)
                            <tr class="table-text">
                                
                                <!-- 本タイトル -->
                                <th>{{ $book->id }}</th>
                                    <td>{{ $book->buyer_name }}</td>
                                    <td>{{ $book->buyer_age }}</td>
                                    <td>{{ $book->buyer_email }}</td>
                                    <td>{{ $book->buyer_postcode }}</td>
                                    <td>{{ $book->buyer_address }}</td>
                                    <td>{{ $book->buyer_address2 }}</td>
                                    
                                
                                <!--バイヤー: 更新ボタン -->
                                <td>
                                    <form action="{{ url('buyer_edit/'.$book->id) }}" method="POST">
                                        {{ csrf_field() }}
                                        <button type="submit" class="btn btn-primary">
                                        更新
                                        </button>
                                    </form>
                                </td>

                                <!-- バイヤー: 削除ボタン -->
                                <td>
                                
                                    <form action="{{ url('book/'.$book->id) }}" method="POST">
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
                <div class="row">
                    <div class="col-md-4 offset-md-4">
                    {{ $books->links()}}
                    </div>
                </div>

        </div>
    @endif
    @endcan
@endsection
