<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>

	<title>{{ config('app.name', 'Laravel') }}</title>

	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="author" content="thomas.wangsa@gmail.com">

    

    <!-- Styles -->
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">


     <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/logo/indosat.png')}}" />

</head>


<style type="text/css">
	html, body {
        height: 100%!important;
        max-height: 2000px;
    }

	.wrapper {
		height: 100%;
		margin: 0 auto;
		max-width: 2000px;
		min-width: 1200px;
		width: 100%;
	}
	
	.mid_wrapper {
		height: 100%!important;
		background-color: white;
	}

	.body_wrapper {
		margin-top: 50px;
	}

	.center {
	    display: block;
	    margin-left: auto;
	    margin-right: auto;
	    width: 65%;
    }
	
	.footer {
	    position: absolute;
	    left: 0;
	    bottom: 0;
	    width: 100%;
	    color: gray;
	    text-align: center;
	    padding-bottom: 5px
	}
</style>
<body>

	<div class="wrapper">
		<div class="col-sm-3">
		</div>

		<div class="col-sm-6 mid_wrapper">
			<div class="body_wrapper">
                <a href="{{ route('login')}}">
				    <img class="img-responsive center"  
				    src="{{ asset('images/logo/finaccel.png')}}"
				    style="max-width: 350px"  / >
                </a>
				<div class="text-center"> 
					<h4> Fire Ants - AB Testing Platform </h4> 
				</div>
				@yield('content')
			</div>

			<div class="footer" style="margin-bottom: 10px"> 
				Finaccel System &#169; 2019 All Right Reserved 
			</div>

		</div>

		<div class="col-sm-3">
		</div>

		<div class="clearfix"> </div>

	</div>
	

</body>
</html>
