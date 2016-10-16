<!DOCTYPE html>
<html lang="en">
<head>
	
	<title>
		@yield('title','P3 Developer\'s Best Friend - Rajrupa Bakshi')
	</title>

	<meta charset='utf-8'>

    <meta name='viewport' content='width=device-width, initial-scale=1'>

    <link href='https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css' rel='stylesheet'>
    <link href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css' rel='stylesheet'>

    <link href='/css/style.css' type='text/css' rel='stylesheet'>

    {{-- Yield any page specific CSS files or anything else you might want in the <head> --}}
    @yield('head')
</head>

<body>
	<header>
	<div class="container">
    <div class="row">
        <div class="twelve columns">
            <h1 id= "mainLogo"><a href="/">&lt;&#33;Developers's Best Friend&gt;</a></h1>
        
            <nav id="menu">
                <ul >
                    <li><a href="/lorem">&#64;Lorem Ipsum Generator</a></li>
                    <li><a href="/">&#64;Random User Generator</a></li>
                    <li><a href="/">&#64;Password Generator</a></li>
                   </ul>
            </nav>   
      </div>   
   	</div>
	</div><!-- end of container -->
	</header>

	<section class="content">
		{{-- Main page content will be yielded here --}}
        @yield('content')
	</section>

	<footer>
		&copy; {{ date('Y') }} Rajrupa Bakshi &nbsp;&nbsp;
        <a href='https://github.com/rajrupabakshi/p3' target='_blank'><i class='p3_github'></i> View on Github</a> &nbsp;&nbsp;
	</footer>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	@yield('body')
</body>
</html>