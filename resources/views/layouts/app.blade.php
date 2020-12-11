<!DOCTYPE html>

<html lang="en">

    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"></script>
		
		<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/app.css') }}" />

        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Food Blog Home </title>
    </head>

    <body class="bg-2">
          <nav class="navbar navbar-expand-sm navbar-light bg-1 sticky-top" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19)">
			<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#myNavbar">
				<span class="navbar-toggle-icon"></span>                     
			</button>
			<a class="navbar-brand" href="#">Food Blog</a>
			</div>
			<div class="collapse navbar-collapse" id="myNavbar">
			<ul class="navbar-nav">
				<li class="nav-item"><a class="nav-link" href="{{ route('posts.index') }}" style="font-size: 15px">Posts</a></li>
				<li class="nav-tiem"><a class="nav-link" href="{{ route('register') }}" style="font-size: 15px">Sign Up</a></li>
			<li class="nav-item"><a class="nav-link" href="{{ route('login') }}" style="font-size: 15px">Login</a></li>
			</ul>
          </nav>
        <div>
          @yield('content')
        </div>
    </body>
</html>