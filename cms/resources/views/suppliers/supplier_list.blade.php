 @extends('layouts.layout')
@section('content')

 
  <div class="card-body">
            <div class="card-body">
                <table class="table table-striped task-table">
                    <!-- テーブルヘッダ -->
                    <thead>
                        <th>User_id</th>
                        <th>会社名</th>
                        <th>支店名</th>
                        <th>email</th>
                        <th>TEL</th>
                        <th>郵便番号</th>
                        <th>住所1</th>
                        <th>住所2　</th>
                        <th>登録番号</th>
                        <th>担当者</th>
                    </thead>
                    <!-- テーブル本体 -->
                    
                    
                    
                    <tbody>
                        @foreach ($suppliers as $supplier)
                            <tr class="table-text">
                              
                                <!-- 本タイトル -->
                                <th>{{ $supplier->user_id }}</th>
                                <td>{{ $supplier->supplier_name }}</td>
                                <td>{{ $supplier->supplier_branch }}</td>
                                <td>{{ $supplier->supplier_email }}</td>
                                <td>{{ $supplier->supplier_tel}}</td>
                                <td>{{ $supplier->supplier_postcode }}</td>
                                <td>{{ $supplier->supplier_address }}</td>
                                <td>{{ $supplier->supplier_address2 }}</td>
                                <td>{{ $supplier->supplier_license }}</td>
                                <td>{{ $supplier->supplier_rep }}</td>
                                    
                              @can('admin-higher')
    
                                <!-- 本: 更新ボタン -->
                                <td>
                                    <form action="{{ url('supplier_edit/'.$supplier->id) }}" method="POST">
                                        {{ csrf_field() }}
                                        <button type="submit" class="btn btn-primary">
                                        更新
                                        </button>
                                    </form>
                                </td>

                                <!-- 本: 削除ボタン -->
                                <td>
                                
                                    <form action="{{ url('supplier/'.$supplier->id) }}" method="POST">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                        <button type="submit" class="btn btn-danger">削除</button>
                                     </form>
                                </td>
                              
                              @endcan

                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
             
        </div>
@endsection