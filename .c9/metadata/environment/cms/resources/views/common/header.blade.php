{"filter":false,"title":"header.blade.php","tooltip":"/cms/resources/views/common/header.blade.php","undoManager":{"mark":22,"position":22,"stack":[[{"start":{"row":0,"column":0},"end":{"row":9,"column":32},"action":"insert","lines":["<div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">","<ul class=\"nav navbar-nav navbar-right\">","@if(Auth::check())","<li><a href=\"{{ route('user.logout') }}\">ログアウト</a></li>","@else","<li><a href=\"{{route('user.signup')}}\"><i class=\"fa fa-shopping-cart\" aria-hidden=\"true\"></i> 新規登録</a></li>","<li><a href=\"{{route('user.signin')}}\"><i class=\"fa fa-shopping-cart\" aria-hidden=\"true\"></i> ログイン</a></li>","@end","</ul>","</div><!-- /.navbar-collapse -->"],"id":1}],[{"start":{"row":0,"column":0},"end":{"row":1,"column":0},"action":"insert","lines":["",""],"id":2}],[{"start":{"row":7,"column":22},"end":{"row":7,"column":23},"action":"remove","lines":["u"],"id":3},{"start":{"row":7,"column":22},"end":{"row":7,"column":23},"action":"remove","lines":["s"]},{"start":{"row":7,"column":22},"end":{"row":7,"column":23},"action":"remove","lines":["e"]},{"start":{"row":7,"column":22},"end":{"row":7,"column":23},"action":"remove","lines":["r"]},{"start":{"row":7,"column":22},"end":{"row":7,"column":23},"action":"remove","lines":["."]}],[{"start":{"row":7,"column":22},"end":{"row":7,"column":23},"action":"remove","lines":["s"],"id":4},{"start":{"row":7,"column":22},"end":{"row":7,"column":23},"action":"remove","lines":["i"]},{"start":{"row":7,"column":22},"end":{"row":7,"column":23},"action":"remove","lines":["g"]},{"start":{"row":7,"column":22},"end":{"row":7,"column":23},"action":"remove","lines":["n"]}],[{"start":{"row":7,"column":22},"end":{"row":7,"column":23},"action":"insert","lines":["l"],"id":5},{"start":{"row":7,"column":23},"end":{"row":7,"column":24},"action":"insert","lines":["o"]},{"start":{"row":7,"column":24},"end":{"row":7,"column":25},"action":"insert","lines":["g"]}],[{"start":{"row":7,"column":22},"end":{"row":7,"column":25},"action":"remove","lines":["log"],"id":6},{"start":{"row":7,"column":22},"end":{"row":7,"column":28},"action":"insert","lines":["logout"]}],[{"start":{"row":7,"column":27},"end":{"row":7,"column":28},"action":"remove","lines":["t"],"id":7},{"start":{"row":7,"column":26},"end":{"row":7,"column":27},"action":"remove","lines":["u"]},{"start":{"row":7,"column":25},"end":{"row":7,"column":26},"action":"remove","lines":["o"]}],[{"start":{"row":6,"column":32},"end":{"row":6,"column":33},"action":"remove","lines":["p"],"id":8},{"start":{"row":6,"column":31},"end":{"row":6,"column":32},"action":"remove","lines":["u"]},{"start":{"row":6,"column":30},"end":{"row":6,"column":31},"action":"remove","lines":["n"]},{"start":{"row":6,"column":29},"end":{"row":6,"column":30},"action":"remove","lines":["g"]},{"start":{"row":6,"column":28},"end":{"row":6,"column":29},"action":"remove","lines":["i"]},{"start":{"row":6,"column":27},"end":{"row":6,"column":28},"action":"remove","lines":["s"]},{"start":{"row":6,"column":26},"end":{"row":6,"column":27},"action":"remove","lines":["."]},{"start":{"row":6,"column":25},"end":{"row":6,"column":26},"action":"remove","lines":["r"]},{"start":{"row":6,"column":24},"end":{"row":6,"column":25},"action":"remove","lines":["e"]},{"start":{"row":6,"column":23},"end":{"row":6,"column":24},"action":"remove","lines":["s"]},{"start":{"row":6,"column":22},"end":{"row":6,"column":23},"action":"remove","lines":["u"]}],[{"start":{"row":6,"column":22},"end":{"row":6,"column":23},"action":"insert","lines":["r"],"id":9},{"start":{"row":6,"column":23},"end":{"row":6,"column":24},"action":"insert","lines":["e"]}],[{"start":{"row":6,"column":24},"end":{"row":6,"column":25},"action":"insert","lines":["g"],"id":10},{"start":{"row":6,"column":25},"end":{"row":6,"column":26},"action":"insert","lines":["i"]}],[{"start":{"row":6,"column":25},"end":{"row":6,"column":26},"action":"remove","lines":["i"],"id":11},{"start":{"row":6,"column":24},"end":{"row":6,"column":25},"action":"remove","lines":["g"]},{"start":{"row":6,"column":23},"end":{"row":6,"column":24},"action":"remove","lines":["e"]},{"start":{"row":6,"column":22},"end":{"row":6,"column":23},"action":"remove","lines":["r"]}],[{"start":{"row":6,"column":22},"end":{"row":6,"column":23},"action":"insert","lines":["r"],"id":12},{"start":{"row":6,"column":23},"end":{"row":6,"column":24},"action":"insert","lines":["e"]},{"start":{"row":6,"column":24},"end":{"row":6,"column":25},"action":"insert","lines":["s"]},{"start":{"row":6,"column":25},"end":{"row":6,"column":26},"action":"insert","lines":["i"]}],[{"start":{"row":6,"column":25},"end":{"row":6,"column":26},"action":"remove","lines":["i"],"id":13},{"start":{"row":6,"column":24},"end":{"row":6,"column":25},"action":"remove","lines":["s"]}],[{"start":{"row":6,"column":24},"end":{"row":6,"column":25},"action":"insert","lines":["s"],"id":14}],[{"start":{"row":6,"column":24},"end":{"row":6,"column":25},"action":"remove","lines":["s"],"id":15}],[{"start":{"row":6,"column":24},"end":{"row":6,"column":25},"action":"insert","lines":["g"],"id":16},{"start":{"row":6,"column":25},"end":{"row":6,"column":26},"action":"insert","lines":["i"]},{"start":{"row":6,"column":26},"end":{"row":6,"column":27},"action":"insert","lines":["s"]},{"start":{"row":6,"column":27},"end":{"row":6,"column":28},"action":"insert","lines":["t"]},{"start":{"row":6,"column":28},"end":{"row":6,"column":29},"action":"insert","lines":["e"]},{"start":{"row":6,"column":29},"end":{"row":6,"column":30},"action":"insert","lines":["r"]}],[{"start":{"row":6,"column":24},"end":{"row":6,"column":25},"action":"remove","lines":["g"],"id":17}],[{"start":{"row":6,"column":24},"end":{"row":6,"column":25},"action":"insert","lines":["s"],"id":18}],[{"start":{"row":6,"column":28},"end":{"row":6,"column":29},"action":"insert","lines":["\\"],"id":19},{"start":{"row":6,"column":29},"end":{"row":6,"column":30},"action":"insert","lines":["\\"]}],[{"start":{"row":6,"column":29},"end":{"row":6,"column":30},"action":"remove","lines":["\\"],"id":20},{"start":{"row":6,"column":28},"end":{"row":6,"column":29},"action":"remove","lines":["\\"]}],[{"start":{"row":4,"column":27},"end":{"row":4,"column":28},"action":"remove","lines":["."],"id":24},{"start":{"row":4,"column":26},"end":{"row":4,"column":27},"action":"remove","lines":["r"]},{"start":{"row":4,"column":25},"end":{"row":4,"column":26},"action":"remove","lines":["e"]},{"start":{"row":4,"column":24},"end":{"row":4,"column":25},"action":"remove","lines":["s"]},{"start":{"row":4,"column":23},"end":{"row":4,"column":24},"action":"remove","lines":["u"]}],[{"start":{"row":4,"column":23},"end":{"row":5,"column":0},"action":"insert","lines":["",""],"id":25}],[{"start":{"row":4,"column":23},"end":{"row":5,"column":0},"action":"remove","lines":["",""],"id":26}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":10,"column":32},"end":{"row":10,"column":32},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1561989081813,"hash":"52dc27cd33ae683f6a63063be9d9d2df4765361f"}