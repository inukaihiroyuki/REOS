{"changed":true,"filter":false,"title":"buyer_edit.blade.php","tooltip":"/cms/resources/views/admins/buyer_edit.blade.php","value":"@extends('layouts.layout')\n\n@section('content')\n<div class=\"row\">\n    <div class=\"col-md-12\">\n    @include('common.errors')\n    <form action=\"{{ url('buyer/update') }}\" method=\"POST\">\n\n        <!-- buyer_postcode -->\n        <div class=\"form-group\">\n           <label for=\"buyer_postcode\">郵便番号</label>\n            <input type=\"text\" id=\"buyer_postcode\" name=\"buyer_postcode\" class=\"form-control\" value=\"{{$books->buyer_postcode}}\"/>\n        </div>\n        <!--/ buyer_postcode -->\n        \n        <!-- buyer_address -->\n        <div class=\"form-group\">\n           <label for=\"buyer_address\">市区町村</label>\n            <input type=\"text\" id=\"buyer_address\" name=\"buyer_address\" class=\"form-control\" value=\"{{$books->buyer_address}}\"/>\n        </div>\n        <!--/ buyer_postcode -->\n\n        <!-- buyer_address -->\n        <div class=\"form-group\">\n           <label for=\"buyer_address\">以降の住所</label>\n            <input type=\"text\" id=\"buyer_address2\" name=\"buyer_address2\" class=\"form-control\" value=\"{{$books->buyer_address2}}\"/>\n        </div>\n        <!--/ buyer_postcode -->\n\n        <!-- item_name -->\n        <div class=\"form-group\">\n           <label for=\"buyer_name\">氏名</label>\n           <input type=\"text\" id=\"buyer_name\" name=\"buyer_name\" class=\"form-control\" value=\"{{$books->buyer_name}}\">\n        </div>\n        <!--/ item_name -->\n        \n        <!-- item_number -->\n        <div class=\"form-group\">\n           <label for=\"buyer_age\">年齢</label>\n        <input type=\"text\" id=\"buyer_age\" name=\"buyer_age\" class=\"form-control\" value=\"{{$books->buyer_age}}\">\n        </div>\n        <!--/ item_number -->\n\n        <!-- item_amount -->\n        <div class=\"form-group\">\n           <label for=\"buyer_email\">Email</label>\n        <input type=\"text\" id=\"buyer_email\" name=\"buyer_email\" class=\"form-control\" value=\"{{$books->buyer_email}}\">\n        </div>\n        <!--/ item_amount -->\n        \n\n        \n        <!-- Saveボタン/Backボタン -->\n        <div class=\"well well-sm\">\n            <button type=\"submit\" class=\"btn btn-primary\">Save</button>\n            <a class=\"btn btn-link pull-right\" href=\"{{ url('/') }}\">\n                <i class=\"glyphicon glyphicon-backward\"></i>  Back\n            </a>\n        </div>\n        <!--/ Saveボタン/Backボタン -->\n         \n         <!-- id値を送信 -->\n         <input type=\"hidden\" name=\"id\" value=\"{{$books->id}}\" />\n         <!--/ id値を送信 -->\n         \n         <!-- CSRF -->\n         {{ csrf_field() }}\n         <!--/ CSRF -->\n         \n    </form>\n    </div>\n</div>\n@endsection","undoManager":{"mark":1,"position":-1,"stack":[[{"start":{"row":55,"column":62},"end":{"row":55,"column":65},"action":"remove","lines":["buy"],"id":2},{"start":{"row":55,"column":62},"end":{"row":55,"column":72},"action":"insert","lines":["buyer_list"]}],[{"start":{"row":55,"column":62},"end":{"row":55,"column":63},"action":"insert","lines":["b"],"id":2},{"start":{"row":55,"column":63},"end":{"row":55,"column":64},"action":"insert","lines":["u"]},{"start":{"row":55,"column":64},"end":{"row":55,"column":65},"action":"insert","lines":["y"]}]]},"ace":{"folds":[],"scrolltop":659,"scrollleft":0,"selection":{"start":{"row":54,"column":32},"end":{"row":54,"column":32},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":12,"state":"start","mode":"ace/mode/php"}},"timestamp":1563900684136}