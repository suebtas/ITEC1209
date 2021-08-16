<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Bootstrap 4, from LayoutIt!</title>

    <meta name="description" content="Source code generated using layoutit.com">
    <meta name="author" content="LayoutIt!">

    <link href="{{url('bootstrap-5.0.2-dist/css/bootstrap.min.css');}}" rel="stylesheet">
    <link href="{{url('css/style.css');}}" rel="stylesheet">

  </head>
  <body>

	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="row">
					<div class="col-md-12" id="yellow"> <h1>yellow</h1>
					</div>
				</div>
				{{$slot}}{{--@yield('content')--}}               
			</div>
		</div>
	</div>

    <script src="js/jquery-3.6.0.js"></script>
    <script src="bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
	<script type="text/javascript">
		document.getElementById('yellow').style.backgroundColor = 'yellow' ;
	</script>
  </body>
</html>