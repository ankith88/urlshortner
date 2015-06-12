<html>
<head>
    <title>URL Shortener</title>

    <link href='//fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="{{asset('css/style.css')}}" type="text/css">
    <link rel="script" href="{{asset('js/logic.js')}}" >
    <meta name="_token" content="{{ csrf_token() }}"/>
</head>
<body>
<div class="container">
    <div class="content">

	@yield('content')

    </div>
</div>
</body>
</html>
