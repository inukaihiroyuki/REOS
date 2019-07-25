<!-- header & grobal navi -->
<nav class="navbar navbar-default" style="background-color: #FFFFFF;">
  <div class="container-fluid">
  <div class="navbar-header">
  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbarEexample2">
  <span class="sr-only">Toggle navigation</span>
  <span class="icon-bar"></span>
  <span class="icon-bar"></span>
  <span class="icon-bar"></span>
  </button>
  <a class="navbar-brand" href="/">
  <img alt="REOS" src="/img/logo.png" style="height: 20px;"></a>
  <a class="navbar-brand">{{ Auth::user()->name }}さん</a>
  </div>
 
  <div class="collapse navbar-collapse" id="navbarEexample2">
  <ul class="nav navbar-nav">
  @can('admin-higher')
  <li>[管理者] </li>
  <li><a href="/buyer_list">バイヤーリスト</a></li>
  <li><a href="/buyer_register">バイヤー登録</a></li>
  <li><a href="supplier">サプライヤーリスト</a></li>
  <li><a href="supplier_register">サプライヤー登録</a></li>
  <li>[/管理者]</li>
  @endcan
  
  @can('buyer')
  <li>[バイヤー]</li>
  @if (isset( $buyer_hopes->id ))
    <li><a href="{{ url('hopesedit/'.$buyer_hopes->id) }}">希望条件変更</a></li>
  @else
    <li><a href="/hope">希望条件登録</a></li>
  @endif
  
  @if (isset( $books ))
    <li><a href="/buyer_register_edit/{books}">個人情報変更</a></li>
  @else
    <li><a href="/buyer_register2">個人情報登録</a></li>
  @endif

  <li><a href="/property">物件一覧</a></li>
  <li><a href="#">進行中</a></li>
  <li>[/バイヤー]</li>
  @endcan
  
  @can('supplier')
  <li>[サプライヤー]</li>
  <li><a href="/hope_list">希望物件リスト</a></li>
  <li><a href="/property_register">物件登録</a></li>
  <li><a href="/property">登録物件一覧</a></li>
  <li><a href="#">進行中</a></li>
  <li><a href="/supplier_register">貴社情報登録・変更</a></li>
  <li>[/サプライヤー]</li>
  @endcan

  <li><a href="{{ route('user.logout') }}">ログアウト</a></li>
  <li><a href="#">お問い合わせ</a></li>
 
  
  

  
  </ul>
  </div>
  </div>
</nav>