<!DOCTYPE html>
<html>
<head>
	<title>Website for Barista Training and Coffee House</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
@include('base.style')
@yield('style')
</head>
<body>
@include('base.header')
@yield('content')

@include('base.footer')
@include('base.script')
@yield('script')

</body>
</html>