<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>
        @yield('title','P3 Developer\'s Best Friend - Rajrupa Bakshi')
    </title>

    <meta charset='utf-8'>

    <meta name='viewport' content='width=device-width, initial-scale=1'>

    <link href='https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css' rel='stylesheet'>
    <link href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' rel='stylesheet'>

    <link href='/css/style.css' type='text/css' rel='stylesheet'>

    {{-- Yield any page specific CSS files or anything else you might want in the <head> --}}
    @yield('head')
</head>

<body>
    <header>
<!-- Static navbar -->
    <div class="navbar navbar-inverse navbar-static-top">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Togle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
            <a class="navbar-brand" id= "mainLogo" href="/">&lt;&#33;Developers's Best Friend&gt;</a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="/lorem">&#64;Lorem Ipsum Generator</a></li>
                <li><a href="/user">&#64;Random User Generator</a></li>
                <li><a href="/password">&#64;Password Generator</a></li> 
            </ul>
          </div><!--/nav-collapse -->
        </div>
    </div>
</header>

    <section class="content">
        {{-- Main page content will be yielded here --}}
        @yield('content')
    </section>

    <footer>
    <div class="container">
    <div class="row">
    <div class="col-md-12">
        &copy; {{ date('Y') }} Rajrupa Bakshi &nbsp;&nbsp;
        <a href='https://github.com/rajrupabakshi/p3' target='_blank'><i class='p3_github'></i> View on Github</a> &nbsp;&nbsp;
    </div>
    </div>
    </div>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    @yield('body')
</body>
</html>