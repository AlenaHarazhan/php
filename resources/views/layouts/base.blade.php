<!DOCTYPE html>
<html>
<head>
	<title>Просто сайт</title>
	
<link id = "css1" rel="stylesheet" href="style.css" type="text/css" media="all" />
</head>
<body>
	<div id="wrap">

	<div id="header">

	<div id="nav">
		<ul>
			<li><a href="#">О нас</a></li>
			<li><a href="index.html">Контакты</a></li>
			<li><a href="#">Новости</a></li>
			<li><a href="#">Акции</a></li>
			
		</ul>
	</div>
	<div id="banner">
		<h1>Lorem ipsum dolor</h1>
	</div>
	</div>
	<div id="content">

	<div id="left">
		<div>
			
			<form action="action_page.php">
				
    <div class="container">

  @if(!Auth::user())
                        <li><a href="{{ route('login') }}">Login</a></li>
                        <li><a href="{{ route('register') }}">Register</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                               aria-expanded="false" aria-haspopup="true">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu">
                                <li>
                                    <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                          style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @endif
  </div>

  
</form>
		</div>
	</div>

	@yield('content')

	<div id="right">
		<div>
			<h1>Cras vestibulum</h1>
			<ul>
				<li>Lorem ipsum dolor sit amet.</li>
				<li>Ut nec arcu in est molestie placerat.</li>
				<li>Ut varius sem sed tincidunt tempor.</li>
				<li>Nunc ac lacus a elit tincidunt.</li>
				<li>Nam tincidunt lacus et nibh finibus.</li>
				<li>Sed laoreet odio at placerat.</li>
			</ul>
			<p>Nullam sodales euismod mi, a venenatis erat rutrum eget. Proin ut commodo risus, eu rutrum erat. Cras scelerisque, tortor eget facilisis interdum, leo ante aliquam lorem, sed pretium erat nulla et neque. Vestibulum eu fringilla elit. Sed rutrum a mi ut aliquam. Quisque porta dui et congue bibendum. Pellentesque commodo nunc quis ex suscipit, nec pellentesque arcu aliquet.</p>
			<p>Cras id augue in leo iaculis faucibus. In suscipit nibh et aliquam facilisis. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Suspendisse hendrerit ullamcorper urna, quis lacinia diam pretium id. Donec at purus a augue tempus vehicula a sit amet augue. Aliquam dolor mi, varius a odio a, fringilla volutpat urna. </p>
			

		</div>
	</div>

	<div id="footer">
		<div>
		2016, GeniusErEndDev, Inc. Suspendisse pellentesque augue porttitor eros dignissim, vitae mollis odio porttitor. Nullam sit amet diam sit amet tellus ullamcorper varius a vitae tellus. Suspendisse nec nisl lobortis, vehicula felis sed, ornare nulla. <br />
		Контакты: <a href="#">genius@imaguru.co</a>
	</div>
	</div>
		
	</div>
	
	</div>
	
	</div>

</body>
</html>
