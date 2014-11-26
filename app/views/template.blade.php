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
	    @section('css')
	        {{ HTML::style('css/pure-release-0.5.0/pure-min.css') }}
	        {{ HTML::style('css/style.css') }}
	    @show
</head>
<body>
    @section('navbar')

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