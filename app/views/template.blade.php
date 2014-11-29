<!-- app/views/template.blade -->

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>
	    @section('title')
	        Thesis
	    @show
	</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
	    @section('css')
	        {{ HTML::style('css/pure-release-0.5.0/pure-min.css') }}
	        {{ HTML::style('css/style.css') }}
	    @show
</head>
<body>
    @section('navbar')
			<nav class="navbar navbar-inverse navbar-static-top" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">{{ $_ENV['Owner'] }}</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      
      <ul class="nav navbar-nav navbar-right">
      <li><a href="{{ URL::action('LogboekAdminController@index') }}">
		Logboek
    </a></li>
        <li><a href="{{ URL::action('LogboekAdminController@create') }}">
		Nieuw
    </a></li>
        <li><a href="{{ URL::to('logout') }}">Logout</a>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
    @show
    <h1>
        @yield('pagetitle')
    </h1>

    @yield('body')

</body>
@section('js')
    {{-- {{ HTML::script("...") }} --}}
@show
</html>