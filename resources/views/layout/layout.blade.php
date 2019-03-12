<!DOCTYPE HTML>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SAMPLE</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    	@component('components.header')
    	@endcomponent

		@yield('content')	

    	@component('components.footer')
    	@endcomponent

</body>

</html>