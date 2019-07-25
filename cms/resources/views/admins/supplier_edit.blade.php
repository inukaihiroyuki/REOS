@extends('layouts.layout')
@section('content')

    <!-- Bootstrapの定形コード… -->
    <div class="card-body">
        <div class="card-title">
            サプライヤー修正登録
        </div>
        
        <!-- バリデーションエラーの表示に使用-->
    	@include('common.errors')
        <!-- バリデーションエラーの表示に使用-->

        <!-- 希望物件登録フォーム -->
        <form action="{{ url('supplier/update') }}" method="POST" class="form-horizontal">

            <div class="form-group">
                <div class="col-sm-6">
                    会社名<input type="text" name="supplier_name" class="form-control" value="{{$suppliers->supplier_name}}">
                    支店名<input type="text" name="supplier_branch" class="form-control" value="{{$suppliers->supplier_branch}}">
                    email<input type="email" name="supplier_email" class="form-control" value="{{$suppliers->supplier_email}}">
                    TEL<input type="text" name="supplier_tel" class="form-control" value="{{$suppliers->supplier_tel}}">
                    郵便番号<input type="text" name="supplier_postcode" class="form-control" value="{{$suppliers->supplier_postcode}}">
                    <input type="button" id="postaddress" value="住所入力">	
                    住所1<input type="text" name="supplier_address" class="form-control" value="{{$suppliers->supplier_address}}">
                    住所2<input type="text" name="supplier_address2" class="form-control" value="{{$suppliers->supplier_address2}}">
                    登録番号<input type="text" name="supplier_license" class="form-control" value="{{$suppliers->supplier_license}}">
                    担当者<input type="text" name="supplier_rep" class="form-control" value="{{$suppliers->supplier_rep}}">
                
                    
                </div>
            </div>

             <!-- Saveボタン/Backボタン -->
            <div class="well well-sm">
                <button type="submit" class="btn btn-primary">Save</button>
                <a class="btn btn-link pull-right" href="{{ url('/') }}">
                <i class="glyphicon glyphicon-backward"></i>  Back
                </a>
            </div>
            <!--/ Saveボタン/Backボタン -->
         
             <!-- id値を送信 -->
             <input type="hidden" name="id" value="{{$suppliers->id}}" />
             <!--/ id値を送信 -->
         
             <!-- CSRF -->
             {{ csrf_field() }}
             <!--/ CSRF -->
        </form>
    </div>
    <!-- Book: 既に登録されてる本のリスト -->
    
    
<?php 
echo <<<EOM
<script type="text/javascript">

    //検索ボタンをクリックされたときに実行
    $("#postaddress").click(function () {
        //入力値をセット
        var param = {zipcode: $('#supplier_postcode').val()}
        //zipcloudのAPIのURL
        var send_url = "http://zipcloud.ibsnet.co.jp/api/search";
        $.ajax({
            type: "GET",
            cache: false,
            data: param,
            url: send_url,
            dataType: "jsonp",
            success: function (data) {
                //結果によって処理を振り分ける
                if (data.status == 200) {
                    //処理が成功したとき
                    //該当する住所を表示
                        var result = data.results[0];
                        console.log(data.results);
                        $("#pref").val(result.address1)
                        $("#city").val(result.address2)
                        $("#block").val(result.address3)
                } else {
                    //エラーだった時
                    //エラー内容を表示
                    alert(data.message); 
                }
            },
            error: function (XMLHttpRequest, textStatus, errorThrown) {
                console.log(XMLHttpRequest);
            }
        });
	});
	</script>
EOM;
?>	

@endsection