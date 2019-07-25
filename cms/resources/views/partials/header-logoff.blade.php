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
      <img alt="REOS" src="/img/logo.png" style="height: 20px;">
      </a>
    </div>
   
    <div class="collapse navbar-collapse" id="navbarEexample2">
      <ul class="nav navbar-nav">
      <li><a href="{{ route('register') }}">新規登録</a></li>
      <li><a href="{{ route('login') }}">ログイン</a></li>
      <li><a href="#">お問い合わせ</a></li>
      </ul>
    </div>
  </div>
</nav>