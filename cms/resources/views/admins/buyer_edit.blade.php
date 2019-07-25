@extends('layouts.layout')

@section('content')
<div class="row">
    <div class="col-md-12">
    @include('common.errors')
    <form action="{{ url('buyer/update') }}" method="POST">

        <!-- buyer_postcode -->
        <div class="form-group">
           <label for="buyer_postcode">郵便番号</label>
            <input type="text" id="buyer_postcode" name="buyer_postcode" class="form-control" value="{{$books->buyer_postcode}}"/>
        </div>
        <!--/ buyer_postcode -->
        
        <!-- buyer_address -->
        <div class="form-group">
           <label for="buyer_address">市区町村</label>
            <input type="text" id="buyer_address" name="buyer_address" class="form-control" value="{{$books->buyer_address}}"/>
        </div>
        <!--/ buyer_postcode -->

        <!-- buyer_address -->
        <div class="form-group">
           <label for="buyer_address">以降の住所</label>
            <input type="text" id="buyer_address2" name="buyer_address2" class="form-control" value="{{$books->buyer_address2}}"/>
        </div>
        <!--/ buyer_postcode -->

        <!-- item_name -->
        <div class="form-group">
           <label for="buyer_name">氏名</label>
           <input type="text" id="buyer_name" name="buyer_name" class="form-control" value="{{$books->buyer_name}}">
        </div>
        <!--/ item_name -->
        
        <!-- item_number -->
        <div class="form-group">
           <label for="buyer_age">年齢</label>
        <input type="text" id="buyer_age" name="buyer_age" class="form-control" value="{{$books->buyer_age}}">
        </div>
        <!--/ item_number -->

        <!-- item_amount -->
        <div class="form-group">
           <label for="buyer_email">Email</label>
        <input type="text" id="buyer_email" name="buyer_email" class="form-control" value="{{$books->buyer_email}}">
        </div>
        <!--/ item_amount -->
        

        
        <!-- Saveボタン/Backボタン -->
        <div class="well well-sm">
            <button type="submit" class="btn btn-primary">Save</button>
            <a class="btn btn-link pull-right" href="{{ url('/') }}">
                <i class="glyphicon glyphicon-backward"></i>  Back
            </a>
        </div>
        <!--/ Saveボタン/Backボタン -->
         
         <!-- id値を送信 -->
         <input type="hidden" name="id" value="{{$books->id}}" />
         <!--/ id値を送信 -->
         
         <!-- CSRF -->
         {{ csrf_field() }}
         <!--/ CSRF -->
        
         
    </form>
    </div>
</div>
@endsection