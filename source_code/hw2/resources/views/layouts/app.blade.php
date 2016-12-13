<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
	<style>
body {
  background-color:#111;
  margin:0px 0px;
  padding: 10px 0px 100px 0px;
  color:lightblue;
}


/* Required layout stuff */

td, th {
	padding: 0.75em 1.5em;
}
td
{
	color: #529388;
min-width:20px;
}
	tr:nth-child(2n-1) {
		background-color: #f5f5f5;
	}
	tr:hover {
		background-color: rgba(129,208,177,.3);
	}

th {
	min-width:125px;
	background-color:#31bc86;
	font-weight: bold;
	color: #fff;
	white-space: wrap;
}
tr{
	background-color: #fff; 
	transition: all .125s ease-in-out;
	&:nth-child(2n-1) {
		background-color: #f5f5f5;
	}
	&:hover {
		background-color: rgba(129,208,177,.3);
	}
}

a,
a:link,
a:visited {
	color: #529388;
}

a:hover,
a:focus {
	color: #FFF;
	text-decoration: none;
	background-color: #000;
}

.container
{
margin:auto;
width:87%;
}
#rolling-nav {
  font:normal 12px 'Trebuchet MS',Trebuchet,Arial,Sans-Serif;
  color:white;
background-color:#660505;
  text-transform:uppercase;
	/* outline:1px solid; */
	width:100%; /* Fixed width. Measure it manually */
	margin:0px auto;
}

#rolling-nav ul {
  height:50px;
  overflow:hidden;
}

#rolling-nav li {
  float:left;
  display:inline;
  list-style:none;
}

#rolling-nav a,
#rolling-nav a:before {
  display:block;
  margin:0px 0px;
  padding:0px 30px;
  line-height:50px;
  color:white;
  text-decoration:none;
  background-color:#900;
  background-image:-webkit-linear-gradient(top, #900 0%, #6A0808 50%, #620303 50%, #6A0808 100%);
  background-image:-moz-linear-gradient(top, #900 0%, #6A0808 50%, #620303 50%, #6A0808 100%);
  background-image:-ms-linear-gradient(top, #900 0%, #6A0808 50%, #620303 50%, #6A0808 100%);
  background-image:-o-linear-gradient(top, #900 0%, #6A0808 50%, #620303 50%, #6A0808 100%);
  background-image:linear-gradient(top, #900 0%, #6A0808 50%, #620303 50%, #6A0808 100%);
  -webkit-box-shadow:inset 0px 1px 0px rgba(255,255,255,0.1);
  -moz-box-shadow:inset 0px 1px 0px rgba(255,255,255,0.1);
  box-shadow:inset 0px 1px 0px rgba(255,255,255,0.1);
  position:relative;
  -webkit-transition:all 0.3s ease-in-out;
  -moz-transition:all 0.3s ease-in-out;
  -ms-transition:all 0.3s ease-in-out;
  -o-transition:all 0.3s ease-in-out;
  transition:all 0.3s ease-in-out;
}

#rolling-nav a:before {
  content:attr(data-clone);
  position:absolute;
  top:100%;
	right:0px;
  left:0px;
  display:block;
  background-color:white;
  background-image:-webkit-linear-gradient(top, #ddd, white);
  background-image:-moz-linear-gradient(top, #ddd, white);
  background-image:-ms-linear-gradient(top, #ddd, white);
  background-image:-o-linear-gradient(top, #ddd, white);
  background-image:linear-gradient(top, #ddd, white);
  border-top:2px solid rgba(0,0,0,0.2);
  color:#333;
}

.error
{
	background-color:red;
	color:black;
height:20px;
padding:10px 100px;;
margin:20px 0px;
font-weight:bold;
display:block;
}

.success
{
background-color:green;
color:yellow;
height:20px;
padding:10px 100px;;
margin:20px 0px;
font-weight:bold;
display:block;
}

#rolling-nav a:hover {
  margin-top:-50px;
  margin-bottom:1px;
}

	a {color:white; text-decoration:none;}
	</style>

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
<h1 style="padding-left:60px;"> Pokemon Club </h1>
<nav id="rolling-nav">
    <ul>
                    @if (Auth::guest())
        <li><a href="{{url('/login')}}" data-clone="Login">Login</a></li>
        <li><a href="{{url('/register')}}" data-clone="Register">Register</a></li>
                    @else

        <li><a href="{{url('user')}}" data-clone="Home">Home</a></li>
        <li><a href="{{url('/')}}" data-clone="Welcome page">Welcome Page</a></li>
        <li><a href="{{url('searchPokemon')}}" data-clone="Search">Search</a></li>
        <li><a href="{{url('pokemon')}}" data-clone="Admin">Admin</a></li>
        <li><a href="{{url('home')}}" data-clone="Contact">Contact</a></li>
<li><h1 style="margin-left:25px; margin-right:25px;"> Welcome {{Auth::user()->name}} </h1></li>
<li>
                                    <a href="{{ url('/logout') }}" data-clone="Logout"
                                        onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>

</li>

    </ul>
</nav>

    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Right Side Of Navbar -->
                <div class="menubar nav navbar-nav navbar-right">
<h1 style="padding-left:15px"> {{Auth::user()->name}} </h1>

                    @endif
                </div>
            </div>
        </div>
<div style="clear:both"></div>
		@if(Session::has('status'))
		<div class="error">{{Session::get('status')}}</div>
		@endif
		@if(Session::has('adminerror'))
		<div class="error">{{Session::get('adminerror')}}</div>
		@endif
		@if(Session::has('db_error'))
		<div class="error">{{Session::get('db_error')}}</div>
		@endif
		@if(Session::has('success'))
		<div class="success">{{Session::get('success')}}</div>
		@endif

    </nav>

    @yield('content')


		<h4 style="padding:10px 20px; text-align:right"> Developed by: Shobhit Agarwal<br/>USC ID: 6473476393</h4>

    <!-- Scripts -->
    <script src="/js/app.js"></script>
</body>
</html>
