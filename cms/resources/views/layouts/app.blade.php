 <!--resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="ja">
<head>
<title>Book List</title>
 <!--CSS と JavaScript -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="/css/sticky-footer.css" rel="stylesheet" media="screen">
</head>
<body>
        @include('partials.header-logoff')
    <!--<div class="container">-->
    <!--    <nav class="navbar navbar-default">-->
         <!--ナビバーの内容 -->
    <!--    </nav>-->
    <!--</div>-->
    <div class="container">
        @yield('content')
    </div>
</body>
</html>