@extends('layouts.layout')
@section('content')

    <!-- Bootstrapの定形コード… -->
    <div class="card-body">
        <div class="card-title">
            サプライヤー登録
        </div>
        
        <!-- バリデーションエラーの表示に使用-->
    	@include('common.errors')
        <!-- バリデーションエラーの表示に使用-->

        <!-- 希望物件登録フォーム -->
        <form action="{{ url('supplier_register') }}" method="POST" class="form-horizontal">
            {{ csrf_field() }}

            <div class="form-group">
                <div class="col-sm-6">
                    会社名<input type="text" name="supplier_name" class="form-control">
                    支店名<input type="text" name="supplier_branch" class="form-control">
                    email<input type="email" name="supplier_email" class="form-control">
                    TEL<input type="text" name="supplier_tel" class="form-control">
                    郵便番号<input type="text" name="supplier_postcode" class="form-control">
                    <input type="button" id="postaddress" value="住所入力">	
                    住所1<input type="text" name="supplier_address" class="form-control">
                    住所2<input type="text" name="supplier_address2" class="form-control">
                    登録番号<input type="text" name="supplier_license" class="form-control">
                    担当者<input type="text" name="supplier_rep" class="form-control">
                
                    
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